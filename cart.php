<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <?php
    include('setting.php');
    session_start();
    
?>
    <script>
        function totalprice(thisObj){
            
            var qty = thisObj.value;
           var inqty = parseInt(qty);
            var trObj = thisObj.parentElement.parentElement; //tr
            
            var priceval = trObj.querySelector(".price").innerHTML;
             var price = parseInt(priceval);
             var totalprice = qty*price;
             trObj.querySelector(".amount").innerHTML=totalprice;
            //  var quantitysec = document.getElementsByClassName("quantity");
             
             var stock = thisObj.getAttribute("stock-id");
            
             
             if(stock<inqty){
                
                 alert('Your quantity  is more then stock and the stock is only ' +stock + '\nplease select less quantity');
               
                 thisObj.value = stock;
                 

             }
             
             
             calculateGrandTotal();

        }

        function calculateGrandTotal(){
            
            var totalAmounts = document.getElementsByClassName("amount");
             
           
            var total=0;
            for(var i = 0; i < totalAmounts.length; i++ ){
                total = total + parseInt(totalAmounts[i].innerHTML);
            }
              
           
             
            //  var subtotal = bodyObj.querySelector(".subtotal").innerHTML;
            document.getElementById("subtotal").innerHTML = total ;
             document.getElementById("cartAmt").value= total;
             
               document.getElementById("cartamt").value=total;
              var txAmt = 0.13*total;
             document.getElementById("txAmt").value=txAmt;
             
            var esewaTotal = total+txAmt;
              document.getElementById("tAmt").value=esewaTotal;;
             
        }

        function checkout(){
            var cartdataObject = document.getElementsByClassName("quantity");
            var arrayCartData = new Array();
            for(var i=0; i< cartdataObject.length; i++){
                var cartData =  new Object();
                cartData.id = cartdataObject[i].getAttribute("data-id");
                cartData.quantity = cartdataObject[i].value;
                arrayCartData.push(cartData);
            }
              cartData.cartAmt=document.getElementById("cartAmt").value;
            var jsonCartData = JSON.stringify(arrayCartData);
            

            
            var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        // document.getElementById("thiss").innerHTML = this.responseText;
                        console.log("sucess");
                        console.log(jsonCartData);
                       

                    }
                };
                // xhttp.open("POST", "cartproceed.php", true);
                xhttp.open("GET" ,"cartproceed.php?q="+ jsonCartData, true);
                // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send();
                var binod = 'http://localhost/Souvenir/project%20file/cartproceed.php?q='+jsonCartData;
                window.location.href= binod;
            // let xhr = new XMLHttpRequest();

            // xhr.open('POST', 'cartproceed.php', true);
            // xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            // var postdata = "str=" + jsonCartData;
            // xhr.send(postdata);

            // xhr.onload = function() {
            //     if (xhr.status == 200) {
            //         console.log('ture');
            //         // document.getElementById('words').innerText = xhr.response
            //     }
            // }

            
            }
                
    </script>
     <title>Souvenir</title>
</head>
<body onload="calculateGrandTotal()">
    
    <section id="header">
        
        <a href="#"> <img class="logo" src="logo.png" width="200px" height="100px"></a>
        <div>
            <ul id="nav-bar">
              <li><a href="project.php">Home</a></li>
              <li><a href="product.php"  >Products</a></li>
              
               <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="signup.php">SignUp</a></li>
              <li id="lg-bag"><a href="cart.php" class="active" ><i class="far fa-shopping-bag"></i></a></li>
              <li><a href="logout.php">logout</a></li>
              <a href="#" id="close"><i class="far fa-times"></i></a>

</ul>
</div>
<div id="mobile">
<a href="cart.php" class="active"><i class="far fa-shopping-bag"></i></a>
<i id="bar" class="fas fa-outdent"></i>
</div>
    </section>
  <section id="cart" class="section-p1">
    
<table width="100%" border="1px">
    <thead>
        <tr>
            <td>Remove</td>
            <td>Image</td>
            <td>Product name</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Subtotal</td>
        </tr>
    </thead>
    <?php
 
if(isset($_SESSION['cart'])){
   
   
    foreach($_SESSION['cart'] as $key=>$value){

    
        ?>
        <tr>
            
            <td >
                <a href="carthandler.php?action=delete&id=<?php echo $value["p_id"]?>" ><button id="remove_btn"><i id="trash" class="fa fa-trash fa-2x "aria-hidden="true"></i>
            <i  id="cross"class="fa fa-times fa-2x " aria-hidden="true"></i>
            


</button>
    </a></td>
            <td><img src="<?php echo $value["image"]?>" alt="img" width="50px" height="50px"></td>
<td> <?php echo $value["name"]?></td>
<td class="price"> <?php echo $value["price"]?></td>
<td><input  name="quantity"type="number" class="quantity" min="1" max="100" data-id="<?php echo $value["p_id"]?> " stock-id="<?php echo $value["stock"]?> " value="1" onchange="totalprice(this);"></td>
<td class="amount"><?php echo $value["price"]?></td>

        </tr>
<?php
}
}
?>
</table>
  </section>
  <section id="cart-add" class="section-p1">
      <div id="sub-total">
          <form action="cartproceed.php" >
          <h3>Cart Total</h3>
          
          <table>
              <tr>
                  <td >Cart-subtotal</td>
                  <td id="subtotal"></td>
              </tr>
              <tr>
                <td>Shipping</td>
                <td>0(FREE)</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td ><input style="border: none" name="cartAmt" id="cartAmt" type="text" name="cartAmt"  readonly></td>
            </tr>
          </table>
          <button id="proceedbtn"class="normal" type="button" onclick="checkout();">Proceed</button>
          
    
          <br><br>
          </form>
          <div>
            
          <form action="<?=$esewa?>" method="Post" id="esewaform">
    <input value="" id="tAmt" name="tAmt" type="hidden">
    <input value="" id="cartamt" name="amt" type="hidden">
    <input value="" id="txAmt" name="txAmt" type="hidden">
    <input value="<?php echo $psc ?>" name="psc" type="hidden">
    <input value="<?php echo $pdc ?>" name="pdc" type="hidden">
    <input value="<?php echo $scd ?>" name="scd" type="hidden">
    <input value="<?php echo $pid ?>" name="pid" type="hidden">
    <input value="<?php echo $su ?>" type="hidden" name="su">
    <input value="<?php echo $fu ?>" type="hidden" name="fu">
    <input value="Pay With Esewa" class="normal" id="ebtn"  type="submit" style=" background-color: #266d1abb;
        color: #fff;
        padding: 12px 20px; 
       cursor:pointer;
       ">
    
    </form>
    
          </div>
          
      </div>
      
  </section>
    <?php include('footer.php');
    ?>
    
</body>
<script src="responsivebar.js"></script>
</html>