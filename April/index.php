<?php
/**
 * 基于Typecho 程序单栏个人博客主题。
 * 这款主题适合个人博客、专题文章记录分享。
 *
 * 免责声明：免费主题，我们没有义务和责任提供技术服务，需要用到正规网站，如果用于不良网站造成的后果我们不负责任。造成后果自行承担。
 *
 * @package April Theme For Typecho 
 * @author 搬瓦工中文网
 * @version 1.1
 * @link https://www.cnbanwagong.com/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

  <body id="top">
    <!-- Header -->
      <header id="header">
        <a href="<?php $this->options->siteUrl(); ?>" class="image avatar"><img src="<?php $this->options->logoUrl() ?>" alt="" /></a>
        <h1><strong><?php $this->options->title() ?></strong></h1><?php $this->options->description() ?><br><br>        
      </header>
    <!-- Main -->
      <div id="main">    
<?php while($this->next()): ?>
<section id="one">
<header class="major">
<h2><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
</header>
<p><span class="post-category">文章分类：<?php $this->category(','); ?></span> / <span class="post-date">发布时间：<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></span> / <span class="comments-link"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></span></p>
<p><?php $this->content(''); ?></p>
<ul class="actions">
<li><a href="<?php $this->permalink() ?>" class="button">阅读更多...</a></li>
</ul>
</section>
 <?php endwhile; ?>    
<hr><?php $this->pageNav('前一页', '后一页'); ?>
      </div>      
  <?php $this->need('footer.php'); ?>








