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
    

    /**
     * Get the value of user_id
     */
    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     */
    public function setUserId(?int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     */
    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     */
    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of address1
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    /**
     * Set the value of address1
     */
    public function setAddress1(?string $address1): self
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get the value of address2
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    /**
     * Set the value of address2
     */
    public function setAddress2(?string $address2): self
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Set the value of city
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of state
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Set the value of state
     */
    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the value of zip
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * Set the value of zip
     */
    public function setZip(?string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get the value of message
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Set the value of message
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of created_at
     */
    public function getCreatedAt(): ?string
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     */
    public function setCreatedAt(?string $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     */
    public function setUpdatedAt(?string $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}