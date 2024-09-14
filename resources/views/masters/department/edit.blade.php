
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
                        Edit department 
                        <a href="{{ url('department')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('department/'.$department->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <input type="hidden" name="department_id" value="{{ $department->department_id}}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Department Name</label>
                            <input type="text" name="name" value="{{ $department->name}}" class="form-control">
                        </div>

                       

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
                    <!-- code ends -->
                </div>
             </div>
               
@endsection