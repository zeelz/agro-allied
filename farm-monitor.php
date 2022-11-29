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
    <div class="hero-bg bg-dark technology farm-monitor">

        <?php include('./includes/nav.php'); ?>

        <!-- Header-->
        <header class="bg-dark__ py-2 py-lg-5 my-2 my-lg-5">
            <div class="container px-5">
                <div class="row gx-5">
                    <div class="col-lg-9 transparent-blk">
                        <div class="my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">Enhancing the <span class="accent-yellow">performance</span> and
                                <span class="accent-yellow">Productivity</span> of farms by real<span class="f-default">-</span>time monitoring of farms
                            </h1>
                            <p class="lead text-white mb-4 fs-5 lh-sm">We are a farm project-management company established to provide both cloud-based Enterprise Resource Planning (ERP) to enable real-time monitoring for private and cluster farms for improved farm operations</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <!-- Features section-->
    <section class="pb-5">
        <div class="container p-5 w-75">
            <h2 class="mb-md-4">Farm <span class="">Monitor</span></h2>

            <p>A simplified project management tool for farmers and stakeholders. With our innovative FARM MONITOR web Portal and mobile App, all the financier, investors and lenders have to do is login and follow activities, expenses, lessons learnt and work done by smallholder farmers. The system tracks and displays performance metrics captured through both Drones/ Satellite imagery as well as field supervisors and uploaded on our portal to provide real time information through a user-friendly dashboard.
                <br>For the smallholder farmer dashboard, the tool's modules combine project management elements like our innovative crop calendar (with Artificial intelligence that advises farmers on windows of activity based on Weather forecast), information regarding crop health, on-site crop remediation, farm finance, inventory and farm advisory to give them data to make critical decisions across key production areas in line with recommended best practices for crop production.
            </p>

            <a href="https://farmmonitor.africa/" class="btn btn-outline-success rounded-0" target="_blank">Farm Monitor</a>

            <!-- <div class="mt-md-4">
                    <img src="assets/farm-lord.jpg" class="img-fluid" alt="Farm Lord Cycle">
                </div> -->

        </div>
    </section>

    <!-- Features section-->

    <section class="pb-5 bg-yellow-light" id="farms">
        <div class="container p-5 w-75">
            <div class="row gx-5 gy-4">
                <div class="col-lg-6">
                    <div class="border-green round-xl">
                        <div class="p-4">
                            <h4 class="mb-2">Deliverables</h4>

                            <ul class="agro-list-marker text-start">
                                <li>
                                    <i class="bi bi-check-square pe-2"></i>
                                    Status, performance, productivity and variance reporting
                                </li>
                                <li>
                                    <i class="bi bi-check-square pe-2"></i>
                                    Crop Health monitoring
                                </li>
                                <li>
                                    <i class="bi bi-check-square pe-2"></i>
                                    Technology & boots-on-ground
                                </li>
                            </ul>
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