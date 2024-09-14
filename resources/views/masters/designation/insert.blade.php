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
                        Create Designation 
                        <a href="{{ url('designation')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
 
                <div class="card-body">
                    <form action="{{ url('designation')}}" method="POST">
                        @csrf
                        {{--<input type="text" value="{{$user_id}}" name="user_id">--}}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="">Designation Name</label>
                                    <input type="text" name="designation_name" class="form-control">
                                </div>
                            </div>


                           

                        </div>
                       

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
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