<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY3ckj8g\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY3ckj8g/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerY3ckj8g.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerY3ckj8g\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerY3ckj8g\App_KernelDevDebugContainer([
    'container.build_hash' => 'Y3ckj8g',
    'container.build_id' => 'c55b3af4',
    'container.build_time' => 1673887232,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerY3ckj8g');