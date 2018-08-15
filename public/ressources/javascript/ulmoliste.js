$("#Sauvegarder").hide();
$("#Annuler").hide();

function Modif(ligne) {
//alert("Modification de : "+ligne);
    var ligneposition=$("#LigneDomaine"+ligne).data("ulmoposition");
    var ligneCourante="#TableListe > tr:eq("+ligneposition+") > td:eq(1)";

    //-----------------------------------------------------------------------
    // Il faut demander si il faut sauvegarder ou annuler les modifs en cours
    //-----------------------------------------------------------------------

//    $("#Sauvegarder").show();
//    $("#Annuler").show();
    var nomDomaine=$(ligneCourante).text();
    alert("Modification du domaine : "+nomDomaine);
//    document.location.href="/admin/domaine/detail";
    }

function Delete(ligne) {
//alert("Suppression de : "+ligne);
    var ligneposition=$("#LigneDomaine"+ligne).data("ulmoposition");
    var ligneCourante="#TableListe > tr:eq("+ligneposition+")";

    $("#Sauvegarder").show();
    $("#Annuler").show();
    $(ligneCourante).remove();
    }

function Up(ligne) {
//alert("Montée de : "+ligne);
    var ligneposition=$("#LigneDomaine"+ligne).data("ulmoposition");

    if (ligneposition > 1) {
        var ligneCourante="#TableListe > tr:eq("+ligneposition+")";
        var ligneFuture="#TableListe > tr:eq("+(ligneposition-1)+")";

        $("#Sauvegarder").show();
        $("#Annuler").show();
        $(ligneFuture).before($(ligneCourante));
        $(ligneCourante).data("ulmoposition",ligneposition);
        $(ligneFuture).data("ulmoposition",ligneposition-1);
        }
    }

function Down(ligne) {
//alert("Descente de la ligne d'ordre : "+ligne);
    var ligneposition=$("#LigneDomaine"+ligne).data("ulmoposition");
    var ligneCourante="#TableListe > tr:eq("+ligneposition+")";
    var ligneFuture="#TableListe > tr:eq("+(ligneposition+1)+")";

    $("#Sauvegarder").show();
    $("#Annuler").show();
    $(ligneFuture).after($(ligneCourante));
    $(ligneCourante).data("ulmoposition",ligneposition);
    $(ligneFuture).data("ulmoposition",ligneposition+1);
    }
