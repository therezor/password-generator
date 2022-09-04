<?php

namespace Services;

class PasswordGenerator
{
    protected array $dictionary;

    public function __construct(array $dictionary)
    {
        $this->dictionary = $dictionary;
    }

    public function generate(int $words, string $separator = '', bool $caps = true, bool $numbers = true): string
    {
        $password = '';
        $lastKey = array_key_last($this->dictionary);
        for ($i = 1; $i <= $words; $i++) {
            $randomKey = $this->randomNumber(0, $lastKey);
            $password .= $caps
                ? ucfirst($this->dictionary[$randomKey])
                : $this->dictionary[$randomKey];

            if ($separator && $i !== $words) {
                $password .= $separator;
            }
        }

        if ($numbers) {
            $password .= $this->randomNumber(1, 99);
        }

        return $password;
    }

    protected function randomNumber(int $from, int $to): int
    {
        return random_int($from, $to);
    }
}
