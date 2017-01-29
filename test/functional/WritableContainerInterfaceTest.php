<?php

namespace Dhii\Di\FuncTest;

use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Di\WritableContainerInterface}.
 *
 * @since [*next-version*]
 */
class WritableContainerInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Di\\WritableContainerInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\Di\WritableContainerInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->get()
            ->has()
            ->set()
            ->register()
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
        $this->assertInstanceOf('Dhii\\Di\\ContainerInterface', $subject);
        $this->assertInstanceOf('Interop\\Container\\ContainerInterface', $subject);
    }
}
