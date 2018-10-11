<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Devoir Techdays</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='JQuery/jquery-3.1.1.js'> </script>
    <script src='JS/mesFonctions.js'> </script>
</head>
<body>
    <?php
        foreach($lesConf as $uneConf)
        {
            echo "<input type='checkbox' name='cocher'>";
        }
    
    ?>
</body>
</html>