<?php

namespace app\extensions\helper;

class WaiverHelper extends \lithium\template\Helper {

    public  $description_text = "Online Waiver| Waiver App - The best electronic waiver application in the world. In just a few minutes, you can have your own online waiver system with a speedy sign up process.";
    public $canonicalLink = '';
    public $metaContent = '';

    public function getDescription() {
        return $this->description_text;
    }

    public function getCanonicalLink() {
        return $this->canonicalLink;
    }

    public function setDescription($text) {
        $this->description_text = $text;
    }

    public function setCanonicalLink($text) {
        $this->canonicalLink = $text;
    }

    public function setPageMeta($text) {
        $this->metaContent = $text;
    }

    public function getPageMeta() {
        return $this->metaContent;
    }


    public function getLogoStyles($header) {


        // Logo exists
        if (array_key_exists('logoImage', $header) && $header['logoImage']) {

            if ($header['logoSize'] == "small") {
                $logoStyles = "width: 10%;";
                $headerStyle = "width: 90%;";
            } else if ($header['logoSize'] == "medium") {
                $logoStyles = "width: 20%;";
                $headerStyle = "width: 80%;";
            } else if ($header['logoSize'] == "large") {
                $logoStyles = "width: 40%;";
                $headerStyle = "width: 60%;";
            } else if ($header['logoSize'] == "extraLarge") {
                $logoStyles = "width: 60%;";
                $headerStyle = "width: 40%;";
            }

            if ($header['logoPosition'] == "left") {
                $logoStyles = $logoStyles. "float: left;";
                $headerStyle = $headerStyle. "float: right;";
            } else if ($header['logoPosition'] == "middle") {
                $logoStyles = $logoStyles." float:middle; display: block; margin: auto;";
                $headerStyle = $headerStyle." text-align: center;width:100%;";
                if ($header['logoSize'] == "small") {
                    $logoStyles = $logoStyles."width:20%";
                } else if ($header['logoSize'] == "medium") {
                    $logoStyles = $logoStyles."width:40%";
                } else if ($header['logoSize'] == "large") {
                    $logoStyles = $logoStyles."width:60%";
                } else if ($header['logoSize'] == "extraLarge") {
                    $logoStyles = $logoStyles."width:100%";
                }
            } else if ($header['logoPosition'] == "right") {
                $logoStyles = $logoStyles." float:right;";
                $headerStyle = $headerStyle." float:left;";
            }
            $headerStyles = array(
                'logoStyle' => $logoStyles,
                'headerStyle' => $headerStyle
            );
            return $headerStyles;
        }
    }

    public function convertImageToDataUrl($path) {
        $path = self::myUrlEncode($path);
        $type = pathinfo("", PATHINFO_EXTENSION);
        if ($path == null || strlen($path) == 0) return "";
        $data = file_get_contents($path);
        $base64 = 'data:image/png' . $type . ';base64,' . base64_encode($data);
        return $base64;
    }

    function myUrlEncode($string) {
        $arr = array(" " => "%20");
        return strtr($string, $arr);
    }

    public function getDateValue($date) {

        if (array_key_exists('value', $date) && strlen($date['value']) > 0) {
            return substr($date['value'],0, 10);;
        }

        if (array_key_exists('day', $date) && array_key_exists('month', $date) && array_key_exists('year', $date)) {
            $dateV = $date['month']."/".$date['day']."/".$date['year'];
            return $dateV;
        }

        return "";
    }

    public function calcStampToTime($stamp, $location) {
        if ($location && $location['timeFormat'] && $location['timeFormat'] == "24Hours") {
            $hour = intval($stamp/60);
            $minutes = strval($stamp - $hour*60);
            $hour = strval($hour);
            if (strlen($minutes) == 1) {
                $minutes = '0'.$minutes;
            }
            return $hour.':'.$minutes;
        }

        if ($stamp == 1440) {
            return "00:00 am";
        }
        $hour = intval($stamp/60);
        $minutes = strval($stamp - $hour * 60);
        $ap = "am";
        if ($hour == 12) {
            $ap = "pm";
        } else if ($hour > 12) {
            $ap = "pm";
            $hour -= 12;
        }

        $hour = strval($hour);
        if (strlen($minutes) == 1) {
            $minutes = '0'.$minutes;
        }
        return $hour.':'.$minutes.' '.$ap;
    }

