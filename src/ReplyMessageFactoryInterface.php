<?php

namespace PhpSagas\Contracts;

/**
 * Factory used for reply messages creation.
 *
 * @author Oleg Filatov <phpsagas@gmail.com>
 */
interface ReplyMessageFactoryInterface
{
    /**
     * @param string $sagaId
     * @param string $correlationId
     * @param string $payload
     *
     * @return ReplyMessageInterface
     */
    public function makeSuccess(string $sagaId, string $correlationId, string $payload): ReplyMessageInterface;

    /**
     * @param string $sagaId
     * @param string $correlationId
     * @param string $payload
     *
     * @return ReplyMessageInterface
     */
    public function makeFailure(string $sagaId, string $correlationId, string $payload): ReplyMessageInterface;
}
