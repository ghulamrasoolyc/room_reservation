<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Remove route cache
Route::get('/clear-route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return 'All routes cache has just been removed';
});

//Remove config cache
Route::get('/clear-config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache has just been removed';
}); 

// Remove application cache
Route::get('/clear-app-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache has just been removed';
});

// Remove view cache
Route::get('/clear-view-cache', function() {
    $exitCode = Artisan::call('view:clear');
    return 'View cache has jut been removed';
});
    // Route::get('/' , 'UserPanel\hotel\HotellistingController@index')->name('index');

Auth::routes();
   Route::get('/add-hotel', 'addhotelCotroller@index')->name('add-hotel');

   Route::get('/', 'HomeController@index')->name('home');
Route::get('/user/logout' , 'Auth\LoginController@userlogout')->name('user.logout');

         
 //Admin panel
   Route::prefix('admin')->group(function(){
    //Admin register and Login
   Route::get('/login', 'Auth\Admin\adminLoginController@showLoginForm')->name('admin.login');
   Route::post('/login', 'Auth\Admin\adminLoginController@login')->name('admin.login.submit');
   Route::get('/', 'AdminController@index')->name('admin.dashboard');
   Route::get('/logout', 'Auth\Admin\adminLoginController@logout')->name('admin.logout');

  //Cities..........
    Route::post('/cities', 'AdminPanel\CityController@add_cities')->name('admin.addCities');
    Route::get('/cities', 'AdminPanel\CityController@add_city')->name('add_citys');
    Route::get('view-cities', 'AdminPanel\CityController@manage_cities')->name('admin.manage-city');
    Route::get('/edit-city/{id}', 'AdminPanel\CityController@edit_city')->name('admin.editcity');
    Route::get('/delete-city/{id}', 'AdminPanel\CityController@delete_city')->name('admin.deletecity');
    Route::post('/update-city', 'AdminPanel\CityController@update_city')->name('admin.update');


  //Hotel.............
    Route::get('/hotel-resturant', 'AdminPanel\HotelController@add_form_hotel')->name('add.hotel');
    Route::post('/hotel-resturant', 'AdminPanel\HotelController@add_hotel_resturant')->name('admin.added_hotel');
    Route::get('/manage/hotel', 'AdminPanel\HotelController@manage_hotel')->name('admin.manage-hotel');
    Route::get('/eid/hotel{id}', 'AdminPanel\HotelController@admin_editedhotel')->name('admin.editedhotel');
   Route::post('/update/hotel', 'AdminPanel\HotelController@update_editedhotel')->name('update.added_hotel');
   Route::get('/update/hotel{id}', 'AdminPanel\HotelController@deletedhotel')->name('admin.deletedhotel');
Route::get('/status/active{id}', 'AdminPanel\HotelController@admi_active_hotel')->name('admin.status.active');
Route::get('/status/inactive{id}', 'AdminPanel\HotelController@admi_Inactive_hotel')->name('admin.status.inactive');



    // Room Type
    Route::get('/room/type', 'AdminPanel\Room\RoomController@add_room_type')->name('add.room_type');
    Route::get('/room/facilites','AdminPanel\Room\RoomController@foom_type_facilites')->name('add.facilities');
   Route::post('/add-room-type', 'AdminPanel\Room\RoomController@add_room_type_det')->name('admin.add.room_type');
  Route::post('/add-facilites-type', 'AdminPanel\Room\RoomController@add_roomfacilities')->name('admin.ads.facilites');

  //Room...............
    Route::get('/add/room', 'AdminPanel\Room\RoomController@add_room')->name('add.room');
      
    Route::get('/manage/room', 'AdminPanel\Room\RoomController@manage_room')->name('amanage.room');

    Route::post('/admin/add-room', 'AdminPanel\Room\RoomController@admin_add_room')->name('admin.add.room');
    Route::get('/edit/room{id}', 'AdminPanel\Room\RoomController@edit_room')->name('admin.editroom');
   Route::get('/edit/room{id}', 'AdminPanel\Room\RoomController@delet_room')->name('admin.deleteroom');
    Route::get('/admin.manage.room', 'AdminPanel\Room\RoomController@manage_room_hotel')->name('manage.room.hotel');
   Route::get('/admin-access/room/{hotel_id}', 'AdminPanel\Room\RoomController@admin_access_room')->name('admin.access.room');
  Route::get('/availible/room/{room_id}', 'AdminPanel\Room\RoomController@reserved_room')->name('update.status.reserved');
  Route::get('/reserved-room/{room_id}', 'AdminPanel\Room\RoomController@avilible_room')->name('update.status.availible');
   




   //................................................... Car 

    Route::get('/Add/Car', 'AdminPanel\CarController@add_Model_car')->name('add_Model_car');
    Route::get('/view/Car', 'AdminPanel\CarController@view_Model_cars')->name('view_Model_car');
  Route::post('/Add/car-model', 'AdminPanel\CarController@AddLimousines')->name('admin.AddLimousine');

         Route::get('/eid/location{id}', 'AdminPanel\CarController@admin_editcars')->name('admin.editcar');
       Route::get('/delete/car{id}', 'AdminPanel\CarController@deletecar')->name('admin.deletecar');
       Route::post('/update/car', 'AdminPanel\CarController@admin_uopdatelocation')->name('admin.update_car');

         // Transictions..........................................................

   Route::get('admin/transictions', 'AdminPanel\Payment\paymentController@transictions')->name('view.transictions');
    Route::get('/admin/hotel-wise-transiction', 'AdminPanel\Payment\paymentController@hotel_wise')->name('hotel.wise.payment');
Route::get('/hotel-payment-detail/{booking_id}', 'AdminPanel\Payment\paymentController@admin_seperate_hotel')->name('admin.seperate.hotel');
   });  
 
   //User Panel Start
   // Route::get('/user/activation/{token}', 'Payment\paymentController@payents');
    Route::post('hotel-listing', 'UserPanel\hotel\HotellistingController@hotel_listing')->name('user.search.listing');

 Route::get('hotel-list{hotel_id}', 'UserPanel\hotel\HotellistingController@listing_single_hotel')
 ->name('user.view.city');

 Route::get('/view/attractins', 'UserPanel\hotel\attractionsController@attractions_view')->name('attractions.view');
  

    Route::get('single-hotel/{id}', 'UserPanel\hotel\HotellistingController@listing_single_hotel')->name('find.hotel');

    Route::get('book-room{id}', 'UserPanel\hotel\BookingController@bookingRoom')->name('book.room');
 
    Route::post('final/booking', 'UserPanel\hotel\BookingController@roomgenBooking')->name('room_bookin_detail');

    Route::get('view/invoice', 'UserPanel\hotel\BookingController@invoice_booking')->name('invoice.booking');
    Route::get('room/detail{room_type_id}', 'UserPanel\hotel\HotellistingController@reservation_room')->name('room_reservation');
 // Route::post('search/hotel', 'UserPanel\hotel\HotellistingController@search_speccificHotel')->name('search.one.hotel');
 Route::get('room-booking{room_type_iid}', 'UserPanel\hotel\BookingController@room_booking_details')->name('room_booking_det');    

