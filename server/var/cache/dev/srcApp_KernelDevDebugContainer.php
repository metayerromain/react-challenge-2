<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUdQpc1c\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUdQpc1c/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUdQpc1c.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUdQpc1c\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerUdQpc1c\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'UdQpc1c',
    'container.build_id' => '191f4cc6',
    'container.build_time' => 1580142723,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUdQpc1c');
