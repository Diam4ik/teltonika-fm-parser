<?php

namespace Diam4ik\TeltonikaFmParser;

interface Encoder
{
    public function encodeAuthentication(bool $isAuthenticated): string;

    public function encodeData(int $numberOfRecords): string;
}
