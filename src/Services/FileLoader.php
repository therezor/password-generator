<?php

namespace Services;

class FileLoader
{
    public function toArray(string $path): array
    {
        return file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }
}
