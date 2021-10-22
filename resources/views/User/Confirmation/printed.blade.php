

  <link type="text/css" rel="stylesheet" href="{{asset('css')}}/book_style.css">
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
	</head>
		<form action="#" id="myfrm" >
	<body>

		<header>
			<h1>Invoice</h1>
			<address contenteditable>
			
			<p>Name:{{$name}}</p>
			
				<p>Address:&nbsp; {{$email}}</p>
				<p>Phone: &nbsp;{{$phone}}</p>

				<p>Arrival Time:&nbsp; {{$checkin}}</p>
				<p>Departure Time: &nbsp;{{$checkOut}}</p>
			</address>
			<span><img alt="" src="http://www.jonathantneal.com/examples/invoice/logo.png"><input type="file" accept="image/*"></span>
		</header>
		<article>
			<div class="hotel-no">
			<h1>Recipient</h1>
			<address>
				<p style="text-align:center"><?php echo $ourrecords[0]->Hotel_name?></p>
			</address>
		</div>
	
			<table class="inventory">
				<thead>
					<tr>
						<th><span contenteditable>Room Type</span></th>
						<th><span contenteditable>Description</span></th>
			
						<th><span contenteditable>Quantity</span></th>
						<th><span contenteditable>Price</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a class="cut">-</a><span contenteditable><?php echo $ourrecords[0]->room_types;?></span></td>
						<td><span contenteditable>Experience Review</span></td>
					
						<td><span contenteditable>{{$sumroom}}</span></td>
						<td><span data-prefix></span><span>{{$sumPrice}}</span></td>
					</tr>
				</tbody>
			</table>

		</article>
		<aside>
			<h1><span contenteditable>Additional Notes</span></h1>
			<div contenteditable>
				<p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
			</div>
		</aside>


	</body>
        
	
               <p align="center">
	    	<input type="button" class="printed-form-s" onclick="myPrint('myfrm')" value="Print Invoice "></p>
</form>
          <div class="back-button">
           <p align="center"><a href="{{route('home')}}" class="btn btn-primary">Back</a></p>
         </div>


</html>

        <script type="text/javascript" src="{{asset('javascript')}}/book.js"></script>
 <script>
        function myPrint(myfrm) {
            var printdata = document.getElementById(myfrm);
            newwin = window.open("");
            newwin.document.write(printdata.outerHTML);
            newwin.print();
            newwin.close();
        }
    </script>
    <style type="text/css">

.back-button {
    padding: 10px;
    font-size: 21px;
}
    </style>