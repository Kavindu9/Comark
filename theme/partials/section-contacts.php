<?php 

$title = get_post_meta( get_the_ID(), 'Contacts_title', true );
$email = get_post_meta( get_the_ID(), 'Contacts_email', true );
$tel = get_post_meta( get_the_ID(), 'Contacts_whatsapp', true );
$adress= get_post_meta( get_the_ID(), 'Contacts_adress', true );

$button_text = get_post_meta( get_the_ID(), 'pdf_txt_button', true );
$button_url = get_post_meta( get_the_ID(), 'pdf_button_url', true );
?>

<article id="con" class="pb-10">
    <div class="container  max-w-screen-xl mx-auto lg:grid lg:grid-cols-5 gap-y-8 lg:mb-8 sm:mb-5 px-5 lg:px-8">
        <h1 class="col-span-1 sm:col-span-2 font-title text-2xl sm:text-4xl font-bold  text-paradise-pink-300 uppercase tracking-wider text-left"><?php echo $title; ?></h1>
    </div>
    <div class="container  max-w-screen-xl mx-auto lg:mb-8 mb-6 px-5 lg:px-8">
        <div class=" font-body font-extralight text-lg sm:text-xl">
            <?php echo wpautop( get_post_meta( get_the_ID(), 'Contacts_description', true ) ); ?><br>
            <p class="font-body font-extralight"><b>Email:</b> <?php echo $email; ?></p><br>
            <p class="font-body font-extralight"><b>Whatsapp:</b> <?php echo $tel; ?></p><br>

            <?php if($button_url) { ?>
                <a href="<?php echo $button_url; ?>" class="no-underline border inline-block border-pink-200 hover:border-pink-500 text-pink-500 p-2 px-8 mx-auto font-title uppercase" download><?php echo $button_text ?></a><br>
            <?php } ?>

            <p class="font-body font-extralight"><b>Adress:</b> <?php echo $adress; ?></p><br>
            </div>
    </div>
</article>