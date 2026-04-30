<?php

declare(strict_types=1);

namespace SignerPHP\Infrastructure\Native\ValueObject;

final readonly class SignatureTrustVerification
{
    public function __construct(
        public bool $valid,
        public ?string $message = null,
        public ?string $certPEM = null,
        public ?string $chainPEM = null,
        public ?string $certDER = null,
    ) {}
}
