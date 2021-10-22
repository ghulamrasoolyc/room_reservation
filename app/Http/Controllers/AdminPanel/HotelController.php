<?php

namespace App\Http\Controllers\AdminPanel;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\add_city;
use App\Models\add_hotel;
class HotelController extends Controller
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
    
 
 public function add_form_hotel(){
              $fetch_city_name= add_city::select(
              'id', 'city_name')
               ->get();

  return view('Adminpanel.Hotel.add_hotel')->with('fetch_city_name', $fetch_city_name);
 }


  public function add_hotel_resturant(Request $request){

$activestatus=0;

 $this->validate($request, [
      'name'    =>     'required|string',

     'city_id'  =>     'required|not_in:-- Choose User Type --',
     'street'   =>     'required',
     'address'  =>     'required',
     'contact'  =>        'required:min:11',
     'image'    =>      'required',


        ]);


        $hotteldata=DB::table('hotel')
        ->where('hotel.Hotel_name', $request->name)->select('Hotel_name')->get();
  
        $data1=count($hotteldata);

        if($data1 > 0 ){

  $request->session()->flash('message.level', 'danger');
  $request->session()->flash('message.content', 'Sorry..Duplicate Entry is not allowed'); 
        
       return redirect()->back();

}
     else{
          
  $image= $request->file('image');

  $new=rand(). '.'. $image->getClientOriginalExtension();

$image->move(public_path("images/city"), $new);
       $addHotel= new add_hotel; 
       $addHotel->Hotel_name=$request->name;

       $addHotel->city_id=$request->city_id; 

       $addHotel->address=$request->address; 
       $addHotel->contact=$request->contact; 
         $addHotel->status=$activestatus; 
       
       $addHotel->image=$new; 
       $addHotel->save();





  $request->session()->flash('message.level', 'success');
  $request->session()->flash('message.content', 'One Record Added Successfully'); 
  return redirect()->back()->with('success', 'your message,here'); 
      

      
    }
       
     }
public function manage_hotel(){

                    $manage_hotel=DB::table('hotel')
                        ->join('city','city.id','=','hotel.city_id')
                        ->select('hotel.*', 'city.city_name')->get();
   
return view('Adminpanel.Hotel.manage_manageHotel')->with('manage_hotel',$manage_hotel);
}

public function admin_editedhotel($id){

$editHotel=DB::table('hotel')->where('hotel.id', '=', $id)->select('hotel.*')->first();
return view('Adminpanel.Hotel.edithotel')->with('editHotel', $editHotel);
}
 public function update_editedhotel(Request $request){

          $this->validate($request, [
      'name'    =>     'required|string
                        |regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/|
                        required|min:5',

     'street'   =>     'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/| required|min:5',
     'address'  =>     'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/| required|min:5',
     'contact'  =>        'required:min:11',
 
        ]);


// $hname=$request->name;

//         $data=DB::table('hotel')->where('hotel.Hotel_name', $hname)->select('Hotel_name')->get();

//         $data1=count($data);
//         if($data1 >= 1 ){



//         $request->session()->flash('message.level', 'danger');
//         $request->session()->flash('message.content', 'Sorry..!Update Failed.Because this record is already exist.');
//           return back()->with('Adminpanel.Hotel.edithotel')->with(
//            'Messag', 'Sorry..! Duplicate Entry is Not Allowed');

//         }
//         else
//         {
   $update=DB::table('hotel')->select('Hotel_name', 'address', 'street', 'contact')->where('hotel.id', $request->iiid)
    ->update([ 'Hotel_name'=>$request->name, 'address'=>$request->address, 'street'=>$request->street, 'contact'=>$request->contact]);

       $manage_hotel=DB::table('hotel')
                        ->join('city','city.id','=','hotel.city_id')
                        ->select('hotel.*', 'city.city_name')->get();
   


         $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Updated Successfully!');
                  return view('Adminpanel.Hotel.manage_manageHotel')
                  ->with(['manage_hotel'=>$manage_hotel, 'msg'=>'One Record Added Successfully']);
   }





  public function deletedhotel($id){
               $delete_data= add_hotel::where(['id' => $id])->delete();
      
       $manage_hotel=DB::table('hotel')
                        ->join('city','city.id','=','hotel.city_id')
                        ->select('hotel.*', 'city.city_name')->get();

                  return view('Adminpanel.Hotel.manage_manageHotel')
                  ->with(['manage_hotel'=>$manage_hotel, 'msg'=>'One Record Added Successfully']);



   

       

} 
         
  public function admi_active_hotel($id){
    $active=DB::table('hotel')->select('hotel.status')
                              ->where('hotel.id', $id)
                              ->update(['hotel.status'=>1]);
                            return redirect()->back();
  } 

    public function admi_Inactive_hotel($id){
    $active=DB::table('hotel')->select('hotel.status')
                              ->where('hotel.id', $id)
                              ->update(['hotel.status'=>2]);
                                   return redirect()->back();
  } 
}
