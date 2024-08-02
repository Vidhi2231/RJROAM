<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
    .container{
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
      .popup{
            width:350px;
            background:rgb(248, 248, 248);
            border-radius: 6px;
            position:absolute;
            top:0;
            left:50%;
            transform: translate(-50%,-50%) scale(.1);
            text-align: center;
            padding:0 30px 30px;
            color:#333;
           visibility: hidden;
            transition:  transform 0.4s, top 0.4s;
        }

.open-popup{
    visibility: visible;
    top:50%;
    transform: translate(-50%,-50%) scale(1);
     }

.popup img{
    width :100px;
    margin:-50px;
    border-radius: 50%;
    box-shadow: 0 2px 5px rbga(0 ,0 ,0 ,0.2);
  }

.popup h2{
font-size: 38px;
font-weight: 500;
margin:50px 0 10px;

}

.popup a{
    width:90%;
    margin-top: 30px;
    padding: 10px 0;
    background: #6fd649;
    color: #fff;
    outline: none;
    font-size:  18;
    border-radius:  4px;
    cursor :pointer;
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
}
.box{
    width: 400px;
    height: 300px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: #f2f2f2;
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
}
a{
    text-decoration: none;
    display: flex;
    justify-content: center;
    align-items: center;
}
.box button,a{
    width: 250px;
    height: 50px;
    margin: 20px;
    font-size: 18px;
    background-color:#01b3a7;
    color: black;
    cursor: pointer;
    text-align: center;
   transition: 0.15s ease-in-out;
}
button:hover,a:hover{
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
}
button a{
    text-decoration: none;
    color: black;
}
</style>
<body>
    <div class="container">
        <div class="box">
            <h2>Confirm to book</h2>
            <button type="button" onclick="openPopup()">YES</button>
            <a href="package.php">NO</a>
        </div>
        

        <div class="popup" id="popup">
            <img src="img/404-tick.png" alt="">
            <h2>Thankyou</h2>
            <p>Your Travel booking from RjRoam has been Confirmed</p>
            <a href="index.php">OK</a>
        </div>
    </div>
    <script>
        let popup=document.getElementById("popup");
                
                function openPopup(){
                popup.classList.add("open-popup")}
                
                function closePopup(){
                popup.classList.remove("open-popup")
                }
              </script>
    
</body>
</html>