

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
                        Permissions 
                        <a href="{{ url('permissions/create')}}" class="btn btn-primary float-end">Add Permission</a>
                    </h4>
                </div>
                <div class="card-body">
                        <table class="table" id="example" class="display">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($permissions as $permission )
                                 <tr>
                                    <td>{{$permission->id}}</td>
                                    <td>{{$permission->name}}</td>
                                    <td>
                                        <a href="{{ url('permissions/'.$permission->id.'/edit')}}" class="btn btn-success">Edit</a>
                                        <a href="{{ url('permissions/'.$permission->id.'/delete')}}"  class="btn btn-danger">Delete</a>
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