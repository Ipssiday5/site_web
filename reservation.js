window.onload = function() { 
    document.getElementById("btnReservation").addEventListener("click", sendMail);

    function sendMail(){
        var formValues = $("form").serializeArray();

        $.ajax
        (
            {
                type: "GET",
                url: "server/index.php",
                data: "formValues="+JSON.stringify(formValues),
                success:function(response)
                {
                    response = JSON.parse(response);
                    if(response.isMailSend){
                        alert("Un mail de confirmation à été envoyé à votre adresse.");
                    }
                    else {
                        alert("Impossible d'envoyer le mail à cette adresse.");
                    }
                },
                error:function()
                {
                    alert("Erreur dans la requête.");
                }
            }
        );
    }
} 