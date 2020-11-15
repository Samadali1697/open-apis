<?php
declare(strict_type=1);

namespace App;

use DI\ContainerBuilder;
use App\Controller\LoginModule;
use DI\Container AS DiContainer;

class Container {
    /**
     * @var DiContainer
     */
    private $container;

    /**
     * Container constructor
     */
    public function __construct() {
        $this->container = (new ContainerBuilder())->build();
    }

    /**
     * Register new endpoint module and pass container
     * 
     * @return void
     */
    public function register():void {
        (new LoginModule())->register($this->container);
    }
}
