{extends file="template/layout.tpl"}

{block name="content"}
     <!-- Partie Bannière -->
    <div class="bg_bande_couleur"> 
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mt-5">
                    <h1 class="big_font mt-5">Plan du Site</h1>

                </div>
            </div>
            
        </div> 
    
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <ul id="plan_site">
                        <li><a href="{$link->getPage('index')}">ACCUEIL</a></li>
                        <li><a href="{$link->getPage('programme')}">Programmes</a></li>
                        <li><a href="{$link->getPage('coachs')}">Nos Coachs</a></li>
                        <li><a href="{$link->getPage('transformations')}">Transformations</a></li>
                        <li><a href="{$link->getPage('contact')}">Contact</a></li>
                        <li class="uppercase"><a href="{$link->getPage("mentions_legales")}">Mentions légales</a></li>
                        <li class="uppercase"><a href="{$link->getPage("politiques_confidentialites")}">Politique de confidentialité</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
         

{/block}