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
 * String orientation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pexels\Model\Attribute
 */
trait StringOrientationTrait {

    /**
     * Next page.
     *
     * @var string|null
     */
    private $orientation;

    /**
     * Get the orientation.
     *
     * @return string|null Returns the orientation.
     */
    public function getOrientation(): ?string {
        return $this->orientation;
    }

    /**
     * Set the orientation.
     *
     * @param string|null $orientation The orientation.
     * @return self Returns this instance.
     */
    public function setOrientation(?string $orientation): self {
        $this->orientation = $orientation;
        return $this;
    }
}
