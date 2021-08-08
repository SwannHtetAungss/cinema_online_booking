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
		var splice_array = Array();
		if(book_arr.length > 0){
			$.each(book_arr,function(i,v){
				// alert(id);
				// console.log(id,v.id,i);
				// console.log(v);
				if(v.id==id){
					// console.log(i);
					splice_array.push(i);
					status = true;
				}
			
			})
			$.each(splice_array,function(i,v){
				
				book_arr.splice(v,1);
			})
		}
		

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
				$('.booking').attr('data-total',total);
				$('.booking').attr('data-snumber',snumber);
			}else{
				$('.count').html(': '+0);
				$('.total').html(': '+0);
				$('.snumber').html(': ');
			}

		}else{
			$('.count').html(': '+0);
			$('.total').html(': '+0);
			$('.snumber').html(': ');
		}
	}

	$(document).on("click",".booking",function(){
		// alert('hi');
		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

		var book_str = localStorage.getItem('cinemabooking');
		var showid = $(this).data('showid');
		var total = $(this).data('total');
		var snumber = $(this).data('snumber');

		$.post("/booking",{data:book_str,showid:showid,total:total,snumber:snumber},function(res){

			console.log(res);
			if(res=="success"){

				swal("Good job!", "Booking Successfully !", "success")
				.then((value)=>{
					location.reload();
				});
				// window.location.href = "{{ route('homepage')}}";
				// setInterval('location.reload()', 200);
			}

			// remove LocalStorage
        	localStorage.removeItem('cinemabooking');

        	getData();

		});


	});

})