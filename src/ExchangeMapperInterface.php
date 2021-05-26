<?php

namespace PhpSagas\Contracts;

/**
 * Allows to transform exchange names based on command message information.
 *
 * @author Oleg Filatov <phpsagas@gmail.com>
 */
interface ExchangeMapperInterface
{
    /**
     * @param CommandMessageInterface $message
     *
     * @return string
     */
    public function transformExchange(CommandMessageInterface $message): string;

    /**
     * @param CommandMessageInterface $message
     *
     * @return string
     */
    public function transformReplyExchange(CommandMessageInterface $message): string;
}
