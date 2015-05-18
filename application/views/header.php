<!DOCTYPE html>
<html>
<head>
	<title><?php echo isset($title) ? $title : ' Mediashop ';?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" href="<?php echo base_url();?>bootstrap/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url();?>bootstrap/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet"type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>">
	<link rel="stylesheet"type="text/css" href="<?php echo base_url('bootstrap/css/sb-admin.css');?>">
	<link rel="stylesheet"type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap-responsive.min.css');?>">
	<link rel="stylesheet"type="text/css" href="<?php echo base_url('bootstrap/css/katalog.css');?>">
	<link rel="stylesheet"type="text/css" href="<?php echo base_url('bootstrap/font-awesome/css/font-awesome.min.css');?>">
	<link rel="stylesheet"type="text/css" href="<?php echo base_url('bootstrap/css/filter.css');?>">
	<link rel="stylesheet"type="text/css" href="<?php echo base_url('bootstrap/css/col.css');?>">
	<link rel="stylesheet"type="text/css" href="<?php echo base_url('bootstrap/css/4cols.css');?>">
	<script src="<?php echo base_url('bootstrap/js/jquery.js');?>"></script>
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url();?>bootstrap/js/highcharts.js"></script>
	<script src="<?php echo base_url();?>bootstrap/js/highcharts-3d.js"></script>
	<script src="<?php echo base_url();?>bootstrap/js/script.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/jquery-1.7.2.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/nav.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/easing.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/nav-hover.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/filter.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/exporting.js"></script>
	<script type="text/javascript">
	  $(document).ready(function($){
		$('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
		$('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
		$('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
		$('.checkall').click (function(){
			if(this.checked){
				$('.checklist').each(function(){
					this.checked= true;
				})
			}else{
				$('.checklist').each(function(){
					this.checked= false;
				})
			}
		});
	  });
	</script>
</head>
<body>
   <div id="wrapper">