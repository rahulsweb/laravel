

<head>
    <meta charset="utf-8">
    ...
    
    <?php if($usersChart): ?>
    <?php echo $usersChart->script(); ?>

    <?php endif; ?>
</head>

<div class="container">
    <h1>Users Graphs</h1>
    <div class="row">
        <div class="col-6">
            <div class="card rounded">
                <div class="card-body py-3 px-3">
                    <?php echo $usersChart->container(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

