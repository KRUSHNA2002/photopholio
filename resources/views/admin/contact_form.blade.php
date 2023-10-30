

<div class="container-fluid bg-white p-4">
	<div class="row">
		<div class="col-md-12">
			<h1>Contact Details</h1>

      <table class=" table table-bordered mt-4 rounded" style="border:2px solid black;">
	       <tr>
		     <th>Action</th>
		     <th>Sr.No</th>
		     <th>Contact Name</th>
		     <th>Contact Email</th>
		     <th>Contact Subject</th>
		     <th>Contact Message</th>
	        </tr>
     @foreach($contact_form as $key => $row)

       <tr>
		  <th>
		  	<a href="/admin/contact_form_delete/{{$row['id']}}" style="text-decoration:none;">DELETE</a>
		  </th>
		  <th>{{$key+1}}</th>
		  <th>{{$row['contact_name']}}</th>
		  <th>{{$row['contact_email']}}</th>
		  <th>{{$row['contact_subject']}}</th>
		  <th>{{$row['contact_message']}}</th>
	   </tr>

    @endforeach
    </table>
			
		</div>
	</div>
</div>
