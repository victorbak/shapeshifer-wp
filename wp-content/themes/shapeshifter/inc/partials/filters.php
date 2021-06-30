<div class="filters row">
    <div class="d-none d-lg-block col-md-12">
        <button data-filter="all" role="button" class="filter active">All</button>
        <?php foreach ( $args as $term ) :?>
            <button role="button" data-filter="<?php echo $term->slug ?>" class="filter">
                <?php echo $term->name ?>
        </button>
        <?php endforeach; ?>
    </div>
    <div class="col-12 d-block d-lg-none">
        <button class="button" role="button" type="button" data-toggle="collapse" data-target="#deptFilter" aria-expanded="false" aria-controls="deptFilter">
            <span id="deptFilterText">Filter by department</span>
            <span class="icon"><em class="fas fa-filter"></em></span>
        </button>
        <div class="collapse" id="deptFilter">
            <div class="card card-body">
                <a role="link" data-target="#deptFilter" data-toggle="collapse" data-toggle="collapse" data-filter="all" class="filter active">All</a>           
                <?php foreach ( $args as $term ) :?>
                    <a role="link" data-target="#deptFilter"
                        data-toggle="collapse" 
                        data-name="<?php echo $term->name ?>"
                        data-filter="<?php echo $term->slug ?>" 
                        class="filter"
                    >
                        <?php echo $term->name ?>
                    </a>
                <?php endforeach; ?>        
            </div>
        </div>
    </div>
</div>
