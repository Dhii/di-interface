<?php

namespace Dhii\Di\FuncTest;

use Dhii\Di\ContainersAwareInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Di\ContainersAwareInterface}.
 *
 * @since [*next-version*]
 */
class ContainersAwareInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Di\\ContainersAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ContainersAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getContainers()
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
    }
}
