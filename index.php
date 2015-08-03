<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Welcome to LoA!</title>

    <!--Initialise WordPress-->

    <?php
    /* Short and sweet */
    define('WP_USE_THEMES', false);
    require('./wp/wp-blog-header.php');
    ?>

    <!-- JQuery -->
    <script src="/js/jquery/jquery-2.1.4.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="/css/bootstrap/bootstrap-theme.min.css">

    <!-- My Custom Styles -->
    <link rel="stylesheet" href="/css/xs-sm-main.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/initialize.js"></script>

    <!-- Favicons for all devices -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/images/icons/apple-touch-icon-57x57.png"/>
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


</head>


<body>
<!--MAIN CONTAINER-->
<div class="container" id="navContainer">
    <script src="js/initialize.js"></script>
</div>


<!--NAVBAR-->
<nav class="navbar-static-top navbar-custom navbar-inner navbar-outer">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <ul class="nav navbar-nav">
                <li id="homeLink"><a href="http://www.leagueofassassins.co.uk">Home <span
                            class="sr-only">(current)</span></a></li>
                <li id="infoLink"><a href="http://www.leagueofassassins.co.uk/info/information.php">Info</a></li>
                <li id="rosterLink"><a href="http://www.leagueofassassins.co.uk/roster/">Roster</a></li>
                <li id="warcraftlogsLink"><a href="https://www.warcraftlogs.com/guilds/81546/">WarcraftLogs</a></li>
                <li id="applyLink"><a href="http://www.leagueofassassins.co.uk/apply/">Apply</a></li>
            </ul>
    </div>

</nav>
<!-- /.navbar-collapse -->
</div>

<!--NAV BAR OVER-->
<div class="container main-pane">


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

            <div class="well main-well">

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