<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App__Entity__Usuario__CLASSMETADATA__' => 0,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Mapping\\FieldMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\FieldMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Usuario',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\UsuarioRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => $o[1],
                        'uuid' => $o[2],
                        'nombre' => $o[3],
                        'nick' => $o[4],
                        'numero' => $o[5],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'uuid' => 'uuid',
                        'nombre' => 'nombre',
                        'nick' => 'nick',
                        'numero' => 'numero',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'uuid' => 'uuid',
                        'nombre' => 'nombre',
                        'nick' => 'nick',
                        'numero' => 'numero',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'usuario',
                    ],
                ],
                'idGenerator' => [
                    $o[6],
                ],
                'name' => [
                    'App\\Entity\\Usuario',
                ],
                'id' => [
                    1 => true,
                ],
                'type' => [
                    1 => 'integer',
                    'string',
                    'string',
                    'string',
                    'integer',
                ],
                'fieldName' => [
                    1 => 'id',
                    'uuid',
                    'nombre',
                    'nick',
                    'numero',
                ],
                'columnName' => [
                    1 => 'id',
                    'uuid',
                    'nombre',
                    'nick',
                    'numero',
                ],
                'length' => [
                    3 => 20,
                    30,
                ],
                'nullable' => [
                    4 => true,
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
