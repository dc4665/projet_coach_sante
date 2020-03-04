<header class="bg_yel_oni fixed-top shadow">
        
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{$link->getPage('index')}"><img src="img/logo/logo_coach.png" width="150" alt="logo"/></a>
                <button class="navbar-toggler text-dark" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link mr-3" href="{$link->getPage('index')}">ACCUEIL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-3" href="{$link->getPage('programme')}">PROGRAMMES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-3" href="{$link->getPage('coachs')}">NOS COACHS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-3" href="{$link->getPage('transformations')}">TRANSFORMATIONS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-3" href="{$link->getPage('contact')}">CONTACT</a>
                        </li>   
                    </ul>
                </div>
            </nav>           
        </div>

        <div>
            <div class="container text-center">
                <div class="row align-justify">
                    {if empty($utilisateur)}
                    <a class="btn yellow bg_black anton mb-1" href="{$link->getPage('connexion')}" style="margin: auto">ESPACE CLIENT</a>
                    <a class="btn btn-primary anton mb-1" href="{$link->getPage('connexion')}" style="margin: auto">ESPACE CLIENT</a>
                    <a class="btn btn-primary anton mb-1" href="{$link->getPage('inscription')}" style="margin: auto">INSCRIPTION</a>
                    {/if}
                    {* Vérifie la présence d'une session *}
                    {if isset($utilisateur)}
                        <span class="col anton">{$utilisateur->getPrenom()}</span>
                        <a href="{$link->getPage('personne')}" class="col anton btn">TABLEAU DE BORD</a>
                        <a href="?action=connexion&session=out" class="col anton btn button mb-1">DECONNEXION</a>
                    {/if}
                </div>
            </div>
        <div>

    </header>