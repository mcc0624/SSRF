<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./attachs/bootstrap.css">
    <link rel="shortcut icon" href="./attachs/favicon.ico" type="image/x-icon" />
    <title>Hello, SSRF!</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">模拟蜘蛛爬取</a>
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
          <h2 class="text-center">文件获取显示</2>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form method="POST">
            <div class="form-group">
              <input class="form-control form-control-lg" type="text" placeholder="请输入要查询的网站" name="url">
            </div>
              <button type="submit" class="btn btn-primary" style="display:block;margin:0 auto">Submit</button>
          </form>
        </div>
      </div>

      <hr class="my-4">
      <?php
      error_reporting(0);
      $url = $_POST['url'];

      if (preg_match("/127|172|10|192/", $url)) {
          exit("hacker! Ban Intranet IP");
      }

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_exec($ch);
      curl_close($ch);
      ?>
    </div>
    <script src="./attachs/jquery.min.js"></script>
    <script src="./attachs/bootstrap.bundle.min.js"></script>
  </body>
</html>

