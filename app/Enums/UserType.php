<?php

namespace App\Enums;

enum UserType: string
{
    case Developer = 'developer';
    case Admin = 'admin';
    case Teacher = 'Teacher';
    case Student = 'Student';
    case Guest = 'Guest';
}
