@if(session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('status')}}</strong> 
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
</div>
@endif

@if(session('status1'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{session('status1')}}</strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
 <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
 </ul>
</div>
@endif