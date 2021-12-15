<?php get_header(); ?>
<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
<!-- pet_care_area_start  -->
<div class="pet_care_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="pet_thumb">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/pet_care.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6">
                <div class="pet_info" id="about">
                    <div class="section_title">
                        <h3>О НАС</h3>
                        <p>Мы взаимовыгодно сотрудничаем с кинологическими организациями России, Европы и Америки. Наши
                            собаки успешно выступают на выставках всех континентов. Работа организации основана на
                            принципах полнейшей демократии, огромной любви к животным и уважении к их владельцам.</p>
                        <p> Центральный офис располагается в центре Москвы, мы осуществляем поддержку по всем
                            направлениям в области кинологии, организация выставок, регистрация клубов и питомников,
                            владельцев собак, оформление помётов, подготовка к выставкам и по всем видам дрессировки и
                            спорта с собаками.</p>
                        <p>Создан единый компьютерный банк данных, ведется единая племенная книга, выработана единая
                            форма родословных, введена единая система клеймения собак, ведется единая регистрация
                            питомников и заводских приставок. Заключены договора с лучшими компаниями производящими
                            корма, ветеринарные препараты и аксессуары для собак, ветеринарными клиниками о поддержке и
                            обслуживании членов Союза. </p>
                        <!--                        <a href="about.html" class="boxed-btn3">About Us</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pet_care_area_end  -->

<div class="service_area">
    <div class="container">
        <div class="row justify-content-center ">
            <?php
            $options = array(
                'orderby' => 'rand', // Случайный вывод записей
                'showposts' => '6', // Какое количество записей вывести
                'cat' => '9' // Из какой рубрики показывать записи
            );
            query_posts($options); // Передаем параметры, заданные массивом.
            if (have_posts()) : // Стандартный вывод записей
                while (have_posts()) : the_post(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_service">
                            <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                                <div class="service_icon">
                                    <!--                        -->
                                    <?php //the_post_thumbnail();?><!--                    </div>-->

                                </div>
                            </div>
                            <div class="service_content text-center">
                                <h3><?php the_title(); ?></h3>
                            </div>
                        </div>
                    </div>

                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>


<div class="container">
    <?php the_content(); ?>
</div>


<?php get_footer(); ?>
