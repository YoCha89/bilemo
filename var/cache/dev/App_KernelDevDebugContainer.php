<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJnQKSis\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJnQKSis/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJnQKSis.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJnQKSis\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJnQKSis\App_KernelDevDebugContainer([
    'container.build_hash' => 'JnQKSis',
    'container.build_id' => 'b65a9f66',
    'container.build_time' => 1658162279,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJnQKSis');
