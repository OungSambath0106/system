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

        .card-head {
            padding-left: 3rem;
            padding-right: 3rem;
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
            height: 7cm;
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
            top: 66%;
        }

        p {
            font-size: 13px;
        }



        .backimg1 img {
            margin-left: 8cm !important;
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



        .backimg1 img {
            width: 55% !important;
            margin-left: 11rem !important;
        }

        .backimg2 img {
            width: 50% !important;
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
            top: 73%;
        }
        
        .card-footer {
            height: 13rem;
        }

        p {
            font-size: 11px;
        }

        .backimg1 img {
            margin-left: 5cm !important;
        }

        .backimg2 img {
            width: 40% !important;
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


        .backimg1 img {
            margin-left: 4cm !important;
            width: 50% !important;
        }

        .backimg2 img {
            width: 50% !important;
        }

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

        /*
        .card-head {
            padding-top: 0;
        } */

        .card-text {
            width: 97%;
        }

        .card-message {
            margin-bottom: 4rem;
            margin-top: 0 !important;
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

        .backimg1 img {
            margin-left: 2cm !important;
            width: 55% !important;
        }

        .backimg2 img {
            width: 52% !important;
        }

        .buttomimg1 img {
            width: 50%;
            margin-left: 5rem !important;
        }

    }

    @media screen and (max-width: 353px) {
        .container {
            padding: 1rem !important;
        }

        .col-11 {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            margin-top: 0 !important;
            /* padding: 0 0 0 0; */
        }

        .card .col-8 {
            width: 100%;

        }

        /* .card-head {
            padding-top: 1rem;
        } */

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


        .backimg1 img {
            margin-left: 2cm !important;
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
</style>
