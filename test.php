<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"

        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <title></title>

     <link rel="stylesheet" href="./assests/css/style.css">
<link href="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/9ed34182-1ed4-4424-7038-a868931af500/public" rel="icon">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>

        main {

            padding-left: 15%;

            padding-right: 15%;

            margin-top: 116px;

        }
        .form-select{
            padding: 20px;
        }



        .stepper {

            width: 100%;

            /* margin: 10% auto 10% auto; */

        }



        .first-contanior {

            display: none;

        }

        .btn-success{
            background-color: #1f663a;
            padding: 12px 38px;
            font-size: 1.3rem;
        }



        .navbar{

             -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);

    -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);

    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);

    background-color: #fff;

        }



        .menuIcon {

    width: 40px;

    height: 40px;

    border-radius: 50%;

    border: 3px solid #1f663a;

    display: flex;

    justify-content: center;

    align-items: center;
    cursor: pointer;

}



.card-body i{

    margin-right: 10px;
    color: #1f663a;
    font-size: 18px;
}





.menuIcon .bi-list {

    font-size: 22px;

    font-weight: 900;

    color: #1f663a;
};



@media only screen and (max-width: 780px){
    main{
    padding: 10px !important;
     margin-top: 50px !important;
}


}

.card {
    padding: 0px;
}

    </style>

</head>



<body>





    <?php
