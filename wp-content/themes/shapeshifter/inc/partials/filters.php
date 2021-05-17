<div class="filters row">
    <div class="d-none d-lg-block col-md-12">
        <a data-filter="all" class="filter active">All</a>           
        <?php foreach ( $args as $term ) :?>
            <a data-filter="<?php echo $term->slug ?>" class="filter">
                <?php echo $term->name ?>
            </a>
        <?php endforeach; ?>
    </div>
    <div class="col-12 d-block d-lg-none">
        <button class="button" type="button" data-toggle="collapse" data-target="#deptFilter" aria-expanded="false" aria-controls="collapseExample">
            Filter by department
            <span class="icon"><em class="fas fa-align-left"></em></span>
        </button>
        <div class="collapse" id="deptFilter">
            <div class="card card-body">
                <a data-target="#deptFilter" data-toggle="collapse" data-toggle="collapse" data-filter="all" class="filter active">All</a>           
                <?php foreach ( $args as $term ) :?>
                    <a data-target="#deptFilter" data-toggle="collapse" data-filter="<?php echo $term->slug ?>" class="filter">
                        <?php echo $term->name ?>
                    </a>
                <?php endforeach; ?>        
            </div>
        </div>
    </div>
</div>
