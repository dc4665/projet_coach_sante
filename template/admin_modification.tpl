{extends file="template/layout.tpl"}

{block name="content"}

    <div style="margin-top: 200px"></div> 

    <div class="container">
        <h1>Vous pouvez changer les informations et le role de: <br/> {$personne->getNom()} {$personne->getPrenom()}</h1>

                <form action="" method="post">
                    <label>Nom</label>
                    <input type="text" name="nom" id="nom" value="{$personne->getNom()}" required /><br/>

                    <label>Prenom</label>
                    <input type="text" name="prenom" id="prenom" value="{$personne->getPrenom()}" required /><br/>

                    <label>Email</label>
                    <input type="email" name="email" id="email" value="{$personne->getEmail()}" required /><br/>

                    <label>Téléphone</label>
                    <input type="tel" name="tel" id="tel" value="{$personne->getTel()}" required /><br/>

                    <label>Roles</label>
                    <select id="role" name="role" required />
                            <option value="" selected>--</option>
                        {foreach from=$roles item=role}
                            <option value="{$role->getId_role()}">{$role->getNom_role()}</option>
                        {/foreach}
                    </select>
                    <br/>
                    <button type="submit" name="modification" class="btn anton bg_yel_oni">Valider les changements</button>

                </form>
    </div>

{/block}