Route::get('/room/booking', 'UserPanel\hotel\HotellistingController@room_booking');

Route::post('/hotel-rating', 'UserPanel\hotel\HotellistingController@hotelSearch_ratings')->name('hotelSearch_rating');



  Route::post('booking-room','UserPanel\hotel\HotellistingController@final_details')->name('get_price_id');
// Route::get('myform/ajax/{id}',
//   array('as'=>'myform.ajax','uses'=>'UserPanel\hotel\HotellistingController@getCityList'));

Route::post('final-detail/', 'UserPanel\hotel\BookingController@final_details')->name('next.final.details');
                       // Transiction 
Route::post('bookconfirmations/', 'UserPanel\Payment\paymentController@next_confirmations')->name('next.confirmations');

Route::post('/print/slip', 'UserPanel\Payment\paymentController@print_slip')->name('print.slip');

     //..................................... Room Type USer Side.........................

Route::post('/search-room-types', 'RoomType\RoomTpeController@roomType_seacrh')
->name('hirir_roomType_seacrh');



Route::get('/sendemail', 'payment\paymentController@index');
Route::post('/sendemail/send', 'payment\paymentController@send');

//.............................. vandor Route...................
   Route::get('vandor/dashboard', 'vandor\Addhotell\AddhotelController@vandor_dashboard')->name('vandor.dashboard');
 Route::post('vandor/add/hotel', 'vandor\Addhotell\AddhotelController@vandor_add_hotel')->name('vandor.add.hotel');
 Route::get('vandor/add/room', 'vandor\Addhotell\AddhotelController@add_vandor_room')->name('add.vandor.room');
 Route::get('vandor/add/Attraction', 'vandor\Addhotell\AddhotelController@add_vandor_attration')->name('add.vandor.attration');
 

 Route::post('vandor/add/room', 'vandor\Addhotell\AddhotelController@vandor_add_else_hotel')->name('vandor.add_else.hotel');
 Route::post('vandor/add/attractions', 'vandor\Addhotell\AddhotelController@addHotelattraction')->name('vandor.add.hotel.attraction');
 


 Route::get('vandor/view/hotel', 'vandor\Addhotell\AddhotelController@vandor_view_hotel')->name('vandor.room.view');