    public function getTotalCost($data) {
        $totalCost = 0;
        if ($data['service']['price'] && (!$data['service']['priceType'] || $data['service']['priceType'] != 'multiplePrices')) {
            $totalCost = floatval($data['service']['price']);
        }

        if ($data['service']['priceType'] == 'multiplePrices' && $data['service']['multiplePrices'] && count($data['service']['multiplePrices']) > 0) {
            for ($i = 0; $i < count($data['service']['multiplePrices']); $i++) {
                if ($data['service']['multiplePrices'][$i]['quantity'] > 0) {
                    $totalCost += $data['service']['multiplePrices'][$i]['price']* $data['service']['multiplePrices'][$i]['quantity'];
                }
            }
        }

        if ($data['bookingInfo']['addOnCost']) {
            $totalCost += $data['bookingInfo']['addOnCost'];
        }

        if ($data['bookingInfo']['taxCost']) {
            $totalCost += $data['bookingInfo']['taxCost'];
        }

        return $totalCost;
    }

    public function getCurrencySymbol($currency) {
        switch($currency) {
            case 'USD':
                return '$';
                break;
            case 'EUR':
                return '€';
                break;
            case 'GBP':
                return '£';
                break;
            case 'CAD':
                return 'C$';
                break;
            case 'AUD':
                return 'A$';
                break;
        }
    }
    
    public function getPaidAmount($paymentInfo) {
        $paid = 0;
        for ($i = 0; $i < count($paymentInfo); $i++) {
            $paid += $paymentInfo[$i]['amount'];
        }
        return $paid/100;
    }
    public function getBalanceDue($service, $booking, $paymentInfo) {
        $totalCost = 0;
        if ($service['price'] && (!$service['priceType'] || $service['priceType'] != 'multiplePrices')) {
            $totalCost = floatval($service['price']);
        }
        if ($service['priceType'] == 'multiplePrices' && $service['multiplePrices'] && count($service['multiplePrices']) > 0) {
            for ($i = 0; $i < count($service['multiplePrices']); $i++) {
                if ($service['multiplePrices'][$i]['quantity'] > 0) {
                    $totalCost += ($service['multiplePrices'][$i]['price'] * $service['multiplePrices'][$i]['quantity']);
                }
            }
        }
        if ($booking['addOnCost']) {
            $totalCost += $booking['addOnCost'];
        }

        if ($booking['taxCost']) {
            $totalCost += $booking['taxCost'];
        }

        if ($booking['coupon'] && $booking['coupon']['couponDiscount']) {
            $totalCost -= $booking['coupon']['couponDiscount'];
        }

        if (count($paymentInfo) > 0) {
            $paid = 0;
            for ($i = 0; $i < count($paymentInfo); $i++) {
                $paid += $paymentInfo[$i]['amount'];
            }
            $paid = $paid / 100;
            $totalCost -= $paid;
        }
        return $totalCost;
    }

    public function getGalleryNav($data) {
        $navs = [];

        for ($i = 0; $i < count($data); $i++) {
            array_push($navs, $data[$i]['tag']);
        }
        return $navs;
    }

    public function getInvoicesDescription($service, $des) {
        $serviceName = $service['serviceName'];
        return str_replace('{serviceName}', $serviceName, $des);
    }
    public function getQuotationSubtotal($quote) {
        $records = $quote['records'];
        $subtotal = 0;
        if ($records && count($records) > 0) {
            for ($i = 0; $i < count($records); $i++) {
                if ($records[$i]['quotePrice']) {
                    $subtotal += intval($records[$i]['quotePrice']);
                }
            }
        }
        return $subtotal;
    }
}