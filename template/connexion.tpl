{extends file="template/layout.tpl"}

{block name="content"}
    
    <div style="margin-top: 200px"></div>

    <div class="container">
        <h2>Connexion</h2>
        <form action="" method="post">
            <label>Email</label>
            <input type="email" name="email" id="email" required><br/>
            <label>Mot de passe</label>
            <input type="password" name="password" id="password" required><br/>
            <button type="submit" class="btn btn-primary" name="connexion">Connexion</button>
            <a href="{$link->getPage('inscription')}" class="btn btn-primary">Pas encore membre? Je m'inscris!</a>
        </form>
    </div>

{/block}