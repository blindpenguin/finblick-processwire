<?php
namespace ProcessWire;

class EditorJS extends InputfieldTextarea implements ConfigModule {

    const EditorJSVersion = '2.24.3';
    const EditorJSFile = 'editor.js';

    protected $defaults = [
        'tools' => [
            'header' => 'Header',
            'list' => 'List'
        ]
    ];

    public function __construct()
    {
        parent::__construct();

        $this->set('inlineMode', 0);
        $this->set('usePurifier', 1);
    }

    public static function getModuleInfo() {
        return [
            'title' => 'Editor.js Text Field',
            'summary' => 'JS based block editor',
            'version' => '0.0.1',
            'permanent' => false
        ];
    }

//    public function ___render()
//    {
//
//        $this->globalConfig();
//        $class = $this->className();
//
//        $config = [
//            'baseHref' => wire('config')->urls->root,
//            'contentsCss' => ($this->contentsCss ? $this->contentsCss : $defaultContentsCss),
//            'extraAllowedContent' => $this->extraAllowedContent,
//            'defaultLanguage' => $this->_x('en', 'language-pack'), // CKEditor default language pack to use
//            // 'enterMode' => 'CKEDITOR.ENTER_P', // already the default, can be left out
//            'entities' => false,
//        ];
//
//        return $this->inlineMode ? $this->renderInline() : $this->renderNormal();
//    }

}
