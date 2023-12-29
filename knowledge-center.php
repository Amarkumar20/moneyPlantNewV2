<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Contact Us</title>

    <link rel="icon" type="image/x-icon"
        href="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/9ed34182-1ed4-4424-7038-a868931af500/public" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="./assests/css/style.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assests/css/aboutstyle.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        /* .ContactUsSection{
                  background: url('../assests/images/contactusbg.jpg') no-repeat center;
                  height: 60vh;
                  width: 100%;
                  position: relative;
                  display: flex;
                  align-items:center;
                  justify-content: center;
                  color:#fff;
                  font-size:2em;
              } */

        .ContactUsSection {
            padding: 140px 0px;
        }

        .contact-li,
        .side-panel .btn {
            display: flex;
        }

        .contact-li,
        .resident-text a {
            flex-direction: column;
            row-gap: 25px;
        }

        .contact-li li a {
            display: flex;
            width: 100%;
            column-gap: 25px;
            align-items: center;
            justify-content: space-between;
            border: 1px solid #1f663a;
            padding: 30px 50px 30px 30px;
            color: #1a1919;
            font-size: 1.25rem;
            position: relative;
            transition: .3s;

        }

        .contact-li li a:hover {
            -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0);
            box-shadow: 0 14px 28px rgb(246 254 244 / 25%), 0 10px 10px rgba(47, 173, 16, 0.22) transition: .3s;
            cursor: pointer;
            background-color: #1f663a;
        }

        .contact-li li a:hover .hoverDiv .iconColorr {
            color: #fff !important;
        }

        .contact-li li a:hover .hoverDiv span strong {
            color: #fff !important;
        }

        .contact-li li a:hover .hoverDiv span {
            color: #fff !important;
        }

        .contact-li li a:hover .arrowIcon {
            color: #fff !important;
        }


        .contact-li li a div {
            display: flex;
            align-items: center;
            column-gap: 25px;
            position: relative;
            padding-left: 65px;
            min-height: 45px;
        }

        .contact-li li {
            list-style: none;
        }

        .contact-li {
            padding-left: 0;
        }

        .contactHeading h1 {
            font-family: ui-sans-serif;
            font-size: 35px;
            font-weight: 600;
        }

        .contactPara p {
            font-family: ui-sans-serif;
            font-size: 18px;
            font-weight: 500;
        }

        .iconColorr {
            font-size: 40px;
            color: #1f663a;
        }

        .Videos_list li a,
        .contact-li li a span strong {
            font-family: ui-sans-serif;
            font-size: 25px;
            color: #000;
            font-weight: 500;
        }

        .Videos_list li a,
        .contact-li li a span {
            font-family: ui-sans-serif;
            color: #000;
            font-weight: 500;
        }

        .knowledge_center_img img {
            width: 100%;
        }



        @media only screen and (max-width: 780px) {
            .contact-li li a div {
                display: flex;
                align-items: center;
                column-gap: 25px;
                position: relative;
                padding-left: 0px;
                min-height: 45px;
            }

            .contactHeading h1 {
                font-family: ui-sans-serif;
                font-size: 30px;
                font-weight: 600;
                line-height: 35px;
            }


        }
    </style>
</head>

<body>
    <?php
include('header.php');
?>

    <section class="ContactUsSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="contactHeading">
                        <h1>Property Knowledge Center</h1>
                    </div>
                    <div class="contactPara">
                        <p>
                            Insights and information hub for real estate in Dubai
                        </p>
                    </div>

                    <div class="contactBox">
                        <ul class="contact-li">
                            <li class="mt-4">
                                <a href="#">
                                    <div class="hoverDiv">
                                        <i class="bi bi-telephone-fill iconColorr"></i>
                                        <span><strong>Telephone</strong><br />+971-045702605</span>
                                    </div>
                                    <i class="bi bi-arrow-right arrowIcon"></i>
                                </a>
                            </li>
                            <li>
                                <a href="area-guide.php">
                                    <div class="hoverDiv">
                                        <i class="bi bi-info-circle iconColorr"></i>
                                        <span><strong>Guides</strong><br />Area guide for living in Dubai.</span>
                                    </div>
                                    <i class="bi bi-arrow-right arrowIcon"></i>
                                </a>
                            </li>
                            <li>
                                <a href="knowledge-center-calculators.php">
                                    <div class="hoverDiv">
                                        <i class="bi bi-book iconColorr"></i>
                                        <span><strong>
                                                Property Calculators</strong><br />All the property calculators you need
                                            in one place</span>
                                    </div>
                                    <i class="bi bi-arrow-right arrowIcon"></i>
                                </a>
                            </li>

                           
                            <li>
                                <a href="#">
                                    <div class="hoverDiv">
                                        <i class="bi bi-buildings iconColorr"></i>
                                        <span><strong>Developers in Dubai</strong><br> Developers in Dubai content</span>
                                    </div>
                                    <i class="bi bi-arrow-right arrowIcon"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="knowledge_center_img">
                                <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/a4b8fb0d-c647-4aea-c943-e5cb0176a200/public"
                                    alt="Contact us-centre" />
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d93548.76635683775!2d55.22658554252961!3d25.10143569439828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b6589a226ff%3A0x3c0c4554406c0c7f!2sEmaar%20Business%20Park!5e0!3m2!1sen!2sin!4v1700032253401!5m2!1sen!2sin"
                                width="100%" height="400" style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
include('footer.php');
?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

    <script src="./assests/js/script.js"></script>

    <script>
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 20) {
                $(".scroolHeader").addClass("activeTop");

                $(".menuIcon").addClass("activeCircle");

                $(".bi-list ").addClass("activeIcon");
            } else {
                //remove the background property so it comes transparent again (defined in your css)

                $(".scroolHeader").removeClass("activeTop");

                $(".menuIcon").removeClass("activeCircle");

                $(".bi-list").removeClass("activeIcon");
            }
        });
    </script>
</body>

</html>