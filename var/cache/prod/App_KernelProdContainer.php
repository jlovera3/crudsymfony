<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerN9fH0xo\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerN9fH0xo/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerN9fH0xo.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerN9fH0xo\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerN9fH0xo\App_KernelProdContainer([
    'container.build_hash' => 'N9fH0xo',
    'container.build_id' => '9a424395',
    'container.build_time' => 1582488801,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerN9fH0xo');
