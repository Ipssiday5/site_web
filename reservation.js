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
                    alert(response.message);
                },
                error:function()
                {
                    alert("Erreur dans la requête.");
                }
            }
        );
    }
} 