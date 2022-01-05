<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sas-Anka - Aktualności</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/heading.css">
    <link rel="stylesheet" href="css/aktualnosci.css">
</head>
<body class="bg-light">
<!-- Messenger Wtyczka czatu Code -->
<div id="fb-root"></div>

<!-- Your Wtyczka czatu code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "116046146920331");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v12.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/pl_PL/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 px-3 px-6 mb-n1">

        <img src="img/logo.png" alt="" class="navbar-brand">

        <button class="navbar-toggler" type="button"  data-bs-toggle="offcanvas" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1"  id="navbarSupportedContent">
            <div class="offcanvas-header">
                <img src="img/logo.png" alt="" class="offcanvas-title">

                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0 fs-5">
                <li class="nav-item  mx-3 my-1">
                    <a class="nav-link" href="index.php">Strona główna</a>
                </li>

                <li class="nav-item  mx-3 my-1">
                    <a class="nav-link" href="galeria.php">Galeria</a>
                </li>

                <li class="nav-item  mx-3 my-1">
                    <a class="nav-link active" href="aktualnosci.php">Aktualnosci</a>
                </li>

                <li class="nav-item  mx-3 my-1">
                    <a class="nav-link " href="kontakt.php">Kontakt</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="heading justify-content-center d-flex">
        <div class="text-white pt-5 pb-4 lh-lg fw-bold">Zobacz co nowego!</div>
    </div>


    <div class="container">
        <div class="row mx-3 mt-5 mb-5 pb-4 border-bottom border-2"></div>
        <div class="row mx-2 g-4">

        <?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v12.0/116046146920331?fields=posts%7Bid%7D&access_token=EAANRAo8wXYQBAD4upvexLI8WvAuu6jLtX0m8HzXl8VxtLwUscV8V5j3E6ZBlITNnuINpSXdHYTmoyzPZAx8k8nLkl3UbNJFoLZCRZBzqEXqA3Kr9hWIWoqIqZAiJBH9yITSORZAxlKVkgsT8SixWGJuLrAryMqJVfoIJgzMPmyoVhES0ko6KKko1BZAjUZAZBQYZAbWZBRYmilOeQ2GvwJHZB6G2');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$result = json_decode($result);

foreach ($result->posts->data as $id)
{
    $id = $id->id;
    $start = strpos($id, '_');

    $final_id = substr($id, $start+1, 16);

    ?>
        <iframe class='col-12 col-md-6 col-xl-4' src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D<?=$final_id?>%26id%3D116046146920331&show_text=true" height="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

<?php
}
?>
        

        
        </div>
    </div>

    <footer class="bg-white light-gray px-5 pt-3 pt-sm-4">
        <div class="d-flex flex-wrap flex-column flex-lg-row justify-content-between align-items-center py-3 mt-4 border-top">
            <div class="col col-lg-4 mb-0 text-muted order-2 order-lg-1">&copy; 2022 Bartosz Wiaderek</div>
            <img src="img/logo-sm.png" class="order-1 order-lg-2 col-12 col-lg-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto" alt="">
            <div class="nav col-md-4 justify-content-end d-none d-lg-flex order-3">
                <li class="nav-item"><a href="index.php" class="nav-link px-1 px-xl-2 px-xxl-3 text-muted">Strona główna</a> </li>
                <li class="nav-item"><a href="galeria.php" class="nav-link px-1 px-xl-2 px-xxl-3 text-muted">Galeria</a> </li>
                <li class="nav-item"><a href="aktualnosci.php" class="nav-link px-1 px-xl-2 px-xxl-3 text-muted">Aktualnosci</a> </li>
                <li class="nav-item"><a href="kontakt.php" class="nav-link px-1 px-xl-2 px-xxl-3 text-muted">Kontakt</a> </li>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>