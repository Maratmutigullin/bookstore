<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPRY5gcu\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPRY5gcu/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPRY5gcu.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPRY5gcu\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPRY5gcu\App_KernelDevDebugContainer([
    'container.build_hash' => 'PRY5gcu',
    'container.build_id' => '612c89fe',
    'container.build_time' => 1665257000,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPRY5gcu');
