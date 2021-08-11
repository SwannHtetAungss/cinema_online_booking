@extends('layouts.backendtemplate')

@section('title','Hall Create Page')

@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            <h2 class="card-title d-inline"> Cinema Hall Create </h2>
            <a href="{{route('hall.index')}}" class="btn btn-fill btn-primary float-right"><i class="tim-icons icon-minimal-left"></i></a>
          </div>
          <div class="card-body">
            <form method="post" action="{{route('hall.store')}}">
            	@csrf
            	<div class="row mb-3">
		            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
		            <div class="col-sm-10">
		              <input type="text" name="name" class="form-control" id="inputName">
		              @if ($errors->has('name'))
		                <span class="text-danger">{{ $errors->first('name') }}</span>
		              @endif
		            </div>
		        	</div>

			        <div class="row mb-3">
			            <label for="inputTotalSeat" class="col-sm-2 col-form-label">Total Seat</label>
			            <div class="col-sm-10">
			              <input type="number" name="total_seat" class="form-control" id="inputTotalSeat">
			              @if ($errors->has('total_seat'))
			                <span class="text-danger">{{ $errors->first('total_seat') }}</span>
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