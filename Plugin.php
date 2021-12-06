<?php
namespace ValidationForm;
use MapasCulturais\App;
use MapasCulturais\Entities;
use MapasCulturais\i;


class Plugin extends ValidationForm\Plugin
{    
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    public function _init()
    {
        $app = App::i();

        $app->hook('template(opportunity.single.header-inscritos):end', function() use ($app){

            $opportunityId = $this->controller->requestedEntity->id;
            $opportunity = $this->controller->requestedEntity;
            //var_dump($opportunity);
            //die();
          
            $this->part('layouts/ValidationForm', ['entity' => $opportunity]);

        });
    }

    public function register(){
        $app = App::i();

        $app->registerController('validationController','ValidationForm\Controllers\ValidationController');
    }
}

