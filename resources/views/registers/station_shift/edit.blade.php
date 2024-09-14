
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
                        Edit Station Shift  
                        <a href="{{ url('stationshift')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('stationshift/'.$stationshifts->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <input type="hidden" name="station_shift_id" value="{{ $stationshifts->id}}" class="form-control">
                        </div>
                        <div class="mb-3">
                                    <label for="">Station  Name</label>
                                    <select class="form-control" name="station">
                                <option disabled>Please Select</option>
                                @foreach ($stations as $station)
                                    <option value="{{ $station->name }}" 
                                        {{ $station->name == $stationshifts->station_name ? 'selected' : '' }}>
                                        {{ $station->name }}
                                    </option>
                                @endforeach
                            </select>

                                </div>

                                <div class="mb-3">
                                    <label for="">Shift</label>
                                    <input type="text" value="{{$stationshifts->shift}}" name="shift" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Designation</label>
                                    <select class="form-control" name="designation">
                                        <option selected disabled>Please Select</option>
                                        @foreach ($designations as $designation)
                                            <option value="{{ $designation->name }}" 
                                                {{ $designation->name == $stationshifts->designation ? 'selected' : '' }}>
                                                {{ $designation->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    
                                </div>

                                <div class="mb-3">
                                    <label for="">From</label>
                                    <input type="text" value="{{$stationshifts->from_}}" name="from" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="">To</label>
                                    <input type="text" value="{{$stationshifts->to_}}" name="to" class="form-control">
                                </div>
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