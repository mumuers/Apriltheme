<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!-- Footer -->
      <footer id="footer">
        <ul class="icons">
          <li><a href="<?php $this->options->subtwitter() ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
          <li><a href="<?php $this->options->subgithub() ?>" class="icon fa-github"><span class="label">Github</span></a></li>
          <li><a href="<?php $this->options->subweibo() ?>" class="icon fa-weibo"><span class="label">WeiBo</span></a></li>
          <li><a href="mailto:<?php $this->options->subemail() ?>" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
          
          <li>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.</li>
        </ul>
      </footer>
  </body>
  <script src="<?php $this->options->themeUrl('script/jquery.min.js'); ?>"></script>
   <script src="<?php $this->options->themeUrl('script/skel.min.js'); ?>"></script>
  <script src="<?php $this->options->themeUrl('script/init.js'); ?>"></script>
<?php $this->footer(); ?>
</html>

