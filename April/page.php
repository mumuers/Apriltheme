<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
{template:header}
  <body id="top">
    <!-- Header -->
      <header id="header">
        <a href="<?php $this->options->siteUrl(); ?>" class="image avatar"><img src="<?php $this->options->logoUrl() ?>" alt="" /></a>
        <h1><strong><?php $this->options->title() ?></strong></h1><?php $this->options->description() ?><br><br>        
      </header>
    <!-- Main -->
      <div id="main">    
<p>当前页面：&nbsp;<?php if($this->is('index')):?><!-- 页面首页时 -->
	<a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title(); ?>">首页</a> &gt;	
	<?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
		<a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title(); ?>">首页</a> &gt; <?php $this->category(); ?> &gt; 正文
	<?php else: ?><!-- 页面为其他页时 -->
		<a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title(); ?>">首页</a> &gt; <?php $this->archiveTitle(' &raquo; ','',''); ?>
	<?php endif; ?></p>
<section id="one">
<header class="major"><h1>
<a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
</header>

<p><?php $this->content(); ?></p>
</section>

      
      </div>      
<?php $this->need('footer.php'); ?>

