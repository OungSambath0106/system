<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
     <!-- Import Nunito font from Google Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Hide scrollbar for Chrome, Safari, and Opera */
        ::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for Firefox */
        * {
            scrollbar-width: none;
            /* Firefox */
        }

        /* Hide scrollbar for Internet Explorer, Edge */
        * {
            -ms-overflow-style: none;
            /* IE and Edge */
        }

        body {
            background-color: #f4f4f4;
        }

        button {
            background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 90%);
        }

        /* .col-11 {
                width: 100%;
            } */

        /* .card .col-8 {
                width: 100%;
            } */

        .card {
            /* font-family: Arial, sans-serif; */
            font-family: 'Nunito', sans-serif;
            background: rgba(255, 255, 255, 0.7);
            margin-bottom: 4rem;
        }

        .card-text h2,
        h4 {
            font-weight: bold;
        }

        .card-message {
            margin-bottom: 4cm;
        }

        .form-group input {
            padding: 9px;
            background-color: #f4f4f4;
            border-radius: 20px;
            font-size: 13px;
            color: rgba(161, 161, 161, 1);

        }

        .form-group textarea {
            background-color: #f4f4f4;
            border-radius: 20px;
            font-size: 13px;
            color: rgb(215, 209, 209);

        }

        .form-group button {
            border-radius: 20px;
            padding: 9px;
        }

        .card-footer {
            background-color: rgba(212, 212, 212, 1);
        }

        .icon {
            width: 90px;
            height: 90px;
            background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 90%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fa-lg {
            color: #ffffff;
            font-size: 3em;
        }

        .icon img {
            color: #ffffff;
            width: 50%;

        }

        .card-footer .d-flex {
            position: absolute;
            top: 65%;
        }

        .card-footer {
            height: 250px;
        }

        h5 {
            color: rgba(21, 119, 255, 1);
            font-weight: bold;
        }

        p {
            margin: 0 0 0 0;
            color: rgba(21, 119, 255, 1)
        }

        @media screen and (min-width: 989px) and (max-width: 1200px) {
            .card .col-8 {
                width: 100%;
            }

            .card {
                margin-top: 2rem !important;

            }

            .card-head {
                padding-top: 3rem;
                padding-bottom: 4rem;
                padding: 3rem;
            }

            .form-group input {
                padding: 11px;

                font-size: 14px;

            }

            label {
                font-size: 18px;
            }

            .form-group textarea {

                padding: 11px;
                font-size: 14px;
            }

            .form-group button {

                padding: 11px;
                font-size: 14px;
            }


            /*-------------------- footer ---------------------- */
            .card-footer {
                height: 10cm;
            }

            .card-footer .d-flex {
                margin-right: 10px;
            }

            .icon {
                width: 85px;
                height: 85px;
                background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 90%);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;

            }


            .fa-lg {
                color: #ffffff;
                font-size: 2em;
            }

            .icon img {
                color: #ffffff;
                width: 45%;

            }

            .card-footer .d-flex {
                position: absolute;
                top: 62%;
            }

            p {
                font-size: 13px;
            }

            .backimg1 {
                margin-top: 1rem;
            }
            .backimg1 img{
                margin-left:8cm!important;
            }
            .backimg2 {
                margin-top: 1rem;

            }

        }

        @media screen and (min-width: 768px) and (max-width: 989px) {

            .col-11 {
                width: 100%;

            }

            .card {
                margin-top: 1rem !important;
            }

            .card .col-8 {
                width: 100%;
            }

            .form-group input {
                padding: 11px;

                font-size: 13px;

            }

            .form-group textarea {

                padding: 11px;
                font-size: 13px;
            }

            .form-group button {

                padding: 9px;
                font-size: 13px;
            }

            /*-------------------- footer ---------------------- */
            .card-footer .d-flex {
                margin-right: 10px;
            }

            .icon {
                width: 75px;
                height: 75px;
                background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 90%);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .fa-lg {
                color: #ffffff;
                font-size: 2em;
            }

            h5 {
                font-size: 18px;
            }

            .icon img {
                color: #ffffff;
                width: 50%;

            }

            .card-footer .d-flex {
                position: absolute;
                top: 66%;
            }

            p {
                font-size: 13px;
            }

            .backimg1 {
                margin-top: 1rem;

            }

            .backimg1 img {
                width: 62% !important;
                margin-left: 11rem !important;
            }

            .backimg2 {
                margin-top: 2rem;

            }
        }

        @media screen and (min-width: 600px) and (max-width: 768px) {

            .col-11 {
                width: 100% !important;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .card .col-8 {
                width: 100%;
            }

            .card-message form {
                display: flex;
                justify-content: center;
                /* flex-direction: row !important; */
                align-items: center;
                /* padding-bottom: 0 !important; */
            }

            .form-group {
                width: 90% !important;
                margin-bottom: 0.5rem !important;
            }

            .form-group input {
                padding: 11px;
                font-size: 13px;

            }

            .form-group textarea {

                padding: 11px;
                font-size: 13px;
            }

            h2 {
                font-size: 23px;
            }

            h4 {
                font-size: 17px;
            }

            .form-group button {

                padding: 9px;
            }

            /*-------------------- footer ---------------------- */
            .card-footer {
                height: 15rem;
            }

            .card-footer .d-flex {
                margin-right: 10px;
            }

            .icon {
                width: 63px;
                height: 63px;
                background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 90%);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .fa-lg {
                color: #ffffff;
                font-size: 1.4em;
            }

            h5 {
                font-size: 15px;
            }

            .icon img {
                color: #ffffff;
                width: 40%;

            }

            .card-footer .d-flex {
                position: absolute;
                top: 70%;
            }

            p {
                font-size: 11px;
            }

            .backimg1 {
                margin-top: 1rem;

            }
            .backimg1 img{
                margin-left: 2cm !important;
            }



            .backimg2 {
                margin-top: 2rem;

            }
        }

        @media screen and (min-width: 768px) and (max-width: 768px) {
            .col-11 {
                width: 100%;
            }

            .card .col-8 {
                width: 100%;
            }

            .form-group input {
                padding: 11px;
                font-size: 14px;

            }

            .form-group textarea {

                padding: 11px;
                font-size: 14px;
            }

            label {
                font-size: 17px;
            }

            h2 {
                font-size: 23px;
            }

            h4 {
                font-size: 17px;
            }

            .form-group button {
                font-size: 14px;
                padding: 9px;
            }

            /*-------------------- footer ---------------------- */
            .card-footer {
                height: 15rem;
            }

            .card-footer .d-flex {
                margin-right: 10px;
            }

            .icon {
                width: 67px;
                height: 67px;
                background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 90%);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .fa-lg {
                color: #ffffff;
                font-size: 1.8em;
            }

            h5 {
                font-size: 16px;
            }

            .icon img {
                color: #ffffff;
                width: 50%;

            }

            .card-footer .d-flex {
                position: absolute;
                top: 68%;
            }

            p {
                font-size: 11px;
            }

            .backimg1 {
                margin-top: 5rem;

            }



            .backimg2 {
                margin-top: 5rem;

            }
        }

        @media screen and (min-width: 417px) and (max-width: 600px) {
            .col-11 {
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .card .col-8 {
                width: 100%;
            }

            .card-message form {
                display: flex;
                justify-content: center;
                /* flex-direction: row !important; */
                align-items: center;
                /* padding-bottom: 0 !important; */
            }

            .form-group {
                width: 90% !important;
                margin-bottom: 0.5rem !important;
            }

            .form-group input {
                padding: 11px;
                font-size: 15px;

            }

            .form-group textarea {

                padding: 11px;
                font-size: 15px;
            }

            h2 {
                font-size: 21px;
            }

            h4 {
                font-size: 16px;
            }

            label {
                font-size: 15px;
            }

            .form-group button {

                padding: 10px;
                font-size: 13px;
            }

            /*-------------------- footer ---------------------- */
            .card-footer {
                height: auto !important;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;

            }

            .card-footer .d-flex {
                display: flex;
                flex-wrap: wrap;
            }

            .card-footer .club,
            .card-footer .phone,
            .card-footer .telegram,
            .card-footer .location {
                width: 100%;
                width: 80%;
                display: flex;
                flex-direction: column;
                text-align: center;
                padding: 10px;
            }

            .col-3 {
                width: 50% !important;
                text-align: center !important;
                margin-bottom: 2rem;
            }

            .icon {
                width: 57px;
                height: 57px;
                background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 90%);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .fa-lg {
                color: #ffffff;
                font-size: 1.5em;
            }

            h5 {
                font-size: 14px;
            }

            .icon img {
                color: #ffffff;
                width: 50%;

            }

            .card-footer .d-flex {
                position: relative;
                top: 69%;
            }

            p {
                font-size: 11px;
            }

            /*----------- image-background ----------------- */
            .backimg1 {
                margin-top: 1rem;

            }
            .backimg1 img{
                margin-left: 2cm !important;
            }


            .backimg2 {
                margin-top: 2rem;

            }


            /* .buttomimg1 {
                display: flex;
                justify-content: flex-start;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
            } */

            /* .buttomimg1 img {
                width: 50%;
                margin-left: 10rem;
            } */

            /* .buttomimg2 {
                display: flex;
                justify-content: flex-start;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
            } */

            /* .buttomimg2 img {
                width: 50%;
            } */
        }

        @media screen and (min-width: 354px) and (max-width: 417px) {
            .col-11 {
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .card {
                /* margin-top: 3rem; */
                /* padding: 0 0 0 0; */


            }

            .card .col-8 {
                width: 100%;

            }

            .card-head {
                padding-top: 2rem;
            }

            .card-text {
                width: 97%;
            }

            .card-message {
                margin-bottom: 4rem;
            }

            .card-message form {
                display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;
                /* padding-bottom: 0 !important; */
            }

            .form-group {
                width: 90% !important;
                margin-bottom: 0.5rem !important;
            }

            .form-group input {
                padding: 11px;
                font-size: 13px;

            }

            .form-group textarea {

                padding: 11px;
                font-size: 13px;
            }

            h2 {
                font-size: 20px;
            }

            h4 {
                font-size: 13px;
            }

            label {
                font-size: 15px;
            }

            .form-group button {

                padding: 8px;
                font-size: 13px;
            }

            /*-------------------- footer ---------------------- */
            .card-footer {
                height: auto !important;

            }

            .card-footer .d-flex {
                margin-right: 10px;
                display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;

            }

            .col-3 {
                width: 100% !important;
                text-align: center !important;
                margin-bottom: 2rem;
            }

            .icon {
                width: 60px;
                height: 60px;
                background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 90%);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .fa-lg {
                color: #ffffff;
                font-size: 1.3em;
            }

            h5 {
                font-size: 15px;
            }

            .icon img {
                color: #ffffff;
                width: 50%;

            }

            .card-footer .d-flex {
                position: relative !important;
                top: 69%;
            }

            p {
                font-size: 13px;


            }

            /*----------- image-background ----------------- */
            .backimg1 {
                margin-top: 1rem;

            }
            .backimg1 img{
                margin-left: 2cm !important;
            }


            .backimg2 {
                margin-top: 2rem;

            }
            .buttomimg1 img {
                width: 50%;
                margin-left: 5rem !important;
            }

            /* .buttomimg1 {
                display: flex;
                justify-content: flex-start;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
            }

            .buttomimg1 img {
                width: 50%;
                margin-left: 10rem;
            }

            .buttomimg2 {
                display: flex;
                justify-content: flex-start;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
            }

            .buttomimg2 img {
                width: 50%;
            } */
        }

        @media screen and (max-width: 353px) {
            .col-11 {
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .card {
                /* margin-top: 3rem; */
                /* padding: 0 0 0 0; */


            }

            .card .col-8 {
                width: 100%;

            }

            .card-head {
                padding-top: 1rem;
            }

            .card-message {
                margin-bottom: 4rem;
            }

            .card-message form {
                display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;
                /* padding-bottom: 0 !important; */
            }

            .form-group {
                width: 90% !important;
                margin-bottom: 0.5rem !important;
            }

            .form-group input {
                padding: 11px;
                font-size: 12px;

            }

            .form-group textarea {

                padding: 11px;
                font-size: 12px;
            }

            h2 {
                font-size: 18px;
            }

            h4 {
                font-size: 12px;
            }

            label {
                font-size: 13px;
            }

            .form-group button {

                padding: 8px;
                font-size: 12px;
            }

            /*-------------------- footer ---------------------- */
            .card-footer {
                height: auto !important;

            }

            .card-footer .d-flex {
                margin-right: 10px;
                display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;

            }

            .col-3 {
                width: 100% !important;
                text-align: center !important;
                margin-bottom: 2rem;
            }

            .icon {
                width: 53px;
                height: 53px;
                background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 90%);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .fa-lg {
                color: #ffffff;
                font-size: 1.2em;
            }

            h5 {
                font-size: 14px;
            }

            .icon img {
                color: #ffffff;
                width: 50%;

            }

            .card-footer .d-flex {
                position: relative !important;
                top: 69%;
            }

            p {
                font-size: 11px;


            }

            /*----------- image-background ----------------- */

            .backimg1 {
                margin-top: 1rem;

            }
            .backimg1 img{
                margin-left: 2cm !important;
            }


            .backimg2 {
                margin-top: 2rem;

            }
            .buttomimg1 img {
                width: 50%;
                margin-left: 5rem !important;
            }

        }
    </style>
    <style>
        .backimg1 {
            display: flex;
            justify-content: center;
            position: absolute;
            top: -5%;

        }

        .backimg1 img {
            width: 55%;
            margin-left: 12cm;
        }

        .backimg2 {
            display: flex;
            justify-content: flex-end;
            position: absolute;
            top: -10%;

        }

        .backimg2 img {
            width: 50%;

        }

        .buttomimg1 {
            display: flex;
            justify-content: flex-start;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;

        }

        .buttomimg1 img {
            width: 50%;
            margin-left: 10rem;
        }

        .buttomimg2 {
            display: flex;
            justify-content: flex-start;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;

        }

        .buttomimg2 img {
            width: 50%;
        }

    </style>
</head>

<body>
    <div class="backimg2">
        <img class="img2" src="/upload/social_media/Ellipse2.png" alt="err">
    </div>
    <div class="backimg1">
        <img src="/upload/social_media/Ellipse3.png" alt="err">
    </div>
    <div class="buttomimg2">
        <img src="/upload/social_media/Ellipse4.png" alt="err">
    </div>
    <div class="buttomimg1">
        <img src="/upload/social_media/Ellipse1.png" alt="err">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 mt-5">
                <div class="card">
                    <div class="col-8 mx-auto"> <!-- Add mx-auto class here -->
                        <div class="card-head">
                            <div class="card-text mb-5 mt-5">
                                <h2 class="text-primary text-center">Contact Us</h2>
                                <h4 class="text-primary text-center">Any questions or remarks? Just write us a message!
                                </h4>
                            </div>
                            <div class="card-message">
                                <form class="row d-flex gap-2 justify-content-center" action="your_action_url_here"
                                    method="POST">
                                    <div class="form-group col-5  mb-3">
                                        <label for="name" class="mb-2">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter your name">
                                    </div>
                                    <div class="form-group col-5 mb-3">
                                        <label for="email" class="mb-2">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter a valid email address">
                                    </div>

                                    <div class="form-group col-10  mb-3">
                                        <label for="name" class="mb-2">Message</label>
                                        <textarea name="message" id="message" cols="20" rows="5" class="form-control" placeholder="Enter your message"></textarea>
                                    </div>
                                    <div class="form-group col-10 mt-4">
                                        <button type="submit" class="btn btn-primary col-12">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center p-2">
                            <div class="club col-3 text-center">
                                <div class="icon mx-auto mb-2">
                                    <i class="fa-solid fa-person-running fa-lg" style="color: #ffffff;"></i>
                                </div>
                                <div class="texticon">
                                    <h5>About Club</h5>
                                    <p>skills and knowledge to be learned, and how it will benefit the student.</p>
                                </div>
                            </div>
                            <div class="phone col-3 text-center">
                                <div class="icon mx-auto mb-2">
                                    <i class="fa-solid fa-phone fa-lg" style="color: #ffffff;"></i>

                                </div>
                                <div class="texticon">
                                    <h5>Phone Number</h5>
                                    <p>(+855) 89 991 005</p>
                                    <p>(+855) 89 991 005</p>
                                </div>
                            </div>
                            <div class="telegram col-3 text-center">
                                <div class="icon mx-auto mb-2">
                                    <img class="telegram" src="/upload/social_media/telegram.png" alt="">
                                </div>
                                <div class="texticon">
                                    <h5>Telegram</h5>
                                    <p>(+855) 89 991 005</p>
                                    <p>(+855) 89 991 005</p>
                                </div>
                            </div>
                            <div class="location col-3 text-center">
                                <div class="icon mx-auto mb-2">
                                    <i class="fa-solid fa-location-dot fa-lg" style="color: #ffffff;"></i>
                                </div>
                                <div class="texticon">
                                    <h5>Our Location</h5>
                                    <p>Street 13, Siem Reap 17252. (Treang Village, Slorkram Commune, Siem Reap, Kingdom
                                        of Cambodia)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
