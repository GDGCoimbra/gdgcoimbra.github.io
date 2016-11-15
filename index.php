<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>GDG Coimbra</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="gdgcoimbra">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <!-- <link rel="apple-touch-icon" href="/images/favicon/touch-icon-iphone.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/touch-icon-ipad.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/touch-icon-iphone-retina.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/touch-icon-ipad-retina.png">
  <link rel="icon" sizes="192x192" href="/images/favicon/chrome-touch-icon-192x192.png">
  <link rel="shortcut icon" sizes="96x96" href="/images/favicon/favicon-96x96.png">
  <link rel="shortcut icon" sizes="32x32" href="/images/favicon/favicon-32x32.png">
  <link rel="shortcut icon" sizes="16x16" href="/images/favicon/favicon-16x16.png"> -->
  <link rel="stylesheet" type="text/css" href="css/main.css" media="screen, projection" />
  <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <?php
  if (isset($_GET['p'])) {
    $page_select = $_GET['p'];
  }
  ?>

  <nav>
    <div class="content">
      <a href=".">
        GDG Coimbra
      </a>
    </div>

    <div class="shadow"></div>
  </nav>

  <?php require_once('action/page-select.php'); ?>

  <footer>
    <div class="content">
      <p>2016. GDG Coimbra is an independent group, activities and opinions expressed should in no way be linked to Google, the corporation.</p>
      <ul>
        <li>
          <a href="https://plus.google.com/+GDGCoimbra" target="_blank">
            <img src="images/social/googleplus.svg" alt="Google+" />
          </a>
        </li>
        <li>
          <a href="https://github.com/GDGCoimbra" target="_blank">
            <img src="images/social/github.svg" alt="Github" />
          </a>
        </li>
        <li>
          <a href="https://twitter.com/GDGCoimbra" target="_blank">
            <img src="images/social/twitter.svg" alt="Twitter" />
          </a>
        </li>
        <li>
          <a href="https://www.facebook.com/GDGCoimbra" target="_blank">
            <img src="images/social/facebook.svg" alt="Facebook" />
          </a>
        </li>
      </ul>
    </div>
  </footer>

  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/scrollreveal/dist/scrollreveal.min.js"></script>
  <script src="js/custom.js"></script>
</body>
