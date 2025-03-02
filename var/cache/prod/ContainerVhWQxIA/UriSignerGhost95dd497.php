<?php

namespace ContainerVhWQxIA;

class UriSignerGhost95dd497 extends \Symfony\Component\HttpFoundation\UriSigner implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'expirationParameter' => [parent::class, 'expirationParameter', null],
        "\0".parent::class."\0".'hashParameter' => [parent::class, 'hashParameter', null],
        "\0".parent::class."\0".'secret' => [parent::class, 'secret', null],
        'expirationParameter' => [parent::class, 'expirationParameter', null],
        'hashParameter' => [parent::class, 'hashParameter', null],
        'secret' => [parent::class, 'secret', null],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('UriSignerGhost95dd497', false)) {
    \class_alias(__NAMESPACE__.'\\UriSignerGhost95dd497', 'UriSignerGhost95dd497', false);
}
