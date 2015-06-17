<?php
/**
 * @package                Joomla.Site
 * @subpackage	Templates.beez_20
 * @copyright        Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license                GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access.
	defined('_JEXEC') or die;
	
	// get params
	$app				= JFactory::getApplication();
	$doc				= JFactory::getDocument();
	$templateparams		= $app->getTemplate(true)->params;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css"></link>
	</head>
	<body>
		<div class="body">
			<div class="header">
				<div class="header-logo">
					<span class="logo"><span style="color:#01bffb"><?php echo htmlspecialchars($templateparams->get('sitetitle_part1'));?></span><?php echo htmlspecialchars($templateparams->get('sitetitle_part2'));?></span>
					<div id="menu">
						<jdoc:include type="modules" name="top-menu" />
					</div>
				</div>
				<div id="banner"><jdoc:include type="modules" name="top-banner" /></div>
			</div>
			<div class="content">
				<div class="blue-block" id="recomend">
					<jdoc:include type="modules" name="recomend" />
					<!--
					<div id="recomend-title">Я рекомендую:</div>
					<div id="recomend-type">&gt;&gt; Программы</div>
					<div id="recomend-name">Program name</div>
					<div id="recomend-text">
						Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст 
					</div>
					<div class="button" id="recomend-download"><a style="padding-top:2px" class="link-button" href="/download/">Скачать &#187;</a></div>
					-->
				</div>
				
				<div id="interes">
					<div id="interes-title"><?php echo htmlspecialchars($templateparams->get('iinteres'));?></div>
					<!--jdoc:include type="modules" name="interes" /-->
					<jdoc:include type="component" />
					<!--
					<div id="interes-image">
					<div id="interes-null"></div>
						<div id="interes-image-opacity-description">
							<div id="interes-image-title">Noize MC в Arena Moscow</div>
							<div id="interes-image-description">-Вьетнам, -Сам!, -Эгоизм</div>
						</div>
					</div>
					<div id="interes-description">
						Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text 
					</div>
					-->
				</div>
				<div class="blue-block" id="blog-last">
					<jdoc:include type="modules" name="lastblog" />
					<!--
					<div id="blog-last-title">Последнее в блоге</div>
					<div id="blog-last-text">Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text </div>
					<div id="blog-last-next">
						<div class="button" id="blog-last-btn-next">
							<a href="/last-blog" class="link-button">Читать далее &#187;</a>
						</div>
					</div>
					-->
				</div>
				<div class="grey-block" id="images">
					<jdoc:include type="modules" name="cont-1" />
				</div>
				<div id="i_like">
					<?php echo htmlspecialchars($templateparams->get('ilike'));?>
				</div>
				<div class="" style="overflow:hidden" id="video">
					<jdoc:include type="modules" name="video" />
				</div>
				<div class="grey-block" id="message">
					<div style="padding: 5px 5px 5px 5px;">
						<jdoc:include type="modules" name="cont-2" />
					</div>
				</div>
				<div id="box-bottom">
					<div class="blue-block" id="box-bot-left">
						<jdoc:include type="modules" name="bot-block1" />
						<!--
						<div class="box-bot-title">Что это такое?</div>
						<div class="tox-bot-text">
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст 
						</div>
						-->
					</div>
					<div class="blue-block" id="box-bot-center">
						<jdoc:include type="modules" name="bot-block2" />
						<!--
						<div class="box-bot-title">Кто я такой?</div>
						<div class="tox-bot-text">
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст 
						</div>
						-->
					</div>
					<div class="blue-block" id="box-bot-right">
						<jdoc:include type="modules" name="bot-block3" />
						<!--
						<div class="box-bot-title">Как со мной связатся?</div>
						<div class="tox-bot-text">
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст 
						</div>
						-->
					</div>
				</div>
			</div>
			<div valign="middle" class="foother">
				<span id="design-by">Design by <a href='#'>Xom</a> & <a href='#'>Diman</a></span>
				<span id="copy">All rights reserved &#0169;</span>
			</div>
		</div>
		<jdoc:include type="modules" name="debug" />
	</body>
</html>