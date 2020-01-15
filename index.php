<?php

$url = 'project.json';
$data = file_get_contents($url);
$characters = json_decode($data);
?>

<?php include("header.php"); ?>
<main class="content">
    <section class="myinfo">
        <div class="container">
            <div class="myinfo__content">
                <div class="myinfo__img">
                    <img src="images/narayan-bhardwaj.jpeg" alt="narayan-bhardwaj" width="255" height="255">
                </div>
                <div class="myinfo__info">
                    <h2>Hi, I am Narayan Bhardwaj. <br>I am a UI Developer.</h2>
                    <p>Have something to say? <span class="link-with-arrow"><a class="pr-4" href="/contacts">Let’s talk<span class="arrow"></span></a></span></p>
</div>
            </div>
        </div>
    </section>
    <!--myinfo ends-->

    <section class="home-projects">
        
        <div class="container">
        <h3 class="text-center">Projects </h3>
            <?php foreach ($characters as $character) : ?>
                <div class="home-projects__card card">
                    <div class="card-img">
                        <img src="<?php echo $character->img; ?>" alt="images">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $character->ProjectTitle; ?></h5>
                        <p><?php echo $character->ProjectDesc; ?></p>
                        <div class="card-actions">
                            <a href="<?php echo $character->ProjectUrl; ?>" target="_blank">Preview</a>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>
    </section>
</main>

<?php include("footer.php"); ?>