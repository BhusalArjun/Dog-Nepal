<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <title>Dogs Nepal</title>
</head>
<body>
        <!-- Landing Area -->
        <section id="landing__area" class="container__center">
            <nav class="center__row">
                <h1 class="logo"> 
                 Dogs Nepal</h1>
                <ul class="center__row">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">How to help</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="adminentry/login.php">Admin-Login</a></li>
                </ul>
            </nav>
            <div class="landing__content center__row">
                <div class="landing__info align__left">
                    <h1>
                        Helping animals. <br>
                        Saving lives.
                    </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error aut ea fuga cum? Odit, sed culpa harum laborum excepturi quibusdam!</p>
                    <!-- <button><a href="#/">I want to join</a></button> -->

                </div>
                <div class="image__pet"></div>
            </div>
        
        </section>

        <!-- HELP  -->
        <section id="help" class="container__center">
            <h1>Find out how to help the dogs</h1>
            <div class="help__cards--container center__row">
                <div class="help__card container__center">
                    <span class="card__title">Adopting</span>
                    <h3>Give the  you love a home</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere quam ex neque.</p>
                    <div class="card__link container__center">
                        <a href="Adoption.html">Adopt Now</a>
                    </div>
                </div>
                <div class="help__card container__center">
                    <span class="card__title">Lost Dog</span>
                    <h3>Help the Dogs Care Foundation</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere quam ex neque.</p>
                    <div class="card__link container__center">
                        <a href="#">Find Lost Dog</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery -->
        <section id="gallery">
            <img src="https://vapingdaily.com/wp-content/uploads/2019/03/Man-with-labrador-outdoors.jpg" class="img__gallery" id="img-1">
            <img src="https://www.thesprucepets.com/thmb/SQspUyB0fpa6FaB9OeAOxyoBo8w=/4090x2721/filters:fill(auto,1)/cat-playing-with-toys-628829142-5911ee5c5f9b58647098d81c.jpg" class="img__gallery" id="img-2">
            <img src="https://media.npr.org/assets/img/2020/03/27/dogs-coronavirus-7ddabfde75121f5020c307e134cb60dfa746fe1c-s800-c85.jpg" class="img__gallery" id="img-3">
            <img src="https://images.squarespace-cdn.com/content/v1/5246fb63e4b0240948a40520/1440452356949-6A285K6C39FE7F8Y2C37/ke17ZwdGBToddI8pDm48kBtpJ0h6oTA_T7DonTC8zFdZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PIWkiAYz5ghgEgSGJuDQ4e1ZKXpRdhEMT7SgthRpD0vyIKMshLAGzx4R3EDFOm1kBS/image-asset.jpeg" class="img__gallery" id="img-4">
            <img src="https://i0.wp.com/www.techdigest.tv/wp-content/uploads/2014/11/spotify-cat-people.jpg?ssl=1" class="img__gallery" id="img-5">
            <img src="https://i1.wp.com/movingtips.wpengine.com/wp-content/uploads/2019/08/birds-transporting.jpg?fit=1024%2C684&ssl=1" class="img__gallery" id="img-6">
            <img src="https://i.pinimg.com/originals/01/f3/11/01f31165f552ca9b5ac6857f6c59fa09.jpg" class="img__gallery" id="img-7">
            <img src="https://www.bluecross.org.uk/sites/default/files/d8/assets/images/108048.jpg" class="img__gallery" id="img-8">
            <img src="https://www.petsourcing.com/wp-content/uploads/2018/12/waht-is-the-most-popular-pets-in-Japan-696x602.jpg" class="img__gallery" id="img-9">
        </section>

        <!-- Contact -->
        <form>
            <div class="form__row">
                <input type="text" id="name">
                <label for="name">First Name</label>
            </div>
            <div class="form__row">
                <input type="text" id="last-Name">
                <label for="last-Name">Last Name</label>
            </div>
            <div class="form__row">
                <input type="email" id="email">
                <label for="email">Email</label>
            </div>
            <div class="form__row">
                <input type="number" id="phone">
                <label for="phone">Phone</label>
            </div>
            <div class="form__row">
                <textarea  id="textarea" cols="30" rows="10" placeholder="Write your message here"></textarea>
            </div>
            <button type="submit">Send message</button>
        </form>

        <footer>
            <div class="footer__cont center__row">
                <p>2021 &DogsNepal</p>
            </div>
        </footer>

</body>
</html>