<style>
    @media (min-width: 1024px)and (max-width: 1279px) {
        .content {
            min-height: 92vh;
            padding-top: 4rem !important;
        }

        .card-title-outside {
            display: none;
        }

        .card-title-inside {
            margin-top: -4rem !important;
            margin-bottom: 1rem !important;
        }

        .card-button-outside {
            display: none;
        }

        .card-content .card-img {
            width: 30%;
            margin-right: 30px;
        }
    }

    @media (min-width: 768px) {
        .col-sm-3 {
            width: 19%;
        }
    }

    @media (min-width: 565px) and (max-width: 1024px) {
        .card-title-outside {
            display: none;
        }

        .card-title-inside {
            margin-top: -.5rem !important;
            margin-bottom: 1rem !important;
        }

        .card-button-outside {
            display: none;
        }

        .card-content .card-img {
            width: 30%;
            margin-right: 30px;
        }
    }

    @media (min-width: 1279px) {
        .content {
            height: 90vh !important;
        }

        .card-content .card-img {
            text-align: center;
        }

        .card-button-inside,
        .card-title-inside {
            display: none;
        }
    }

    @media (max-width: 1279px) {
        .card {
            width: 100%;
        }

        .col-6 {
            padding-right: 0;
        }

        .uiux-card .card-content,
        .laravel-card .card-content {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0 !important;
        }

        .card-right .card-body .text-description {
            width: 100%;
            font-size: 1rem;
            padding: 0 2rem !important;
        }

        .card-content .text-description {
            width: 90%;
            font-size: 1rem;
            padding: 0 !important;
        }

        .card-button {
            width: 100%;
            padding: 10px;
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
            padding: .4rem !important;
        }

        .card-button a {
            padding: 7px;
            font-size: 1rem;
            width: 100%;
        }
    }

    @media (max-width: 565px) {
        .card {
            width: 100%;
        }

        .card-body {
            padding: 0;
        }

        .card .card-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 4rem;
            padding-bottom: 0 !important;
        }

        .col-sm-6 {
            padding-right: 0;
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
            width: 85%;
            margin-top: 1.5rem !important;
        }

        .card-title-outside {
            position: absolute;
            top: 0;
            width: 85%;
            margin-top: 1.5rem !important;
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
        padding: 2.6rem;
    }

    .card-title,
    .card-title-outside,
    .card-title-inside {
        border-radius: 4px;
        background-color: #F3E2FA;
        text-transform: uppercase;
    }

    .btn-learn {
        background: rgb(243, 49, 247);
        background: linear-gradient(90deg, rgba(243, 49, 247, 1) 8%, rgba(87, 158, 255, 1) 70%);
        color: #F4F4F4 !important;
        border-radius: 16px;
    }

    .card-button,
    .card-button-inside,
    .card-button-outside {
        border: none;
        padding: 0;
        text-transform: uppercase;
    }

    .card {
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.7)
    }

    .text-description {
        font-size: 14px;
    }
</style>