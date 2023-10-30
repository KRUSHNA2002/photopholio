
<form action="/admin/save_upload_gallery_image" method="post" enctype="multipart/form-data">
<div class="container-fluid bg-white p-3">
	<div class="row">
		@csrf
		<div class="">
			<h3>Upload Gallery Image</h3>
		</div>
		<div class="mt-2">
			<h5>upload your Gallery image</h5>
			<input type="file" name="gallery_image" class="form-control">
		</div>
		<div class="mt-3 text-center ">
			<button class="bg-success btn p-2">Save Gallery Image</button>
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
   @foreach($gallery_image as $key => $row)

    <tr class="text-center">
		<td>
			<a href="/admin/delete_upload_gallery_image/{{$row['id']}}" style="text-decoration: none;">
				<button class=" btn p-2 rounded btn-sm text-white bg-danger">DELETE</button>
			</a>
		</td>


		<td>{{$key+1}}</td>
		<td><img src="/images/{{$row['gallery_image']}}" style="width:70px;height:70px;border-radius:5px;"></td>
	</tr>

   @endforeach
</table>
