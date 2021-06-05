<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
  <header>
    <div class="header-left">
      <img src="./img/色覚.jpg" alt="">
    </div>
    <div class="header-right">
      <ul class="nav">
        <li><a href="#top">トップ</a></li>
        <li><a href="#eye">眼について</a></li>
        <li><a href="#contact">お問合せ</a></li>
      </ul>
    </div>
  </header>
  <main>
    <section id="top">
        <img src="./img/homework.jpg" alt="" width="100%" height="100%">
      <!-- <h1>視能訓練士とは</h1> -->
      <!-- <p>視能検査と視能矯正のエキスパートです</p> -->
    </section>
    <section id="eye">
      <h2>眼について</h2>
      <div id="container">
        <div class="ort">
          <img src="./img/アイコン１.jpg" alt="">
          <div class="ort_description">
            <ul>
              <li><a href="./a.html">レーシックとICL</a></li>
              <!-- <p>a</p> -->
            </ul>
          </div>
        </div>
        <div class="ort">
          <img src="./img/アイコン２.jpg" alt="">
          <div class="ort_description">
            <ul>
              <li><a href="./b.html">色覚</a></li>
              <!-- <p>b</p> -->
            </ul>
          </div>
        </div>
        <div class="ort">
          <img src="./img/アイコン３.jpg" alt="">
          <div class="ort_description">
            <ul>
              <li><a href="./c.html">視力発達</a></li>
              <!-- <p>c</p> -->
            </ul>
          </div>
        </div>
        <div class="ort">
          <img src="./img/アイコン４.jpg" alt="">
          <div class="ort_description">
            <ul>
              <li><a href="./d.html">ロービジョンケア</a></li>
              <!-- <p>d</p> -->
            </ul>
            </div>
        </div>
        <div class="ort">
          <img src="./img/アイコン５.jpg" alt="">
          <div class="ort_description">
            <ul>
              <li><a href="./e.html">視能訓練士になるには</a></li>
              <!-- <p>e</p> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <p>youtube</p>
    <iframe class="youtube" width="560" height="315" src="https://www.youtube.com/embed/SXC-OUkPd4I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>
    <section id="contact">
      <h3>お問い合わせ</h3>
      <form method="POST" action="check.php">
        <div>
            氏名<br>
            <input type="text" name="nickname" style="width:340px">
        </div>
        <div>
            メールアドレス<br>
            <input type="text" name="email" style="width: 340px">
        </div>
        <div>
            お問い合わせ内容<br>
            <textarea name="content" cols="40" rows="5"></textarea>
        </div>
        <input type="submit" value="送信">
       <input type="reset" value="取り消し">
      </form>
    </section>
    <section>
      <div>
        <p>map</p>
      <!-- google maps -->
        <iframe  class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d839161.2858015468!2d134.54785078044046!3d34.75625349512295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60007d812aed89d9%3A0xc7126106c2f670f4!2z5YW15bqr55yM56We5oi45biC!5e0!3m2!1sja!2sjp!4v1621833098682!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </section>
  </main>
  <footer>
    <div class="footer-left">
      <nav class="sns">
       <ul>
        <li><a href="https://twitter.com"> <i class="fab fa-twitter-square fa-3x"></i></a></li>
        <li><a href="https://www.facebook.com/hiroshi.ikemi/"><i class="fab fa-facebook-square fa-3x"></i></a></li>
        <li>Copyright</li>
       </ul>
      </nav>
    </div= class="footer-left">
    <div class="footer-center">
      <p></p>
    </div class="footer-center">
  </footer>
</body>
</html>