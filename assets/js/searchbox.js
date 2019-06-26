jQuery(document).ready(function($) {
    $('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');

        // Show/Hide Tabs
        $('.tabs ' + currentAttrValue).show().siblings().hide();

        // Change/remove current tab to active
        //jQuery(this).closest('h2').addClass('active').siblings().removeClass('active');
		$('.tabs .tab-links a.selected').removeClass('selected');
        $(this).addClass('selected');

        e.preventDefault();
    });

    //retain search term input when switching tabs
	$('#query1').change(function(){
		$('.searchbox').val($('#query1').val());
	});
	$('#query2').change(function(){
		$('.searchbox').val($('#query2').val());
	});
	$('#query3').change(function(){
		$('.searchbox').val($('#query3').val());
	});
	$('#query4').change(function(){
		$('.searchbox').val($('#query4').val());
	});

    //Submit search form
    $('.searchForm').keypress(function(e){
        if(e.which === 13){
            e.preventDefault();
            console.log("Form stopped");
            $('.searchForm').submit();
            console.log("Form submitted");
        }
    })
});
