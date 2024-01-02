<?php

namespace BladeScript;

use Illuminate\View\View;
use BladeScript\Contracts\ScriptEngine;

class Script
{
    /**
     * Style engine.
     *
     * @var \BladeStyle\Contracts\StyleEngine
     */
    protected $engine;

    /**
     * Create new style instance.
     *
     * @param  string  $name
     * @param  ScriptEngine  $compiler
     * @return void
     * @param string $path
     */
    public function __construct(/**
     * Path where style is located.
     */
    protected $path, ScriptEngine $engine)
    {
        $this->engine = $engine;
    }

    /**
     * Render style.
     *
     * @return string
     */
    public function render()
    {
        return $this->engine->get($this->path);
    }
}
