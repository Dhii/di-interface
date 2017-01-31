<?php

namespace Dhii\Di\FuncTest;

use Dhii\Di\FactoryInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Di\FactoryInterface}.
 *
 * @since [*next-version*]
 */
class FactoryInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Di\\FactoryInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return FactoryInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->make()
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
