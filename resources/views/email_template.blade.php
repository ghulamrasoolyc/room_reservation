
<div class="mail-class">
	<div class="mail-class-border">
<p>Hello, <br/>I am <b>{{ $emails['name'] }}</b></p>
<br>
<p>my phone number is:</p>

<p><b>{{ $emails['message'] }}.</b></p>
<br>

<p>Origin:</p>

<p><b>{{ $emails['distinationcity'] }}.</b></p>
<br>


<p>Distenation:</p>

<p><b>{{ $emails['origincity'] }}.</b></p>
<br>


<p>Please give me response soon.Thank you.</p>

</div>
</div>

<style type="text/css">
	.mail-class{
		border: 1px solid grey;
		padding: 10px;

	}
	.mail-class-border{
		padding: 10px;
	}
</style>