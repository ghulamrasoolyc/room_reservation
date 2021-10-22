<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Easybook - Hotel Booking Directory Listing Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="css/invoice.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <div class="invoice-box">
            <table  >
      
                <tr class="information">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                <br>
                  <a href="index.html"><img src="images/logo." alt=""></a>
                               
                                </td>
                                <td>
                                    Name:&nbsp;<?php echo $lastdata[0]->fname; ?><br>
                                 <!--    <a href="#"  style="color:#666; text-decoration:none">yourmail@domain.com</a> -->
                                    <br>
                                    <a href="#"  style="color:#666; text-decoration:none">Contact No.:&nbsp;<?php echo $lastdata[0]->phone; ?></a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="heading">
                    <td>
                        Payment Method
                    </td>
                    <td>
                        Check #
                    </td>
                </tr>
              
                <tr class="heading">
                    <td>
                        Option
                    </td>
                    <td>
                        Details
                    </td>
                </tr>
                <tr class="item">
                    <td>
                        Hotel 
                    </td>
                    <td>
                       <?php echo $fetch[0]->Hotel_name; ?><br>
                    </td>
                </tr>
                <tr class="item">
                    <td>
                        Room Type
                    </td>
                    <td>
                           <?php echo $room_types[0]->room_types; ?><br>
                    </td>
                </tr>
                    <tr class="item ">
                    <td>
                        Room No. 
                    </td>
                    <td>
                         <?php echo $fetch[0]->room_no; ?><br>
                    </td>
                </tr>
            
                <tr class="item ">
                    <td>Address
                    </td>
                    <td>
                          <?php echo $fetch[0]->address; ?><br>
                    </td>
                </tr>
                <tr class="item last">
                    <td>
                        Street
                    </td>
                    <td>
                       <?php echo $fetch[0]->street; ?><br>
                    </td>
                </tr>

                <tr class="total">
                    <td></td>
                    <td style="padding-top:50px;"> 
                          <?php echo $fetch[0]->price; ?><br>
                    </td>
                </tr>
            </table>
        </div>
            <a href="{{}}" class="print-button">Back</a> 
        <a href="javascript:window.print()" class="print-button">Print this invoice</a> 
    </body>
</html>



<style type="text/css">

@import url('https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&subset=latin-ext,vietnamese');  
    body{
            font-family: 'Nunito', sans-serif;
        text-align:center;
        color:#777;
        background:#f9f9f9;
    }
    body h1{
        font-weight:300;
        margin-bottom:0px;
        padding-bottom:0px;
        color:#000;
    }
@page { size: auto;  margin: 0mm; } 
    body h3{
        font-weight:300;
        margin-top:10px;
        margin-bottom:20px;
        font-style:italic;
        color:#555;
    }
    body a{
        color:#06F;
    }
    .invoice-box{
        max-width:800px;
        margin:30px auto 0;
        padding:80px 50px;
        border:1px solid #eee;
        font-size:16px;
        line-height:24px;
        background:#fff;
        color:#555;
    }
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }
    .invoice-box table tr.top table td{
        padding-bottom:60px;
    }
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    .invoice-box table tr.information table td{
        margin-top:50px;
        padding-bottom:40px;
    }
    .invoice-box table tr.heading td{
        background:#f9f9f9;
        border-bottom:1px solid #eee;
        font-weight:bold;
    }
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    .print-button {
        padding:13px 26px;
        text-decoration:none;
        color:#fff;
        background:#3AACED;
        display:inline-table;
        font-weight:900;
        margin:20px 0;
        font-size:13px;
        border-radius:4px;

    }
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }   
    .invoice-box table tr.information table td{
        margin-top:20px;
        padding-bottom:20px;
    }   
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
@media print {
    .print-button {
        display :  none;
    }
.invoice-box {
    border:none;
}
}
</style>