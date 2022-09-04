<?php

namespace Controllers;

use Services\PasswordGenerator;
use Services\FileLoader;

class MainController
{
    public function index()
    {
        response()->page('../views/index.php');
    }

    public function generate()
    {
        $dictionary = (new FileLoader())->toArray('../dictionaries/corncob_lowercase.txt');

        // Validate input
        $words = (int)request()->get('words');
        if ($words < 2 || $words > 9) {
            $words = 2;
        }

        $separator = (string)request()->get('separator');
        if (!in_array($separator, ['-', ',', '.', '|', '+', '@', '!'], true)) {
            $separator = '';
        }

        $caps = (bool)request()->get('caps');
        $numbers = (bool)request()->get('numbers');

        $generator = new PasswordGenerator($dictionary);
        $password = $generator->generate($words, $separator, $caps, $numbers);

        response()->json(['password' => $password]);
    }
}
