<?php

namespace Tnhnclskn\Efinans\Type;

class Belgev6
{
    /**
     * @var string
     */
    private $profileId;

    /**
     * @return string
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * @param string $profileId
     * @return Belgev6
     */
    public function withProfileId($profileId)
    {
        $new = clone $this;
        $new->profileId = $profileId;

        return $new;
    }
}

