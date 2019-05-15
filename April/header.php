<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$language}" lang="{$language}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{$host}zb_users/theme/{$theme}/style/images/favicon.ico" />
  <title><?php if($this->_currentPage>1) echo '第 '.$this->_currentPage.' 页 - '; ?><?php $this->archiveTitle('', '', '_'); ?><?php $this->options->title(); ?>
<?php if($this->is('index')): ?>_<?php $this->options->subtitle() ?><?php endif; ?></title>
 <link rel="stylesheet" href="<?php $this->options->themeUrl('layui/css/layui.css'); ?>">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('style/style.css'); ?>">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('style/font-awesome.min.css'); ?>">
 <?php if($this->is('index')): ?>
	<meta name="description" content="<?php $this->options->description() ?>" />
	<meta name="keywords" content="<?php $this->options->keywords() ?>" />
   <?php else: ?>
   	<?php $this->header(); ?><?php endif; ?>
  </head>






