<!doctype html>
<html lang="en">
  <head>
            <style>body {
        font: 15px/1.5 Arial, Helvetica, sans-serif;
        padding: 0;
        margin: 0;
        background-color: #f4f4f4;
        }

        .aaa{
        width: 80%;
        margin: auto;
        overflow: hidden;
        }
        .light{

        padding: 15px;
        background: #CFCFCF;
        color: #ffffff;
        margin-top: 10px;
        margin-bottom: 10px;
        }
        .dark{
        padding: 15px;
        background: #35424a;
        color: #ffffff;
        margin-top: 10px;
        margin-bottom: 10px;
        }

        ul{
        margin: 0;
        padding: 0;
        }

        div.tech {
        text-align: center;
        }
        div.dev {
        text-align: left;
        }
        header{
        background: #353637;
        color: #ffffff;
        padding-top: 30px;
        min-height: 70px;
        border-bottom: #32a0c2 3px solid;
        }

        header a{
        color: #ffffff;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 16px;
        }

        header li{
        float: left;
        display: inline;
        padding: 0 20px 0 20px;
        }

        header #blabla {
        float: left;
        }

        header #blabla h1{
        margin: 0;
        }

        header nav{
        float: right;
        margin-top: 10px;
        }

        header .pocetak, header .current a {
        color: #32a0c2;
        font-weight: bold;
        }

        header a:hover{
        color: #cccccc;
        font-weight: bold;
        }


        #bbb {
        min-height: 350px;
        background-image: url("code.jpg");
        background-color: #cccccc;
        text-align: center;
        color: #ffffff;
        }

        #bbb h1{
        margin-top: 100px;
        font-size: 55px;
        margin-bottom: 10px;
        }

        #bbb p{
        font-size: 20px;
        }

        #magazin {
        padding: 10px;
        color: #ffffff;
        background: #353637;
        }

        #magazin h1{
        float: left;
        }

        #magazin form {
        float: right;
        margin-top: 15px;
        }

        #magazin input[type="url"]{
        padding: 4px;
        height: 25px;
        width: 250px;
        }

        .button_1{
        height: 38px;
        background: #cccccc;
        border: 0;
        padding-left: 20px;
        padding-right: 20px;
        color: #353637;
        }

        #ccc{
        ;
        background-color: white;
        margin-top: 20px;
        }

        #ccc .box{
            
        float:left;
        text-align: center;
        width: 30%;
        padding: 10px;
        
        }


        footer{
        padding: 20px;
        margin-top: 20px;
        color: #ffffff;
        background-color: #32a0c2;
        text-align: center;
        }

        aside#strana {
        float: right;
        width: 30%;
        padding: 5px;
        }

        article#glavni-tekst{
        float: left;
        width: 65%;
        }

        aside#strana input, aside#strana textarea {
        width: 90%;
        padding: 5px;
        }

        ul#services li{
        list-style: none;
        padding: 20px;
        border: #cccccc solid 1px;
        margin-bottom: 5px;
        background: #32a0c2;
        }

        ul#services h3{
        border-bottom: #353637 solid 1px;
        }

        @media(max-width: 768px){
        header #branding,
        header nav,
        header nav li,
        #magazin h1,
        #magazin form,
        #boxes .box,
        article#main-col,
        aside#sidebar {
            float: none;
            text-align: right;
            width: 100%;
        }

        header {
            padding-bottom: 20px;
        }

        #aaa h1 {
            margin-top: 100px;
        }

        #magazin button {
            display: block;
            width: 100%;
        }

        #magazin form input[type="email"],
        .contact input,
        .contact textarea,
        .contact label{
            width: 100%;
            margin-bottom: 5px;
        }
        
        }

  






      </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>About us</title>
  </head>
  <body>
  <?php require 'Dijelovi/_header.php'; ?>
  
  
  
  <section id="bbb">
      <div class="aaa">
        <h2>O NAMA</h2>
        <p> Mi smo "Balkapp", online platforma zamišljena za okupljanje svih mladih i ambicioznih kodera balkana i našeg govornog područja, gdje će imati priliku međusobno razgovarati, postavljati probleme te iste i riješavati.

Cilj ovakve platforme je prije svega, približavanje IT svijeta maldim ljudima na našim prostorima te ujedno i okupljanje istih na jednom mjestu, gdje će besplatno moći koristiti određene sadržaje, razvijati nove ideje i projekte iz kojih će se jednog dana možda roditi ona koja će promijeniti svijet.
          
            
            
          
      </div>
    </section>

    <section id="magazin">
      <div class="aaa">
        <h4>Na sljedećem linku preuzmite našu viziju  </h4>
        <form action="">
          <a href="https://www.w3schools.com/html/default.asp">LINK</a>
      </div>
    </section>
     <div class="tech"> <h4>TEHNOLOGIJE</h4></div>

    <section id="ccc">
      <div class="aaa">
        <div class="box">
          <h4> Backend</h4>
          
          <p>Za backend koristimo PHP i njene frameworke, također koristimo i javascript, te u budućnosti Laravel.  </p>
          <h3><span style="color:blue;">Mihael Vasilj</span> </h3>
          <h4> Frontend <h4>
          <img class="rounded-circle" src=rsz_miha.jpg>
          <h5 href="#"> E-mail: mihael.vasilj@fpmoz.sum.ba </h5>
          
          
        </div>
        <div class="box">
          
        </div>
        <div class="box">
          <h3>Frontend</h3>
          <p>Za izgled stranice koristimo HTML, CSS i JavaScript, no također i Bootstrap, VueJS i Vuetify</p>
          <h3><span style="color:blue;">Tin Tomić </span> </h3>
          <h4> Backend </h4>
          <img  class="rounded-circle" src=rsz_tin.jpg>
          <h5 href="#"> E-mail: tin.tomic@fpmoz.sum.ba </h5>
          <hr>
          
          
        
        </div>
      </div>
    </section>

    <hr>
    <hr>
    <hr>
    
    <?php include 'Dijelovi/_footer.php'; ?>
    
     

        

    
    

    
  



        

        
        

    
      

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>