<form action="/admin/save_gallery_name_desc" method="post">
<div class="container-fluid bg-white p-4 ">
	<div class="row">
       <div class="col-md-12">
       	<div class="row">
       		@csrf
       	   <h2>Gallery Name And Description</h2>

       	   <div class="col-md-6 mt-4">
       	   	  
       	   	  <h5>Gallery Name</h5>
       	   	  <input type="text" name="gallery_name" class="form-control p-2">

       	   </div>

       	    <div class="col-md-6 mt-4">
       	   	  
       	   	   <h5>Gallery Desc</h5>
       	   	  <input type="text" name="gallery_desc" class="form-control p-2 ">

       	   </div>

       	    <div class="col-md-12 mt-4 text-center">
       	   	  
       	   	  <button class="bg-success rounded p-2 ">Save name & Desc</button>

       	   </div>

        </div>
       </div>		
	</div>
</div>
</form>

