<?php /* Template Name: Products Page */ ?>

<!DOCTYPE html>

<?php 
get_header();
?>
    <body>
        <?=ch_get_partial( 'partials/nav' )?>
        <!--//==top bar End==//-->
        <div class="breadcrumb-section-box">
            <div class="special-style special-style-full special-style-semidark col-md-12 col-md-offset-0 pull-right">
                <div class="bg-image" style="background-image:url('<?=get_template_directory_uri()?>/assets/img/all/breadcrumb-img.png');"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 pad-top100 pad-bottom100 heading-box">
                        <h3 class="heading-breadcrumb box-z text-center">Our Collection</h3>
                        <div class="clear"></div>
                        <div class="breadcrumb-box">
                            <ul class="breadcrumb">
                                <li>
                                    <a class="sab-heading-breadcrumb box-z" href="index.html">home</a>
                                </li>
                                <li class="heading-wa box-z activ">Collection</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pad-bottom80 pad-top80 blog-griad">
            <div class="container">
                <div class="row">
                    <!--//==blog section Start==//-->
                    <section>
                        <div class="products-section">
                            <div class="container">
                                <div class="row">
                                    <div id="collectiongrid">
                                        <div class="col-md-9 col-sm-8 col-xs-12 pull-right">
                                            <div class="row">
                                                <div class="page-tool">
                                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                                        <div class="page-tool-box padT5">
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 col-xs-12 marB10 padT5">
                                                                    <a class="viewGrid"><i class="fa fa-th" aria-hidden="true"></i></a>
                                                                    <a class="viewList"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                                                                    <span>Item 1 to 15 of 15 items</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="productsgriads" class="products mar-top30">
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                        <figure class="itg-hover-style2">
                                                            <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products1.png" alt="">
                                                            <div class="products-boxes">
                                                                <ul class="icon-hover">
                                                                    <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                    <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <figcaption class=" figure-boxx figure-section-hover">
                                                                <h4 class="theme-headdings text-center pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                <p>$169.00</p>
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12 responsive-top">
                                                        <figure class="itg-hover-style2">
                                                            <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products2.png" alt="">
                                                            <div class="products-boxes">
                                                                <ul class="icon-hover">
                                                                    <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                    <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <figcaption class=" figure-boxx figure-section-hover">
                                                                <h4 class="theme-headdings text-center pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                <p>$169.00</p>
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12 responsive-top">
                                                        <figure class="itg-hover-style2">
                                                            <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products3.png" alt="">
                                                            <div class="products-boxes">
                                                                <ul class="icon-hover">
                                                                    <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                    <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <figcaption class=" figure-boxx figure-section-hover">
                                                                <h4 class="theme-headdings text-center pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                <p>$169.00</p>
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                    <div class="mar-top30 second-rows">
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <figure class="itg-hover-style2">
                                                                <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products5.png" alt="">
                                                                <div class="products-boxes">
                                                                    <ul class="icon-hover">
                                                                        <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                        <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <figcaption class=" figure-boxx figure-section-hover">
                                                                    <h4 class="theme-headdings text-center pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                    <p>$169.00</p>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12 responsive-top">
                                                            <figure class="itg-hover-style2">
                                                                <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products6.png" alt="">
                                                                <div class="products-boxes">
                                                                    <ul class="icon-hover">
                                                                        <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                        <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <figcaption class=" figure-boxx figure-section-hover">
                                                                    <h4 class="theme-headdings text-center pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                    <p>$169.00</p>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12 responsive-top">
                                                            <figure class="itg-hover-style2">
                                                                <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products7.png" alt="">
                                                                <div class="products-boxes">
                                                                    <ul class="icon-hover">
                                                                        <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                        <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <figcaption class=" figure-boxx figure-section-hover">
                                                                    <h4 class="theme-headdings text-center pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                    <p>$169.00</p>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <div class=" pad-top30 second-rows">
                                                        <div class="products">
                                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                                <figure class="itg-hover-style2">
                                                                    <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products1.png" alt="">
                                                                    <div class="products-boxes">
                                                                        <ul class="icon-hover">
                                                                            <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                            <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <figcaption class=" figure-boxx figure-section-hover">
                                                                        <h4 class="theme-headdings text-center pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                        <p>$169.00</p>
                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4 col-xs-12 responsive-top">
                                                                <figure class="itg-hover-style2">
                                                                    <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products2.png" alt="">
                                                                    <div class="products-boxes">
                                                                        <ul class="icon-hover">
                                                                            <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                            <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <figcaption class=" figure-boxx figure-section-hover">
                                                                        <h4 class="theme-headdings text-center pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                        <p>$169.00</p>
                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4 col-xs-12 responsive-top">
                                                                <figure class="itg-hover-style2">
                                                                    <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products3.png" alt="">
                                                                    <div class="products-boxes">
                                                                        <ul class="icon-hover">
                                                                            <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                            <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <figcaption class=" figure-boxx figure-section-hover">
                                                                        <h4 class="theme-headdings text-center pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                        <p>$169.00</p>
                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="mar-top30 second-rows">
                                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                                    <figure class="itg-hover-style2">
                                                                        <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products5.png" alt="">
                                                                        <div class="products-boxes">
                                                                            <ul class="icon-hover">
                                                                                <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                                <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <figcaption class=" figure-boxx figure-section-hover">
                                                                            <h4 class="theme-headdings text-center pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                            <p>$169.00</p>
                                                                        </figcaption>
                                                                    </figure>
                                                                </div>
                                                                <div class="col-md-4 col-sm-4 col-xs-12 responsive-top">
                                                                    <figure class="itg-hover-style2">
                                                                        <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products6.png" alt="">
                                                                        <div class="products-boxes">
                                                                            <ul class="icon-hover">
                                                                                <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                                <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <figcaption class=" figure-boxx figure-section-hover">
                                                                            <h4 class="theme-headdings text-center pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                            <p>$169.00</p>
                                                                        </figcaption>
                                                                    </figure>
                                                                </div>
                                                                <div class="col-md-4 col-sm-4 col-xs-12 responsive-top">
                                                                    <figure class="itg-hover-style2">
                                                                        <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products7.png" alt="">
                                                                        <div class="products-boxes">
                                                                            <ul class="icon-hover">
                                                                                <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                                <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <figcaption class=" figure-boxx figure-section-hover">
                                                                            <h4 class="theme-headdings text-center pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                            <p>$169.00</p>
                                                                        </figcaption>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div id="productslist" class="products list box mar-top30">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                                <figure class="itg-hover-style2">
                                                                    <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products1.png" alt="">
                                                                    <div class="products-boxes">
                                                                        <ul class="icon-hover">
                                                                            <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                            <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 col-xs-12 box-list-page">
                                                                <div class="pad-bottom10 figure-boxx figure-section-hover">
                                                                    <h4 class="theme-headdings text-left pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                    <p>$169.00</p>
                                                                    <div class="per-box">
                                                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. vulputate cursus auctor, nisi elit consequat ipsum, nec sagittis.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 mar-top30">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                                <figure class="itg-hover-style2">
                                                                    <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products2.png" alt="">
                                                                    <div class="products-boxes">
                                                                        <ul class="icon-hover">
                                                                            <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                            <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 col-xs-12 box-list-page">
                                                                <div class="pad-bottom10 figure-boxx figure-section-hover">
                                                                    <h4 class="theme-headdings text-left pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                    <p>$169.00</p>
                                                                    <div class="per-box">
                                                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. vulputate cursus auctor, nisi elit consequat ipsum, nec sagittis.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 mar-top30">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                                <figure class="itg-hover-style2">
                                                                    <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products3.png" alt="">
                                                                    <div class="products-boxes">
                                                                        <ul class="icon-hover">
                                                                            <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                            <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 col-xs-12 box-list-page">
                                                                <div class="pad-bottom10 figure-boxx figure-section-hover">
                                                                    <h4 class="theme-headdings text-left pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                    <p>$169.00</p>
                                                                    <div class="per-box">
                                                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. vulputate cursus auctor, nisi elit consequat ipsum, nec sagittis.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 mar-top30">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                                <figure class="itg-hover-style2">
                                                                    <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products4.png" alt="">
                                                                    <div class="products-boxes">
                                                                        <ul class="icon-hover">
                                                                            <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                            <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 col-xs-12 box-list-page">
                                                                <div class="pad-bottom10 figure-boxx figure-section-hover">
                                                                    <h4 class="theme-headdings text-left pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                    <p>$169.00</p>
                                                                    <div class="per-box">
                                                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. vulputate cursus auctor, nisi elit consequat ipsum, nec sagittis.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 mar-top30">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                                <figure class="itg-hover-style2">
                                                                    <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products5.png" alt="">
                                                                    <div class="products-boxes">
                                                                        <ul class="icon-hover">
                                                                            <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                            <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 col-xs-12 box-list-page">
                                                                <div class="pad-bottom10 figure-boxx figure-section-hover">
                                                                    <h4 class="theme-headdings text-left pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                    <p>$169.00</p>
                                                                    <div class="per-box">
                                                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. vulputate cursus auctor, nisi elit consequat ipsum, nec sagittis.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 mar-top30">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                                <figure class="itg-hover-style2">
                                                                    <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products6.png" alt="">
                                                                    <div class="products-boxes">
                                                                        <ul class="icon-hover">
                                                                            <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                            <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 col-xs-12 box-list-page">
                                                                <div class="pad-bottom10 figure-boxx figure-section-hover">
                                                                    <h4 class="theme-headdings text-left pad-top10"><a href="product-detail.html">Modern Chairs</a></h4>
                                                                    <p>$169.00</p>
                                                                    <div class="per-box">
                                                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. vulputate cursus auctor, nisi elit consequat ipsum, nec sagittis.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="col-md-12 text-center">
                                                        <div class="pagination-box text-right mar-top30">
                                                            <a href="#"><span><i class="fa fa-angle-left" aria-hidden="true"></i></span></a>
                                                            <a href="#"><span>1</span></a>
                                                            <a href="#"><span>2</span></a>
                                                            <a href="#"><span>3</span></a>
                                                            <a href="#"><span>4</span></a>
                                                            <a href="#"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-12 siad-bar-sec ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="search-box-1 mar-bottom40">
                                                        <input type="text" name="search" class="search_terms" placeholder="Search">
                                                        <button class="button-style" type="submit" value=""><i class="fa fa-search" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <!--//==Categories Start==//-->
                                                <div class="col-md-12">
                                                    <div class="Categories">
                                                        <h4 class="theme-headdings">Filter By Categories</h4>
                                                        <div class="Categories-title-box pad-top30">
                                                            <div class="faq-section">
                                                                <div id="faq" class="marB30 ui-accordion ui-widget ui-helper-reset" role="tablist">
                                                                    <h3 class="ui-accordion-header ui-corner-top ui-state-default ui-accordion-icons ui-accordion-header-collapsed ui-corner-all" role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="false" aria-expanded="false" tabindex="-1">Categories</h3>
                                                                    <div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true" style="display: none; height: 231px;">
                                                                        <div class="Categories">
                                                                            <ul class="list boxss pad-top10">
                                                                                <li><a href="#">Category 1</a></li>
                                                                                <li><a href="#">Category 2</a></li>
                                                                                <li><a href="#">Category 3</a></li>
                                                                                <li><a href="#">Category 4</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--//==blog section End==//-->
                </div>
            </div>
        </div>
        <!--//===product-items-section End==//-->
        <!--//================Quick view Start ==============//--> 
        <div class="quick-vive-popap">
            <div class="container">
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg" >
                        <div class="Quick-view-popup modal-content text-left">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="col-md-12 col-xs-12 popap-open-box">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="row">
                                            <div class="col-xs-12 marB30">
                                                <figure>
                                                    <img src="<?=get_template_directory_uri()?>/assets/img/all/product-detail.png" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 responsive-top">
                                        <h3 class="theme-headdings text-left product-detail-title"><a href="#">Modern Chairs</a></h3>
                                        <div class="star-box-section left product-det text-left pad-top15">
                                            <ul>
                                                <li>
                                                    <p>	<i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="star-code fa fa-star-half-o" aria-hidden="true"></i>
                                                    </p>
                                                </li>
                                                <li class="border-left-site">3 Review(s)</li>
                                                <li class="border-left-site">Add a Review</li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="per-box texy-left mar-top15">
                                            <p>Morbi mollis vestibulum sollicitudin. in eros a justo facilisis rutrum. Aenean id ullamcorper.</p>
                                        </div>
                                        <div class="product-detail-btn  pad-top15">
                                            <div class="form-row col-sm-5 col-xs-12 country-boxs billing-box select ">
                                                <div class="row">
                                                    <p>
                                                        <label for="billing_state">Material</label>
                                                        <select class="billing_state2" id="billing_state" name="billing_state">
                                                            <option value="">Select Color</option>
                                                            <option value="AP">Red</option>
                                                            <option value="AR">Blue</option>
                                                            <option value="AS">Green</option>
                                                            <option value="BR">Yellow</option>
                                                            <option value="CT">Black</option>
                                                        </select>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-row col-sm-5 country-boxs billing-box select down ">
                                                <div class="row ">
                                                    <p>
                                                        <label for="billing_state">Size</label>
                                                        <select class="billing_state" id="billing_state1" name="billing_state">
                                                            <option value="">Select Size</option>
                                                            <option value="AP">S</option>
                                                            <option value="AR">L</option>
                                                            <option value="AS">M</option>
                                                            <option value="BR">XL</option>
                                                            <option value="CT">XXL</option>
                                                        </select>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-7 row">
                                            <div class="order-data box order-table text-center padTB15">
                                                <div class="order-table-cell order-text product-input-type">
                                                    <input type="number" value="01" class="qty" name="qty1">													
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-sm-7 product-box-btm-blog row">
                                            <a href="" class="itg-button mar-top15">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?=get_footer()?>
    </body>
</html>