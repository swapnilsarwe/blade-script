<?php

namespace BladeScript\Contracts;

interface ScriptEngine
{
    /**
     * Get compiled script from path.
     *
     * @return string
     */
    public function get(string $path);
}
