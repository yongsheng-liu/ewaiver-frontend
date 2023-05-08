<?php


use app\extensions\helper\WaiverHelper;

$Additionals = $data['success']['bookingInfo']['formData'];

$invoicesData = $data['success']['invoicesData'];
$booking = $data['success']['bookingInfo'];
$service = $data['success']['service'];
$staff = $data['success']['staff'];
$resources = $data['success']['resources'];
$paymentInfo = $data['success']['paymentInfo'];
$location = $data['success']['localData'];
$currency = $data['success']['localData']['currency'];

// echo '<pre>' . var_export($data, true) . '</pre>';

?>


<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2016, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<!doctype html>
<html>
<head>
    <?php echo $this->html->charset();?>
    <title>Online Waiver - The World's Leading Online Waiver Application</title>
    <?php echo $this->html->style(array('renderReserveConfirm', 'renderWaiver', 'bootstrap.min')); ?>
    <?php echo $this->scripts(); ?>
    <?php echo $this->styles(); ?>
    <?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
    <META content="Online Waiver| Waiver App - The best electronic waiver application in the world. In just a few minutes, you can have your own online waiver system with a speedy sign up process." name="description">
    <META content="index,follow" name="robots">
    <META content="index,follow" name="GOOGLEBOT">
    <META content="The World's Leading Digital Waiver Application"  name="Author">
    <link href="https://plus.google.com/104217211088502604025" ref="publisher">
    <link rel="shortcut icon" type="image/x-icon" href="https://waiverphoto.s3.amazonaws.com/images/OyOT4M-logo.png" />
    <META content="online waiver,waiver app,waiver,electronic waiver, liability form, electronic waiver app, waiver electronic,digital waiver kiosk,digital waiver, waiver digital" name="keywords">
</head>
<style>
    * {
      font-family: 'droid_sansregular';
    }
</style>

<body>

