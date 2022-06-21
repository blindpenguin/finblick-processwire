<?php

namespace ProcessWire;

/** @var \ProcessWire\Modules $modules */
/** @var Wire $wire */
/** @var WireDatabase $database */
$rm = $wire->modules->get('RockMigrations');

//$rm->createField('risk_level', 'options', [
//    'label' => 'Risk Level',
//    'label1024' => 'Risiko Level',
//    'type' => 'options',
//    'options' => [
//        1 => 'VERYLOW|Very Low',
//        2 => 'LOW|Low',
//        3 => 'MIDDLE|Middle',
//        4 => 'HIGH|High',
//        5 => 'VERYHIGH|Very High',
//    ],
//    'optionLabels' => [
//        'de' => [
//            'Sehr niedrig',
//            'Niedrig',
//            'Mittel',
//            'Hoch',
//            'Sehr hoch',
//        ],
//    ],
//    'columnWidth' => 50,
//    'tags' => ['RMContent', 'RMProduct']
//]);

$rm->createField('test_field', 'options', [
    'label' => 'Test Field',
    'label1024' => 'Test Feld',
    'type' => 'options',
    'options' => [
        1 => 'VERYLOW|Very Low',
        2 => 'LOW|Low',
        3 => 'MIDDLE|Middle',
        4 => 'HIGH|High',
        5 => 'VERYHIGH|Very High',
    ],
    'optionLabels' => [
        'de' => [
            'Sehr niedrig',
            'Niedrig',
            'Mittel',
            'Hoch',
            'Sehr hoch',
        ],
    ],
]);


//if ($fields->get('risk_level')) {
//    $riskLevel = $fields->get('risk_level');
//    $options = [
//        1 => 'Sehr niedrig',
//        2 => 'Niedrig',
//        3 => 'Mittel',
//        4 => 'Hoch',
//        5 => 'Sehr hoch',
//    ];
//
//    foreach($options as $key => $option) {
//        $query = $database->prepare("UPDATE fieldtype_options SET title1024='$option' WHERE option_id='$key' AND fields_id='$riskLevel->id'");
//        $database->execute($query);
//    }
//}

//$rm->createField('profit_level', 'options', [
//    'label' => 'Profit Level',
//    'label1024' => 'Profit Level',
//    'type' => 'options',
//    'options' => [
//        1 => 'VERYLOW|Very Low',
//        2 => 'LOW|Low',
//        3 => 'MIDDLE|Middle',
//        4 => 'HIGH|High',
//        5 => 'VERYHIGH|Very High',
//    ],
//    'columnWidth' => 50,
//    'tags' => ['RMContent', 'RMProduct']
//]);

//if ($fields->get('profit_level')) {
//    $profitLevel = $fields->get('profit_level');
//    $options = [
//        1 => 'Sehr niedrig',
//        2 => 'Niedrig',
//        3 => 'Mittel',
//        4 => 'Hoch',
//        5 => 'Sehr hoch',
//    ];
//
//    foreach($options as $key => $option) {
//        $query = $database->prepare("UPDATE fieldtype_options SET title1024='$option' WHERE option_id='$key' AND fields_id='$profitLevel->id'");
//        $database->execute($query);
//    }
//}

$rm->createTemplate('financial-product');
$rm->setTemplateFields('financial-product', [
    'title',
    //'risk_level',
    //'profit_level',
    'content',
]);
$rm->setTemplateData('financial-product', [
    'label' => 'Financial Product',
    'label1024' => 'Finanzprodukt',
    'altFilename' => 'wireframe',
    'noShortcut' => 0,
    'noChildren' => true,
    'parentTemplates' => [
        'financial-product-index',
    ]
]);
