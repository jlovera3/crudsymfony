<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAwuVyCj\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAwuVyCj/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAwuVyCj.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAwuVyCj\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAwuVyCj\App_KernelDevDebugContainer([
    'container.build_hash' => 'AwuVyCj',
    'container.build_id' => 'c6b1d292',
    'container.build_time' => 1582551906,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAwuVyCj');
