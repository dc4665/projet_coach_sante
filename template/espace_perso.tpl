{extends file="template/layout.tpl"}

{block name="content"}
    <div class="bandeau">
            <div id="bg_connexion">

            </div>
                <div class="bg_opacity">
                </div>

            <div class="container">
                <div class="row text-center">
                    <div class="col-12 mt-5">
                        <h1 class="white big_font mt-5">ESPACE CLIENT</h1>

                    </div>
                    <div class="offset-md-3 col-12 col-md-6 text-justify mt-5">
                        <p class="white">
                            Postez vos fiches de suivi, et suivez les recommandations de votre Coach Santé dans votre espace personnel
                        </p>
                    </div>
                </div>
            </div>
    </div>

    <div style="margin-top: 20px"></div> 
    <div class="container">
        <h2 class="text-center">Bienvenu sur votre espace personnel: {$utilisateur->getPrenom()}</h2>
            <p class="text-center"><em>Vous pouvez changer vos informations et coordonnées personnelles</em></p>
        <div class="d-flex justify-content-center">
            <form action="" method="post">
                <label class="anton">NOM &nbsp;:</label>
                <input class="form-control" type="text" name="nom" id="nom" value="{$utilisateur->getNom()}" required /><br/>

                <label class="anton">PRENOM &nbsp;:</label>
                <input class="form-control" type="text" name="prenom" id="prenom" value="{$utilisateur->getPrenom()}" required /><br/>

                <label class="anton">E-MAIL &nbsp;:</label>
                <input class="form-control" type="email" name="email" id="email" value="{$utilisateur->getEmail()}" required /><br/>

                <label class="anton">TELEPHONE &nbsp;:</label>
                <input class="form-control" type="tel" name="tel" id="tel" value="{$utilisateur->getTel()}" required /><br/>

                <button style="margin-bottom: 20px" type="submit" name="modification" class="btn anton bg_yel_oni btn-lg">VALIDER LES CHANGEMENTS</button>

            </form>
        </div>    
    </div>



{/block}