<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 15/01/15
 * Time: 22:04
 */

namespace Feed\Service;

use SimpleXMLElement;

class FeedService {

    private $url;

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getFeeds() {

        $feed = file_get_contents($this->url);
        $rss  = new SimpleXmlElement($feed);

        return $rss->channel;

    }

} 