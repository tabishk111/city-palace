<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="index.css" type="text/css">
    
    <link rel="icon" type="image/x-icon" href="Icon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    
    
    <title>City Palace</title>
</head>


<body>
    <nav>
        <img src="Logo.png" alt="" class="logo" height="70" width="auto">

        <input type="checkbox" id="hamburger-toggle">
        <label for="hamburger-toggle" class="hamburger">
            <i class="fas fa-bars" id="iconopen" onClick="buttonopenclose()"></i>
            <i class="fas fa-times" id="iconclose" onClick="buttonopenclose()"></i>
        </label>

        <ul class="nav__list">
            <li class="navbar__item"><a href="index.php" class="navbar__itemLink">Hotel</a></li>
            <li class="navbar__item"><a href="rooms.php" class="navbar__itemLink">Rooms</a></li>
            <li class="navbar__item"><a href="dining.php" class="navbar__itemLink active">Dining</a></li>
            <li class="navbar__item"><a href="login.php" class="navbar__itemLink">Book Your Stay</a></li>
            <li class="navbar__item"><a href="contact.php" class="navbar__itemLink">Contact Us</a></li>
            
        </ul>
    </nav>


    <!-- Carousel -->
    <div class="carousel">
        <!-- Carousel Images -->
        <div class="carousel__imagesTransition">
            <img name='slide' class="carousel__image" id="#gallery"/>
        </div>

        <!-- Left Button -->
        <a class="carousel__leftButton">
            <span id="left" class="carousel__leftButtonSymbol">
                <img src="LeftIcon.png" alt="Left Icon" height="50" width="auto">
            </span>
        </a>

        <!-- Right Button -->
        <a class="carousel__rightButton">
            <span id="right" class="carousel__rightButtonSymbol">
                <img src="RightIcon.png" alt="Right Icon" height="50" width="auto">
            </span>
        </a>
    </div>
    
    <div class="menu">
        <!-- Ḥeading -->
        <h2 class="menu__heading">MENU</h2>
        <img src="Images/design.png" alt="Design" class="menu__image">
    </div>
    
    <div class="menurow">
        <div class="rowsectiononemenu">
            <div class="menucard">
                <img src="Images/menu1.jpg" alt="" class="m__image">
                <div class="card__details">
                </div>
            </div>
        </div>

        <div class="rowsectiononemenu">
            <div class="menucard">
                <img src="Images/menu2.jpg" alt="" class="m__image">
                <div class="card__details">
                </div>
            </div>
        </div>

    </div>

    <div class="online_food_delivery_box animated bounceInDown" id="input_box">
        <h3> Food Order <small> Kindly <a href="login.php">login</a> to order </small> </h3><br>
        <form action="" method="get">
            <div class="form-group">
                <select class="form-control" id="food_item" name="food_item" onchange="finalCost()">
                    <option value="0"> Select Food Item ... </option>
                    <option value="20"> Vegetable Samosa </option>
                    <option value="25"> Lamb Samosa </option>
                    <option value="149"> Eggplant Pakoda </option>
                    <option value="199"> Chicken pakoda</option>
                    <option value="125"> Vegetable Pakoda </option>
                    <option value="19"> Mango Pesarel  </option>
                    <option value="25"> Butter Naan </option>
                    <option value="20"> Garlic Naan </option>
                    <option value="30"> Keema Naan </option>
                    <option value="25"> Cheese Naan </option>
                    <option value="499"> Chicken Tandoori </option>
                    <option value="349"> Tandoori Shrimp </option>
                    <option value="399"> Tandoori Beef </option>
                    <option value="299"> Vegetable Tandoori</option>
                    <option value="799"> Tandoori Mix Grill </option>
                    <option value="500"> Vegetable Biryani </option>
                    <option value="700"> Chicken Biryani </option>
                    <option value="600"> Paneer Biryani </option>
                    <option value="999"> Lamb Kashmiri </option>
                    <option value="1199"> Lamb Danshik </option>
                    <option value="1199"> Lamb Broccoli </option>
                    <option value="1299"> Lamb Vindaloo </option>
                    <option value="899"> Lamb Achari </option>
                    <option value="975"> Beef Vindaloo </option>
                    <option value="999"> Beef Broccoli </option>
                    <option value="1199"> Beef Shai Korma </option>
                    <option value="1099"> Beef Saagwala </option>
                    <option value="999"> Chicken Kashmiri </option>
                    <option value="899"> Chicken Makhani </option>
                    <option value="1099"> Chicken Vindaloo </option>
                    <option value="1299"> Butter Chicken </option>
                    <option value="999"> Saag Paneer Curry </option>
                    <option value="799"> Saag Aloo Curry </option>
                    <option value="599"> Vegetable Curry </option>
                    <option value="799"> Eggplant Curry </option>
                    <option value="99"> Saffron Kulfi </option>
                    <option value="49"> Gulab Jamun </option>
                    <option value="99"> Pistachio Kulfi </option>
                    
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" id="special_item" onchange="finalCost()">
                    <option value="0"> Want Special Item ?</option>
                    <option value="100"> Yes </option>
                    <option value="0"> No </option>
                </select>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="food_quantity" placeholder="Quantity" onkeyup="finalCost()" >
            </div>
            <div class="form-group">
                <select class="form-control" id="delivery_type" onchange="finalCost()">
                    <option value="0"> Delivery Type - </option>
                    <option value="0"> Normal </option>
                    <option value="100"> Emergency </option>
                </select>
            </div><br>
            <div class="form-group">
                <label>Total Cost (&#8377) : </label>
                <span id="result" style="background-color: #8c7269;color: #fff;padding: 6px 70px;font-weight: 600;font-size: 18px; margin-left: 10px;border-radius: 5px;">0</span>
                <input type="submit" value="ORDER NOW" class="btn btn-primary" style="float: right" id="ok" onclick="ok_result()">
            </div>
        </form>
    </div>

    <div class="result_box animated zoomIn" style="display: none;" id="okResult">
        <h3 class="result_box_text" id="ok_text"> Your order is successfully submitted. Please keep patience, we will come to you soon.<br><br><span> --  Thank You  -- </span></h3><br>
    </div>


    <!-- Foooter -->
    <div class="footer">

        <!-- Footer Logo -->
        <div class="footer__image">
            <a href="index.php" class="footer__link">
                <img src="Logo2.png" alt="City Palace Logo" class="footer__logo"/> 
                <img src="Images/design2.png" alt="Design" class="welcome__image">
            </a>
        </div>

        <!-- Social Media -->
        <ul class="footer__socialMedia">
            <li class="footer__socialMediaItems">
                <a href="" class="socialMedia__Links" target="_blank" rel="noreferrer">
                    <i class="fab fa-twitter fa-2x"></i>
                </a>
            </li>
            <li class="footer__socialMediaItems">
                <a href="" class="socialMedia__Links" target="_blank" rel="noreferrer">
                    <i class="fab fa-github fa-2x"></i>
                </a>
            </li>
            <li class="footer__socialMediaItems">
                <a href="" class="socialMedia__Links" target="_blank" rel="noreferrer">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
            </li>
            <li class="footer__socialMediaItems">
                <a href="" class="socialMedia__Links" target="_blank" rel="noreferrer">
                    <i class="fab fa-linkedin-in fa-2x"></i>
                </a>
            </li>
        </ul>

        <!-- Copyright Information -->
        <div class="copyright">
            <div class="copyright__info">
                © 2021 Copyright: 
                <a href="index.php" class="copyright__infoLink"> CityPalace</a>
            </div>
        </div>
    </div>

    <script src="dining.js"></script>
</body>
</html>
<?php $login=false;
include "dbconnect.php";
$method=$_SERVER['REQUEST_METHOD']; 
if($method=='GET')
{
  $email=$_POST['food_item'];
  echo $email;
}?>