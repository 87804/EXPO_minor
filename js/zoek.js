
$("#search").keyup(function () {
    //lees titleveld uit
    let tit = $('#search').val();

    $.ajax({
        type:    "POST",
        url:     "zoek.php",
        data: {"title": tit},
        success: function (tekst) {
            $("#shop").html(tekst);
        },
        error: function (request, error) {
            console.log("FOUT: " + error);
        }
    });
return false;
});