include('header.php');
?>





    <main class="" >
        <div class="container shadow p-3 mb-5 bg-body rounded">
                  <div class="stepper mt-1">

            <div class="mt-2">

                <div class="first-contanior">

                    <div class="d-flex justify-content-center testHeading mb-4">

                        <h1>What kind of property are you looking for?</h1>

                    </div>

                    <div class="row justify-content-center ">

                        <div class="card m-3 " id="slectBtn" style="width: 18rem;"  onclick="changeColor()">

                            <label for="property1">

                                <div class="card-body d-flex justify-content-center align-items-center  flex-column">

                                    <!-- <i class="bi bi-key-fill"></i> -->
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><linearGradient id="fill-gradient" x1="-0.657721" y1="25.3117" x2="25.1534" y2="30.1192" gradientUnits="userSpaceOnUse"><stop stop-color="#1f663a"></stop><stop offset="0.421875" stop-color="#3C50E7"></stop><stop offset="1" stop-color="#6034FD"></stop></linearGradient><circle cx="10.0007" cy="13" r="2" stroke="#1f663a" stroke-width="1.5"></circle><path d="M10 20L6.85277 22.1232L6.85156 26.7079H10H13.0977V22.1232L10 20Z" stroke="#1f663a" stroke-width="1.5"></path><path d="M9.99907 11.3335C9.99907 11.3335 9.33016 1.3335 17.3346 1.3335C25.339 1.3335 24.668 11.3335 24.668 11.3335" stroke="#1f663a" stroke-width="1.5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M26.1538 17.3742C28.0463 16.7639 29.4154 14.9882 29.4154 12.8928C29.4154 10.2928 27.3077 8.18506 24.7077 8.18506C22.1077 8.18506 20 10.2928 20 12.8928C20 14.9882 21.3691 16.7639 23.2615 17.3742V25.5697L24.7385 27.5081L26.1538 25.0466L25.3538 23.4466L26.1538 21.662L25.3538 20.1543L26.1538 18.7642V17.3742Z" stroke="#1f663a" stroke-width="1.5"></path><path d="M2.66675 30.0721V14.0003L9.94367 6.66699L17.2206 14.0003V30.0721H9.94367H2.66675Z" stroke="#1f663a" stroke-width="1.5"></path><path d="M26 12.5C26 13.3284 25.3284 14 24.5 14C23.6716 14 23 13.3284 23 12.5C23 11.6716 23.6716 11 24.5 11C25.3284 11 26 11.6716 26 12.5Z" stroke="#1f663a" stroke-width="1.5"></path></svg>

                                    <p class="para">A primary residence</p>

                                    <input style="opacity: 0;" type="radio" id="property1" name="property"

                                        value="A primary residence">

                                </div>

                            </label>

                        </div>

                        <div class="card m-3 " id="slectBtn" style="width: 18rem;"  onclick="changeColor()">

                            <label for="property2">

                                <div class="card-body d-flex justify-content-center align-items-center flex-column">

                                    <!-- <i class="bi bi-currency-exchange "></i> -->
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="Invest house"><path id="Vector 499" d="M26.6667 10.3335V4.41683H23.3024V7.12516L17.3035 1.3335L1.33337 17.1252L5.95417 19.1252V29.3335H14" stroke="#1f663a" stroke-width="1" stroke-linejoin="round"></path><path id="Union" fill-rule="evenodd" clip-rule="evenodd" stroke-width="0.01" d="M20.5 29.25C20.5 29.6642 20.8358 30 21.25 30C21.6642 30 22 29.6642 22 29.25V26.75H23.5C24.6848 26.75 25.6063 26.3351 26.2173 25.633C26.8142 24.9473 27.0484 24.0647 27.0291 23.2326C27.0098 22.4023 26.7379 21.5575 26.238 20.9038C25.7305 20.2401 24.9632 19.75 24 19.75H22L22 15.75L25.4998 15.75C25.914 15.75 26.2498 15.4142 26.2498 15C26.2498 14.5857 25.9139 14.25 25.4997 14.25L22 14.25V11.75C22 11.3358 21.6642 11 21.25 11C20.8358 11 20.5 11.3358 20.5 11.75V14.25L18.9998 14.25C16.7651 14.2499 15.5204 16.0248 15.3646 17.6797C15.286 18.5147 15.4687 19.4002 15.9971 20.0947C16.5426 20.8117 17.4009 21.25 18.4996 21.25H20.5L20.5 25.25H16.4998C16.0856 25.25 15.7498 25.5858 15.7498 26C15.7498 26.4142 16.0863 26.75 16.5005 26.75H20.5V29.25ZM22 25.25H23.5C24.3152 25.25 24.7994 24.9774 25.0859 24.6482C25.3867 24.3027 25.5421 23.8103 25.5295 23.2674C25.5168 22.7227 25.3351 22.1925 25.0465 21.815C24.7654 21.4474 24.409 21.25 24 21.25H22L22 25.25ZM20.5 19.75L20.5 15.75L18.9998 15.75C17.7341 15.75 16.9611 16.725 16.858 17.8202C16.8072 18.3602 16.9348 18.8498 17.1909 19.1865C17.4301 19.5008 17.8306 19.75 18.4996 19.75H20.5Z" fill="#1f663a"></path></g></svg>

                                    <span class="para">An Investment</span>

                                    <input style="opacity: 0;" type="radio" name="property" id="property2"

                                        value="An Investment">

                                </div>

                            </label>

                        </div>

                    </div>

                    <div class="row justify-content-center" >

                        <div class="card m-3 " id="slectBtn" style="width: 18rem;"  onclick="changeColor()">

                            <label for="property3">

                                <div class="card-body d-flex justify-content-center align-items-center flex-column">

                                    <!-- <i class="bi bi-tree"></i> -->
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><linearGradient id="fill-gradient" x1="-0.657721" y1="25.3117" x2="25.1534" y2="30.1192" gradientUnits="userSpaceOnUse"><stop stop-color="#1f663a"></stop><stop offset="0.421875" stop-color="#3C50E7"></stop><stop offset="1" stop-color="#6034FD"></stop></linearGradient><g clip-path="url(#clip0_3832_7262)"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.2992 9.57631C21.1448 9.58466 20.9855 9.59614 20.8218 9.61136C19.3181 9.75146 17.9557 10.1554 17.1086 10.5871C16.7771 10.7562 16.3833 10.7499 16.0573 10.5704C15.7312 10.3909 15.5153 10.0615 15.4808 9.69096C15.4028 8.85365 15.7532 8.00606 16.5159 7.30181C17.2962 6.5814 18.557 5.99542 20.0455 5.7829C19.3823 5.33041 18.7448 4.99338 18.2206 4.79533C17.8725 4.66378 17.6121 4.36823 17.5255 4.00625C17.4389 3.64427 17.5373 3.26295 17.7883 2.98805C18.3552 2.36695 19.218 2.05587 20.2521 2.14625C21.4071 2.24718 22.829 2.87963 24.0665 4.0093C24.4367 4.34721 24.7649 4.70519 25.0475 5.07086C25.5145 4.97055 26.0138 4.90799 26.5335 4.89121C28.2082 4.83719 29.6999 5.28082 30.6432 5.95482C31.4878 6.55832 31.9412 7.35558 31.9683 8.19606C31.9803 8.56809 31.8072 8.92183 31.5061 9.14059C31.205 9.35942 30.8151 9.41475 30.465 9.28843C29.9328 9.09637 29.2207 8.93693 28.4131 8.85022C29.3436 9.92962 29.8934 11.1249 30.0257 12.1329C30.161 13.1621 29.8876 14.0377 29.2917 14.631C29.028 14.8936 28.6513 15.0085 28.2859 14.9377C27.9205 14.8669 27.6139 14.6196 27.4674 14.2775C27.0933 13.4041 26.3081 12.22 25.2408 11.1527C25.0844 10.9963 24.9365 10.8544 24.7973 10.7255C24.0525 11.7634 22.9277 13.6596 22.2184 16.3974C21.418 19.4867 21.1858 21.4636 21.1944 22.7204C23.6856 23.0951 25.9037 23.7306 27.6547 24.5505C29.8162 25.5625 31.2903 26.8902 31.8829 28.3156C32.0269 28.6622 31.9883 29.0577 31.7801 29.3698C31.5718 29.682 31.2213 29.8694 30.8461 29.8694H1.15406C0.778792 29.8694 0.428351 29.682 0.22007 29.3698C0.0117895 29.0577 -0.0267602 28.6622 0.117271 28.3156C0.709864 26.8902 2.18392 25.5625 4.34539 24.5505C5.87384 23.8348 7.7581 23.2596 9.86897 22.8758C9.87559 22.8026 9.88083 22.7247 9.88426 22.6422C9.92655 21.6164 9.75925 19.9192 9.03772 17.1345C8.32468 14.3824 7.10631 12.6558 6.55719 11.9801C6.44173 12.0874 6.31959 12.2049 6.19078 12.3337C5.26353 13.261 4.58049 14.289 4.2555 15.0477C4.10891 15.3899 3.80232 15.6371 3.43697 15.7079C3.07156 15.7787 2.69486 15.6639 2.43113 15.4012C1.87877 14.8512 1.62058 14.0411 1.7459 13.087C1.85494 12.2571 2.27568 11.2852 2.98654 10.3813C2.42152 10.4609 1.92331 10.5807 1.53519 10.7208C1.18506 10.8471 0.795135 10.7917 0.494035 10.5729C0.192936 10.3542 0.0198363 10.0004 0.0318753 9.62839C0.0569513 8.84929 0.472951 8.10774 1.25592 7.54827C2.10657 6.94045 3.45101 6.53699 4.96131 6.58571C5.39771 6.59974 5.81801 6.64983 6.21368 6.73005C6.45558 6.42465 6.73285 6.12579 7.04312 5.8426C8.15919 4.82384 9.44306 4.25657 10.4846 4.1655C11.4433 4.08172 12.2414 4.37484 12.7669 4.95059C13.0179 5.22549 13.1163 5.60681 13.0297 5.96879C12.943 6.33077 12.6827 6.62632 12.3345 6.75787C11.9547 6.9014 11.5063 7.12927 11.0337 7.42919C12.2296 7.65606 13.2366 8.15165 13.881 8.74661C14.5879 9.3994 14.9081 10.187 14.8358 10.9632C14.8013 11.3337 14.5854 11.6632 14.2594 11.8426C13.9333 12.0222 13.5396 12.0284 13.208 11.8594C12.472 11.4843 11.288 11.1345 9.98151 11.0128C9.85588 11.0011 9.73318 10.992 9.61366 10.985C10.4579 11.8425 11.7101 13.3091 12.6983 15.2853C14.1116 18.1121 14.8114 20.1437 15.1552 21.5115C15.5798 19.887 16.414 17.5174 18.0423 14.2608C19.0658 12.214 20.3271 10.6263 21.2992 9.57631ZM30.8461 28.7466C29.576 25.6915 23.3161 23.4641 16.0001 23.4641C8.68404 23.4641 2.42414 25.6915 1.15406 28.7466H30.8461ZM12.6987 17.9276L10.5535 18.676C10.9469 20.5627 11.0379 21.8369 11.0039 22.6912C12.0316 22.5432 13.1042 22.4394 14.2083 22.3851C14.0219 21.462 13.6084 20.0122 12.6987 17.9276ZM16.9278 19.6067C16.5175 20.7378 16.2616 21.6417 16.1025 22.3414C17.4707 22.3452 18.8025 22.4251 20.0744 22.5718C20.08 21.9091 20.1436 21.0752 20.3031 20.0285L16.9278 19.6067ZM18.8713 15.1163C18.2381 16.403 17.7369 17.5363 17.3404 18.5267L20.4938 18.9208C20.6505 18.0985 20.8588 17.1679 21.1315 16.1157C21.1545 16.027 21.1779 15.939 21.2017 15.8518L18.8713 15.1163ZM10.8002 14.2367L9.48292 14.8801C9.71752 15.4726 9.9374 16.1303 10.1247 16.8529C10.189 17.1011 10.249 17.3412 10.305 17.5735L12.2336 16.9007C12.0669 16.5453 11.8875 16.1744 11.694 15.7875C11.4128 15.2253 11.1089 14.7073 10.8002 14.2367ZM21.3466 11.2299C20.7119 12.0049 20.021 12.9689 19.3936 14.1037L21.5274 14.7772C21.8748 13.7366 22.271 12.8355 22.6642 12.0749L21.3466 11.2299ZM6.14119 9.26916C5.73742 9.21314 5.31325 9.17528 4.87828 9.16124C3.40067 9.11358 2.02947 9.34869 1.15406 9.66457C1.19105 8.51875 2.88081 7.64196 4.92513 7.70789C5.56482 7.72854 6.1639 7.83907 6.68382 8.01617C6.9619 7.55469 7.33842 7.09328 7.80008 6.67185C9.31075 5.29292 11.1648 4.86083 11.9377 5.70755C11.0671 6.03653 9.87222 6.74914 8.78035 7.74582C8.45705 8.04093 8.15775 8.34727 7.88603 8.65411C7.89402 8.66059 9.36483 8.36742 10.2205 8.44707C12.2571 8.63677 13.8242 9.71753 13.7179 10.859C12.8888 10.4364 11.5576 10.032 10.0856 9.89487C8.7355 9.76912 7.68524 9.90772 7.34528 9.95781C7.09034 10.1219 6.44223 10.4944 5.39683 11.5398C4.3515 12.5852 3.58986 13.7502 3.22339 14.6056C2.41104 13.7966 2.92323 11.9632 4.36653 10.5138C4.927 9.95095 5.54604 9.52821 6.14119 9.26916ZM8.01073 11.0096C7.90868 11.0189 7.81786 11.0289 7.73963 11.0384C7.65293 11.0949 7.54888 11.1653 7.42749 11.254L7.7566 11.6981C8.11939 12.195 8.58174 12.9129 9.03261 13.8504L10.143 13.3081C9.46526 12.4181 8.8257 11.7676 8.41862 11.3865L8.01073 11.0096ZM25.1907 7.78381C25.6486 7.72037 26.1296 7.67739 26.6229 7.66148C28.2984 7.6074 29.8534 7.87407 30.8461 8.23224C30.8041 6.93291 28.888 5.93866 26.5697 6.01345C25.8443 6.03684 25.1649 6.16216 24.5754 6.36302C24.26 5.83967 23.833 5.31644 23.3095 4.83856C21.5964 3.2748 19.494 2.78482 18.6175 3.74501C19.6047 4.11803 20.9597 4.92614 22.1979 6.05637C22.5645 6.39103 22.904 6.73847 23.2121 7.08636C23.203 7.09378 21.5351 6.76124 20.5648 6.85163C18.2553 7.06677 16.4782 8.29231 16.5988 9.58679C17.5389 9.10753 19.0485 8.64887 20.7177 8.49342C22.2488 8.35082 23.4397 8.50802 23.8252 8.56478C24.1143 8.75092 24.8493 9.17334 26.0348 10.3588C27.2202 11.5442 28.0839 12.8653 28.4995 13.8354C29.4207 12.918 28.8399 10.8389 27.2032 9.1953C26.5675 8.55698 25.8655 8.07767 25.1907 7.78381ZM22.8579 9.58922C22.6396 9.79843 22.3787 10.0605 22.0907 10.3732L23.2128 11.0928C23.4725 10.6621 23.7192 10.2975 23.9364 9.9991C23.73 9.84303 23.5614 9.72938 23.4304 9.64486C23.281 9.62627 23.0878 9.60562 22.8579 9.58922Z" fill="#1f663a" stroke="#1f663a" stroke-width="0.3"></path></g><defs><clipPath id="clip0_3832_7262"><rect width="32" height="32" fill="white"></rect></clipPath></defs></svg>
                                    <div class="para">A vacation residence</div>
                                    <input style="opacity: 0;" type="radio" name="property" name="property3" value="A vacation residence">


                                </div>

                            </label>



                        </div>

                        <div class="card m-3 " id="slectBtn" style="width: 18rem;"  onclick="changeColor()">

                            <label for="property4">

                                <div class="card-body d-flex justify-content-center align-items-center flex-column">

                                    <!-- <i class="bi bi-currency-exchange"></i> -->
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><linearGradient id="fill-gradient" x1="-0.657721" y1="25.3117" x2="25.1534" y2="30.1192" gradientUnits="userSpaceOnUse"><stop stop-color="#1f663a"></stop><stop offset="0.421875" stop-color="#3C50E7"></stop><stop offset="1" stop-color="#6034FD"></stop></linearGradient><g clip-path="url(#clip0_4275_860)"><path d="M29.8048 19.3293L27.776 12.7238C27.7518 9.37178 26.4453 6.21462 24.0909 3.82408C21.717 1.41378 18.5483 0.0563565 15.1687 0.00179447C12.7662 -0.0380802 10.4156 0.58729 8.37244 1.80716C8.07606 1.98409 7.97925 2.36778 8.15625 2.66415C8.33325 2.96052 8.71693 3.05733 9.01324 2.88033C10.8567 1.77972 12.979 1.21691 15.1485 1.25153C21.4223 1.35291 26.5264 6.54181 26.5264 12.8186C26.5264 12.8808 26.5356 12.9427 26.5539 13.0021L28.6083 19.6913H25.805C25.4598 19.6913 25.18 19.9712 25.18 20.3163V23.7674C25.18 25.4119 23.8421 26.7499 22.1975 26.7499H17.4241C15.9381 26.7499 14.5411 26.1712 13.4904 25.1205C13.2463 24.8765 12.8506 24.8765 12.6065 25.1205C12.3624 25.3645 12.3624 25.7603 12.6065 26.0044C13.85 27.248 15.4896 27.9515 17.2407 27.9974L16.3225 31.2028C16.2274 31.5347 16.4194 31.8807 16.7512 31.9757C16.8087 31.9922 16.8666 32.0001 16.9236 32.0001C17.1954 32.0001 17.4456 31.8214 17.5241 31.547L18.5402 27.9999H22.1975C24.5312 27.9999 26.4299 26.1013 26.4299 23.7674V20.9414H28.6135C29.013 20.9414 29.3783 20.7571 29.6158 20.4358C29.8532 20.1144 29.9221 19.7111 29.8048 19.3293Z" fill="#1f663a" stroke-width="0.3"></path><path d="M3.39093 12.617C3.42762 10.4579 4.05605 8.36581 5.20816 6.56713C5.39435 6.27651 5.30966 5.88995 5.01904 5.70376C4.72842 5.51764 4.34186 5.6022 4.15567 5.89289C2.87837 7.88687 2.18175 10.2047 2.14119 12.5958C2.09994 15.0202 2.73006 17.7258 3.86999 20.0189C4.96585 22.2235 5.25879 24.7258 4.69479 27.0648L3.69086 31.2282C3.60993 31.5637 3.81636 31.9014 4.15192 31.9822C4.20117 31.9941 4.25042 31.9997 4.29898 31.9997C4.58104 31.9997 4.83698 31.8074 4.90604 31.5211L5.90997 27.3577C6.54272 24.7337 6.21578 21.9297 4.98935 19.4625C3.93561 17.3429 3.35299 14.8478 3.39093 12.617Z" fill="#1f663a" stroke-width="0.3"></path><path d="M6.02932 3.60165C5.77932 3.83971 5.76969 4.23534 6.00776 4.48528L6.00838 4.4859C6.13113 4.61484 6.29569 4.67971 6.46057 4.67971C6.61544 4.67971 6.77057 4.6224 6.89163 4.50715C7.14163 4.26909 7.15094 3.87315 6.91288 3.62321C6.67482 3.37321 6.27919 3.36353 6.02932 3.60165Z" fill="#1f663a" stroke-width="0.3"></path><path d="M14.2383 8.57051C14.2828 8.48288 14.3431 8.40313 14.4176 8.33351C14.5933 8.16964 14.8143 8.09207 15.0578 8.10882C15.4595 8.13657 15.8089 8.48595 15.8366 8.88763C15.8576 9.19206 15.7213 9.47656 15.4719 9.64862C13.9985 10.6653 13.1188 12.3153 13.1188 14.0624C13.1188 14.5683 13.3173 15.0426 13.6776 15.3978C14.0313 15.7464 14.4976 15.9374 14.9934 15.9374C15.0026 15.9374 15.0118 15.9373 15.0211 15.9372C16.0258 15.9228 16.8548 15.0728 16.8689 14.0425C16.8758 13.5356 17.1498 13.0468 17.6015 12.7352C18.9519 11.8034 19.6906 10.2687 19.5777 8.62969C19.4209 6.35677 17.5887 4.52454 15.3156 4.36773C14.0461 4.28035 12.7862 4.7266 11.8589 5.59215C11.468 5.9569 11.1461 6.38471 10.9019 6.86364C10.6067 7.44289 10.6341 8.12107 10.9752 8.67788C11.32 9.24056 11.919 9.5765 12.5778 9.5765C13.2873 9.57662 13.9236 9.19106 14.2383 8.57051ZM12.0412 8.02495C11.9874 7.93707 11.8771 7.70333 12.0157 7.43139C12.1936 7.08246 12.4278 6.77115 12.7119 6.50596C13.387 5.8759 14.3046 5.55134 15.2299 5.61478C16.8836 5.7289 18.2168 7.06196 18.3308 8.71569C18.4131 9.90981 17.8752 11.0278 16.8918 11.7064C16.1074 12.2476 15.6317 13.1145 15.6192 14.0253C15.6143 14.3856 15.338 14.6826 15.0033 14.6873C14.8321 14.6903 14.6753 14.6259 14.5553 14.5076C14.4351 14.3891 14.369 14.2311 14.369 14.0624C14.369 12.7262 15.0468 11.4608 16.182 10.6774C16.7984 10.2521 17.1355 9.55087 17.0838 8.80157C17.0136 7.78401 16.1616 6.93196 15.1442 6.86177C15.0935 6.85827 15.043 6.85652 14.9928 6.85652C14.4596 6.85652 13.9573 7.05352 13.565 7.41964C13.3831 7.58939 13.2346 7.78633 13.1237 8.00495C13.0247 8.20026 12.8105 8.32651 12.578 8.32651C12.2604 8.32663 12.0968 8.11563 12.0412 8.02495Z" fill="#1f663a" stroke-width="0.3"></path><path d="M13.1186 19.0625C13.1186 20.0964 13.9597 20.9375 14.9936 20.9375C16.0275 20.9375 16.8686 20.0964 16.8686 19.0625C16.8686 18.0286 16.0275 17.1875 14.9936 17.1875C13.9597 17.1875 13.1186 18.0286 13.1186 19.0625ZM15.6186 19.0625C15.6186 19.4071 15.3382 19.6875 14.9936 19.6875C14.649 19.6875 14.3686 19.4071 14.3686 19.0625C14.3686 18.7179 14.649 18.4375 14.9936 18.4375C15.3382 18.4375 15.6186 18.7179 15.6186 19.0625Z" fill="#1f663a" stroke-width="0.3"></path></g><defs><clipPath id="clip0_4275_860"><rect width="32" height="32" fill="white"></rect></clipPath></defs></svg>

                                    <span class="para">I'm just browsing</span>

                                    <input style="opacity: 0;" type="radio" name="property" id="property4"

                                        value="I'm just browsing">

                                </div>

                            </label>

                        </div>

                    </div>

                </div>



                <div class="first-contanior">

                    <div class="d-flex justify-content-center testHeading mb-4">

                        <h2>What stage of your purchase have you reached?</h2>

                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-4 mt-lg-0">
                            <div class="card m-3 ">

                                <label for="purchase1" onclick="changeColor()">



                                    <div class="card-body d-flex justify-content-start">

                                        <input class="me-3 para " type="radio" name="purchase" id="purchase1"> Let's start

                                    </div>

                                </label>
                            </div>


                        </div>

                        <div class="col-lg-12 col-md-12 mt-4 mt-lg-0">
                            <div class="card m-3 " >

                                <label for="purchase2" onclick="changeColor()">



                                    <div class="card-body d-flex justify-content-start">

                                        <input class="me-3 para " type="radio" name="purchase" id="purchase2"> Getting property options

                                    </div>

                                </label>

                        </div>


                        </div>







                    </div>




                    <div class="row">

                        <div class="col-lg-12 col-md-12 mt-4 mt-lg-0">
                            <div class="card m-3 " >

                                <label for="purchase3" onclick="changeColor()">



                                    <div class="card-body d-flex justify-content-start">

                                        <input class="me-3 para " type="radio" name="purchase" id="purchase3"> Attending viewings

                                    </div>

                                </label>

                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 mt-4 mt-lg-0">
                            <div class="card m-3 " >

                                <label for="purchase4" onclick="changeColor()">



                                    <div class="card-body d-flex justify-content-start">

                                        <input class="me-3 para " type="radio" name="purchase" id="purchase4"> Placing offers

                                    </div>

                                </label>

                            </div>
                        </div>



                    </div>



                </div>



                <div class="first-contanior">

                    <div class="d-flex justify-content-center testHeading mb-4">

                        <h2>Where do you wish to buy?</h2>

                    </div>

                    <div class="row">
