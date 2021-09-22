<?php

declare(strict_types=1);

namespace App\Entity;

use App\Trait\IdentifierTrait;
use App\Trait\TimestampableTrait;

class Product
{
    use IdentifierTrait;
    use TimestampableTrait;

    private string $name;

    public function __construct(string $name)
    {
        $this->id = sha1(uniqid());
        $this->name = $name;
        $this->createdOn = new \DateTimeImmutable();
        $this->markAsUpdated();
    }

    public function getEmail(): string
    {
        return $this->name;
    }
}
