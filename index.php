<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" content="width=device-width, initial-scale=1">
    <title>Welcome to LoA!</title>

    <!--Initialise WordPress-->

    <?php
    /* Short and sweet */
    define('WP_USE_THEMES', false);
    require('./wp/wp-blog-header.php');
    ?>

    <!-- External Libraries -->

    <!-- JQuery -->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Local Libraries -->

    <!-- My Custom Styles -->
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/css/navbar.css">


    <!-- Favicons for all devices -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/icons/apple-touch-icon-57x57.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/icons/apple-touch-icon-114x114.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/icons/apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/icons/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/images/icons/apple-touch-icon-60x60.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/images/icons/apple-touch-icon-120x120.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/images/icons/apple-touch-icon-76x76.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/images/icons/apple-touch-icon-152x152.png"/>
    <link rel="icon" type="image/png" href="/images/icons/favicon-196x196.png" sizes="196x196"/>
    <link rel="icon" type="image/png" href="/images/icons/favicon-96x96.png" sizes="96x96"/>
    <link rel="icon" type="image/png" href="/images/icons/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="/images/icons/favicon-16x16.png" sizes="16x16"/>
    <link rel="icon" type="image/png" href="/images/icons/favicon-128.png" sizes="128x128"/>
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-TileImage" content="/images/mstile-144x144.png"/>
    <meta name="msapplication-square70x70logo" content="/images/mstile-70x70.png"/>
    <meta name="msapplication-square150x150logo" content="/images/mstile-150x150.png"/>
    <meta name="msapplication-wide310x150logo" content="/images/mstile-310x150.png"/>
    <meta name="msapplication-square310x310logo" content="/images/mstile-310x310.png"/>



    <style>
        .entry > p > img {
            max-width: 100%;
        }
    </style>

</head>


<body>
<!--MAIN CONTAINER-->
<div class="container-custom" id="navContainer">
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/js/initialize.js"></script>
</div>

<div class="container-main" id="mainContainer">
    <!-- Start the Loop. -->

    <?php
    query_posts(array(
            'post_type' => 'post',
            'posts_per_page' => 50)
    );
    if (have_posts()) : while (have_posts()) :
    the_post(); ?>

    <!-- Test if the current post is in category 3. -->
    <!-- If it is, the div box is given the CSS class "post-cat-three". -->
    <!-- Otherwise, the div box is given the CSS class "post". -->

    <?php if (in_category('3')) : ?>
    <div class="post-cat-three">
        <?php else : ?>
        <div class="post">
            <?php endif; ?>

            <div class="well">

                <!-- Display the Title as a link to the Post's permalink. -->

                <h3>
                    <?php the_title(); ?>

                </h3>


                <!-- Display the Post's content in a div box. -->

                <div class="entry">
                   <?php the_content(); ?>
                </div>

                <hr style="background:black; border:0; height:1px"/>

                <p class="postmetadata">Posted on <?php the_time('F jS, Y'); ?> at <?php the_time('g:i a'); ?>
                    by <?php the_author_posts_link(); ?>.</p>

                <!-- DISQUS START
                      <div id="disqus_thread"></div>
                    <script type="text/javascript">
                        /* * * CONFIGURATION VARIABLES * * */
                        var disqus_shortname = 'leagueofassassins';

                        /* * * DON'T EDIT BELOW THIS LINE * * */
                        (function() {
                            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

                    DISQUS END -->


            </div>
            <!--closes the first div box -->

        </div>


        <!-- Stop The Loop (but note the "else:" - see next line). -->

        <?php endwhile; else : ?>

            <!-- The very first "if" tested to see if there were any Posts to -->
            <!-- display.  This "else" part tells what do if there weren't any. -->
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>


            <!-- REALLY stop The Loop. -->
        <?php endif; ?>


    </div>


</body>
</html>