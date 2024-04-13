<?php 

$title = get_post_meta( get_the_ID(), 'Pro_title', true );
$desc = get_post_meta( get_the_ID(), 'pro_description', true );

?>

<article id="pro" class="pb-10">
    <div class="container max-w-screen-xl mx-auto lg:grid lg:grid-cols-5  gap-y-8 lg:mb-8 mb-5 px-5 lg:px-8">
        <h1 class="col-span-1 sm:col-span-2 font-title text-2xl sm:text-4xl font-bold  text-paradise-pink-300 uppercase tracking-wider text-left"><?php echo $title; ?></h1>
    </div>
    <div class="container max-w-screen-xl mx-auto px-5 lg:px-8">
        <div class=" font-body font-extralight text-lg sm:text-xl">
            <?php echo $desc; ?>
        </div>

      
    </div>
</article>

<section>

    <div class="max-w-screen-xl mx-auto justify-start px-5 lg:px-8">
        <div class="">
                <?php
                    $diningsec = get_post_meta( get_the_ID(), 'Produts_group', true );

                        foreach ( (array) $diningsec as $key => $entry ) {

                            $pro_title = $pro_desc = $pro_gallery = $button_text = $button_url = '';
                        
                            if ( isset( $entry['Product_title'] ) ) {
                                $pro_title = esc_html( $entry['Product_title'] );
                            }
                        
                            if ( isset( $entry['product_description'] ) ) {
                                $pro_desc = esc_html( $entry['product_description'] );
                            }

                            if ( isset( $entry['product_gallery'] ) ) {
                                $pro_gallery = $entry['product_gallery'];
                            }

                            if ( isset( $entry['button_text'] ) ) {
                                $button_text = esc_html( $entry['button_text']);
                            }

                            if ( isset( $entry['button_url'] ) ) {
                                $button_url = esc_html( $entry['button_url'] );
                            }

                ?>
                    <div class="container  max-w-screen-xl mx-auto lg:grid lg:grid-cols-5 gap-y-8 mb-5 ">
                        <h1 class="col-span-5 sm:col-span-5 ml-0 page-title font-title text-xl sm:text-2xl font-bold  uppercase tracking-wider text-left"><?php echo $pro_title; ?></h1>
                    </div>
                    <div class="container  max-w-screen-xl mx-auto mb-10">
                        <div class=" text-lg sm:text-xl font-body font-extralight pb-5">
                            <?php echo $pro_desc; ?>
                        </div>
                        <?php if($button_url) { ?>
                            <a  data-fancybox data-type="iframe"  href="<?php echo $button_url; ?>" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                <?php echo $button_text; ?>
                            </a>
                        <?php  } ?>
                    </div>
                            
                
                    <div class="container my-12 mx-auto px-2.5 md:px-5">
                        <div class="flex flex-wrap -mx-1 lg:-mx-4 ">


                            <?php 
                                        
                                foreach ( (array) $pro_gallery as $attachment_id2 => $attachment_url2 ) { 
                                    $imgdining = wp_get_attachment_image( $attachment_id2, 'large', null, array(
                                        'class' => 'w-full h-full object-cover object-center ',
                                    ) );
                                    $img_post = get_post($attachment_id2);
                                    $caption = $img_post->post_excerpt;//Image Caption
                                        
                            ?>

                                <style>

                                    .overlay {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        height: 100%;
                                        width: 100%;
                                        opacity: 0;
                                        transition: .5s ease;
                                        background: rgba(0,0,0,0.7);
                                    }
                                    
                                    .cont:hover .overlay {
                                        opacity: 0.8;
                                    }

                                    .text {
                                        color: white;
                                        font-size: 20px;
                                        position: absolute;
                                        top: 50%;
                                        left: 50%;
                                        -webkit-transform: translate(-50%, -50%);
                                        -ms-transform: translate(-50%, -50%);
                                        transform: translate(-50%, -50%);
                                        text-align: center;
                                        }

                                </style>

                                <!-- Column -->
                                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                                    <!-- Article -->
                                    <article class="overflow-hidden rounded-lg shadow-lg">
                                        <div class=" relative ">
                                            <figure class="cont w-full bg-sapphire-200 overflow-hidden">
                                                <?php echo $imgdining; ?> 
                                                <div class="overlay">
                                                    <div class="text uppercase font-title text-xl sm:text-2xl"><?php echo $caption; ?> </div>
                                                </div>
                                            </figure>
                                        </div>
                                        <?php //echo $imgdining; ?>
                                    </article>
                                    <!-- END Article -->
                                </div>

                            <?php } ?>

                        </div>
                    </div>
                <?php } ?>
        </div>
    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
      Fancybox.bind("[data-fancybox]", {
        //
      }) 
    </script>