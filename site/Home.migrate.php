<?php

use ProcessWire\FieldtypeFile;
use ProcessWire\FieldtypeTextarea;
use ProcessWire\InputfieldCKEditor;

$rm = $wire->modules->get('RockMigrations');

$rm->createField('header', 'textarea', [
    'label' => 'Header',
    'label1024' => 'Header',
    'tags' => ['RMContent', 'RMHome'],
]);

$rm->createField('subheader', 'textarea', [
    'label' => 'Sub Header',
    'label1024' => 'Sub Header',
    'tags' => ['RMContent', 'RMHome']
]);

$rm->createField('intro_text', 'textarea', [
    'label' => 'Intro Text',
    'label1024' => 'Intro Text',
    'type' => 'textarea',
    'inputfieldClass' => 'InputfieldCKEditor',
    'contentType' => FieldtypeTextarea::contentTypeHTML,
    'rows' => 5,
    //'formatTags' => "h2;p;",
    'contentsCss' => "/site/templates/main.css?m=" . time(),
    'toggles' => [
        InputfieldCKEditor::toggleCleanDIV, // convert <div> to <p>
        InputfieldCKEditor::toggleCleanP, // remove empty paragraphs
        InputfieldCKEditor::toggleCleanNBSP, // remove &nbsp;
    ],
    'tags' => ['RMContent', 'RMHome']
]);

$rm->createField('button_link', 'page', [
    'label' => 'Button Link',
    'label1024' => 'Button Link',
    'derefAsPage' => 1,
    'inputfield' => 'InputfieldPageListSelect',
    'parent_id' => 1,
    'addable' => 0,
    'tags' => ['RMContent', 'RMHome']
]);

$rm->createField('header_image', [
    'label' => 'Header Image',
    'label1024' => 'Header Bild',
    'type' => 'image',
    'maxFiles' => 1,
    'extensions' => "jpg jpeg gif png svg",
    'okExtensions' => ['svg'],
    'outputFormat' => FieldtypeFile::outputFormatSingle,
    'focusMode' => 'zoom',
    'resizeServer' => 1,
    'tags' => ['RMContent', 'RMHome']
]);

$rm->setTemplateFields('home', [
    'title',
    'header_image',
    'header',
    'subheader',
    'intro_text',
    'button_link'
]);
