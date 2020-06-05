 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact</title>
  <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="app.css" />
</head>
<body class="site-contact">
  <nav class="main-menu scrollable hidden" id="mainMenu">
    <div id="closeMenu" class="close-menu">
      Close menu <i class="fa fa-times"></i>
    </div>
    <ul id="yw0" class="nav nav-list">
      <li><a href="index.php">Start</a></li>
      <li><a href="About">Portofoliu</a></li>
      <li><a href="Nature">Clienti</a></li>
      <li><a href="About">Servicii</a></li>
      <li><a href="Nature">Cine suntem</a></li>
      <li class="active"><a href="Contact">Contact</a></li>
    </ul>
  </nav>
  <div class="column" id="main-menu-toggle">

    <div class="main-menu-toggle-container">
      <i class="fa fa-bars"></i>
    </div>
    <div id="help-menu-popup" class="blink">
      <img id="img-help" src="help-menu-en.png" alt="click fr menu" />
    </div>
  </div>

  <div class="page-header">
    <div class="container">
      <div class="table-cell">
        <img src="andra-logo.png" />
      </div>
      <div class="table-cell">
        <h1>Contact</h1>
        <p>
          We’re a friendly bunch and we’d love to hear from you.
        </p>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img class="contact-image" src="send-box.png" />
          <h3> Get in touch</h3>
          <p>Below you will find all the information you need to contact us in whatever way suits you best.</p>
          <div class="contact-info m-top-50">
            <a href="index.php">
              <div class="contact-name">Frontline softworks</div>
            </a>
            <div>
              <p>We make stuff work</p>
              <div>
                <ul>
                  <li><i class="fa fa-compass"></i><span> Slatioarei 1, 212<br />
                      720201 Suceava, Romania</span></li>
                  <li><i class="fa fa-mobile"></i><span> (+4) 0742 053399</span></li>
                  <li> <i class="fa fa-envelope"></i><span> contact@frontline.ro</span></li>
                </ul>
              </div>
              <p>Compania noastra este inregistrata la <b>Oficiul National al Registrului Comertului</b>
                cu numarul <b>J33/1125/2003</b>, cod de identificare fiscala<b> 15981323.</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-7 col-md-offset-1">
          <div>
            <h3> Send a message</h3>
            <p>Please be as detailed as possible about your needs, so we can give you quickest response.</p>
          </div>
          <form class="myform" id="myform" action="input.php" method="post">
            <div class="row">
              <div class="col-md-9 ">
                <div id="messages" class="bg-danger"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 myform-text " data-validate="Name is required">
                <input type="text" class="form-control" name="Name" id="Name" placeholder="NAME">
              </div>
              <div class="col-sm-4 myform-text">
                <input type="text" class="form-control" name="Email" id="Email" placeholder="EMAIL" data-error="Bruh, that email address is invalid">
              </div>
              <div class="col-sm-4 myform-text">
                <input type="text" class="form-control" name="Phone" id="Phone" placeholder="PHONE">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 myform-text">
                <textarea placeholder="MESSAGE" rows="10" class="form-control" name="Message" id="Message"> </textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4 col-lg-offset-8 col-sm-6 col-sm-offset-6 col-xs-12 myform-text">
                <button type="submit" name="submit" id="mybutton" class="btn-block btn btn-primary" value="send">SEND MESSAGE</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="myfooter">
          <div class="col-md-4">
            <h4>Frontline softworks</h4>
            <p>We are a team of young IT professionals that is trained to develop and manage any project from scratch. We are equally preoccupied to develop our own web, mobile and desktop projects, now professionally enhanced with a vast experience
              in
              the online and offline environment.</p>
          </div>
          <div class="col-md-3 col-md-offset-1">
            <h4>Contact</h4>
            <p>You want us to help you with your cool new project?</p>
            <blockquote class="cont">
              Call (+40)0754 625412<br />
              <a class href="http://sandbox.frontline.ro/bs3/">Send a e-mail</a>
            </blockquote>
          </div>
          <div class="col-md-3 col-md-offset-1">
            <div class="legal-link">
              <h4>Legal</h4>
              <a href="/en/terms-and-conditions">Terms and conditions</a><br />
              <a href="/en/privacy-policy">Privacy policy</a><br />
              <a href="/en/cookies-policy">Cookies</a><br />
            </div>
          </div>
        </div>
      </div>
      <hr />
      <div class="text-center container">
        <div class="social-media">
          <div class="row">
            <div class="col-md-12 py-5">
              <div class="mb-5 flex-center">
                <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter"></i></a>
                <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus"></i></a>
                <a href="mailto:#"><i id="social-em" class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-10 col-xs-10 col-sm-12 col-md-12">
          <div class=" content-center">
            <ul class="site-map">
              <li>
                <a href="">Start</a>
              </li>
              <li>
                <a href="">Portfolio</a>
              </li>
              <li>
                <a href="">Clients</a>
              </li>
              <li>
                <a href="">Services</a>
              </li>
              <li>
                <a href="">About us</a>
              </li>
              <li>
                <a href="">Blog</a>
              <li>
                <a href="">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright text-center">
        © 2003 - 2020 Frontline softworks. All rights reserved.</br>
        <a href="http://www.frontline.ro"> Frontline.ro </a>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css" />
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
  <script type="text/javascript" src="app.js"></script>
  <script type="text/javascript"></script>
  </script>
</body>

</html>
