<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="main-wrapper" class="single">
    <?php
        get_template_part('components/flexible-contents');
    ?>
</div>

<?php
get_footer();