<?php
$this->title('Products');
?>
<div class="product-banner">
    <div>Service & Products</div>
</div>
<div class="product-section-1">
    <div class="left-nav">
        <div class="list-item-box custom">
            <div class="list-item">
                <div>Custom Peptide Synnthesis<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></div>
            </div>
            <div class="list-box">
                <div>
                    <a href="#CustomPeptideSynnthesis-modification" onclick="toggleNav('CustomPeptideSynnthesis')">Peptide Modification</a>
                </div>
            </div>
        </div>
        <div class="list-item-box cmc">
            <div class="list-item">
                <div>Peptide CMC<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></div>
            </div>
            <div class="list-box">
                <div><a href="#PeptideCMC-APIs" onclick="toggleNav('PeptideCMC')">APIs</a></div>
                <div style="margin-top:30px;"><a href="#PeptideCMC-Drug" onclick="toggleNav('PeptideCMC')">Drug product (sterile injectable formulation development)</a></div>
                <div style="margin-top:30px;"><a href="#PeptideCMC-Analytical" onclick="toggleNav('PeptideCMC')">Analytical development</a></div>
                <div><a href="#PeptideCMC-CMC" onclick="toggleNav('PeptideCMC')">CMC filing</a></div>
            </div>
        </div>
        <div class="list-item-box catalog">
            <div class="list-item">
                <div>Catalog Peptides<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></div>
            </div>
            <div class="list-box">
                <div><a href="#CatalogPeptides-Therapeutic" onclick="toggleNav('CatalogPeptides')">Therapeutic peptides</a></div>
                <div style="margin-top:30px;"><a href="#CatalogPeptides-Cosmetic" onclick="toggleNav('CatalogPeptides')">Cosmetic peptides</a></div>
            </div>
        </div>
        <div class="list-item-box cgmp">
            <div class="list-item">
                <div>cGMP Peptide APIs Manufacturing<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></div>
            </div>
            <div class="list-box">
                <div><a href="#cGMPPeptideAPIsManufacturing" onclick="toggleNav('cGMPPeptideAPIsManufacturing')">Overview</a></div>
            </div>
        </div>
    </div>
    <div class="product-container">
        <div class="product-container-item CustomPeptideSynnthesis">
            <div id="CustomPeptideSynnthesis-modification">1</div>
        </div>
        <div class="product-container-item PeptideCMC">
            <div id="PeptideCMC-APIs">2</div>
            <div id="PeptideCMC-Drug"></div>
            <div id="PeptideCMC-Analytical"></div>
            <div id="PeptideCMC-CMC"></div>
        </div>
        <div class="product-container-item CatalogPeptides">
            <div id="CatalogPeptides-Therapeutic">3</div>
            <div id="CatalogPeptides-Cosmetic"></div>
        </div>
        <div class="product-container-item cGMPPeptideAPIsManufacturing">
            <div id="">4</div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
		let url = window.location.href;
        if (url.match('#CustomPeptideSynnthesis')) {
            $('.product-section-1 .left-nav .custom').addClass('open');
            $('.product-section-1 .product-container .CustomPeptideSynnthesis').css('display', 'block');
        } else if (url.match('#PeptideCMC')) {
            $('.product-section-1 .left-nav .cmc').addClass('open');
            $('.product-section-1 .product-container .PeptideCMC').css('display', 'block');
        } else if (url.match('#CatalogPeptides')) {
            $('.product-section-1 .left-nav .catalog').addClass('open');
            $('.product-section-1 .product-container .CatalogPeptides').css('display', 'block');
        } else if (url.match('#cGMPPeptideAPIsManufacturing')) {
            $('.product-section-1 .left-nav .cgmp').addClass('open');
            $('.product-section-1 .product-container .cGMPPeptideAPIsManufacturing').css('display', 'block');
        }
	})
    $('.product-section-1 .left-nav .list-item div').click(function() {
        if ($(this).parents('.list-item-box').hasClass('open')) {
            $(this).parents('.list-item-box').removeClass('open')
        } else {
            $(this).parents('.list-item-box').addClass('open')
        }
    })
    $('.product-section-1 .left-nav .list-box a').click(function() {
        $(this).parents('.left-nav').children('.list-item-box').children('.list-item').removeClass('active');
        $(this).parents('.left-nav').find('.list-box div').removeClass('active');

        $(this).parents('.list-item-box').children('.list-item').addClass('active');
        $(this).parent().addClass('active');
    })
    function toggleNav(type) {
        let t = '.product-section-1 .product-container .' + type;
        $('.product-section-1 .product-container .product-container-item').css('display', 'none');
        $(t).css('display', 'block');
    }
</script>