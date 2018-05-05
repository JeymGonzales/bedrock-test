<?php 
get_header();
ds_get_partial( 'partials/nav' );
$catName = get_the_category();
$related = ds_get_products();
$images = get_field('product_images');
the_post();

// echo '<pre>';
// echo get_post_permalink().'asd';
// echo '</pre>';
?>
<section class="sec-product u-bg--dirty-white">
    <div class="box-product">
        <div class="sec-breadcrumbs">
            <a href="<?=get_home_url()?>">Home</a> /
            <a href="<?=get_home_url()?>/unisex">Our Slippers</a> / <?=$catName[0]->cat_name?></div>
        <h1><?=$catName[0]->cat_name?></h1>
        <div class="row">
            <div class="two-columns">
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        <li>
                            <a href="<?=get_the_post_thumbnail_url();?>" class="popBox" rel="slippers">
                                <img src="<?=get_the_post_thumbnail_url();?>" />
                            </a>
                        </li>
                        <?php foreach($images as $key => $value) :?>
                        <li>
                            <a href="<?=$images[$key]['image']['url']?>" class="popBox" rel="slippers">
                                <img src="<?=$images[$key]['image']['url']?>" />
                            </a>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <div id="carousel" class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="<?=get_the_post_thumbnail_url();?>" />
                        </li>
                        <?php foreach($images as $key => $value) :?>
                        <li>
                            <img src="<?=$images[0]['image']['url']?>" />
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
            <div class="two-columns">
                <h1><?=the_title()?></h1>
                <p>ge
                    <br/> Color: <?=get_field('product_color')?>
                    <br/> Sizes: <?=get_field('product_size')?></p>
                <p>P<?=get_field('product_price')?></p>
                <p>
                    <a href="http://lazada.com.ph" target="_blank">
                        <img src="<?=get_template_directory_uri()?>/dist/images/lazada-button.png" />
                    </a>
                </p>
            </div>
        </div>
        <ul class="list-tabs row">
            <li>Description</li>
        </ul>
        <div class="desc-product">
            <h2>D23 Black</h2>
            <p>This is classic Dragon. Its off-white base and tan straps are what make it timeless and wearable.</p>
            <p>Not only will this pair look good on your feet, you can bet they’re sturdy and comfy too, just how we’ve
                always made them.</p>
        </div>
        <h3>Related Products</h3>
        <ul class="list-product row">   
            <?php if( !empty($related) ) :?>
            <?php foreach ($related as $k => $v) : ?>
            
            <?php $postid = get_the_ID(); if($postid != $related[$k]['post_id']): ?>
            <li>
                <a href="<?=$related[$k]['guid']?>">
                    <div class="box-ratio">
                        <img src="<?=$related[$k]['thumbnail']?>" />
                    </div>
                    <p>
                        <strong><?=$related[$k]['product_name']?></strong>
                    </p>
                    <p>
                        <strong>P<?=$related[$k]['price']?></strong>
                    </p>
                </a>
            </li>
            <?php endif ?>  
            <?php endforeach ?>
            <?php endif ?>
        </ul>
    </div>
</section>
<?php 
get_footer();
?>

