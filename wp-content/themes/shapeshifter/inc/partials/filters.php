<div class="filters">
    <a data-filter="all" class="filter active">All</a>           
    <?php foreach ( $args as $term ) :?>
        <a data-filter="<?php echo $term->slug ?>" class="filter">
            <?php echo $term->name ?>
        </a>
    <?php endforeach; ?>
</div>
