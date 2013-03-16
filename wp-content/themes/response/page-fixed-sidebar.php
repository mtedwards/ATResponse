<?php get_header(); ?>
<div class="sidebar-setup">
<!-- Row for main content area -->
	<div class="small-12 large-12 columns" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class('main-column module') ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
  <aside>
  	<article class="module">
  	 <h3>Section 1</h3>
  	 <p>Something to go in the sidebar</p>
  	</article>
  	<article class="module">
  	 <h3>Section 2</h3>
  	 <p>Something to go in the sidebar</p>
  	</article>
  	<article class="module">
  	 <h3>Section 3</h3>
  	 <p>Something to go in the sidebar</p>
  	</article>
  	<article class="module">
  	 <h3>Section 4</h3>
  	 <p>Something to go in the sidebar</p>
  	</article>
  </aside><!-- /#sidebar -->
</div><?php //End Sidebar Setup  ?>		
<?php get_footer(); ?>