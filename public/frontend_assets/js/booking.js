$(document).ready(function(){

	getData();

	$('.addtocart').on('click',function(){
		// alert('hi');
		var id = $(this).data('id');
		// alert(id);
		var seatnumber = $(this).data('seatnumber');
		var seatprice = $(this).data('seatprice');

		var hallname = $(this).data('hallname');
		var moviename = $(this).data('moviename');
		var showdate = $(this).data('showdate');
		var showtime = $(this).data('showtime');

		// alert(moviename);

		var seat={
			id : id,
			seatnumber : seatnumber,
			seatprice : seatprice
		};

		var book_str = localStorage.getItem('cinemabooking');
		var book_arr;

		if(book_str==null){
			book_arr = Array();
		}else{
			book_arr = JSON.parse(book_str);
		}

		var status = false;

		// true condition
		$.each(book_arr,function(i,v){
			// alert(id);
			console.log(id,v.id,i);
			if(id==v.id){
				console.log(i);
				book_arr.splice(i,1);
				status = true;
			}
			
		})

		if(status==false){
			book_arr.push(seat);
		}

		var bookData = JSON.stringify(book_arr);

		localStorage.setItem('cinemabooking',bookData);

		getData();
	});

	function getData(){

		var book_str = localStorage.getItem('cinemabooking');

		if(book_str){
			var book_arr = JSON.parse(book_str);
			var count = book_arr.length;
			if(count>0){
				var total=0;
				var snumber="";
				$.each(book_arr,function(i,v){
					total = count*v.seatprice;
					snumber += v.seatnumber+', ';
				})

				$('.count').html(': '+count);
				$('.total').html(': '+total);
				$('.snumber').html(': '+snumber);
			}else{
				$('.count').html(': '+0);
				$('.total').html(': '+0);
				$('.snumber').html(': ');
			}

		}
	}

})