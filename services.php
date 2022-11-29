<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agro-Allied Business Services | Food and Economic Sustainability through Agro Tech</title>
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/jpg" href="assets/logo-sqr.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
    <!-- nav menu -->
    <style>
        /* ============ desktop view ============ */
        @media all and (min-width: 992px) {
            .dropdown-menu li {
                position: relative;
            }

            .nav-item .submenu {
                display: none;
                position: absolute;
                left: 100%;
                top: -7px;
            }

            .nav-item .submenu-left {
                right: 100%;
                left: auto;
            }

            .dropdown-menu>li:hover {
                background-color: #f1f1f1
            }

            .dropdown-menu>li:hover>.submenu {
                display: block;
            }
        }

        /* ============ desktop view .end// ============ */

        /* ============ small devices ============ */
        @media (max-width: 991px) {
            .dropdown-menu .dropdown-menu {
                margin-left: 0.7rem;
                margin-right: 0.7rem;
                margin-bottom: .5rem;
            }
        }

        /* ============ small devices .end// ============ */
    </style>
</head>

<body>
    <div class="hero-bg bg-dark services">

        <?php include('./includes/nav.php'); ?>

        <!-- Header-->
        <header class="bg-dark__ py-2 py-lg-5 my-2 my-lg-5">
            <div class="container px-5">
                <div class="row gx-5">
                    <div class="col-lg-9 transparent-blk">
                        <div class="my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">Our <span class="accent-yellow">Products</span></h1>
                            <p class="lead text-white mb-4 fs-5 lh-sm">We have a track record of employing the right skill and experience of our people to bring an expertise touch to every job, institution systems and technology.</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <!-- Features section-->
    <section class="pb-5 bg-yellow-light">
        <div class="container p-5 w-lg-75">
            <h2 class="mb-md-4">Our <span class="">Technologies</span></h2>

            <div class="row g-5 ">

                <div class="col-md-6 pe-1">
                    <div class="services-item p-3">
                        <h2 class="h4 fw-bolder">Farm Monitor</h2>
                        <p class="mb-1">A simplified project management tool for farmers and stakeholders. With our innovative FARM MONITOR web Portal and mobile App...</p>
                        <a class="text-decoration-none small green" href="farm-monitor.html">
                            Learn More
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 pe-1 ">
                    <div class="services-item p-3">
                        <h2 class="h4 fw-bolder">CropGap</h2>
                        <p class="mb-1">A service designed to provide on-farm extension, remediation and advisory for small-holder farmers to improve their productivity through Best Agronomic Practices...</p>
                        <a class="text-decoration-none small green" href="cropgap.html">
                            Learn More
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 pe-1">
                    <div class="services-item p-3">
                        <h2 class="h4 fw-bolder">FarmLord</h2>
                        <p class="mb-1">This is a farm management service designed for clients looking to outsource their primary production function to ensure maximum yields.</p>
                        <a class="text-decoration-none small green" href="farm-lord.html">
                            Learn More
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                </div>


                <div class="col-md-6 pe-1">
                    <div class="services-item p-3">
                        <h2 class="h4 fw-bolder">Farm <span style="font-family:'Segoe UI'">&amp;</span> Farm Enrollment</h2>
                        <p class="mb-1">The tool also allows for Farmer Enrollment/capturing of bio-data and proper profiling of farmers and their production assets like land for access to financing...</p>
                        <a class="text-decoration-none small green" href="farm-enrollment.html">
                            Learn More
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features section-->

    <section class="pb-5" id="farms">
        <div class="container p-5 w-lg-75">
            <div class="row gx-5 gy-4">
                <h2 class="">Our <span class="">Farms</span></h2>
                <p class="mt-0">We have a track record of employing the right skill and experience of our people to <br> bring an expertise touch to every job, institution systems and technology.</p>
                <div class="col-lg-6">
                    <div class="border-green-light round-xl">
                        <div class="">
                            <img src="assets/bida-farm-soya-beans.jpg" class="img-fluid" alt="Agro allied farm trucks">
                        </div>
                        <div class="p-4">
                            <h4 class="mb-2">Bida Farm</h4>
                            <p class="m-0">LOCATION: BIDA, NIGER STATE <br>
                                SIZE: 290HA <br>
                                CROP: MAIZE AND RICE
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="border-green-light round-xl">
                        <div class="">
                            <img src="assets/Ebu-farm.jpg" class="img-fluid" alt="Agro allied farm trucks">
                        </div>
                        <div class="p-4">
                            <h4 class="mb-2">Abba Farm</h4>
                            <p class="m-0">LOCATION: EBU, DELTA STATE<br>
                                SIZE: 365HA<br>
                                CROPS: RICE
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <!-- CTA section-->

    <?php include('./includes/cta.php'); ?>

    <!-- Footer section-->
    <?php include('./includes/footer.php'); ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <!-- nav menu -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // make it as accordion for smaller screens
            if (window.innerWidth < 992) {

                // close all inner dropdowns when parent is closed
                document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
                    everydropdown.addEventListener('hidden.bs.dropdown', function() {
                        // after dropdown is hidden, then find all submenus
                        this.querySelectorAll('.submenu').forEach(function(everysubmenu) {
                            // hide every submenu as well
                            everysubmenu.style.display = 'none';
                        });
                    })
                });

                document.querySelectorAll('.dropdown-menu a').forEach(function(element) {
                    element.addEventListener('click', function(e) {
                        let nextEl = this.nextElementSibling;
                        if (nextEl && nextEl.classList.contains('submenu')) {
                            // prevent opening link if link needs to open dropdown
                            e.preventDefault();
                            if (nextEl.style.display == 'block') {
                                nextEl.style.display = 'none';
                            } else {
                                nextEl.style.display = 'block';
                            }

                        }
                    });
                })
            }
            // end if innerWidth
        });
        // DOMContentLoaded  end
    </script>
</body>

</html>