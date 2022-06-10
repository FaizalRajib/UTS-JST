<?php
$data = $_POST;
$n = $data['n'];
$nx = $data['nx'];
$k = 0;
$tx = [];
$x = [];
$t = $_POST['t'];
for ($i = 0; $i < $n; $i++){
    for($j = 0; $j < $nx; $j++){
        array_push($tx,$data['x'][$k]);
        $k++;
    }
    array_push($x, $tx);
    for($j = 0; $j < $nx; $j++){
        array_pop($tx);
    }
}

$w = [];
for ($i = 0; $i < $nx; $i++){
    array_push($w, 0);
}

$b=0;
$a=0.8;

$th = 0.5;

$ak =0;
$ep = 1;

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
        <?php while ($ak < 1){
            $ak = 0;
        ?>
            <h3> Epoch Ke - <?= $ep;?></h3>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <?php for ($i = 0; $i < $nx; $i++) { ?>
                            <th>X<?= ($i + 1)?></th>
                        <?php }?>    
                        <th>T</th>
                        <th>Fx</th>
                        <th>Y</th>
                        <th>Akurasi</th>
                        <?php for ($i = 0; $i < $nx; $i++) { ?>
                            <th>W <?= ($i + 1)?></th>
                        <?php }?>
                        <th>Bias</th>
                    </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < $n; $i++) { ?>
                    <tr>
                        <?php for ($j = 0; $j < $nx; $j++) { ?>
                            <td><?= $x[$i][$j];?></td>
                        <?php }?>
                        <td><?= $t[$i] ?></td>
                        <?php
                        $fx = 0;
                        for ($j = 0; $j < $nx; $j++){
                            $fx = $fx + ($x[$i][$j] * $w[$j]);
                        }
                        $fx = $fx + $b;
                        ?>
                        <td><?= $fx;?></td>
                        <?php 
                            if ($fx > $th){
                                $y =1;
                            }elseif($fx <- $th){
                                $y =-1;
                            } else {
                                $y = 0;
                            }
                        ?>   
                        <td><?= $y;?></td> 
                        <?php
                            if($y==$t[$i]){
                                $ak++;
                                $akk = 1;
                            } else {
                                $akk = 0;
                            }
                        ?>
                        <td><?= $akk;?></td>
                        <?php
                            if ($akk == 0){
                                for ($j = 0; $j < $nx; $j++){
                                    $w[$j]=$w[$j] + ($a* $x[$i][$j] * $t[$i]);
                                }
                                $b=$b+($a*$t[$i]);
                            }
                        ?>
                        <?php for ($j = 0; $j < $nx; $j++) { ?>
                            <td><?= $w[$j];?></td>
                        <?php }?>
                        <td><?= $b; ?></td> 
                    </tr>
                    <?php } ?>
                </tbody>
             </table>
             
        <?php $ak = $ak / $n;
            $ep++; 
        }?>     
        <div class="mt-4 float-right">
                <form action="index.php" method="post">
                    <button class="btn btn-primary" type="submit">Lakukan Algoritma Testing</button>
                </form>
            </div>
            <br><br>  
    </div>
    </div>
     
    
</body>
</html>