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
                <div class="offset-md-3 col-12 col-md-6 text-left mt-5">
                    <p class="white">
                        Postez vos fiches de suivi, et suivez les recommandations de votre Coach Santé dans votre espace personnel
                    </p>
                </div>
            </div>

        </div>

    </div>
    <!-- Partie formulaire de connexion-->
    {* remettre la class connexion, enlevé car formulaire blanc lors du clic *}
    <div class="">
        <h2>Connexion</h2>
        <form action="" method="post">
            <label>Email</label>
            <input type="email" name="email" id="email" required><br/>
            <label>Mot de passe</label>
            <input type="password" name="password" id="password" required><br/>
            <button type="submit" class="btn anton bg_yel_oni" name="connexion">Connexion</button>
            <a href="{$link->getPage('inscription')}" class="btn anton bg_yel_oni">Pas encore membre? Je m'inscris!</a>
        </form>
    </div>

{/block}