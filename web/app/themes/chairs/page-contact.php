<?php /* Template Name: Contact Us Page */ ?>
<?=get_header()?>
<body>
        <?=ch_get_partial( 'partials/nav' )?>
        <div class="breadcrumb-section-box">
            <div class="special-style special-style-full special-style-semidark col-md-12 col-md-offset-0 pull-right">
                <div class="bg-image" style="background-image:url('assets/img/all/breadcrumb-img.png');"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 pad-top100 pad-bottom100 heading-box">
                        <h3 class="heading-breadcrumb box-z text-center">Contact Us</h3>
                        <div class="clear"></div>
                        <div class="breadcrumb-box">
                            <ul class="breadcrumb">
                                <li>
                                    <a class="sab-heading-breadcrumb box-z" href="index.html">home</a>
                                </li>
                                <li class="heading-wa box-z activ">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-griad">
            <div class="container">
                <div class="row">
                    <div class="message-box-sec1 pad-top80 pad-bottom80">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h3 class="theme-headdings">Our Location</h3>
                            <div class="map-box pad-top30">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58688.52838183012!2d75.76220078690069!3d23.168994778895325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39637469de00ff23%3A0x7f82abdf7899d412!2sUjjain%2C+Madhya+Pradesh!5e0!3m2!1sen!2sin!4v1496899778413" width="600" height="465" ></iframe>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 siad-bar-sec">
                            <h3 class="theme-headdings">Leave Us Message</h3>
                            <div class="row pad-top25">
                                <div class="col-md-12 col-sm-12 col-xs-12 Profile setting box">
                                    <p>
                                        <label>First Name</label>
                                        <input type="text" class="search_terms" placeholder="">
                                    </p>
                                    <p>
                                        <label>Email Address</label>
                                        <input type="text" class="search_terms" placeholder="">
                                    </p>
                                    <p>
                                        <label>Phone</label>
                                        <input type="text" class="search_terms" placeholder="">
                                    </p>
                                    <p>
                                        <label>Message</label>
                                        <textarea cols="10" rows="5" placeholder="" id="order_comments" class="form-controller search_terms" name="order_comments"></textarea>
                                    </p>
                                    <button type="button" class="itg-button mar-top20">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row pad-bottom80">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="contact-loction-box">
                                    <span class="loction-icon-box"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                    <h4 class="theme-headdings text-center address-title">Location And Detail</h4>
                                    <p>12,Civil Line dewas,near Chamunda<br>Complex dewas(M.P) 455001</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 responsive-top">
                                <div class="contact-loction-box">
                                    <span class="loction-icon-box"><i class="fa fa-rocket" aria-hidden="true"></i></span>
                                    <h4 class="theme-headdings text-center address-title">Address Details</h4>
                                    <p>12, Civil Line dewas<br>Complex dewas (M.P.) 455001</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 responsive-top">
                                <div class="contact-loction-box">
                                    <span class="loction-icon-box"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <h4 class="theme-headdings text-center address-title">Mail Us</h4>
                                    <p>info@itgeeks.com<br>registration@itgeeks.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?=get_footer();?>
        <!-- <div id="style-switcher" style="left: 0px;">
            <h2>Choose Color<a href="#"><i class="fa fa-cog fa-spin"></i></a></h2>
            <div>
                <ul class="colors" id="color1">
                    <li>
                        <a href="#" class="color"></a>
                    </li>
                    <li>
                        <a href="#" class="color1 active"></a>
                    </li>
                    <li>
                        <a href="#" class="color2"></a>
                    </li>
                    <li>
                        <a href="#" class="color3"></a>
                    </li>
                    <li>
                        <a href="#" class="color4"></a>
                    </li>
                    <li>
                        <a href="#" class="color5"></a>
                    </li>
                    <li>
                        <a href="#" class="color6"></a>
                    </li>
                    <li>
                        <a href="#" class="color7"></a>
                    </li>
                </ul>
            </div>
        </div> -->
    </body>
</html>