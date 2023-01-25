<?php

class ComplexCommand implements CommandInterface
{

    private Receiver $receiver;
    private string $a;
    private string $b;

    public function __construct(Receiver $receiver, string $a, string $b)
    {
    }

    public function execute(): void
    {
        echo "complexe command will execute ";
        $this->receiver->doSomething($this->a);
        $this->receiver->doSomethingElse($this->b);
    }
}