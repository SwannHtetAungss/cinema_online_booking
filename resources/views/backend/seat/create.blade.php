@extends('layouts.backendtemplate')

@section('title','Seat Create Page')

@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            <h2 class="card-title d-inline"> Cinema Seat Create </h2>
            <a href="{{route('seat.index')}}" class="btn btn-fill btn-primary float-right"><i class="tim-icons icon-minimal-left"></i></a>
          </div>
          <div class="card-body">
            <form method="post" action="{{route('seat.store')}}">
            	@csrf

            	<div class="row mb-3">
		            <label for="inputSeatNumber" class="col-sm-2 col-form-label">Seat Number</label>
		            <div class="col-sm-10">
		              <input type="text" name="seat_number" class="form-control" id="inputSeatNumber">
		              @if ($errors->has('seat_number'))
		                <span class="text-danger">{{ $errors->first('seat_number') }}</span>
		              @endif
		            </div>
		        	</div>

		        	<div class="row mb-3">
		            <label for="inputSeatPrice" class="col-sm-2 col-form-label">Seat Price</label>
		            <div class="col-sm-10">
		              <input type="number" name="seat_price" class="form-control" id="inputSeatPrice">
		              @if ($errors->has('seat_price'))
		                <span class="text-danger">{{ $errors->first('seat_price') }}</span>
		              @endif
		            </div>
		        	</div>

		        	<div class="row mb-3">
		            <label for="inputHall" class="col-sm-2 col-form-label">Hall</label>
		            <div class="col-sm-10">
		              <select name="hall" class="form-control" id="inputHall">
		                  <option>--Choose one Hall--</option>
		                  @foreach($halls as $hall)
		                    <option value="{{$hall->id}}">{{$hall->name}}</option>
		                  @endforeach
		              </select>
		              @if($errors->has('hall'))
		                <span class="text-danger">{{ $errors->first('hall') }}</span>
		              @endif
		            </div>
		          </div>

			        <div class="row mb-3">
		            <div class="col-sm-10 offset-sm-2">
		              <button type="submit" class="btn btn-primary">Create</button>
		            </div>
		        	</div>
		        	
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection