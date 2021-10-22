<?php

namespace App\Http\Controllers\vandor\Addhotell;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Galleries;
use App\Models\add_city;
use App\Models\roomType;
use App\Models\add_hotel;
use App\Models\room;
use DB;
use Auth;

use App\Models\roomFacilites;
use App\Models\attractions;
class AddhotelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

   public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.  
     *
     * @return \Illuminate\Http\Response
     */
    public function vandor_dashboard(){
           $userid = Auth::user()->id;
           $Hotel_books=DB::table('hotel')->join('users', 'hotel.users', '=', 'users.id')
           ->select('image', 'Hotel_name', 'address', 'users.name as userName', 'image')
           ->where('hotel.users', $userid)
           ->first();
 


     
       return view('vandor.Hotel.dashboard')->with(['Hotel_book'=>$Hotel_books]);

    }


    public function addHotelRes(){
        $city=DB::table('city')->select('city.*')->get();
            

      $usersId=Auth::user()->id;
       
      $check=DB::table('hotel')->where('hotel.users', $usersId)->select('hotel.*')->first();
      
      $roolAdmin=DB::table('hotel')->where('hotel.users', $usersId)->select('id')->first();
     $countHotel= count((array)$roolAdmin);

      return view('vandor.Hotel.addHotel')->with(['countHotel'=> $countHotel, 'check'=>$check, 'city'=>$city]);
    }
    public function vandor_edits_hotel(Request $request){
    
    $this->validate($request,[
          'Hotel_name'=>'required|string|min:3',
          'address'=>'required',
          'contact'=>'required|min:11|max:11',
         'image'=>'required'
  
          ]);

        $update=DB::table('hotel')->where('hotel.id', $request->iid)
        ->update(['Hotel_name'=>$request->hotelName, 'address'=>$request->address, 'contact'=>$request->contact]);
        if($update){
  
  

  
                  $request->session()->flash('message.level', 'success');
                  $request->session()->flash('message.content', 'Your Hotel has been Edit  successfully'); 
                 return redirect()->back();
        } 
        else
        {
          $request->session()->flash('message.level', 'danger');
          $request->session()->flash('message.content', 'Edit Failed'); 
         return redirect()->back();
        }
    }

  public function vandor_add_hotel(Request $request){


    $this->validate($request,[
          'hotelName'=>'required|string|min:3',
          'address'=>'required',
          'contact'=>'required|min:11|max:11',
         'image'=>'required'
  
          ]);

       

        $hotteldata=DB::table('hotel')
        ->where('hotel.Hotel_name', $request->hotelName)->select('Hotel_name')->get();
  
        $data12=count($hotteldata);

        if($data12 >= 1 ){

  $request->session()->flash('message.level', 'danger');
  $request->session()->flash('message.content', 'Sorry..Hotel Duplicate Entry is not allowed'); 
        
       return redirect()->back();

        }




else  {
   $userid = Auth::user()->id;

    $image= $request->file('image');

    $new=rand(). '.'. $image->getClientOriginalExtension();

      $image->move(public_path("images/city"), $new);

    // $file = $request->file('image');
    // $name = time() . '.' . $file->getClientOriginalExtension();

    // $request->file('image')->move("fotoupload", $name);

      $roomsta=0;

      $add_hotel= new add_hotel; 
      $add_hotel->Hotel_name=$request->hotelName;
      $add_hotel->address=$request->address;
      $add_hotel->city_id=$request->city;
      $add_hotel->users=$userid;
      $add_hotel->contact=$request->contact;
      $add_hotel->image=$new; 
      $add_hotel->status=$roomsta; 
      $add_hotel->save();
}
      if($add_hotel){

   

                $request->session()->flash('message.level', 'success');
                $request->session()->flash('message.content', 'Your Hotel has been registered successfully'); 
               return redirect()->back();
              } 
              }

              public function add_vandor_room(){
                $userid = Auth::user()->id;
   
                $selecteroomddata=DB::table('hotel')
               ->join('room', 'room.hotel_id', '=', 'hotel.id')
               ->join('room_type', function($join){
                 $join->on('room.room_type_id', 'room_type.id');
                   })     

               ->where('hotel.users', $userid)
              ->select('room_type.room_types', 'room_type.price','room.*')
                       ->get();
  
                       $selecteroomdda=DB::table('hotel')
                         ->join('users', 'hotel.users', 'users.id')   
        
                       ->where('hotel.users', $userid)
                      ->select('hotel.Hotel_name')
                               ->get();

                               $hot=count($selecteroomdda);
                         
                 if($hot !== 1 ){
                   return redirect()->back()->with('success', 'Please Add hotel and try again');
                    }
                  else{                 
                return view('vandor.Hotel.addroom')->with(['selecteroomddata'=>$selecteroomddata,
                'userid'=>$userid]);
                  }
              }


               public function vandor_view_hotel(){
                 $userid = Auth::user()->id;

                  $hotel=DB::table('hotel')
        
                     ->where('hotel.users', $userid)
                         ->select('Hotel_name')
                           ->limit(1)
                         ->get();
                     $hotels=$hotel['0']->Hotel_name;
    

              $hotelxs=DB::table('hotel')
        
                     ->where('hotel.users', $userid)
                     ->join('users', 'users.id', 'hotel.users')
                         ->select('Hotel_name')
                           ->limit(1)
                         ->get();
                $testHotel=count($hotelxs);


              if($testHotel >=1){
         



           $selecteddata=DB::table('room')
          ->join('hotel', 'hotel.id', '=', 'room.hotel_id')
         ->join('room_type', 'room_type.id', 'room.room_type_id')

          ->where('hotel.users', $userid)
          ->select('room.*','hotel.id as Hotel_id', 'hotel.Hotel_name',
            'room_type.room_types', 'hotel.users')
          ->OrderBy('room.id', 'DESC')
          ->get();
     return view('vandor.Hotel.ViewHotel')->with(['selecteddata'=>$selecteddata]);
               }
         
             else
             {
              return back();
             }
                 }




          public function vandor_attractions(){
            return view('vandor.Hotel.attractions');
          }
          public function add_attractions(Request $request){
      $userids = Auth::user()->id;
      $hotel=DB::table('hotel')->where('hotel.users',$userids)->select('hotel.id')->get();
      $H_id=$hotel['0']->id;
        $this->validate($request, [

                'filename' => 'required',
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        
        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/city', $name);  
                $data[] = $name;  
            }
         }

         $form= new attractions();
         $form->filename=json_encode($data);
         $form->user_id=$userids;
         $form->hotel_id=$H_id;
      
        $form->save();

        return back()->with('success', 'Your images has been successfully');
          }


     public function vandor_booking_view(){





                $userid = Auth::user()->id;
   
                $selecteddata=DB::table('booking')
                ->join('hotel', 'hotel.id', '=', 'booking.hotel_id')
                ->where('hotel.users',$userid)
               ->join('room_type', 'room_type.id', '=', 'booking.room_type_id')
               ->select('booking.*', 'room_type.room_types')
               ->get();

              $sumtotal=DB::table('booking')
              ->join('hotel', 'hotel.id', '=', 'booking.hotel_id')
                ->where('hotel.users',$userid)
             ->select('sumPrice')
                      ->sum('sumPrice'); 


              return view('vandor.Hotel.booking')
                                   ->with(['selecteddata'=>$selecteddata,
                                            'sumtotal'=>$sumtotal, 
                                            
                ]);

               }


     public function vandor_room_view(){
                $userid = Auth::user()->id;
   
               $selecteroomddata=DB::table('hotel')
              ->join('room', 'room.hotel_id', '=', 'hotel.id')
              ->join('room_type', function($join){
                $join->on('room.room_type_id', 'room_type.id');
                  })     



              ->where('hotel.users', $userid)
             ->select('room_type.room_types','room.*')
                      ->get();
 
              return view('vandor.Hotel.room')
                                   ->with(['selecteroomddata'=>$selecteroomddata,
                                            'userid'=>$userid
                                           
                ]);
               }
               public function vandor_room_reserved($id){
                $userid = Auth::user()->id;
   
               $selecteroomddata=DB::table('room')
                      ->select('room.id', 'status')
                       ->where('room.id', $id)
                      ->update(['status'=> 1]);
                      return redirect()->back();
             

               }

            public function vandor_room_avaikl($id){
                $userid = Auth::user()->id;
   
               $selecteroomddata=DB::table('room')
                      ->select('room.id', 'status')
                      ->where('room.id', $id)
                      ->update(['status'=> 0]);
                      return redirect()->back();
             

               }


 public function vandor_add_else_hotel(Request $request){ 
       $this->validate($request,[
             'room_no'=>'required|integer',
              'types'=>'required',
        
              'image'=>'required'
              ]);
       
         $roomstatus=0;
            
         try{
         $userids = Auth::user()->id;   

         // **********************Room Type******************************
                       $roomType= new roomType; 
                      $roomType->room_types=$request->types;
                      $roomType->price=$request->price;
                     $roomType->vander_id=$userids;
                      $roomType->save();
                 
         } 
         catch (\Exception $e){
          DB::rollBack();

          $request->session()->flash('message.level', 'danger');
          $request->session()->flash('message.content', 'Something went wrong'); 
          return redirect()->back();
       
      }

        //************************************ */ Room************************

                   $userids = Auth::user()->id;
                  $room_type_ids=DB::table('room_type')
                  ->where('room_type.room_types',$request->types)
                  ->select('room_type.id as room_type_id')->get();
                  $room_ty=$room_type_ids[0]->room_type_id;

  
                  $getHotel=DB::table('hotel')->where('hotel.users',$userids)
                  ->select('hotel.id')
                  ->get();
                  $get=$getHotel[0]->id;

       
                  try{
                   $rooms= new room; 
                   $rooms->room_no=$request->room_no;
                   $rooms->hotel_id=$get;
                   $rooms->room_type_id=$room_ty;
                   $rooms->vander_id=$userids;
                   $rooms->status=$roomstatus;
                   $rooms->save();

                  }
                  catch (\Exception $e){
                    DB::rollBack();
          
                    $request->session()->flash('message.level', 'danger');
                    $request->session()->flash('message.content', 'Something went wrong'); 
                    return redirect()->back();  
                }


          if($rooms){
                $getroomid=DB::table('room')->where('room.room_no', $request->room_no)->select('id')->get();
                $room_ii=$getroomid[0]->id;
                    }

/// ****************************Gallery


      $userid = Auth::user()->id;
      try{
               $image= $request->file('image');
               $new=rand(). '.'. $image->getClientOriginalExtension();
               $image->move(public_path("images/city"), $new);
                $post = DB::table('gallery')->insert([
                   'galleries' => $new, 
                   'hotel_id' =>$get,
                   'room_id'=>$room_ii]);
                }
                catch(\Exception $e){
                      DB::rollback();
                      $request->session()->flash('message.level', 'danger');
                      $request->session()->flash('message.content', 'Something went wrong'); 
                      return redirect()->back();  
                }

//********************************** */ Fething Data


       if($post){
          $selecteroomddata=DB::table('hotel')
                  ->join('room', 'room.hotel_id', '=', 'hotel.id')
                  ->join('room_type', function($join){
                    $join->on('room.room_type_id', 'room_type.id');
                      })     
                  ->where('hotel.users', $userid)
                 ->select('room_type.room_types', 'room_type.price', 'room.*')
                          ->get();
     
                        }
                $request->session()->flash('message.level', 'success');
                $request->session()->flash('message.content', 'Room Added Successfully'); 
                   return redirect()->back()->with(['selecteroomddata'=>$selecteroomddata,
                   'userid'=>$userid]);

                  }













        public function add_vandor_attration(){



          return view('vandor.Hotel.add_attraction');
             }

             public function addHotelattraction(Request $request){

              $image= $request->file('image');

              $new=rand(). '.'. $image->getClientOriginalExtension();
            $roomsta=0;
                $image->move(public_path("images/city"), $new);


              $rooms= new attractions; 
              $rooms->attractionname=$request->attractionname;
              $rooms->attraction_location=$request->attraction_location;
              $rooms->detail=$request->detail;
              
              $rooms->image=$new;
    
              $rooms->save();

              if($rooms){
                return redirect()->back();
              }

             }
 
             }