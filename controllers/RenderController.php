<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2016, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;
use lithium\net\http\Service;

class RenderController extends \lithium\action\Controller {

    public function index() {
        return "Hello World";
        return $this->render(array('layout' => false));
    }

    public function view() {

        $options = array();
        $path = func_get_args();

        if (!$path || $path[0] == "" || $path === array('home')) {
            $path = array('view');
            $options['compiler'] = array('fallback' => true);
        }

        $options['template'] = join('/', $path);
        return $this->render($options);
    }

    public function staticWaiver($waiverId) {
        $this->_render['layout'] = false;

        //instantiate the service connection
        $service = new Service(array('host' => 'app.waiverelectronic.com'));
        // $service = new Service(array('host' => 'ewaiver-ttest.herokuapp.com'));
        // $service = new Service(array('host' => '0.0.0.0:5000'));
        //capture the response
        $requestUrl = 'api/waivers/waivers/' . $waiverId;
        $waiver = $service->get($requestUrl);
        echo '<pre>' . var_export($waiver['success'], true) . '</pre>';
        if ($waiver['success']['simpleData'] == 'true') {
            $templateId = $waiver['success']['templateId'];

            $requestUrlTemplate = 'api/templates/templatesByMangoId/' . $templateId;
            $template = $service->get($requestUrlTemplate);
            // echo '<pre>' . var_export($template['success'], true) . '</pre>';
            $waiverIndex = 0;

            for($i = 0; $i < count($template['success']['additionals']); $i++) {

                if($template['success']['additionals'][$i]['type'] === "video" || 
                    ($template['success']['additionals'][$i]['type'] === "stripe" && !($waiver['success']['platform'] === "WEB")) ||
                    ($template['success']['additionals'][$i]['type'] === "takePic" && $waiver['success']['platform'] === "WEB") ||
                    ($template['success']['additionals'][$i]['type'] === "upLocalImg" && !($waiver['success']['platform'] === "WEB"))
                ){
                    continue;
                }

                if ($template['success']['additionals'][$i]['type'] === "textBox") {
                    $template['success']['additionals'][$i]['model'] = str_replace('overflow: scroll; height: 300px','',$template['success']['additionals'][$i]['model']);
                    $template['success']['additionals'][$i]['model'] = str_replace('overflow: scroll; height:350px','',$template['success']['additionals'][$i]['model']);
                    $template['success']['additionals'][$i]['model'] = str_replace('height:350px; overflow: scroll','',$template['success']['additionals'][$i]['model']);
                    continue;
                }

                if ($template['success']['additionals'][$i]['type'] === "number") {
                    if ($template['success']['_id'] == '5db796aa5f205d0491eeb8db' ||
                        $template['success']['_id'] == '5dbaef219a336500112eaaf7' ||
                        $template['success']['_id'] == '5db1a6b6d2c5140014ee0492' ||
                        $template['success']['_id'] == '5da36a8ef4d4c2022f51f466' ||
                        $template['success']['_id'] == '5db2e59756e46f000d630f07' ) {
                        continue;
                    }
                    $template['success']['additionals'][$i]['value'] = $waiver['success']['Additionals'][$waiverIndex]['value'];
                }

                if($template['success']['additionals'][$i]['type'] === "name" ||
                    $template['success']['additionals'][$i]['type'] === "phone" ||
                    $template['success']['additionals'][$i]['type'] === "email" ||
                    $template['success']['additionals'][$i]['type'] === "gender" ||
                    $template['success']['additionals'][$i]['type'] === "photoOrFile" ||
                    $template['success']['additionals'][$i]['type'] === "image" ||
                    $template['success']['additionals'][$i]['type'] === "country"
                ){
                    $template['success']['additionals'][$i]['value'] = $waiver['success']['Additionals'][$waiverIndex]['value'];
                }
                if($template['success']['additionals'][$i]['type'] === "multiple") {
                    $template['success']['additionals'][$i]['value'] = $waiver['success']['Additionals'][$waiverIndex]['value'];
                    $template['success']['additionals'][$i]['dropDownStyleValue'] = '';
                    $template['success']['additionals'][$i]['othersValue'] = '';
                    $template['success']['additionals'][$i]['othersCheck'] = '';
                    if(array_key_exists('dropDownStyleValue', $waiver['success']['Additionals'][$waiverIndex])) {
                        $template['success']['additionals'][$i]['dropDownStyleValue'] = $waiver['success']['Additionals'][$waiverIndex]['dropDownStyleValue'];
                    }
                    if(array_key_exists('othersValue', $waiver['success']['Additionals'][$waiverIndex])) {
                        $template['success']['additionals'][$i]['othersValue'] = $waiver['success']['Additionals'][$waiverIndex]['othersValue'];
                    }
                    if(array_key_exists('othersCheck', $waiver['success']['Additionals'][$waiverIndex])) {
                        $template['success']['additionals'][$i]['othersCheck'] = $waiver['success']['Additionals'][$waiverIndex]['othersCheck']?true:false;
                    }
                }

                if($template['success']['additionals'][$i]['type'] === "date" ||
                    $template['success']['additionals'][$i]['type'] === "dob"
                ){
                    $template['success']['additionals'][$i]['year'] = $waiver['success']['Additionals'][$waiverIndex]['year'];
                    $template['success']['additionals'][$i]['month'] = $waiver['success']['Additionals'][$waiverIndex]['month'];
                    $template['success']['additionals'][$i]['day'] = $waiver['success']['Additionals'][$waiverIndex]['day'];
                    if (isset($waiver['success']['Additionals'][$waiverIndex]['value'])) {
                        $template['success']['additionals'][$i]['value'] = $waiver['success']['Additionals'][$waiverIndex]['value'];
                    }
                }

                if($template['success']['additionals'][$i]['type'] === "signature" ||
                    $template['success']['additionals'][$i]['type'] === "initial"
                ){  
                    if(array_key_exists('ionic3', $waiver['success'])) {                     
                        $waiver['success']['Additionals'][$waiverIndex]['dataUrl']= array(
                            'dataUrl' => $waiver['success']['Additionals'][$waiverIndex]['dataUrl']
                        );
                    }
                    $template['success']['additionals'][$i]['dataUrl'] = $waiver['success']['Additionals'][$waiverIndex]['dataUrl'];
                }

                if($template['success']['additionals'][$i]['type'] === "checkBox") {
                    $template['success']['additionals'][$i]['checked'] = $waiver['success']['Additionals'][$waiverIndex]['checked'];
                }

                if($template['success']['additionals'][$i]['type'] === "shortAns") {
                    $template['success']['additionals'][$i]['ans'] = $waiver['success']['Additionals'][$waiverIndex]['ans'];
                }

                if($template['success']['additionals'][$i]['type'] === "address") {
                    $template['success']['additionals'][$i]['address1'] = $waiver['success']['Additionals'][$waiverIndex]['address1'];
                    $template['success']['additionals'][$i]['address2'] = $waiver['success']['Additionals'][$waiverIndex]['address2'];
                    $template['success']['additionals'][$i]['city'] = $waiver['success']['Additionals'][$waiverIndex]['city'];
                    $template['success']['additionals'][$i]['state'] = $waiver['success']['Additionals'][$waiverIndex]['state'];
                    $template['success']['additionals'][$i]['zip'] = $waiver['success']['Additionals'][$waiverIndex]['zip'];
                }

                if($template['success']['additionals'][$i]['type'] === "newName") {
                    $template['success']['additionals'][$i]['value'] = $waiver['success']['Additionals'][$waiverIndex]['value'];
                    $template['success']['additionals'][$i]['first'] = $waiver['success']['Additionals'][$waiverIndex]['first'];
                    $template['success']['additionals'][$i]['second'] = $waiver['success']['Additionals'][$waiverIndex]['second'];
                }

                if($template['success']['additionals'][$i]['type'] === "takePic" && !($waiver['success']['platform'] === "WEB")) {
                    $template['success']['additionals'][$i]['value'] = $waiver['success']['Additionals'][$waiverIndex]['value'];
                }

                if($template['success']['additionals'][$i]['type'] === "stripe" && $waiver['success']['platform'] === "WEB") {
                    $template['success']['additionals'][$i]['paid'] = $waiver['success']['Additionals'][$waiverIndex]['paid'];
                    $template['success']['additionals'][$i]['paidValue'] = $waiver['success']['Additionals'][$waiverIndex]['paidValue'];
                }

                if($template['success']['additionals'][$i]['type'] === "upLocalImg" && $waiver['success']['platform'] === "WEB") {
                    if (is_array($waiver['success']['Additionals'][$waiverIndex]['value'])) {
                        $template['success']['additionals'][$i]['newUpLocal'] = true;
                    }
                    $template['success']['additionals'][$i]['value'] = $waiver['success']['Additionals'][$waiverIndex]['value'];
                }

                $waiverIndex++;
            }

            if($waiver['success']['minorInfo'] && count($waiver['success']['minorInfo']) > 0){
                for($i = 0; $i < count($waiver['success']['minorInfo']); $i++) {
                    if($waiver['success']['minorInfo'][$i]['type'] === "signature" && array_key_exists('ionic3', $waiver['success'])) {
                        $waiver['success']['minorInfo'][$i]['dataUrl']= array(
                            'dataUrl' => $waiver['success']['minorInfo'][$i]['dataUrl']
                        );
                    }
                    if($waiver['success']['minorInfo'][$i]['type'] === "multiple") {
                        $waiver['success']['minorInfo'][$i]['selected'] = [];
                        if (!$waiver['success']['minorInfo'][$i]['value'] || empty($waiver['success']['minorInfo'][$i]['value'])) {
                            $choices = $waiver['success']['minorInfo'][$i]['choices'];
                            for($y = 0; $y < count($choices); $y++) {
                                if ($choices[$y]['value']) {
                                    array_push($waiver['success']['minorInfo'][$i]['selected'], $choices[$y]['text']);
                                }
                            }
                        } else {
                            foreach ($waiver['success']['minorInfo'][$i]['value'] as $key=>$value) {
                                if ($value) {
                                    array_push($waiver['success']['minorInfo'][$i]['selected'], $key);
                                }
                            }
                        }
                    }
                }
                $template['success']['minorInfo'] = $waiver['success']['minorInfo'];
            } else {
                $template['success']['minorInfo'] = [];
            }
            if($waiver['success']['LastSections']){
                for($i = 0; $i < count($waiver['success']['LastSections']['signatures']); $i++) {
                    if($waiver['success']['LastSections']['signatures'][$i]['type'] === "signature" && array_key_exists('ionic3', $waiver['success'])) {
                        $waiver['success']['LastSections']['signatures'][$i]['dataUrl']= array(
                            'dataUrl' => $waiver['success']['LastSections']['signatures'][$i]['dataUrl']
                        );
                    }
                }
                $template['success']['LastSections'] = $waiver['success']['LastSections'];
            }
            $template['success']['Additionals'] =  $template['success']['additionals'];

            $template['success']['platform'] = $waiver['success']['platform'];
            $template['success']['signedDate'] = $waiver['success']['signedDate'];
            $template['success']['showMinorTemplate'] = $waiver['success']['showMinorTemplate'];
            $template['success']['templateId'] = $waiver['success']['templateId'];
            $template['success']['clientIP'] = $waiver['success']['clientIP'];
            $template['success']['userId'] = $waiver['success']['userId'];
            
            $waiver['success'] = $template['success'];
            echo '<pre>' . var_export($waiver, true) . '</pre>';
        }

        // Get mongo notes
        $requestUrlForNotes = 'api/waivers/findNotesByWaiverId/' . $waiverId;
        $notes = $service->get($requestUrlForNotes);

        $data = array(
            'waiver' => $waiver,
            'notes' => $notes,
        );
        return compact('data');
    }

