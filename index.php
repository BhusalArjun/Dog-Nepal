<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <section id="landing__area">
   <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Dogs Nepal</label>
      <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="adminentry\login.php">Admin-login</a></li>
      </ul>
    </nav>
            <div class="landing__content ">
                
                <div class="landing__info ">
                    <h1>
                        Helping animals.<br> 
                        Saving lives.
                    </h1>
                    <p>A dog is the only thing on earth that loves you more than he loves himself.The bond with a true dog is as lasting as 
                      the ties of this earth will ever be.Every human should not buy a dog but rescue in need and free him from the sufferings
                       and give him love, care, and shelter.</p>
                </div>
                <div class="image__pet"></div>
            </div>
        </section>
        <section id="help" >
            <h1>Find out how to help the dogs</h1>
            <div class="help__cards_container">
                <div class="help__card ">
                    <span class="card__title">Adopting</span>
                    <h3>Click here to donate and adopt the dog</h3>
                    <p>Saving one dog will not change the world, but surely for that one dog, the world will change forever.</p>
                    <div class="card__link ">
                        <a href="Adoption\adopt.php">Adopt Now</a>
                    </div>
                </div>
                <div class="help__card ">
                    <span class="card__title">Lost Dog</span>
                    <h3>Click here to find lost dog</h3>
                    <p>Dogs are better than human beings because they know but do not tell.</p>
                    <div class="card__link ">
                        <a href="lostdog\lostdog.php">Find Lost Dog</a>
                    </div>
                </div>
            </div>
        </section>
        <?php require 'footer\footer.php' ?>
  </body>
</html>