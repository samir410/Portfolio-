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
                    Data About me
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>FullName</th>
                                <th>Dob</th>
                                <th>Phone number</th>
                                <th>Age</th>
                                <th><Address> address</Address></th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Describtion one</th>
                                <th>Describtion two</th>
                                <th>Describtion three</th>
                                <th>ACtion</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>FullName</th>
                                <th>Dob</th>
                                <th>Phone number</th>
                                <th>Age</th>
                                <th><Address> address</Address></th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Describtion one</th>
                                <th>Describtion two</th>
                                <th>Describtion three</th>
                                <th>ACtion</th>
                            </tr>
                        </tfoot>
                        <tbody>
                         @foreach ($abouts as $about )
                             
                            <tr>
                                <td>{{$about->Title}}</td>
                                <td>{{$about->fullname}}</td>
                                <td>{{$about->dob}}</td>
                                <td>{{$about->number}}</td>
                                <td>{{$about->age}}</td>
                                <td>{{$about->address}}</td>
                                <td>{{$about->inputEmail}}</td>
                                <td>
                                <img src="{{asset('storage/img')}}/{{$about->profile_image}}" alt="" height="150" width="150"/>
                                </td>
                                <td>{{$about->description1}}</td>
                                <td>{{$about->description2}}</td>
                                <td>{{$about->description3}}</td>
                                {{-- <td>{{$about->id}}</td> --}}
                                <td><button type="button" onclick="window.location='{{route('dashboard.edit_about',$about->id)}}'" class="btn btn-primary">Edit</button></td>
                                {{-- <td><a href="{{route('dashboard.edit_about',$about->id)}}" class="btn btn-primary">edit info</a> --}}
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

