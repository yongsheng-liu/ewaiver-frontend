<?php
$this->title('Products');
?>
<div class="product-banner">
    <div>Products</div>
</div>
<div class="product-section-1">
    <ul>
        <li class="active"><a href="#system">Emanant™ PWR System</a></li>
        <li><a href="#cell">ReEmanant™ Cell</a></li>
        <li><a href="#software">Beam™ Software Control</a></li>
    </ul>
    <div class="tab-container">
        <div class="tab-pane  in active" id="system">
            <div class="product-section-1-text-title">Emanant™ PWR System</div>
            <div class="product-section-1-text">The Emanant system is shown here with a computer (top)<br>
            and below that with the lid open, which allows for easy access (bottom).</div>
            <img src="../img/products-system.png" />
            <div class="system-text-div">Emanant™ System </div>
            <img src="../img/products-system2.png" />
            <div class="system-text-div">Emanant™ Image without PC</div>
        </div>
        <div class="tab-pane " id="cell">
            <div class="left-section">
                <div class="product-section-1-text-title">Emanant™ PWR System</div>
                <div class="product-section-1-text" style="margin-top:80px">The ReEmanant™ reusable Sensor System features a disposable prism which can be reused a limited number of times.  For researchers looking to reuse the prism, it is easy to disassemble the prism cell, and prepare for a new sample run.</div>
            </div>
            <img src="../img/prodects-cell.png"/>
        </div>
        <div class="tab-pane " id="software">
            <div class="product-section-1-text-title">Software</div>
            <img src="../img/product-software.png" style="margin-top:80px;margin-left: -17px;"/>
        </div>
    </div>
</div>
<div class="up-triangle"> <img src="../img/up-triangle.png"/></div>

<script>
	$('.product-section-1 ul li a').click(function() {
		$('.product-section-1 ul li').removeClass('active');
        $(this).parent('li').addClass('active');
	})
    $('.up-triangle').click(function() {
        scrollTo(0,0)
    })
</script>