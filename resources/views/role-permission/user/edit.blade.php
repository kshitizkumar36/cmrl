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
                    <form action="{{ url('users/'.$user->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                        <div class="col-4 mb-3">
                            <label for="">User Name</label>
                            <input type="text" placeholder="User Name" value="{{$user->name}}" name="name" class="form-control">
                            @error('name')<span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="col-4 mb-3">
                            <label for="">User Email</label>
                            <input readonly type="text" placeholder="User Email"  value="{{$user->email}}" name="email" class="form-control">
                        </div>

                        
                        <div class="col-4 mb-3">
                            <label for="">Employee ID</label>
                            <input type="text" placeholder="Employee Id" value="{{$user->emp_id}}" name="emp_id" class="form-control">
                        </div>


                        <div class="col-4 mb-3">
                            <label for="">Mobile Number</label>
                            <input type="text" placeholder="User Mobile" value="{{$user->mobile}}" name="mobile" class="form-control">
                        </div>


                        <div class="col-4 mb-3">
                            <label for="">User Password</label>
                            <input type="password" placeholder="User Password"   name="password" class="form-control">
                            @error('password')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
    
                        
                       
                        
                        </div>


                        <div class="row">
                        <div class="col-12 mb-3">
                            <label for="">Roles</label>
                            <select name="roles[]" class="form-control" >
                                <option value="">Select Role</option>
                                @foreach ($roles as $role )
                                  <option value="{{$role}}"  {{in_array($role,$userRoles) ?'selected':''}}>{{$role}}</option>
                                @endforeach
                                
                            </select>
                            @error('roles')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        </div>


                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

                    <!-- code ends -->
                </div>
             </div>
               
@endsection