Route::get('vandor/attractions', 'vandor\Addhotell\AddhotelController@vandor_attractions')->name('vandor.attractions');
Route::post('add/attractions', 'vandor\Addhotell\AddhotelController@add_attractions')->name('add.attractions');
Route::get('vandor/register', 'vandor\Authentications@vandor_regiister')->name('vandor.regiister');



Route::get('add/hotels', 'vandor\Addhotell\AddhotelController@addHotelRes')->name('add.vandor.hotel');

Route::post('Edit/attractions', 'vandor\Addhotell\AddhotelController@vandor_edits_hotel')->name('vandor.edits.hotel');
Route::get('vandor/booking', 'vandor\Addhotell\AddhotelController@vandor_booking_view')->name('vandor.booking.view');
Route::get('/dashboard', 'vandor\Addhotell\AddhotelController@hotel_dashboard')->name('hotel.dashboard');




Route::get('vandor/room', 'vandor\Addhotell\AddhotelController@vandor_room_view')->name('vandor.view');

Route::get('vandor/reserved/room{id}', 'vandor\Addhotell\AddhotelController@vandor_room_reserved')->name('selecteddata.reserved.vandor.city');

Route::get('vandor/availible/room{id}', 'vandor\Addhotell\AddhotelController@vandor_room_avaikl')->name('selecteddata.avail.vandor.city');

Route::get('/car-module', 'User\UserController@home')->name('car_rantels');

Route::post('rantel/car', 'Car\CarController@viewCar')->name('car.viewcars');



     Route::get('Book.car/{id}', 'Car\CarController@car_booking')->name('car.booking');
     Route::post('Booking-car', 'Car\CarController@user_booking')->name('user.last.booking');
       

           Route::post('/confirm-booking', 'User\UserController@booking_cont')->name('booking_cont');


           // Limousine Services Module
                  Route::get('/Add/location', 'Admin\CarController@Add_car')->name('add_car');
       Route::post('/location', 'Admin\CarController@admin_add_car')->name('admin.add_car');
       Route::get('/car/details', 'Admin\CarController@viewCars')->name('viewCar');
       Route::get('/eid/location{id}', 'Admin\CarController@admin_editcars')->name('admin.editcar');
       Route::get('/delete/car{id}', 'Admin\CarController@deletecar')->name('admin.deletecar');
       Route::post('/update/car', 'Admin\CarController@admin_uopdatelocation')->name('admin.update_car');
       Route::get('/Add/Car', 'Admin\CarController@add_Model_car')->name('add_Model_car');
       Route::post('/Add/car-model', 'Admin\CarController@AddLimousines')->name('admin.AddLimousine');
       Route::get('/view/Car', 'Admin\CarController@view_Model_cars')->name('view_Model_car');
     Route::get('/view/payment', 'Admin\CarController@admin_view_payment')->name('admin.view.payment');

     Route::get('/detail/booking/limousine{id}', 'Admin\CarController@adminhistoryhirerdetailss')->name('admin.historyhirerdetailss');

     Route::get('/view/Mercedes-detail', 'Admin\CarController@Mercedes')->name('admin.Mercedes');
     Route::get('/view/Mercedes_S', 'Admin\CarController@Mercedes_S')->name('admin.Mercedes_S');
     Route::get('/view/Mercedes_v-detail', 'Admin\CarController@Mercedes_v')->name('admin.Mercedes_v');
     Route::get('/view/Toyota-booking-detail', 'Admin\CarController@Toyota')->name('admin.Toyota');
     Route::get('/booking/limousine{id}', 'Admin\CarController@viewlimousinebookinghistory')->name('admin.viewAllbooking');

     Route::get('/view-hirer/data, {pay_id}', 'Admin\CarController@MercedesView')->name('admin.MercedesView');
           Route::get('/confirmation,{user_id}', 'Admin\CarController@bookingConfirmation')->name('admin.bookingConfirmations');
               Route::get('/release,{user_id}', 'Admin\CarController@bookingConfirmationsrelase')->name('admin.bookingConfirmationsrelase');


             Route::get('/delete/record,{pay_id}', 'Admin\CarController@deletepayment')->name('admin.deletepayments');


Route::get('locale/{locale}', function($locale){
      Session::put('locale', $locale);
      return redirect()->back();
});


Route::get('/reset_passwords', function () {
    return view('vandor.password.resetpassword');
})->name('reset_password');
Route::get('registered-hotel', 'User\UserController@regiteredHotel')->name('registered_hotel');

Route::post('password-resets','User\UserController@passworderser')->name('resetpass');
Route::post('resets-password-','User\UserController@reset_password_vandors')->name('reset_password_vandor');
