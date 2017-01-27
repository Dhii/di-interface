<?php

namespace Dhii\Di;

use Traversable;

/**
 * Something that can have a container list retrieved from it.
 *
 * @since [*next-version*]
 */
interface ContainersAwareInterface
{
    /**
     * Return a list of containers that belong to this instance.
     *
     * @since [*next-version*]
     *
     * @return array|Traversable The list of containers belonging to this instance.
     */
    public function getContainers();
}
