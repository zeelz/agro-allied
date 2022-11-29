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
    <div class="bg-dark">

        <?php include('./includes/nav.php'); ?>

    </div>

    <section class="bg-yellow-light py-5 text-center">
        <div class="container my-5">
            <div class="col-lg-6 offset-lg-3">
                <h1>Request a <span class="accent-green">Demo</span></h1>

                <p>Want to know about our products and business? <br> Request a demo by submitting this form and we would in touch shortly
                </p>
            </div>
        </div>

    </section>

    <!-- contact section-->
    <section class="my-3 my-lg-5 py-2 py-lg-5">
        <div class="container">
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Contact Us</h4>
                <form id="contactForm" class="needs-validation" novalidate="">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="firstName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone" placeholder="" required="">
                            <div class="invalid-feedback">
                                Please enter your phone number.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label">Message</label>
                            <textarea class="form-control" id="message"></textarea>
                        </div>

                    </div>

                    <button id="formButton" class="w-100 btn btn-success btn-lg mt-3" type="submit">Submit</button>
                </form>
                <p id="formResponse" class="d-none border border text-white mt-2 p-2"> </p>
            </div>
        </div>
    </section>

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
    <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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

    <script>
        const searchQuery = new URLSearchParams(location.search)
        const email = searchQuery.get('email')
        document.getElementById('email').value = email
    </script>

    <!-- form handling -->
    <script>
        const contactForm = document.getElementById('contactForm')
        const formResponse = document.getElementById('formResponse')

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault()
            e.stopPropagation()

            const fdata = {
                email: contactForm.elements['email'].value,
                name: contactForm.elements['name'].value,
                phone: contactForm.elements['phone'].value,
                message: contactForm.elements['message'].value
            }

            const anyEmpty = Object.values(fdata).some((value) => value === '')

            if (anyEmpty) {
                formResponse.classList.remove('d-none')
                formResponse.classList.add('bg-danger')
                formResponse.innerHTML = 'Please complete all fields'
            } else {
                $
                    .ajax({
                        type: 'POST',
                        url: 'contactus.php',
                        dataType: 'json',
                        data: fdata,
                    })
                    .done(function(res) {
                        formResponse.classList.remove('d-none')
                        formResponse.innerHTML = res.feedback

                        if (res.success === true) {
                            formResponse.classList.add('bg-green-light')
                            formResponse.classList.remove('bg-danger')
                            formResponse.classList.remove('text-white')
                        } else {
                            formResponse.classList.add('bg-danger')
                        }
                    })
            }
        })
    </script>
</body>

</html>