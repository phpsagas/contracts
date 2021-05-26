<?php

namespace PhpSagas\Contracts;

/**
 * Reply message returning after remote command execution finished.
 *
 * @author Oleg Filatov <phpsagas@gmail.com>
 */
interface ReplyMessageInterface
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
     * @return ReplyMessageInterface
     */
    public function setHeader(string $key, string $value): ReplyMessageInterface;

    /**
     * @param string[] $headers
     *
     * @return ReplyMessageInterface
     */
    public function setHeaders(array $headers): ReplyMessageInterface;

    /**
     * @return string
     */
    public function getSagaId(): string;

    /**
     * @return string
     */
    public function getCorrelationId(): string;

    /**
     * @return bool
     */
    public function isSuccess(): bool;

    /**
     * @return bool
     */
    public function isFailure(): bool;

    /**
     * @return string
     */
    public function getOutcome(): string;
}
