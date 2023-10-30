<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>



<div id="design">
<form action="/save_user_login" method="post">
<div class="container" id="login_page">
	<div class="row d-flex justify-content-center p-5  " style="width:90%;height:500px">
		<div class="col-md-7 text-center mt-3 rounded p-5" style="border: 1px solid black;box-shadow: 0px 20px 1px 4px;">
			<div class="text-center mt-5">
				<h1>Login Form</h1>
				<hr>
			</div>
			@csrf
			<div class="mt-5">
				<input type="text" name="mobile" placeholder="Enter mobile" class="form-control" required>
			</div>
			<div class="mt-3">
				<input type="password" name="password" placeholder="Enter password" class="form-control" required>
			</div>
			<div class="mt-4">
				<button class="rounded" >Login Now</button>
			</div>
			<div class="mt-4 mb-5">
				Create a new Account ? <a  onclick="toggle()"> Resister Here </a>
			</div>
		</div>
	</div>
</div>
</form>

<form action="/save_user_resistration" method="post">
<div class="container mt-4" id="resister_page" style="display:none;">
	<div class="row d-flex justify-content-center p-5  " style="width:90%;height:500px">
		<div class="col-md-7 text-center mt-3 rounded p-5" style="border: 1px solid black;box-shadow: 0px 20px 1px 4px;">
			<div class="text-center mt-5">
				<h1>Resistration Form</h1>
				<hr>
			</div>
			<div class="mt-5">
				@csrf
				<input type="text" name="name" placeholder="Enter name" class="form-control">
			</div>
			<div class="mt-3">
				<input type="text" name="mobile" placeholder="Enter mobile" class="form-control">
			</div>
			<div class="mt-3">
				<input type="password" name="password" placeholder="Enter password" class="form-control">
			</div>
			<div class="mt-4 ">
				<button class="rounded" >Resistrater Now</button>
			</div>
			<div class="mt-4 mb-3">
				You are Already Created Account ? <a onclick="toggle()"> Login Page </a>
			</div>
		</div>
	</div>
</div>
</form>
</div>
<script type="text/javascript">
	
function toggle()
{
	$('#login_page').toggle();
	$('#resister_page').toggle();
}


</script>


</body>
</html>