<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Model\Attribute;

/**
 * Integer max duration trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pexels\Model\Attribute
 */
trait IntegerMaxDurationTrait {

    /**
     * Max duration.
     *
     * @var int|null
     */
    private $maxDuration;

    /**
     * Get the max duration.
     *
     * @return int|null Returns the max duration.
     */
    public function getMaxDuration(): ?int {
        return $this->maxDuration;
    }

    /**
     * Set the max duration.
     *
     * @param int|null $maxDuration The max duration.
     * @return self Returns this instance.
     */
    public function setMaxDuration(?int $maxDuration): self {
        $this->maxDuration = $maxDuration;
        return $this;
    }
}
