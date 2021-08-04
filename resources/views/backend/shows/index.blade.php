@extends('layouts.backendtemplate')

@section('title','Shows Page')

@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            <h2 class="card-title d-inline"> Cinema Shows </h2>
            <a href="{{route('shows.create')}}" class="btn btn-fill btn-primary float-right">New</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table tablesorter " id="sampleTable">
                <thead class=" text-primary">
                  <tr>
                    <th>
                      No.
                    </th>
                    <th>
                       Show Date
                    </th>
                    <th>
                      Show Time
                    </th>
                    <th>
                      Hall No
                    </th>
                    <th>
                      Movie No
                    </th>
                    <th class="text-center">
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $i=1;
                  @endphp
                  @foreach($shows as $show)
                  <tr>
                    <td>
                      {{$i++}}
                    </td>
                    <td>
                      {{$show->show_date}}
                    </td>
                    <td>
                      {{$show->show_time}}
                    </td>
                    <td>
                      {{$show->hall->name}}
                    </td>
                    <td>
                      {{$show->movie->name}}
                    </td>
                    <td class="text-center">
                      <a href="{{route('shows.edit',$show->id)}}" class="btn btn-primary btn-sm">Edit</a>
                      <a href="#" data-id="{{route('shows.destroy',$show->id)}}" class="btn btn-danger btn-sm deletebtn">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
{{-- Modal start --}}
<div class="modal fade" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="" id="deleteModalForm">
        @csrf
        @method('DELETE')
        <div class="modal-header">
          <h4 class="modal-title">Are you sure to delete?</h4>
        </div>
        <div class="modal-footer">
          <input type="submit" name="btnsubmit" class="btn btn-danger" value="Delete">
          <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- Modal End --}}
@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.deletebtn').click(function(){
        var id = $(this).data('id');
        // console.log(id);
        $('#deleteModalForm').attr('action',id);
        $('#deleteModal').modal('show');
      })
    })
  </script>
@endsection