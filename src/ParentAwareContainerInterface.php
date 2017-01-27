<?php

namespace Dhii\Di;

/**
 * A container that can have a parent container.
 *
 * This interface is often used to delegate lookup.
 *
 * @since [*next-version*]
 */
interface ParentAwareContainerInterface
{
    /**
     * Retrieve the container that is the parent of this container.
     *
     * @since [*next-version*]
     *
     * @return ContainerInterface
     */
    public function getParentContainer();
}
