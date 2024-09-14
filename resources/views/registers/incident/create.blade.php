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
                        Create Register 
                        <a href="{{ url('incident')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('incident')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="">Rev</label>
                                    <input type="text" name="rev" class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="">Station</label>
                                    <input type="text" name="station" class="form-control">
                                </div>
                            </div>



                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="">Incident Number</label>
                                    <input type="text" name="incident_no" class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="">Incident Date</label>
                                    <input type="text" name="incident_date" class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="">Incident time</label>
                                    <input type="text" name="incident_time" class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="">Incident Class</label>
                                    <input type="text" name="incident_class" class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="">Incident Level</label>
                                    <input type="text" name="incident_level" class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="">Incident Subject</label>
                                    <input type="text" name="incident_subject" class="form-control">
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