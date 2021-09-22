<?php

declare(strict_types=1);

namespace App\Entity;

use App\Trait\IdentifierTrait;
use App\Trait\TimestampableTrait;

class User
{
    use IdentifierTrait;
    use TimestampableTrait;

    private string $email;

    public function __construct(string $email)
    {
        $this->id = sha1(uniqid());
        $this->email = $email;
        $this->createdOn = new \DateTimeImmutable();
        $this->markAsUpdated();
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
