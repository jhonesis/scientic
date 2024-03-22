<?php include RACINE."/view/header.php";?>
    <main>
        <div class="container-fluid headers">
            <div class="container row mx-auto" id="head_home">
                <div class="mt-5 col-12 col-md-6 d-none d-md-inline">
                    <div id="typed-strings">
                        <p><em><strong class="text-info">"Knowledge</strong> is not a vessel to be filled, but a fire to be kindled."</em></br>- Plutarch</p>
                        <p><em>"Today's <strong class="text-info">science</strong> is tomorrow's <strong class="text-info">technology</strong>."</em></br>- Edward Teller</p>
                        <p><em>"Scientific <strong class="text-info">research free</strong>? The second adjective is redundant."</em></br>- Ayn Rand</p>
                        <p><em>"<strong class="text-info">Science</strong> without <strong class="text-info">conscience</strong> is nothing more than the ruin of the soul."</em></br>- François Rabelais</p>
                    </div>
                    <span id="typed" class="text-light my-5"></span>
                </div>
                <div class="mt-5 col-12 col-md-6">
                    <img src="assets/media/img_head_h.png" alt="image header home" class="img-fluid w-100">
                </div>

            </div>
        </div>

        <!--about-->

        <div class="container text-center mt-5">
            <h1 class="titles display-4 text-info-emphasis pt-5 text-decoration-underline">About Us</h1>
            <img src="assets/media/img_about.png" class="img-fluid py-3 w-50" alt="image about us">
            <p class="fs-4 text-secondary pb-5">Scientic is a non-profit project whose main objective is to promote the dissemination of knowledge, regardless of its origin (whether from a university, company or garage). Scientic seeks to give greater visibility to new and more effective ways of solving problems, in order to optimize the use of resources. This academic and scientific approach allows us to explore new perspectives and innovative solutions, which can have a positive impact in both academia and the business world.</p>
        </div>

        <!--nasa list-->
        
        <div class="container-fluid mt-5 bg-dark">
            <div class="row container my-5 text-center d-flex align-items-center mx-auto">
                <div class="col-md-6 mt-5">
                    <p class="titles display-4 text-info"><strong>NASA Software</strong></p>
                    <p class="fs-4 text-light">Find a list of applications developed by the North American space agency, most of which you can download for free.</p>
                    <p><a href="?action=nasa" class="btn btn-outline-info">Search</a></p>
                </div>
                <figure class="col-md-6">
                    <img src="assets/media/img_nasa_art.png" class="img-fluid pt-3" alt="image nasa">
                </figure>
            </div>
        </div>


        <!--articles-->
        <section class="py-5 text-center">
            <h1 class="titles display-4 text-info-emphasis pt-5 text-decoration-underline">You Can</h1>
            <article class="container-fluid art_home">
                <div class="row container my-5 text-center d-flex align-items-center mx-auto gx-5">
                    <div class="col-md-6">
                        <p class="titles display-6 text-info"><strong>Uncover</strong></p>
                        <p class="fs-4 text-secondary">Regardless of your academic level, learn from the review and application of these developments.</p>
                    </div>
                    <figure class="col-md-6">
                        <img src="assets/media/img_art1_home.png" class="img-fluid pt-3" alt="image article 1">
                    </figure>
                </div>
            </article>
            <article class="container-fluid art_home">
                <div class="row container my-5 text-center d-flex align-items-center mx-auto gx-5 flex-md-row-reverse">
                    <div class="col-md-6">
                        <p class="titles display-6 text-info"><strong>Imagine</strong></p>
                        <p class="fs-4 text-secondary">Creates technological tools, innovating in science and sharing its results.</p>
                    </div>
                    <figure class="col-md-6">
                        <img src="assets/media/img_art2_home.png" class="img-fluid pt-3" alt="image article 2">
                    </figure>
                </div>
            </article>
            <article class="container-fluid art_home">
                <div class="row container my-5 text-center d-flex align-items-center mx-auto gx-5">
                    <div class="col-md-6">
                        <p class="titles display-6 text-info"><strong>Meet</strong></p>
                        <p class="fs-4 text-secondary">Find the key people to work on your business projects, take advantage of their knowledge.</p>
                    </div>
                    <figure class="col-md-6">
                        <img src="assets/media/img_art3_home.png" class="img-fluid pt-3" alt="image article 3">
                    </figure>
                </div>
            </article>
        </section>  
</main>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
      <!-- Setup and start animation! -->
        <script>
            var typed = new Typed('#typed', {
                stringsElement: '#typed-strings',
                typeSpeed: 50,
                backSpeed: 10,
                backDelay: 500,
                startDelay: 1000,
                loop: true
            });
        </script>

<?php include RACINE."/view/footer.php";?>    