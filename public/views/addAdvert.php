<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/adverts.css">

    <title>ADVERTISEMENTS</title>
</head>

<body>
<div class="base-container">
    <nav>
        <img src="public/img/tuwent_pion.svg">
        <ul>
            <li>
                <i class="fas fa-advert-diagram"></i>
                <a href="#" class="button">adverts</a>
            </li>
            <li>
                <i class="fas fa-advert-diagram"></i>
                <a href="#" class="button">adverts</a>
            </li>
            <li>
                <i class="fas fa-advert-diagram"></i>
                <a href="#" class="button">adverts</a>
            </li>
            <li>
                <i class="fas fa-advert-diagram"></i>
                <a href="#" class="button">adverts</a>
            </li>
        </ul>
    </nav>
    <main>
        <header>
            <div class="search-bar">
                <form>
                    <input placeholder="search adverts">
                </form>
            </div>
            <div class="add-adverts">
                <i class="fas fa-plus"></i> add adverts
            </div>
        </header>
        <section class="adverts-form">
            <h1>UPLOAD</h1>
            <form action="addAdvert" method="POST" ENCTYPE="multipart/form-data">
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="short name" type="text" placeholder="title">
                <textarea name="description" rows=5 placeholder="description"></textarea>

                <input name="description" type="text" placeholder="title">
                <textarea name="description" rows=5 placeholder="description"></textarea>

                <input type="file" name="file"/><br/>
                <button type="submit">send</button>
            </form>
        </section>
    </main>
</div>
</body>