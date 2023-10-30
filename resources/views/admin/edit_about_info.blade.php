
<form action="/admin/save_edit_about_info/{{$about_info[0]['about_info_id']}}" method="post" enctype="multipart/form-data">
	<div class="container-fluid bg-white p-4">
		<div class="row p-2">
			@csrf
			<div class="">
				<h3>Upadte About Info</h3>
			</div>
			
			<div class="col-md-6 mt-2">
				<h5>About Name</h5>
				<input type="text" name="about_name" class="form-control p-2" value="{{$about_info[0]['about_name']}}">
			</div>
			<div class="col-md-6 mt-2">
				<h5>About Title</h5>
				<input type="text" name="about_title" class="form-control p-2" value="{{$about_info[0]['about_title']}}">
			</div>
			<div class="col-md-6 mt-2">
				<h5>Enter Birth Date</h5>
				<input type="text" name="about_dob" class="form-control p-2" value="{{$about_info[0]['about_dob']}}">
			</div>
			<div class="col-md-6 mt-2">
				<h5>Personal Website</h5>
				<input type="text" name="about_website" class="form-control p-2" value="{{$about_info[0]['about_website']}}">
			</div>
			<div class="col-md-6 mt-2">
				<h5>Enter Age</h5>
				<input type="text" name="about_age" class="form-control p-2" value="{{$about_info[0]['about_age']}}">
			</div>
			<div class="col-md-6 mt-2">
				<h5>Enter Your Email</h5>
				<input type="text" name="about_email" class="form-control p-2" value="{{$about_info[0]['about_email']}}">
			</div>
			<div class="col-md-6 mt-2">
				<h5>Enter Mobile Number</h5>
				<input type="text" name="about_mobile" class="form-control p-2" value="{{$about_info[0]['about_mobile']}}">
			</div>
			<div class="col-md-6 mt-2">
				<h5>Enter Your City</h5>
				<input type="text" name="about_city" class="form-control p-2" value="{{$about_info[0]['about_city']}}">
			</div>
			<div class="col-md-6 mt-2">
				<h5>Enter Description</h5>
				<input type="text" name="about_desc" class="form-control p-2" value="{{$about_info[0]['about_desc']}}">
			</div>
			<div class="col-md-6 mt-2">
				<h5>Upload Image</h5>
				<input type="file" name="about_image" class="form-control p-2" value="{{$about_info[0]['about_image']}}">
			</div>
			<div class="col-md-12 mt-4 text-center">
				<button class="bg-success rounded p-2">Update Form</button>
			</div>
		</div>
	</div>
</form>