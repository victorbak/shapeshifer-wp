
<div class="filters">
    <a data-filter="all" class="filter active">All</a>           
    <?php foreach ( $args as $term ) :?>
        <?php get_template_part( 'inc/partials/filter', '', $term); ?>
    <?php endforeach; ?>
</div>
