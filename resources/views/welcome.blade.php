<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    <title>Miradouros Virtuais Naturtejo</title>
</head>
<body>

    <div class="row">
        <div class="column">
            <div style="height: 40%;"></div>
                <h2 style="text-align:center">Miradouros Naturtejo</h2>
                <p style="text-align:center">No âmbito de Projeto 1, desenvolvemos este protótipo para demonstrar o plano de trabalho.&nbsp;</p>
                </div>

        <div class="column">
            <img src="../images/mapa_naturejo.jpg" alt="Mapa Natutejo" usemap="#workmap" width="500" height="600">
            <map name="workmap">
                <area shape="rect" coords="34,44,270,350" alt="castelobranco" href="{{ URL::asset('/castelobranco') }}">
            </map>
        </div>
    </div>
    
</body>
</html>










