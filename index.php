<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/pages/index.css">
    <title>Home</title>

</head>

<body>
    <?php include('./includes/header.html'); ?>
    <main>
        <section class="annoucement">
            <div class="slide-stage">
                <div class="slides fade">
                    <div class="item set-bg" data-setbg="/assets/css/img/jpg/thumb-1920-888562.jpg">
                        <div class="container">
                            <h1 class="annoucement-news">Le nouveau jeu <span class="new-article">Persona 5</span> est
                                disponible !</h1>
                            <p class="annoucement-news">Plonge dans l’univers stylé de Persona 5, un JRPG culte mêlant
                                action, stratégie et narration intense. Entre vie lycéenne à Tokyo et combats
                                surnaturels, forme ton équipe, réveille ton pouvoir et vole le cœur des corrompus. Une
                                expérience inoubliable au rythme d’une bande-son iconique.</p>
                            <span class="read">
                                <a href="games/persona5.php">Lire l'article</a>
                            </span>
                        </div>
                        <div class="container-dots">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="promo">
            <div class="promo anim-promo">
                <div class="promo-container">
                    <div class="promo-track">
                        <div class="promo-item">
                            <span class="new feature-bg">Nouveau</span>
                            <p class="promo-title">Persona 5 est disponible !</p>
                        </div>

                        <div class="promo-item">
                            <span class="update feature-bg">Mise à jour</span>
                            <p class="promo-title">Persona 5 a subit une mise à jour le 15/11</p>
                        </div>

                        <div class="promo-item">
                            <span class="article feature-bg">Article</span>
                            <p class="promo-title">Persona 5 a fait 1millions de ventes en un mois !</p>
                        </div>

                        <div class="promo-item">
                            <span class="promotion feature-bg">Promo</span>
                            <p class="promo-title">20% de réduction sur toute la saga persona ! </p>
                        </div>

                    </div>
                </div>
            </div>

        </section>
    </main>
    <?php include('./includes/footer.html'); ?>
</body>
<script type="module" src="/assets/js/main.js"></script>

</html>