<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCU9kxcZ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCU9kxcZ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCU9kxcZ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCU9kxcZ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCU9kxcZ\App_KernelDevDebugContainer([
    'container.build_hash' => 'CU9kxcZ',
    'container.build_id' => '68676aef',
    'container.build_time' => 1682274659,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCU9kxcZ');
