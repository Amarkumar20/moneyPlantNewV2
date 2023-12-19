<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Meet The Team | Money-plant</title>

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

    <style>
      .form-control:focus {
        color: var(--bs-body-color);
        background-color: var(--bs-body-bg);
        /* border-color: #86b7fe; */
        outline: 0;
        box-shadow: none;
      }

      .GridSection {
        display: grid;
        grid-template-columns: auto auto auto auto;
        gap: 20px;
        overflow: hidden;
      }

      .profileSectionBox {
        display: grid;
        grid-template-columns: auto auto auto auto;
        gap: 20px;
      }

      .profileSectionBoxOne {
        display: flex;
        gap: 20px;
        justify-content: start;
      }
      .profileSectionBoxTwo {
        display: grid;
        grid-template-columns: auto auto auto auto;
        gap: 20px;
      }

      .SameGrid {
        display: contents;
      }
    </style>
  </head>

  <body>
    <?php include 'header.php'; ?>
    <Section class="MeetTeamSection">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="MeetTeamContent">
              <!-- <h1>Get ahead with exclusive</h1> -->
            </div>
          </div>
        </div>
      </div>
    </Section>
    <Section class="MeetPropertySection">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="meetingheading">
              <h1>Meet Your Property Experts</h1>
            </div>
            <div class="meetThePara">
              <p>
                We value honesty, transparency, and clarity in our approach with
                clients, developers, and everyone else that we work with because
                we are passionate about offering a service that takes away all
                the hassle from our clients and helps them enjoy the incredible
                lifestyle that Dubai has to offer. Come and meet the team.
              </p>
            </div>
          </div>
        </div>
      </div>
    </Section>
    <section class="MeetTheTeamTabSection">
      <div class="container">
        <div class="row pb-4 CusTumBorder mb-5">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <form action="#">
              <div class="SearchBar">
                <i class="bi bi-search"></i>
                <input
                  type="text"
                  id="combinedSearch"
                  class="search-input form-control"
                  placeholder="Search by Name or Position"
                  onkeyup="performSearch()"
                />
              </div>
            </form>
          </div>
         
          <div class="col-lg-6 col-md-12 col-sm-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item tabItem" role="presentation">
                <button
                  class="nav-link btn Btns active"
                  id="pills-home-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-home"
                  type="button"
                  role="tab"
                  aria-controls="pills-home"
                  aria-selected="true"
                >
                  Directors
                </button>
              </li>
              <li class="nav-item tabItem" role="presentation">
                <button
                  class="nav-link btn Btns"
                  id="pills-profile-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-profile"
                  type="button"
                  role="tab"
                  aria-controls="pills-profile"
                  aria-selected="false"
                >
                  Sales
                </button>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="tab-content" id="pills-tabContent">
              <div
                class="tab-pane fade show active"
                id="pills-home"
                role="tabpanel"
                aria-labelledby="pills-home-tab"
                tabindex="0"
              >
                <div class="profileSectionBoxOne">
                  <div
                    class="filterOneDiv directors"
                    data-name="Mohit Puri"
                    data-position="directors"
                  >
                    <div class="cardTeam teamImg">
                      <a
                        href="./meet-the-team-detail-Mohit-puri.php"
                        class="TeamHoverImg"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        <img
                          src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/fb7a5f8c-932b-46a6-bb8b-87923568d400/public"
                          class="img-fluid"
                          alt="ImgTeam"
                        />
                      </a>
                      <div class="card-body teamCard_body">
                        <a
                          href="./meet-the-team-detail-name1.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <h5 class="card-title">Mohit Puri</h5>
                        </a>
                        <a
                          href="./meet-the-team-detail-name1.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <p class="card-text fs-sm-6">Founder And Managing Partner</p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div
                    class="filterOneDiv directors"
                    data-name="Akshay Nagdev"
                    data-position="directors"
                  >
                    <div class="cardTeam teamImg">
                      <a
                        href="./meet-the-team-detail-Akshay-Nagdev.php"
                        class="TeamHoverImg"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        <img
                          src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/cb3d42b0-c92a-4c10-4089-7f5bc9b32b00/public"
                          class="img-fluid"
                          alt="ImgTeam"
                        />
                      </a>
                      <div class="card-body teamCard_body">
                        <a
                          href="/meet-the-team-detail-Akshay-Nagdev.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <h5 class="card-title">Akshay Nagdev</h5>
                        </a>
                        <a
                          href="/meet-the-team-detail-Akshay-Nagdev.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <p class="card-text fs-sm-6">Founder And Managing Partner</p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div
                    class="filterOneDiv directors"
                    data-name="Shubham Hunda"
                    data-position="directors"
                  >
                    <div class="cardTeam teamImg">
                      <a
                        href="./meet-the-team-detail-Shubham-Hunda.php"
                        class="TeamHoverImg"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        <img
                          src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/1b56f1ba-d660-4fac-e823-f081d4679700/public"
                          class="img-fluid"
                          alt="ImgTeam"
                        />
                      </a>
                      <div class="card-body teamCard_body">
                        <a
                          href="./meet-the-team-detail-Shubham-Hunda.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <h5 class="card-title">Shubham Hunda</h5>
                        </a>
                        <a
                          href="./meet-the-team-detail-Shubham-Hunda.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <p class="card-text fs-sm-6">Founder And Managing Partner</p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- ===== -->
              <div
                class="tab-pane fade"
                id="pills-profile"
                role="tabpanel"
                aria-labelledby="pills-profile-tab"
                tabindex="0"
              >
                <div class="profileSectionBoxTwo">
                  <div
                    class="filterOneDiv sales"
                    data-name="Sabnam Lama"
                    data-position="sales"
                  >
                    <div class="cardTeam teamImg">
                      <a
                        href="./meet-the-team-detail-Sabnam-Lama.php"
                        class="TeamHoverImg"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        <img
                          src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/d7bd23f0-5863-49c9-08b8-4ea9b0607800/public"
                          class="img-fluid"
                          alt="ImgTeam"
                        />
                      </a>
                      <div class="card-body teamCard_body">
                        <a
                          href="./meet-the-team-detail-Sabnam-Lama.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <h5 class="card-title">Sabnam Lama</h5>
                        </a>

                        <a
                          href="./meet-the-team-detail-Sabnam-Lama.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <p class="card-text">Sales</p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div
                    class="filterOneDiv sales"
                    data-name="Abhinav Singh"
                    data-position="sales"
                  >
                    <div class="cardTeam teamImg">
                      <a
                        href="./meet-the-team-detail-Abhinav-Singh.php"
                        class="TeamHoverImg"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        <img
                          src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/d7bd23f0-5863-49c9-08b8-4ea9b0607800/public"
                          class="img-fluid"
                          alt="ImgTeam"
                        />
                      </a>
                      <div class="card-body teamCard_body">
                        <a
                          href="./meet-the-team-detail-Abhinav-Singh.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <h5 class="card-title">Abhinav Singh</h5>
                        </a>
                        <a
                          href="./meet-the-team-detail-Abhinav-Singh.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <p class="card-text">Sales</p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div
                    class="filterOneDiv sales"
                    data-name="Naveen Kumar"
                    data-position="sales"
                  >
                    <div class="cardTeam teamImg">
                      <a
                        href="./meet-the-team-detail-Naveen-Kumar.php"
                        class="TeamHoverImg"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        <img
                          src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/d7bd23f0-5863-49c9-08b8-4ea9b0607800/public"
                          class="img-fluid"
                          alt="ImgTeam"
                        />
                      </a>
                      <div class="card-body teamCard_body">
                        <a
                          href="./meet-the-team-detail-Naveen-Kumar.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <h5 class="card-title">Naveen Kumar</h5>
                        </a>

                        <a
                          href="./meet-the-team-detail-Naveen-Kumar.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <p class="card-text">Sales</p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div
                    class="filterOneDiv sales"
                    data-name="Himani Julka"
                    data-position="sales"
                  >
                    <div class="cardTeam teamImg">
                      <a
                        href="./meet-the-team-detail-Himani-Julka.php"
                        class="TeamHoverImg"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        <img
                          src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/d7bd23f0-5863-49c9-08b8-4ea9b0607800/public"
                          class="img-fluid"
                          alt="ImgTeam"
                        />
                      </a>
                      <div class="card-body teamCard_body">
                        <a
                          href="./meet-the-team-detail-Himani-Julka.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <h5 class="card-title">Himani Julka</h5>
                        </a>

                        <a
                          href="./meet-the-team-detail-Himani-Julka.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <p class="card-text">Sales</p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div
                    class="filterOneDiv sales"
                    data-name="Shamsheer Ahamed"
                    data-position="sales"
                  >
                    <div class="cardTeam teamImg">
                      <a
                        href="./meet-the-team-detail-Shamsheer-Ahamed.php"
                        class="TeamHoverImg"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        <img
                          src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/d7bd23f0-5863-49c9-08b8-4ea9b0607800/public"
                          class="img-fluid"
                          alt="ImgTeam"
                        />
                      </a>
                      <div class="card-body teamCard_body">
                        <a
                          href="./meet-the-team-detail-Shamsheer-Ahamed.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <h5 class="card-title">Shamsheer Ahamed</h5>
                        </a>

                        <a
                          href="./meet-the-team-detail-Shamsheer-Ahamed.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <p class="card-text">Sales</p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div
                    class="filterOneDiv sales"
                    data-name="Shamsheer Ahamed"
                    data-position="sales"
                  >
                    <div class="cardTeam teamImg">
                      <a
                        href="./meet-the-team-detail-Shamsheer-Ahamed.php"
                        class="TeamHoverImg"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        <img
                          src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/d7bd23f0-5863-49c9-08b8-4ea9b0607800/public"
                          class="img-fluid"
                          alt="ImgTeam"
                        />
                      </a>
                      <div class="card-body teamCard_body">
                        <a
                          href="./meet-the-team-detail-Shamsheer-Ahamed.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <h5 class="card-title">Shamsheer Ahamed</h5>
                        </a>

                        <a
                          href="./meet-the-team-detail-Shamsheer-Ahamed.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <p class="card-text">Sales</p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div
                    class="filterOneDiv sales"
                    data-name="Pravin Manokaran"
                    data-position="sales"
                  >
                    <div class="cardTeam teamImg">
                      <a
                        href="./meet-the-team-detail-Pravin-Manokaran.php"
                        class="TeamHoverImg"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        <img
                          src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/d7bd23f0-5863-49c9-08b8-4ea9b0607800/public"
                          class="img-fluid"
                          alt="ImgTeam"
                        />
                      </a>

                      <div class="card-body teamCard_body">
                        <a
                          href="./meet-the-team-detail-Pravin-Manokaran.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <h5 class="card-title">Pravin Manokaran</h5>
                        </a>

                        <a
                          href="./meet-the-team-detail-Pravin-Manokaran.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <p class="card-text">Sales</p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div
                    class="filterOneDiv sales"
                    data-name="Syed Mohammed Ali"
                    data-position="sales"
                  >
                    <div class="cardTeam teamImg">
                      <a
                        href="./meet-the-team-detail-syed-Mohammed-Ail.php"
                        class="TeamHoverImg"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        <img
                          src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/d7bd23f0-5863-49c9-08b8-4ea9b0607800/public"
                          class="img-fluid"
                          alt="ImgTeam"
                        />
                      </a>
                      <div class="card-body teamCard_body">
                        <a
                          href="./meet-the-team-detail-syed-Mohammed-Ail.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <h5 class="card-title">Syed Mohammed Ali</h5>
                        </a>

                        <a
                          href="./meet-the-team-detail-syed-Mohammed-Ail.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <p class="card-text">Sales</p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div
                    class="filterOneDiv sales"
                    data-name="Syed Mohammed Ali"
                    data-position="sales"
                  >
                    <div class="cardTeam teamImg">
                      <a
                        href="./meet-the-team-detail-syed-Mohammed-Ail.php"
                        class="TeamHoverImg"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        <img
                          src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/d7bd23f0-5863-49c9-08b8-4ea9b0607800/public"
                          class="img-fluid"
                          alt="ImgTeam"
                        />
                      </a>
                      <div class="card-body teamCard_body">
                        <a
                          href="./meet-the-team-detail-syed-Mohammed-Ail.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <h5 class="card-title">Syed Mohammed Ali</h5>
                        </a>

                        <a
                          href="./meet-the-team-detail-syed-Mohammed-Ail.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <p class="card-text">Sales</p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div
                    class="filterOneDiv sales"
                    data-name="Jyoti Sharma"
                    data-position="sales"
                  >
                    <div class="cardTeam teamImg">
                      <a
                        href="./meet-the-team-detail-Jyoti-Sharma.php"
                        class="TeamHoverImg"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        <img
                          src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/d7bd23f0-5863-49c9-08b8-4ea9b0607800/public"
                          class="img-fluid"
                          alt="ImgTeam"
                        />
                      </a>

                      <div class="card-body teamCard_body">
                        <a
                          href="./meet-the-team-detail-Jyoti-Sharma.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <h5 class="card-title">Jyoti Sharma</h5>
                        </a>

                        <a
                          href="./meet-the-team-detail-Jyoti-Sharma.php"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-decoration-none"
                        >
                          <p class="card-text">Sales</p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

       
      </div>
    </section>

    <?php include 'footer.php'; ?>

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
