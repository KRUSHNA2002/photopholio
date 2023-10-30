
<form action="/admin/save_upload_photo" method="post" enctype="multipart/form-data">
<div class="container-fluid bg-white p-3">
	<div class="row">
		@csrf
		<div class="">
			<h3>Upload Image</h3>
		</div>
		<div class="mt-2">
			<h5>upload your image</h5>
			<input type="file" name="image" class="form-control">
		</div>
		<div class="mt-3 text-center ">
			<button class="bg-success btn p-2">Save Image</button>
		</div>
	</div>
</div>
</form>

<br>
<br>

<table class="table table-bordered mt-3 p-3 " style="border: 2px solid black;">
	<tr class="text-center">
		<th>ACTION</th>
		<th>SR.NO</th>
		<th>IMAGES</th>
	</tr>
   @foreach($images as $key => $row)

    <tr class="text-center">
		<td>
			<a href="/admin/delete/{{$row['image_tbl_id']}}" style="text-decoration: none;">
				<button class=" btn p-2 rounded btn-sm text-white bg-danger">DELETE</button>
			</a>
		</td>


		<td>{{$key+1}}</td>
		<td><img src="/images/{{$row['image']}}" style="width:70px;height:70px;border-radius:5px;"></td>
	</tr>

   @endforeach
</table>