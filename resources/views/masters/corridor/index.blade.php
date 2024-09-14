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
                        Corridor Master 
                     <a href="{{ url('corridor/create')}}" class="btn btn-primary float-end">Add Corridor</a>
                   </h4>  
                </div>
                <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Phase</th>
                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($corridors as $corridor )
                                 <tr>
                                    <td>{{$corridor->id}}</td>
                                    <td>{{$corridor->name}}</td>
                                    <td>{{$corridor->phase}}</td>
                                 
                                    <td>
                                        <a href="{{ url('corridor/'.$corridor->id.'/edit')}}" class="btn btn-success">Edit</a>
                                        <a href="{{ url('corridor/'.$corridor->id.'/delete')}}" class="btn btn-danger">Delete</a>
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