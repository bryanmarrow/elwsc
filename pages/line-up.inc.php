   
   
    
   
    
    
    <section class="event-section space-top bg-auto-repeat">
        <div class="shape-bg" data-bg-src="assets/img/bg/team_bg_1.png"></div>
        <div class="container z-index-common">
            <div class="title-area2 text-center">
                <!-- <span class="sub-title2 d-none">
                    <img class="title-shape" src="assets/img/shape/title_shape.png" alt="title shape">
                </span> -->
                
                <h2 class="sec-title"><?= index_lineup ?> - Artistas Confirmados</h2>
            </div>
            <div class="row " >
               

                
                
                    <?php  
                        $artistas=$basededatos->connect()->prepare("SELECT * FROM tbl_artistas WHERE status=0");
                        $artistas->execute();
                        $Allartistas=$artistas->fetchAll();
                        foreach($Allartistas as $artista){
                            
                    ?>
                    <div class="col-lg-4 col-sm-4 mb-4">
                        <div class="team-grid">
                        <div class="team-grid_img">
                            <img src="assets/img/artistas/<?= $artista['imagen'] ?>" alt="team image">
                            <!-- <div class="plus-icon">+</div> -->
                            <div class="team-social d-none">
                                <a href="https://facebook.com/"><i
                                        class="fab fa-facebook-f"></i></a> <a href="https://twitter.com/"><i
                                        class="fab fa-twitter"></i></a> <a href="https://instagram.com/"><i
                                        class="fab fa-instagram"></i></a> <a href="https://linkedin.com/"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-grid_info">
                            <h3 class="team-grid_title"><a href="speaker-details.html"><?= $artista['nombre'] ?></a></h3><span
                                class="team-grid_desig"><?= $artista['pais'] ?></span>
                        </div>
                    </div>
                    </div>
                    <?php } ?>
                    
                
            </div>
        </div>
        <div class="shape-mockup jump z-index-3 d-none d-xl-block" data-top="34%" data-left="3%"><img
                src="assets/img/shape/circle-3.png" alt="shapes"></div>
        <div class="shape-mockup jump-reverse z-index-3 d-none d-xl-block" data-top="14%" data-right="0%"><img
                src="assets/img/shape/circle-4.png" alt="shapes"></div>
        <div class="section-after"><img src="assets/img/shape/curved-shape-bottom.png" alt="shape"></div>
    </section>
   
   