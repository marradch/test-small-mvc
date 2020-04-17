<?php

namespace Controllers;

abstract class AbstractController
{
    public function render($templateName, $params = [])
    {
        extract($params);
        ob_start();
        include('views\\layout.php');
        $buffer = ob_get_clean();
        ob_end_clean();
        return $buffer;
    }

    function __call($arg1, $arg2)
    {
        $className = get_class($this);
        throw new \Exception("method \"$arg1\" not found in controller \"$className\"");
    }
}