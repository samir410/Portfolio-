@extends('layout.admin_app')
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
@section('content')
<div class="card-body">
 @include('include.warning')
    <form action="{{route('dashboard.edit_skill.skill_update',$skills->skill_id)}}" method="POST" >
        @csrf
        <div class="row mb-10">
            <div class="col-md-6">
                <div class="form-floating mb-5 mb-md-0">
                    <input class="form-control"  name="skill_name" id="skill_name" value="{{$skills->skill_name}}" placeholder="type="text" unique="true" required/>
                    <label for="title" class>Skill name</label>
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-floating">
                    <input class="form-control" name="level" value="{{$skills->level}}" type="integer" value="0" required  />
                    <label for="level" >Level in %</label>
                </div>
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