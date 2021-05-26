<?php

namespace PhpSagas\Contracts;

/**
 * Allows to transform routing keys based on command message information.
 *
 * @author Oleg Filatov <phpsagas@gmail.com>
 */
interface RoutingKeyMapperInterface
{
    /**
     * @param CommandMessageInterface $message
     *
     * @return string
     */
    public function transformRoutingKey(CommandMessageInterface $message): string;

    /**
     * @param CommandMessageInterface $message
     *
     * @return string
     */
    public function transformReplyRoutingKey(CommandMessageInterface $message): string;
}
