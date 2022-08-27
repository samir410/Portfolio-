@extends('layout.admin_app')
@section('content')

        <div class="container-fluid px-4">
            {{-- <h1 class="mt-4">Dashboard</h1> --}}
            <ol class="breadcrumb mb-4">
                {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
  
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Skill view
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Skill id</th>
                                <th>Skill name</th>
                                <th>Level</th>
                                <th>ACtion</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Skill id</th>
                                <th>Skill name</th>
                                <th>Level</th>
                                <th>ACtion</th>
                           
                            </tr>
                        </tfoot>
                        <tbody>
                         @foreach ($skills as $skill )
                             
                            <tr>
                                <td>{{$skill->skill_id}}</td>
                                <td>{{$skill->skill_name}}</td>
                                <td>{{$skill->level}}</td>
                                 <td><button type="button" onclick="window.location='{{route('dashboard.edit_skill',$skill->skill_id)}}'" class="btn btn-primary">Edit</button></td>
                                {{-- <td><a href="{{route('dashboard.edit_about',skill_id=>$skill->skill_id)}}" class="btn btn-primary">edit info</a> --}}
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
   
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2022</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection

