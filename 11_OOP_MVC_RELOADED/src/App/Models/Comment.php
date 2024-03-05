<?php
namespace App\Models;

class Comment extends AbstractTable
{
    protected ?int $post_id = null;
    protected ?int $user_id = null;
    protected ?string $message = null;
    private ?string $created_at = null;

    /**
     * Get the value of post_id
     */
    public function getPostId(): ?int
    {
        return $this->post_id;
    }

    /**
     * Set the value of post_id
     */
    public function setPostId(?int $post_id): self
    {
        $this->post_id = $post_id;

        return $this;
    }

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
}