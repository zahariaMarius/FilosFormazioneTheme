<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

    <!-- section that contain the slideshow - start -->
    <section class="slideshow_section">

    <?php if( have_rows('carosello_news') ): ?>
        <div id="newsCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
        <ol class="carousel-indicators mb-5">
        <?php $numrows = count( get_field( 'carosello_news' ) ); ?>
            <?php for ($i = 0; $i < $numrows; $i++) {
                if ($i == 0) {
                    echo '<li data-target="#newsCarousel" data-slide-to="'.$i.'" class="active"></li>';
                } else {
                    echo '<li data-target="#newsCarousel" data-slide-to="'.$i.'" class=""></li>';
                    }
                }?>
        </ol>
        <div class="carousel-inner">
        <?php $index=0; while ( have_rows('carosello_news') ) : the_row(); $index++; ?>
            <?php $nomeBottone = get_sub_field('news_post_bottone'); ?>
            <?php $post_object = get_sub_field('news_post');?>
                <?php if( $post_object ): ?>
                    <?php $post = $post_object; setup_postdata( $post ); ?>
                        <?php if ($index == 1) { ?>
                            <div class="carousel-item active">
                        <?php } else { ?>
                            <div class="carousel-item">
                        <?php } ?>
                                <img src="<?php the_field('immagine_news'); ?>">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1 class="carousel-title display-1"><?php the_field('titolo_news') ?></h1>
                                    <h5 class="carousel-subtitle display-4"><?php the_field('sotto_titolo_news') ?></h5>
                                    <a class="carousel-button btn btn-danger text-center" href="#"><?php echo $nomeBottone ?></a>
                                </div>
                            </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                <?php endwhile; ?>
        </div>
            <a class="carousel-control-prev" href="#newsCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#newsCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <?php endif; ?>

    </section>
    <!-- section that contain the slideshow - end -->
    
    <section class="courses_section mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-3 text-center">
                    <h1 class="display-1">Corsi</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4 p-5">
                    <div class="card rounded-0 text-center">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" alt="Card image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-5">
                    <div class="card rounded-0 text-center">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" alt="Card image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4 p-5">
                    <div class="card rounded-0 text-center">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" alt="Card image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-5">
                    <div class="card rounded-0 text-center">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" alt="Card image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php function checkIfEven($number) {
    $flag = false;
    if (($number % 2) == 0) {
        $flag = true;
    }
    return $flag;
} ?>

<?php
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>



    <?php if( have_rows('corsi_offerti') ): ?>
    <?php $rows = get_field( 'corsi_offerti' ); ?>
    <?php $numRows = count($rows); ?>
    
    <?php echo $numRows ?>
    
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-3 text-center">
                    <h1 class="display-1">Corsi</h1>
                </div>
            </div>

            <?php $i = 0; foreach( $rows as $index => $row ) {
                if( checkIfEven( $index ) ) {
                    echo $index;
                    echo '<div class="row justify-content-center">';
                        do {
                            echo $i;
                            echo "    ";
                            echo $rows[$i]['colore_corso'];
                            $i++;
                        } while( (($i % 2) == 0));

                        
                    echo '</div>';
                }
            }?>

        </div>
    <?php endif; ?>



<?php get_footer(); ?>