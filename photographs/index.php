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

      body,html{
        margin:0;
        padding:0;
        }

      #menu {
        position: fixed;
        top: 30px;
        left: 20px;
        width: 170px;
      	text-align: left;
        }

      #menu img:hover {
        opacity: 0.8;
        filter:alpha(opacity=80); 
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
  
    <table align="center" style="width:100%;height:100%;" border="0">
      <tbody>
        <tr align="center" valign="middle">
       
          <td align="center" valign="middle"><img src="1.jpg" onload="preloader();" alt="" style="margin-left:75px; margin-right: 75px;"></td>
          <td align="center" valign="middle"><img src="2.jpg" onload="preloader();" alt="" style="margin-left:75px; margin-right: 75px;"></td>
          <td align="center" valign="middle"><img src="3.jpg" onload="preloader();" alt="" style="margin-left:75px; margin-right: 75px;"></td>
          <td align="center" valign="middle"><img src="4.jpg" onload="preloader();" alt="" style="margin-left:75px; margin-right: 75px;"></td>
          <td align="center" valign="middle"><img src="5.jpg" onload="preloader();" alt="" style="margin-left:75px; margin-right: 75px;"></td>
          <td align="center" valign="middle"><img src="6.jpg" onload="preloader();" alt="" style="margin-left:75px; margin-right: 75px;"></td>
          <td align="center" valign="middle"><img src="7.jpg" onload="preloader();" alt="" style="margin-left:75px; margin-right: 75px;"></td>
          <td align="center" valign="middle"><img src="8.jpg" onload="preloader();" alt="" style="margin-left:75px; margin-right: 75px;"></td>
          <td align="center" valign="middle"><img src="9.jpg" onload="preloader();" alt="" style="margin-left:75px; margin-right: 75px;"></td>
          <td align="center" valign="middle"><img src="10.jpg" onload="preloader();" alt="" style="margin-left:75px; margin-right: 75px;"></td>
          <td align="center" valign="middle"><img src="11.jpg" onload="preloader();" alt="" style="margin-left:75px; margin-right: 75px;"></td>
          <td align="center" valign="middle"><img src="12.jpg" onload="preloader();" alt="" style="margin-left:75px; margin-right: 75px;"></td>
          <td align="center" valign="middle"><img src="13.jpg" onload="preloader();" alt="" style="margin-left:75px; margin-right: 75px;"></td>
          <td align="center" valign="middle"><img src="14.jpg" onload="preloader();" alt="" style="margin-left:75px; margin-right: 75px;"></td>
          <td align="center" valign="middle"><img src="15.jpg" onload="preloader();" alt="" style="margin-left:75px; margin-right: 75px;"></td>
          <td align="center" valign="middle"><img src="16.jpg" onload="preloader();" alt="" style="margin-left:75px; margin-right: 75px;"></td>

        </tr>
      </tbody>
    </table>

    <div id="menu">
      <a href="../index.php"><img src="../home.gif"></a>
    </div>

  </body>
</html>


