
<DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name=”keywords” content=”barndoktor, privatdoktor, privat, doktor, behandling” />
    <title>Doktor Anna</title>
    <link rel="shortcut icon" href="img/favicon-20160225122132866.ico"/>
    <link rel="bookmark" href="img/favicon-20160225122132866.ico"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script>
      $(document).ready(function(){

        var trigger = $('.nav a'),
            container = $('#content');

        trigger.on('click', function(){

          var $this = $(this),
            target = $this.data('target');

          container.load(target + '.php');

          return false;
        });
      });
    </script>


  </head>
  <body>
    <div>



<!-- Row start -->
<div class="row centered unselectable">


    <div class="nav navibar whitebg margintop5 marginbottom2">

  <img class="logo col-md-6" src="img/loggav2.png" alt="Logo" ></img>

<!-- Navbar -->
<div class="col-md-6 navfx">

  <div class="row selector">


      <a href="#" title="Boka" class="current col-md-4 nav-tab"  type="button" data-target="boka"><h3>Boka tid</h3></a>

        <a href="#" title="Avhandling" class= "col-md-4 nav-tab"  type="button" data-target="avhandling"><h3>Avhandling</h3></a>

      <a href="#" title="Forskning" class= "col-md-4 nav-tab"  type="button" data-target="forskning"><h3>Min Forskning</h3></a>
</div>

</div>

<!-- Navbar END -->
</div>

</div>
<!-- ROW END -->
<div class="nav row navibar">
<div id="mobile" class="unselectable col-sm-12 ">
  <div id="mobileheader ">
    <div id="mobilenav">
    <h1 class="white open ">Meny</h1>
      <a class="menu-trigger ">
  <span> Menu </span>
</a>


<div id="menu-open" >
<ul id="menu-mobile" >

  <li><a href="#" data-target="boka"><span></span>Boka tid</a></li>
      <li><a href="#" data-target="avhandling"><span></span>Avhandling</a></li>
          <li><a href="#" data-target="forskning"><span ></span>Min Forskning</a></li>

</ul>


</div>

    </div>
  </div>
</div>
</div>
</div>


    <!-- Content START -->
    <div id="content">
      <?php include('boka.php'); ?>
    </div>
<!-- Content END -->

<!-- Footer -->
    <div class="footer col-md-12">




<div class="row">
<div class="col-md-3"></div>
  <div class="col-md-6">
            <div class="row">
                <section class="col-xs-12 col-md-4">
                    <i class="glyphicon glyphicon-globe" ></i>
                    <p>Brogränd 17, 831 31 Östersund

     </p>
                </section>

                 <section class="col-xs-12 col-md-4">
    <i class="glyphicon glyphicon-earphone" ></i>
                <p>076-8384763</p>
                </section>

                 <section class="col-xs-12 col-md-4">
    <i class="glyphicon glyphicon-envelope" ></i>
                <p>anna@doktoranna.se</p>
                </section>

</div>


<div class="row">
        <div id="minicredits" class="credits col-md-4">
        <p id="minicopy" class="copy"> Copyright © <script type="text/javascript">
        var d = new Date()
        document.write(d.getFullYear())
        </script> doktoranna.se </p>

  </div>
    <div class="col-md-4"></div>
  <div id="minicred" class="col-md-4 credits ">
    <p>  Webpage made by <a href="https://knutmonason.github.io" target="_blank"> Knut Monason </a> </p>
        </div>
        </div>
      </div>

<div class="col-md-3"></div>


      </div>
    </div>
<!-- FOOTER END -->
</div>
<script src="js/addclassdesktop.js"></script>
<script src="js/addclassmobile.js"></script>
<script src="js/hamburgermenu.js"></script>
  </body>
</html>
