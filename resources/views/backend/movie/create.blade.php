@extends('layouts.backendtemplate')

@section('title','Movie Create Page')

@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            <h2 class="card-title d-inline"> Movie Create </h2>
            <a href="{{route('movie.index')}}" class="btn btn-fill btn-primary float-right"><i class="tim-icons icon-minimal-left"></i></a>
          </div>
          <div class="card-body">
            <form method="post" action="{{route('movie.store')}}" enctype="multipart/form-data">
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
						<label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
						<div class="col-sm-10">
						<input type="file" name="photo" class="form-control" id="inputPhoto">
						@if ($errors->has('photo'))
							<span class="text-danger">{{ $errors->first('photo') }}</span>
						@endif
						</div>
		        	</div>
					<div class="row mb-3">
						<label for="inputActor" class="col-sm-2 col-form-label">Actor</label>
						<div class="col-sm-10">
						<input type="text" name="actor" class="form-control" id="inputActor">
						@if ($errors->has('actor'))
							<span class="text-danger">{{ $errors->first('actor') }}</span>
						@endif
						</div>
		        	</div>
					<div class="row mb-3">
						<label for="inputActress" class="col-sm-2 col-form-label">Actress</label>
						<div class="col-sm-10">
						<input type="text" name="actress" class="form-control" id="inputActress">
						@if ($errors->has('actress'))
							<span class="text-danger">{{ $errors->first('actress') }}</span>
						@endif
						</div>
		        	</div>
					<div class="row mb-3">
						<label for="inputDirector" class="col-sm-2 col-form-label">Director</label>
						<div class="col-sm-10">
						<input type="text" name="director" class="form-control" id="inputDirector">
						@if ($errors->has('director'))
							<span class="text-danger">{{ $errors->first('director') }}</span>
						@endif
						</div>
		        	</div>
					<div class="row mb-3">
						<label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
						<div class="col-sm-10">
						{{-- <input type="text" name="description" class="form-control" id="inputName"> --}}
						<textarea name="description" class="form-control" id="inputDescription" cols="20" rows="5"></textarea>
						@if ($errors->has('description'))
							<span class="text-danger">{{ $errors->first('description') }}</span>
						@endif
						</div>
		        	</div>
					<div class="row mb-3">
						<label for="inputTrailer" class="col-sm-2 col-form-label">Trailer</label>
						<div class="col-sm-10">
						<input type="text" name="trailer" class="form-control" id="inputTrailer">
						@if ($errors->has('trailer'))
							<span class="text-danger">{{ $errors->first('trailer') }}</span>
						@endif
						</div>
		        	</div>
					<div class="row mb-3">
						<label for="inputDuration" class="col-sm-2 col-form-label">Duration</label>
						<div class="col-sm-10">
						<input type="text" name="duration" class="form-control" id="inputDuration">
						@if ($errors->has('duration'))
							<span class="text-danger">{{ $errors->first('duration') }}</span>
						@endif
						</div>
		        	</div>
					<div class="row mb-3">
						<label for="inputReleaseDate" class="col-sm-2 col-form-label">Release Date</label>
						<div class="col-sm-10">
						<input type="date" name="release_date" class="form-control" id="inputReleaseDate">
						@if ($errors->has('release_date'))
							<span class="text-danger">{{ $errors->first('release_date') }}</span>
						@endif
						</div>
		        	</div>

			        <div class="row mb-3">
			            <label for="inputGenre" class="col-sm-2 col-form-label">Genre</label>
			            <div class="col-sm-10">
			              <input type="text" name="genre" class="form-control" id="inputGenre">
			              @if ($errors->has('genre'))
			                <span class="text-danger">{{ $errors->first('genre') }}</span>
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