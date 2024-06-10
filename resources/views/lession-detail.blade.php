<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lesson Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

        .card-header {
            background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 80%);
        }

        .discription p {
            font-size: 10.75px;
        }

        .col-7 p {
            margin-left: 0px;
            margin-right: 53px;
            font-size: 20px;
        }

        .listimg img {
            border-radius: 10px;
        }

        .listimg {
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;

        }

        .lessionimg img {
            width: 90%;
        }

        /* .lessionimg {
            display: flex;
            justify-content: center;
            align-items: center;
        } */

        .card-tittle h4 {
            font-size: 17.4px;
            color: rgba(21, 119, 255, 1);
        }

        .body-text {
            justify-content: center;
            align-content: center;
            align-items: center;
            padding: 5px;
            text-align: left;
        }

        .shadow {
            margin-bottom: 10px;
        }

        .text-primary {
            font-size: 30px;
            margin-left: 8px;
        }

        .col-5 {
            margin-top: 3.6rem;
        }

        /* .card-body {
            max-height: 500px;
            overflow-y: auto;
        } */

        @media screen and (min-width: 989px) and (max-width: 1200px) {
            .text-primary {
                font-size: 27px;
            }

            .col-7 p {
                margin-left: 0px;
                margin-right: 47px;
                font-size: 17px;
            }

            .card-video {
                display: flex;
                justify-content: center;
                align-content: center;

            }

            .shadow {
                flex-direction: column;
                align-items: center;
            }

            .shadow .d-flex {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .body-text {
                align-content: center;
                padding-left: 31px;
                padding-right: 31px;
            }

            .card-tittle {
                text-align: center;
            }

            .discription p {
                font-size: 11px;

            }

            .card-header h3 {
                font-size: 25px !important;
            }

        }

        @media screen and (min-width: 768px) and (max-width: 989px) {
            .text-primary {
                font-size: 25px;
                margin: 0;
                text-align: left;

            }

            .col-7 p {
                /* margin-left: 24px; */
                margin-right: -9px;
                font-size: 17px;
            }

            .col-5 {
                margin-top: 2.9rem;
            }


            .card-video {
                gap: 1cm
                    /* display: flex;
                justify-content: center;
                align-content: center; */

            }

            .lessionimg img {
                width: 100%;
            }


            .shadow {
                flex-direction: column;
                align-items: center;
            }

            .shadow .d-flex {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .body-text {
                align-content: center;
                padding-left: 31px;
                padding-right: 31px;
            }

            .card-tittle {
                text-align: center;
            }

            .discription p {
                font-size: 11px;

            }

            .card-header h3 {
                font-size: 20px !important;
            }
        }

        @media screen and (min-width: 600px) and (max-width: 768px) {

            .col-7 {
                width: 65%;
            }

            .col-7 p {
                margin-left: 0px;
                margin-right: 25px;
                font-size: 15px;
            }

            .col-5 {
                width: 50%;
                margin-top: 2.4rem;
            }

            .container .row {
                justify-content: center;
                align-content: center;
            }

            .text-primary {
                font-size: 20px;
                margin-left: 0px;
                text-align: left;
                margin-bottom: -2px;
            }

            h3 {
                font-size: 20px;
            }

            .lessionimg {
                margin: 0;
            }

            .card-video {
                display: flex;
                justify-content: center;
                align-content: center;

            }

            .shadow {
                flex-direction: column;
                align-items: center;
            }

            .shadow .d-flex {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .body-text {
                align-content: center;
                padding-left: 10px;
                padding-right: 10px;
            }

            .card-tittle {
                text-align: center;
            }

            .card-tittle h4 {
                font-size: 16px;

            }

            /* .listimg{
                padding: 10px;
            } */

            .discription p {
                font-size: 11px;

            }

        }

        @media screen and (min-width: 768px) and (max-width: 768px) {
            .col-7 {
                width: 50%;
            }

            .col-7 p {
                margin-left: 0px;
                margin-right: 29px;
                font-size: 15px;
            }


            .col-5 {
                width: 40%;
                margin-top: 2rem;
                ;
            }

            .container .row {
                justify-content: center;
                align-content: center;
            }

            .text-primary {
                font-size: 20px;
                margin-left: 0px;
                /* text-align: left; */
                margin-bottom: -5px;
            }

            .lessionimg {
                margin: 0;
            }

            .card-video {
                display: flex;
                justify-content: center;
                align-content: center;

            }

            .shadow {
                flex-direction: column;
                align-items: center;
            }

            .shadow .d-flex {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .body-text {
                align-content: center;
                padding-left: 10px;
                padding-right: 10px;
            }

            .card-tittle {
                text-align: center;
            }

            .card-tittle h4 {
                font-size: 16px;

            }

            /* .listimg{
                padding: 10px;
            } */

            .discription p {
                font-size: 11px;

            }

        }

        @media screen and (min-width: 312px) and (max-width: 417px) {
            .justify-content-center .col-12 {
                flex-direction: column;
                align-items: center;
            }

            .col-7 p {
                /* margin-left: 17px; */
                margin-right: 9px;
                font-size: 14px;

            }

            .col-5 {
                margin-top: 0;
            }

            .text-primary {
                font-size: 18px;
                margin: 0 0 0 0;
                padding: 0 0 0 0;
                /* margin-left: -56px; */
                /* text-align: center; */
                margin-bottom: -5px;
            }

            h3 {
                font-size: 16px;
            }

            .lessionimg {
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .lessionimg img {
                width: 100%;
            }

            .card-video {
                display: flex;
                flex-direction: column;
                align-items: center;

            }

            .col-7 {
                width: 80%;
            }

            .col-5 {
                width: 80%;
            }

            .shadow .d-flex {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .body-text {
                align-content: center;
                padding-left: 15px;
                padding-right: 15px;
            }

            .card-tittle {
                text-align: center;
            }

            .card-tittle h4 {
                font-size: 16px;

            }

            .discription p {
                font-size: 12px;

            }

            .d-flex .listimg {
                margin-top: 5px;
            }

        }

        @media screen and (min-width: 417px) and (max-width: 600px) {
            .justify-content-center .col-12 {
                flex-direction: column;
                align-items: center;
            }

            .col-7 p {
                /* margin-left: 17px; */
                margin-right: 9px;
                font-size: 15px;

            }

            .col-5 {
                margin-top: 0;
            }

            .text-primary {
                font-size: 22px;
                margin: 0 0 0 0;
                padding: 0 0 0 0;
                /* margin-left: -56px; */
                /* text-align: center; */
                margin-bottom: -5px;
            }

            h3 {
                font-size: 20px;
            }

            .lessionimg {
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .lessionimg img {
                width: 100%;
            }

            .card-video {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 2rem !important;
            }

            .col-7 {
                width: 80%;
            }

            .col-5 {
                width: 80%;
            }

            .shadow .d-flex {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .body-text {
                align-content: center;
                padding-left: 15px;
                padding-right: 15px;
            }

            .card-tittle {
                text-align: center;
            }

            .card-tittle h4 {
                font-size: 18px;

            }

            .discription p {
                font-size: 12px;

            }

            .d-flex .listimg {
                margin-top: 5px;
            }

        }

        @media screen and (max-width: 312px) {
            .justify-content-center .col-12 {
                flex-direction: column;
                align-items: center;
            }


            .col-7 p {
                margin-left: 12px;
                margin-right: 12px;
                font-size: 13px;
            }

            .col-5 {
                margin-top: 0;
            }

            .text-primary {
                font-size: 14px;
                margin-left: 9px;
                /* text-align: center; */
                margin-bottom: -5px;
            }

            .lessionimg {
                margin: 0;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .listimg img {
                width: 100%;
            }

            .card-video {
                display: flex;
                flex-direction: column;
                align-items: center;

            }

            .col-7 {
                width: 80%;

            }

            .col-5 {
                width: 80%;
            }

            .shadow .d-flex {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .body-text {
                align-content: center;
                padding-left: 15px;
                padding-right: 15px;
            }

            .card-tittle {
                text-align: center;
            }

            .card-tittle h4 {
                font-size: 12px;

            }

            h3 {
                font-size: 16px;
            }

            .discription {
                font-size: 12px;
            }

            .discription p {
                font-size: 12px;

            }

            .d-flex .listimg {
                margin-top: 5px;
            }

        }
    </style>
</head>

<body style="background-color: #E7E7E7">
    .<div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-12 ">
                <div class="card-video d-flex  justify-content-center">
                    <div class="col-7">
                        <h4 class="text-primary pb-3">Introduction to UI/UX Design</h4>
                        <div class="lessionimg mb-2">
                            <img src="/upload/social_media/lessonvideo1.png" alt="err">
                        </div>
                        <p style="font-family: Arial" class="discription">
                            Jump into UI/UX design with our Figma course, tailored for beginners and those looking to
                            polish
                            their design skills. Alongside using Figma, you'll leverage Mobbin to identify current UI
                            patterns, enabling you to see effective design solutions in action. The course covers how to
                            organize elements on a page, play with color schemes and fonts, and ensure your designs
                            respond
                            well across different devices.
                        </p>
                    </div>

                    <div class="col-5 col-md-5 col-lg-5">
                        <div class="card bg-white">
                            <div class="card-header text-center text-white p-2">
                                <h3 class="mt-1">Up Next</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-12 shadow rounded">
                                    <div class="d-flex justify-content-center">
                                        <div class="listimg p-2">
                                            <img width="
                                            185.6px"
                                                src="/upload/social_media/menu1.png" alt="Not found">
                                        </div>
                                        <div class="body-text">
                                            <div class="card-tittle">
                                                <h4>
                                                    Introduction to UI/UX Design
                                                </h4>
                                            </div>
                                            <div class="discription">
                                                <p>
                                                    Jump into UI/UX design with our Figma course, tailored for beginners
                                                    and
                                                    those looking to polish their design skills. Alongside using Figma,
                                                    you'll
                                                    leverage Mobbin to identify current UI patterns, enabling you to see
                                                    effective design solutions in action. The course covers how to
                                                    organize
                                                    elements on a page, play with color schemes and fonts, and ensure
                                                    your
                                                    designs respond well across different devices.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 shadow rounded">
                                    <div class="d-flex justify-content-center">
                                        <div class="listimg p-2">
                                            <img width="
                                            185.6px"
                                                src="/upload/social_media/menu1.png" alt="Not found">
                                        </div>
                                        <div class="body-text">
                                            <div class="card-tittle">
                                                <h4>
                                                    What is UI/UX can do?
                                                </h4>
                                            </div>
                                            <div class="discription">
                                                <p>
                                                    Jump into UI/UX design with our Figma course, tailored for beginners
                                                    and
                                                    those looking to polish their design skills. Alongside using Figma,
                                                    you'll
                                                    leverage Mobbin to identify current UI patterns, enabling you to see
                                                    effective design solutions in action. The course covers how to
                                                    organize
                                                    elements on a page, play with color schemes and fonts, and ensure
                                                    your
                                                    designs respond well across different devices.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 shadow rounded">
                                    <div class="d-flex justify-content-center">
                                        <div class="listimg p-2">
                                            <img width="
                                            185.6px"
                                                src="/upload/social_media/menu1.png" alt="Not found">
                                        </div>
                                        <div class="body-text">
                                            <div class="card-tittle">
                                                <h4>
                                                    UI design (user interface design)
                                                </h4>
                                            </div>
                                            <div class="discription">
                                                <p>
                                                    Jump into UI/UX design with our Figma course, tailored for beginners
                                                    and
                                                    those looking to polish their design skills. Alongside using Figma,
                                                    you'll
                                                    leverage Mobbin to identify current UI patterns, enabling you to see
                                                    effective design solutions in action. The course covers how to
                                                    organize
                                                    elements on a page, play with color schemes and fonts, and ensure
                                                    your
                                                    designs respond well across different devices.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 shadow rounded">
                                    <div class="d-flex justify-content-center">
                                        <div class="listimg p-2">
                                            <img width="
                                            185.6px"
                                                src="/upload/social_media/menu1.png" alt="Not found">
                                        </div>
                                        <div class="body-text">
                                            <div class="card-tittle">
                                                <h4>
                                                    Learn tool
                                                </h4>
                                            </div>
                                            <div class="discription">
                                                <p>
                                                    Jump into UI/UX design with our Figma course, tailored for beginners
                                                    and
                                                    those looking to polish their design skills. Alongside using Figma,
                                                    you'll
                                                    leverage Mobbin to identify current UI patterns, enabling you to see
                                                    effective design solutions in action. The course covers how to
                                                    organize
                                                    elements on a page, play with color schemes and fonts, and ensure
                                                    your
                                                    designs respond well across different devices.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 shadow rounded">
                                    <div class="d-flex justify-content-center">
                                        <div class="listimg p-2">
                                            <img width="
                                            185.6px"
                                                src="/upload/social_media/menu1.png" alt="Not found">
                                        </div>
                                        <div class="body-text">
                                            <div class="card-tittle">
                                                <h4>
                                                    Learn shortcut
                                                </h4>
                                            </div>
                                            <div class="discription">
                                                <p>
                                                    Jump into UI/UX design with our Figma course, tailored for beginners
                                                    and
                                                    those looking to polish their design skills. Alongside using Figma,
                                                    you'll
                                                    leverage Mobbin to identify current UI patterns, enabling you to see
                                                    effective design solutions in action. The course covers how to
                                                    organize
                                                    elements on a page, play with color schemes and fonts, and ensure
                                                    your
                                                    designs respond well across different devices.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

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
