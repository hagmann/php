<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jQuery Syntax</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        // $ definiert jQuery
        // (selector) Element(e) selektieren
        // action() Aktion die ausgeführt wird
        
        //  $(this).hide() - aktuelles Element verstecken
        //  $("p").hide() - Alle p Elemente verstecken
        //  $(".test").hide() - Alle Elemente mit Klasse test verstecken
        //  $("#test").hide() - Element mit ID test verstecken
        
        // Document Ready Event
        // jQuery Code geht immer in diesen Bereich 
        
        // Element Selektor $
        
        $(document).ready(function() {
            $('button').click(function(){
                $('p').hide();
            })
        })
        

    </script>
</head>
<body>
<!-- Beispiel, Button klicken, p Element verstecken -->

<button>Verstecken</button>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus nam impedit expedita quaerat ad totam labore mollitia dolore. Veniam tempore temporibus eos delectus officia atque quia neque at reiciendis totam?</p>

<!-- Mehr Informationen: https://www.w3schools.com/jquery/jquery_selectors.asp -->
</body>
</html>