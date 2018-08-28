$(function(){
	$('.manage-link').click(function(){
		$('.category-box__manage').slideToggle();
		$(this).children().toggleClass('fa-edit');
		$(this).children().toggleClass('fa-minus-square');
	});
	$('.box-link').click(function(){
		window.location = $(this).data('location');
		return false;
	});
});