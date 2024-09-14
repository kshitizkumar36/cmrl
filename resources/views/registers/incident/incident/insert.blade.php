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
                        Create Incident 
                        <a href="{{ url('incident')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('incident')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$user_id}}" name="user_id">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="">Incident ID</label>
                                    <input type="text" name="incident_id" class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="">Time</label>
                                    <input type="time" name="time" class="form-control">
                                </div>
                            </div>



                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="">Incident Details</label>
                                    <textarea class="form-control" name="incident_details" ></textarea>
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