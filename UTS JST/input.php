<?php
$n = $_POST['n'];
$nx = $_POST['nx'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Algoritma Perceptron</h1>
        <div class="col-sm-5 mt-3">
            <form action="proses.php" method="post">
                <?php for($i=0; $i < $n; $i++){ ?>
                    <h3>Input Data Ke - <?= ($i + 1)?></h3>
                    <?php for ($j = 0; $j < $nx; $j++) {?>
                    <div class="form-group row">
                        <label for="x[]=>[]" class="col-sm-2 col-form-label">X<?= ($j + 1); ?> </label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="x[]=>[]" name="x[]=>[]" placeholder="Banyak Data">
                        </div>
                      </div>
                <?php } ?>
                <div class="form-group row">
                  <label for="t[]" class="col-sm-2 col-form-label">T</label>
                  <div class="col-sm-10">
                      <input type="number" class="form-control"  id="t[]" name="t[]" placeholder="Target">
                  </div>
                </div>
                <?php } ?>
                <input type="hidden" name="n" value="<?= $n; ?>">
                <input type="hidden" name="nx" value="<?= $nx; ?>">
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>