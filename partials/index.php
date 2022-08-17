<?php include_once "head.php"; ?>

    <?php
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud','root','' );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $pdo->prepare('SELECT * FROM products order by sort ASC');
    $sql->execute();
    $products = $sql->fetchAll(PDO::FETCH_ASSOC);

    // DELETE FUNCTION

    // function del(){
    //     if(isset())
    // }
    ?>
    <div class='main-container'>
    <h1 class='main-title'>  Product List </h1>
    <div class='btns-container'>
    <a href='addProduct.php'><button class='btns'>ADD</button></a>
    <button class='btns' id="delete-product-btn" name="del">MASS DELETE</button>
    </div>
    </div>
    
    <section class="products-section">
        <?php foreach($products as $i=> $products): ?>
            <div class="cards">
                <input type="checkbox" name="delete-checkbox" id="delete-checkbox">
                <div class="info">
                    <p><?php echo $products['sku']?></p>
                    <p><?php echo $products['name']?></p>
                    <p><?php echo $products['price']?></p>
                    <p><?php echo $products['attributes']?></p>
                </div>
            </div>
        <?php endforeach; ?>    
    </section>

<?php include_once "footer.php" ?>  
