<?php

namespace Dhii\Di\FuncTest;

use Dhii\Di\ServiceProviderInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Di\ServiceProviderInterface}.
 *
 * @since [*next-version*]
 */
class ServiceProviderInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Di\\ServiceProviderInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ServiceProviderInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getServices()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
        $this->assertInstanceOf('Interop\\Container\\ServiceProvider', $subject);
    }
}
