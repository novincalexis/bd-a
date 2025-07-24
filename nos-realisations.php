<?php
    $page = "realisations";
    include "incl_header.php";
?>

<main class="main">
    <div class="container">

        <section class="main__section">
            <div class="main__content main__content_small">
                <div class="main__ttl main__ttl_center biggest">Nos réalisations</div>
                <h1 class="h2-like main__ttl">Nos réalisations : un travail d’équipe entre vos exigences et nos savoir-faire</h1>
                <p>Qu’il s’agisse de réaliser l’agencement d’espaces de travail, d’une cuisine ou d’une salle de bain, ou encore de réaliser la fabrication d’éléments d’accueil ou de séparations, nos équipes sont à votre écoute pour tous vos agencements sur-mesure. Que vous soyez particuliers ou professionnels, nos experts mettent un point d’honneur à mener à bien, avec vous, vos projets de menuiserie, même les plus ambitieux.</p>
            </div>
        </section>

        <section class="main__section encard">
            <a href="realisations-professionnels.php" class="imgblock imgblock_duo imgblock_real_professionnels">
                <div class="imgblock__visuel"></div>
                <div class="imgblock__content">
                    <div class="txtblock">
                        <div class="txtblock__inner txtblock__inner-link">
                            <h1 class="txtblock__ttl">Nos Réalisations<br>Professionnels</h1>
                        </div>
                    </div>
                </div>
            </a>
            <a href="realisations-particuliers.php" class="imgblock imgblock_duo imgblock_real_particuliers">
                <div class="imgblock__visuel"></div>
                <div class="imgblock__content">
                    <div class="txtblock">
                        <div class="txtblock__inner txtblock__inner-link">
                           <h1 class="txtblock__ttl">Nos Réalisations<br>Particuliers</h1>
                        </div>    
                    </div>
                </div>
            </a>
        </section>
        <section class="main__section">
            <p class="link_insta">Nous suivre sur insta : <a href="<?= insta_link ?>">#bdagencements</a></p>
        </section>
    </div>
</main>

<?php include "incl_footer.php"; ?>

