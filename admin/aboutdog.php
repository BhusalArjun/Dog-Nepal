<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="adminDashboard.css">
        <style>
            .about{
                margin:2rem;
            }
        </style>
    </head>
    <body>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Dogs Nepal</label>
            <ul>
                <li><a  href="../index.php">Home</a></li>
                <li><a href="../Adoption/adopt.php">Adopt Dog</a></li>
                <li><a href="../lostdog/lostdog.php">Lost Dog</a></li>
                <li><a class="active" href="#">About</a></li>
                <li><a href="../adminentry/login.php">Admin Login</a></li>
            </ul>
    </nav>
    <div class="about">
    <h1>Introduction</h1>
      <p>Every year, more than 1000 street dogs die in Nepal from illness, diseases and accidents. Proper medical treatment, population control and creating healthy environment are the only solutions for sustainable street dog management. This website plays a role to help, where the people can upload such street dogs and can be protected from such situation in Nepal.   <br>The Dog’s Nepal is Web based application which provide platform for people to donate, adopt and find forever homes for stray and abandoned puppies and dogs in Nepal. Every day, many dogs lost their way home and there are so many dogs abandoned by owners. These website aims to find their owners and reunite the family. Many dog in a shelter is waiting for love and care from human side. There exist many shelters where different kinds of dogs live and wait for their future owners. Thus, any person can make the life of those dogs better showing the own mercy to homeless dogs through their adoption. The number of euthanized dogs could be reduced if more people adopted dogs instead of buying them. </p>
    <h1>Problem Statement</h1>
     <p>•	There are some people who cannot take care of their dog due to their busy schedule. So, such type of people can upload their dog as a donation on this website by giving full information with image of their dog and the people who want dog can adopt.<br>
    •	We see the abandoned puppies and dogs in streets that are really in search of home to live and need love. The other people can capture the image of such dog with information and proper location that, where they have found out and the people who want dog can adopt.<br>
    •	If someone dog is lost, they can put their dog image with full information and by rewarding prize in website. The other people who have seen or found that dog can message.<br>
    •	Most dogs have a reputation of being aggressive that roam around the streets and are taken by the animal control because of their wild behavior. Therefore, our project has focused on presenting the user with each dog’s personality descriptions to gain the user’s interest to adopt the dog.<br>
    </p>   
    <h1>Objectives</h1>
    <p>
    Some of the objectives of this project are:<br>
    •	To make easy to donate the dog,<br>
    •	To make easy to adopt the dog,<br>
    •	To post their lost dog.<br>
    </p>
    <h1>Scope</h1>
    <p>Talking about Scope, there is website or app for dog donation, adoption, and finding lost dog like Lost Dog rescue, Dogs up for adoption etc but it has not been used by the Nepalese people. We can’t find any Nepalese people posting in such a website or app. But they are posting in facebook page and some people are posting by making flyer and we see rarely that some people are complaining in police station. <br>Dogs’ Nepal will be proper and genuine website for Nepalese people. The people can post stray and abandoned puppies & dogs. So that the needed people can adopt and find dogs.</p>
      <?php include '../footer/footer.php'?>
    </body>
</div>
</html>