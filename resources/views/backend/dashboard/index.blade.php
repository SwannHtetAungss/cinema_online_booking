@extends('layouts.backendtemplate')

@section('title','Dashboard Page')

@section('seatButton')
  <link rel="stylesheet" type="text/css" href="{{asset('backend_assets/css/seat.css')}}">
@endsection

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header ">
            <div class="row">
              <div class="col-sm-12 text-left">
                {{-- <h5 class="card-category">Total Shipments</h5> --}}
                

                <div class="container">
                  <div class="row">
                    <h2 class="card-title">Dashboard</h2>
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                        <label class="control-label col-form-label">Hall Name</label>
                        <select name="hall" class="form-control" id="hall">
                          <option>--Choose hall Name--</option>
                          @foreach($halls as $hall)
                            <option value="{{$hall->id}}">{{$hall->name}}</option>
                          @endforeach
                        </select>
                    </div>

                    <div class="form-group col-12">
                        <label class="control-label col-form-label">Show Time</label>
                        <select name="show" class="form-control" id="show">
                      
                          <option>--Choose Show Time--</option>
                          
                        </select>
                    </div>

                    <div class="form-group col-12">
                        <a class="btn btn-primary checkData">Search</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="card-body">
            <div class="chart-area">
              <canvas id="chartBig1"></canvas>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <div class="card card-tasks">
          <div class="card-header ">
            <h4 class="text-center bg-white text-dark">Screen</h4>
          </div>

          <div class="card-body ">
            <div class="container">
              <div class="row">
                <div class="col ml-4 seatButton">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="card ">
          <div class="card-header">
            <h4 class="card-title"> Current Situation </h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table tablesorter " id="">
                <tbody>
                  <tr class="col-12">
                    <td class="col-4">
                      Hall Name 
                    </td>
                    <td class="col-8">
                      <span class="hallname">: </span>
                    </td>
                  </tr>
                  <tr class="col-12">
                    <td class="col-4">
                      Show Name
                    </td>
                    <td class="col-8">
                      <span class="moviename">: </span>
                    </td>
                  </tr>
                  <tr class="col-12">
                    <td class="col-4">
                      Total Seat
                    </td>
                    <td class="col-8">
                      <span class="halltotalseat">: </span>
                    </td>
                  </tr>
                  <tr class="col-12">
                    <td class="col-4">
                      Available
                    </td>
                    <td class="col-8">
                      <span class="av">: </span>
                    </td>
                  </tr>
                  <tr class="col-12">
                    <td class="col-4">
                      Confirm
                    </td>
                    <td class="col-8">
                      <span class="con">: </span>
                    </td>
                  </tr>
                  <tr class="col-12">
                    <td class="col-4">
                      Booked
                    </td>
                    <td class="col-8">
                      <span class="bo">: </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('checkData')
  <script type="text/javascript" src="{{asset('frontend_assets/js/checkData.js')}}"></script>
@endsection