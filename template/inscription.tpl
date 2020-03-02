{extends file="template/layout.tpl"}

{block name="content"}

    {* Formulaire d'inscription *}
    <form action="" method="post">
        {* Parti pour que la personne puisse choisir son sexe *}
        <p>Vous êtes : </p>     
        <input type="radio" name="sexe" id="homme" value="homme" />
        <label for="homme">Homme</label>      
        <input type="radio" name="sexe" id="femme" value="femme" /> 
        <label for="femme">Femme</label>       
        <input type="radio" name="sexe" id="autre" value="autre" />
        <label for="autre">Autre</label>
        <br/>

        {* J'ai volontairement mis des espaces pour que tu puisses mieux t'y retrouver *}
        <label>Nom</label>
        <input type="text" name="nom" id="nom" required /><br/>

        <label>Prenom</label>
        <input type="text" name="prenom" id="prenom" required /><br/>

        <label>Taille (en cm)</label>
        <input type="number" name="taille" id="taille" required /><br/>

        <label>Poids (en kg)</label>
        <input type="number" name="poids" id="poids" required /><br/>

        <label>Date de naissance</label>
        <input type="date" name="date_naissance" id="date_naissance" required /><br/>

        <label>Email</label>
        <input type="email" name="email" id="email" required /><br/>

        <label>Téléphone</label>
        <input type="tel" name="tel" id="tel" required /><br/>

        <label>Mot de passe</label>
        <input type="password" name="password" id="password" required /><br/>

        <label>Confirmation du Mot de Passe</label>
        <input type="password" name="password_check" id="password_check" required /><br/>

        <button type="submit" name="inscription" class="btn anton bg_yel_oni">Valider l'inscription</button>

    </form>
{/block}