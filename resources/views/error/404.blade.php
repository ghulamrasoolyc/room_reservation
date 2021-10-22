
{{-- <div class="Error-handling">
    <div class="container">
   <p>Rocord not find..Please try again</p>
   <div class="button-error">
    <a href="" class="btn-btn-error">Back</a>
   </div>
    </div>
</div> --}}

<div class="errord" style="background-image: url({{asset('images')}}/404.png)">
<div class="internal-eoor">

</div>
<div class="right-image">
   <a href="{{route('home')}}"> Back to Home</a>
  </div>
</div>




<style>
.errord {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
    height: 100%;
    background-repeat: no-repeat;
}
.right-image {
    position: absolute;
    right: 45%;
    top: 50%;
    transform: translate(-10%, -10%);

  -webkit-border-radius: 60px;
  border-radius: 60px;
  border: none;
  color: #eeeeee;
  cursor: pointer;
  display: inline-block;
  font-family: sans-serif;
  font-size: 20px;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  
}

@keyframes glowing {
        0% {
          background-color: #2ba805;
          box-shadow: 0 0 5px #2ba805;
        }
        50% {
          background-color: #49e819;
          box-shadow: 0 0 20px #49e819;
        }
        100% {
          background-color: #2ba805;
          box-shadow: 0 0 5px #2ba805;
        }
      }
      .right-image a{
        animation: glowing 1300ms infinite;
        
    padding: 17px !important;
    text-decoration: none !important;
    color: white !important;
    border-radius: 7px !important;
      }


</style>