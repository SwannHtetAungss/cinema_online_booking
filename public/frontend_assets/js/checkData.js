$('select').change(function(){
	var hallid=$('#hall').val();
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.post("/selectfilter",{hallid:hallid},function(res){
    	// console.log(res);

    	var html='';
		$.each(res,function(i,v){
			html+=`<option value="${v.id}">${v.show_time}</option>`;
		});

		$('#show').html(html);
    });
});

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
		var movie = res.movie;
		var hall = res.hall;

		var html='';
		$.each(seats,function(i,v){
			
			if(showseats.length > 0){
				html += `<div class="`;
				$.each(showseats,function(i,ss){
					if(ss.status==0 && ss.seat_id==v.id){
						html+= `booked `;
					}else if(ss.status==1 && ss.seat_id==v.id){
						html+=`confrim `;
					}else{
						html+=`available `;
					}
				});
				html+=` mr-1 mb-1 text-center"> ${v.seat_number} </div>`;
			}else{
				html += `<div class="available mr-1 mb-1 text-center"> ${v.seat_number} </div>`;
			}
		});

		var bo=0;
		var con=0;
		var av=0;
		$.each(showseats,function(i,v){
			if(v.status==0){
				bo++;
			}else if(v.status==1){
				con++;
			}
		});

		var av = hall.total_seat-(bo+con);

		$('.seatButton').html(html);
		$('.hallname').html(': '+hall.name);
		$('.moviename').html(': '+movie.name);
		$('.halltotalseat').html(': '+hall.total_seat);
		$('.av').html(': '+av);
		$('.con').html(': '+con);
		$('.bo').html(': '+bo);
	});

});