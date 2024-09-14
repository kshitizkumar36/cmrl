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
                   
                </div>

                <div class="card-header">
                    <h4>
                        Station Shift Register 
                     <a href="{{ url('stationshift/create')}}" class="btn btn-primary float-end">Add Station Shift</a>
                   </h4>  
                </div>
                <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Station Name</th>
                                    <th>Shift</th>
                                    <th>Designation</th>
                                    <th>From</th>
                                    <th>To</th>
                                  
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($stationshifts as $stationshift )
                                 <tr>
                                    <td>{{$stationshift->id}}</td>
                                    <td>{{$stationshift->station_name}}</td>
                                    <td>{{$stationshift->shift}}</td>
                                    <td>{{$stationshift->designation}}</td>
                                    <td>{{$stationshift->from_}}</td>
                                    <td>{{$stationshift->to_}}</td>
                                   
                                    <td>
                                        <a href="{{ url('stationshift/'.$stationshift->id.'/edit')}}" class="btn btn-success">Edit</a>
                                        <a href="{{ url('stationshift/'.$stationshift->id.'/delete')}}" class="btn btn-danger">Delete</a>
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