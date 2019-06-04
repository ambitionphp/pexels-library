<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Model\Response;

use WBW\Library\Pexels\Model\AbstractResponse;
use WBW\Library\Pexels\Model\Video;

/**
 * Video response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pexels\Model\Response
 */
class VideoResponse extends AbstractResponse {

    /**
     * Get the video.
     *
     * @return Video Returns the video.
     */
    public function getVideo() {
        $medias = $this->getMedias();
        return 1 === count($medias) ? $medias[0] : null;
    }

    /**
     * Set the video.
     *
     * @param Video $video The video.
     * @return VideoResponse Returns this video response.
     */
    public function setVideo(Video $video) {
        return $this->setMedias([$video]);
    }
}