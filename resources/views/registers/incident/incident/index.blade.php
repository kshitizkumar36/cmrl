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
                        Incident Register Entries 
                        </h4>
                </div>

                <div class="card-header">
                    <h4>
                        {{$incident_id}}
                        Incident Register 
                     <a href="{{ url('incidents/'.$incident_id.'/add_incident')}}" class="btn btn-primary float-end">Add Entry</a>
                   </h4>
                </div>
                <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Incident Id</th>
                                    <th>Time</th>
                                    <th>Incident Details</th>
                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($incidents as $incident )
                                 <tr>
                                    <td>{{$incident->id}}</td>
                                    <td><span class="badge bg-primary">{{$incident->incident_id}}</span></td>
                                    <td>{{$incident->time}}</td>
                                    <td>{{$incident->incident_details}}</td>
                                 
                                    <td> <a href="{{ url('incidents/'.$incident->id.'/edit')}}" class="btn btn-info">Enter Incident</a></td>
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