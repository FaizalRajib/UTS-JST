<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class = "margin-top-h1">Algoritma Perceptron</h1>
        <div class="col-sm-6 mt-3">
            <form action="input.php" method = "post">
                <div class="form-group row">
                  <label for="n" class = "col-sm-2 col-form-label">Banyak Data</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control"  id="n" name="n" placeholder="Banyak Data Yang Dimasukkan">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="nx" class = "col-sm-2 col-form-label"> Banyak X </label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control"  id="nx" name="nx" placeholder="Banyak X">
                  </div>
                </div>

                <button class = "btn btn-primary" type="submit">Submit</button>

            </form>
        </div>

    </div>    
</body>
</html>