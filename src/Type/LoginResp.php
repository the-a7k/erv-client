<?php

namespace ErvClient\Type;

class LoginResp
{
    /**
     * @var null | \ErvClient\Type\RespError
     */
    private ?\ErvClient\Type\RespError $error = null;

    /**
     * @var null | string
     */
    private ?string $userUniqueId = null;

    /**
     * @return null | \ErvClient\Type\RespError
     */
    public function getError(): ?\ErvClient\Type\RespError
    {
        return $this->error;
    }

    /**
     * @param null | \ErvClient\Type\RespError $error
     * @return static
     */
    public function withError(?\ErvClient\Type\RespError $error): static
    {
        $new = clone $this;
        $new->error = $error;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUserUniqueId(): ?string
    {
        return $this->userUniqueId;
    }

    /**
     * @param null | string $userUniqueId
     * @return static
     */
    public function withUserUniqueId(?string $userUniqueId): static
    {
        $new = clone $this;
        $new->userUniqueId = $userUniqueId;

        return $new;
    }
}

