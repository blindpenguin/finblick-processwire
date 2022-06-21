<?php

namespace ProcessWire;

/** @var \ProcessWire\Modules $modules */
$rm = $wire->modules->get('RockMigrations');

$rm->createTemplate('financial-product-index');
$rm->setTemplateFields('financial-product-index', [
    'title',
    'summary',
    'nav_position'
]);
$rm->setTemplateData('financial-product-index', [
    'label' => 'Financial Product Index',
    'label1024' => 'Finanzprodukte Index',
    'altFilename' => 'wireframe',
    'noParents' => -1,
    'allowPageNum' => 1,
    'childTemplates' => [
        'financial-product',
    ]
]);
