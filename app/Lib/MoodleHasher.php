<?php

namespace App\Lib;

use Illuminate\Contracts\Hashing\Hasher as HasherContract;

class MoodleHasher implements HasherContract
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected int $rounds = 10000)
    {
        //
    }

    public function info($hashedValue): array
    {
        return [
            'algo' => 'sha512-crypt',
            'algoName' => 'sha512-crypt',
            'options' => ['rounds' => $this->rounds],
        ];
    }

    public function make($value, array $options = []): string
    {
        $rounds = $options['rounds'] ?? $this->rounds;
        $salt = '$6$rounds=' . $rounds . '$' . bin2hex(random_bytes(8)) . "$";
        $hash = crypt($value, $salt);

        // crypt() devuelve "*0" o "*1"" si falla
        if (strlen($hash) < 13 || $hash[0] === '*') {
            throw new \RuntimeException('Error generating hash using SHA-512 crypt.');
        }
        return $hash;
    }

    public function check($value, $hashedValue, array $options = []): bool
    {
        if(is_null($hashedValue) || strlen($hashedValue) === 0) {
            return false;
        }

        // crypt() reutiliza el salt del hash almacenado para generar un nuevo hash y compararlo
        return hash_equals(crypt($value, $hashedValue), $hashedValue);
    }

    public function needsRehash($hashedValue, array $options = []): bool
    {
        $rounds = $options['rounds'] ?? $this->rounds;

        return str_starts_with($hashedValue, '$6$rounds=' . $rounds . '$') === false;
    }
}
