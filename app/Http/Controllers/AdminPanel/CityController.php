<?php
namespace App\Http\Controllers\AdminPanel;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\add_city;
use App\Models\add_hotel;
use Session;



class CityController extends Controller
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
 public function add_city(){

  return view('Adminpanel.city.add_city');
 }

  public function add_cities(Request $request){


      
       $this->validate(request(),[
            'city' => 'required|string
             |regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/|
              required|min:5'
        ]);


        $req=$request->city;
        $data=DB::table('city')->where('city.city_name', $req)->select('city_name')->get();
        $data1=count($data);
        if($data1 >= 1 ){
              $dataq=DB::table('city')->select('city_name', 'id', 'submitted_time')->get();
        $request->session()->flash('message.level', 'danger');
        $request->session()->flash('message.content', 'Sorry..!Duplicate Entry is not Allowed..');
          return view('Adminpanel.city.add_city')->with(['dataq'=>$dataq,
           'Messag'=>'Sorry..! Duplicate Entry is Not Allowed']);

        }
        else
        {
              $add_cities = new add_city;
              $add_cities->city_name=$request->city;
               $add_cities->save();
                  $dataq=DB::table('city')->select('city_name', 'id', 'submitted_time')->get();
         $request->session()->flash('message.level', 'success');
         $request->session()->flash('message.content', 'One Record Added Successfully!');
                  return view('Adminpanel.city.manage-city')
                  ->with(['dataq'=>$dataq, 'msg'=>'One Record Added Successfully']);
        }
        
                  
          
                  

          

                } 








public function manage_cities(){
               $manage_city= add_city::select(
              'id', 'city_name', 'submitted_time')->OrderBy('city.id', 'DESC')
               ->get();
return view('Adminpanel.city.manage-city')
             ->with('dataq', $manage_city);
}



 public function edit_city($id){

  
                $edit_city= add_city::select(
                'id', 'city_name',
                'submitted_time')
               ->where('id' ,$id)
               ->OrderBy('city.id', 'DESC')
               ->get();



               return view('Adminpanel.city.edit-city')->with('edit_cities' , $edit_city);
  }
public function update_city(Request $request){

  // $req=Session::put('request',$request);
   $update=$request->edit_code;
    $updateid=$request->iid;
            $this->validate(request(),[
            'edit_code' => 'required|string
             |regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/|
              required|min:5'
            ]);

   



      $req=$request->edit_code;
        $data=DB::table('city')->where('city.city_name', $update)->select('city_name')->get();
        $data1=count($data);
        if($data1 >= 1 ){
              $dataq=DB::table('city')->select('city_name', 'id', 'submitted_time')->get();
        // $request->session()->flash('message.level', 'danger');
        // $request->session()->flash('message.content', 'Sorry..!Update Failed.Because this record is already exist.');
          return view('Adminpanel.city.manage-city')->with(['dataq'=>$dataq,
           'Messag'=>'Sorry..! Duplicate Entry is Not Allowed']);

        }
        else
        {
           $update=DB::table('city')->select('city_name')->where('city.id', $updateid)
    ->update(['city.city_name'=>$update]);


                  $dataq=DB::table('city')->select('city_name', 'id', 'submitted_time')->get();
        //  $request->session()->flash('message.level', 'success');
        // $request->session()->flash('message.content', 'Updated Successfully!');
                  return view('Adminpanel.city.manage-city')
                  ->with(['dataq'=>$dataq, 'msg'=>'One Record Added Successfully']);
        }
        
                  
          



 
}


  public function delete_city($id){
               $delete_data= add_city::where(['id' => $id])->delete();
      
          $dataq=DB::table('city')->select('city_name', 'id', 'submitted_time')->get();
   
                  return view('Adminpanel.city.manage-city')
                  ->with(['dataq'=>$dataq, 'msg'=>'One Record Added Successfully']);



   

       

}               
}
