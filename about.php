<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Expense Voyage - About Us</title>
</head>
<?php
include 'head.php';
?>

<body>

    <!-- Spiner & Topbar Start -->
    <?php
    include 'topbar.php';
    ?>
    <!-- Spiner & Topbar Start -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0" style="display: flex; align-items: center;">
                <img src="img\logo-1.png" alt="">
                <h1 class="m-0"> Expenses Voyage</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link active">About</a>
                    <a href="countrys.php" class="nav-item nav-link">Destination</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Trips</a>
                        <div class="dropdown-menu m-0">
                            <a href="countrys.php" class="dropdown-item">Individual</a>
                            <a href="combine.php" class="dropdown-item">Package</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="team.php" class="nav-link nav-item">Our Guides</a>
                </div>

                <!-- Profile dropdown -->
                <?php if (isset($_SESSION['name'])): ?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle btn btn-primary rounded-pill py-2 px-4"
                            data-bs-toggle="dropdown">
                            <?php echo "Welcome, " . $_SESSION['name']; ?>
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="profile.php" class="dropdown-item">Profile</a>
                            <a href="logout.php" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="login/account.php" class="btn btn-primary rounded-pill py-2 px-4">Login / Register</a>
                <?php endif; ?>
            </div>

        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown text-uppercase" style="font-family: 'Protest Guerrilla', system-ui;
                        font-weight: 400;
                        font-style: normal;">About Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item fs-5 fw-bold"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item text-white active fs-5 fw-bold" aria-current="page">About
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="https://i.pinimg.com/736x/c8/28/51/c8285195e37daec951e4c68803b7a13e.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">Expense Voyage</span></h1>
                    <p class="mb-4">At Expense Voyage, we turn your travel dreams into unforgettable experiences. Our
                        dedicated team of travel experts is committed to crafting personalized itineraries that cater to
                        your unique preferences and desires.</p>
                    <p class="mb-4">From exotic getaways to adventurous road trips, we handle every detail with care and
                        creativity. Trust us to navigate your travel journey, ensuring a seamless and enjoyable
                        experience from start to finish.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Customized Travel
                                Itineraries</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Exclusive Destination
                                Packages</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Expert Travel Advice</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Premium Accommodation
                                Selection</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Partnerships with Top
                                Airlines</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Travel Support</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="countrys.php">Read More</a>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Tour Guide</h6>
                <h1 class="mb-5">Meet Our Team</h1>
            </div>
            <?php
            // Include database connection
            include 'db.php';

            // Fetch team members from database
            $sql = "SELECT full_name, designation, image_url, facebook_url, twitter_url, instagram_url FROM team";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $teamMembers = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <div class="row g-4">
                <?php
                if (!empty($teamMembers)) {
                    // Loop through each team member and display their details
                    foreach ($teamMembers as $row) {
                ?>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid team_img" src="<?php echo htmlspecialchars($row['image_url']); ?>"
                                        height="" alt="">
                                </div>
                                <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                                    <a class="btn btn-square mx-1"
                                        href="<?php echo htmlspecialchars($row['facebook_url']); ?>"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1"
                                        href="<?php echo htmlspecialchars($row['twitter_url']); ?>"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1"
                                        href="<?php echo htmlspecialchars($row['instagram_url']); ?>"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="text-center p-4">
                                    <h5 class="mb-0">
                                        <?php echo htmlspecialchars($row['full_name']); ?>
                                    </h5>
                                    <small>
                                        <?php echo htmlspecialchars($row['designation']); ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "No team members found.";
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <?php
    include "footer.php";
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Javascript -->
    <script src="js/main.js"></script>
</body>

</html>