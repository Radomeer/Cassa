$(function () { 


	$('#monday.accordion-body').addClass('in');

	//activate schedule tabs
	var hash = window.location.hash
	hash && $('ul.nav a[href="'+ hash + '"]').tab('show');

	$("#home a:contains('Home')").parent().addClass("active")
	$('#register a:contains("Register")').parent().addClass("active")
	$('#schedule a:contains("Schedule")').parent().addClass("active")

	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() { 
		$('.dropdown-menu', this).fadeOut('fast');
		}); //hover

	$("[data-toggle='tooltip']").tooltip({animation:true});


	$("#myCarousel").carousel({
		interval:5000,
		cycle : true
	})

	$('.modalphotos img').on('click', function(){
		$('#modal').modal({
			show: true,
		})

		var mysrc = this.src.substr(0, this.src.length-7) + ".jpg";
		$('#modalimage').attr('src', mysrc);
		$('#modalimage').on('click', function(){
			$('#modal').modal('hide');	
		}) //hide modal
		
	}); //show modal

	

}); //jQuery is loadded