    public function receipt($chargeId) {

        //instantiate the service connection
        $service = new Service(array('host' => 'ewaiver.herokuapp.com'));

        //$service = new Service(array('host' => '0.0.0.0:5000'));
        //$service = new Service(array('host' => 'ewaiver-staging.herokuapp.com'));
        //capture the response
        $requestUrl = 'api/payments/getCharge/' . $chargeId;
        $data = $service->get($requestUrl);
        $this->_render['layout'] = false;
        return compact('data');
    }

    public function splash($splashId) {
        
        $service = new Service(array('host' => 'ewaiver.herokuapp.com'));

        //$service = new Service(array('host' => '0.0.0.0:5000'));
        // $service = new Service(array('host' => 'ewaiver-ttest.herokuapp.com'));
        //capture the response
        $requestUrl = 'api/external/getSplash/' . $splashId;
        $splash = $service->get($requestUrl);

        if ($splash['success']['sortTemplateList']) {
            $templist['success'] = $splash['success']['sortTemplateList'];
            for ($i = 0; $i < count($templist['success']); $i++) {
                $templist['success'][$i]['published'] = $templist['success'][$i]['checked'];
            }
        } else if ($splash['success']['multipleSplashData'] == 'true') {
            $templistRequestUrl = 'api/external/getSplashTempList/' . $splashId;
            $templist = $service->get($templistRequestUrl);

            for ($i = 0; $i < count($templist['success']); $i++) {
                $templist['success'][$i]['published'] = $templist['success'][$i]['checked'];
            }

        } else {
            $templistRequestUrl = 'api/templates/templates/findSQLTemplatesBySplashId/' . $splashId;
            $templist = $service->post($templistRequestUrl);
        }

        $data = array(
            'splashId' => $splashId,
            'splash' => $splash,
            'templist' => $templist
        );
        $this->_render['layout'] = false;
        return compact('data');
    }

