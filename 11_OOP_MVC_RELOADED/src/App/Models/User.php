<?php
namespace App\Models;

class User extends AbstractTable
{
    protected ?string $email = null;
    protected ?string $password = null;
    protected ?string $roles = null;
    private ?string $registered_at = null;
    
}