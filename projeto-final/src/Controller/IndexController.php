<?php

declare (strict_types=1);

namespace App\Controller;

class IndexController {
    public function indexAction(): void
    {
        echo "Olá mundo, estou dentro de um controller!";
    }
}