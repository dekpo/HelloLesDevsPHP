<?php
namespace App\Models;

class User extends AbstractTable
{
    protected ?string $email = null;
    protected ?string $password = null;
    protected ?string $roles = null;
    private ?string $registered_at = null;
    

    /**
     * Get the value of email
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of roles
     */
    public function getRoles(): ?string
    {
        return $this->roles;
    }

    /**
     * Set the value of roles
     */
    public function setRoles(?string $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get the value of registered_at
     */
    public function getRegisteredAt(): ?string
    {
        return $this->registered_at;
    }

    /**
     * Set the value of registered_at
     */
    public function setRegisteredAt(?string $registered_at): self
    {
        $this->registered_at = $registered_at;

        return $this;
    }
}