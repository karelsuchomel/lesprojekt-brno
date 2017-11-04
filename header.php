<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php bloginfo('name');?></title>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="description" content="Specializujeme se zejména na tvorbu lesních hospodářských plánů, lesních hospodářských osnov, realizaci projektů a poradenství v oblasti lesnictví a ochraně přírody a krajiny">
    <meta name="keywords" content="LHP, LHO, lesnictví, taxační kancelář, lesní hospodářské plány, lesní hospodářské osnovy">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
