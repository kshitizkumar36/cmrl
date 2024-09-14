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
                        Incident Register 
                        <a href="{{ url('incident/create')}}" class="btn btn-primary float-end">Add Register</a>
                    </h4>
                </div>
                <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Incident Id</th>
                                    <th>Rev</th>
                                    <th>Station</th>
                                    <th>Incident Number</th>
                                    <th>Incident Date</th>
                                    <th>Incident Time</th>
                                    <th>Incident Class</th>
                                    <th>Incident Level</th>
                                    <th>Incident Subject</th>
                                    <th>Incident</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($incidents as $incident )
                                 <tr>
                                    <td>{{$incident->id}}</td>
                                    <td><span class="badge bg-primary">{{$incident->incident_id}}</span></td>
                                    <td>{{$incident->rev}}</td>
                                    <td>{{$incident->station}}</td>
                                    <td>{{$incident->incident_no}}</td>
                                    <td>{{$incident->incident_date}}</td>
                                    <td>{{$incident->incident_time}}</td>
                                    <td>{{$incident->incident_class}}</td>
                                    <td>{{$incident->incident_level}}</td>
                                    <td>{{$incident->incident_subject}}</td>
                                    <td> <a href="{{ url('incidents/'.$incident->incident_id.'/insert_entries')}}" class="btn btn-info">Enter Incident</a></td>
                                    <td>
                                        <a href="{{ url('incidents/'.$incident->id.'/edit')}}" class="btn btn-success">Edit</a>
                                        <a href="{{ url('incidents/'.$incident->id.'/delete')}}" class="btn btn-danger">Delete</a>
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