<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUYkD4jD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUYkD4jD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUYkD4jD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUYkD4jD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUYkD4jD\App_KernelDevDebugContainer([
    'container.build_hash' => 'UYkD4jD',
    'container.build_id' => '1e846321',
    'container.build_time' => 1688070680,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUYkD4jD');