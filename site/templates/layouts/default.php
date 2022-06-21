<?php
namespace ProcessWire;
/** @var Pages $pages */
$home = $pages->get('/');
?>
<!doctype html>
<html lang="<?= $this->lang ?>">

<head>

    <!-- metadata -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="ProcessWire CMS/CMF">
    <?php if ($page->meta_description): ?>
        <meta name="description" content="<?= $page->meta_description ?>">
    <?php endif; ?>
    <?php if ($page->meta_keywords): ?>
        <meta name="keywords" content="<?= $page->meta_keywords ?>">
    <?php endif; ?>

    <!-- page title -->
    <title><?= $page->title ?></title>

    <!-- stylesheets -->
    <link rel="stylesheet" href="<?= $config->urls->resources ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= $config->urls->resources ?>css/lux/bootstrap.min.css">


</head>

<body class="p-0 m-0-<?= $page->template ?>">

<?php include "../partials/topnav.php" ?>

<?= $placeholders->default ?>


</body>

</html>
