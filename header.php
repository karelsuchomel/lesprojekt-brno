<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php bloginfo('name');?></title>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="description" content="idea-presenter-wp-theme">
    <meta name="keywords" content="Simplistic WordPress theme, Present papers, Present idea">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Links-->
    <!-- Fonts-->
    <!-- font-family: Open+Sans - 300, 400, 600, 700, 800 -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;subset=latin-ext" rel="stylesheet">
    <!-- font-family: Lora - 400, 400i, 700 -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700&amp;subset=latin-ext" rel="stylesheet"> 
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>

<?php
global $post;
$currentPageID = $post->ID;
$blurImgID = get_post_meta( $currentPageID, "_wp_attached_file_blur", true );
if ( $blurImgID !== "" ) {

    ?>

    <style>
    .footer-container .footer-background-blurred {
        background-image: url("<?php echo $blurImgID; ?>");
    }
    </style>

    <?php
}
?>
