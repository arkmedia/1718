$(function() {
	/*
	 $("#hycmad").live('pageinit',function() {
	 var fileref = document.createElement("link");
	 fileref.setAttribute("rel", "stylesheet");
	 fileref.setAttribute("type", "text/css");
	 fileref.setAttribute("href", 'jquery-ui/development-bundle/themes/base/jquery.ui.all.css');
	 //document.getElementsByTagName("head")[0].appendChild(fileref);
	 });
	 */
	/*
	 $("#hycmad").live('#hycmad',function() {
	 $("#hycmad_form").dialog();
	 });
	 */

	$("#hycmad_form").dialog({
		autoOpen : false,
		resizable : false,
		draggable : false,
		zIndex : false,
		position : [225, 428],
		zIndex : 1000,
		show : 'blind',
		width : 675,
		closeText : ''
	});

	$("#hycmad_contact_link").click(function() {

		//alert('here');

		$("#hycmad_form").dialog('open');
		//$("#virtualKeyboard").dialog('open');
	});

});
