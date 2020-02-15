<?php

namespace Src\Dispatcher;

use Src\App;
use Src\Core\Context;

class RequestContext extends Context
{
    /**
     * @var array Coroutine context
     */
    public $context;

    /**
     * Key of current Request
     */
    const REQUEST_KEY = 'request';

    /**
     * Key of current Response
     */
    const RESPONSE_KEY = 'response';

    public static function __callStatic($method, $arguments)
    {
        return App::get('context_request')->$method(...$arguments);
    }
}