<div class="confirm-page">
    <div class="invoice-section">
        <div class="paper">
            <div class="invoice">
                <div class="title" style="margin-top: 15px;">
                    <?php if ($invoicesData && $invoicesData['logo']):?>
                        <div style="text-align:center;">
                            <img style="width:30%;margin-bottom: 15px;" src="<?=$invoicesData['logo']; ?>"/>
                        </div>
                    <?php endif;?>
                    <?php if ($invoicesData && $invoicesData['description']):?>
                        <p><?= $this->WaiverHelper->getInvoicesDescription($service, $invoicesData['description'])?></p>
                    <?php endif;?>
                    <?php if (!$invoicesData || !$invoicesData['description']):?>
                        Thank you! You have booked your event for <?php echo $service['serviceName'] ?> successfully
                    <?php endif;?>
                </div>
                <div class="booking-invoice" style="padding-bottom: 30px;">
                    <div class="wrapper"> </div>
                    <h2>Booking Invoice</h2>
                    <div class="invoice-title row" style="margin:0;    display: flow-root;">
                        <div class="invoice-right">
                            <div class="left-section">
                                <p><label>Booking Id:</label></p>
                                <p><label>Total:</label></p>
                            </div>
                            <div class="right-section">
                                <p><?php echo $booking['idStr'] ?></p>
                                <p><?= $this->WaiverHelper->getCurrencySymbol($currency)?> <?= $this->WaiverHelper->getTotalCost($data['success'])?></p>
                            </div>
                        </div>
                    </div>
                    <div class="reserve-form-table">
                        <table>
                            <tr>
                                <td><label style="margin:0;">Booking Date</label></td>
                                <td><?php echo $booking['localDateString'] ?></td>
                            </tr>
                            <tr>
                                <td><label style="margin:0;">Time</label></td>
                                <td>
                                    <?= $this->WaiverHelper->calcStampToTime($booking['startHour'], $location)?> - 
                                    <?= $this->WaiverHelper->calcStampToTime($booking['endHour'], $location)?>
                                </td>
                            </tr>
                            <?php if ($staff):?>
                                <tr>
                                    <td><label style="margin:0;">Staff Name</label></td>
                                    <td><?php echo $staff['name'] ?></td>
                                </tr>
                            <?php endif;?>
                            <?php if ($resources):?>
                                <?php foreach($resources as $r):?>
                                    <tr>
                                        <td><label style="margin:0;"><?php echo $r['categoryName'] ?></label></td>
                                        <td><?php echo $r['name'] ?></td>
                                    </tr>
                                <?php endforeach;?>
                            <?php endif;?>
                        </table>
                        
                        <?php if ($service['priceType'] != 'multiplePrices'):?>
                            <table>
                                <tr>
                                    <td><label style="margin:0;">Item</label></td>
                                    <td><?php echo $service['serviceName'] ?></td>
                                    <?php if($service['price']):?>
                                        <td style="width: 60px;">
                                        <?= $this->WaiverHelper->getCurrencySymbol($currency)?> <?php echo $service['price'] ?>
                                        </td>
                                    <?php endif;?>
                                </tr>
                            </table>
                        <?php endif;?>
                        
                        <?php if ($service['priceType'] == 'multiplePrices' && $service['multiplePrices'] && count($service['multiplePrices']) > 0):?>
                            <div class="addOn">
                                <div class="addOn-item">
                                    <div class="addOn-title"><label><?php echo $service['serviceName'] ?></label></div>
                                    <table style="width:100%;">
                                    <?php foreach($service['multiplePrices'] as $item):?>
                                        <?php if ($item['quantity'] && $item['quantity'] > 0):?>
                                            <tr class="addOn-selection row" style="margin:0">
                                                <td style="width:calc(100% - 140px);"><?php echo $item['des'] ?></td>
                                                <td style="witdh:80px;"><?= $this->WaiverHelper->getCurrencySymbol($currency)?> <?php echo $item['price'] ?></td>
                                                <td style="border-right: none;width:60px;"><i style="font-style: normal;">×</i> <?php echo $item['quantity'] ?></td>
                                            </tr>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                    </table>
                                </div>
                            </div>
                        <?php endif;?>
                        
                        <?php if ($booking['addOns'] && count($booking['addOns']) > 0):?>
                            <div class="addOn">
                                <?php foreach($booking['addOns'] as $addOn):?>
                                    <div class="addOn-item">
                                        <div class="addOn-title"><label><?php echo $addOn['title'] ?></label></div>
                                        <table style="width:100%;">
                                        <?php foreach($addOn['data'] as $item):?>
                                            <?php if ($item['quantity'] && $item['quantity'] > 0):?>
                                                <tr class="addOn-selection row"  style="margin:0">
                                                    <td style="width:calc(100% - 140px);"><?php echo $item['des'] ?></td>
                                                    <td style="width:80px;"><?= $this->WaiverHelper->getCurrencySymbol($currency)?> <?php echo $item['price'] ?></td>
                                                    <td style="border-right: none;width:60px;"><i style="font-style: normal;">×</i> <?php echo $item['quantity'] ?> </td>
                                                </tr>
                                            <?php endif;?>
                                        <?php endforeach;?>
                                        </table>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        <?php endif?>

                        <?php if ($booking['tax'] && count($booking['tax']) > 0):?>
                            <table>
                                <?php foreach($booking['tax'] as $item):?>
                                    <tr>
                                        <td><label style="margin:0;"><?php echo $item['taxName'] ?></label></td>
                                        <td style="width: 60px;"><?= $this->WaiverHelper->getCurrencySymbol($currency)?> <?php echo $item['taxAmountToPay'] ?></td>
                                    </tr>
                                <?php endforeach;?>
                            </table>
                        <?php endif?>
                        
                        <div class="reserve-form-costTotal" style="padding:5px;">
                            <p style="margin: 5px 0;"><label>Total</label>: <?= $this->WaiverHelper->getCurrencySymbol($currency)?> <?= $this->WaiverHelper->getTotalCost($data['success'])?></p>
                            <?php if($booking['coupon']):?>
                                <p style="margin: 5px 0;"><label>Coupon Name</label>:  <?php echo $booking['coupon']['couponName'] ?></p>
                                <p style="margin: 5px 0;"><label>Coupon Discount</label>: <?= $this->WaiverHelper->getCurrencySymbol($currency)?> <?= $booking['coupon']['couponDiscount']?> 
                                    <?php if($booking['coupon']['type'] == 'percentage'):?>
                                        <span> (<?= $booking['coupon']['value']?>%)</span>
                                    <?php endif;?>
                                </p>
                            <?php endif;?>

                            <?php if($paymentInfo):?>
                                <p style="margin: 5px 0;"><label>Paid</label>: <?= $this->WaiverHelper->getCurrencySymbol($currency)?> <?= $this->WaiverHelper->getPaidAmount($paymentInfo)?></p>
                            <?php endif;?>
                            <?php if(($this->WaiverHelper->getBalanceDue($service, $booking, $paymentInfo)) > 0):?>
                                <p style="margin: 5px 0;"><label>Balance Due</label>: <?= $this->WaiverHelper->getCurrencySymbol($currency)?> <?= $this->WaiverHelper->getBalanceDue($service, $booking, $paymentInfo)?></p>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <p style="margin:15px 0;">This is your invoice. You will receive an email shortly with this invoice in the attachment as PDF.</p>
            </div>
        </div>
    </div>

    <div class="intake-form-section">
        <div class="paper" style="margin-bottom: 20px;">
            <div class="template" ng-if="formData" >
                <div class="additionals" style="padding-top: 10px;">
                    <?php  foreach ($Additionals as $t): ?>

                        <?php if ($t['type'] == 'textBox'):?>
                            <div class="form-group">
                                <?php echo $t['text'];?>
                            </div>
                        <?php elseif ($t['type'] == 'multipleChoice'): ?>
                            <div class="form-group">
                                <span><strong><?=$t['question']?> <span style="color:red;"><?php if ($t['optional'] == false): ?> *<?php endif;?></span></strong></span>
                                <?php foreach ($t['choices'] as $k): ?>
                                    <div>
                                        <?php if ($k['checked']) {
                                                echo $k['text'];
                                        }?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php elseif($t['type'] == 'email'): ?>
                            <div class="form-group">
                                <span><strong>Email <span style="color:red;"><?php if ($t['optional'] == false): ?> *<?php endif;?></span></strong></span>
                                <div><?=$t['value'];?></div>
                            </div>
                        <?php elseif($t['type'] == 'phone'): ?>
                            <div class="form-group">
                                <span><strong>Phone <span style="color:red;"><?php if ($t['optional'] == false): ?> *<?php endif;?></span></strong></span>
                                <div><?=$t['value'];?></div>
                            </div>
                        <?php elseif($t['type'] == 'country'): ?>
                            <div class="form-group">
                                <span><strong>Country <span style="color:red;"><?php if ($t['optional'] == false): ?> *<?php endif;?></span></strong></span>
                                <div><?=$t['value'];?></div>
                            </div>
                        <?php elseif($t['type'] == 'newName'): ?>
                            <div class="form-group">
                                <span><strong>Name <span style="color:red;"><?php if ($t['optional'] == false): ?> *<?php endif;?></span></strong></span>
                                <div><?= $t['first']?>&nbsp;&nbsp;<?= $t['last']?></div>
                            </div>

                        <?php elseif($t['type'] == 'shortAns'): ?>
                            <div class="form-group">
                                <span><strong><?=$t['question']?> <span style="color:red;"><?php if ($t['optional'] == false): ?> *<?php endif;?></span></strong></span>
                                <div><?= $t['value']?></div>
                            </div>
                        <?php elseif($t['type'] == 'date'): ?>
                            <div class="form-group">
                                <span><strong>Date <?= $t['dateFormat']?> <span style="color:red;"><?php if ($t['optional'] == false): ?> *<?php endif;?></span></strong></span>
                                <div><?= $this->WaiverHelper->getDateValue($t)?></div>
                            </div>
                        <?php elseif($t['type'] == 'dob'): ?>
                            <div class="form-group">
                                <span><strong>Date of Birth <?= $t['dateFormat']?> <span style="color:red;"><?php if ($t['optional'] == false): ?> *<?php endif;?></span></strong></span>
                                <div><?= $this->WaiverHelper->getDateValue($t)?></div>
                            </div>
                        <?php elseif($t['type'] == 'checkBox'): ?>
                            <div class="form-group">
                                <span>
                                    <?php if ($t['value'] == true): ?>
                                        <span>✓</span>
                                    <?php elseif ($t['value'] == false):  ?>
                                        <span>✘</span>
                                    <?php endif;?>

                                    <strong style="margin-left: 10px;"><?=$t['des']?>
                                        <span>
                                        <?php if ($t['optional'] == false): ?>
                                            (Required)
                                        <?php endif;?>
                                    </span>
                                    </strong></span>
                            </div>
                        <?php elseif($t['type'] == 'address'): ?>
                            <div class="form-group">
                                <span><strong>Address <span><?php if ($t['optional'] == false): ?>(Required)<?php endif;?></span></strong></span>

                                <div><span><?=$t['address1']?></span></div>
                                <div><span><?=$t['address2']?></span></div>
                                <div><span><?=$t['city']?>, <?=$t['state']?>, <?=$t['zip']?></span></div>
                            </div>
                        <?php endif;?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>