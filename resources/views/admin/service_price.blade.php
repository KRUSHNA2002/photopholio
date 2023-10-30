<form action="/admin/save_service_price" method="post">
<div class="container-fluid bg-white p-4 ">
	<div class="row">
       <div class="col-md-12">
       	<div class="row">
       		@csrf
       	   <h2>Photography Type And Its Price</h2>

       	   <div class="col-md-6 mt-4">
       	   	  
       	   	  <h5>Photography Type</h5>
       	   	  <input type="text" name="photo_type" class="form-control p-2">

       	   </div>

       	    <div class="col-md-6 mt-4">
       	   	  
       	   	   <h5>Photography Price</h5>
       	   	  <input type="text" name="photo_price" class="form-control p-2 ">

       	   </div>

       	    <div class="col-md-12 mt-4 text-center">
       	   	  
       	   	  <button class="bg-success rounded p-2 ">Save price</button>

       	   </div>

        </div>
       </div>		
	</div>
</div>
</form>

<table class="table table-bordered mt-4" style="border:2px solid black">
	<tr class="text-center">
		<th>Action</th>
		<th>Sr.no</th>
		<th>Photography Type</th>
		<th>Photography Price</th>
	</tr>
	@foreach($service_price as $key => $row)
      
      <tr class="text-center">
		<td>
			<a href="/admin/save_service_price_delete/{{$row['id']}}" style="text-decoration:none;">
				DELETE
			</a>
		</td>
		<td>{{$key+1}}</td>
		<td>{{$row['photo_type']}}</td>
		<td>{{$row['photo_price']}}</td>
	</tr>

	@endforeach
</table>