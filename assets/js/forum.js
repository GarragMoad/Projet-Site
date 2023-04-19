$(document).ready(function() {
  // Cibler le bouton avec l'ID "monBouton"
  $('#Bouton_envoie').click(function() {
    // Récupérer la valeur de l'élément #Msg_envoie
    var message = $('#Msg_envoie').val();
    $(".messages").append("walo <br>");
    $("#Msg_envoie").val("");
    $.ajax({
      url: '../../index.php',
      type: 'POST',
      data: {message: message},



      success: function(data,status) {
          //console.log(data);
          console.log(status);
      },
      error: function(xhr, status,error) {
          console.log(xhr);
          console.log(status);
          console.log(error);
      
      }
    });
  });
});