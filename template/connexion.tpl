{extends file="template/layout.tpl"}

{block name="content"}
    <!-- Partie avec la bannière -->
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
    <!-- Partie formulaire de connexion-->
    {* remettre la class connexion, enlevé car formulaire blanc lors du clic *}
    <div class="container">
        <div class="connexion">
            <h2 style="margin-top: 20px" class="big_font">CONNEXION</h2>
            {* Condition qui s'active pour confirmer l'inscription d'un nouveau membre *}
            {if isset($success)}
                <div class="alert-success">{$success}</div>
            {/if}
            <form action="" method="post">
                {if isset($erreur)}
                <div class="alert alert-danger">{$erreur}</div>
                {/if}
                {if isset($erreur_mail)}
                <div class="alert alert-danger">{$erreur_mail}</div>
                {/if}
                <label class="form_font anton">E-MAIL</label>
                <input type="email" class="col-3 col-md-3 ml-auto mr-auto form-control" name="email" id="email" required><br/>
                <label class="form_font anton">MOT DE PASSE</label>
                <input type="password" class="col-3 col-md-3 ml-auto mr-auto form-control" name="password" id="password" required><br/>
                <button style="margin-bottom: 20px" type="submit" class="btn anton bg_yel_oni btn-lg" name="connexion">CONNEXION</button>
                <a href="{$link->getPage('inscription')}" style="margin-bottom: 20px" class="btn anton yellow bg_black btn-lg">Pas encore membre? Je M'inscris!</a>
            </form>
        </div>
    </div>

{/block}