<?php

namespace Simplia\Integration\Response;

class HtmlContentResponse implements Response {
    public function __construct(private readonly string $html) {
    }

    public function getHtml(): string {
        return $this->html;
    }

    public function jsonSerialize(): array {
        return [
            'html' => $this->html,
        ];
    }
}
