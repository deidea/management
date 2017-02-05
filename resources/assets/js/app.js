$(function() {

	/*
	 * Fix for dropdown buttons located inside scrollable tables,
	 * that are wraped with div.responsive-table with overflow: auto; property,
	 * that were not rendered correctly.
     */
	$('.table-responsive').on('show.bs.dropdown', function () {
		$('.table-responsive').css("overflow", "inherit");
	}).on('hide.bs.dropdown', function () {
		$('.table-responsive').css("overflow", "auto");
	});

	$('.list-group-item').on('click',function(e){
   var previous = $(this).closest(".list-group").children(".active");
   previous.removeClass('active'); // previous list-item
   $(e.target).addClass('active'); // activated list-item
 });

});
