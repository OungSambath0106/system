<style>
    @media (min-width: 1279px) {
        .content {
            height: 84.5vh;
        }

        .card-content .card-img {
            text-align: center;
        }

        .card-button-inside,
        .card-title-inside {
            display: none;
        }

        .text-description {
            padding: 0 .4rem;
            font-size: .94rem !important;
        }

        .center-card {
            margin-top: 1rem;
        }

        .col-sm-3 {
            width: 18% !important;
        }

        .col-6 {
            width: 55%;
        }
    }

    @media (min-width: 1138px)and (max-width: 1279px) {
        .content {
            height: 84.5vh;
        }

        .text-description {
            padding: 0 .4rem;
            font-size: .93rem !important;
        }

        .center-card {
            margin-top: 1rem;
        }

        .card-title-inside {
            display: none;
        }

        .card-button-outside {
            display: none;
        }

        .col-sm-3 {
            width: 18% !important;
        }

        .col-6 {
            width: 55%;
        }
    }

    @media (min-width: 1024px) and (max-width: 1138px) {
        .row {
            margin-right: 0 !important;
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .col-sm-3 {
            width: 16%;
        }

        .text-description {
            font-size: .95rem !important;
        }

        .row {
            margin-right: 0 !important;
        }
    }

    @media (min-width: 565px)and (max-width: 1138px) {
        .card {
            width: 100%;
        }

        .col-6 {
            padding-right: 0;
        }

        .card-title-outside {
            display: none;
        }

        .card-title-inside {
            margin-right: .7rem !important;
        }

        .card-button-outside {
            display: none;
        }

        .card-content .card-img {
            width: 30%;
            height: 30%;
            margin-right: 30px;
        }

        .right-card .card-content {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0 !important;
        }

        .text-description {
            width: 100%;
            font-size: 1rem;
            padding: 0 2rem !important;
        }

        .card-content .center-card {
            width: 90%;
            font-size: 1rem;
            padding: 0 !important;
        }

        .card-content .center-card .text-description {
            padding: 1rem 2rem !important;
        }

        .card-button {
            width: 100%;
            padding: 10px;
        }

        .card-button-inside {
            margin: 0 !important;
            padding: 10px 1rem 10px .6rem;
        }

        .col-sm-6 {
            width: 100%;
        }

        .card-right {
            width: 72%;
        }

        .card-left {
            width: 28%;
        }

        .card-left .card-img {
            text-align: center !important;
        }

        .card-button-inside .card-button a,
        .card-button-inside a {
            padding: 5px;
            font-size: 1rem;
            width: 100%;
        }

        .icon {
            width: 3.8vw !important;
            height: 3.8vw !important;
        }

        .icon i {
            font-size: 1.7vw !important;
        }
    }

    @media (max-width: 565px) {
        .card {
            width: 100%;
        }

        .mt--3 {
            margin-top: .8rem !important;
        }

        .card-body {
            padding: 0;
        }

        .icon {
            width: 10vw !important;
            height: 10vw !important;
        }

        .icon i {
            font-size: 5vw !important;
        }

        .card .card-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 3rem;
            padding-bottom: 0 !important;
        }

        .card .card-content .card-img {
            width: 60%;
        }

        .card .card-content .text-description {
            width: 100%;
            font-size: 1rem;
            padding: 1rem !important;
        }

        .card-button {
            width: 100%;
            padding: 10px;
        }

        .card-button-outside {
            margin: 0 !important;
            padding: 1rem 0.7rem;
        }

        .card-button-outside a {
            padding: 5px;
            font-size: 1rem;
        }

        .card-button-inside {
            display: none;
        }

        .col-sm-6 {
            width: 100%;
        }

        .card-button a {
            padding: 5px;
            font-size: 1rem;
        }

        .card-title {
            position: absolute;
            top: 0;
            width: 87%;
            margin-top: 1.5rem !important;
        }

        .card-title-outside {
            position: absolute;
            top: 0;
            width: 87%;
            margin-top: 1.5rem !important;
            margin-left: 4px !important;
        }

        .card-title-inside {
            display: none !important;
        }

        .card-left,
        .card-right {
            width: 100%;
            padding-right: .4rem;
            padding-left: 1rem;
        }

        .card-right .card-body .text-description {
            width: 100%;
            font-size: 1rem;
            padding: 1rem !important;
        }

        .card-left {
            margin-top: 4rem;
        }

        .card-img {
            text-align: center;
            width: 60%;
            margin: 0 auto;
        }
    }

    .content {
        background-image: url('/upload/background/background.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center bottom;
        padding: 2.45rem;
    }

    .card-title,
    .card-title-outside,
    .card-title-inside {
        border-radius: 4px;
        background-color: #F3E2FA;
        text-transform: uppercase;
    }

    .btn-learn {
        border: none;
        background: rgb(243, 49, 247);
        background: linear-gradient(90deg, rgba(243, 49, 247, 1) 8%, rgba(87, 158, 255, 1) 70%);
        color: #F4F4F4 !important;
        border-radius: 16px;
    }

    .card-button,
    .card-button-inside,
    .card-button-outside {
        border: none;
        text-transform: uppercase;
    }

    .card {
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(25px);
        transition: transform 0.35s ease-in-out;
    }

    .card:hover {
        transform: scale(1.015);
    }

    .text-description {
        font-size: 14px;
    }

    .card-left {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-img {
        position: relative;
        display: inline-block;
    }

    .icon {
        position: absolute;
        background: rgba(255, 255, 255, 0.7);
        width: 3vw;
        height: 3vw;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        right: 0;
        margin-right: 5%;
        top: 50%;
        transform: translateY(-50%);
        text-decoration: none;
    }

    .icon i {
        font-size: 1.5vw;
        color: #FFFFFF;
    }

    .img-fluid {
        border-radius: 18px;
    }

    .link-title {
        text-decoration: none;
        color: #000000;
    }

    .link-title:hover {
        color: #000000;
    }
</style>
