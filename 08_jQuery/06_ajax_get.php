<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jQuery AJAX</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("button").click(function(){
                console.log('clicked');
                
                $.get( "backend.php", function( data ) {
                  alert( "Data Loaded: " + data );
                    
                    $('.result').html(data);
                });
            });
        });
    </script>
</head>
<body>

<p id="text">Einblenden und Ausblenden per Klick</p>

<p class="result"></p>

<button>Externen Content laden</button>
    
<!-- Mehr Informationen: https://www.w3schools.com/jquery/jquery_ajax_intro.asp -->
</body>
</html>