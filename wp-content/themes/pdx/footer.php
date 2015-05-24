<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package pdx
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container" role="contentinfo">
		<div class="site-info">
			&copy;2015 Boot Scootin' 2 PDX
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
(function($){
	var titleWords = $('h1').text().split(' ').length;
  if (titleWords > 3) { // So we don't have weird one word lines at top
    $('h1').each(function() {
	    var wordArray = $(this).html().split(' ');
	    if (wordArray.length > 1) {
        wordArray[wordArray.length-2] += '&nbsp;' + wordArray[wordArray.length-1];

        var lastWord = wordArray.pop();
        lastWord = lastWord.replace(/.*((?:<\/\w+>)*)$/, '$1');
        $(this).html(wordArray.join(' ') + lastWord);
	    }
		});
	}
})(jQuery);
</script>

</body>
</html>
