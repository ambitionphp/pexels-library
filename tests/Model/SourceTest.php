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

use WBW\Library\Pexels\Model\Source;
use WBW\Library\Pexels\Tests\AbstractTestCase;

/**
 * Source test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pexels\Tests\Model
 */
class SourceTest extends AbstractTestCase {

    /**
     * Tests the setLandscape() method.
     *
     * @return void
     */
    public function testSetLandscape(): void {

        $obj = new Source();

        $obj->setLandscape("landscape");
        $this->assertEquals("landscape", $obj->getLandscape());
    }

    /**
     * Tests the setLarge() method.
     *
     * @return void
     */
    public function testSetLarge(): void {

        $obj = new Source();

        $obj->setLarge("large");
        $this->assertEquals("large", $obj->getLarge());
    }

    /**
     * Tests the setLarge2x() method.
     *
     * @return void
     */
    public function testSetLarge2x(): void {

        $obj = new Source();

        $obj->setLarge2x("large2x");
        $this->assertEquals("large2x", $obj->getLarge2x());
    }

    /**
     * Tests the setMedium() method.
     *
     * @return void
     */
    public function testSetMedium(): void {

        $obj = new Source();

        $obj->setMedium("medium");
        $this->assertEquals("medium", $obj->getMedium());
    }

    /**
     * Tests the setOriginal() method.
     *
     * @return void
     */
    public function testSetOriginal(): void {

        $obj = new Source();

        $obj->setOriginal("original");
        $this->assertEquals("original", $obj->getOriginal());
    }

    /**
     * Tests the setPortrait() method.
     *
     * @return void
     */
    public function testSetPortrait(): void {

        $obj = new Source();

        $obj->setPortrait("portrait");
        $this->assertEquals("portrait", $obj->getPortrait());
    }

    /**
     * Tests the setSmall() method.
     *
     * @return void
     */
    public function testSetSmall(): void {

        $obj = new Source();

        $obj->setSmall("small");
        $this->assertEquals("small", $obj->getSmall());
    }

    /**
     * Tests the setTiny() method.
     *
     * @return void
     */
    public function testSetTiny(): void {

        $obj = new Source();

        $obj->setTiny("tiny");
        $this->assertEquals("tiny", $obj->getTiny());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Source();

        $this->assertNull($obj->getLandscape());
        $this->assertNull($obj->getLarge());
        $this->assertNull($obj->getLarge2x());
        $this->assertNull($obj->getMedium());
        $this->assertNull($obj->getOriginal());
        $this->assertNull($obj->getPortrait());
        $this->assertNull($obj->getSmall());
        $this->assertNull($obj->getTiny());
    }
}
