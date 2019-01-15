<?php declare(strict_types=1);

namespace Qlimix\Serializable;

interface SerializableInterface
{
    /**
     * A unique message name with application naming space.
     * This is used to deserialize the message back into
     *  the message scheme object on the processing side.
     */
    public function getName(): string;

    public function serialize(): array;

    public static function deserialize(array $data): SerializableInterface;
}
