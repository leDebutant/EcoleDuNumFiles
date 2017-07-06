<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REQUÊTE AJAX</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script>
      $(document).ready(function(){
        $("#call").click(function(){
            var username = $("#username").val();
            var email = $("#email").val();
          // façon longue
          $.ajax({
            url: "ajaxService.php", // équivalent action
            data:{
              username: username,
              email: email
            },
            type: "POST", // method
            dataType: "json",
            success: function(data){
              // html écrase tout ce qui a dans le container
                $("#container").html(data.username+"<br>");
              // append va juste rajouter nos infos dans le container
                $("#container").append(data.email);
            }
          });
        });
      });
    </script>
  </head>
  <body>
    <label>Username</label>
    <br>
    <input type="text" id="username" />
    <br>
    <label>Email</label>
    <br>
    <input type="text" id="email" />
    <br>
    <button id="call">
      Lancer ma requête
    </button>
    <div id="container">
    </div>
  </body>
</html>