<!--
                        <select class="form-select" multiple aria-label="Multiple select example">

                            <option selected>Open this select menu</option>

                            <option class="para" value="1">Dubai Marina</option>

                            <option class="para" value="2">Downtown Dubai</option>

                            <option class="para" value="3">Al Barari</option>

                            <option class="para" value="4">Business Bay</option>

                            <option class="para" value="5">Palm Jumeirah

                            </option>

                        </select> -->
                        <div class="">
                             <input type="text" class="form-control" style="width:70%; margin:auto" id="exampleFormControlInput1" placeholder="Type Burj Khalifa or The Meadows">
                        </div>
                        <div class="mt-4">
                            <div class="qualification-quiz__SelectedOptionsWrapper-sc-1p5c2nt-4 beOMtt"><div class="qualification-quiz__PillStyled-sc-1p5c2nt-23 haQDSO" role="button" tabindex="0"><div class="qualification-quiz__PillInner-sc-1p5c2nt-24 cNXjQw"><span class="qualification-quiz__PillText-sc-1p5c2nt-25 foMWlH">Al Barari</span><div role="button" tabindex="0" class="qualification-quiz__IconWrapper2-sc-1p5c2nt-26 hbCSEr"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 4L4 12" stroke="#2264D7" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4 4L12 12" stroke="#2264D7" stroke-linecap="round" stroke-linejoin="round"></path></svg></div></div></div><div class="qualification-quiz__PillStyled-sc-1p5c2nt-23 haQDSO" role="button" tabindex="0"><div class="qualification-quiz__PillInner-sc-1p5c2nt-24 cNXjQw"><span class="qualification-quiz__PillText-sc-1p5c2nt-25 foMWlH">Business Bay</span><div role="button" tabindex="0" class="qualification-quiz__IconWrapper2-sc-1p5c2nt-26 hbCSEr"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 4L4 12" stroke="#2264D7" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4 4L12 12" stroke="#2264D7" stroke-linecap="round" stroke-linejoin="round"></path></svg></div></div></div><div class="qualification-quiz__PillStyled-sc-1p5c2nt-23 haQDSO" role="button" tabindex="0"><div class="qualification-quiz__PillInner-sc-1p5c2nt-24 cNXjQw"><span class="qualification-quiz__PillText-sc-1p5c2nt-25 foMWlH">Downtown Dubai</span><div role="button" tabindex="0" class="qualification-quiz__IconWrapper2-sc-1p5c2nt-26 hbCSEr"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 4L4 12" stroke="#2264D7" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4 4L12 12" stroke="#2264D7" stroke-linecap="round" stroke-linejoin="round"></path></svg></div></div></div><div class="qualification-quiz__PillStyled-sc-1p5c2nt-23 haQDSO" role="button" tabindex="0"><div class="qualification-quiz__PillInner-sc-1p5c2nt-24 cNXjQw"><span class="qualification-quiz__PillText-sc-1p5c2nt-25 foMWlH">Palm Jumeirah</span><div role="button" tabindex="0" class="qualification-quiz__IconWrapper2-sc-1p5c2nt-26 hbCSEr"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 4L4 12" stroke="#2264D7" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4 4L12 12" stroke="#2264D7" stroke-linecap="round" stroke-linejoin="round"></path></svg></div></div></div></div>
                        </div>
                        <div class=" d-flex justify-content-center mt-4">
                            <div class="qualification-quiz__QualificationQuizControlBlockStyled-sc-1p5c2nt-43 jazLRS"><div class="qualification-quiz__QualificationQuizControlBlockWrapper-sc-1p5c2nt-44 dEkdsF"><label class="qualification-quiz__StyledCheckboxContainer-sc-1p5c2nt-31 iyUuHz" for="advice"><div class="qualification-quiz__StyledCheckboxWrapper-sc-1p5c2nt-28 dSmQnf"><div class="qualification-quiz__StyledCheckboxInner-sc-1p5c2nt-27 fgdSnn"><svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 1.25L4.125 8.125L1 5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div></div><span class="qualification-quiz__StyledText-sc-1p5c2nt-30 jNYFum">I need advice</span><input type="checkbox" id="advice" class="qualification-quiz__StyledInput1-sc-1p5c2nt-29 ifrwfB" value="advice" checked=""></label></div></div>
                        </div>

                    </div>



                </div>

                <div class="first-contanior">

                    <div class="d-flex justify-content-center testHeading mb-4">

                        <h2>What are you searching for?</h2>

                    </div>

                    <div class="row mb-3">

                        <div class="col-lg-4 col-md-12 col-sm-12">

                            <div class="card" style="padding:20px"  onclick="changeColor()">

                                <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/2e003b88-1ec2-410e-8ccf-9e879510e800/public"

                                    class="card-img-top" alt="...">

                                <div class="card-body">

                                    <h5 class="card-title para text-center">Apartment</h5>



                                </div>

                            </div>

                        </div>



                        <div class="col-lg-4 col-md-12 col-sm-12">

                            <div class="card"  style="padding:20px"  onclick="changeColor()">

                                <img src="https://imagedelivery.net/yg9mV_kJZn9RkpQKfOuKfA/e75e7a11-4021-4995-e3f5-18fc1e266600/public"

                                    class="card-img-top" alt="...">

                                <div class="card-body">

                                    <h5 class="card-title para text-center">Villa </h5>



                                </div>

                            </div>

                        </div>



                         <div class="col-lg-4 col-md-12 col-sm-12">

                            <div class="card "  style="padding:20px"  onclick="changeColor()">

                            <img src="https://serdar.ae/wp-content/uploads/2022/08/townhouse-in-dubai.jpg"

                                class="card-img-top" alt="...">

                            <div class="card-body">

                                <h5 class="card-title para text-center">Townhouse</h5>



                            </div>

                        </div>

                        </div>







                    </div>

                </div>

                <div class="first-contanior">

                    <div class="d-flex justify-content-center testHeading mb-4">

                        <h2>How many bedrooms are you looking for?</h2>

                    </div>

                    <div class="row justify-content-center">



                        <div class="card m-3 " style="width: 5rem;"  onclick="changeColor()">

                            <div class="card-body d-flex  justify-content-center align-items-center p-0">

                                Studio

                            </div>

                        </div>

                        <div class="card m-3 " style="width: 5rem;"  onclick="changeColor()">

                            <div class="card-body d-flex ">

                                1+

                            </div>

                        </div>

                        <div class="card m-3 " style="width: 5rem;"  onclick="changeColor()">

                            <div class="card-body d-flex ">

                                2+

                            </div>

                        </div>

                        <div class="card m-3 " style="width: 5rem;"  onclick="changeColor()">

                            <div class="card-body d-flex ">

                                3+

                            </div>

                        </div>

                        <div class="card m-3 " style="width: 5rem;"  onclick="changeColor()">

                            <div class="card-body d-flex ">

                                4+

                            </div>

                        </div>

                        <div class="card m-3 " style="width: 5rem;"  onclick="changeColor()">

                            <div class="card-body d-flex ">

                                5+

                            </div>

                        </div>



                    </div>



                </div>

                <div class="first-contanior">

                    <div class="d-flex justify-content-center testHeading ">

                        <h2>What is your estimated budget?</h2>

                    </div>

                    <div class="row  mt-5 testHeading">

                        <p class="mt-4 mb-4" style="font-size: 30px;font-weight:700; text-align:center">AED <span id="demo"></span></p>


                        <input type="range" class="form-range"  min="00" max="50000" value="0" class="slider" id="customRange1">

                    </div>



                </div>

                <div class="first-contanior">

                    <div class="d-flex justify-content-center testHeading">

                        <h2>What is your financial inclination?</h2>

                    </div>

                    <div class="row mb-3">

                        <div style=" border: 1px solid #53ba3f;border-radius: 8px;padding: 10px; width:80%; margin:auto;"

                            class="col-md-12 d-flex justify-content-center align-center my-3"  onclick="changeColor()">

                            <p class="mb-0">All in cash</p>



                        </div>

                        <div style=" border: 1px solid #53ba3f;border-radius: 8px;padding: 10px; width:80%; margin:auto;"

                            class="col-md-12 d-flex justify-content-center align-center py-2 my-3"  onclick="changeColor()">

                            <p class="mb-0">Pre-approved for mortgage </p>

                        </div>

                        <div style=" border: 1px solid #53ba3f;border-radius: 8px;padding: 10px; width:80%; margin:auto;"

                            class="col-md-12 d-flex justify-content-center align-center py-2 my-3"  onclick="changeColor()">

                            <p class="mb-0">Waiting for mortgage approval </p>

                        </div>

                        <div style=" border: 1px solid #53ba3f;border-radius: 8px;padding: 10px; width:80%; margin:auto;"

                            class="col-md-12 d-flex justify-content-center align-center py-2 my-3"  onclick="changeColor()">

                            <p class="mb-0">Advice on the best financing options </p>

                        </div>

                        <div class="d-flex" style="width:90%; margin:auto;"> <input type="checkbox" name="" id="" class="me-2"><span> I am interested in purchasing

                                off-plan developments that offer flexible payment plans.</span>

                        </div>

                    </div>



                </div>

                <!-- <span>Step 1/7</span> -->

                <div class=" d-flex justify-content-between mt-2">
                    <span class="qualification-quiz__StepControllerProgressText-sc-1p5c2nt-83 looFYy mb-2">Step 1/1</span>
                    <span class="qualification-quiz__StepControllerProgressText-sc-1p5c2nt-83 looFYy">~
                    6 min</span>
                </div>

                <div class="progress ">

                        <div class="progress-bar" style="width: 0%;" role="progressbar" id="progressbar1" aria-valuenow="25"

                        aria-valuemin="0" aria-valuemax="100"></div>

                </div>

                <div class="d-flex justify-content-between mt-3">

                    <a class="btn btn-success" id="back"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a><a class="btn btn-success" id="next">Next <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>

                </div>

            </div>



        </div>
        </div>



    </main>



































      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script src="./assests/js/script.js"></script>

    <script src="./assests/js/jqurey.min.js"></script>



   <!-- <script>

       $(window).on("scroll", function() {

    if($(window).scrollTop() > 500) {

        $(".scroolHeader").addClass("activeTop");

        $(".menuIcon").addClass("activeCircle");

        $(".bi-list ").addClass("activeIcon");





    } else {



       $(".scroolHeader").removeClass("activeTop");

       $(".menuIcon").removeClass("activeCircle");

       $(".bi-list").removeClass("activeIcon");

    }

});

   </script> -->

    <script>

        var number = 1;



        $('#next').on('click', function () {

            for (let index = 0; index < $('.first-contanior').length; index++) {

                $('.first-contanior')[index].style = "display:none;";

            }

            $('.first-contanior')[number].style = "display:block;";

            var totalCount = $('.first-contanior').length;

            var newWith = 100 / totalCount;

            var newnumber = number + 1;

            $('#progressbar1').width(newWith * newnumber + '%');

            number++;

             if (number === totalCount) {
        window.location.href = 'https://mightytech.dev/clientdemo/moneyPlantNew/sale.php';
    }

        })

        $('#back').on('click', function () {

            for (let index = 0; index < $('.first-contanior').length; index++) {

                $('.first-contanior')[index].style = "display:none;";

            }

            $('.first-contanior')[number].style = "display:block;";

            var totalCount = $('.first-contanior').length;

            var newWith = 100 / totalCount;

            var newnumber = number - 1;

            $('#progressbar1').width(newWith * newnumber + '%');

            number--;

        })

        $(window).on('load', function () {

            var totalCount = $('.first-contanior').length;

            var newWith = 100 / totalCount;

            $('#progressbar1').width(newWith * number + '%');

            $('.first-contanior')[0].style = "display:block;";

        })

    </script>



    <script>

        var prevDiv=null

        function changeColor(){

        if(prevDiv) {

            prevDiv.style.backgroundColor = "white";

        }

        var target = event.currentTarget

        target.style.backgroundColor="#f6fef4"
        target.style.border="1px solid #1f663a"
        target.style.borderRadius="4px"

        selected = true

        prevDiv = target;

        }

    </script>

    <script>
        var slider = document.getElementById("customRange1");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value;

        slider.oninput = function() {
        output.innerHTML = this.value;
        }
    </script>





</body>



</html>