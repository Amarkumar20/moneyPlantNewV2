<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Shubham Hunda | Money Plant</title>

    <link
      rel="icon"
      type="image/x-icon"
      href="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/9ed34182-1ed4-4424-7038-a868931af500/public"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="./assests/css/style.css" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="./assests/css/meet-the-team.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>

  <body>
    <?php
    include('header.php');
    ?>
    <Section class="meatTheTEamDetail">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12">
            <div class="MeetTeamContentDetailImgG">
              <figure>
                <img
                  src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/1b56f1ba-d660-4fac-e823-f081d4679700/public"
                  class="card-img-top"
                  alt="ImgTeam"
                />
              </figure>
            </div>
          </div>

          <div class="col-lg-9 col-md-12 col-sm-12">
            <div class="MeetTeamContentDetailText">
              <div class="NameDetails mb-4">
                <h1>Shubham Hunda</h1>
                <p class="positionPara">Managing Partner</p>
              </div>

              <div class="SocailMediaSection">
                <div class="EmailBox socailBox">
                  <a href="mailto:" class="">
                    <i class="bi bi-envelope me-2"></i>
                    <span>EMAIL</span>
                  </a>
                </div>
                <div class="callBox socailBox">
                  <a href="tel:+">
                    <i class="bi bi-telephone me-2"></i>
                    <span>CALL</span>
                  </a>
                </div>
                <div class="WhatAppBox socailBox">
                  <a href="tel:+">
                    <i class="bi bi-whatsapp me-2"></i>
                    <span>WHATSAPP</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="MeetLanguage mt-4">
              <p class="lang mt-2">
                <strong>Languages Spoken :</strong>
                <span class="spanOne">English</span>
              </p>
              <p class="lang mt-2">
                <strong>Active Listings :</strong>
                <span class="text-danger spanTwo">2 Sale Properties</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </Section>

    <?php
    include('footer.php');
    ?>

    <script src="./assests/js/script.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>

    <script>
      $(window).on("scroll", function () {
        if ($(window).scrollTop() > 20) {
          $(".scroolHeader").addClass("activeTop");
        } else {
          //remove the background property so it comes transparent again (defined in your css)

          $(".scroolHeader").removeClass("activeTop");
        }
      });
    </script>
  </body>
</html>
