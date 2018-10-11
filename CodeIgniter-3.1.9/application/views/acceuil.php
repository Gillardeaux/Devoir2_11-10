<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Devoir Techdays</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='JQuery/jquery-3.1.1.js'> </script>
    <script src='JS/mesFonctions.js'> </script>
    <script>
    $(
            function()
            {
                $('input[name=Vote]').click(function()
                {
                    AfficherLesConf();
                });
            }
        );
    </script>
</head>
<body>
    <h1>Devoir Techdays</h1>

    <input type='button' value='Créer une conférence' name='Creer'>
    <input type='button' value='Voter pour une conférence' name='Vote'>

    <div id="creer"></div>
    <div id="voter"></div>

</body>
</html>