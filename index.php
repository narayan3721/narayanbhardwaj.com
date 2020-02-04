<?php

$url = 'project.json';
$data = file_get_contents($url);
$characters = json_decode($data);
?>

<?php include("header.php"); ?>
<main class="content">
    <!--myinfo ends-->
    <section class="myinfo">
        <div class="container">
            <div class="myinfo__content">
                <div class="myinfo__img">
                    <img src="images/narayan-bhardwaj.jpeg" alt="narayan-bhardwaj" width="255" height="255">
                </div>
                <div class="myinfo__info">
                    <h2>Hi, I am <span class="gradient-text">Narayan Bhardwaj</span>. <br>I am a <span class="gradient-text">UI Developer</span>.</h2>
                    <p>Have something to say? <span class="link-with-arrow"><a class="pr-4" href="/contacts">Let’s talk<span class="arrow"></span></a></span></p>
                </div>
            </div>
        </div>
    </section>
    <!--myinfo ends-->

    <!--home projects-->
    <section class="home-projects">
        <div class="container">
            <h3 class="text-center">Projects </h3>
            <div class="siema">
                <?php foreach ($characters as $character) : ?>
                    <div class="home-projects__card card">
                        <div class="card-img">
                            <img src="<?php echo $character->img; ?>" alt="images">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $character->ProjectTitle; ?></h5>
                            <p><?php echo $character->ProjectDesc; ?></p>
                            <div class="card-actions">
                                <a class="preview-btn" href="<?php echo $character->ProjectUrl; ?>" target="_blank">Preview</a>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
            <!-- controls start-->
            <div class="slider-controls">
                <div class="prev"><span class="icon nb-chevron-circle-left-solid"></span></div>
                <div class="next"><span class="icon nb-chevron-circle-right-solid"></span></div>
            </div>    
            <!-- controls end-->
        </div>
    </section>
    <!--home projects-->

</main>



<?php include("footer.php"); ?>

<script src="https://pawelgrzybek.com/siema/assets/siema.min.js"></script>
<script>
    const mySiema = new Siema({
    selector: '.siema'
    });
    document.querySelector('.prev').addEventListener('click', () => mySiema.prev());
    document.querySelector('.next').addEventListener('click', () => mySiema.next());
</script>