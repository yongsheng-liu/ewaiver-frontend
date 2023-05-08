<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2016, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;
use lithium\net\http\Service;

class TemplateController extends \lithium\action\Controller {

    public function index() {
        return "Hello World";
        return $this->render(array('layout' => false));
    }

    public function view() {
        $this->_render['layout'] = false;

        $options = array();
        $path = func_get_args();

        if (!$path || $path[0] == "" || $path === array('home')) {
            $path = array('view');
            $options['compiler'] = array('fallback' => true);
        }

        $options['template'] = join('/', $path);
        return $this->render($options);
    }

    public function template($pageUrl) {
        $this->_render['layout'] = false;

        $service = new Service(array('host' => 'app.waiverelectronic.com'));
        //$service = new Service(array('host' => '0.0.0.0:5000'));
        //capture the response
        $requestUrl = 'api/internal/frontTemplate/'. $pageUrl;

        // use key 'http' even if you send the request to https://...
        $resule = $service->get($requestUrl);
        // echo '<pre>' . var_export($resule, true) . '</pre>';
        if ($resule["result"] == "true") {
            $data = $resule['success'];
        }
        

        return compact('data');
    }
}

?>