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
                @if(session('status'))
                    <div class="alert alert-success">{{ session('status')}}</div>
                @endif

                <div class="card-header">
                    <h4>
                        Create User 
                        <a href="{{ url('users')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('users')}}" method="POST">
                        @csrf
                        <div class="row">
                        <div class="col-3 mb-3">
                            <label for="">User Name</label>
                            <input type="text" placeholder="User Name" name="name" class="form-control">
                        </div>

                        <div class="col-3 mb-3">
                            <label for="">User Email</label>
                            <input type="text" placeholder="User Email" name="email" class="form-control">
                        </div>

                        <div class="col-3 mb-3">
                            <label for="">Employee ID</label>
                            <input type="text" placeholder="Employee Id" name="emp_id" class="form-control">
                        </div>


                        <div class="col-3 mb-3">
                            <label for="">Mobile Number</label>
                            <input type="text" placeholder="User Mobile" name="mobile" class="form-control">
                        </div>

                        <input type="hidden" value="123456" type="password" placeholder="User Password" name="password" class="form-control">
                        
                      
                        </div>


                        <div class="row">
                        <div class="col-12 mb-3">
                            <label for="">Roles</label>
                            <select name="roles[]" class="form-control" >
                                <option value="">Select Role</option>
                                @foreach ($roles as $role )
                                  <option value="{{$role}}">{{$role}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        </div>


                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

                    <!-- code ends -->
                </div>
             </div>
               
@endsection