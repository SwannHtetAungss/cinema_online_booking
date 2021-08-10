@extends('layouts.backendtemplate')

@section('title','Booking Detail Page')

@section('content')
  <div class="content">
      <div class="row">
        <div class="col-md-12">
          	<div class="card ">
	            <div class="card-header">
	              <h2 class="card-title d-inline"> Booking Details </h2>
	              <a href="{{route('booking.index')}}" class="btn btn-fill btn-primary float-right">Back</a>
	            </div>
	            <div class="card-body">
	            	<div class="container">
	            		
	            		<div class="row mb-3">
	            			<form method="post" action="{{route('booking.update',$booking->id)}}">
	            				@csrf
          						@method('PUT')
          						<input type="hidden" name="status" value="1">
          						@if($booking->status > 0)
	            					<button type="submit" class="btn btn-primary mr-2 disabled">Confirm</button>
	            				@else
	            					<button type="submit" class="btn btn-primary mr-2">Confirm</button>
	            				@endif
	            			</form>

	            			
	            				
            				@if($booking->status > 0)
	            				<button type="submit" class="btn btn-danger disabled" href="">Booking Cancel</button>
	            			@else
	            				<button type="submit" class="btn btn-danger deletebtn" href="">Booking Cancel</button>
	            			@endif
	            			

	            		</div>

	            		<div class="row">
	            			<div class="col-7">
	            				<h5 class="d-inline">Customer Name : </h5>
	            				<h5 class="d-inline"> &nbsp; &nbsp; {{$booking->user->name}}</h5>
	            			</div>
	            			<div class="col-5">
	            				<h5 class="d-inline">Hall Name : </h5>
	            				<h5 class="d-inline"> &nbsp; &nbsp; {{$booking->show->hall->name}} </h5>
	            			</div>
	            		</div>

	            		<div class="row">
	            			<div class="col-7">
	            				<h5 class="d-inline">Customer Email : </h5>
	            				<h5 class="d-inline"> &nbsp; &nbsp; {{$booking->user->email}}</h5>
	            			</div>
	            			<div class="col-5">
	            				<h5 class="d-inline">Movie Name : </h5>
	            				<h5 class="d-inline"> &nbsp; &nbsp; {{$booking->show->movie->name}} </h5>
	            			</div>
	            		</div>

	            		<div class="row">
	            			<div class="col-7">
	            				<h5 class="d-inline">Customer Phnumber : </h5>
	            				<h5 class="d-inline"> &nbsp; &nbsp; Phone Number</h5>
	            			</div>
	            			<div class="col-5">
	            				<h5 class="d-inline">Show Time : </h5>
	            				<h5 class="d-inline"> &nbsp; &nbsp; {{$booking->show->show_time}} </h5>
	            			</div>
	            		</div>

	            	</div>
	              	<div class="table-responsive">
		                <table class="table tablesorter">
		                	<hr class="hrdetail" style="border: 1px dashed white;">
			                <thead class=" text-primary">
			                    <tr class="text-center">
			                      	<th>
			                        	No.
			                      	</th>
			                      	<th>
			                        	Date and Time
			                      	</th>
			                      	<th>
			                        	TotalSeats
			                      	</th>
			                      	<th>
			                        	TotalAmount
			                      	</th>
			                    </tr>
			                </thead>
			                <tbody>
			                    @php
			                      $i=1;
			                    @endphp
			                    @foreach($booking_orders as $booking_order)
			                    <tr class="text-center">
			                      <td>
			                        {{$i++}}
			                      </td>
			                      <td>
			                        {{$booking->created_at}}
			                      </td>
			                      <td>
			                        {{$booking_order->seat->seat_number}}
			                      </td>
			                      <td>
			                        {{$booking_order->seat->seat_price}}
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
        <form method="post" action="{{route('booking.update',$booking->id)}}" id="deleteModalForm">
          @csrf
          @method('PUT')
          <input type="hidden" name="status" value="2">
          <div class="modal-header">
            <h4 class="modal-title">Are you sure to Cancel?</h4>
          </div>
          <div class="modal-footer">
            <input type="submit" name="btnsubmit" class="btn btn-danger" value="OK">
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