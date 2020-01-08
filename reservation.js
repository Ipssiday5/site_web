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
                success:function(pData)
                {
                    alert("Un mail de confirmation à été envoyé à votre adresse.");
                },
                error:function()
                {
                    alert("Impossible d'envoyer le mail.");
                }
            }
        );
    }
} 