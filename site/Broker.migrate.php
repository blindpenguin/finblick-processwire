<?php

namespace ProcessWire;

use ProcessWire\FieldtypeFile;

/** @var \ProcessWire\Modules $modules */
$rm = $wire->modules->get('RockMigrations');
$rm->createField('reflink', [
    'label' => "Ref Link",
    'label1024' => 'Ref Link',
    'type' => 'url',
    'noRelative' => 1,
    'textformatters' => [
        'TextformatterEntities',
    ],
    'tags' => 'RMContent'
]);

$rm->createField('logo', [
    'label' => 'Logo',
    'label1024' => 'Logo',
    'type' => 'image',
    'maxFiles' => 1,
    'extensions' => "jpg jpeg gif png svg",
    'okExtensions' => ['svg'],
    'outputFormat' => FieldtypeFile::outputFormatSingle,
    'focusMode' => 'zoom',
    'resizeServer' => 1,
    'tags' => 'RMContent'
]);

$rm->createTemplate('broker');
$rm->setTemplateFields('broker', [
    'title',
    'reflink',
    'logo',
    'content',
]);
$rm->setTemplateData('broker', [
    'label' => 'Broker',
    'label1024' => 'Broker',
    'altFilename' => 'wireframe',
    'noShortcut' => 0,
    'noChildren' => true,
    'parentTemplates' => [
        'broker_index',
    ]
]);
