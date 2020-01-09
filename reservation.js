window.onload = function() { 
    document.getElementById("btnReservation").addEventListener("click", sendMail);

    function sendMail(){
        var formValues = $("form").serializeArray();
        var isFormOk = true;

        formValues.forEach(element => {
            if(element.value == ""){
                isFormOk = false;
            }
        });
        if(isFormOk){
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
        else{
            alert("Veuillez renseigner tous les champs pour valider l'inscription.");
        }
    }
} 