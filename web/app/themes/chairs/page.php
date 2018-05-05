<?php 
get_header();
?>
    <body>
        <?=ch_get_partial( 'partials/nav' )?>
        <?=ch_get_partial( 'partials/slider' )?>
        <div class="collection-section pad-top-bottom80">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12 ">
                        <figure class="itg-hover-section">
                            <img src="<?=get_template_directory_uri()?>/assets/img/all/collection1.jpg" alt="">
                            <figcaption class="categorie-boxs">
                                <h3><a href="collection-list-sidebar.html">Unique's<br>Design bed</a></h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 responsive-top">
                        <figure class="itg-hover-section">
                            <img src="<?=get_template_directory_uri()?>/assets/img/all/collection3.jpg" alt="">
                            <figcaption class="categorie-boxs">
                                <h3><a href="collection-list-sidebar.html">Unique's<br>Design bed</a></h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-4 col-sm-4 col-xs-12 pad-top30">
                        <figure class="itg-hover-section">
                            <img src="<?=get_template_directory_uri()?>/assets/img/all/collection4.jpg" alt="">
                            <figcaption class="categorie-boxs">
                                <h3><a href="collection-list-sidebar.html">Unique's<br>Design bed</a></h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 pad-top30">
                        <figure class="itg-hover-section">
                            <img src="<?=get_template_directory_uri()?>/assets/img/all/collection5.jpg" alt="">
                            <figcaption class="categorie-boxs">
                                <h3><a href="collection-list-sidebar.html">Unique's<br>Design bed</a></h3>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 pad-top30">
                        <figure class="itg-hover-section">
                            <img src="<?=get_template_directory_uri()?>/assets/img/all/collection6.jpg" alt="">
                            <figcaption class="categorie-boxs">
                                <h3><a href="collection-list-sidebar.html">Unique's<br>Design bed</a></h3>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <!--//==collection-section End==//-->
        
        <!--//===Start quick vive popap==//-->
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
        <!--//================Quick view End ==============//-->
        <!--//===Products-sectioon Start==//-->
        <section>
            <div class="products-section pad-bottom80">
                <div class="container">
                    <div class="row">
                        <div class="headding-box">
                            <h3 class="theme-headdings">Our Products</h3>
                            <p>Lorem ipsum dolor sit amet<br>
                                consectetueradipiscing elit, sed diam nonummy
                            <p>
                        </div>
                        <div class="products mar-top40">
                            <div class="col-md-3 col-sm-6 col-xs-12">
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
                            <div class="col-md-3 col-sm-6 col-xs-12 responsive-top">
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
                            <div class="col-md-3 col-sm-6 col-xs-12 Categorie-top responsive-top">
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
                            <div class="col-md-3 col-sm-6 col-xs-12 Categorie-top responsive-top">
                                <figure class="itg-hover-style2">
                                    <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products4.png" alt="">
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
                            <div class="mar-top30 product-box1">
                                <div class="col-md-3 col-sm-6 col-xs-12">
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
                                <div class="col-md-3 col-sm-6 col-xs-12 responsive-top">
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
                                <div class="col-md-3 col-sm-6 col-xs-12 Categorie-top responsive-top">
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
                                <div class="col-md-3 col-sm-6 col-xs-12 Categorie-top responsive-top">
                                    <figure class="itg-hover-style2">
                                        <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products8.png" alt="">
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
        </section>
        <!--//===Products-sectioon End==//-->
        <!--//===banner-section Start==//-->
        <section>
            <div class="banner-section">
                <div class="special-style special-style-full special-style-semidark col-md-12 col-md-offset-0 pull-right">
                    <div class="bg-image" style="background-image:url('<?=get_template_directory_uri()?>/assets/img/slider/banner1.jpg');"></div>
                </div>
                <div class="container pad-top-bottom130">
                    <div class="banner-text-box">
                        <h1 class="text-center">The ultimate in luxury and style.</h1>
                        <p>Flat 15% off on Modern couch</p>
                        <a href="collection-list-sidebar.html" class="itg-button mar-top20">Shop Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!--//===banner-section End==//-->
        <!--//===Categories-section Start==//-->
        <section>
            <div class="Categories-box pad-top80 pad-bottom80">
                <div class="container">
                    <div class="row">
                        <div class="headding-box">
                            <h3 class="theme-headdings">Our Categories</h3>
                            <p>Lorem ipsum dolor sit amet<br>
                                consectetueradipiscing elit, sed diam nonummy
                            <p>
                        </div>
                        <div class="Categories-blog pad-top40">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <figure class="itg-hover-style1">
                                    <img src="<?=get_template_directory_uri()?>/assets/img/all/categorie1.png" alt="">
                                    <figcaption class="pad-bottom10 figure-boxx cotegories">
                                        <h4 class="theme-headdings text-center">Modern Chairs</h4>
                                        <p>View the collection</p>
                                        <div class="categorie-text-box">
                                            <h4><a href="collection-list-sidebar.html">Modern Chairs</a></h4>
                                            <p>Lorem Ipsum is a dummy text that is mainly used by.</p>
                                            <a href="collection-list-sidebar.html" class="itg-button mar-top20">View Shop</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 responsive-top">
                                <figure class="itg-hover-style1">
                                    <img src="<?=get_template_directory_uri()?>/assets/img/all/categorie2.png" alt="">
                                    <figcaption class="pad-bottom10 figure-boxx cotegories">
                                        <h4 class="theme-headdings text-center">Modern Chairs</h4>
                                        <p>View the collection</p>
                                        <div class="categorie-text-box">
                                            <h4><a href="collection-list-sidebar.html">Modern Chairs</a></h4>
                                            <p>Lorem Ipsum is a dummy text that is mainly used by.</p>
                                            <a href="collection-list-sidebar.html" class="itg-button mar-top20">View Shop</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 Categorie-top responsive-top">
                                <figure class="itg-hover-style1">
                                    <img src="<?=get_template_directory_uri()?>/assets/img/all/categorie3.png" alt="">
                                    <figcaption class="pad-bottom10 figure-boxx cotegories">
                                        <h4 class="theme-headdings text-center">Modern Chairs</h4>
                                        <p>View the collection</p>
                                        <div class="categorie-text-box">
                                            <h4><a href="collection-list-sidebar.html">Modern Chairs</a></h4>
                                            <p>Lorem Ipsum is a dummy text that is mainly.</p>
                                            <a href="collection-list-sidebar.html" class="itg-button mar-top20">View Shop</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 Categorie-top responsive-top">
                                <figure class="itg-hover-style1">
                                    <img src="<?=get_template_directory_uri()?>/assets/img/all/categorie4.png" alt="">
                                    <figcaption class="pad-bottom10 figure-boxx cotegories">
                                        <h4 class="theme-headdings text-center">Modern Chairs</h4>
                                        <p>View the collection</p>
                                        <div class="categorie-text-box">
                                            <h4><a href="collection-list-sidebar.html">Modern Chairs</a></h4>
                                            <p>Lorem Ipsum is a dummy text that is mainly used by.</p>
                                            <a href="collection-list-sidebar.html" class="itg-button mar-top20">View Shop</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//===Categories-section End==//-->
        <!--//===product-items-section Start==//-->
        <section>
            <div class="product-items-section pad-bottom80">
                <div class="container">
                    <div class="row">
                        <div class="headding-box mar-bottom40">
                            <h3 class="theme-headdings">Popular items</h3>
                            <p>Lorem ipsum dolor sit amet<br>
                                consectetueradipiscing elit, sed diam nonummy
                            <p>
                        </div>
                        <div id="product-items-slider" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="col-md-12 col-sm-12 col-xs-12">
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
                            </div>
                            <div class="item">
                                <div class="col-md-12 col-sm-12 col-xs-12">
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
                            </div>
                            <div class="item">
                                <div class="col-md-12 col-sm-12 col-xs-12">
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
                            </div>
                            <div class="item">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <figure class="itg-hover-style2">
                                        <img src="<?=get_template_directory_uri()?>/assets/img/Products/Products4.png" alt="">
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
                            <div class="item">
                                <div class="col-md-12 col-sm-12 col-xs-12">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//===product-items-section End==//-->
		<!--//===Featured-Product-sectoin Start==//-->
        <section>
            <div class="Featured-Product-sectoin grey-bgs pad-top-bottom80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <figure>
                                        <img src="<?=get_template_directory_uri()?>/assets/img/all/Featured-img.png" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 Featured-box Categorie-top">
                                    <h3 class="theme-headdings">Featured Product</h3>
                                    <p class="Featured-text">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit
                                        auctor aliquet. Aenean sollicitudin.
                                    </p>
                                    <h4 class="theme-headdings pad-top10">Modern Chairs</h4>
                                    <div class="head-medial-text pad-top5">
                                        <p>Availability: <span class="Products-in-stock">In stock</span></p>
                                    </div>
                                    <div class="star-box-section text-left">
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="star-code fa fa-star-half-o" aria-hidden="true"></i>
                                        </p>
                                    </div>
                                    <div class="text-left Featured-price">
                                        <p>$101.00</p>
                                    </div>
                                    <a href="product-detail.html" class="itg-button mar-top10">Purchase now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php get_footer() ?>
    </body>