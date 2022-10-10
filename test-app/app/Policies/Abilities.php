<?php

namespace App\Policies;

enum Abilities: string
{
    case VIEW = 'view';
    case UPDATE = 'update';
}
