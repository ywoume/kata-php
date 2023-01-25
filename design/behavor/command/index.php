<?php

$invoker  = new Invoker();

$invoker->setOnStart(new SimpleCommand('simple'));
$invoker->setOnFinish(new ComplexCommand((new Receiver()), 'send email','save report'));
$invoker->doSomethingImportant();

