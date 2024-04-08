<?php include RACINE."/view/header.php";?>
<div class="bg-dark"></br></br></br></div>
    <main class="container">
        <div class="my-5">
            <h1 class="titles text-dark"><strong>Find your Tool, Immediately.</strong></h1>
            <input type="text" name="texsof" id="texsof" class="form-control my-3" placeholder="Enter a keyword">
            <input type="button" value="Search" id="btnser" class="btn btn-dark my-3">
        </div>
        <div id="cat"></div>
        <div>
            <p class="titles fs-2"><strong>Categories</strong></p>
            <p class="fs-5 text-secondary">You will encounter a array of software, organized into 15 distinct categories:</p>
            <div class="d-flex justify-content-between flex-wrap fs-5 text-secondary">
                <ul>
                    <li>Aeronautics</li>
                    <li>Autonomus Systems</li>
                    <li>Business Systems</li>
                    <li>Crew and Life Support</li>
                    <li>Data and Image Processing</li>
                </ul>
                <ul>
                    <li>Data Servers</li>
                    <li>Design and Integration Tools</li>
                    <li>Electronics and Electrical Power</li>
                    <li>Environmental Science</li>
                    <li>Materials and Processes</li>
                </ul>
                <ul>
                    <li>Operations</li>
                    <li>Propulsion</li>
                    <li>Structures and Mechanisms</li>
                    <li>System Testing</li>
                    <li>Vehicle Management</li>
                </ul>
            </div>
        </div>
        <div class="bg-info-subtle text-center rounded py-md-3 my-3">
            <p class="fs-5 py-3 py-md-5">For more details about the nasa software catalog you can see their <a href="./assets/media/NASA_Software_Catalog_2023-24.pdf" target="_blank">documentation.</a></p>
        </div>
    </main>
    <script src="./assets/js/api.js"></script>
<?php include RACINE."/view/footer.php";?>    