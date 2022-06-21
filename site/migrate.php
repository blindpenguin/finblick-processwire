<?php

namespace ProcessWire;

/** @var \ProcessWire\Modules $modules */

/** @var RockMigrations $rm */

use ProcessWire\FieldtypeTextarea;
use ProcessWire\InputfieldCKEditor;

$rm = $modules->get('RockMigrations');
$rm->createField('content', 'textarea', [
    'label' => 'Content',
    'label1024' => 'Inhalt',
    'type' => 'textarea',
    'inputfield' => 'InputfieldCKEditor',
    'contentType' => FieldtypeTextarea::contentTypeHTML,
    'rows' => 5,
    //'formatTags' => "h2;p;",
    'contentsCss' => "/site/templates/main.css?m=" . time(),
    'toggles' => [
        InputfieldCKEditor::toggleCleanDIV, // convert <div> to <p>
        InputfieldCKEditor::toggleCleanP, // remove empty paragraphs
        InputfieldCKEditor::toggleCleanNBSP, // remove &nbsp;
    ],
    'tags' => ['RMContent']
]);

$rm->createField('summary', 'textarea', [
    'label' => 'Summary',
    'label1024' => 'Zusammenfassung',
    'tags' => ['RMContent'],
]);

$rm->createField('nav_position', 'options', [
    'label' => 'Nav Position',
    'label1024' => 'Nav Position',
    'type' => 'options',
    'options' => [
        1 => 'TOPNAV|Top Nav',
        2 => 'FOOTNAV|Footer Nav',
        3 => 'INFONAV|Information Nav',
        4 => 'INTERNAV|Interaction Nav'
    ],
    'columnWidth' => 50,
    'tags' => ['RMContent', 'RMProduct']
]);

//$rm->watch('./FinancialProduct.migrate.php');
//    $rm->watch('./FinancialProductIndex.migrate.php');
//    $rm->watch('./Broker.migrate.php');
//    $rm->watch('./BrokerIndex.migrate.php');
include "./Home.migrate.php";
include "./FinancialProduct.migrate.php";
include "./FinancialProductIndex.migrate.php";
include "./Broker.migrate.php";
include "./BrokerIndex.migrate.php";
// $rm->run();
