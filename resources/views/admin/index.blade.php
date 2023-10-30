
<form action="/admin/save_name_title" method="post">
<div class=" container bg-white p-4 rounded">
  <div class="row ">
    @csrf
    <div class="mt-2 text-center">
    <h3> USER NAME AND CAPTION</h3>
    </div>
     <div class="mt-2">

       <h4>Enter Your Name </h4>
       <input type="text" name="name" class="form-control p-2">
     </div>
     <div class="mt-2">
       <h4>Enter Your Title </h4>
       <input type="text" name="title" class="form-control p-2">
     </div>
     <div class="mt-4 text-center">
       <button type="submit" class="bg-success p-2 rounded">Submit</button>
     </div>

  </div>
</div>
</form>

