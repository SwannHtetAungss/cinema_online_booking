@extends('layouts.backendtemplate')

@section('title','Cinema Hall Page')

@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            <h2 class="card-title d-inline"> Cinema Hall </h2>
            <a href="{{route('hall.create')}}" class="btn btn-fill btn-primary float-right"><i class="tim-icons icon-simple-add"></i></a>
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
                      Name
                    </th>
                    <th>
                      Total Seats
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
                  @foreach($halls as $hall)
                  <tr>
                    <td>
                      {{$i++}}
                    </td>
                    <td>
                      {{$hall->name}}
                    </td>
                    <td>
                      {{$hall->total_seat}}
                    </td>
                    <td class="text-center">
                      <a href="{{route('hall.edit',$hall->id)}}" class="btn btn-primary btn-sm"><i class="tim-icons icon-settings"></i></a>
                      <a href="#" data-id="{{route('hall.destroy',$hall->id)}}" class="btn btn-danger btn-sm deletebtn"><i class="tim-icons icon-trash-simple"></i></a>
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