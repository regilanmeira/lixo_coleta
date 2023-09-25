<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geo localização</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <style>
        *
        {
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php 
                include 'conexao_bd.php'; 
                $local = $_POST["txtLocal"];
                $latitude = $_POST["txtLatitude"];
                $longitude = $_POST["txtLongitude"];

                $sql = "INSERT INTO denuncia(local,latitude,longitude) VALUES ('$local','$latitude','$longitude')";
                if (executarComando($sql))
                {
                    echo "<label class='alert alert-success'>Denúncia reportada!</label>"; 
                }
                else
                {
                    echo "<label class='alert alert-warning'>Denúncia reportada!</label>"; 
                }

                ?>
            </div>
        </div>
    </div>
    
</body>
</html>