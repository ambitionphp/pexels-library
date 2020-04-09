<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Serializer;

use InvalidArgumentException;
use WBW\Library\Core\Argument\Helper\ArrayHelper;
use WBW\Library\Pexels\Model\Request\CuratedPhotosRequest;
use WBW\Library\Pexels\Model\Request\PopularVideosRequest;
use WBW\Library\Pexels\Model\Request\SearchPhotosRequest;
use WBW\Library\Pexels\Model\Request\SearchVideosRequest;

/**
 * Request serializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pexels\Serializer
 */
class RequestSerializer {

    /**
     * Serialize a curated photos request.
     *
     * @param CuratedPhotosRequest $request The curated photos request.
     * @return array Returns the parameters.
     */
    public static function serializeCuratedPhotosRequest(CuratedPhotosRequest $request) {

        $parameters = [];

        ArrayHelper::set($parameters, "per_page", $request->getPerPage(), [null, CuratedPhotosRequest::PER_PAGE_DEFAULT]);
        ArrayHelper::set($parameters, "page", $request->getPage(), [null, 1]);

        return $parameters;
    }

    /**
     * Serialize a popular videos request.
     *
     * @param PopularVideosRequest $request The popular photos request.
     * @return array Returns the parameters.
     */
    public static function serializePopularVideosRequest(PopularVideosRequest $request) {

        $parameters = [];

        ArrayHelper::set($parameters, "per_page", $request->getPerPage(), [null, PopularVideosRequest::PER_PAGE_DEFAULT]);
        ArrayHelper::set($parameters, "page", $request->getPage(), [null, 1]);
        ArrayHelper::set($parameters, "min_width", $request->getMinWidth(), [null]);
        ArrayHelper::set($parameters, "max_width", $request->getMaxWidth(), [null]);
        ArrayHelper::set($parameters, "min_duration", $request->getMinDuration(), [null]);
        ArrayHelper::set($parameters, "max_duration", $request->getMaxDuration(), [null]);

        return $parameters;
    }

    /**
     * Serialize a search photos request.
     *
     * @param SearchPhotosRequest $request The search photos request.
     * @return array Returns the parameters.
     * @throws InvalidArgumentException Throws an invalid argument exception if a mandatory parameter is missing.
     */
    public static function serializeSearchPhotosRequest(SearchPhotosRequest $request) {

        $parameters = [];

        if (null === $request->getQuery()) {
            throw new InvalidArgumentException("The mandatory parameter \"query\" is missing");
        }

        ArrayHelper::set($parameters, "query", $request->getQuery());
        ArrayHelper::set($parameters, "per_page", $request->getPerPage(), [null, SearchPhotosRequest::PER_PAGE_DEFAULT]);
        ArrayHelper::set($parameters, "page", $request->getPage(), [null, 1]);

        return $parameters;
    }

    /**
     * Serialize a search videos request.
     *
     * @param SearchVideosRequest $request The search photos request.
     * @return array Returns the parameters.
     * @throws InvalidArgumentException Throws an invalid argument exception if a mandatory parameter is missing.
     */
    public static function serializeSearchVideosRequest(SearchVideosRequest $request) {

        $parameters = [];

        if (null === $request->getQuery()) {
            throw new InvalidArgumentException("The mandatory parameter \"query\" is missing");
        }

        ArrayHelper::set($parameters, "query", $request->getQuery());
        ArrayHelper::set($parameters, "per_page", $request->getPerPage(), [null, SearchVideosRequest::PER_PAGE_DEFAULT]);
        ArrayHelper::set($parameters, "page", $request->getPage(), [null, 1]);
        ArrayHelper::set($parameters, "min_width", $request->getMinWidth(), [null]);
        ArrayHelper::set($parameters, "max_width", $request->getMaxWidth(), [null]);
        ArrayHelper::set($parameters, "min_duration", $request->getMinDuration(), [null]);
        ArrayHelper::set($parameters, "max_duration", $request->getMaxDuration(), [null]);

        return $parameters;
    }
}