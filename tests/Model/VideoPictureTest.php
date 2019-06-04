<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Tests\Model;

use WBW\Library\Pexels\Model\VideoPicture;
use WBW\Library\Pexels\Tests\AbstractTestCase;

/**
 * Video picture test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pexels\Tests\Model
 */
class VideoPictureTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new VideoPicture();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getNr());
        $this->assertNull($obj->getPicture());
    }

    /**
     * Tests the setNr() method.
     *
     * @return void
     */
    public function testSetNr() {

        $obj = new VideoPicture();

        $obj->setNr(1);
        $this->assertEquals(1, $obj->getNr());
    }

    /**
     * Tests the setPicture() method.
     *
     * @return void
     */
    public function testSetPicture() {

        $obj = new VideoPicture();

        $obj->setPicture("picture");
        $this->assertEquals("picture", $obj->getPicture());
    }
}