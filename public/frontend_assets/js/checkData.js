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
				
		$('.seatButton').html(html);
		$('.hallname').html(': '+hall.name);
	});

});