<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sneakers co.id</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ilmudetil.css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    body{
      overflow-x: hidden;
    }
    .hr{
    position: relative;
    text-align: center;
    top: 132px;}
    .hr p{
      margin-top: -10px;
    }
    
    .hr hr {
    width: 1200px;
    position: relative;
    left: -10px;
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.75), rgba(255, 255, 255, 0));
}
    .header {
    font-family: Bamq;
    text-align: left;
    padding-top: 7px;
    padding-left: 30px;
    font-size: 12px;
    height: 30px;
    color: white;
    background-color: grey;
  }
  .navbar-brand img{
    width: 110px;
    height: 50px;
  }
  .lol .card{
    border: 0px;
  }
  .card img{
    width: 200px;
    height: 200px;
  }
  .lol .card img:hover{
    transform: scale(1.3);
	transition-duration: 1s;
  }
  .card h5{
    margin-top: -40px;
    margin-bottom: 1px;
  }
  .card p{
    margin-bottom:4px;
    color: darkorange;
    font-weight: bold;
  }
.iki .container {
  position: relative;
  width: 28%;
  margin-left: -18px;
  margin-right: -18px;
  margin-top: 20px;
}


.iki .flip-card {
  background-color: transparent;
  width: 230px;
  height: 305px;
  perspective: 1000px;
}

.iki .flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
}

.iki .flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.iki .flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.iki .flip-card-front {
  color: black;
}

.iki .flip-card-back {
  background-color: whitesmoke;
  color: grey;
  transform: rotateY(180deg);
}

  .h tr {
    display: grid;
    list-style-type: none;
    grid-template-columns: repeat(3, auto);
    grid-template-rows: repeat(3, auto);
    position: relative;
    top: -20px;
}


.h tr td{
    color: rgb(0, 79, 116);
    text-align: center;
    font-family: Times New Roman;
    text-align: center;
}

.h tr td span {
    display: block;
    font-size: 1.4em;
    margin-top: -35px;
    color: rgb(14, 14, 14);
}

.h tr td img {
    height: 470px;
    width: 510px;
}
.j tr {
    display: grid;
    list-style-type: none;
    grid-template-columns: repeat(3, auto);
    grid-template-rows: repeat(3, auto);
    position: relative;
}

.j tr td{
    color: rgb(0, 79, 116);
    text-align: center;
    font-family: Times New Roman;
    text-align: center;
    width: 430px;
    height: 370px;
    border: 2px solid white;
    margin: 40px;
}
.j tr td:hover{
  transform: rotateY(90deg);
  transform: rotateX(90deg);
}

.j tr td span {
    display: block;
    font-size: 2em;
    margin-top: 8.5em;
    color:  whitesmoke;
    font-weight: bold;
    text-shadow: 0px 1px 3px black;
}
.step{
  width: 100%;
  height: 25em;
  background-color: rgb(34,34,38);
  padding-top: 5.5em;
}
.login{
  width: 100%;
  height: 16em;
  color: white;
}
.footer{
  width: 100%;
  height: 27em;
  background-color: rgb(34,34,38);
  padding-top: 5.5em;
}
.up{
  padding: 20px;
  width: 28em;
  height: 10em;
  position: relative;
  left: 55em;
}
  .up tr {
    display: grid;
    list-style-type: none;
    grid-template-columns: repeat(3, auto);
    grid-template-rows: repeat(3, auto);
    position: relative;
    top: -10px;
}


.up tr td{
    color: rgb(0, 79, 116);
    text-align: center;
    font-family: Times New Roman;
    text-align: center;
		margin: 5px;
		border: 5px solid white;
}

.up tr td img {
    height: 90px;
    width: 90px;
}
.ip{
  padding: 20px;
  width: 28em;
  height: 10em;
  position: relative;
  left: 20em;
}
  </style>
</head>
