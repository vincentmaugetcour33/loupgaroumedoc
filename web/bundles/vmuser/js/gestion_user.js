
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
  
      $("ul.nav > li#galleries").addClass('active');
   $("img").popover({placement:'left',trigger: 'hover',html:true, content: function() { return '<img class="img-rounded" width="250px;" src="'+$(this).attr('src')+'"/><div>'+$(this).attr('id')+'</div>'; }, delay: { show: 500, hide: 10} });
     })(jquery);
 //});