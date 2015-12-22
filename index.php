<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Sofia de Guzman</title>

    <style type="text/css">

      a:link {
        color:#444;
        text-decoration:none;
      }
      a:visited {
        color:#444;
        text-decoration:none;
      }
      a:hover {
        color:#000;
        text-decoration:none;
      }

      img {
        border: 0px;
      }

      body,html {
        margin:0;
        padding:0;
        color: #fff;
      }

      #menu {
        position: absolute;
        top: 40px;
        right: 50px;
        width: 170px;
        text-align: left;
      }

      #submenu img:hover{
        opacity: 0.8;
        filter:alpha(opacity=80); 
      }

      #mailImg {
        width: 157px;
        height: 27px;
        background: url('sofia.png');
      }

      #mailImg:hover {
        width: 200px;
        height: 27px;
        background: url('sofia-over.png');
      }

      .bg {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-image: url('http://sofiadeguzman.com/bg.jpg');
        background-repeat: repeat;
        background-position: right bottom;
      }

      @media screen and (min-width: 1024px) { 
        /* Specific to this particular image */

        .bg {
          background-size: 100%;
        }
      }

      @media screen and (max-width: 1024px) and (min-width: 568px) { 
        /* Specific to this particular image */

        .bg {
          background-size: 175%;
        }
      }

      @media screen and (max-width: 568px) { 
        /* Specific to this particular image */

        .bg {
          background-size: 225%;
        }
      }

    </style>

    <script type="text/javascript">

    function preloader() {
      if (document.images) {
        <?php
          //Image Preloader - PHP adds all files in folder
          $i=1;
          while(file_exists($i . '.jpg')) {
            echo 'var img' . $i . ' = new Image();' . "\r\n" ;
            echo 'img' . $i . '.src = "' . $i . '.jpg";' . "\r\n";
            $i++;
          }
        ?>
      }
    }  

    </script>
  </head>

  <body bgcolor="#ffffff">

    <div class="bg"></div>

    <div id="menu">
      <a href="mailto:sofia.deguzman@gmail.com"><div id="mailImg"></div></a>
      <div id="submenu">
        <a href="photographs/index.php?page=1"><img src="photographs.png" border="0" alt="info"></a> 
        <br>
        <a href="http://sofia-de-guzman.tumblr.com/"><img src="journal.png" border="0" alt="journal"></a>
        <br>
        <a href="info.php"><img src="info.png" border="0" alt="info"></a> 
        <br>
      </div> 
    </div>
  </body>
</html>
