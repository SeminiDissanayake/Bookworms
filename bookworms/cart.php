<?php session_start();
if (!isset($_SESSION["username"]))
{
	header('Location:login.php');
}
?>
<section class="header">
    

<main id="main">
    <section class="section cart__area" style="border-bottom: 2px solid lightgray;">
        <div class="cart">
            <h1 style="font-size: 2.8rem; display:flex; padding-bottom:10px;  padding-left: 1rem;  text-shadow: 2px 2px 8px #cdff42"> MY CART
            </h1>
            <p style="font-size:medium; text-shadow: 2px 2px 8px #cdff42; border-bottom: 2px solid tomato; padding-left: 1rem;">
                Please select the quantity below..
            </p>
            <br>
            <div class="responsive__cart-area" style="background-color: rgb(248, 248, 230); ">
                <form class="cart__form">
                    <div class="cart__table">
                        <table width="100%" class="tables">
                            <thead>
                                <tr>
                                    <th>book</th>
                                    <th>NAME</th>
                                    <th>UNIT PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product__thumbnail">
                                        <a href="#">
                                            <img src="./Assets/Images/Products/Iphone/iphone6.jpeg" alt="">
                                        </a>
                                    </td>
                                    <td class="product__name">
                                        <a href="#">harry pother</a>
                                        <br>
                                        <small>White/6.25</small>
                                        <br><br>
                                    </td>
                                    <td class="product__price">
                                        <div class="price">
                                            <span class="new__price">250.99</span>
                                        </div>
                                    </td>
                                    <td class="product__quantity">
                                        <div class="input-counter">
                                            <div>
                                                <span class="minus-btn">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                                <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                <span class="plus-btn">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product__subtotal">
                                        <div class="price">
                                            <span class="new__price">250.99</span>
                                        </div>
                                    </td>
                                    <td class="remove__cart-item">
                                        <a href="#">
                                            remove&nbsp;<i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__thumbnail">
                                        <a href="#">
                                            <img src="./Assets/Images/Products/Iphone/iphone2.jpeg" alt="">
                                        </a>
                                    </td>
                                    <td class="product__name">
                                        <a href="#">Apple iPhone 11</a>
                                        <br><br>
                                        <small>White/6.25</small>
                                    </td>
                                    <td class="product__price">
                                        <div class="price">
                                            <span class="new__price">250.99</span>
                                        </div>
                                    </td>
                                    <td class="product__quantity">
                                        <div class="input-counter">
                                            <div>
                                                <span class="minus-btn">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                                <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                <span class="plus-btn">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product__subtotal">
                                        <div class="price">
                                            <span class="new__price">250.99</span>
                                        </div>
                                    </td>
                                    <td class="remove__cart-item">
                                        <a href="#">
                                            remove&nbsp;<i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__thumbnail">
                                        <a href="#">
                                            <img src="./Assets/Images/Products/Iphone/iphone3.jpeg" alt="">
                                        </a>
                                    </td>
                                    <td class="product__name">
                                        <a href="#">Apple iPhone 11</a>
                                        <br><br>
                                        <small>White/6.25</small>
                                    </td>
                                    <td class="product__price">
                                        <div class="price">
                                            <span class="new__price">250.99</span>
                                        </div>
                                    </td>
                                    <td class="product__quantity">
                                        <div class="input-counter">
                                            <div>
                                                <span class="minus-btn">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                                <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                <span class="plus-btn">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product__subtotal">
                                        <div class="price">
                                            <span class="new__price">250.99</span>
                                        </div>
                                    </td>
                                    <td class="remove__cart-item">
                                        <a href="#">
                                            remove&nbsp;<i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__thumbnail">
                                        <a href="#">
                                            <img src="./Assets/Images/Products/Iphone/iphone4.jpeg" alt="">
                                        </a>
                                    </td>
                                    <td class="product__name">
                                        <a href="#">Apple iPhone 11</a>
                                        <br><br>
                                        <small>White/6.25</small>
                                    </td>
                                    <td class="product__price">
                                        <div class="price">
                                            <span class="new__price">250.99</span>
                                        </div>
                                    </td>
                                    <td class="product__quantity">
                                        <div class="input-counter">
                                            <div>
                                                <span class="minus-btn">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                                <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                <span class="plus-btn">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product__subtotal">
                                        <div class="price">
                                            <span class="new__price">250.99</span>
                                        </div>
                                    </td>
                                    <td class="remove__cart-item">
                                        <a href="#">
                                            remove&nbsp;<i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                        <div class="cart-btns">
                            <div class="continue__shopping">
                                <a href="products.php">Continue Shopping</a>
                            </div>
                            <div class="check__shipping">
                                <input type="checkbox">
                                <span>Shipping(+7$)</span>
                            </div>
                        </div>

                        <div class="cart__totals">
                            <h3>Cart Totals</h3>
                            <ul>
                                <li>
                                    Subtotal
                                    <span class="new__price">250.99</span>
                                </li>
                                <li>
                                    Shipping
                                    <span>0</span>
                                </li>
                                <li>
                                    Total
                                    <span class="new__price">250.99</span>
                                </li>
                            </ul>
                            <a href="checkout.php">PROCEED TO CHECKOUT</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <!-- Facility -->
    <section class="facility section" id="facility">
        <div class="facility-package package">
            <div class="facility-box">
                <div class="facility-icon">
                    <i class="fas fa-plane"></i>
                </div>
                <p>FREE SHIPPING</p>
            </div>

            <div class="facility-box">
                <div class="facility-icon">
                    <i class="fas fa-credit-card"></i>
                </div>
                <p>100% MONEY BACK GUARANTEE</p>
            </div>

            <div class="facility-box">
                <div class="facility-icon">
                    <i class="far fa-credit-card"></i>
                </div>
                <p>MANY PAYMENT GATWAYS</p>
            </div>

            <div class="facility-box">
                <div class="facility-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <p>24/7 ONLINE SUPPORT</p>
            </div>
        </div>
    </section>
</main>


<?php require_once './Includes/footer.php' ?>