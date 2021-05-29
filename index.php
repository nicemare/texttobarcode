<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<div class="container pt-3">
<div class="row">
    <?php
    $fh = fopen('resi.txt','r');
    while ($line = fgets($fh)) { ?>
        <div class="col">

        <img alt="Resi" src="barcode.php?codetype=Code39&size=40&text=<?= $line ?>&print=true" />
        
        </div>
    <?php
    }
    fclose($fh);
    ?>
</div>
</div>