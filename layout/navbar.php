<style>
    .navbar-collapse {
        height: 70px;
        display: flex;
        align-items: center;
    }

    .navbar-collapse ul,
    .navbar-collapse li {
        height: 100%;
    }

    .navbar-collapse li {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .navbar-nav {
        display: flex;
        /* grid-template-columns: repeat(6, minmax(50px, 1fr)); */
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }
    
    .nav-item {
        width: 19%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        color: white;
        height: 100%;
        position: relative;
    }
    .nav-item:hover {
        background-color: black;
        color: white;
    }
    
    .text-item:after {
        content: "";
        background-color: white;
        position: absolute;
        height: 2px;
        left: 50%;
        width: 0%;
        bottom: 20%;
        opacity: 0;
    }
    
    .nav-item:hover .text-item:after {
        height: 3px;
        left: 25%;
        width: 50%;
        opacity: 1;
        transition: 0.3s;
    }

    .nav-item:first-child,
    .nav-item:nth-child(4) {
        width: 10%;
    }

    .nav-item:last-child {
        width: 24%;
    }
    .nav-selected, .nav-selected:hover {
        background-color: white;
        color: #212529;
    }

</style>
<?php
    if (isset($_GET['request']) && isset($_GET['request']) == 'parkinformation') {
        ob_start();
    }
?>
<nav class="p-0 navbar navbar-expand-lg bg-dark main-nav">
    <!-- <div class="container-fluid"> -->
    <a class="navbar-brand p-0" href="#">
        <img src="image/logo1.png" alt="" width="180" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <!-- <li class="nav-item"> -->
            <a class="nav-item p-0 m-0 <?php 
                if (!isset($_GET['request']) || (isset($_GET['request']) and $_GET['request'] == 'experience')):
                    echo "nav-selected";
                endif;
            ?>" aria-current="page" href="?request=experience"><span class="text-item">EXPERIENCE</span></a>
            <!-- </li> -->
            <!-- <li class="nav-item"> -->
            <a class="nav-item p-0 m-0 <?php 
                if (isset($_GET['request']) and $_GET['request'] == 'dinning'):
                    echo "nav-selected";
                endif;
            ?>" href="?request=dinning"><span class="text-item">LEISURE & DINNING</span></a>
            <!-- </li> -->
            <!-- <li class="nav-item"> -->
            <a class="nav-item p-0 m-0 <?php 
                if (isset($_GET['request']) and $_GET['request'] == 'parkcharacters'):
                    echo "nav-selected";
                endif;
            ?>" href="?request=parkcharacters"><span class="text-item">PARKS CHARACTERS</span></a>
            <!-- </li> -->
            <!-- <li class="nav-item"> -->
            <a class="nav-item p-0 m-0 <?php 
                if (isset($_GET['request']) and $_GET['request'] == 'whatsup'):
                    echo "nav-selected";
                endif;
            ?>" href="?request=whatsup"><span class="text-item">WHATS UP</span></a>
            <!-- </li> -->
            <!-- <li class="nav-item"> -->
            <a class="nav-item p-0 m-0 <?php 
                if (isset($_GET['request']) and $_GET['request'] == 'parkinformation'):
                    echo "nav-selected";
                endif;
            ?>" href="?request=parkinformation"><span class="text-item">PARK INFORMATION</span></a>
            <!-- </li> -->
            <!-- <li class="nav-item"> -->
            <a class="nav-item p-0 m-0 <?php 
                if (isset($_GET['request']) and $_GET['request'] == 'businessopportunities'):
                    echo "nav-selected";
                endif;
            ?>" href="?request=businessopportunities"><span class="text-item">BUSINESS OPPORTUNITIES</span></a>
            <!-- </li> -->
        </ul>
    </div>
    <!-- </div> -->
</nav>
