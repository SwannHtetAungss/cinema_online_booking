@extends('layouts.backendtemplate')

@section('title','Booking Page')

@section('content')
  <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card ">
            <div class="card-header">
              <h2 class="card-title d-inline"> Cinema Bookings </h2>
              {{-- <a href="{{route('shows.create')}}" class="btn btn-fill btn-primary float-right">New</a> --}}
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
                        Booking Date
                      </th>
                      <th>
                        TotalSeats
                      </th>
                      <th>
                        TotalAmount
                      </th>
                      <th>
                        Customer
                      </th>
                      <th>
                        Status
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
                    @foreach($bookings as $booking)
                    <tr>
                      <td>
                        {{$i++}}
                      </td>
                      <td>
                        {{$booking->booking_time}}
                      </td>
                      <td>
                        {{$booking->numberofseats}}
                      </td>
                      <td>
                        {{$booking->total}}
                      </td>
                      <td>
                        {{$booking->user->name}}
                      </td>
                      <td>
                        @if($booking->status == 0)
                          <span class="text-warning">Pending</span>
                        @elseif($booking->status == 1)
                          <span class="text-success">Confirm</span>
                        @elseif($booking->status == 2)
                          <span class="text-danger">Cancel</span>
                        @endif
                      </td>
                      
                      <td>
                        <a href="{{route('booking.show',$booking->id)}}" class="btn btn-primary btn-sm">
                          Detail
                        </a>
                        {{-- @if($booking->status > 0)
                        <a href="#" data-id="{{route('booking.destroy',$booking->id)}}" class="btn btn-danger btn-sm deletebtn disabled">
                          Cancel
                        </a>
                        @else
                        <a href="#" data-id="{{route('booking.destroy',$booking->id)}}" class="btn btn-danger btn-sm deletebtn">
                          Cancel
                        </a>
                        @endif --}}
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