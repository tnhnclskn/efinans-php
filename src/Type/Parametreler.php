<?php

namespace Tnhnclskn\Efinans\Type;

class Parametreler
{
    /**
     * @var \Tnhnclskn\Efinans\Type\Entry
     */
    private $entry;

    /**
     * @return \Tnhnclskn\Efinans\Type\Entry
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\Entry $entry
     * @return Parametreler
     */
    public function withEntry($entry)
    {
        $new = clone $this;
        $new->entry = $entry;

        return $new;
    }
}

