<?php

namespace App\Helpers;

class RobokassaIdentificator
{
    private ?array $passwords = [
        'krasbezsirot24' => 'jfp4IVHx0HD5kywOS24i',
        'login2' => 'password2',
        'login3' => 'password3',
        'login4' => 'password4',
        'login5' => 'password5',
        'login6' => 'password6',
        'login7' => 'password7',
    ];
    public function identUser(string $userLogin){
        return $this->passwords[$userLogin] ?? null;
    }
}
