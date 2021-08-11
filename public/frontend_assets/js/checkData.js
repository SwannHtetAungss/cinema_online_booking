$('.checkData').on('click',function(){

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

	var hall_id = $('#hall').val();
	var show_id = $('#show').val();

	$.post("/checkData",{hall_id:hall_id,show_id:show_id},function(res){
		// console.log(res);
		var seats = res.seats;
		var showseats = res.showseats;
		// console.log(showseats);
			var html='';
			$.each(seats,function(i,v){
				var seatAll;
				$.each(showseats,function(i,ss){

					// console.log(v,ss.seat_id);

					var status = ss.status;
					if(v.id == ss.seat_id && status==0){
						seatAll='booked';
					}else if(v.id == ss.seat_id && status==1){
						seatAll='confrim';
					}else{
						seatAll='available';
					}
					
					html += `<div class="${seatAll} mr-1 mb-1 text-center"> ${v.seat_number} </div>`;

				});
				// console.log(seatAll);

				// html += `<div class="`;
				// $.each(showseats,function(i,ss){
				// 	if(ss.status==0){
				// 		html+= `booked`;
				// 	}else if(ss.status==1){
				// 		html+=`confrim`;
				// 	}else{
				// 		html+=`available`;
				// 	}
				// });
				// html+=`mr-1 mb-1 text-center"> ${v.seat_number} </div>`;
			});
				// console.log(html);
			// $.each(seats,function(i,s){
			// 	$.each(showseats,function(i,v){
			// 		if(s.id == v.seat_id){
			// 		var rows = `<div class="available mr-1 mb-1 text-center"> ${s.seat_number} </div>`;

			// 		}
			// 	html+=rows;

			// 	});

				

			// });
			// console.log(html);
		$('.seatButton').html(html);

	});

});