<?php

namespace PhpSagas\Contracts;

/**
 * Provides command data serialization method.
 *
 * @author Oleg Filatov <phpsagas@gmail.com>
 */
interface MessagePayloadSerializerInterface
{
    /**
     * @param CommandDataInterface $commandData
     *
     * @return string
     */
    public function serialize(CommandDataInterface $commandData): string;
}
