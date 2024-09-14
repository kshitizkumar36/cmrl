

@extends('layouts/main')
@section('main-section')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-xxl-12 mb-12 order-0 card">
                    <!-- code starts -->

                    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h4>
                        Users  
                        <a href="{{ url('users/create')}}" class="btn btn-primary float-end">Add User</a>
                    </h4>
                </div>
                <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Employee ID</th>
                                    <th>Mobile</th>
                                    <th>Roles</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($users as $user )
                                 <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->emp_id}}</td>
                                    <td>{{$user->mobile}}</td>
                                    <td>
                                        @if(!empty($user->getRoleNames()))
                                            @foreach($user->getRoleNames() as $rolename)
                                            <label class="badge bg-primary mx-1">{{$rolename}}</label>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('users/'.$user->id.'/edit')}}" class="btn btn-success">Edit</a>
                                        <a href="{{ url('users/'.$user->id.'/delete')}}"  class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                                
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

                    <!-- code ends -->
                </div>
             </div>
               
@endsection