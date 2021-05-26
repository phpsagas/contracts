<?php

namespace PhpSagas\Contracts;

/**
 * Factory used for command messages creation.
 *
 * @author Oleg Filatov <phpsagas@gmail.com>
 */
interface CommandMessageFactoryInterface
{
    /**
     * @param string $messageId
     * @param string $sagaId
     * @param string $sagaType
     * @param string $commandType
     * @param string $payload
     *
     * @return CommandMessageInterface
     */
    public function createCommandMessage(
        string $messageId,
        string $sagaId,
        string $sagaType,
        string $commandType,
        string $payload
    ): CommandMessageInterface;
}
