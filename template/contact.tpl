{extends file="template/layout.tpl"}

{block name="content"}
    <!-- Partie avec la bannière -->
    <div class="bandeau">
        <div id="bg_contact">
        
        </div>
        <div class="bg_opacity">
        </div>
        
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mt-5">
                    <h1 class="white big_font mt-5">CONTACT</h1>

                </div>
                <div class="offset-md-3 col-12 col-md-6 text-left mt-5">
                    <p class="white">
                        Enfin prêt(e) à reprendre le contrôle de votre corps? <br/> 
                        Entrez en contact dès maintenant avec nous. Que ce soit pour une question ou une prise de rendez-vous, nous nous engageons à vous répondre dans les 48 heures. 
                    </p>
                </div>
            </div>
            
        </div> 
        
    </div>
    <!-- Partie Formulaire -->
    {if isset($success)}
        <div class="alert alert-success">{$success}</div>
    {/if}
    <div class="container mt-5">
        <form action="" method="post">
            
            <div class="row">
                
                <!-- Colonne Gauche -->
                <div class="col-12 col-md-6">
                    
                    <div class="row">
                        <div class="col">
                            <label class="form_font anton uppercase">nom et prénom</label>
                            <input type="text" class="form-control" name="nom" placeholder="Nom et Prénom">
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col">
                            <label class="form_font anton uppercase">e-mail</label>
                            <input type="email" class="form-control" name="email" placeholder="adresse@Email.com">
                        </div>
                    </div>
                    
                   {*  <div class="row mt-3">
                        <div class="col">
                            <label class="form_font anton uppercase">@Instagram</label>
                            <div class="input-group">                 
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <input type="text" class="form-control" name="instgram" placeholder="monInstagram">
                            </div>
                        </div>
                    </div> *}
                    
                </div>
                
                <!-- Colonne Droite -->
                <div class="col-12 col-md-6">
                    
                    <div class="row">
                        <div class="col">
                            <label class="form_font anton uppercase">objet</label>
                            <input type="text" class="form-control" name="objet" placeholder="Sujet de ma demande">
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col">
                            <label class="form_font anton uppercase">message</label>
                            <textarea class="form-control" name="message" rows="5"></textarea>
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col">
                            <button type="submit" name="contact" class="btn button_big bg_yel_oni anton">ENVOYER</button>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </form>
    </div>
    
    <!-- Section Où Nous Trouver  -->
        
    <section class="bg_yel_oni mt-4">
        <div class="container">
            <div class="row align-items-center">

                    <div class="col-12 col-md-6">
                        <div class="row mt-3">
                            <div class="col">
                                <h2>OÙ NOUS TROUVER?</h2>
                            </div>
                        </div>   

                        <div class="row mt-3">
                            <div class="col">
                                <p><strong>BASIC-FIT</strong><br>
                                19 rue du Faubourg National<br>
                                67000 STRASBOURG</p>
                                <button type="button" class="btn button_map bg_white anton">Voir la Carte</button>
                                <i class="fas fa-map-marked-alt ml-3"></i>
                            </div>
                        </div>

                    </div>     

                    <div class="col-12 col-md-6 my-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.4383043463226!2d7.73453991558604!3d48.58230599729097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c84af64c396f%3A0xb0bddeb57118fefd!2sBasic%20Fit!5e0!3m2!1sen!2sfr!4v1574773511558!5m2!1sen!2sfr" width="540" height="450" class="embed-responsive embed-responsive-16by9"  style="border:0;" allowfullscreen=""></iframe>
                    </div>           
            </div>           
        </div>
    </section>

{/block}