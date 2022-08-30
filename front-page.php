<?php get_header(); ?>

<?php get_template_part('template/side'); ?>
<!---------------- slide:pagepiling start ------------>
<div id="pagepiling">

    <main>
        <!---------------- slide:TOP PAGE ------------>
        <section class="mv section" id="section1">
            <div class="mv_inner">
                <div class="mv-wrapper">
                    <div class="mv-top__wrapper">
                        <h2 class="mv-ttl">
                            H<span>I</span>TOM<span>I</span>
                            <div class="mv-ttl_small">TAHARA</div>
                        </h2>
                        <p class="mv-intro">と申します。ご覧いただきありがとうございます！</p>
                        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/fukidashi.png" alt="" class="fukidashi"></figure>


                    </div>
                    <div class="mv-img__wrapper">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/top2.png" alt="" class="mv-woman">
                        </figure>

                    </div>
                </div>
            </div>
            <div class="mv-bottom-parts">
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/mv-mac.png" alt="" class="mv-mac"></figure>
                <p class="mv-bottom-txt">パソコンを拾う<i class="fa-solid fa-down-long"></i></p>
            </div>
        </section>
        <!---------------- slide:WORK PAGE ------------>
        <section class="works section" id="section2">
            <h2 class="section-ttl work-ttl">WORK</h2>

            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/fukidashiworks.png" alt="" class="work-fukidashi"></figure>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/01.png" alt="" class="works-woman"></figure>

            <div class="sec-inner-wrapper work-inner-wrapper">
                <section class="carousel">
                    <figure class="works-mac-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/mac.png" alt="" class="works-mac"></figure>

                    <nav class="carousel-nav">
                    </nav>
                    <div class="works-container">
                        <!--カスタム投稿をサブループで記載-->
                        <?php
                        $args = [
                            'post_type' => 'siteworks', // カスタム投稿タイプ「siteworks」
                        ];
                        $my_query = new WP_Query($args); ?>
                        <?php if ($my_query->have_posts()) : // 投稿がある場合 
                        ?>
                            <ul class="carousel-ul">
                                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                    <li>
                                        <?php get_template_part('template/loop-siteworks'); ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif;
                        wp_reset_postdata(); ?>
                        <button id="prev"><i class="fa-solid fa-angles-left"></i></button>
                        <button id="next"><i class="fa-solid fa-angles-right"></i></button>
                    </div>
                    <a href="<?php echo get_post_type_archive_link('siteworks'); ?>" class=" visitme_link workslineheight_link">作品一覧</a>
                </section>



                <div class="mv-bottom-parts">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/card.png" alt="" class="mv-mac"></figure>
                    <p class="mv-bottom-txt">名刺を作る<i class="fa-solid fa-down-long"></i></p>
                </div>
            </div>

        </section>
        <!---------------- slide:ABOUT PAGE ------------>

        <section class="about section" id="section3">
            <h2 class="section-ttl about-ttl">ABOUT</h2>
            <div class="about-wrapper">

                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/fukidashiabout.png" alt="" class="about-fukidashi"></figure>
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/fukidashiabout-sp.png" alt="" class="about-fukidashi-sp"></figure>
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/02.png" alt="" class="about-woman"></figure>

                <div class="about-accordion-wrapper">
                    <dl class="about-accordion">
                        <div>
                            <dt class="about-accordion_parts">出身</dt>
                            <dd>福岡県。ラーメンと焼き鳥が大好きです！</dd>
                        </div>
                    </dl>
                    <dl class="about-accordion">
                        <div>
                            <dt class="about-accordion_parts">性格</dt>
                            <dd>ポジティブ。夢中になるととことん。</dd>
                        </div>
                    </dl>
                    <dl class="about-accordion">
                        <div>
                            <dt class="about-accordion_parts">前職</dt>
                            <dd>航空会社地上職7年勤務、アシスタントマネージャー職。<br>
                                自分のチームを15人や、グループ50人弱を管理。</dd>
                        </div>
                    </dl>
                    <dl class="about-accordion">
                        <div>
                            <dt class="about-accordion_parts">異業種にキャリアチェンジしたわけ</dt>
                            <dd>コロナ禍となり2日に1日はお休み。働きたいが働けない状況となり、会社に依存しない自分の力をつけたくキャリアチェンジを決意。</dd>
                        </div>
                    </dl>
                    <dl class="about-accordion">
                        <div>
                            <dt class="about-accordion_parts">趣味</dt>
                            <dd>漫画、アニメ。最近はオーバーロードにハマっています。「シャルティア」というキャラが好きなのでコーダー戦士にしました。</dd>
                        </div>
                    </dl>

                    <dl class="about-accordion">
                        <div>
                            <dt class="about-accordion_parts">スキル</dt>
                            <dd>
                                得たスキルの中で、今のところjavaScriptが1番好きです。現在、React.jsを勉強中！
                                <div class="skill">
                                    <img src="<?php echo get_template_directory_uri();
                                                ?>/assets/img/icons/html5.png" alt="" class="skill-icon">
                                    <img src="<?php echo get_template_directory_uri();
                                                ?>/assets/img/icons/css3.png" alt="" class="skill-icon">
                                    <img src="<?php echo get_template_directory_uri();
                                                ?>/assets/img/icons/js.png" alt="" class="skill-icon">
                                    <img src="<?php echo get_template_directory_uri();
                                                ?>/assets/img/icons/jquery.png" alt="" class="skill-icon">
                                    <img src="<?php echo get_template_directory_uri();
                                                ?>/assets/img/icons/php.png" alt="" class="skill-icon">
                                    <img src="<?php echo get_template_directory_uri();
                                                ?>/assets/img/icons/ai.png" alt="" class="skill-icon">
                                    <img src="<?php echo get_template_directory_uri();
                                                ?>/assets/img/icons/ps.png" alt="" class="skill-icon">
                                    <img src="<?php echo get_template_directory_uri();
                                                ?>/assets/img/icons/xd.png" alt="" class="skill-icon">
                                    <img src="<?php echo get_template_directory_uri();
                                                ?>/assets/img/icons/wp.png" alt="" class="skill-icon">
                                    <img src="<?php echo get_template_directory_uri();
                                                ?>/assets/img/icons/vs.png" alt="" class="skill-icon">
                                    <img src="<?php echo get_template_directory_uri();
                                                ?>/assets/img/icons/bs.png" alt="" class="skill-icon">
                                </div>
                            </dd>
                        </div>
                    </dl>
                </div>

            </div>

            <div class="mv-bottom-parts work">
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/heart.png" alt="" class="mv-mac"></figure>
                <p class="mv-bottom-txt">休みを満喫<i class="fa-solid fa-down-long"></i></p>
            </div>

        </section>
        <!---------------- slide:BLOG PAGE ------------>
        <section class="blog section pp-scrollable" id="section4">
            <h2 class="section-ttl blog-ttl">BLOG</h2>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/blog.png" alt="" class="blog-woman"></figure>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/fukidashiblog.png" alt="" class="blog-fukidashi"></figure>
            <div class="sec-inner-wrapper blog-inner-wrapper">
                <!-- メインループでブログを表示 -->
                <div class="blog_container">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="blog_box">
                                <?php get_template_part('template/loop-blog'); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <a href="<?php echo get_permalink(96); ?>" class="visitme_link visitme-black_link">More</button></a>


            </div>
        </section>

    </main>
</div>
<!---------------- slide:pagepiling done------------>
<?php get_footer(); ?>