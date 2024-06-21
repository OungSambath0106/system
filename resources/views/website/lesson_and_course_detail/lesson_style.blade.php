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
        font-size: 11.5px;
    }

    .col-7 p {
        margin-left: 0px;
        padding-right: 15px;
        font-size: 20px;
    }

    .show-video {
        border-radius: 20px;
        height: 60vh;
        width: 51vw;
        object-fit: cover;
    }

    .col-7 h4 {
        font-weight: 700;
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

    /* -------Lesson video --------*/
    .lessoning {
        padding-right: 15px;
    }

    .playvideo {
        background-color: rgba(21, 119, 255, 1);
        border-radius: 50%;
        width: 60px;
        height: 60px;
        text-align: center;
        align-content: center;
        border: 5px solid white;
        padding-left: 4px;
        padding-top: 5px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 10;
    }

    .playvideo i {
        color: #fff;
        font-size: 27px;
    }

    .listimg {
        position: relative;
        display: inline-block;
    }

    .menuplayvideo {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(21, 119, 255, 1);
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 5px solid white;
        cursor: pointer;
        padding-left: 3px;
    }

    .menuplayvideo i {
        color: #fff;
        font-size: 25px;
    }

    .card-tittle h4 {
        font-size: 15px;
        font-weight: 600;
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
        margin-bottom: 20px;
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

    /* @media (min-width: 1200px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 90%;
        }
    }

    @media (min-width: 990px) and (max-width: 1200px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm {
            max-width: 90%;
        }
    }

    @media (min-width: 988.1px) and (max-width: 990px) {

        .container,
        .container-md,
        .container-sm {
            max-width: 90% !important;
        }
    } */
    @media (min-width: 1200.1px) {

        .col-5 {
            padding-left: 15px !important;
        }

        .listimg {
            max-width: 34%;
        }

        .body-text {
            max-width: 66%;
        }
    }

    @media (min-width: 600px) and (max-width: 1200px) {

        .col-7 {
            width: 65% !important;
        }

        .col-5 {
            width: 35% !important;
            padding-left: 15px !important;
        }
    }

    @media (min-width: 768px) and (max-width: 1200px) {

        .listimg {
            padding: 20px !important;
        }
    }

    @media (min-width: 600px) and (max-width: 768px) {

        .listimg {
            padding: .7rem !important;
        }
    }

    @media (min-width: 768px) {

        .container,
        .container-md,
        .container-sm {
            max-width: 90% !important;
        }
    }

    @media (min-width: 601px) {

        .container,
        .container-sm {
            max-width: 90%;
        }
    }

    @media screen and (min-width: 989px) and (max-width: 1200px) {
        .text-primary {
            font-size: 27px;
        }

        .show-video {
            height: 100%;
            width: 100%;
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
            font-size: 13px;

        }

        .card-header h3 {
            font-size: 25px !important;
        }

    }

    @media screen and (min-width: 768px) and (max-width: 989px) {
        .text-primary {
            font-size: 25px;
            text-align: left;

        }

        .show-video {
            height: 100%;
            width: 100%;
        }

        .col-7 p {
            font-size: 17px;
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
            padding-left: 20px;
            padding-right: 20px;
        }

        .card-tittle {
            text-align: center;
        }

        .discription p {
            font-size: 13px;

        }

        .card-header h3 {
            font-size: 20px !important;
        }
    }

    @media screen and (min-width: 600px) and (max-width: 768px) {

        .col-7 {
            width: 65%;
        }

        .show-video {
            height: 100%;
            width: 100%;
        }

        .col-7 p {
            margin-left: 0px;
            margin-right: 25px;
            font-size: 15px;
        }

        .container .row {
            justify-content: center;
            align-content: center;
        }

        .text-primary {
            font-size: 20px;
            margin-left: 0px;
            text-align: left;
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

        .show-video {
            height: 100%;
            width: 100%;
        }

        .col-7 p {
            margin-left: 0px;
            margin-right: 29px;
            font-size: 15px;
        }


        .col-5 {
            width: 40%;
        }

        .container .row {
            justify-content: center;
            align-content: center;
        }

        .text-primary {
            font-size: 20px;
            margin-left: 0px;
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

        .show-video {
            height: 100%;
            width: 100%;
        }

        .container {
            margin-top: 0 !important;
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
            width: 90%;
        }

        .col-5 {
            width: 96%;
        }

        .card-body {
            padding: 1rem 2rem !important;
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
            width: 90%;
        }

        .col-5 {
            width: 96%;
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

        .show-video {
            height: 100%;
            width: 100%;
        }

    }

    @media (max-width: 565px) {
        .title-video {
            margin-bottom: .3rem;
        }

        .playvideo {
            width: 80px;
            height: 80px;
        }

        .menuplayvideo {
            width: 65px;
            height: 65px;
        }

        .playvideo i {
            color: #fff;
            font-size: 30px;
        }

        .lessoning {
            padding: 0;
        }

        .discription {
            margin-right: 0 !important;
            padding: 0 5px !important;
        }

        .show-video {
            height: 100%;
            width: 100%;
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
            width: 90%;
        }

        .col-5 {
            width: 96%;
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

        .show-video {
            height: 100%;
            width: 100%;
        }

    }
</style>
