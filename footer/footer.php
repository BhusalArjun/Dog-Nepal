<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Footer</title>
</head>
<style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  background: #fcfcfc;
  font-family: sans-serif;
}
footer{
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  height: 20;
  width: 100vw;
  padding-top: 50px;
  color: #fff;
  width: 100%;
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
  width: 100%;
  padding: 10px;
  padding-bottom:20px;
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
<body>
    <footer>
     <div class="footer-bottom">
            <h3>Dogs Nepal</h3>
        <p>copyright &copy; 2022 <a style="color:#fff;" href="#">dognepal</a>  </p>
        </div>
    </footer> 
</body>
</html> 