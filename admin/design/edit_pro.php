<?php


        $id = $_GET['id'];
        $select = "SELECT * FROM products WHERE id = '$id'";
        $result = $conn -> query($select);
        $product = $result -> fetch_assoc();

?>


<form method="post" action="fun/do_edit_pro.php?id=<?= $id ?>" 
enctype="multipart/form-data">
            <div class="form-group">
                <label for="name" style="font-weight: bold;">product name :</label>
                <input type="text" name="name" value="<?= $product ['name']?>" class="form-control" >
            </div>
            <div class="form-group">
                <label for="price" style="font-weight: bold;">price :</label>
                <input type="number" name="price" value="<?= $product ['price']?>" class="form-control" >
            </div>
            <div class="form-group">
                <label for="count" style="font-weight: bold;">count :</label>
                <input type="text" name="count" value="<?= $product ['count']?>" class="form-control" >
            </div>
            <div class="form-group">
                <label for="description" style="font-weight: bold;">description :</label>
                <textarea class="form-control" name="descr" style="height:150px;" ><?= $product ['descr']?></textarea>
            </div>
            <div class="form-group">
                <label for="image" style="font-weight: bold;">Image :</label>
                <input type="file" name="image" class="form-control-file" >
                <br>
                <img src="image/<?=$product['image']?>" style="width:150px;height:150px">
            </div>
            <div class="form-group">
                <label for="category" style="font-weight: bold;">category :</label>
                <select name="category" class="form-control" >
                    <?php
                        $select_cat = "SELECT * FROM category";
                        $result_cat = $conn ->query($select_cat);
                        while ( $cat = $result_cat ->fetch_assoc() ) {
                            ?>
                          
                    <option value="<?= $cat['id']?>"<?php

                        if($cat['id'] === $product['cat']){
                            echo "selected";

                        }
                    
                    
                    ?>> <?= $cat['name']?></option>
                    <?php
                        }                    
                    
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="brand" style="font-weight: bold;">brand :</label>
                <select name="brand" class="form-control" >

                    <?php
                        $select_brand = "SELECT * FROM brand";
                        $result_brand = $conn ->query($select_brand);
                        while ( $brand = $result_brand ->fetch_assoc() ) {
                            ?>
                          
                    <option value="<?= $brand['id']?>"  <?php

                            if($brand['id'] === $product['brand']){
                             echo "selected";

                            }


                            ?>> <?= $brand['name']?></option>
                    <?php
                        }                    
                    
                    ?>             
                   </select>
                  </div>
            
            

            <input type="submit" value="Update Product" class="form-control btn btn-success">
        </form>