<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package minimal-portfolio
 */

get_header();
?>
<div id="content" class="site-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
			
						<section class="error-404 not-found">
							<header class="page-title">
								<h1 class="title" ><?php esc_html_e( '诶？页面找不到了...', 'minimal-portfolio' ); ?></h1>
							</header><!-- .page-header -->
			
							<div class="page-content">
								<p><?php esc_html_e( '这里只有一片虚无...试试搜索其他内容？', 'minimal-portfolio' ); ?></p>
								<div class="search-box-wrap">
									<?php get_search_form(); ?>
								</div>
							</div><!-- .page-content -->
						</section><!-- .error-404 -->
			
					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
