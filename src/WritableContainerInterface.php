<?php

namespace Dhii\Di;

use Interop\Container\ServiceProvider as BaseServiceProviderInterface;

/**
 * Something that can represent a container, services of which can be added.
 *
 * @since [*next-version*]
 */
interface WritableContainerInterface extends ContainerInterface
{
    /**
     * Sets a definition for the specified identifier in this container.
     *
     * @since [*next-version*]
     *
     * @param string   $id         The identifier of the definition to set.
     * @param callable $definition
     */
    public function set($id, $definition);

    /**
     * Registers a service provider in this container.
     *
     * After this, the container will be able to use definitions in the provider
     * to retrieve services.
     *
     * @since [*next-version*]
     *
     * @param BaseServiceProviderInterface $serviceProvieder The provider to register.
     */
    public function register(BaseServiceProviderInterface $serviceProvieder);
}
