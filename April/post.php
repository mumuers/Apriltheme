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
<p><span class="post-category">文章分类：<?php $this->category(','); ?></span> / <span class="post-date">发布时间：<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></span> / <span class="comments-link">访问次数：<?php get_post_view($this) ?></span> / <?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
<p><?php $this->content(); ?></p>
</section>
<hr>
<p>上一篇&gt;&gt;<?php $this->thePrev('%s','没有了'); ?></p>
<p>下一篇&gt;&gt;<?php $this->theNext('%s','没有了'); ?></p>
<hr><h4>可能下面的内容我们比较有兴趣&gt;&gt;&gt;&gt;</h4>
  <ul>    
  </ul>
  <div class="pinglun">	
<?php $this->need('comments.php'); ?>
</div>
     
      </div>      
<?php $this->need('footer.php'); ?>

