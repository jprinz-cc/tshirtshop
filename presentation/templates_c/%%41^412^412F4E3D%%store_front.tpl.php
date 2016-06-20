<?php /* Smarty version 2.6.25-dev, created on 2016-06-20 04:24:48
         compiled from store_front.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'store_front.tpl', 2, false),array('function', 'load_presentation_object', 'store_front.tpl', 3, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "site.conf"), $this);?>

<?php echo smarty_function_load_presentation_object(array('filename' => 'store_front','assign' => 'obj'), $this);?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	   <title><?php echo $this->_config[0]['vars']['site_title']; ?>
</title>
	   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	   <link rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
styles/tshirtshop.css" type="text/css">
	</head>
	<body class="yui-skin-sam">
		<div id="doc" class="yui-t2">
	 		<div id="bd" role="main">
				<div id="yui-main">
					<div class="yui-b">
						<div id="header" class="yui-g">
							<a href="index.php">
								<img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
images/tshirtshop.png" alt="tshirtshop logo" />
							</a>
						</div>
						<div id="contents" class="yui-g">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mContentsCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						</div>
					</div>
				</div>
				<div class="yui-b">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "departments_list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mCategoriesCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>	
			</div>	
		</div>
	</body>
</html>