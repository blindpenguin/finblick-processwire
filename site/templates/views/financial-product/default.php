<?php
namespace ProcessWire;
?>
<?php include("../../partials/page-header.php"); ?>
<div class="container p-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php $product = $page; include('../../partials/table-assessment.php'); ?>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <?= $page->content ?>
        </div>
    </div>
</div>
