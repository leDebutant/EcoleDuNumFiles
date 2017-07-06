<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js" ></script>
    <script>
    $(document).ready(function () {
      $( "#ajaxButton" ).click(function() {
        $.ajax({
             url: "ajaxService.php",
             data:
             {
               username: "alfonso",
               email: "le_debutant@yahoo.fr"
             },
                 type: 'POST',
                 dataType: 'json',
                 success: function (data)
                 {
                    console.log(data);
                    $("#container").html(data.username+"<br>");
                    $("#container").append(data.email+"<br>");
                 }
         });
      });
    });
    </script>
  </head>
  <body>
      <button id="ajaxButton">
        Lancer requête
      </button>
      <div id="container">

      </div>
  </body>
</html>
