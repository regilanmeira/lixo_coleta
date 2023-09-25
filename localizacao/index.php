<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geo localização</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="localizacao.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

    <script src="localizacaoAPI.js"></script>
    <style>
        *
        {
            margin: 5px;
        }
    </style>
</head>
<body onload="getLocation();">
    <form name="localizacao" action="lixo.php" method="post">

      
<div class="container">
<div class="row">
    <div class="col-sm-12">
        <h1>Teste de localização</h1>
    </div>
</div>

    <div class="row">
        <div class="col-sm-12">
            <label for="txtLocal">Local</label><br />
            <textarea class="form-control" name="txtLocal" id="" cols="30" rows="10"></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <label for="">Latitude e longitude</label><br />
            <input class="form-control" type="text" name="txtLatitude" id="">
            <br />
            <input class="form-control" type="text" name="txtLongitude" id="">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <button class="btn btn-success" type="submit">Enviar</button>
        </div>
    </div>



    


</div>

</form>
    
</body>
</html>