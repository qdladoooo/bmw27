<?php /* Smarty version Smarty-3.1.13, created on 2013-03-20 11:06:44
         compiled from "templates/layout/layout.html" */ ?>
<?php /*%%SmartyHeaderCode:15272482015146ad0e237605-65839163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd15adafac29fecec779c63cf643eec7933eabf9a' => 
    array (
      0 => 'templates/layout/layout.html',
      1 => 1363748667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15272482015146ad0e237605-65839163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5146ad0e25a681_26684723',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5146ad0e25a681_26684723')) {function content_5146ad0e25a681_26684723($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
		<meta charset="utf-8">
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Le styles -->
		<link href="<?php echo @constant('__CSS_PATH');?>
bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">
		<link href="<?php echo @constant('__CSS_PATH');?>
global.css" media="screen" rel="stylesheet" type="text/css">
		<link href="<?php echo @constant('__CSS_PATH');?>
bootstrap-responsive.min.css" media="screen" rel="stylesheet" type="text/css">
		<link href="<?php echo @constant('__IMG_PATH');?>
favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
		<!-- Scripts -->
		<script type="text/javascript" src="<?php echo @constant('__JS_PATH');?>
jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo @constant('__JS_PATH');?>
bootstrap.min.js"></script>
		<!--[if lt IE 9]><script type="text/javascript" src="/js/html5.js"></script><![endif]-->                                      
	</head>
<body>
<div id="stage">
	<div id="header" class="row">
		<div class="span4">...</div>
	  	<div class="span8">...</div>
	</div>
	
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>


</div>

</body>
</html><?php }} ?>