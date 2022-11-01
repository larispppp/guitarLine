<!DOCTYPE html>
<html lang="sl">

<head>
    <title>Guitar Line</title>
    <link rel="icon" type="image/x-icon" href="imgs/guitar.ico" />
    <link rel="stylesheet" href="receipt_style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <img id="bg" src="imgs/guitar-bckg.jpg" alt="">
    <div id="wrapper">
        <h1 style="margin-left: 10px;">Receipt
        </h1>

        <div id="Personal">


            <div class="cart">

                <div class="products">

                    <div class="product">
                        <?php
                        $radio_value = $_POST['guitarSelect'];
                        if ($radio_value == 'St') {
                            echo "<img src=\"imgs/strat.png\" alt=\"product\">";
                            echo " <div class=\"product-info\">
        
                            <h3 class=\"product-name\">Fender Player Stratocaster PF SRD</h3>
        
                            <h4 class=\"product-price\">€1,089.00</h4>
 
                        </div>
                                
                    </div>
        
        
                    </div>
            
                    <div class=\"cart-total\">
            
                    <p>
                    <span>Product</span>
                   <span>€1,089.00</span>
                </p>
            
                <p>
                    <span>Tax 2% DDV</span>
                    <span>€21.78</span>
                </p>
                <hr>
                <p>
                <span>Total Price</span>        
                <span>€1,110.78</span>

                </p>";
                        } else if ($radio_value == 'T-s') {
                            echo "<img src=\"imgs/tele.png\" alt=\"product\">";
                            echo " <div class=\"product-info\">
        
                            <h3 class=\"product-name\">Fender Player Telecaster</h3>
        
                            <h4 class=\"product-price\">€934.98</h4>
 
                        </div>
                                
                    </div>
        
        
                    </div>
            
                    <div class=\"cart-total\">
            
                    <p>
                    <span>Product</span>
                   <span>€934.98</span>
                </p>
            
                <p>
                    <span>Tax 2% DDV</span>
                    <span>€18.70</span>
                </p>
                <hr>
                <p>
                <span>Total Price</span>        
                <span>€953.68</span>

                </p>";
                        } else if ($radio_value == 'lp') {
                            echo "<img src=\"imgs/lp.png\" alt=\"product\">";
                            echo " <div class=\"product-info\">
        
                            <h3 class=\"product-name\">Gibson Les Paul Standard 50s HCS</h3>
        
                            <h4 class=\"product-price\">€1999.99</h4>
 
                        </div>
                                
                    </div>
        
        
                    </div>
            
                    <div class=\"cart-total\">
            
                    <p>
                        <span>Product</span>
                       <span>€1,999.99</span>
                    </p>
                
                    <p>
                        <span>Tax 2% DDV</span>
                        <span>€39.90</span>
                    </p>
                    <hr>
                    <p>
                    <span>Total Price</span>        
                    <span>€2,039.89</span>
    
                    </p>";
                        } else if ($radio_value == 'offset') {
                            echo "<img src=\"imgs/jag.png\" alt=\"product\">";
                            echo " <div class=\"product-info\">
        
                            <h3 class=\"product-name\">Fender Vintera 60s Jaguar OT</h3>
        
                            <h4 class=\"product-price\">€1,079.00</h4>
 
                        </div>
                                
                    </div>
        
        
                    </div>
            
                    <div class=\"cart-total\">
                        
                        <p>
                            <span>Product</span>
                            <span>€1,079.99</span>
                        </p>
                        
                        <p>
                            <span>Tax 2% DDV</span>
                            <span>€21.60</span>
                        </p>
                        <hr>
                        <p>
                            
                            <span>Total Price</span>
            
                            <span>€1,100.60</span>
            
                        </p>";
                        }
                        ?>

                        <input type="submit" id="sub" name="sub" value="Finish Checkout" onclick="credits()" />
                        <script>
                            function credits() {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Purchase Successfull!',
                                    text: 'You have successfully purchased a guitar!',
                                    confirmButtonColor: "#00c9ff"
                                }).then((result) => {
                                    window.location.href = 'index.html';
                                })
                                event.preventDefault();
                            }
                        </script>

                    </div>


                </div>
            </div>
        </div>
</body>

</html>