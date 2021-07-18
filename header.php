<?php get_header(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|',true,'rigth'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="central">
        <?php get_template_part('template-parts/header/header-principal'); ?>