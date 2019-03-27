<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package popper
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="socia-media">
			<a href="https://www.linkedin.com/in/theleonsantana/" target="_blank" ><i class="fab fa-linkedin"></i></a>
      <a href="https://github.com/theleonsantana" target="_blank" ><i class="fab fa-github"></i></a>
      <a href="https://twitter.com/theleonsantana" target="_blank" ><i class="fab fa-twitter-square"></i></a>
    </div><!-- social media -->
		<div class="site-info">
			<p>Copyright &copy; Leonardo Santana <?php echo date("Y"); ?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114351966-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114351966-1');
</script>
</body>
</html>
