<?php

class Mockery
{
    /**
     * @template T
     * @param class-string<T>|T ...$args
     * @return \Mockery\MockInterface&T
     */
    public static function mock(...$args)
    {
    }

    /**
     * @template T
     * @param class-string<T>|T ...$args
     * @return \Mockery\MockInterface&T
     */
    public static function spy(...$args)
    {
    }

    /**
     * @template T
     * @param class-string<T>|T ...$args
     * @return \Mockery\MockInterface&T
     */
    public static function namedMock(...$args)
    {
    }

    /**
     * @template T
     * @param class-string<T>|T ...$args
     * @return \Mockery\MockInterface&T
     */
    public static function instanceMock(...$args)
    {
    }
}

/**
 * @template T
 * @param class-string<T>|T ...$args
 * @return \Mockery\MockInterface&T
 */
function mock(...$args)
{
}

/**
 * @template T
 * @param class-string<T>|T ...$args
 * @return \Mockery\MockInterface&T
 */
function spy(...$args)
{
}

/**
 * @template T
 * @param class-string<T>|T ...$args
 * @return \Mockery\MockInterface&T
 */
function namedMock(...$args)
{
}