    public function intakeForm($reservationId) {
        $service = new Service(array('host' => 'cleverbook.herokuapp.com'));

        $requestUrl = 'api/share/getConfirmInfo/' . $reservationId;
        $reservation = $service->get($requestUrl);

        //echo '<pre>' . var_export($reservation['success']['bookingInfo']['formData'], true) . '</pre>';

        $data = array(
            'additionals' => $reservation['success']['bookingInfo']['formData']
        );
        $this->_render['layout'] = false;
        return compact('data');
    }

    public function reserveConfirm($reservationId) {
        $service = new Service(array('host' => 'cleverbook.herokuapp.com'));

        $requestUrl = 'api/share/getConfirmInfo/' . $reservationId;
        $data = $service->get($requestUrl);

        // echo '<pre>' . var_export($requestUrl, true) . '</pre>';

        $this->_render['layout'] = false;
        return compact('data');
    }

    public function bioAttachment($shippingId) {

        //instantiate the service connection
        $service = new Service(array('host' => 'projectbio.herokuapp.com'));

        //$service = new Service(array('host' => '0.0.0.0:5000'));
        //$service = new Service(array('host' => 'ewaiver-staging.herokuapp.com'));
        //capture the response
        $requestUrl = 'api/business/getUsShippingDetail/' . $shippingId;
        $data = $service->get($requestUrl);
        // echo '<pre>' . var_export($requestUrl, true) . '</pre>';
        $this->_render['layout'] = false;
        return compact('data');
    }

