<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-transform: capitalize;
            transition: all .2s linear;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 25px;
            min-height: 100vh;
            position: relative;

        }

        .container form {
            padding: 20px;
            width: 700px;
            background: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
        }

        .container form .row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .container form .row .col {
            flex: 1 1 250px;
        }

        .container form .row .col .title {
            font-size: 20px;
            color: #333;
            padding-bottom: 5px;
            text-transform: uppercase;
        }

        .container form .row .col .inputBox {
            margin: 15px 0;
        }

        .container form .row .col .inputBox span {
            margin-bottom: 10px;
            display: block;
        }

        .container form .row .col .inputBox input {
            width: 100%;
            border: 1px solid #ccc;
            padding: 10px 15px;
            font-size: 15px;
            text-transform: none;
        }

        .container form .row .col .inputBox input:focus {
            border: 1px solid #000;
        }

        .container form .row .col .flex {
            display: flex;
            gap: 15px;
        }

        .container form .row .col .flex .inputBox {
            margin-top: 5px;
        }

        .container form .row .col .inputBox img {
            height: 34px;
            margin-top: 5px;
            filter: drop-shadow(0 0 1px #000);
        }

        .container form .submit-btn {
            width: 100%;
            padding: 12px;
            font-size: 17px;
            background: #01b3a7;
            color: #fff;
            margin-top: 5px;
            cursor: pointer;
        }

        .container form .submit-btn:hover {
            background: #01b3a7;
        }
        #cls{
           width: 100%;
           padding-right: 20px;
        }
        #cls a{
            float: right;
            font-size: 22px;
        }
        #cls a:hover {
            color: #01b3a7;
            cursor: pointer;
        }

      
    #proceed{
        padding: 10px;
        background-color: #01b3a7;
        color: white;
        cursor: pointer;
    }
    #proceed:hover{
        box-shadow: 2px 2px 6px rgba(94, 93, 93, 0.304);
    }
</style>

</head>

<body>

    <div class="container">

            <div id="cls"><a href="package.php">
                    <h3>X</h3>
                </a></div>
            <form action="payment_con.php" method="post">

                <div class="row">

                    <div class="col">

                        <h3 class="title">billing address</h3>

                        <div class="inputBox">
                            <span>full name :</span>
                            <input type="text" placeholder="Enter Your Name" required name="name">
                        </div>
                        <div class="inputBox">
                            <span>email :</span>
                            <input type="email" placeholder="Enter Your Email" required name="email">
                        </div>
                        <div class="inputBox">
                            <span>address :</span>
                            <input type="text" placeholder="Enter Address" required name="address">
                        </div>
                        <div class="inputBox">
                            <span>city :</span>
                            <input type="text" placeholder="Enter State" required name="city">
                        </div>

                        <div class="flex">
                            <div class="inputBox">
                                <span>state :</span>
                                <input type="text" placeholder="Enter State" required name="state">
                            </div>
                            <div class="inputBox">
                                <span>zip code :</span>
                                <input type="text" placeholder="Enter Code" required name="zip">
                            </div>
                        </div>

                    </div>

                    <div class="col">

                        <h3 class="title">payment</h3>

                        <div class="inputBox">
                            <span>cards accepted :</span>
                            <img src="img/card_img.png" alt="">
                        </div>
                        <div class="inputBox">
                            <span>Name on card :</span>
                            <input type="text" placeholder="Enter Card Holder Name" required name="cardname">
                        </div>
                        <div class="inputBox">
                            <span>Credit card number :</span>
                            <input type="number" placeholder="1111-2222-3333-4444" required name="cardno">
                        </div>
                        <div class="inputBox">
                            <span>Exp month :</span>
                            <input type="text" placeholder="" required name="expm">
                        </div>

                        <div class="flex">
                            <div class="inputBox">
                                <span>Exp year :</span>
                                <input type="number" placeholder="" required name="expy">
                            </div>
                            <div class="inputBox">
                                <span>CVV :</span>
                                <input type="text" placeholder="" required name="cvv">
                            </div>
                        </div>

                    </div>

                </div>

                <input type="submit" id="proceed" value="proceed to checkout"  submit-btn">

            </form>

        </div>
      
       
</body>

</html>