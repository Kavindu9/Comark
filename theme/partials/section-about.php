<?php 

$title = get_post_meta( get_the_ID(), '1_title', true );
$desc = get_post_meta(get_the_ID(), '1_description', true);
$side_img = wp_get_attachment_image( get_post_meta( get_the_ID(), '1_image_id', 1 ), "full", "", array( "class" => "w-full h-full thumbnail" ));

?>

<article id="about" class="pt-10 z-0">
    <div class="container max-w-screen-xl mx-auto lg:grid lg:grid-flow-dense lg:grid-cols-2  gap-y-8 lg:mb-8 sm:mb-5 justify-items-start relative px-5 lg:px-8">
        <div class="lg:row-start-1">
            <h1 class="page-title font-title text-2xl sm:text-4xl font-bold  uppercase tracking-wider text-left"><?php echo $title; ?></h1><br>
            <p class="page-headline  text-lg sm:text-xl font-body font-extralight lg:pr-20">
                <?php echo $desc; ?>
            </p>
        </div>
    <!--</div>
    <div class="container px-4 sm:px-10 max-w-screen-xl mx-auto lg:grid lg:grid-cols-4 gap-6 sm:gap-10 sm:gap-y-2 lg:mb-24 mb-14 relative z-0">-->
        <div class=" lg:pt-16 sm:pt-5 py-14">
            <figure class="w-full">
                <?php echo $side_img; ?>
            </figure>
        </div>
        <!--<div class="lg:row-start-2 lg:pr-28 px-4 sm:px-10 pb-5">
            <p class="page-headline  text-xl sm:text-xl font-body font-extralight">
                <?php echo $desc; ?>
            </p>
        </div>-->

    </div>
</article>

<?php 

$title = get_post_meta( get_the_ID(), 'why_title', true );

?>

<article id="why" class="pb-10">
    <div class="container max-w-screen-xl mx-auto px-5 lg:px-8">
        <div class="lg:mb-8 mb-5">
            <h1 class="font-title text-2xl sm:text-4xl font-bold uppercase tracking-wider text-left"><?php echo $title; ?></h1>
        </div>
        <div class="lg:mb-8 mb-6">
            <div class="font-body font-extralight text-lg sm:text-xl">
            <?php echo wpautop( get_post_meta( get_the_ID(), 'why_description', true ) ); ?>

            </div>
        </div>
    </div>
</article>