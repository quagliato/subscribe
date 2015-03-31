<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8" />

        <title>Subscribe</title>

        <!-- Third-party libs -->
        <script type="text/javascript" src="_libs/jquery-2.0.3.min.js"></script>
        <!-- /Third-party libs -->

        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
        <!-- /Google Fonts -->

        <script>
        $(document).ready(function(){
            $('form.async').submit(function(event){
                event.preventDefault();
                $("h2#return_message").fadeOut();

                var values = {};
                values["email"] = $("#email").val();

                var action = $(this).attr("action");

                var success = function(data){
                    var result = JSON.parse(data);
                    $("h2#return_message").html(result.message).fadeIn();
                }
                
                var result = $.post(action, values, success);

                console.log(result);
            })
        });
        </script>

    </head>

    <body>
        <form method="POST" action="subscribe.php" class="async">
            <input id="email" type="email" name="email" placeholder="Subscribe to our newsletter" />
            <input type="submit" name="subscribe" value="subscribe" />
        </form>
        <h2 id="return_message"></h2>
    </body>
</html>
