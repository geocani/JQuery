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
    <section class="page">
        <div id="menu">
            <ul>
                <li><a href="un.php">un</a></li>
                <li><a href="deux.php">deux</a></li>
                <li><a href="trois.php">trois</a></li>
                <li><a href="quatre.php">quarte</a></li>
            </ul>
        </div>
        <div id="article"><h1>INDEX</h1></div>
    </section>


<script>
    $(function(){
        $('a').click(function(){
            let page = $(this).attr('href');
            $.ajax({
                url: page, // contenu à afficher 
                cache: false, // facultatif, annuler mise en cache
                success: function(html) {
                    afficher(html);
                },
                error:function(XMLHttpRequest,textStatus, errorThrown){
                    afficher('erreur');
                }


            });
            return false; // empecher le liens de se charger
        });

    });

    let afficher = function(data) {
        $('#article').fadeOut(1000, function(){
            $('#article').empty() // efface le contenu
            $('#article').append(data); // afficher nouveau contenu
            $('#article').fadeIn(1000)
        })
    }



</script>
</body>
</html>