<form action="/admin/update_gallery_name_desc/{{$gallery_name_desc[0]['id']}}" method="post">
<div class="container-fluid bg-white p-4 ">
	<div class="row">
       <div class="col-md-12">
       	<div class="row">
       		@csrf
       	   <h2>Edit Gallery Name And Description</h2>

       	   <div class="col-md-6 mt-4">
       	   	  
       	   	  <h5>Gallery Name</h5>
       	   	  <input type="text" name="gallery_name" class="form-control p-2" value="{{$gallery_name_desc[0]['gallery_name']}}">

       	   </div>

       	    <div class="col-md-6 mt-4">
       	   	  
       	   	   <h5>Gallery Desc</h5>
       	   	  <input type="text" name="gallery_desc" class="form-control p-2 " value="{{$gallery_name_desc[0]['gallery_desc']}}">

       	   </div>

       	    <div class="col-md-12 mt-4 text-center">
       	   	  
       	   	  <button class="bg-success rounded p-2 ">Update name & Desc</button>

       	   </div>

        </div>
       </div>		
	</div>
</div>
</form>

