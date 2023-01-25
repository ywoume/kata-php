<?php

class SimpleCommand implements CommandInterface
{
    private $payload;

    public function __construct(string $payload)
    {
    }

    public function execute(): void
    {
        echo "This is Simple command $this->payload";
    }
}