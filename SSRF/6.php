<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./attachs/bootstrap.css">
    <link rel="shortcut icon" href="./attachs/favicon.ico" type="image/x-icon" />
    <title>SSRF过滤</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">SSRF过滤2</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">首页
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="https://www.ctfstu.com">重庆橙子科技
            <span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>
    </div>
    </nav>
    <div class="container">
      <div class="jumbotron">
          <h2 class="text-center">访问127.0.0.1下的flag.php</2>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form method="POST">
            <div class="form-group">
              <input class="form-control form-control-lg" type="text" placeholder="http://127.0.0.1/flag.php" name="url">
            </div>
              <button type="submit" class="btn btn-primary" style="display:block;margin:0 auto">Submit</button>
          </form>
        </div>
      </div>

      <hr class="my-4">
      <?php
      $url=$_POST['url'];
      $ben=parse_url($url);
      if($ben['scheme']==='http'||$ben['scheme']==='https'){
          $ip = gethostbyname($ben['host']);
          echo '</br>'.$ip.'</br>';
          if(!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
              die('ip!');
          }
          echo file_get_contents($_POST['url']);
      }
      else{
          die('scheme');
      }
      ?>
    </div>
    <script src="./attachs/jquery.min.js"></script>
    <script src="./attachs/bootstrap.bundle.min.js"></script>
  </body>
</html>

