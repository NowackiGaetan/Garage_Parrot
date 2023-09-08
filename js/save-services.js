$(document).ready(function() {
   
    $("#saveButton").click(function() {
        let data = {};       
        let servicesCheck = $(".check-service");
       
        
        $(servicesCheck).each(function() {
            var service_name = $(this).attr("name");
            var service_value = $(this).prop("checked") ? 1 : 0;  
            data[service_name] = service_value;
        });
        console.log(data);

        $.ajax({
            type: "POST",
            url: "./envoi-service.php", 
            data: data,
            success: function(response) {
                function showSuccessMessage(message) {
                    var successMessage = document.getElementById("message-success");
                    successMessage.textContent = message;
                    successMessage.style.backgroundColor = "#4CAF50"; 
                    successMessage.style.display = "block"; 
                    setTimeout(function () {
                        successMessage.style.display = "none"; 
                    }, 3000); 
                }
                
                showSuccessMessage("Services sauvegardés avec succès !");
            }
        });
    });
});

