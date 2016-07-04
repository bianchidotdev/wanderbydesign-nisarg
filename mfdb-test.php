<?php
/*
Template Name: mfdb-test
*/
?>
<?php get_header(); ?>

<!-- Custom styles for title page-->
<!-- <link href="<?php bloginfo('template_directory');?>/front-page.css" rel="stylesheet"> -->


<!-- /.title stuff -->
<div id="googlemap"></div>

<div class="container">
    <h1 class="front-page-header">Header 1</h1>

    <p>Hey! This is a sample title page. Dope stuff yo.</p>
</div>

<div class="front-page-sidebar">
    <h3>Sidebar header</h3>
    <p>This is content for the sidebar</p>
    <p>We need to figure out how to best dynamically populate this</p>
    <br>
    <p>My current thought is that we'll need javascript or something to change which content is visible</p>
    <p>It kinda depends on whether we want content to display on hovering over a country or on a click</p>
</div>

<?php get_footer(); ?>
