<?php
$id = $_GET['id'];
$name = $_GET['Name'];
$description = $_GET['Description'];
$price =  $_GET['Price'];
$quantity = $_GET['Price'];

?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <!-- A través del mètode POST li enviem les dades del formulari a l'arxiu add_product.php -->
                <form action="add_product.php" method="GET">
                    <div class=form-group>
                        <input type="text" name="id" class="form-control" placeholder="name" autofocus value="<?=$id?>">
                    </div>
                    <div class=form-group>
                        <textarea name="id" rows="3" class="form-control" placeholder="description"></textarea>
                    </div>
                    <div class=form-group>
                        <input type="text" name="id" class="form-control" placeholder="price" value="<?=$id?>">
                    </div>
                    <div class=form-group>
                        <input type="text" name="id" class="form-control" placeholder="quantity" value="<?=$id?>">
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="add_product" value="+ Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>