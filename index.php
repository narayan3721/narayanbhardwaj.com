<?php

$url = 'project.json';
$data = file_get_contents($url);
$characters = json_decode($data);
?>

<?php include("header.php"); ?>
<main class="content">
    <section class="myinfo">
        <div class="container">
            <div class="myinfo__content card">
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
        </div>
    </section>
</main>



<?php include("footer.php"); ?>

<script src="https://pawelgrzybek.com/siema/assets/siema.min.js"></script>
<script>
// Siema 1.3.0 introuduced a basic callbacks
// https://github.com/pawelgrzybek/siema/releases/tag/v.1.3.0

function onInitCallback() {
  console.log('Siema initialised bro :)');
}

function onChangeCallback() {
  console.log(`The index of current slide is: ${this.currentSlide}`);
}

const mySiema = new Siema({
  onInit: onInitCallback,
  onChange: onChangeCallback,
});

const prev = document.querySelector('.prev');
const next = document.querySelector('.next');

prev.addEventListener('click', () => mySiema.prev());
next.addEventListener('click', () => mySiema.next());
</script>