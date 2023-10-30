

<form action="/admin/save_edited_name_title/{{$photography[0]['id']}}" method="post">
<div class=" container bg-white p-4 rounded">
  <div class="row ">
    @csrf
    <div class="mt-2 text-center">
    <h3> UPDATE NAME AND CAPTION</h3>
    </div>
    <div class="mt-2">
       <input type="text" name="id" class="form-control p-2" value="{{$photography[0]['id']}}">
     </div>
     <div class="mt-2">
       <h4>Enter Your Name </h4>
       <input type="text" name="name" class="form-control p-2" value="{{$photography[0]['name']}}">
     </div>
     <div class="mt-2">
       <h4>Enter Your Title </h4>
       <input type="text" name="title" class="form-control p-2" value="{{$photography[0]['title']}}">
     </div>
     <div class="mt-4 text-center">
       <button type="submit" class="bg-success p-2 rounded">UPDATE</button>
     </div>

  </div>
</div>
</form>


<!-- <div class="container-fluid">
  <div class="row">
     <div class="col-md-12 text-">
        <a href="/admin/destroy">
         <button class="bg-danger p-2 mt-3 rounded">Log out</button>
        </a>
     </div>
  </div>
</div> -->