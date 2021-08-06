@extends('layouts.backendtemplate')

@section('title','Shows Create Page')

@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            <h2 class="card-title d-inline"> Cinema Shows Create </h2>
            <a href="{{route('shows.index')}}" class="btn btn-fill btn-primary float-right">Back</a>
          </div>
          <div class="card-body">
            <form method="post" action="{{route('shows.store')}}">
             @csrf
            	<div class="row mb-3">
		            <label for="inputShowDate" class="col-sm-2 col-form-label">Show Date</label>
		            <div class="col-sm-10">
		              <input type="date" name="show_date" class="form-control" id="inputShowDate">
		              @if ($errors->has('show_date'))
		                <span class="text-danger">{{ $errors->first('show_date') }}</span>
		              @endif
		            </div>
		        </div>

		        <div class="row mb-3">
		            <label for="inputShowTime" class="col-sm-2 col-form-label">Show Time</label>
		            <div class="col-sm-10">
		              <input type="time" name="show_time" class="form-control" id="inputShowTime">
		              @if ($errors->has('show_time'))
		                <span class="text-danger">{{ $errors->first('show_time') }}</span>
		              @endif
		            </div>
		        </div>

		        <div class="row mb-3">
		            <label for="inputHallId" class="col-sm-2 col-form-label">Hall Name</label>
		            <div class="col-sm-10">
		            	<select name="Hall_id" class="form-control">
		            		@foreach($halls as $hall)
		            			<option value="{{$hall->id}}">{{$hall->name}}</option>
		            		@endforeach
		            	</select>
		              
		              @if ($errors->has('Hall_id'))
		                <span class="text-danger">{{ $errors->first('Hall_id') }}</span>
		              @endif
		            </div>
		        </div>

		       <div class="row mb-3">
		            <label for="inputMOvieId" class="col-sm-2 col-form-label">Movie Name</label>
		            <div class="col-sm-10">
		              <select name="Movie_id" class="form-control">
		            		@foreach($movies as $movie)
		            			<option value="{{$movie->id}}">{{$movie->name}}</option>
		            		@endforeach
		            	</select>
		              
		              @if ($errors->has('Movie_id'))
		                <span class="text-danger">{{ $errors->first('Movie_id') }}</span>
		              @endif
		            </div>
		        </div>

           
          </div>
          <div class="card-footer">
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