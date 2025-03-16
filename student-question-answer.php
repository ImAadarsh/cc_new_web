<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Coach | Guiding Future </title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="assets/css/plugins/fontawesome-6.css">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.css">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="assets/css/vendor/metismenu.css">
    <!-- custom style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- header style one -->
    <!-- header style one -->
<?php include "include/header.php"; ?>
    <!-- header style end -->
    <!-- header style end -->


    <!-- dashboard banner area start -->
    <div class="dashboard-banner-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dashboard-banner-area-start bg_image  student-dashboard">
                        <div class="rating-area-banner-dashboard">
                            <a href="become-instructor.php" class="create-btn"><i class="fa-regular fa-circle-plus"></i> Become an Instructor</a>
                        </div>
                        <div class="author-profile-image-and-name">
                            <div class="profile-pic">
                                <img src="assets/images/dashboard/04.png" alt="dashboard">
                            </div>
                            <div class="name-desig">
                                <h1 class="title">Jon Adam</h1>
                                <div class="course-vedio">
                                    <div class="single">
                                        <i class="fa-thin fa-book"></i>
                                        <span>5 Course Enrolled</span>
                                    </div>
                                    <div class="single">
                                        <i class="fa-thin fa-file-certificate"></i>
                                        <span>4 Certificate</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- dashboard banner area end -->



    <!-- rts dahboard-area-main-wrapper -->
    <div class="dashboard--area-main pt--100">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="left-sindebar-dashboard">
                        <div class="dashboard-left-single-wrapper">
                            <!-- single item -->
                            <a href="student-dashboard.php" class="single-item ">
                                <i class="fa-light fa-house"></i>
                                <p>Dashboard</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-profile.php" class="single-item ">
                                <i class="fa-regular fa-user"></i>
                                <p>My Profile</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-enroll-course.php" class="single-item ">
                                <i class="fa-light fa-graduation-cap"></i>
                                <p>Enrolled Courses</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-wishlist.php" class="single-item ">
                                <i class="fa-sharp fa-light fa-bookmark"></i>
                                <p>Wishlist</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-reviews.php" class="single-item ">
                                <i class="fa-regular fa-star"></i>
                                <p>Reviews</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-quiz-attempts.php" class="single-item ">
                                <i class="fa-sharp fa-light fa-bullseye-pointer"></i>
                                <p>My Quiz Attempts</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-order-history.php" class="single-item ">
                                <i class="fa-sharp fa-light fa-bag-shopping"></i>
                                <p>Order History</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-question-answer.php" class="single-item active">
                                <i class="fa-regular fa-circle-question"></i>
                                <p>Question & Answer</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-calender.php" class="single-item ">
                                <i class="fa-light fa-calendar-days"></i>
                                <p>Calendar</p>
                            </a>
                            <!-- single item end -->
                        </div>
                        <div class="dashboard-left-single-wrapper bbnone mt--40">
                            <h4 class="title mb--5">User</h4>
                            <!-- single item -->
                            <a href="student-settings.php" class="single-item ">
                                <i class="fa-sharp fa-regular fa-gear"></i>
                                <p>Settings</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="index.php" class="single-item">
                                <i class="fa-light fa-right-from-bracket"></i>
                                <p>Logout</p>
                            </a>
                            <!-- single item end -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="rts-reviewd-area-dashed table-responsive" style="white-space: nowrap;">
                        <h5 class="title">Question & Answer</h5>
                        <div class="short-by--category-sash">
                            <span>Sort By:</span>
                            <select class="nice-select" name="price">
                                <option>Read (12)</option>
                                <option value="asc">Stars (30)</option>
                                <option value="desc">Comments(42)</option>
                                <option value="pop">Popularity (20)</option>
                                <option value="low">Questions & Ans (10)</option>
                                <option value="high">Stars (52)</option>
                            </select>
                        </div>
                        <table class="table-reviews quiz">
                            <thead>
                                <tr>
                                    <th style="width: 20%;">Student</th>
                                    <th style="width: 35%;">Question</th>
                                    <th style="width: 15%;">Reply</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="questions-answer">
                                <tr>
                                    <td>
                                        <div class="students-questions">
                                            <img src="assets/images/dashboard/reviews/01.png" alt="review">
                                            <div class="information-q">
                                                <p>Students</p>
                                                <span>3 days</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions" style="display: block;"> How to play the Guitar</span>
                                        <span>Course: Speaking Korean for Beginners</span>
                                    </td>
                                    <td>
                                        <span class="marks">0</span>
                                    </td>
                                    <td>
                                        <div class="status-btn-wrapper">
                                            <i class="fa-light fa-circle-check"></i>
                                            <div class="button-area">
                                                <a href="#" class="rts-btn btn-primary">Replay</a>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="students-questions">
                                            <img src="assets/images/dashboard/reviews/02.png" alt="review">
                                            <div class="information-q">
                                                <p>Students</p>
                                                <span>3 days</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions" style="display: block;"> How to play the Guitar</span>
                                        <span>Course: Speaking Korean for Beginners</span>
                                    </td>
                                    <td>
                                        <span class="marks">0</span>
                                    </td>
                                    <td>
                                        <div class="status-btn-wrapper">
                                            <i class="fa-light fa-circle-check"></i>
                                            <div class="button-area">
                                                <a href="#" class="rts-btn btn-primary">Replay</a>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="students-questions">
                                            <img src="assets/images/dashboard/reviews/03.png" alt="review">
                                            <div class="information-q">
                                                <p>Students</p>
                                                <span>3 days</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions" style="display: block;"> How to play the Guitar</span>
                                        <span>Course: Speaking Korean for Beginners</span>
                                    </td>
                                    <td>
                                        <span class="marks">0</span>
                                    </td>
                                    <td>
                                        <div class="status-btn-wrapper">
                                            <i class="fa-light fa-circle-check"></i>
                                            <div class="button-area">
                                                <a href="#" class="rts-btn btn-primary">Replay</a>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="students-questions">
                                            <img src="assets/images/dashboard/reviews/04.png" alt="review">
                                            <div class="information-q">
                                                <p>Students</p>
                                                <span>3 days</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions" style="display: block;"> How to play the Guitar</span>
                                        <span>Course: Speaking Korean for Beginners</span>
                                    </td>
                                    <td>
                                        <span class="marks">0</span>
                                    </td>
                                    <td>
                                        <div class="status-btn-wrapper">
                                            <i class="fa-light fa-circle-check"></i>
                                            <div class="button-area">
                                                <a href="#" class="rts-btn btn-primary">Replay</a>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="students-questions">
                                            <img src="assets/images/dashboard/reviews/05.png" alt="review">
                                            <div class="information-q">
                                                <p>Students</p>
                                                <span>3 days</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions" style="display: block;"> How to play the Guitar</span>
                                        <span>Course: Speaking Korean for Beginners</span>
                                    </td>
                                    <td>
                                        <span class="marks">0</span>
                                    </td>
                                    <td>
                                        <div class="status-btn-wrapper">
                                            <i class="fa-light fa-circle-check"></i>
                                            <div class="button-area">
                                                <a href="#" class="rts-btn btn-primary">Replay</a>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="students-questions">
                                            <img src="assets/images/dashboard/reviews/06.png" alt="review">
                                            <div class="information-q">
                                                <p>Students</p>
                                                <span>3 days</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions" style="display: block;"> How to play the Guitar</span>
                                        <span>Course: Speaking Korean for Beginners</span>
                                    </td>
                                    <td>
                                        <span class="marks">0</span>
                                    </td>
                                    <td>
                                        <div class="status-btn-wrapper">
                                            <i class="fa-light fa-circle-check"></i>
                                            <div class="button-area">
                                                <a href="#" class="rts-btn btn-primary">Replay</a>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="students-questions">
                                            <img src="assets/images/dashboard/reviews/07.png" alt="review">
                                            <div class="information-q">
                                                <p>Students</p>
                                                <span>3 days</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions" style="display: block;"> How to play the Guitar</span>
                                        <span>Course: Speaking Korean for Beginners</span>
                                    </td>
                                    <td>
                                        <span class="marks">0</span>
                                    </td>
                                    <td>
                                        <div class="status-btn-wrapper">
                                            <i class="fa-light fa-circle-check"></i>
                                            <div class="button-area">
                                                <a href="#" class="rts-btn btn-primary">Replay</a>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="students-questions">
                                            <img src="assets/images/dashboard/reviews/08.png" alt="review">
                                            <div class="information-q">
                                                <p>Students</p>
                                                <span>3 days</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions" style="display: block;"> How to play the Guitar</span>
                                        <span>Course: Speaking Korean for Beginners</span>
                                    </td>
                                    <td>
                                        <span class="marks">0</span>
                                    </td>
                                    <td>
                                        <div class="status-btn-wrapper">
                                            <i class="fa-light fa-circle-check"></i>
                                            <div class="button-area">
                                                <a href="#" class="rts-btn btn-primary">Replay</a>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="students-questions">
                                            <img src="assets/images/dashboard/reviews/09.png" alt="review">
                                            <div class="information-q">
                                                <p>Students</p>
                                                <span>3 days</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions" style="display: block;"> How to play the Guitar</span>
                                        <span>Course: Speaking Korean for Beginners</span>
                                    </td>
                                    <td>
                                        <span class="marks">0</span>
                                    </td>
                                    <td>
                                        <div class="status-btn-wrapper">
                                            <i class="fa-light fa-circle-check"></i>
                                            <div class="button-area">
                                                <a href="#" class="rts-btn btn-primary">Replay</a>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="students-questions">
                                            <img src="assets/images/dashboard/reviews/10.png" alt="review">
                                            <div class="information-q">
                                                <p>Students</p>
                                                <span>3 days</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions" style="display: block;"> How to play the Guitar</span>
                                        <span>Course: Speaking Korean for Beginners</span>
                                    </td>
                                    <td>
                                        <span class="marks">0</span>
                                    </td>
                                    <td>
                                        <div class="status-btn-wrapper">
                                            <i class="fa-light fa-circle-check"></i>
                                            <div class="button-area">
                                                <a href="#" class="rts-btn btn-primary">Replay</a>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="students-questions">
                                            <img src="assets/images/dashboard/reviews/11.png" alt="review">
                                            <div class="information-q">
                                                <p>Students</p>
                                                <span>3 days</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions" style="display: block;"> How to play the Guitar</span>
                                        <span>Course: Speaking Korean for Beginners</span>
                                    </td>
                                    <td>
                                        <span class="marks">0</span>
                                    </td>
                                    <td>
                                        <div class="status-btn-wrapper">
                                            <i class="fa-light fa-circle-check"></i>
                                            <div class="button-area">
                                                <a href="#" class="rts-btn btn-primary">Replay</a>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="students-questions">
                                            <img src="assets/images/dashboard/reviews/01.png" alt="review">
                                            <div class="information-q">
                                                <p>Students</p>
                                                <span>3 days</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="questions" style="display: block;"> How to play the Guitar</span>
                                        <span>Course: Speaking Korean for Beginners</span>
                                    </td>
                                    <td>
                                        <span class="marks">0</span>
                                    </td>
                                    <td>
                                        <div class="status-btn-wrapper">
                                            <i class="fa-light fa-circle-check"></i>
                                            <div class="button-area">
                                                <a href="#" class="rts-btn btn-primary">Replay</a>
                                                <i class="fa-regular fa-ellipsis-vertical"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="pagination-full-width">
                            <span>Page 1 of 4</span>
                            <div class="pagination">
                                <ul>
                                    <li><a href="#0" class="prev"><i class="fa-solid fa-chevron-left"></i></a></li>
                                    <li><a href="#0">1</a></li>
                                    <li><a href="#0">2</a></li>
                                    <li><a href="#0">3</a></li>
                                    <li><a href="#0">4</a></li>
                                    <li><a href="#0" class="next"><i class="fa-solid fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts dahboard-area-main-wrapper end -->


    <div class="rts-section-gapTop">

    </div>

    <!-- footer dashboards area -->
