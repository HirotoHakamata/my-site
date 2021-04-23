<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PORTFOLIO</title>
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <wrapper class="bg-light">

    <header>

        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="#profile">profile</a>
                    <a class="nav-item nav-link" href="#skill">skill</a>
                    <a class="nav-item nav-link" href="#works">works</a>
                    <a class="nav-item nav-link" href="#contact">contact</a>
                </div>
            </div>
          </nav>

    </header>

    <main>
        
    <?php
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        $to = $_POST['email'];
        $title = $_POST['name'];
        $message = $_POST['text'];
        $headers = "From: hiroto.hakamata913@gmail.com";

        if(mb_send_mail($to, $title, $message, headers))
        {
            echo "メール送信成功です";

            echo "戻る";
        }
            else
        {
            echo "メール送信失敗です";
            
            echo "戻る";
        }
    ?>

    </main>

    <footer class="footer">
        <div class="container">
          <p class="text-muted text-right">© 2021 Hiroto Hakamata</p>
        </div>
    </footer>

    </wrapper>
  </body>
</html>