<?php include RACINE."/view/header.php";?>
    <main>
        <div class="headers mb-0 text-light text-center">
            <h1>Sign In</h1>
        </div>
        <div class="container row shadow rounded rounded-3 g-0 my-5 text-center mx-auto d-flex align-items-center bg-info bg-gradient">
            <figure class="col-12 col-lg-6 mb-0">
                <img src="assets/media/img_login.jpg" alt="image login" class="img-fluid  rounded-end-0 rounded-3">
            </figure>
            <div class="col-12 col-lg-6 pt-lg-3 pt-5">
                <h1 class="titles text-dark">Welcome</h1>
                <p class="text-dark-emphasis">"Please enter your credentials"</p>
                <form action="./controller/validate.php" method="post" class="text-center w-100 py-5" target="_blank">
                    <p><input type="email" name="email_us" id="email_us" required class="form-control w-50 mx-auto" placeholder="E-mail"></p>
                    <p><input type="password" name="pass_us" id="pass_us" required class="form-control w-50 mx-auto" placeholder="Password"></p>
                    <p><input type="submit" value="Sing In" class="form-control btn btn-dark w-25 my-3"></p>
                </form>
            </div>
        </div>
    </main>
<?php include RACINE."/view/footer.php";?>    