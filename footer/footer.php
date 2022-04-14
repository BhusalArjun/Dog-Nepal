<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="footer\footerstyle.css?v=<?php echo time(); ?>">
    <title>Footer</title>
    <style>
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
footer{
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgb(213, 133, 111);
  height: 30;
  width: 100vw;
  padding-top: 40px;
  color: #fff;
}

.footer-content{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  text-align: center;
}


.footer-content h3{
  font-size: 2.1rem;
  font-weight: 500;
  text-transform: capitalize;
  line-height: 3rem;
}

.footer-content p{
  max-width: 500px;
  margin: 10px auto;
  line-height: 28px;
  font-size: 14px;
  color: #cacdd2;
}


.footer-bottom{
  background: #F26419;
  width: 100vw;
  padding: 20px;
  padding-bottom: 40px;
  text-align: center;
  bottom: 0;
}


.footer-bottom p{
  /* float: left; */
  font-size: 14px;
  word-spacing: 2px;
  text-transform: capitalize;
  text-align: center;
}

.footer-bottom p a{
 color:#44bae8;
 font-size: 16px;
 text-decoration: none;
}

.footer-bottom span{
   text-transform: uppercase;
   opacity: .4;
   font-weight: 200;
}
    </style>
</head>
<body>
    <footer>
        <!-- <div class="footer-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, sit.</p>        
        </div>
    -->
     <div class="footer-bottom">
            <h3>Dogs Nepal</h3>
        <p>copyright &copy; 2022 <a style="color:#fff;" href="#">dognepal</a>  </p>
        </div>
    </footer> 
</body>
</html> 