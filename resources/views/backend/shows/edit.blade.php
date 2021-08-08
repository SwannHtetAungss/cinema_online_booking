@extends('layouts.backendtemplate')

@section('title','Shows Edit Page')

@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            <h2 class="card-title d-inline"> Cinema Shows Edit </h2>
            <a href="{{route('shows.index')}}" class="btn btn-fill btn-primary float-right">Back</a>
          </div>
          <div class="card-body">
            <form method="post" action="{{route('shows.update',$show->id)}}">
            	@csrf
          		@method('PUT')
				<div class="row mb-3">
					<label for="inputShowDate" class="col-sm-2 col-form-label">Show Date</label>
		            <div class="col-sm-10">
		              <input type="date" value="{{$show->show_date}}" name="show_date" class="form-control" id="inputShowDate">
		              @if ($errors->has('show_date'))
		                <span class="text-danger">{{ $errors->first('show_date') }}</span>
		              @endif
		            </div>
		        </div>

		        <div class="row mb-3">
		            <label for="inputShowTime" class="col-sm-2 col-form-label">Show Time</label>
		            <div class="col-sm-10">
		              <input type="time" value="{{$show->show_time}}" name="show_time" class="form-control" id="inputShowTime">
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
		            			<option value="{{$hall->id}}" @if($hall->id==$show->hall_id) {{'selected'}}
		            			 @endif >{{$hall->name}}</option>
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
		            			<option value="{{$movie->id}}" @if($movie->id==$show->movie_id) {{'selected'}} @endif >{{$movie->name}}</option>
		            		@endforeach
		            </select>
		              
		              @if ($errors->has('Movie_id'))
		                <span class="text-danger">{{ $errors->first('Movie_id') }}</span>
		              @endif
		            </div>
		        </div>

				<div class="row mb-3">
					<label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
		            <div class="col-sm-10">
						<select name="status" class="form-control">
		            		
		            			<option value="0" @if($show->status== 0) {{'selected'}} @endif >Time Over</option>
		            			<option value="1" @if($show->status== 1) {{'selected'}} @endif >Now</option>
		            			<option value="2" @if($show->status== 2) {{'selected'}} @endif >Commming Soon</option>
		            		
		            </select>
		              {{-- <input type="number" value="{{$show->status}}" name="status" class="form-control" id="inputStatus"> --}}
		              @if ($errors->has('status'))
		                <span class="text-danger">{{ $errors->first('status') }}</span>
		              @endif
		            </div>
		        </div>

			        <div class="row mb-3">
		            <div class="col-sm-10 offset-sm-2">
		              <button type="submit" class="btn btn-primary">Update</button>
		            </div>
		        	</div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection