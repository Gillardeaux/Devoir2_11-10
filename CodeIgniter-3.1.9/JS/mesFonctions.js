function AfficherLesConf()
{
    //alert("Ça fonctionne");

        $.ajax
        (
            {
                type:"get",
                url:"index.php/Ctrl_1/getAfficherlesConf",
                success:function(data)
                {
                    $('#voter').empty();
                    $('#voter').append(data);
                },
                error:function()
                {
                    alert("Impossible de lire les conférences");
                }
            }
        );
}