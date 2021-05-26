<?php

namespace PhpSagas\Contracts;

/**
 * Command message sending for remote command execution.
 *
 * @author Oleg Filatov <phpsagas@gmail.com>
 */
interface CommandMessageInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @return array
     */
    public function getHeaders(): array;

    /**
     * @param string $header
     *
     * @return string|null
     */
    public function getHeader(string $header): ?string;

    /**
     * @param string $header
     *
     * @return string
     */
    public function getRequiredHeader(string $header): string;

    /**
     * @return string
     */
    public function getPayload(): string;

    /**
     * @param string $header
     *
     * @return bool
     */
    public function hasHeader(string $header): bool;

    /**
     * @param string $key
     * @param string $value
     *
     * @return CommandMessageInterface
     */
    public function setHeader(string $key, string $value): CommandMessageInterface;

    /**
     * @param string[] $headers
     *
     * @return CommandMessageInterface
     */
    public function setHeaders(array $headers): CommandMessageInterface;

    /**
     * @return string
     */
    public function getSagaId(): string;

    /**
     * @return string
     */
    public function getSagaType(): string;

    /**
     * @return string
     */
    public function getCommandType(): string;
}
