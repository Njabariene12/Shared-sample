function gethouse(buildingchoice){
    $.ajax({
        type:"POST",
        url: "choices.php",
        data: {buld:buildingchoice},
        success: function(housechoice){
            $("#housechoice").html(housechoice);
        }
    })
}