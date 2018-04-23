<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Validation</title>
     <script>
        function validateForm() {
            var txtNachname = document.forms['login']['nachname'].value;
            var error = {};
            
            if(txtNachname == "") {
                console.log('nachname');
                error.nachname = 'Bitte einen Wert angeben';
            }
            
            console.log(error);
            if(error.nachname != undefined && error.nachname !== "") {
                document.getElementsByClassName("error-nachname")[0].innerHTML = error.nachname;
                return false;
            } else {
                document.getElementsByClassName("error-nachname").style.display = "none";
                return true;
            }
        }
    </script>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
   
    
    <form name="login" action="submit.php" onsubmit="return validateForm()" method="post">
       <label for="vorname">Vorname</label>
        <input type="text" name="vorname"><br>
        
        <label for="nachname">Nachname</label>
        <input type="text" name="nachname"><br>
        <span class="error error-nachname"></span>
        
        <input type="submit" value="Senden">
    </form>

</body>
</html>