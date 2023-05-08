<?php
use app\extensions\helper\WaiverHelper;

$charge = $data['success']['charge'];
$invoices = $data['success']['invoice'];

//echo '<pre>' . var_export($data, true) . '</pre>';
?>


<html>
<head>
    <?php echo $this->html->charset();?>
    <title>Online Waiver - Receipt of Your Payment</title>
    <?php echo $this->html->style(array('renderWaiver')); ?>
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

<body>
<div name="myForm" novalidate class="receiptBody">
    <div class="logoImage">
        <img src="https://waiverphoto.s3.amazonaws.com/images/tTf2uY-logo.png">
        <h1>Receipt</h1>
        <hr/>
    </div>

    <div class="headerText">
        <p>We have received payment for your WaiverElectronic.com service fee. Thanks for your business!</p>
        <p>Questions? please contact <a>support@waiverelectronic.com</a></p>
    </div>

    <div class="receiptInfo">
        <div class="row">
            <div class="left col-xs-12 col-md-8"><?= gmdate('M/d/Y', $charge['created']);?></div>
            <div class="right col-xs-6 col-md-4"><?= $charge['brand']?>-<?= $charge['last4']?></div>
        </div>
        <hr class="wideHR"/>

        <?php if(sizeof($invoices) > 0): ?>
            <div class="row">
                <div class="left-header col-xs-12 col-md-8"><strong>Description</strong></div>
                <div class="right-header col-xs-6 col-md-4"><strong>Amount</strong></div>
            </div>
            <hr/>
            <?php  foreach ($invoices as $invoice): ?>
                <div class="row">
                    <div class="left col-xs-12 col-md-8">
                    <?php if(isset($invoice['description'])):?>
                        <?= $invoice['description'] ?>
                    <?php else: ?>
                        Subscrption to <?= $invoice['plan']?>
                    <?php endif;?>
                    </div>
                    <div class="right col-xs-6 col-md-4">$<?= $invoice['amount']/100;?></div>
                </div>
                <hr/>
            <?php endforeach;?>
            <div class="row">
                <div class="left-header col-xs-12 col-md-8"><strong>Total</strong></div>
                <div class="right col-xs-6 col-md-4"><strong>$<?= $charge['amount']/100?></strong></div>
            </div>

        <?php endif;?>

        <?php if(sizeof($invoices) <= 0): ?>
            <div class="row">
                <div class="left col-xs-12 col-md-8">Cost of <?= $charge['amount'] /20?> Extra Waivers Out of Plan</div>
                <div class="right col-xs-6 col-md-4">$<?= $charge['amount'] /100 ?></div>
            </div>
        <?php endif;?>
        <hr/>
        <div class="row">
            <div class="left col-xs-12 col-md-8">Status</div>
            <div class="right col-xs-12 col-md-8">
                <?php if($charge['refunded'] && $charge['status'] == 'succeeded'):?>
                     Refunded
                <?php elseif (!$charge['refunded'] && $charge['status'] == 'succeeded') : ?>
                     Paid
                <?php else: ?>
                     Unpaid
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
</body>

</html>