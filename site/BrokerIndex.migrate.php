<?php

namespace ProcessWire;

/** @var \ProcessWire\Modules $modules */
$rm = $wire->modules->get('RockMigrations');

$rm->createTemplate('broker_index');
$rm->setTemplateFields('broker_index', [
    'title',
    'summary',
    'nav_position'
]);
$rm->setTemplateData('broker_index', [
    'label' => 'Broker Index',
    'label1024' => 'Broker Index',
    'altFilename' => 'wireframe',
    'noParents' => -1,
    'allowPageNum' => 1,
    'childTemplates' => [
        'broker',
    ]
]);
