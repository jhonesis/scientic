<?php include RACINE."/view/header.php";?>
    <main>
        <!--slider-->
        <div class="container-fluid bg-dark shadow py-5">
            <div id="carouselExampleSlidesOnly" class="carousel slide container pt-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/media/img1_slider.webp"  class="d-block w-100 rounded-5" alt="laboratory technological" >
                        <div class="carousel-caption d-none d-md-block bg-dark opacity-75 bottom-0 start-0 w-100">
                            <h3 class="text-info">DEVELOP THE FUTURE</h3>
                            <p class="fs-5"><em>"Today's <strong class="text-info">science</strong> is tomorrow's <strong class="text-info">technology</strong>."</em> - Edward Teller</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/media/img2_slider.webp" class="d-block w-100 rounded-5" alt="share the knowledge" >
                        <div class="carousel-caption d-none d-md-block bg-dark opacity-75 bottom-0 start-0 w-100">
                            <h3 class="text-info">SHARE THE KNOWLEDGE</h3>
                            <p class="fs-5"><em>"Scientific <strong class="text-info">research free</strong>? The second adjective is redundant."</em> - Ayn Rand</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/media/img3_slider.webp" class="d-block w-100 rounded-5" alt="Solve the Problems" >
                        <div class="carousel-caption d-none d-md-block bg-dark opacity-75 bottom-0 start-0 w-100">
                            <h3 class="text-info">SOLVE THE PROBLEMS</h3>
                            <p class="fs-5"><em>“The formulation of a problem is more <strong class="text-info"> important</strong> than its solution.”</em> - Albert Einstein</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--about-->
        <div class="container text-center mt-5">
            <img src="assets/media/img_about_min.webp" class="img-fluid py-3 w-50" alt="image about us" >
            <p class="fs-4 text-dark pb-5">Scientic is a non-profit project whose main objective is to promote the dissemination of knowledge, regardless of its origin (whether from a university, company or garage). </p>
            <p class="fs-4 text-dark pb-5">Scientic seeks to give greater visibility to new and more effective ways of solving problems, in order to optimize the use of resources. This academic and scientific approach allows us to explore new perspectives and innovative solutions, which can have a positive impact in both academia and the business world.</p>
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
                    <img src="assets/media/img_nasa_art_min.webp" class="img-fluid pt-3" alt="image nasa" loading="lazy">
                </figure>
            </div>
        </div>

        <!--articles-->
        <section class="py-5 text-center">
            <article class="container-fluid d-flex align-items-center justify-content-center">
                <div class="row container my-5 text-center d-flex align-items-center mx-auto gx-5">
                    <div class="col-md-6">
                        <p class="titles display-6 text-dark bg-info-subtle bg-gradient w-50 rounded mx-auto shadow"><strong>Uncover</strong></p>
                        <p class="fs-4 text-dark">Regardless of your academic level, learn from the review and application of these developments.</p>
                    </div>
                    <figure class="col-md-6">
                        <img src="assets/media/img_art1_home_min.webp" class="img-fluid pt-3" alt="image article 1" loading="lazy">
                    </figure>
                </div>
            </article>
            <article class="container-fluid d-flex align-items-center justify-content-center">
                <div class="row container my-5 text-center d-flex align-items-center mx-auto gx-5 flex-md-row-reverse">
                    <div class="col-md-6">
                        <p class="titles display-6 text-dark bg-info-subtle bg-gradient w-50 rounded mx-auto shadow"><strong>Imagine</strong></p>
                        <p class="fs-4 text-dark">Create technological tools, innovating in science and sharing its results.</p>
                    </div>
                    <figure class="col-md-6">
                        <img src="assets/media/img_art2_home_min.webp" class="img-fluid pt-3" alt="image article 2" loading="lazy">
                    </figure>
                </div>
            </article>
            <article class="container-fluid d-flex align-items-center justify-content-center">
                <div class="row container my-5 text-center d-flex align-items-center mx-auto gx-5">
                    <div class="col-md-6">
                        <p class="titles display-6 text-dark bg-info-subtle bg-gradient w-50 rounded mx-auto shadow"><strong>Meet</strong></p>
                        <p class="fs-4 text-dark">Find the apropiate people to work on your business projects, take advantage of their knowledge.</p>
                    </div>
                    <figure class="col-md-6">
                        <img src="assets/media/img_art3_home_min.webp" class="img-fluid pt-3" alt="image article 3" loading="lazy">
                    </figure>
                </div>
            </article>
        </section>  
</main>
<?php include RACINE."/view/footer.php";?>    