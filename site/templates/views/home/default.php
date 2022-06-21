<?php
namespace ProcessWire;
/** @var $placeholders */
/** @var Page $page */

?>
<section class="hero-banner bg-light border-0 border-bottom py-5">
    <div class="container">
        <div class="row row align-items-center">
            <div class="col-lg-5 offset-lg-1 order-lg-1">
                <img src="<?= $page->header_image->url ?>" width="400" />
            </div>
            <div class="col-lg-6">
                <h1 class="mt-3"><?= $page->header ?></h1>
                <h4 class="mt-3"><?= $page->subheader ?></h4>
                <p class="lead text-secondary my-5">
                    <?= $page->intro_text ?>
                </p>
                <a href="<?= $page->button_link->url ?>" class="btn btn-primary btn-lg shadow-material-2">Zu den Produkten</a>
            </div>
        </div>
    </div>
</section>
