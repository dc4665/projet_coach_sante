{extends file="template/layout.tpl"}

{block name="content"}
    <!-- Partie avec la bannière   -->
    
    <div class="bandeau shadow">
        <div id="bg_coachs">
        
        </div>
        <div class="bg_opacity">
        </div>
        
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mt-5 pt-5">
                    <h1 class="white big_font responsive_title mt-sm-5 mt-lg-5">NOS COACHS</h1>

                </div>
                <div class="offset-md-3 col-12 col-md-6 text-left mt-5">
                    <p class="white">
                        Dans notre équipe de coachs, nous sommes tous diplômés et certifiés. Nous sommes également détenteurs de DU et Bachelor en nutrition. Vous êtes donc entre de bonnes mains. Nous serons plus que des coachs, nous serons le soutien qui vous aidera à faire cette "répétition de plus" ou cette voix qui vous aidera à ne pas "craquer".          
                    </p>
                </div>
            </div>
            
        </div> 
        
    </div>
    
    <!-- PARTIE CENTRALE AVEC LES PORTRAITS DES COACHS -->
    
    
    <div>
        <section class="container">

            <!-- Portrait Coach X -->
            <div class="row align-items-center">
                <div class="col-12 col-md-4 text-center">
                        <img src="img/guy_1_circle.jpg" class="rounded-circle coach_pic my-5 ml-3" alt="coach et cliente">         
                </div>

                <div class="col-12 col-md-8">
                    <div class="card coach_portrait my-3">
                        <div class="card-body">
                            <h2>Alex C.</h2>
                            <p>
                                "Passionné de fitness, j'ai exercé dans plusieurs salles de sport dans le sud de la France. Je suis spécialiste en nutrition mais également un amateur en cuisine. Mon objectif: votre satisfaction et réussite."
                            </p>
                            <a href="#"><i class="fab fa-twitter-square medium_font black  pr-2"></i></a>
                            <a href="#"><i class="fab fa-facebook-square medium_font black  pr-2"></i></a>
                            <a href="#"><i class="fab fa-instagram medium_font black "></i></a>
                            <br/>
                            <a href="contact.html" class="btn bg_yel_oni btn_nos_coach type=button anton mt-2">CONTACT</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
            <!-- Portrait Coach Y -->
        
        <div class="bg_yel_oni">
            <section class="container">
                <div class="row align-items-center">

                    <div class="col-12 col-md-8 order-2 order-md-1">
                        <div class="card coach_portrait_2 my-3">
                            <div class="card-body">
                                <h2>Mélanie B.</h2>
                                <p>
                                    "J'ai été instructrice de cross-fit en région parisienne et j'ai décidé de rejoindre l'équipe de Coach Santé pour partager avec vous ma passion pour le fitness. Plus qu'un sport, le fitness est pour moi un mode de vie."
                                </p>
                                <a href="#"><i class="fab fa-twitter-square medium_font black  pr-2"></i></a>
                                <a href="#"><i class="fab fa-facebook-square medium_font black  pr-2"></i></a>
                                <a href="#"><i class="fab fa-instagram medium_font black "></i></a>
                                <br/>
                                <a href="contact.html" class="btn bg_white btn_nos_coach type=button anton mt-2">CONTACT</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 order-md-2 text-center">
                            <img src="img/girl_1_circle.jpg" class="rounded-circle coach_pic my-5 ml-3" alt="coach et cliente">         
                    </div>

                </div>
            </section>
            
        </div>
            
            <!-- Portrait Coach Z -->
        <div class="">
            <section class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4 text-center">
                            <img src="img/guy_2_circle.jpg" class="rounded-circle coach_pic my-5 ml-3" alt="coach et cliente">         
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="card coach_portrait my-3">
                        <div class="card-body">
                            <h2>Hugo A.</h2>
                            <p>
                                "Ancien joueur de tennis professionnel, je me suis reconverti dans le coaching et la remise en forme. J'espère pouvoir vous aider à vous dépasser et atteindre vos objectifs."
                            </p>
                            <a href="#"><i class="fab fa-twitter-square medium_font black  pr-2"></i></a>
                            <a href="#"><i class="fab fa-facebook-square medium_font black  pr-2"></i></a>
                            <a href="#"><i class="fab fa-instagram medium_font black "></i></a>
                            <br/>
                            <a href="contact.html" class="btn bg_yel_oni btn_nos_coach type=button anton mt-2">CONTACT</a>
                        </div>
                    </div>
                    </div>
                </div>

            </section>
        </div>
        
    </div>

{/block}