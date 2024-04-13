<?php 
 $hero_image = wp_get_attachment_image( get_post_meta( get_the_ID(), 'Desktop_site_hero_id', 1 ), "full", "", array( "class" => "w-full h-auto max-w-full object-cover  md:aspect-[16/7]" ) );
 $headline = get_post_meta( get_the_ID(), 'headline', true );
 $hero_image_mob = wp_get_attachment_image( get_post_meta( get_the_ID(), 'mobile_site_hero_id', 1 ), "full", "", array( "class" => "w-full h-full aspect-[16/12] object-cover  md:aspect-[16/7]" ) );
 
?>

<div class="page-hero w-full mx-auto">

    <div class="hero-image relative">

        <!--<div class="landscape-bg">
            <?php //echo $hero_image; ?>
        </div>
        <div class="portrait-bg">
            <?php //echo $hero_image_mob; ?>
        </div>-->
        <?php echo $hero_image; ?>
        <!--<div class="absolute  bg-black/20 w-full h-full hidden md:flex flex-col justify-end bottom-0 py-20">
            <header class="container px-4 sm:px-10 max-w-screen-xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-6 sm:gap-10 sm:gap-y-2 mb-8 lg:mb-24">
                <h1 class="page-title font-body text-sm font-normal  text-paradise-pink-50 uppercase tracking-wider"><?php the_title(); ?></h1>
                <h3 class="page-headline col-span-1 sm:col-span-3 text-5xl sm:text-7xl font-title font-normal text-white max-w-sm">
                    <?php echo $headline; ?>
                </h3>
            </header>
        </div>-->

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <?php 
                $banner_img = get_post_meta( get_the_ID(), 'banner_img', 1 );
                                        
                    foreach ( (array) $banner_img as $attachment_id2 => $attachment_url2 ) { 
                        $mainImg = wp_get_attachment_image( $attachment_id2, 'large', null, array(
                            'class' => 'w-full h-full object-cover object-center',
                        ) );
                                        
                ?>
                <div class="swiper-slide"><?php echo $mainImg; ?></div>

                <?php } ?>

            </div>
        </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false
        }
      });
    </script>

    </div>
</div>

<style>
    .landscape-bg{
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center center;
}

.portrait-bg{
    background-size: contain;
    width: 100%;
    height: 100%;
}

/* Landscape Styles */
@media screen and (max-width: 767px) {
      .landscape-bg {
          display:none;
      }
    }

    /* Portrait Styles */
    @media screen and (min-width: 768px) {
      .portrait-bg {
        display:none;
        }
    }




    .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

	</style>