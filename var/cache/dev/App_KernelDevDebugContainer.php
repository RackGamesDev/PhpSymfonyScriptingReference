<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXx5j3MF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXx5j3MF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXx5j3MF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXx5j3MF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXx5j3MF\App_KernelDevDebugContainer([
    'container.build_hash' => 'Xx5j3MF',
    'container.build_id' => 'c5cbc667',
    'container.build_time' => 1740943406,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXx5j3MF');
