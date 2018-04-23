<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jQuery Hide/Show</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#hide").click(function(){
                $("p").hide();
            });

            $("#show").click(function(){
                $("p").show();
            });
            
            $("#toggle").click(function(){
                $("p").toggle();
            })
        });
    </script>
</head>
<body>

<p>Einblenden und Ausblenden per Klick</p>

<button id="hide">Verstecken</button>
<button id="show">Anzeigen</button>

<button id="toggle">Toggle</button>
    
<!-- Mehr Informationen: https://www.w3schools.com/jquery/jquery_hide_show.asp -->
</body>
</html>