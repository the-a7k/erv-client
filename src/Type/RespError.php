<?php

namespace ErvClient\Type;

class RespError
{
    /**
     * @var int
     */
    private int $errCode;

    /**
     * @var null | string
     */
    private ?string $errInfo = null;

    /**
     * @var null | array<int<0,max>, string>
     */
    private ?array $stackTrace = null;

    /**
     * @return int
     */
    public function getErrCode() : int
    {
        return $this->errCode;
    }

    /**
     * @param int $errCode
     * @return static
     */
    public function withErrCode(int $errCode) : static
    {
        $new = clone $this;
        $new->errCode = $errCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getErrInfo() : ?string
    {
        return $this->errInfo;
    }

    /**
     * @param null | string $errInfo
     * @return static
     */
    public function withErrInfo(?string $errInfo) : static
    {
        $new = clone $this;
        $new->errInfo = $errInfo;

        return $new;
    }

    /**
     * @return null | array<int<0,max>, string>
     */
    public function getStackTrace() : ?array
    {
        return $this->stackTrace;
    }

    /**
     * @param null | array<int<0,max>, string> $stackTrace
     * @return static
     */
    public function withStackTrace(?array $stackTrace) : static
    {
        $new = clone $this;
        $new->stackTrace = $stackTrace;

        return $new;
    }
}

