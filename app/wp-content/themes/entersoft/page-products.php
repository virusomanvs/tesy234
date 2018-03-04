<?php get_header(); ?>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image"
             style="background-image: url(<?php bloginfo('template_url'); ?>/images/bg-image-9.jpg);">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title"><? echo the_title() ?></h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="/">Главная</a></li>
                <li class="active"><? echo the_title() ?></li>
            </ul>
        </div>
    </section>
    <!-- Single post-->
    <section class="section section-md bg-white">
        <div class="shell blog">
            <div class="range range-90">
                <div class="cell-md-8 cell-lg-9 blog__main">
                    <article class="post-single">
                        <div class="post-single__main">
                            <div class="shell">
                                <div class="range range-lg-center">
                                    <div class="cell-lg-12">
                                        <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
                                            <!-- Nav tabs-->
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#tabs-1-1" data-toggle="tab">1С:Предприятие 8</a></li>
                                                <li><a href="#tabs-1-2" data-toggle="tab">Отраслевые решения</a></li>
                                            </ul>
                                            <!-- Tab panes-->
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="tabs-1-1">
                                                    <p>
                                                        «1С:Предприятие» — это комплексная система прикладных решений, которые построены по единым принципам и на общей технологической платформе. Руководитель вправе выбрать решения, которые соответствуют актуальным потребностям организации, и в дальнейшем программа будет развиваться по мере развития фирмы и расширения задач  автоматизации.
                                                        <br><br>Задачи управления и учета могут значительно отличаться в зависимости от сферы деятельности фирмы, отрасли, специфики производимой продукции или оказываемых услуг, структуры и размеров предприятия, уровня его автоматизации. Данная программа предназначена для массового использования и удовлетворяет потребности основного количества предприятий. Таким образом, руководитель будет иметь решение с преимуществами применения массового продукта, которое соответствует специфике организации.
                                                    </p>
                                                    <a class="button button-dark-outline" href="/products/1c/">подробнее</a>
                                                </div>
                                                <div class="tab-pane fade" id="tabs-1-2">
                                                    <p>
                                                        Отраслевое решение - это специализированная программа, которая значительно расширяет возможности 1С в плане учета конкретного типа предприятия. Осуществляется  автоматизация самых трудоемких процессов учета предприятия. В детском саду становится возможно осуществить учет родительской оплаты и затрат на питание, в организациях здравоохранения ( больницах и поликлиниках) учет лекарств по срокам годности. Облегчается учет финансирования бюджета. Учет затрат на автотранспорт и многое другое.
                                                    </p>
                                                    <a class="button button-dark-outline" href="/solutions/">подробнее</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>
                <div class="cell-md-4 cell-lg-3 blog__aside">
                    <div class="blog-aside__column">
                        <!--<div class="blog__aside-item">
                            <p class="heading-8 blog-title"></p>
                            <ul class="list-marked-bordered">
                                <li><a href="#"><span>Digital/SMM</span><span class="count">(4)</span></a></li>
                                <li><a href="#"><span>Brand Marketing</span><span class="count">(2)</span></a></li>
                                <li><a href="#"><span>Media Buying</span><span class="count">(6)</span></a></li>
                            </ul>
                        </div>-->
                        <div class="blog__aside-item">
                            <p class="heading-8 blog-title">Последние новости</p>
                            <div class="post-inline-wrap">
                                <!-- Post inline-->
                                <?php query_posts('orderby=rand&showposts=2&cat=3'); ?>
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                        <article class="post-inline">
                                            <div class="post-inline__main">
                                                <p class="post-inline__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                            </div>
                                            <div class="post-inline__footer">
                                                <p class="post-inline__time"><?php the_time('j F Y'); ?></p>
                                            </div>
                                        </article>
                                    <?php endwhile; endif; ?>
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
<?php get_footer(); ?>