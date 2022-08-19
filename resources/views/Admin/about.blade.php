@extends('layout.admin_app')
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
@section('content')
<div class="card-body">
 @include('include.warning')
    <form action="{{route('dashboard.about_me.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-10">
            <div class="col-md-6">
                <div class="form-floating mb-5 mb-md-0">
                    <input class="form-control"  name="title" id="title" type="text" />
                    <label for="title" class>Title</label>
                </div>
            </div> 
          <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" value="{{ old('fullname') }}" name="fullname" id="fullname" type="text" />
                    <label for="fullname" class>Full name</label>
                </div>
            </div> 
            <div class="col-md-6">
                <label class="mt-1"for="inputFirstName">DOB</label>
                <div class="form-floating">
                     <input class="mt-1" type="date" id="dob" 
                            min="1996-01-01" max="2030-12-31"value="1998-01-02" placeholder="Start date" name="dob" required />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input class="form-control" name="age" id="age" type="text"  />
                    <label for="age" >Age</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" id="address" name="address" type="text" />
                    <label for="address"><Address>Address</Address></label>
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" name="number" id="number" type="telephone" />
                    <label for="number">Phone number</label>
                </div>
            </div> 
        </div>
        <div class="col-md-6">
        <div class="form-floating mb-3">
            <input class="form-control" name="inputEmail" id="inputEmail" type="email"  />
            <label for="inputEmail" placeholder=" ">Email address</label>
        </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating mb-3 mb-md-0">
               <input class="mt-5"type="file" class="form-control" name="profile_image" id="profile_image" />
                <label class="mt-1" for="description1">Upload Profile image</label>
            </div>
        </div> 
        <div class="col-md-6">
            <div class="form-floating mb-3 mb-md-0">
                <textarea class="form-control" name="description1" id="description1" type="longtext"></textarea>
                <label for="description1">Describtion 1</label>
            </div>
        </div> 
        <div class="col-md-6">
            <div class="form-floating mb-3 mb-md-0">
                <textarea class="form-control" name="description2" id="description2" type="longtext"></textarea>
                <label for="description1">Describtion 2</label>
            </div>
        </div> 
      
        <div class="col-md-6">
            <div class="form-floating mb-3 mb-md-0">
            <textarea class="form-control" id="description3" name="description3" type="longtext"></textarea>
                <label for="description3"><Address>Describtion 3</Address></label>
            </div>
        </div> 
  
        <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        
    </form>
</div>
@endsection