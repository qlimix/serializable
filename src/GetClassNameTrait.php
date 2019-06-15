<?php declare(strict_types=1);

namespace Qlimix\Serializable;

trait GetClassNameTrait
{
    public function getName(): string
    {
        return static::class;
    }
}
