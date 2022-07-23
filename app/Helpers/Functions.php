<?php

    namespace App\Helpers;

    use Keygen\Keygen;

    class Functions
    {
        public static function generateCode()
        : string
        {
            return Keygen::numeric(8)->generate();
        }

    }
