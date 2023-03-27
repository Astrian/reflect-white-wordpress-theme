<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div class="comment-area">
<hr>
<div id="comments" class="comments-area">
	<div class="comments-block-title">评论</div>
		

		<div class="single-comment">
			<div class="single-comment-avatar">
				<?php echo get_avatar( $comment, 60 ); ?>
			</div>
			<div class="single-comment-content">
				<div class="single-comment-meta">
					<?php 
						$author_url = get_comment_author_url();
						if ($author_url == '') { ?>
							<span class="single-comment-author"><?php echo $comment->comment_author ?></span>
						<?php } else { ?>
							<span class="single-comment-author"><a href="<?php echo $author_url; ?>" target="_blank"><?php echo $comment->comment_author ?></a></span>
						<?php }
					?>
					
					<span class="single-comment-time"><?php comment_date(); ?></span>
				</div>
				<div class="single-comment-text">
					<?php echo $comment->comment_content ?>
					
				</div>
			</div>
		</div><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav class="navigation comment-navigation" role="navigation">

				<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
			</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
			<p class="no-comments"><?php _e( 'Comments are closed.', 'twentythirteen' ); ?></p>
		<?php endif; ?>

	<?php
			endforeach;
		} else {
			echo '<div class="no-comments">暂无评论</div>';
		}
	?>

	<?php comment_form(); ?>

</div><!-- #comments -->
		</div>