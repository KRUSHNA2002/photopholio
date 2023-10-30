<form action="/admin/save_about_slider" method="post" enctype="multipart/form-data">
	<div class="container-fluid bg-white p-4">
		<div class="row p-2">
			@csrf
			<div class="">
				<h3>Upload About Slider</h3>
			</div>
			<div class="col-md-6 mt-2">
				<h5>Slider Description</h5>
				<input type="text" name="slider_desc" class="form-control p-2">
			</div>
			<div class="col-md-6 mt-2">
				<h5>Enter Name</h5>
				<input type="text" name="slider_name" class="form-control p-2">
			</div>
			<div class="col-md-6 mt-2">
				<h5>Enter CEO</h5>
				<input type="text" name="slider_ceo" class="form-control p-2">
			</div>
			<div class="col-md-6 mt-2">
				<h5>Upload Image</h5>
				<input type="file" name="slider_image" class="form-control p-2">
			</div>
			<div class="col-md-12 mt-4 text-center">
				<button class="bg-success rounded p-2">Submit Form</button>
			</div>
		</div>
	</div>
</form>

<br><br>
<h1 class="text-center">SLIDER TABLE</h1>
<br><br>

<table class="table table-bordered " style="border:2px solid black;width: 100%;">
    <tr>
    	<th>Action</th>
    	<th>Srno</th>
    	<th>Slider Name</th>
    	<th>Slider Desc</th>
    	<th>Slider Image</th>
    </tr>
   @foreach($about_slider as $key => $row)
        
        <tr>
    	<th>
    		<a href="/admin/save_about_slider_delete/{{$row['about_slider_id']}}" style="text-decoration:none;">
    			<button class=" btn btn-sm bg-danger p-2">DELETE</button>
    		</a>
    	</th>
    	<th>{{$key+1}}</th>
    	<th>{{$row['slider_name']}}</th>
    	<th>{{$row['slider_desc']}}</th>
    	<th>{{$row['slider_image']}}</th>
    </tr>

   @endforeach

</table>
