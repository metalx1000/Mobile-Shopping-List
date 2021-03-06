<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopping List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<link rel="apple-touch-icon" sizes="57x57" href="icons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="icons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="icons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="icons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="icons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="icons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="icons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="icons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="icons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="icons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="icons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="icons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="icons/manifest.json">
<link rel="shortcut icon" href="icons/favicon.ico">
<meta name="apple-mobile-web-app-title" content="Shopping List">
<meta name="application-name" content="Shopping List">
<meta name="msapplication-TileColor" content="#603cba">
<meta name="msapplication-TileImage" content="icons/mstile-144x144.png">
<meta name="msapplication-config" content="icons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="main.js"></script>
</head>
<body>

<div class="container">
  <h1>Shopping List</h1>    

  <!--progress bar-->
  <div class="progress">
    <div id="progress" class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:0%">
      Adding Items 
    </div>
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="entry" placeholder="Enter store and items separated by comas">  
    <button id="submit" type="button" class="btn btn-primary btn-block btn-lg">Submit</button>
  </div>

  <div id="list">
  </div>

  <button id="showAll" type="button" class="btn btn-primary btn-block btn-lg">Show All Stores</button>
</div>

</body>
</html>

