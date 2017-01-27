<?php

namespace Dhii\Di;

/**
 * Something that can act as a composite container.
 *
 * A composite container is a container that can contain other containers,
 * and perform queries on them.
 *
 * @since [*next-version*]
 */
interface CompositeContainerInterface extends
    ContainerInterface,
    ContainersAwareInterface
{
}
