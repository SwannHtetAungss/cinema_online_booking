@extends('layouts.backendtemplate')

@section('title','Movie Edit Page')

@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            <h2 class="card-title d-inline"> Movie Info Edit </h2>
            <a href="{{route('movie.index')}}" class="btn btn-fill btn-primary float-right"><i class="tim-icons icon-minimal-left"></i></a>
          </div>
          <div class="card-body">
            <form method="post" action="{{route('movie.update',$movie->id)}}" enctype="multipart/form-data">
            	@csrf
          		@method('PUT')
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputName" value="{{$movie->name}}">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">
                    <input type="file" name="photo" class="form-control" id="inputName">
                    <img src="{{asset('storage/'.$movie->photo)}}" alt="" width="200">
                    {{-- @if ($errors->has('photo'))
                        <span class="text-danger">{{ $errors->first('photo') }}</span>
                    @endif --}}
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label">Actor</label>
                    <div class="col-sm-10">
                    <input type="text" name="actor" class="form-control" id="inputName" value="{{$movie->actor}}">
                    @if ($errors->has('actor'))
                        <span class="text-danger">{{ $errors->first('actor') }}</span>
                    @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label">Actress</label>
                    <div class="col-sm-10">
                    <input type="text" name="actress" class="form-control" id="inputName" value="{{$movie->actress}}">
                    @if ($errors->has('actress'))
                        <span class="text-danger">{{ $errors->first('actress') }}</span>
                    @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label">Director</label>
                    <div class="col-sm-10">
                    <input type="text" name="director" class="form-control" id="inputName" value="{{$movie->director}}">
                    @if ($errors->has('director'))
                        <span class="text-danger">{{ $errors->first('director') }}</span>
                    @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                    {{-- <input type="text" name="description" class="form-control" id="inputName"> --}}
                    <textarea name="description" class="form-control" id="inputName" cols="20" rows="5">{{$movie->description}}</textarea>
                    @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label">Trailer</label>
                    <div class="col-sm-10">
                    <input type="text" name="trailer" class="form-control" id="inputName" value="{{$movie->trailer}}">
                    @if ($errors->has('trailer'))
                        <span class="text-danger">{{ $errors->first('trailer') }}</span>
                    @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label">Duration</label>
                    <div class="col-sm-10">
                    <input type="text" name="duration" class="form-control" id="inputName" value="{{$movie->duration}}">
                    @if ($errors->has('duration'))
                        <span class="text-danger">{{ $errors->first('duration') }}</span>
                    @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label">Release Date</label>
                    <div class="col-sm-10">
                    <input type="date" name="release_date" class="form-control" id="inputName" value="{{$movie->release_date}}">
                    @if ($errors->has('release_date'))
                        <span class="text-danger">{{ $errors->first('release_date') }}</span>
                    @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputTotalSeat" class="col-sm-2 col-form-label">Genre</label>
                    <div class="col-sm-10">
                      <input type="text" name="genre" class="form-control" id="inputTotalSeat" value="{{$movie->genre}}">
                      @if ($errors->has('genre'))
                        <span class="text-danger">{{ $errors->first('genre') }}</span>
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