<?php

namespace Tnhnclskn\Efinans\Type;

class BelgeGonderResp
{
    /**
     * @var string
     */
    private $belgeOid;

    /**
     * @var string
     */
    private $errorMessage;

    /**
     * @var string
     */
    private $responseStatus;

    /**
     * @return string
     */
    public function getBelgeOid()
    {
        return $this->belgeOid;
    }

    /**
     * @param string $belgeOid
     * @return BelgeGonderResp
     */
    public function withBelgeOid($belgeOid)
    {
        $new = clone $this;
        $new->belgeOid = $belgeOid;

        return $new;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return BelgeGonderResp
     */
    public function withErrorMessage($errorMessage)
    {
        $new = clone $this;
        $new->errorMessage = $errorMessage;

        return $new;
    }

    /**
     * @return string
     */
    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    /**
     * @param string $responseStatus
     * @return BelgeGonderResp
     */
    public function withResponseStatus($responseStatus)
    {
        $new = clone $this;
        $new->responseStatus = $responseStatus;

        return $new;
    }
}

