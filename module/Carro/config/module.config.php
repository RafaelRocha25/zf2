<?php

return array(
    'router' => array(
        'routes' => array(
            'carro-nome' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/carro',
                    'defaults' => array(
                        'controller' => 'Carro\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'service_manager' => array(
        'invokables' => array(
            'Carro\Service\CarroService' => 'Carro\Service\CarroService'
        ),
    ),

    'controllers' => array(
        'invokables' => array(
            'Carro\Controller\Index' => 'Carro\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    )
);
