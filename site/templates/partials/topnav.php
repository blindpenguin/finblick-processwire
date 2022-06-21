<?php namespace ProcessWire;
/** @var Page $page */
/** @var $home */
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-material">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Finblick</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class='nav-item'>
                    <a class='nav-link <?= $home->url == $page->url ? 'active' : false; ?>' href='<?= $home->url ?>'>
                        <?= $home->title ?>
                    </a>
                </li>
                <?php foreach($home->children as $item): ?>
                    <?php if($item->nav_position->value == 'TOPNAV'): ?>
                        <li class='nav-item'>
                            <a class='nav-link <?= $item->url == $page->url ? 'active' : false; ?>' href='<?= $item->url ?>'>
                                <?= $item->title ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>
