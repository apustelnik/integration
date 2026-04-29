<?php

namespace Simplia\Integration\Event\Frontend;

use Simplia\Integration\Event\IntegrationEvent;

class FrontendCallEvent implements IntegrationEvent {
    public function __construct(
        private readonly array $data,
        private readonly FrontendCallContext $context,
    ) {
    }

    public function getData(): array {
        return $this->data;
    }

    public function getContext(): FrontendCallContext {
        return $this->context;
    }

}
