<?php

namespace App\Http\Controllers\AdminPanel\Room;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\add_hotel;
use App\Models\room;
use App\Models\roomType;

use App\Models\roomFacilites;
class RoomController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
public function add_room_type(){


   return view('Adminpanel.Room.room_type');

}
public function add_room_type_det(Request $request){
                        $this->validate($request, [
                        'room_types'    =>     'required|string
                        |regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/|
                        required|min:5',
                        'price'    =>     'required|integer',
                        ]);
      $req=$request->room_types;
 $data=DB::table('room_type')->where('room_type.room_types', $req)
                       ->select('room_types')->get();
                        $data1=count($data);
                        if($data1 >= 1 ){
  $dataq=DB::table('room_type')->select('room_type.*')->get();
                       $request->session()->flash('message.level', 'danger');
                       $request->session()->flash('message.content', 
                          'Sorry..! Duplicate Entry is Not Allowed.');
return view('Adminpanel.Room.room_type')->with(['dataq'=>$dataq,
           'Messag'=>'Sorry..! Duplicate Entry is Not Allowed']);

        }



    $room_types=DB::table('room_type')
                        ->insert(['room_types'=>$request->room_types,   
                        'price'=>$request->price]);
                        if($room_types){
                        $request->session()->flash('message.level', 'success');
                        $request->session()->flash('message.content', 'Added Successfully!');
  return view('Adminpanel.Room.room_type')->with('msg', 'Room Type added successfully');
                }
                }
 public function add_room(){
                           $hotelName=add_hotel::select('id', 'Hotel_name')->get();
                           $room_type=DB::table('room_type')->select('*')->get();

                             return view('Adminpanel.Room.add_room',
                                          ['hotelName'=>$hotelName,
                                           'room_type'=>$room_type]
                                           );

                                          }
  public function admin_add_room(Request $request){
                        $this->validate($request, [
                       'room_no'    =>     'required',

                       'hotel_id'  =>     'required',
                       'room_type_id'   =>  'required',
                       'image'    =>      'required',
                          ]);
  


    $add_room= new room;
    $roomstatus=0;

    $add_room->room_no=$request->room_no;
    $add_room->hotel_id=$request->hotel_id; 
    $add_room->room_type_id=$request->room_type_id; 
    $add_room->status=$roomstatus;


   $add_room->save();


   if($add_room){
    $getroomid=DB::table('room')->where('room.room_no', $request->room_no)->select('id')->get();
   $room_ii=$getroomid[0]->id;
    
        $image= $request->file('image');
        $new=rand(). '.'. $image->getClientOriginalExtension();
        $image->move(public_path("images/city"), $new);


      $post = DB::table('gallery')->insert([
              'galleries' => $new, 
              'hotel_id' =>$request->hotel_id,
              'room_id'=>$room_ii]);
            }
   if($post){
   $request->session()->flash('message.level', 'success');
   $request->session()->flash('message.content', 'One Record Added Successfully'); 
   return back()->with('addMessage', 'Hotel Added Successfully');
   
   }
   }

   
   public function manage_room(){
    $filter_room=DB::table('room')
                              ->join('hotel','hotel.id','=',
                               'room.hotel_id')

                              ->Join('city', function ($join){$join
                              ->on('hotel.city_id', '=', 'city.id'); })
                              
                              ->join('room_type', 'room_type.id', 'room.room_type_id')

                              ->select('room.id', 'room.room_no','city.city_name', 
                               'hotel.Hotel_name', 
                               'room_type.room_types', 'room_type.price', 'room.status')
                              ->OrderBy('room.id', 'DESC')

                              ->get();

        
 return view('Adminpanel.Room.admin_manage_room')->with('filter_room' , $filter_room);
 }
   
  public function delet_room($id){
    $filter_room=DB::table('room')->select('room.id')
                     
                              ->where('room.id', $id)
                              ->delete();
    $filter_room=DB::table('room')
                              ->join('hotel','hotel.id','=',
                               'room.hotel_id')

                              ->Join('city', function ($join){$join
                              ->on('hotel.city_id', '=', 'city.id'); })
                              
                              ->join('room_type', 'room_type.id', 'room.room_type_id')

                              ->select('room.id', 'room.room_no','city.city_name', 
                               'hotel.Hotel_name', 
                               'room_type.room_types', 'room_type.price', 'room.status')
                              ->OrderBy('room.id', 'DESC')

                              ->get();

        
 return view('Adminpanel.Room.admin_manage_room')->with('filter_room' , $filter_room);
  }       
  public function manage_room_hotel(){
                             $access=DB::table('room')
                              ->join('hotel', 'hotel.id', 'room.hotel_id')
                   
                               ->join('room_type', 'room_type.id', 'room.room_type_id')
                      ->Join('city', function ($join){$join
                              ->on('hotel.city_id', '=', 'city.id'); })
                               ->select('room.*', 'city.city_name', 'room.hotel_id', 'room_type.room_types', 'hotel.Hotel_name', 'hotel.id as hotel_idd')
                               ->get();
                        // print_r($access);
                        // exit();
            return view('Admin.Room.accessroom')->with('access' , $access);         
  } 
  public function admin_access_room($hotel_id){
                                  $access=DB::table('hotel')
                        
                                ->join('room', 'hotel.id', 'room.hotel_id')
                                ->join('room_type', function($join){
                                  $join->on('room.room_type_id', '=', 'room_type.id');
                                   })
                               ->select(
                                 'hotel.Hotel_name',
                               
                                 'hotel.id as hotel_idd',
                                 'hotel.Hotel_name',
                                 'room.*',
                                  'room_type.room_types', 
                                  'room_type.price',
                                  'room.id as room_id'
                                 
                                 )
                                 ->where('room.hotel_id',$hotel_id)
                                 ->OrderBy('room.room_no', 'ASC')

                                 ->get();
                             return view('Adminpanel.roomview.roomaccess')->with('manageroom',$access);
                                 }
        public function reserved_room($room_id){
    
          $status=DB::table('room')
          ->select('room.status')
          ->where('room.id', $room_id)
          ->update(['room.status'=>1]);
           return back();
        } 
           public function avilible_room($room_id){
             
          $status=DB::table('room')
                    ->select('room.status')
          ->where('room.id', $room_id)
          ->update(['room.status'=>0]);
           return back();
        }
                  
public function foom_type_facilites(){
  $room_type=DB::table('room_type')->get();
  
  return view('Admin.Room.Room_facilites')->with('room_type', $room_type);
}
public function add_roomfacilities(Request $request){
  $fass=DB::table('facilites')
                  ->where('facilites.room_facilties', $request->facilites)
                  ->select('room_facilties')->get();
                  $counc=count($fass);
                  if($counc >= 1){
                   $request->session()->flash('message.level', 'danger');
                       $request->session()->flash('message.content', 
                          'duplicate entry is not allowed.');
                       return redirect()->back();
                  }

else{
  $facilites= new roomFacilites;
  $facilites->room_facilties=$request->facilites;
  $facilites->f_room_ty_id=$request->f_roomty_id;
  $facilites->save();
if($facilites){
      $request->session()->flash('message.level', 'success');
                       $request->session()->flash('message.content', 
                          'Room facilites added.');
  return redirect()->back();
}
}
    }                        }
