<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UserLogin implements RequestInterface
{
    /**
     * @var string
     */
    private string $agentCode;

    /**
     * @var string
     */
    private string $userName;

    /**
     * @var string
     */
    private string $userPasswd;

    /**
     * Constructor
     *
     * @param string $agentCode
     * @param string $userName
     * @param string $userPasswd
     */
    public function __construct(string $agentCode, string $userName, string $userPasswd)
    {
        $this->agentCode = $agentCode;
        $this->userName = $userName;
        $this->userPasswd = $userPasswd;
    }

    /**
     * @return string
     */
    public function getAgentCode() : string
    {
        return $this->agentCode;
    }

    /**
     * @param string $agentCode
     * @return static
     */
    public function withAgentCode(string $agentCode) : static
    {
        $new = clone $this;
        $new->agentCode = $agentCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return static
     */
    public function withUserName(string $userName) : static
    {
        $new = clone $this;
        $new->userName = $userName;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserPasswd() : string
    {
        return $this->userPasswd;
    }

    /**
     * @param string $userPasswd
     * @return static
     */
    public function withUserPasswd(string $userPasswd) : static
    {
        $new = clone $this;
        $new->userPasswd = $userPasswd;

        return $new;
    }
}

