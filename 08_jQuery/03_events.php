<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jQuery Events</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("p").on({
                mouseenter: function(){
                    $(this).css("background-color", "lightgray");
                }, 
                mouseleave: function(){
                    $(this).css("background-color", "lightblue");
                }, 
                click: function(){
                    $(this).css("background-color", "yellow");
                } 
            });
        });
    </script>
</head>
<body>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis commodi aperiam porro autem id excepturi saepe assumenda perspiciatis eaque cumque repellat magnam inventore aliquid, atque libero mollitia ab obcaecati aspernatur!</p>
    
<!-- Mehr Informationen: https://www.w3schools.com/jquery/jquery_events.asp -->
</body>
</html>