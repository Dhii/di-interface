<?php

namespace Dhii\Di\FuncTest;

use Dhii\Di\ParentAwareContainerInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Di\ParentAwareContainerInterface}.
 *
 * @since [*next-version*]
 */
class ParentAwareContainerInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Di\\ParentAwareContainerInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ParentAwareContainerInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getParentContainer()
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
