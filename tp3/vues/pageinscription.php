<div data-role="page" id="pageinscription">
<?php
include "vues/entetepage.html";
include "vues/logo.html";
?>
<div data-role="content" id="divinscription">
    <form action="#" id="forminscription" rel="external">
     <div data-role="fieldcontain" id ="champsinscription">
        <label for="nom" id="testnom">Nom </label>
        <input type="text" name="nom" id="nom" class="required" value=""/>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" class="required" value="" />
        <label for="mail">Mail</label>
        <input type="text" name="mail" id="mail" class="required email" value="" />
        <label for="tel">téléphone</label>
        <input type="text" name="tel" id="tel" class="required digits" minlength="10" maxlength="10" value=""  />
        <label id="message"></label>
        <fieldset data-role="controlgroup" data-mini="true" data-type="horizontal">
            <legend>Indiquer votre service</legend>
            <input name="type" id="rdre" type="radio" checked="checked" value="recherche">
            <label for="rdre">Recherche</label>
            <input name="type" id="rdpr" type="radio" value="production">
            <label for="rdpr">Production</label>
            <input name="type" id="rdco" type="radio" value="commercial">
            <label for="rdco">Commercial</label>
            <input name="type" id="rdse" type="radio" value="securite">
            <label for="rdse">Securite</label>
        </fieldset>
          <input type="submit" name="submit" id="btninscription" value="Envoyer" />
     </div>
    </form>


</div><!-- fin content-->
</div><!-- fin page-->
