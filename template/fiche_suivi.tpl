{extends file="template/layout.tpl"}

{block name="content"}

    <div style="margin-top: 200px"></div>
    <p>{$fiche->getAlimentation()}</p>
    <p>{$fiche->getActivite()}</p>
    <p>{$fiche->getCommentaire()}</p>
    <p>{$fiche->getDate_fiche()}</p>
    <p></p>
{/block}