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
                <h5 class="card-category">Total Shipments</h5>
                <h2 class="card-title">Performance</h2>

                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      {{-- <form method="get" action="{{route('checkData')}}"> --}}

                        <div class="form-group col-6">
                            <label class="control-label col-form-label">Hall Name</label>
                            <select name="hall" class="form-control" id="hall">
                              @foreach($halls as $hall)
                                <option value="{{$hall->id}}">{{$hall->name}}</option>
                              @endforeach
                            </select>
                        </div>

                        <div class="form-group col-6">
                            <label class="control-label col-form-label">Show Time</label>
                            <select name="show" class="form-control" id="show">
                              @foreach($shows as $show)
                                <option value="{{$show->id}}">{{$show->show_time}}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <a class="btn btn-primary checkData">Search</a>
                        </div>
                      {{-- </form> --}}
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
            <h4 class="card-title"> Simple Table</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table tablesorter " id="">
                <thead class=" text-primary">
                  <tr>
                    <th>
                      Name
                    </th>
                    <th>
                      Country
                    </th>
                    <th>
                      City
                    </th>
                    <th class="text-center">
                      Salary
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td class="text-center">
                      $36,738
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                    <td class="text-center">
                      $23,789
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>
                    <td class="text-center">
                      $56,142
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea, South
                    </td>
                    <td>
                      Overland Park
                    </td>
                    <td class="text-center">
                      $38,735
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>
                    <td class="text-center">
                      $63,542
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td class="text-center">
                      $78,615
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Jon Porter
                    </td>
                    <td>
                      Portugal
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td class="text-center">
                      $98,615
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