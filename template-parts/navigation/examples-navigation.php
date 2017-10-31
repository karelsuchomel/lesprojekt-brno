<?php
global $post;
$currentPageSlug = $post->post_name;
$currentPageContent = $post->post_content;
?>

<div id="examples-navigation">
	<a href="<?php echo get_permalink( get_page_by_path('zakladni-typy-map') ); ?>" class="examples-button <?php if($currentPageSlug === "zakladni-typy-map") echo 'selected'; ?>">Základní typy map</a>
	<a href="<?php echo get_permalink( get_page_by_path('zakladni-formy-map') ); ?>" class="examples-button <?php if($currentPageSlug === "zakladni-formy-map") echo 'selected'; ?>">Základní formy map</a>
	<a href="<?php echo get_permalink( get_page_by_path('ukazky-z-hospodarske-knihy') ); ?>" class="examples-button <?php if($currentPageSlug === "ukazky-z-hospodarske-knihy") echo 'selected'; ?>">Ukázky z hospodářské knihy</a>
</div>