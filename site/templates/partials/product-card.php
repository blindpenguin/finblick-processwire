<div class="card mb-5">
    <div class="card-body">
        <h4 class="card-title">
            <?= $product->title ?>
        </h4>
        <hr>
        <?php include('table-assessment.php'); ?>

    </div>
    <div class="card-footer bg-light border-0 border-top">
        <a href="<?= $product->url ?>"
           class="btn btn-sm btn-primary">Details</a>
    </div>
</div>
