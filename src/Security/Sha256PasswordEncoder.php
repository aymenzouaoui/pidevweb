<?php

// src/Security/CustomPasswordEncoder.php

namespace App\Security;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class Sha256PasswordEncoder implements PasswordEncoderInterface
{
    public function encodePassword(string $raw, ?string $salt): string
    {
        // implementation
    }

    public function isPasswordValid(string $encoded, string $raw, ?string $salt): bool
    {
        // implementation
    }

    public function needsRehash(string $encoded, ?array $config = null): bool
    {
        // implementation
    }
}
