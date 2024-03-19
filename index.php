<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Password Generator</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body data-bs-theme="dark">

    <?php
    
    if(isset($_GET['length'])){
        echo "ciaoo";
    }
    
    ?>
    
    <div class="container pt-5 ">
        <h1>Password Generator</h1>

        <div class="container p-3">

            <form method="GET" action="index.php">
                <div class="mb-3">
                    <label for="pass-lenght">Quanti caratteri (da 5 a 20) deve essere lunga la tua password?</label>
                    <input type="number" id="length" name="length" min="5" max="20" required>
                </div>
                <button type="submit" class="btn btn-primary">Genera!</button>
            </form>
        
        </div>

    </div>



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>