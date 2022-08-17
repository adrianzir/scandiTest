<?php include_once "head.php"; ?>
<?php include_once "connect.php";?>
<?php include_once "insertDb.php"?>
   <div class='main-container'>
     <h1 class='main-title'>  Add products </h1>
     <div class='btns-container'>
     <label  class='btns' for="submit-form" tabindex="0">SAVE</label>
     <a href='index.php'><button class='btns'>CANCEL</button></a>
     </div>
    </div>
    <section class="form-section">
      <form action="" method="post" id="product_form">
         <div class='inputs'>
            <label for="sku">sku</label>
            <input type="text" name="sku" required>
            <label for="name">name</label>
            <input type="text" name="name_name" required>
            <label for="price">price ($)</label>
            <input type="number" step="0.1" name="price" required>
         </div>
         <div class='switcher_div'>
            <label for="productType" id="switcher_label" >Type switcher</label>
            <select name="productType" id="productType" required>
            <option value="null"></option>
            <option value="FURNITURE">FURNITURE</option>
            <option value="BOOK">BOOK</option>
            <option value="DVD">DVD</option>
            </select>
         </div>
         <div class="display_attr"></div>
         <input type="submit" id="submit-form" style="display: none;" />
      </form>
    </section>
    

<?php include_once "footer.php" ?>    
