<?php
$this->title("Blog | Best Online Waiver System.");


//var_dump($date->format('Y-m-d'));
?>

<section id="blog-hero1" class="hero">
    <div class="inner">
        <div class="copy">
            <h1>Best Online Waiver Application</h1>
            <h2>Unlimited waiver storage. Unlimited waiver signing. Forever waiver storage.</h2>
            <a href="/blog#section4" style="color:white"><h3 class="button signup" style="font-weight: 400;">Get your free trial</h3></a>
        </div>
    </div>
</section>

<section class="blog-content">
    <?php  foreach ($blogs as $b): ?>
    <?php $date = new DateTime($b['date']); ?>
    <div class="blog-element inside">
        <div class="blog-body" style="color: black">
            <span class="pull-right"><?=$date->format('Y-m-d')?></span>
            <div>
                <?php echo $b['content'];?>
            </div>
        </div>
        <hr/>
    </div>
    <?php endforeach;?>
</section>
