<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\User;

class TestController
{
    public function __invoke(): void
    {
        $user = new User('test@api.com');
        $user->getId();
    }
}
