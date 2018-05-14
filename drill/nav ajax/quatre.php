<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>slide</title>
</head>
<body>
    <div class="num-page">
        <h1>QUATRE</h1>
    </div>
    <script>
    $(function(){
        $('a').click(function(){
            let page = $('a').attr('href');
            $.ajax({
                url: page, // contenu à afficher 
                cache: false, // facultatif, annuler mise en cache
                success: function(html) {
                    afficher(html);
                },
                error:function(XMLHttpRequest,textStatus, errorThrown){
                    alert(textStatus);
                }


            });
            return false; // empecher le liens de se charger
        });

    });

    let afficher = function(data) {
        $('#article').empty() // efface le contenu
        $('#article').append(data); 
    }



</script>
</body>
</html>