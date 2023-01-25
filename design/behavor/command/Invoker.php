<?php

class Invoker
{

    private CommandInterface $onstart;
    private CommandInterface $onFinish;

    public function setOnStart(CommandInterface $command)
    {
       $this->onstart = $command; 
    }

    public function setOnFinish(CommandInterface $command)
    {
        $this->onFinish = $command;
    }

    public function doSomethingImportant(): void
    {
        echo "Invoker: Does anybody want something done before I begin?\n";
        $this->onstart->execute();

        echo "Invoker: ...doing something really important...\n";

        echo "Invoker: Does anybody want something done after I finish?\n";
        $this->onFinish->execute();
    }
}