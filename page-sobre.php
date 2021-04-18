<?php
// Template Name: Sobre
?>

<?php get_header( ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<body>



	<section class="container sobre">
	<h2 class="subtitulo"><?php the_title(); ?></h2>

		<div class="grid-8">
			<img src="<?php the_field('foto_descricao') ?>" alt="<?php the_field('foto_descricao_alt') ?>">
		</div>

		<div class="grid-8">

			<!-- Sobre Widget  -->
		<?php if(have_rows('sobre_widget')): while(have_rows('sobre_widget')) : the_row(); ?>
			<h2><?php the_sub_field('titulo_widget'); ?></h2>
			<?php the_sub_field('descricao_widget'); ?>
			<?php endwhile; else : endif; ?>
		
		</div>
	</section>

	<?php endwhile; else: endif; ?>

	<?php get_footer( ); ?>