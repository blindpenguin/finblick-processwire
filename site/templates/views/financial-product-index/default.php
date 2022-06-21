<?php
include('../../classes/PageSortLink.php');
$pageSortLink = new PageSortLink();

?>
<?php include("../../partials/page-header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="row mt-5">
                <div class="col">
                    <nav class="navbar navbar-expand-lg border-0 navbar-filter">
                        <div class="container-fluid justify-content-sm-center align-content-sm-center">
                            <ul class="navbar-nav nav-pills">
                                <li class="nav-item">
                                    <div class="nav-link text-dark">
                                        Sortiere nach:
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="?sort=<?= $pageSortLink->sortLink('title', $input->get->string('sort')); ?><?= $input->get->string('query') ? '&query='.$input->get->string('query') : null ?>"
                                       class="nav-link text-center <?= str_contains($sort,'title') ? "active" : null; ?> {% if not request.GET.sort %}active{% endif %}">Name</a>
                                </li>
                                <li class="nav-item">
                                    <a href="?sort=<?= $pageSortLink->sortLink('title', $input->get->string('sort')); ?><?= $input->get->string('query') ? '&query='.$input->get->string('query') : null ?>"
                                       class="nav-link text-center <?= str_contains($sort,'risk_level') ? "active" : null; ?>">Risiko</a>
                                </li>
                                <li class="nav-item">
                                    <a href="?sort=<?= $pageSortLink->sortLink('title', $input->get->string('sort')); ?><?= $input->get->string('query') ? '&query='.$input->get->string('query') : null ?>"
                                       class="nav-link text-center <?= str_contains($sort,'profit_level') ? "active" : null; ?>">Profit</a>
                                </li>
                                <li class="nav-item ms-2">
                                    <form method="GET">
                                        <div class="input-group input-group-sm">
                                            <input name="query"
                                                   type="text"
                                                   class="form-control form-control-sm"
                                                   placeholder="Suche nach..."
                                                   value="<?= $input->get->text('query') ?>"
                                                   aria-label="Suche hier nach Finanzprodukte">
                                            <button class="btn btn-sm btn-primary" type="submit">Suche</button>
                                            <a class="btn btn-sm btn-outline-secondary"
                                               href="{% slugurl 'finanzprodukte' %}">Reset</a>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row mt-5">
                <?php foreach ($products as $product): ?>
                    <div class="col-lg-4">
                        <?php include('../../partials/product-card.php'); ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col">
                    <div class="navigation">
                        <?= $pagination ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
