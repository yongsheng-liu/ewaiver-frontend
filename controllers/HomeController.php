<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2016, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;
use lithium\net\http\Service;

class HomeController extends \lithium\action\Controller {

    public function index() {

        if( $_SERVER['SERVER_NAME'] == "www.waiverelectronic.com" && (empty($_SERVER['HTTP_X_FORWARDED_PROTO']) || $_SERVER['HTTP_X_FORWARDED_PROTO'] != "https")){
            $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . $redirect);
            exit();
        }
        return $this->render(array('layout' => false));
    }

    public function view() {

        if( $_SERVER['SERVER_NAME'] == "www.waiverelectronic.com" && (empty($_SERVER['HTTP_X_FORWARDED_PROTO']) || $_SERVER['HTTP_X_FORWARDED_PROTO'] != "https")){
            $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . $redirect);
            exit();
        }

        $options = array();
        $path = func_get_args();

        if (!$path || $path[0] == "" || $path === array('home')) {
            $path = array('view');
            $options['compiler'] = array('fallback' => true);
        }

        if ($path[0] == "app") {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . "https://www.waiverelectronic.com/waiver-app");
            exit();
        }

        if ($path[0] == "login") {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . "https://app.waiverelectronic.com/login");
            exit();
        }

        if ($path[0] == "register") {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . "https://app.waiverelectronic.com/register");
            exit();
        }

        if ($path[0] == "passwordRecovery") {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . "https://app.waiverelectronic.com/passwordRecovery");
            exit();
        }

        if ($path[0] == "newPass") {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . "https://app.waiverelectronic.com/newPass");
            exit();
        }

        $options['template'] = join('/', $path);
        return $this->render($options);
    }

    public function price() {
        if( $_SERVER['SERVER_NAME'] == "www.waiverelectronic.com" && (empty($_SERVER['HTTP_X_FORWARDED_PROTO']) || $_SERVER['HTTP_X_FORWARDED_PROTO'] != "https")){
            $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . $redirect);
            exit();
        }
    }

    public function app(){
        if( $_SERVER['SERVER_NAME'] == "www.waiverelectronic.com" && (empty($_SERVER['HTTP_X_FORWARDED_PROTO']) || $_SERVER['HTTP_X_FORWARDED_PROTO'] != "https")){
            $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . $redirect);
            exit();
        }
    }

    public function features() {
        if( $_SERVER['SERVER_NAME'] == "www.waiverelectronic.com" && (empty($_SERVER['HTTP_X_FORWARDED_PROTO']) || $_SERVER['HTTP_X_FORWARDED_PROTO'] != "https")){
            $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . $redirect);
            exit();
        }
    }

    public function privacy() {
        if(empty($_SERVER['HTTP_X_FORWARDED_PROTO']) || $_SERVER['HTTP_X_FORWARDED_PROTO'] != "https"){
            $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . $redirect);
            exit();
        }
    }

    public function terms() {
        if( $_SERVER['SERVER_NAME'] == "www.waiverelectronic.com" && (empty($_SERVER['HTTP_X_FORWARDED_PROTO']) || $_SERVER['HTTP_X_FORWARDED_PROTO'] != "https")){
            $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . $redirect);
            exit();
        }
    }

    public function blog() {

        if( $_SERVER['SERVER_NAME'] == "www.waiverelectronic.com" && (empty($_SERVER['HTTP_X_FORWARDED_PROTO']) || $_SERVER['HTTP_X_FORWARDED_PROTO'] != "https")){
            $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . $redirect);
            exit();
        }

        //instantiate the service connection
        //$service = new Service(array('host' => 'ewaiver-staging.herokuqpp.com'));
        $service = new Service(array('host' => 'ewaiver.herokuapp.com'));
        //capture the response
        $requestUrl = 'api/internal/blogs/getAll';
        $input = array(
            'size' => 100,
            'page' => 1,
            'pagination' => true,
            'sort' => 'date'
        );
        // use key 'http' even if you send the request to https://...
        $data = $service->post($requestUrl, json_encode($input));

        $blogs = $data['success'];
        return compact('blogs');
    }

    public function login() {
        header("Location: https://app.waiverelectronic.com/login");
        die();
    }

    public function register() {
        header("Location: https://app.waiverelectronic.com/register");
        die();
    }

    public function passwordRecovery() {
        header("Location: https://app.waiverelectronic.com/passwordRecovery");
        die();
    }

    public function newPass() {
        header("Location: https://app.waiverelectronic.com/newPass");
        die();
    }
}

?>