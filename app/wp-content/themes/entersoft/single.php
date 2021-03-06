<?php get_header(); ?>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(<?php bloginfo('template_url'); ?>/images/bg-image-9.jpg);">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title"><? echo the_title() ?></h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="index.html">Главная</a></li>
                <li><a href="/news">Новости</a></li>
                <li class="active"><? echo the_title() ?></li>
            </ul>
        </div>
    </section>
    <!-- Single post-->
    <section class="section section-md bg-white">
        <div class="shell blog">
            <div class="range range-90">
                <div class="cell-md-8 cell-lg-9 blog__main">
                    <article class="post-single"><img class="post-single__image" src="<?php bloginfo('template_url'); ?>/images/post-4-870x412.jpg" alt="" width="870" height="412"/>
                        <h4 class="post-single__title">Email Newsletters Hit a Speed Bump: Inaccurate Open Rates</h4>
                        <ul class="post-single__meta">
                            <li>
                                <dl>
                                    <dt>Date</dt>
                                    <dd>
                                        <time datetime="2017-01-22">January 22, 2017</time>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>Posted by</dt>
                                    <dd>Amelia Condon</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>Comments</dt>
                                    <dd>3</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>Category</dt>
                                    <dd>Digital</dd>
                                </dl>
                            </li>
                        </ul>
                        <div class="post-single__main">
                            <?php echo the_field('news_desc') ?>
                            <p>As Clover Letter Emails Got Bigger in size, Founders Say, Its Open Rate Collapsed… Email newsletters are just as effective when working with existing customers, as they were from the very start.  Also, the part of the problem may be the “offline reading” option, used by many people worldwide.</p>
                            <p>But another newsletter flagged an unexpected challenge last week, one that caused its founders to re-evaluate their primary method of distribution and introduce an app to complement it. Liza Darwin and Casey Lewis, who started Clover Letter in February for teen girls, wrote that their strong start was running into a problem.</p>
                            <!-- Quote minimal-->
                            <article class="quote-minimal">
                                <p class="q">Spam filters used by providers can prevent readers from getting their newsletters, which may influence their open rate.</p>
                            </article>
                            <p>As they got more comfortable with MailChimp, the service they used to manage and send Clover Letter, they said they began adding GIFs and Instagrams and other things that made the experience feel that much more exciting than your average promotional letter in the box. But that actually led to the problem of increased letter size, which certainlyserves as a huge disadvantage for many clients of Clover Letter. Their founders are now looking for various methods of solving this problem.</p>
                        </div>
                        <div class="post-single__footer">
                            <p class="heading-5">Поделиться:</p>
                            <div class="group-sm"><a class="button button-xs button-facebook button-icon button-icon-left" href="#"><span class="icon fa fa-facebook"></span>Like</a><a class="button button-xs button-twitter button-icon button-icon-left" href="#"><span class="icon fa fa-twitter"></span>Tweet</a><a class="button button-xs button-google button-icon button-icon-left" href="#"><span class="icon fa fa-google-plus"></span>Share</a></div>
                        </div>
                    </article>

                </div>
                <div class="cell-md-4 cell-lg-3 blog__aside">
                    <div class="blog-aside__column">
                        <div class="blog__aside-item">
                            <!-- RD Search-->
                            <form class="rd-search rd-search_classic" action="search-results.html" method="GET">
                                <div class="form-wrap">
                                    <input class="form-input" id="page-aside-search" type="text" name="s" autocomplete="off">
                                    <label class="form-label" for="page-aside-search">Search the blog...</label>
                                </div>
                                <button class="rd-search-submit" type="submit"></button>
                            </form>
                        </div>
                        <div class="blog__aside-item">
                            <p class="heading-8 blog-title"></p>
                            <ul class="list-marked-bordered">
                                <li><a href="#"><span>Digital/SMM</span><span class="count">(4)</span></a></li>
                                <li><a href="#"><span>Brand Marketing</span><span class="count">(2)</span></a></li>
                                <li><a href="#"><span>Media Buying</span><span class="count">(6)</span></a></li>
                            </ul>
                        </div>
                        <div class="blog__aside-item">
                            <p class="heading-8 blog-title">Popular posts</p>
                            <div class="post-inline-wrap">
                                <!-- Post inline-->
                                <article class="post-inline">
                                    <div class="post-inline__main">
                                        <p class="post-inline__title"><a href="single-post.html">How We Measure the Vlogs' Ad Potential</a></p>
                                    </div>
                                    <div class="post-inline__footer">
                                        <p class="post-inline__time">13 April 2017</p>
                                    </div>
                                </article>
                                <!-- Post inline-->
                                <article class="post-inline">
                                    <div class="post-inline__main">
                                        <p class="post-inline__title"><a href="single-post.html">Digital Marketing Metrics That Really Matter Nowadays</a></p>
                                    </div>
                                    <div class="post-inline__footer">
                                        <p class="post-inline__time">25 January 2017</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!--<div class="blog__aside-item">
                            <p class="heading-8 blog-title"><span>Promo </span><span class="tag-inline">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="51px" height="23px" viewbox="0 0 51 23.011" preserveAspectRatio="none">
                        <polygon points="7,0.006 7,0 0,11.505 7,23.011 7,23.006 51,23.006 51,0.006 "></polygon>
                      </svg><span>New</span></span></p><a class="box-promo" href="#"><img src="<?php bloginfo('template_url'); ?>/images/promo-1-236x321.jpg" alt="" width="236" height="321"/>
                                <div class="box-promo__content">
                                    <h5>Recommendations to Manage Your Campaign</h5>
                                </div></a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<main class="page-content">
    <section class="section-top-80 section-lg-top-115">
    <div class="shell text-center text-md-left">
    <h1><?php the_title();?></h1>
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            /* translators: %s: Name of current post */
            the_content( sprintf(
                __( 'Continue reading %s', 'twentyfifteen' ),
                the_title( '<span class="screen-reader-text">', '</span>', false )
            ) );

            wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
                'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
                'separator'   => '<span class="screen-reader-text">, </span>',
            ) );

            // End the loop.
        endwhile;
        ?>

    </div>
    </section>
    </main>-->
<?php get_footer(); ?>