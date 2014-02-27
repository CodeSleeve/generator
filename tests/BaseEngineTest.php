<?php namespace Codesleeve\Generator;

use org\bovigo\vfs\vfsStream;

class BaseEngineTest extends TestCase
{
    public function setUp()
    {
        $this->files = array();
        $this->files['template1/model.ext'] = file_get_contents(__DIR__ . '/fixtures/template1/model.ext');
        // $this->root = vfsStream::setup('root');

        // $this->engine = new BaseEngine;
    }

    public function testCanSetTemplateOnEngine()
    {
        // $this->engine->setTemplate('template');
        // $this->assertEquals('template', $this->engine->getTemplate());
    }

    public function testCanSetTemplateFileOnEngine()
    {
        // $structure = array('test.txt' => 'template');

        // $file = vfsStream::create($structure, $this->root);

        // $this->engine->setTemplateFromFile(vfsStream::url('root/test.txt'));

        // $this->assertEquals('template', $this->engine->getTemplate());
    }

    public function testCanCompileTemplate()
    {
        $context = array(
            'model' => 'Foobar',
        );

        $template = new Template($this->files['template1/model.ext']);
        $output = $template->compile($context);

        var_dump($output);
    }


}