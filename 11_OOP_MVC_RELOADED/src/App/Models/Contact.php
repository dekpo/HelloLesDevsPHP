<?php
namespace App\Models;

class Contact extends AbstractTable
{
    protected ?int $user_id = null;
    protected ?string $firstname = null;
    protected ?string $lastname = null;
    protected ?string $address1 = null;
    protected ?string $address2 = null;
    protected ?string $city = null;
    protected ?string $state = null;
    protected ?string $zip = null;
    protected ?string $message = null;
    private ?string $created_at = null;
    protected ?string $updated_at = null;
    
}