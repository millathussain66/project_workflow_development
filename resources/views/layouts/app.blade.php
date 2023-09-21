<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="{{ asset('')}}assets/css/style.css">
	<link rel="stylesheet" href="{{ asset('')}}assets/css/form.css">
	<link rel="stylesheet" href="{{ asset('')}}assets/jqwidgets/styles/jqx.base.css" type="text/css" />
	<link rel="stylesheet" href="{{ asset('')}}assets/jqwidgets/styles/jqx.fresh.css" type="text/css" />
	<link rel="stylesheet" href="{{ asset('')}}assets/jqwidgets/styles/jqx.light.css" type="text/css" />
	<link rel="stylesheet" href="{{ asset('')}}assets/jqwidgets/styles/jqx.ui-sunny.css" type="text/css" />
	<link rel="stylesheet" href="{{ asset('')}}assets/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
	<link rel="stylesheet" href="{{ asset('')}}assets/jqwidgets/styles/jqx.darkblue.css" type="text/css" /> 
	<link rel="stylesheet" href="{{ asset('')}}assets/msg_popup/common.css" type="text/css" />
	<link rel="stylesheet" href="{{ asset('')}}assets/css/multiple-select.css " type="text/css" /> 
	<link rel="stylesheet" href="{{ asset('')}}assets/calender/js_css/css/ui-lightness/jquery-ui-1.8.10.custom.css" type="text/css"> 

	<script type="text/javascript" src="{{ asset('')}}assets/scripts/jquery-3.6.3.min.js"></script>

	<script type="text/javascript" src="{{ asset('')}}assets/scripts/gettheme.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxcore.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxexpander.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxvalidator.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxbuttons.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxcheckbox.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/globalization/globalize.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxcalendar.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxdatetimeinput.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxmaskedinput.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxlistbox.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxcombobox.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxscrollbar.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxwindow.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxmenu.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxdropdownlist.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxswitchbutton.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxradiobutton.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxinput.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxgrid.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxgrid.pager.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxgrid.selection.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxgrid.edit.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxgrid.filter.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxgrid.sort.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxgrid.grouping.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxdata.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxdata.export.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxgrid.export.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxpanel.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxtooltip.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxtabs.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxdraw.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxgrid.columnsresize.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxdropdownbutton.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxcolorpicker.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxeditor.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxdragdrop.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxform.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/jqwidgets/jqxgrid.columnsreorder.js"></script>
	<script type="text/javascript" src="{{ asset('')}}assets/js/jquery.multiple.select.js"></script> 

	<script type="text/javascript">
		var baseurl = "{{url('/')}}";
		jQuery.noConflict();
		var j = jQuery.noConflict();
	</script>
	<script src="{{ asset('')}}assets/js/custom.js" type="text/javascript"></script>
	<link rel="stylesheet" href="{{ asset('')}}assets/msg_popup/common.css" type="text/css" />
	<script language="JavaScript" type="text/javascript" src="{{ asset('')}}assets/msg_popup/Util-jar.js">
	</script>
	<script type="text/javascript" src="{{ asset('')}}assets/calender/js/jquery-ui.js"></script>
</head>
<body>


    @yield('content');

    <a style="text-decoration:none" onclick="javascript:EOL.messageBoard.open(this.href, (jQuery(window).width()-70), jQuery(window).height(), 'yes'); return false;" 
		href="" title=""><input type="button"  value="Add User Info" id="sendButton" /></a>
  
</body>
</html>