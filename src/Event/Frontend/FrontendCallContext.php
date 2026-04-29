<?php

namespace Simplia\Integration\Event\Frontend;

class FrontendCallContext {
    public function __construct(
        private readonly string $host,
        private readonly string $ip,
        private readonly ?int $userId,
    ) {
    }

    public function getHost(): string {
        return $this->host;
    }

    public function getIp(): string {
        return $this->ip;
    }

    public function getUserId(): ?int {
        return $this->userId;
    }

    public static function fromArray(array $data): self {
        return new self(
            (string) ($data['host'] ?? ''),
            (string) ($data['ip'] ?? ''),
            isset($data['userId']) ? (int) $data['userId'] : null,
        );
    }

}
