// animated js
jQuery(document).ready(function (){
	  jQuery('.creb').waypoint(function () {
        var anim = jQuery(this).attr('data-animate'),
                del = jQuery(this).attr('data-animation-delay');
        dur = jQuery(this).attr('data-animation-duration');
        jQuery(this).addClass('animated ' + anim).css({
            animationDelay: del + 'ms',
            animationDuration: dur + 'ms'
        });
    }, {offset: '100%', triggerOnce: true});
	
	
	$('.collapse').on('shown.bs.collapse', function(){
	$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
	}).on('hidden.bs.collapse', function(){
	$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
	});
})
//

