<?php


namespace EasyPanel\Commands\Actions;


use Illuminate\Console\GeneratorCommand;

class MakeSingle extends GeneratorCommand
{

    use StubParser, CommandParser;

    protected $name = 'panel:single';
    private $file = 'single';
    protected $type = 'Single Component';
    protected $description = 'Make a single component to delete action in CRUD';
    private $path;

}
