# serializable

[![Travis CI](https://api.travis-ci.org/qlimix/serializable.svg?branch=master)](https://travis-ci.org/qlimix/serializable)
[![Packagist](https://img.shields.io/packagist/v/qlimix/serializable.svg)](https://packagist.org/packages/qlimix/serializable)
[![MIT License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](https://github.com/qlimix/serializable/blob/master/LICENSE)

An interface that indicates the object is serializable.

## Install

Using Composer:

~~~
$ composer require qlimix/serializable
~~~

## usage
```php
<?php

use Qlimix\Serializable\SerializableInterface;

final class FooBar implements SerializableInterface
{
    /** @var string */
    private $foo;
    
    /** @var int */
    private $bar;
    
    public function __construct(string $foo, int $bar)
    {
        $this->foo = $foo;
        $this->bar = $bar;
    }
    
    public function getName(): string
    {
        return 'foo.bar';
    }
    
    public function serialize(): array
    {
        return [
            'foo' => $this->foo,
            'bar' => $this->bar,
        ];
    }

    public static function deserialize(array $data): SerializableInterface
    {
        return new self($data['foo'], $data['bar']);
    }
}
```
If whatever you are serializing doesn't cross the boundaries of your application you could use the GetClassNameTrait to refer to the object class name.

## Testing
To run all unit tests locally with PHPUnit:

~~~
$ vendor/bin/phpunit
~~~

## Quality
To ensure code quality run grumphp which will run all tools:

~~~
$ vendor/bin/grumphp run
~~~

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.
