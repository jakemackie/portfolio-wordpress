<?php
// $attributes contains the data from the editor
$title = $attributes['title'] ?? 'Default Title';

// use_block_props() handles standard stuff like alignment/custom classes
$wrapper_attributes = get_block_wrapper_attributes([
    'class' => 'my-custom-product-card'
]);
?>

<div <?php echo $wrapper_attributes; ?>>
    <h2><?php echo $title; ?></h2>
</div>