    public function bioQuotation($quoteId) {

        //instantiate the service connection
        $service = new Service(array('host' => 'projectbio.herokuapp.com'));

        //$service = new Service(array('host' => '0.0.0.0:5000'));
        //$service = new Service(array('host' => 'ewaiver-staging.herokuapp.com'));
        //capture the response
        $requestUrl = 'api/business/getQuotationDetail/' . $quoteId;
        $data = $service->get($requestUrl);
        // echo '<pre>' . var_export($requestUrl, true) . '</pre>';
        $this->_render['layout'] = false;
        return compact('data');
    }


    public function waiver($waiverId) {
        header("Location: https://app.waiverelectronic.com/render/waiver/".$waiverId);
        die();
    }

    public function templateByRefId($templateId) {
        header("Location: https://app.waiverelectronic.com/render/templateByRefId/".$templateId);
        die();
    }

    public function template($templateId) {
        header("Location: https://app.waiverelectronic.com/render/templateByRefId/".$templateId);
        die();
    }
    
    public function renew($waiverId) {
        header("Location: https://app.waiverelectronic.com/render/renew/".$waiverId);
        die();
    }

    public function confirmation($templateId) {
        header("Location: https://app.waiverelectronic.com/render/confirmation/".$templateId);
        die();
    }

    // public function splash($splashId) {
    //     header("Location: https://app.waiverelectronic.com/render/splash/".$splashId);
    //     die();
    // }
}

?>