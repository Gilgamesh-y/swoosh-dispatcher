<?php

namespace Src\Dispatcher\Provider;

use Src\Core\AbstractProvider;
use Src\Dispatcher\RequestContext;
use Src\Dispatcher\DispatcherServer;

class DispatchServiceProvider extends AbstractProvider
{
    public function register()
    {
        $this->app->set('dispatcher', function () {
            return new DispatcherServer($this->app);
        });
        $this->app->set('context_request', function () {
            return new RequestContext;
        });
    }
}