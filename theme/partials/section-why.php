<?php 

$title = get_post_meta( get_the_ID(), 'why_title', true );

?>

<article id="why" class="pb-10">
    <div class="container px-4 sm:px-10 max-w-screen-xl mx-auto lg:grid lg:grid-cols-1 sm:grid-cols-5 gap-y-8 lg:mb-8 sm:mb-5">
        <h1 class="col-span-1 sm:col-span-2 font-title text-2xl sm:text-4xl font-bold  text-paradise-pink-300 uppercase tracking-wider text-left"><?php echo $title; ?></h1>
    </div>
    <div class="container px-4 sm:px-10 max-w-screen-xl mx-auto lg:mb-8 mb-6">
        <div class="px-4 sm:px-10 font-body font-extralight">
        <?php echo wpautop( get_post_meta( get_the_ID(), 'why_description', true ) ); ?>

        </div>
    </div>
</article>
