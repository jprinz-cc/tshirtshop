{* smarty *}
{config_load file="site.conf"}
{load_presentation_object filename="store_front" assign="obj"}
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	   <title>{$obj->mPageTitle}</title>
	   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	   <link rel="stylesheet" href="{$obj->mSiteUrl}styles/tshirtshop.css" type="text/css">
	</head>
	<body class="yui-skin-sam">
		<div id="doc" class="yui-t2">
	 		<div id="bd" role="main">
				<div id="yui-main">
					<div class="yui-b">
						<div id="header" class="yui-g">
							<a href="index.php">
								<img src="{$obj->mSiteUrl}images/tshirtshop.png" alt="tshirtshop logo" />
							</a>
						</div>
						<div id="contents" class="yui-g">
							{include file=$obj->mContentsCell}
						</div>
					</div>
				</div>
				<div class="yui-b">
					{include file="departments_list.tpl"}
					{include file=$obj->mCategoriesCell}
				</div>	
			</div>	
		</div>
	</body>
</html>
