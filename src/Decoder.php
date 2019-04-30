<?php

namespace Diam4ik\TeltonikaFmParser;

use Diam4ik\TeltonikaFmParser\Model\Data;
use Diam4ik\TeltonikaFmParser\Model\Imei;

interface Decoder
{
    /**
     * Checks if it's payload with imei authentication
     *
     * @param string $payload
     *
     * @return bool
     */
    public function isAuthentication(string $payload): bool;

    public function decodeAuthentication(string $payload): Imei;

    /**
     * @param string $payload
     *
     * @return array|Data[]
     */
    public function decodeData(string $payload): array;
}