<?php include "include/footer.php"; ?> 
    <!-- footer dashboards area end -->


    <!-- cart area start -->

    <!-- cart area start -->
<?php include "include/cart.php"; ?>
    <!-- cart area edn -->
    <!-- cart area edn -->

    <!-- header style two -->
    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk">
            <div class="thumbnail">
                <img src="assets/images/banner/04.jpg" alt="elevate">
            </div>
            <div class="inner-content">
                <h4 class="title">We Build Building and Great Constructive Homes.</h4>
                <p class="disc">
                    We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies.
                </p>
                <div class="footer">
                    <h4 class="title">Got a project in mind?</h4>
                    <a href="contact.php" class="rts-btn btn-primary">Let's talk</a>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li class="has-droupdown">
                        <a href="#" class="main">Home</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="index.php">Main Home</a></li>
                            <li><a class="mobile-menu-link" href="index-two.php">Online Course</a></li>
                            <li><a class="mobile-menu-link" href="index-three.php">Course Hub</a></li>
                            <li><a class="mobile-menu-link" href="index-four.php">Distance Learning</a></li>
                            <li><a class="mobile-menu-link" href="index-five.php">Single Instructor</a></li>
                            <li><a class="mobile-menu-link" href="index-six.php">Language Academy</a></li>
                            <li><a class="mobile-menu-link" href="index-seven.php">Gym Instructor</a></li>
                            <li><a class="mobile-menu-link" href="index-eight.php">Kitchen Coach</a></li>
                            <li><a class="mobile-menu-link" href="index-nine.php">Course Portal</a></li>
                            <li><a class="mobile-menu-link" href="index-ten.php">Business Coach</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Pages</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="about.php">About Us</a></li>
                            <li><a class="mobile-menu-link" href="about-two.php">About Us Two</a></li>
                            <li><a class="mobile-menu-link" href="instructor-profile.php">Profile</a></li>
                            <li><a class="mobile-menu-link" href="contact.php">Contact</a></li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Zoom</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="zoom-meeting.php"></a>Zoom Meeting</li>
                                    <li><a href="zoom-details.php"></a>Zoom Details</li>
                                </ul>
                            </li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Event</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="event.php"></a>Event</li>
                                    <li><a href="event-two.php"></a>Event Two</li>
                                    <li><a href="event-details.php"></a>Event Details</li>
                                </ul>
                            </li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Shop</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="shop.php"></a>Shop</li>
                                    <li><a href="product-details.php"></a>Product Details</li>
                                    <li><a href="checkout.php"></a>Checkout</li>
                                    <li><a href="cart.php"></a>Cart</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Course</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="#" class="tag">Courses</a></li>
                            <li><a class="mobile-menu-link" href="course-one.php">Courses</a></li>
                            <li><a class="mobile-menu-link" href="course-two.php">Course List</a></li>
                            <li><a class="mobile-menu-link" href="course-three.php">Course Grid</a></li>
                            <li><a class="mobile-menu-link" href="course-four.php">Course List Two</a></li>
                            <li><a class="mobile-menu-link" href="course-five.php">Course Grid Two</a></li>
                            <li><a class="mobile-menu-link" href="course-six.php">Course Filter</a></li>
                        </ul>
                        <ul class="submenu mm-collapse">
                            <li><a href="#" class="tag">Courses Details</a></li>
                            <li><a class="mobile-menu-link" href="single-course.php">Courses Details</a></li>
                            <li><a class="mobile-menu-link" href="single-course-two.php">Courses Details V2</a></li>
                            <li><a class="mobile-menu-link" href="single-course-three.php">Courses Details V3</a></li>
                            <li><a class="mobile-menu-link" href="single-course-four.php">Courses Details V4</a></li>
                            <li><a class="mobile-menu-link" href="single-course-five.php">Courses Details V5</a></li>
                            <li><a class="mobile-menu-link" href="single-course-free.php">Courses Details Free</a></li>
                        </ul>
                        <ul class="submenu mm-collapse">
                            <li><a href="#" class="tag">Others</a></li>
                            <li><a class="mobile-menu-link" href="become-instructor.php">Become an Instructor</a></li>
                            <li><a class="mobile-menu-link" href="instructor-profile.php">Instructor Profile</a></li>
                            <li><a class="mobile-menu-link" href="instructor.php">Instructor</a></li>
                            <li><a class="mobile-menu-link" href="pricing.php">Membership Plan</a></li>
                            <li><a class="mobile-menu-link" href="log-in.php">Log In</a></li>
                            <li><a class="mobile-menu-link" href="registration.php">Registration</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Dashboard</a>
                        <ul class="submenu mm-collapse">
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Instructor Dashboard</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="dashboard.php"></a>Dashboard</li>
                                    <li><a href="my-profile.php"></a>My Profile</li>
                                    <li><a href="enroll-course.php"></a>Enroll Course</li>
                                    <li><a href="wishlist.php"></a>Wishlist</li>
                                    <li><a href="reviews.php"></a>Reviews</li>
                                    <li><a href="quick-attempts.php"></a>Quick Attempts</li>
                                    <li><a href="order-history.php"></a>Order History</li>
                                    <li><a href="question-answer.php"></a>Question Answer</li>
                                    <li><a href="calender.php"></a>Calender</li>
                                    <li><a href="my-course.php"></a>My Course</li>
                                    <li><a href="announcement.php"></a>Announcement</li>
                                    <li><a href="assignments.php"></a>Assignments</li>
                                    <li><a href="certificate.php"></a>Certificate</li>
                                </ul>
                            </li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Students Dashboard</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="student-dashboard.php"></a>Dashboard</li>
                                    <li><a href="student-profile.php"></a>My Profile</li>
                                    <li><a href="student-enroll-course.php"></a>Enroll Course</li>
                                    <li><a href="student-wishlist.php"></a>Wishlist</li>
                                    <li><a href="student-reviews.php"></a>Reviews</li>
                                    <li><a href="student-quick-attempts.php"></a>Quick Attempts</li>
                                    <li><a href="student-order-history.php"></a>Order History</li>
                                    <li><a href="student-question-answer.php"></a>Question Answer</li>
                                    <li><a href="student-calender.php"></a>Calender</li>
                                    <li><a href="student-settings.php"></a>Students Settings</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Blog</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="blog.php">Blog</a></li>
                            <li><a class="mobile-menu-link" href="blog-grid.php">Blog Grid</a></li>
                            <li><a class="mobile-menu-link" href="blog-list.php">Blog List</a></li>
                            <li><a class="mobile-menu-link" href="blog-right-sidebar.php">Blog Right Sidebar</a></li>
                            <li><a class="mobile-menu-link" href="blog-left-sidebar.php">Blog Left Sidebar</a></li>
                            <li><a class="mobile-menu-link" href="blog-details.php">Blog Details</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div class="buttons-area">
                <a href="#" class="rts-btn btn-border">Log In</a>
                <a href="#" class="rts-btn btn-primary">Sign Up</a>
            </div>

            <div class="rts-social-style-one pl--20 mt--50">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->

    <!-- modal -->
    <div id="myModal-1" class="modal fade" role="dialog">
        <div class="modal-dialog bg_image">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal"><i class="fa-light fa-x"></i></button>
                </div>
                <div class="modal-body text-center">
                    <div class="inner-content">
                        <div class="title-area">
                            <span class="pre">Get Our Courses Free</span>
                            <h4 class="title">Wonderful for Learning</h4>
                        </div>
                        <form action="#">
                            <input type="text" placeholder="Your Mail.." required>
                            <button>Download Now</button>
                            <span>Your information will never be shared with any third party</span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts backto top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- rts backto top end -->

    <!-- offcanvase search -->
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <!-- offcanvase search -->
    <div id="anywhere-home" class="">
    </div>

<?php include "include/script.php"; ?>


</body>

</html>