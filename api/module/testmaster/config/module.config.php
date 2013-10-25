<?php
return array(
    'router' => array(
        'routes' => array(
            'testmaster.rest.test-api' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/test-api[/:test_api_id]',
                    'defaults' => array(
                        'controller' => 'testmaster\\V1\\Rest\\TestApi\\Controller',
                    ),
                ),
            ),
            'testmaster.rest.test' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/test[/:test_id]',
                    'defaults' => array(
                        'controller' => 'testmaster\\V1\\Rest\\Test\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'testmaster.rest.test-api',
            1 => 'testmaster.rest.test',
        ),
    ),
    'zf-rest' => array(
        'testmaster\\V1\\Rest\\TestApi\\Controller' => array(
            'listener' => 'testmaster\\V1\\Rest\\TestApi\\TestApiResource',
            'route_name' => 'testmaster.rest.test-api',
            'identifier_name' => 'test_api_id',
            'collection_name' => 'test_api',
            'resource_http_methods' => array(
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
                3 => 'PATCH',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '25',
            'page_size_param' => '',
            'entity_class' => 'testmaster\\V1\\Rest\\TestApi\\TestApiEntity',
            'collection_class' => 'testmaster\\V1\\Rest\\TestApi\\TestApiCollection',
        ),
        'testmaster\\V1\\Rest\\Test\\Controller' => array(
            'listener' => 'testmaster\\V1\\Rest\\Test\\TestResource',
            'route_name' => 'testmaster.rest.test',
            'identifier_name' => 'test_id',
            'collection_name' => 'test',
            'resource_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '25',
            'page_size_param' => '',
            'entity_class' => 'testmaster\\V1\\Rest\\Test\\TestEntity',
            'collection_class' => 'testmaster\\V1\\Rest\\Test\\TestCollection',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'testmaster\\V1\\Rest\\TestApi\\Controller' => 'Json',
            'testmaster\\V1\\Rest\\Test\\Controller' => 'HalJson',
        ),
        'accept-whitelist' => array(
            'testmaster\\V1\\Rest\\TestApi\\Controller' => array(
                0 => 'application/vnd.testmaster.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'testmaster\\V1\\Rest\\Test\\Controller' => array(
                0 => 'application/vnd.testmaster.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content-type-whitelist' => array(
            'testmaster\\V1\\Rest\\TestApi\\Controller' => array(
                0 => 'application/vnd.testmaster.v1+json',
                1 => 'application/json',
            ),
            'testmaster\\V1\\Rest\\Test\\Controller' => array(
                0 => 'application/vnd.testmaster.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'testmaster\\V1\\Rest\\TestApi\\TestApiEntity' => array(
                'identifier_name' => 'test_api_id',
                'route_name' => 'testmaster.rest.test-api',
                'hydrator' => 'ArraySerializable',
            ),
            'testmaster\\V1\\Rest\\TestApi\\TestApiCollection' => array(
                'identifier_name' => 'test_api_id',
                'route_name' => 'testmaster.rest.test-api',
                'is_collection' => '1',
            ),
            'testmaster\\V1\\Rest\\Test\\TestEntity' => array(
                'identifier_name' => 'test_id',
                'route_name' => 'testmaster.rest.test',
            ),
            'testmaster\\V1\\Rest\\Test\\TestCollection' => array(
                'identifier_name' => 'test_id',
                'route_name' => 'testmaster.rest.test',
                'is_collection' => '1',
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'testmaster\\V1\\Rest\\TestApi\\TestApiResource' => array(
                'adapter_name' => 'testmaster',
                'table_name' => 'testApi',
                'hydrator_name' => 'ArraySerializable',
                'controller_service_name' => 'testmaster\\V1\\Rest\\TestApi\\Controller',
                'table_service' => 'testmaster\\V1\\Rest\\TestApi\\TestApiResource\\Table',
            ),
        ),
    ),
    'service_manager' => array(
        'invokables' => array(
            'testmaster\\V1\\Rest\\TestApi\\TestApiResource' => 'testmaster\\V1\\Rest\\TestApi\\TestApiResource',
            'testmaster\\V1\\Rest\\Test\\TestResource' => 'testmaster\\V1\\Rest\\Test\\TestResource',
        ),
    ),
);
