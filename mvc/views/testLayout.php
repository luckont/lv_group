<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tesst</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="http://localhost/WatchWebPro/public/css/partial.css">
    <link rel="stylesheet" href="http://localhost/WatchWebPro/public/css/home_page.css">
    <link rel="stylesheet" href="http://localhost/WatchWebPro/public/css/masterLayout1.css">
    <link rel="stylesheet" href="http://localhost/WatchWebPro/public/css/product_detail.css">
    <link rel="stylesheet" href="http://localhost/WatchWebPro/public/css/Page_ajax.css">
</head>
<body>
    <main>
        <?php require_once "./mvc/views/Pages_ajax/".$data['Page'].".php"?>   
    </main>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script >
        document.querySelectorAll('.options__info-item').forEach(element => {
            element.onclick = function(){
                document.querySelector('.options__info-item.active').classList.remove('active');
                element.classList.add('active');
            }
        });
    </script>
</html>