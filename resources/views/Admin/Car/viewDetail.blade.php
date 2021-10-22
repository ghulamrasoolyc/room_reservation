

@extends('Admin.Layout.sitelayout')
@section('content')

<body>
<div class="booking-detail" id="contened">
    <div class="container">

        <div class="whole-bkking-page" id="tblCustomers">
{{--
        <div class="inner-booking-details">
          <h4>Booking history</h4>
        </div> --}}

        <div class="over-lay-wrapper-booking">
            <div class="booking-details-form">
             <div class="header-bookingss">
                <h4>Booking history</h4>

             </div>
             <div class=" body-survey-reports">
                <div class="header-bookings">

                    <h4>{{$MercedesDataa->model}} </h4>
                 </div>
              <table>
               <tr >

                <td class="td-display">Name : &nbsp; &nbsp;{{$MercedesDataa->fname}} </td>
                <td class="td-display">Last Name:  &nbsp; &nbsp;{{$MercedesDataa->lanme}}</td>
               </tr>
              </table>
              <table class="second-tbale mt-3">
                <tr >
                 <td class="td-display">Limousine Model:  &nbsp; &nbsp;{{$MercedesDataa->model}}</td>
                 <td class="td-display">Phone: &nbsp; &nbsp;{{$MercedesDataa->phone}}</td>
                </tr>
             </table>
             <table class="second-tbale mt-3">
                <tr >
                 <td class="td-display">Pick up(Loc): &nbsp; &nbsp; {{$MercedesDataa->from_to}}</td>
                 <td class="td-display">Drop Off(Loc): &nbsp; &nbsp;{{$MercedesDataa->dest}}</td>
                </tr>
            </table>
            <table class="second-tbale mt-3">
                <tr >
                 <td class="td-display">Date: &nbsp; &nbsp;{{$MercedesDataa->date}}</td>
                 <td class="td-display">Time: &nbsp; &nbsp;{{$MercedesDataa->time}}</td>
              </tr>
               </table>


             </div>
            </div>

        </div>
    </div>
    <div class="move-justify">
   <div class="back-button-salert">
  <a href="{{route('admin.dashboard')}}" class="btn-btn-show">back</a>
   </div>

   <div class="back-button-salert">
    <button id="btnExport" class="btn-btn-show" >Download</button>
    </div>
    </div>

    </div>

</div>
</body>
<div id="editor"></div>

@endsection

@section('footer')
@include('Admin.site.footer')
@endsection


<style>

td {
    margin-top: 0;
    margin-bottom: 2rem;
    color: #999;
    padding: 9px;

    width: 145px;
    padding-left: 23px;
}




    table{
        width: 100%;
    }
    table td{
border: 1px solid grey;

    }
    .booking-detail {
    margin: 50px 0;
}

.booking-details-form {
    border: 1px solid #c3bcbcb5;
    padding: 30px;


    background: #c7b9b91c;
}

.header-bookingss {
    border-bottom: 1px solid #d8cfcf;
}


.inner-booking-details h4 {
    text-align: center;
    padding: 0 0 20px 0;
    font-weight: 700;
    color: #d7b98b;
    font-size: 29px;
    letter-spacing: normal;
}

/* .body-survey-reports {
    display: flex;
    justify-content: space-around;
    padding: 38px;
} */


.header-bookings {
    text-align: center;

}

.header-bookingss {
    text-align: center;

}

.over-lay-wrapper-booking {
    padding: 0 40px 0 40px;
}


.whole-bkking-page {
    border: 1px solid #cac7c7;
    padding: 41px;
}


.header-bookingss h4 {
    font-family: "Work Sans";
    font-style: normal;
    font-size: 20px;
    color: #999;
    line-height: 1.8em;
    font-weight: bold;


}
.header-bookings h4 {
    font-family: "Work Sans";
    font-style: normal;
    font-size: 20px;
    color: #999;
    line-height: 1.8em;
    font-weight: bold;


}

@media(max-width: 500px){
    a.btn-btn-show {
    background: #d7b98b;
    padding: 8px 30px 8px 30px !important;
    border-radius: 6px;
    text-decoration: none;
    text-align: center;
    color: white;
    font-size: 17px;
    color: white;
    cursor: pointer;
}
    .move-justify {
    padding: 0 12px !important;
}
    .over-lay-wrapper-booking {
  padding: 0 !important;
}

.whole-bkking-page {
    border: 1px solid #cac7c7;
    padding: 14px !important;
}

.booking-details-form {
    border: 1px solid #e6dede;
    padding: 30px;

    background: #ffffff;
}

.body-survey-reports {
    display: flex;
    justify-content: space-around;
     padding: 0px
}



.body-survey-reports {

padding: 0 !important;
display: grid;
}

.body-survey-reports h5 {
    outline: dotted;
    padding: 8px;
}
}



.body-survey-reports h5 {
    font-family: "Work Sans";
    font-style: normal;
    font-size: 17px;
    color: #999;
    line-height: 1.8em;
    padding-top: 10px;
    line-height: 36px;
    outline: double;
}



button.btn-btn-show {
    background: #d7b98b;
    padding: 10px 50px 10px 52px;
    border-radius: 6px;
    text-decoration: none;
    text-align: center;
    color: white;
    font-size: 17px;
    border: none;
    cursor: pointer;
}
a.btn-btn-show {
    background: #d7b98b;
    padding: 10px 50px 10px 52px;
    border-radius: 6px;
    text-decoration: none;
    text-align: center;
    color: white;
    font-size: 17px;
    cursor: pointer;
}



.back-button-salert {
    padding: 20px 0;
}

.butoon-downmload {
    padding: 10px 0;
}

input#btnExport {
    display: none;
}
.butoon-downmload button {
    background: #d7b98b;
    /* padding: inherit; */
    border-radius: 6px;
    text-decoration: none;
    text-align: center;
    color: white;
    font-size: 17px;
    border: navajowhite;
    float: right;
    padding: 10px 10px;
    cursor: pointer;
}
.move-justify {
    display: flex;
    justify-content: space-between;
    padding: 23px 0;
}
.body-survey-reports {
    /* padding: 7px 70px 7px 58px; */
    display: grid;
}

td.td-display-details {
    width: 266px;
    text-align: -webkit-left;
}


</style>


















    <input type="button" id="btnExport"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblCustomers')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("cutomer-details.pdf");
                }
            });
        });
    </script>
</body>
</html>
