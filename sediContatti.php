<?php /* Template Name: Sedi e Contatti */ ?> 

<?php include_once(dirname(__FILE__) . "/dati-comuni/dati-sedi.php"); ?>


<?php get_header(); ?>

<!-- section sedi -start -->
<section class="sedi-contatti-section" style="margin-top: 50px;">
 <section class="sedi-section" >
        <div class="container-fluid">
            
        <div class="row justify-content-center card-row">
            <div class="col-sm-6  card-col">
                
                <div class="card">
                    <!-- inserire di seguito l'immagine delle sede -->
                    <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/imgs/novaraMap.jpg" alt="Foto sede Novara">
                        <div class="sede">
                            <!-- inserire di seguito il nome della sede -->
                            <p>Novara</p>
                        </div>
                    </img>
                </div>
             </div>
                <div class="col-sm-6  card-col">
               
                    <div class="card">
                        
                    <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/imgs/torinoMap.jpg" alt="Foto sede Torino">
                        <div class="sede">
                            <p>Torino</p>
                        </div>
                    </img>
                    </div>
                    
                </div>
                <div class="row">
                 <img src= "<?php echo get_template_directory_uri(); ?>/imgs/icone-sedi-e-contatti/location-pointer.png">  
                </div>
                
            </div>
    </section>
    </section>
    <!-- section sedi - end -->
</div>


<?php get_footer(); ?>