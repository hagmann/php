<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jQuery Integration</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("p").click(function() {
                $(this).hide();
            })
        });
    </script>
</head>
<body>
    <p>Click mich</p>
    
    <p>Hier auch klicken</p>
</body>
</html>