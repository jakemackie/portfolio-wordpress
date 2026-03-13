<?php
// $attributes contains the data from the editor
$title = $attributes['title'] ?? 'Default Title';
$show_price = $attributes['showPrice'] ?? true;

// use_block_props() handles standard stuff like alignment/custom classes
$wrapper_attributes = get_block_wrapper_attributes([
    'class' => 'my-custom-product-card'
]);
?>

<div <?php echo $wrapper_attributes; ?>>
    <h2><?php echo esc_html($title); ?></h2>
    
    <?php if ($show_price) : ?>
        <p class="price">Contact for pricing</p>
    <?php endif; ?>
</div>