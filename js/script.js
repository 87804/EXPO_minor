$("#zoek-btn").click(function () {
    let kleur = $('#kleur').val();
    let merk = $('#merk').val();
    let materiaal = $('#materiaal').val();

    $.ajax({
        type: "POST",
        url: "filter.php",
        data: {"kleur": kleur, "merk": merk, "materiaal": materiaal},
        success: function (data) {
            $("#shop").html(data);
        },
        error: function (request, error) {
            console.log("FOUT: " + error);
        }
    });
    return false;
})