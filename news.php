
<?php /* Template Name: News */ ?> 

<?php get_header(); ?>

<?php 

function StampaMeseIT()
{
    $mese_n = get_the_date('m');
    $mese = array(
        '01' => 'Gennaio',
        '02' => 'Febbraio',
        '03' => 'Marzo',
        '04' => 'Aprile',
        '05' => 'Maggio',
        '06' => 'Giugno',
        '07' => 'Luglio',
        '08' => 'Agosto',
        '09' => 'Settembre',
        '10' => 'Ottobre',
        '11' => 'Novembre',
        '12' => 'Dicembre'
    );
    return $data = get_the_date('d') . ' ' . $mese[$mese_n] . ' ' . get_the_date('Y');
}

?>

<section class="news-page">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-6 text-center">
            <!-- inserire il nome della sezione -->
                <h1 class="display-3 section-title">News</h1>
            </div>
        </div>

        <div class="eventi-in-arrivo my-5">
        <p>Eventi in Arrivo</p>
        <hr/>

            <div class="row justify-content-center mb-5">
                <?php 
                    query_posts( 'category_name=attuale&posts_per_page=6' ); 
                        while(have_posts()) : the_post(); ?>

                    <div class="col-sm-4" style="margin-bottom: 30px;">
                    <div class="card">

                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('filos_home',array('class'=>'card-img-top')); ?></a>
                        <div class="overlay-card-img-top">
                            <div class="data-news" ><?php echo StampaMeseIT(); ?></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" ><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <div class="scopri-di-piu">
                                <a href="<?php the_permalink(); ?>"><p>Scopri di più</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php endwhile; ?>

                
            </div>
        </div>

        <div class="eventi-in-arrivo my-5">
        <p>Eventi Passati</p>
        <hr/>

            <div class="row justify-content-center mb-5">
                <?php 
                query_posts('category_name=scaduta&posts_per_page=6');
                while (have_posts()) : the_post(); ?>

                    <div class="col-sm-4" style="margin-bottom: 30px;">
                    <div class="card">

                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('filos_home', array('class' => 'card-img-top')); ?></a>
                        <div class="overlay-card-img-top">
                            <div class="data-news" ><?php echo StampaMeseIT(); ?></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" ><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <div class="scopri-di-piu">
                                <a href="<?php the_permalink(); ?>"><p>Scopri di più</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php endwhile; ?>

                
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>

