{extends file="template/layout.tpl"}

{block name="content"}
    <div style="margin-top: 200px"></div> 
    <h1>Soumettre une nouvelle fiche de suivi</h1>
        <div class="container">

            <form action="" method="post">
                <label>Date</label>
                <textarea type="date" name="date" id="date" required /></textarea><br/>

                <label>Alimentation</label>
                <textarea type="text" name="alimentation" id="alimentation" required/></textarea><br/>

                <label>Activité</label> 
                <textarea type="text" name="activite" id="activite" required/></textarea><br/>

                <label>Commentaire</label>
                <textarea type="text" name="commentaire" id="commentaire" required/></textarea><br/>

                <button type="submit" name="nouvelle_fiche" class="btn anton bg_yel_oni">Soumettre la fiche</button> 
            </form> 

        </div> 
{/block}