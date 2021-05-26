<?php

namespace PhpSagas\Contracts;

/**
 * Sends the command message over concrete transport defined on implementation classes.
 *
 * @author Oleg Filatov <phpsagas@gmail.com>
 */
interface MessageProducerInterface
{
    /**
     * @param CommandMessageInterface $message
     */
    public function send(CommandMessageInterface $message): void;
}
