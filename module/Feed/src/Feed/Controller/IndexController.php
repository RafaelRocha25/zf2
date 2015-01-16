<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 15/01/15
 * Time: 22:02
 */

namespace Feed\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $feedService = $this->getServiceLocator()->get('Feed\Service\FeedService');
        $feedService->setUrl('http://g1.globo.com/dynamo/rss2.xml');
        $feeds       = $feedService->getFeeds();

        return new ViewModel(['feeds' => $feeds, 'title' => 'Feeds do Globo.com']);
    }
}
