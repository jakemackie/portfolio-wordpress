<?php
// $attributes contains the data from the editor
$title = $attributes['title'] ?? 'Default Title';
?>

<div <?php echo get_block_wrapper_attributes(); ?>>
    <h2><?php echo $title; ?></h2>
</div>