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

    /**
     * @return mixed[]
     */
    public function serialize(): array;

    /**
     * @param mixed[] $data
     */
    public static function deserialize(array $data): SerializableInterface;
}
