
// $(document).ready(function() 
// {
     (function($){ 
     $("body").on("click", "#supprimer_profil", (function()
          { 
            if (confirm("Souhaitez-vous réellement supprimer votre profil de connexion ? ")) 
            {
                $.ajax({
                   type: "POST",
                   url: Routing.generate('vm_user_supprime'),
                   cache:false,
                   success: function(data)
                   {
                    $("#info_login").fadeOut();
                    location.reload();
                    //document.getElementById('logout').click()
                   }
                 });
             }
             
          }));
    
    
       

   }(jQuery));
 //});