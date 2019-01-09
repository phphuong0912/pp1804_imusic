<html lang="en">
    <head>
        <title>File upload</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
        <script type="text/javascript">
            $(document).ready(function() {
            
              $(".btn-success").click(function(){ 
                  var html = $(".clone").html();
                  $(".increment").after(html);
              });
            
              $("body").on("click",".btn-danger",function(){ 
                  $(this).parents(".control-group").remove();
              });
            
            });
            
        </script>
    </body>
</html>
