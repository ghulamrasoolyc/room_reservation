@extends('User.site.layout')
 
 @section('content')

 @include('User.layout.header')

<div class="attractions-page">
    
         <div class="about lobster-font-family">
            <div class="container">
       
        
        
               <div class="gallery lobster-font-family" id="blog">
            <div class="container">
                <h2 class="text-calitalize text-center">Attractions</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pic-one" style=" background-image: url("{{asset('images/city/pic6.jpg')}}"><h4>Deasai (Skardu)</h4></div>
                        <div class="pic-two"><h4>Shosher Lake Skardu</h4></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pic-three active"><h4>Manthoka Lake </h4></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pic-four"><h4>Manthoka Lake</h4></div>
                        <div class="pic-five"><h4>Shangrilla </h4></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="main-blog-attraction">
        <div class="row">
        <div class="col-md-6 col-12">
        <h3>About Sadpara Lake</h3>
   <p> Satpara sar Lake (Urdu: سدپارہ سر جھیل‎) is a natural lake near Skardu, Gilgit-Baltistan, Pakistan, which supplies water to Skardu Valley. It is fed by the Satpara Stream. Satpara Lake is situated at an elevation of 2,636 meters (8,650 ft) above sea level and is spread over an area of 2.5 km².
   </p>
        </div>
        <div class="col-md-6 col-12">
        <div class="attraction1">
       About Sadpara Lake
        </div>
        </div>
        </div>
        </div>
        
        
        
        
                <div class="main-blog-attraction">
        <div class="row">
             <div class="col-md-6 col-12">
        <div class="attraction2">
       Katpanah Desert
        </div>
        </div>
        
        
        
        <div class="col-md-6 col-12">
        <h3>Katpanah Desert</h3>
  <p>
  The Cold Desert, also known as the Katpana Desert or Biama Nakpo, is a high-altitude desert located near Skardu, Gilgit−Baltistan, Pakistan. The desert contains large
  sand dunes that are sometimes covered in snow during winter. Situated at an elevation of 2,226 metres (7,303 ft) above sea level, the Cold Desert is one of the highest
  deserts in the world. While the desert technically stretches from the Khaplu Valley to Nubra in Indian-administered Ladakh, the largest desert area proper is found in Skardu and Shigar Valley, both within Pakistani-administered territory. The portion of the desert that is most frequented by tourists is located near the Skardu Airport.[2]
  </p>
        </div>
   
        </div>
        </div>
        
        
        
        
        
        
         <div class="main-blog-attraction">
        <div class="row">
        <div class="col-md-6 col-12">
        <h3>Khaplu Fort</h3>
     <p>Khaplu Palace (Urdu: خپلو محل‎; Balti: ڈوقسہ کھر‎), locally known as Yabgo Khar[1] (meaning "The fort of Doqsa"), is an old fort and palace located in Khaplu, in the Gilgit-Baltistan region of northern Pakistan. The palace, considered an architectural heritage and a tourist attraction,[2] was built in the mid-19th century, replacing an earlier fort located nearby. It served as a royal residence for the Raja of Khaplu.
     </p>
        </div>
        <div class="col-md-6 col-12">
        <div class="attraction3">
     Khaplu Palace
        </div>
        </div>
        </div>
        </div>
        
        
    <!--<div class="container">-->
        
    <!--    <div class="attraction-overlay">-->
    <!--        <h4>Popular destinations</h4>-->
    <!--    </div>-->
    <!--    @foreach ($attrations as $attrations)-->
            
     
    <!--    <div class="row " style="padding-top:30px">-->
    <!--        <div class="rooow">-->
    <!--    <div class="col-md-6 col-12 col-sm-12">-->
    <!--        <div class="left-content">-->
    <!--            <h4>{{$attrations->attractionname}}</h4>-->
    <!--            <p>{{$attrations->detail}}</p>-->
    <!--            <p>Location: {{$attrations->attraction_location}}</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="col-md-6 col-12 col-sm-12">-->
    <!--        <div class="right-content">-->
    <!--            <img src="{{asset('images/city')}}/{{$attrations->image}}">-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="borderd-bottom">-->
    <!--</div>-->
    <!--    </div>-->

        
    <!--    @endforeach-->
    <!--</div>-->
</div>



</div>
</div>
    @endsection

@section('footer')
@include('User.layout.footer')
@endsection


<style>
/* about */

.about {.

    background-image: url(../imgs/bg.jpg);
    background-size: 100% 90%;
    background-repeat: no-repeat;
    margin-bottom: 100px;
    position: relative;
    overflow: hidden;
}

.about h2 {
    margin-bottom: 50px
}

.about h2 + img {
    position: absolute;
    height: 200px;
    width: 200px;
    top: -20px;
    left: -30px;
    z-index: -1
}

.about h4 {
    color: white;
    margin-bottom: 25px
    font-weight:bold;
}

.about p {
    line-height: 1.9;
    margin-bottom: 70px;
}

.about button {
    background-color: #ffcc33;
    border: none;
    transform: skew(-25deg);
}

.about button a {
    color: #000;
    padding: 10px 50px;
    display: block;
    float: left;
    transform: skew(25deg);
}

.about .container > .row:first-of-type {
    margin-bottom: 50px
}

.about .container > .row:first-of-type .img {
    background-image: url('images/city/attraction1.png');
    background-size: cover;
    height: 400px;
    width: 659px;
    position: relative;
}

.about .container h2:last-of-type {
  
}

.about .container > .row:last-of-type .img {
    height: 450px;
    width: 580px;
    right: 120px;
    background-image: url('images/city/attraction2.png');
    background-size: cover;
    position: relative
}

.about .block {
    background-color: white;
    width: 850px;
    padding: 30px 40px;
    text-align: center;
    position: relative;
    top: 50px;
    border: 1px solid black;
}

.about .block > div {
    width: 70%
}

.about .block strong {
    font-size: 43px;
    font-weight: normal;
}

.about .block h5 {
    color: #cc3300;
}

.about .block p {
    margin: 0 auto;
    margin-bottom: 20px
}

.about .block img {
    position: absolute;
    height: 200px;
    width: 200px;
    top: 50px;
    right: -40px;
    display: none;
}

/* gallery */

.gallery {
    
    background-image: url('images/city/attraction3.png');
    background-size: cover;
}

.gallery h2 {
    margin-bottom: 50px
}

.gallery .col-lg-4 > div{
    height: 300px;
    width: 100%;
    margin-bottom: 30px;
    position: relative
}
.attraction1{
        padding-top: 20px;
    padding-left: 10px;
    font-size: 20px;
    font-weight: bold;
    color: white;
    
    height: 283px !important;
    background-size: cover !important;

    background-image: url("{{asset('images')}}/attract13.png") !important;   
}
.attraction2{
        padding-top: 20px;
    padding-left: 10px;
    font-size: 20px;
    font-weight: bold;
    color: white;
    height: 283px !important;
    background-size: cover !important;

    background-image: url("{{asset('images')}}/attract15.png") !important;   
}
.attraction3{
        padding-top: 20px;
    padding-left: 10px;
    font-size: 20px;
    font-weight: bold;
    color: white;
    
    height: 283px !important;
    background-size: cover !important;

    background-image: url("{{asset('images')}}/atttrat12.png") !important;   
}
.gallery .col-lg-4 > div h4 {
    position: relative;
    top: 40px;
    z-index: 3;
    text-align: center;
}

.gallery .col-lg-4 > div.active {
    height: 630px
}

.gallery img {
    width: 100%;
    height: 100%;
}

.gallery .pic-one,
.gallery .pic-two,
.gallery .pic-three,
.gallery .pic-four,
.gallery .pic-five {
    background-position: center;
    background-size: cover;
}

.pic-one {
    background-image: url("{{asset('images')}}/attraction1.png") !important;
}

.gallery .pic-two {
    background-image: url('{{asset('images')}}/attraction2.png')!important;
}
.gallery .pic-three {
    background-image: url('{{asset('images')}}/attraction7.png')!important;
}
.gallery .pic-four {
    background-image: url('{{asset('images')}}/attraction8.png')!important;
}
.gallery .pic-five {
    background-image: url('{{asset('images')}}/attraction5.png')!important;
}



@media screen and (max-width: 480px) {
  .main-blog-attraction{
  
   padding-top: 17px !important;
}
}





/* slider */
</style>