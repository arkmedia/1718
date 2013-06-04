function load_donors(amt, node) {
	//alert('load donors'+amt);
	var cls = 'amount_' + amt;
	$(".showing").removeClass("showing");
	$('.' + cls).addClass("showing");
	$(".donor_list_li").removeClass("selected");
	$(node).addClass("selected");
	myScroll.refresh();
	myScroll.scrollTo(0,0);
	//$("#donor_display").scrollTop(0);
}

var myScroll;
$(function() {
	myScroll = new iScroll('donor_display', { hScrollbar: false, vScrollbar: false });
	$('#donor_list_chooser').children().first().click();
	//$("#donor_display").overscroll();
	//$("#donor_display").contentdragscroller({width:805,height:500});
});