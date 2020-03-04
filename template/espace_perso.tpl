{extends file="template/layout.tpl"}

{block name="content"}

    <div style="margin-top: 200px"></div> 
    <div class="container">
        <h1>Bienvenu sur votre espace personnel: {$utilisateur->getPrenom()}</h1>
        <p>Vous pouvez changer vos informations et coordonnées personnelles</p>

            <form action="" method="post">
                <label>Nom</label>
                <input type="text" name="nom" id="nom" value="{$utilisateur->getNom()}" required /><br/>

                <label>Prenom</label>
                <input type="text" name="prenom" id="prenom" value="{$utilisateur->getPrenom()}" required /><br/>

                <label>Email</label>
                <input type="email" name="email" id="email" value="{$utilisateur->getEmail()}" required /><br/>

                <label>Téléphone</label>
                <input type="tel" name="tel" id="tel" value="{$utilisateur->getTel()}" required /><br/>

                <label>Mot de passe</label>
                <input type="password" name="password" id="password" value="" required /><br/>

                <button type="submit" name="modification" class="btn anton bg_yel_oni">Valider les changements</button>

            </form>
    </div>



{/block}