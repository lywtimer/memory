<?php

namespace mszlu\core\middleware;

abstract class AbstractMiddleware implements MiddlewareInterface
{
    public function onException($e)
    {
        fwrite(STDOUT, $e->getMessage() . PHP_EOL);
    }
}
