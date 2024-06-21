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
        font-size: 2.5em;
    }

    .icon img {
        color: #ffffff;
        width: 50%;

    }

    .card-footer .container-circle {
        position: absolute;
        top: 65%;
        display: flex;
        justify-content: center;
        align-content: center;
    }

    .card-footer {
        height: 250px;
        display: flex;
        justify-content: center;
    }

    .px-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
    }

    h5 {
        color: rgba(21, 119, 255, 1);
        font-weight: bold;
    }

    p {
        margin: 0 0 0 0;
        color: rgba(21, 119, 255, 1)
    }

    .circle {
        /* width: 100%; */

    }

    /* backgrund image */
    .backimg1 {
        display: flex;
        justify-content: center;
        position: absolute;

    }

    .backimg1 img {
        width: 45%;
        margin-left: 13cm;
    }

    .backimg2 {
        display: flex;
        justify-content: flex-end;
        position: absolute;
    }

    .backimg2 img {
        width: 35%;

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

    @media screen and (min-width: 1024px) and (max-width: 1200px) {
          .container {
            padding: 0.5rem 0 !important;
        }
        .container .container-card {
            width: 100% !important;
        }

        .card {
            margin-top: 1rem !important;
        }

        .card .col-10 {
            width: 90%;
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
            height: auto !important;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;


        }

        .card-footer .container-circle {
            display: flex;
            /* flex-wrap: wrap; */
            position: relative;
              text-align: center !important;
            top: -26% !important;
            /* gap: 1rem !important; */
        }


        .card-footer .circle {
            /* width: 100% !important; */
            /* display: flex; */
            /* flex-direction: column; */
            text-align: center !important;
            padding: 10px;

            justify-content: center !important;
            align-items: center !important;
        }

        /* .texticon {
            width: 70% !important;
        } */

        .px-5 {
            padding-right: 2rem !important;
            padding-left: 2rem !important;
        }
        .icon {
            width: 70px;
            height: 70px;
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
            font-size: 15px;
        }

        .icon img {
            color: #ffffff;
            width: 50%;

        }


        p {
            font-size: 14px;
        }

        /* .col-3 {
            width: 45%;
        } */

        .backimg1 img {
            margin-left: 8cm !important;
        }


    }

    @media screen and (min-width:989px) and (max-width: 1024px) {
          .container {
            padding: 0.5rem 0 !important;
        }
        .container .container-card {
            width: 100% !important;
        }

        .card {
            margin-top: 1rem !important;
        }

        .card .col-10 {
            width: 90%;
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
        .card-footer {
            height: auto !important;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;

        }

        .card-footer .container-circle {
            display: flex;
            flex-wrap: wrap;
            position: relative;
            top: 0 !important;
            gap: 10px !important;
        }


        .card-footer .circle {
            width: 45% !important;
            display: flex;
            flex-direction: column;
            text-align: center;
            padding: 10px;
            justify-content: center !important;
            align-items: center !important;
        }

        .texticon {

            width: 70% !important;
        }

        .px-5 {
            padding-right: 4rem !important;
            padding-left: 4rem !important;
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
            font-size: 1.6em;
        }


        h5 {
            font-size: 15px;
        }

        .icon img {
            color: #ffffff;
            width: 50%;

        }


        p {
            font-size: 14px;
        }



        .backimg1 img {
            width: 55% !important;
            margin-left: 11rem !important;
        }

        .backimg2 img {
            width: 50% !important;
        }

        .buttomimg1 img {
            width: 60% !important;
            margin-left: 5rem !important;
        }

        .buttomimg2 img {
            width: 60% !important;
        }

    }

    @media screen and (min-width:768px) and (max-width: 989px) {
        .container {
            padding: 1rem 0 !important;
        }

        .container .container-card {
            width: 100% !important;
        }

        .card {
            width: 100% !important;
            margin-top: -30 !important;
        }

        .card .col-10 {
            width: 90%;
        }

        .form-group {
            width: 80% !important;
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

        .form-group button {

            padding: 9px;
            font-size: 13px;
        }

        /*-------------------- footer ---------------------- */
        .card-footer {
            height: auto !important;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;

        }

        .card-footer .container-circle {
            display: flex;
            flex-wrap: wrap;
            position: relative;
            top: 0 !important;
            gap: 10px !important;
        }


        .card-footer .circle {
            display: flex;
            flex-direction: column;
            text-align: center;
            padding: 10px;
            width: 45% !important;
        }


        .px-5 {
            padding-right: 4rem !important;
            padding-left: 4rem !important;
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
            font-size: 1.6em;
        }


        h5 {
            font-size: 15px;
        }

        .icon img {
            color: #ffffff;
            width: 50%;

        }


        p {
            font-size: 14px;
        }



        .backimg1 img {
            width: 55% !important;
            margin-left: 11rem !important;
        }

        .backimg2 img {
            width: 50% !important;
        }

        .buttomimg1 img {
            width: 60% !important;
            margin-left: 5rem !important;
        }

        .buttomimg2 img {
            width: 60% !important;
        }

    }

    @media screen and (min-width: 565px) and (max-width: 768px) {
        .container {
            padding: 1rem 0 !important;
        }

        .container .col-10 {
            width: 100%;

        }

        .card {
            margin-top: -30px !important;
        }

        .card .col-10 {
            width: 90%;
        }

        .form-group {
            width: 80% !important;
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

        .form-group button {

            padding: 9px;
            font-size: 13px;
        }

        /*-------------------- footer ---------------------- */
        .card-footer {
            height: auto !important;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;

        }

        .card-footer .container-circle {
            display: flex;
            flex-wrap: wrap;
            position: relative;
            top: 0 !important;
            gap: 10px !important;
        }


        .card-footer .circle {
            display: flex;
            flex-direction: column;
            text-align: center !important;
            padding: 10px;
            width: 45% !important;
        }

        .px-5 {
            padding-right: 4rem !important;
            padding-left: 4rem !important;
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
            font-size: 1.6em;
        }


        h5 {
            font-size: 15px;
        }

        .icon img {
            color: #ffffff;
            width: 50%;

        }


        p {
            font-size: 14px;
        }

        /*----------- image-background ----------------- */


        .backimg1 img {
            margin-left: 4cm !important;
            width: 50% !important;
        }

        .backimg2 img {
            width: 50% !important;
        }

        .buttomimg1 img {
            width: 60% !important;
            margin-left: 5rem !important;
        }

        .buttomimg2 img {
            width: 65% !important;
        }

    }

    @media screen and (min-width: 414px) and (max-width: 565px) {
        .container {
            padding: 1rem 0.7rem !important;
        }

        .container .col-10 {
            width: 100%;
            justify-content: center;
            align-items: center;
        }

        .card {
            margin-top: -30 !important;
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
            font-size: 15px;
            padding: 0 10px 0 10px;

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
            height: 100% !important;
            display: flex !important;
            flex-wrap: wrap;
            justify-content: center;

        }


        .card-footer .container-circle {
            display: flex !important;
            justify-content: center;
            flex-direction: column;
            align-content: center;
            align-items: center;
            padding: 0 0 0 0 !important;
            gap: 10px !important;
        }



        .card-footer .col-md-3 {
            width: 60%;
            display: flex;
            flex-direction: column;
            text-align: center;
            padding: 10px;
        }

        .px-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important;
        }

        /* .col-md-3 {
            width: 100% !important;
            text-align: center !important;
            margin-bottom: 2rem;
        } */

        .icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 90%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fa-lg {
            color: #ffffff;
            font-size: 1.7em;
        }

        h5 {
            font-size: 14px;
        }

        .icon img {
            color: #ffffff;
            width: 45%;

        }

        .card-footer .container-circle {
            position: relative !important;
            top: 0 !important;

        }

        p {

            font-size: 12px;
        }

        /*----------- image-background ----------------- */

        .backimg1 img {
            margin-left: 2cm !important;
            width: 50% !important;
        }

        .backimg2 img {
            width: 50% !important;
        }

        .buttomimg1 img {
            width: 60% !important;
            margin-left: 5rem !important;
        }

        .buttomimg2 img {
            width: 65% !important;
        }

    }

    @media screen and (min-width: 360px) and (max-width: 414px) {
        .container {
            padding: 1rem 0.7rem !important;
        }

        .col-10 {
            width: 100%;
            justify-content: center;
            align-items: center;
        }

        .card {
            margin-top: -30 !important;
        }

        .form-group {
            width: 80% !important;
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
            font-size: 15px;
            padding: 0 10px 0 10px;

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
            height: 100% !important;
            display: flex !important;
            flex-wrap: wrap;
            justify-content: center;

        }


        .card-footer .container-circle {
            display: flex !important;
            justify-content: center;
            flex-direction: column;
            align-content: center;
            align-items: center;
            padding: 0 0 0 0 !important;
            gap: 10px !important;
        }

        .px-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important;
        }

        .card-footer .col-md-3 {
            width: 70%;
            display: flex;
            flex-direction: column;
            text-align: center;
            padding: 10px;
        }

        /* .px-5 {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
        } */

        /* .col-md-3 {
            width: 100% !important;
            text-align: center !important;
            margin-bottom: 2rem;
        } */

        .icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 90%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fa-lg {
            color: #ffffff;
            font-size: 1.7em;
        }

        h5 {
            font-size: 14px;
        }

        .icon img {
            color: #ffffff;
            width: 45%;

        }

        .card-footer .container-circle {
            position: relative !important;
            top: 0 !important;

        }

        p {

            font-size: 12px;
        }

        /*----------- image-background ----------------- */

        .backimg1 img {
            margin-left: 2cm !important;
            width: 50% !important;
        }

        .backimg2 img {
            width: 50% !important;
        }

        .buttomimg1 img {
            width: 60% !important;
            margin-left: 5rem !important;
        }

        .buttomimg2 img {
            width: 65% !important;
        }



    }

    @media screen and (min-width: 320px) and (max-width: 360px) {
        .container {
            padding: 1rem 0.7rem !important;
        }

        .col-10 {
            width: 100%;
            justify-content: center;
            align-items: center;
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
            font-size: 15px;
            padding: 0 10px 0 10px;

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
            height: 100% !important;
            display: flex !important;
            flex-wrap: wrap;
            justify-content: center;

        }


        .card-footer .container-circle {
            display: flex !important;
            justify-content: center;
            flex-direction: column;
            align-content: center;
            align-items: center;
            padding: 0 0 0 0 !important;
             gap: 10px !important;
        }



        .card-footer .col-md-3 {
            width: 60%;
            display: flex;
            flex-direction: column;
            text-align: center;
            padding: 10px;
        }

        .px-5 {
            padding-right: 2rem !important;
            padding-left: 2rem !important;
        }

        /* .col-md-3 {
            width: 100% !important;
            text-align: center !important;
            margin-bottom: 2rem;
        } */

        .icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 90%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fa-lg {
            color: #ffffff;
            font-size: 1.7em;
        }

        h5 {
            font-size: 14px;
        }

        .icon img {
            color: #ffffff;
            width: 45%;

        }

        .card-footer .container-circle {
            position: relative !important;
            top: 0 !important;

        }

        p {

            font-size: 12px;
        }

        /*----------- image-background ----------------- */

        .backimg1 img {
            margin-left: 2cm !important;
            width: 50% !important;
        }

        .backimg2 img {
            width: 50% !important;
        }

        .buttomimg1 img {
            width: 60% !important;
            margin-left: 5rem !important;
        }

        .buttomimg2 img {
            width: 65% !important;
        }

    }

    @media screen and (max-width: 320px) {
        .container {
            padding: 1rem 0.7rem !important;
        }

        .col-10 {
            width: 100%;
            justify-content: center;
            align-items: center;
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
            font-size: 15px;
            padding: 0 10px 0 10px;

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
            height: 100% !important;
            display: flex !important;
            flex-wrap: wrap;
            justify-content: center;

        }


        .card-footer .container-circle {
            display: flex !important;
            justify-content: center;
            flex-direction: column;
            align-content: center;
            align-items: center;
            padding: 0 0 0 0 !important;
        }



        .card-footer .col-md-3 {
            width: 50%;
            display: flex;
            flex-direction: column;
            text-align: center;
            padding: 10px;
        }

        .px-5 {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        /* .col-md-3 {
            width: 100% !important;
            text-align: center !important;
            margin-bottom: 2rem;
        } */

        .icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 90%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fa-lg {
            color: #ffffff;
            font-size: 1.7em;
        }

        h5 {
            font-size: 14px;
        }

        .icon img {
            color: #ffffff;
            width: 45%;

        }

        .card-footer .container-circle {
            position: relative !important;
            top: 0 !important;

        }

        p {

            font-size: 12px;
        }

        /*----------- image-background ----------------- */

        .backimg1 img {
            margin-left: 2cm !important;
            width: 50% !important;
        }

        .backimg2 img {
            width: 50% !important;
        }

        .buttomimg1 img {
            width: 60% !important;
            margin-left: 5rem !important;
        }

        .buttomimg2 img {
            width: 65% !important;
        }

    }
</style>
