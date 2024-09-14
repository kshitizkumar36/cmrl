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
                        Station Master 
                     <a href="{{ url('station/create')}}" class="btn btn-primary float-end">Add Station</a>
                   </h4>  
                </div>
                <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Station Name</th>
                                    <th>Corridor</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($stations as $station )
                                 <tr>
                                    <td>{{$station->id}}</td>
                                    <td>{{$station->name}}</td>
                                    <td>{{$station->corridor}}</td>
                                    <td>{{$station->address}}</td>
                                    <td>
                                        <a href="{{ url('station/'.$station->id.'/edit')}}" class="btn btn-success">Edit</a>
                                        <a href="{{ url('station/'.$station->id.'/delete')}}" class="btn btn-danger">Delete</a>
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