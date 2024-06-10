<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course Detail</title>
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

        /* .container-fluid {
            max-width: 1200px;
            margin: auto;
        } */
        .card {
            margin: 20px;
            border: 1px solid #ddd;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            /* flex-direction: row-reverse; */

        }

        .card {
            position: relative;
            overflow: visible;
            /* Allow overflow */
        }

        .img-container {
            position: relative;
            overflow: visible;
            /* Ensure the img-container allows overflow */
        }

        .card-img-top {
            transition: transform 0.3s ease;
        }

        .card-img-top:hover {
            transform: scale(1.1);
        }

        .card-img-top {
            width: 30%;
            height: auto;
            object-fit: content;
            border-radius: 11px;


        }

        .card-body {
            padding: 35px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: left;
            text-align: left;


        }

        .card-body h4 {
            color: rgba(21, 119, 255, 1);
            font-weight: bolder !important;
            font-size: 35px;
        }

        .card-body .card-text {
            color: gray;
            font-size: 20px;
        }

        span {
            color: gray;
            font-size: 20px;
        }

        .search {
            height: auto;
            margin: 20px;
            border: 1px solid #ddd;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            /* flex-direction: row-reverse; */
            padding: 2rem;
        }

        .group-search {
            position: relative;
            margin: 10px 0;
        }

        .group-search label {
            display: block;
            margin-bottom: 5px;
            color: rgba(21, 119, 255, 1);
            font-weight: 600;
        }

        label {
            color: rgba(21, 119, 255, 1);
            font-weight: 600;
            margin-bottom: 7px;
        }

        .group-search input {
            /* width: 100%; */
            padding: 10px 40px 10px 10px;
            /* Added padding to the right for the icon */
            box-sizing: border-box;

            background-color:
                rgba(244, 244, 244, 1);
        }

        .group-search .fa-magnifying-glass {
            position: absolute;
            right: 30px;
            top: 70%;
            transform: translateY(-50%);
            color: rgba(161, 161, 161, 1);
        }

        .group1 .round-circle1 {
            border-radius: 50%;
            width: 35px;
            height: 35px;
            line-height: 30px;
            text-align: center;
            align-content: center;
            position: absolute;
            right: 55px;
            top: 41.5%;
            transform: translateY(-50%);
            background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 80%);
            color: white;


        }

        .group2 .round-circle2 {
            border-radius: 50%;
            width: 35px;
            height: 35px;
            line-height: 30px;
            text-align: center;
            align-content: center;
            position: absolute;
            right: 55px;
            top: 55.7%;
            transform: translateY(-50%);
            background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 80%);

            color: white;
        }

        .group3 .round-circle3 {
            border-radius: 50%;
            width: 35px;
            height: 35px;
            line-height: 30px;
            text-align: center;
            align-content: center;
            position: absolute;
            right: 55px;
            top: 69.8%;
            transform: translateY(-50%);
            background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 80%);

            color: white;
        }

        .group4 .round-circle4 {
            border-radius: 50%;
            width: 35px;
            height: 35px;
            line-height: 30px;
            text-align: center;
            align-content: center;
            display: inline-block;
            position: absolute;
            right: 55px;
            top: 83.8%;
            transform: translateY(-50%);
            background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 80%);

            color: white;
        }

        .group1 button,
        .group2 button,
        .group3 button,
        .group4 button {
            padding: 10px 40px 10px 10px;
            box-sizing: border-box;
            text-align: left;
            font-weight: 600;
            margin-bottom: 1rem;
            background-color: rgba(244, 244, 244, 1);
        }

        #button1 {
            color: rgba(21, 119, 255, 1);
            background: linear-gradient(90deg, rgba(246, 250, 255, 1) 0%, rgba(155, 202, 255, 1) 80%);
        }

        button:hover {
            color: rgba(21, 119, 255, 1);
            background: linear-gradient(90deg, rgba(246, 250, 255, 1) 0%, rgba(155, 202, 255, 1) 80%);
        }

        @media screen and (min-width: 1200px) and (max-width: 1380px) {
            p {
                margin-top: 0;
                font-size: 12px;
                margin-bottom: 1rem;
            }

            button:hover {
                color: rgba(21, 119, 255, 1) !important;
                background: linear-gradient(90deg, rgba(246, 250, 255, 1) 0%, rgba(155, 202, 255, 1) 80%);
            }
        }

        @media screen and (min-width: 989px) and (max-width: 1200px) {
            button:hover {
                color: rgba(21, 119, 255, 1) !important;
                background: linear-gradient(90deg, rgba(246, 250, 255, 1) 0%, rgba(155, 202, 255, 1) 80%);
            }

            .card {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                overflow: visible;
                /* Ensure card allows overflow */
            }

            .card-img-top {
                width: 40%;
                height: auto;
                object-fit: cover;
                border-radius: 20px;
                transition: transform 0.3s ease;
            }

            .img-container:hover .card-img-top {
                transform: scale(1.1);
            }

            .search {
                height: auto;
                margin: 20px;
                border: 1px solid #ddd;
                border-radius: 14px;
                overflow: hidden;
                box-shadow: 0 2px 4px rgba(203, 59, 59, 0.1);
                display: flex;
                padding: 1rem;
                width: 100%;
            }

            .col-lg-5 {
                width: 48% !important;
            }

            .col-lg-7 {
                width: 52% !important;
            }

            .card-body-menu h4 {
                font-size: 20px !important;
            }

            .card-body h4 {
                color: rgba(21, 119, 255, 1);
                font-weight: bolder !important;
                font-size: 30px;
            }

            .card-body .card-text {
                color: gray;
                font-size: 17px;
            }

            span {
                color: gray;
                font-size: 18px;
            }

            .group-search {
                text-align: left;
            }

            .group-search {
                position: relative;
                margin: 10px 0;
            }

            label {
                display: block;
                margin-bottom: 5px;
                font-size: 15px;
                color: rgba(21, 119, 255, 1) !important;
                font-weight: 700;
            }

            .group-search input {
                height: 42px;
                padding: 10px 20px 10px 10px;
                box-sizing: border-box;
                font-size: 13px;
                background-color: rgba(244, 244, 244, 1);
            }

            .group-search .fa-magnifying-glass {
                position: absolute;
                right: 30px;
                top: 75%;
                transform: translateY(-50%);
                color: rgba(161, 161, 161, 1);
            }

            .group1 .round-circle1,
            .group2 .round-circle2,
            .group3 .round-circle3,
            .group4 .round-circle4 {
                line-height: 10px;
                text-align: center;
                align-content: center;
                position: absolute;
                right: 40px;
                width: 30px;
                height: 30px;
                font-size: 13px;
            }

            .group1 .round-circle1 {
                top: 40.5%;
            }

            .group2 .round-circle2 {
                top: 56%;
            }

            .group3 .round-circle3 {
                top: 71%;
            }

            .group4 .round-circle4 {
                top: 86.2%;
            }

            .group1 button,
            .group2 button,
            .group3 button,
            .group4 button {
                height: 42px;
                padding: 10px 20px 10px 10px;
                box-sizing: border-box;
                text-align: left;
                font-size: 12px;
                margin-bottom: 1rem;
                background-color: rgba(244, 244, 244, 1);
            }

            .card-menu .d-flex {
                flex-direction: column;
                align-items: center;
                padding: 10px;
                margin: -11px;
            }

            .menuimg {
                width: 80%;
                height: auto;
                display: inline-block;
                margin: 5px;
            }

            .card-body-menu {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding-top: 20px;
            }

            h4 {
                font-size: 19px;
            }

            .card-text-menu {
                margin-top: auto;
                font-size: 15px;
            }

            .d-flex .menuimg {
                width: 70%;
                height: auto;
                display: inline-block;
                margin: 10px 0;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 989px) {
            button:hover {
                color: rgba(21, 119, 255, 1) !important;
                background: linear-gradient(90deg, rgba(246, 250, 255, 1) 0%, rgba(155, 202, 255, 1) 80%);
            }

            .card {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                align-items: center;

            }

            .card-img-top {
                width: 40%;
                height: auto;
                object-fit: content;
                border-radius: 20px;


            }

            .search {
                height: auto;
                margin: 20px;
                border: 1px solid #ddd;
                border-radius: 14px;
                overflow: hidden;
                box-shadow: 0 2px 4px rgba(203, 59, 59, 0.1);
                display: flex;
                /* flex-direction: row-reverse; */
                padding: 1rem;
            }

            .card-body h4 {
                color: rgba(21, 119, 255, 1);
                font-weight: bolder !important;
                font-size: 25px;
            }

            .card-body .card-text {
                color: gray;
                font-size: 15px;
            }

            span {
                color: gray;
                font-size: 17px;
            }


            .group-search {
                text-align: left;

            }

            .group-search {
                position: relative;
                margin: 10px 0;
            }

            label {
                display: block;
                margin-bottom: 5px;
                font-size: 15px;
                color:
                    rgba(21, 119, 255, 1);
                font-weight: bold;
            }

            .group-search input {
                /* width: 100%; */
                padding: 7px 20px 7px 10px;
                /* Added padding to the right for the icon */
                box-sizing: border-box;
                font-size: 13px;
                background-color:
                    rgba(244, 244, 244, 1);
            }

            .group-search .fa-magnifying-glass {
                position: absolute;
                right: 30px;
                top: 75%;
                transform: translateY(-50%);
                color: rgba(161, 161, 161, 1);
            }

            .group1 .round-circle1 {
                line-height: 10px;
                text-align: center;
                align-content: center;
                position: absolute;
                right: 40px;
                top: 41.3%;
                width: 25px;
                height: 25px;
                font-size: 12px;
            }

            .group2 .round-circle2 {
                line-height: 10px;
                text-align: center;
                align-content: center;
                position: absolute;
                right: 40px;
                top: 56%;
                width: 25px;
                height: 25px;
                font-size: 12px;
            }

            .group3 .round-circle3 {
                line-height: 10px;
                text-align: center;
                align-content: center;
                position: absolute;
                right: 40px;
                top: 71%;
                width: 25px;
                height: 25px;
                font-size: 12px;
            }

            .group4 .round-circle4 {
                line-height: 10px;
                text-align: center;
                align-content: center;
                position: absolute;
                right: 40px;
                top: 85.6%;
                width: 25px;
                height: 25px;
                font-size: 12px;

            }

            .group1 button,
            .group2 button,
            .group3 button,
            .group4 button {
                height: 35px;
                padding: 5px 20px 5px 10px;
                box-sizing: border-box;
                text-align: left;
                font-size: 12px;
                margin-bottom: 1rem;
                background-color: rgba(244, 244, 244, 1);
            }

            .card-menu .d-flex {
                flex-direction: column;
                align-items: center;
                padding: 0;
                margin: 0;
            }

            .menuimg {
                width: 80%;
                height: auto;
                display: inline-block;
                margin: 5px;
                /* Add some margin for better spacing */
            }

            .card-body-menu {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding-top: 20px;
            }

            .card-body-menu h4 {
                font-size: 17px !important;
            }

            h4 {
                font-size: 17px;
            }

            .card-text-menu {
                margin-top: auto;
                /* Push the text to the bottom */
            }

            .d-flex .menuimg {
                width: 80%;
                height: auto;
                display: inline-block;
                margin: 10px 0;
            }

            .card-body-menu {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding-top: 20px;
            }

            .card-text-menu {
                margin-top: auto;
                font-size: 14px;
            }

        }

        @media screen and (max-width: 768px) {
            .card {
                text-align: left;
                margin-bottom: 10px;

            }

            .d-flex {
                flex-direction: column;
                display: flex;
                align-items: center;
            }

            .card-img-top {
                width: 80%;
                height: auto;
                display: inline-block;
                margin: 20px 0;
                /* Add some margin for better spacing */
            }

            .card-body {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding-top: 2px;
            }

            .card-title {
                margin-top: 0;
                /* Ensure the title stays at the top */
            }

            .card-text {
                margin-top: auto;
                /* Push the text to the bottom */
            }

            .d-flex .menuimg {
                width: 80%;
                height: auto;
                display: inline-block;
                margin: 10px 0;
            }

            .card-body-menu {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding-top: 20px;
            }

            .card-text-menu {
                margin-top: auto;
            }


        }

        @media screen and (min-width: 600px) and (max-width: 768px) {
            button:hover {
                color: rgba(21, 119, 255, 1) !important;
                background: linear-gradient(90deg, rgba(246, 250, 255, 1) 0%, rgba(155, 202, 255, 1) 80%);
            }

            .card {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                align-items: center;

            }

            .card-img-top {
                width: 71%;
                height: auto;
                object-fit: content;
                border-radius: 20px;


            }

            .card-body h4 {
                color: rgba(21, 119, 255, 1);
                font-weight: bolder !important;
                font-size: 20px;
            }

            span {
                color: gray;
                font-size: 16px;
            }

            .card-body .card-text {
                color: gray;
                font-size: 15px;
            }


            .search {
                height: auto;
                margin: 20px;
                border: 1px solid #ddd;
                border-radius: 14px;
                overflow: hidden;
                box-shadow: 0 2px 4px rgba(203, 59, 59, 0.1);
                display: flex;
                /* flex-direction: row-reverse; */
                padding: 1rem;
            }

            .group-search {
                text-align: left;

            }

            .group-search {
                position: relative;
                margin: 10px 0;
            }

            .group-search label {
                font-weight: 600 !important;
            }

            label {
                display: block;
                margin-bottom: 5px;
                font-size: 15px;
                color:
                    rgba(21, 119, 255, 1);
                font-weight: 600;
            }

            .group-search input {
                /* width: 100%; */
                padding: 10px 20px 10px 10px;
                /* Added padding to the right for the icon */
                box-sizing: border-box;
                font-size: 12px;
                background-color:
                    rgba(244, 244, 244, 1);
            }

            .group-search .fa-magnifying-glass {
                position: absolute;
                right: 30px;
                top: 74.5%;
                transform: translateY(-50%);
                color: rgba(161, 161, 161, 1);
            }

            .group1 .round-circle1 {
                line-height: 10px;
                text-align: center;
                align-content: center;
                position: absolute;
                right: 44px;
                top: 40.4%;
                width: 26px;
                height: 26px;
                font-size: 12px;
            }

            .group2 .round-circle2 {
                line-height: 9px;
                text-align: center;
                align-content: center;
                position: absolute;
                right: 44px;
                top: 55.5%;
                width: 26px;
                height: 26px;
                font-size: 12px;
            }

            .group3 .round-circle3 {
                line-height: 9px;
                text-align: center;
                align-content: center;
                position: absolute;
                right: 44px;
                top: 71%;
                width: 26px;
                height: 26px;
                font-size: 12px;
            }

            .group4 .round-circle4 {
                line-height: 9px;
                text-align: center;
                align-content: center;
                position: absolute;
                right: 44px;
                top: 86%;
                width: 26px;
                height: 26px;
                font-size: 12px;

            }

            .group1 button,
            .group2 button,
            .group3 button,
            .group4 button {
                /* height: 35px; */
                padding: 10px 20px 10px 10px;
                box-sizing: border-box;
                text-align: left;
                font-size: 13px;

                margin-bottom: 1rem;
                background-color: rgba(244, 244, 244, 1);
            }

            .card-menu .d-flex {
                flex-direction: column;
                align-items: center;
                padding: 0;
                margin: 0;
            }

            .menuimg {
                width: 80%;
                height: auto;
                display: inline-block;
                margin: 5px;
                /* Add some margin for better spacing */
            }

            .card-body-menu {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding-top: 20px;
            }


            h4 {
                font-size: 19px;
            }

            .card-text-menu {
                margin-top: auto;
                /* Push the text to the bottom */
            }

            .d-flex .menuimg {
                width: 64%;
                height: auto;
                display: inline-block;
                margin: 10px 0;
            }

            .card-body-menu {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding-top: 20px;
            }

            .card-body-menu h4 {
                font-size: 19px !important;
            }

            .card-text-menu {
                margin-top: auto;
                font-size: 15px;
            }

        }

        @media screen and (min-width: 339px) and (max-width: 600px) {
            button:hover {
                color: rgba(21, 119, 255, 1) !important;
                background: linear-gradient(90deg, rgba(246, 250, 255, 1) 0%, rgba(155, 202, 255, 1) 80%);
            }

            .card {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                align-items: center;

            }

            .card-img-top {
                width: 80%;
                height: auto;
                object-fit: content;
                border-radius: 20px;


            }

            .card-body h4 {
                color: rgba(21, 119, 255, 1);
                font-weight: bolder !important;
                font-size: 20px;
            }

            span {
                color: gray;
                font-size: 16px;
            }

            .card-body .card-text {
                color: gray;
                font-size: 15px;
            }


            .search {
                height: auto;
                margin: 20px;
                border: 1px solid #ddd;
                border-radius: 14px;
                overflow: hidden;
                box-shadow: 0 2px 4px rgba(203, 59, 59, 0.1);
                display: flex;
                /* flex-direction: row-reverse; */
                padding: 1rem;
            }

            .group-search {
                text-align: left;

            }

            .group-search {
                position: relative;
                margin: 10px 0;
            }

            label {
                display: block;
                margin-bottom: 5px;
                font-size: 15px;
                color:
                    rgba(21, 119, 255, 1);

            }

            .group-search input {
                /* width: 100%; */
                padding: 10px 20px 10px 10px;
                /* Added padding to the right for the icon */
                box-sizing: border-box;
                font-size: 12px;
                background-color:
                    rgba(244, 244, 244, 1);
            }

            .group-search .fa-magnifying-glass {
                position: absolute;
                right: 30px;
                top: 74.5%;
                transform: translateY(-50%);
                color: rgba(161, 161, 161, 1);
            }

            .group1 .round-circle1 {
                line-height: 10px;
                text-align: center;
                align-content: center;
                position: absolute;
                right: 30px;
                top: 40.4%;
                width: 23px;
                height: 23px;
                font-size: 11px;
            }

            .group2 .round-circle2 {
                line-height: 9px;
                text-align: center;
                align-content: center;
                position: absolute;
                right: 30px;
                top: 55.5%;
                width: 23px;
                height: 23px;
                font-size: 11px;
            }

            .group3 .round-circle3 {
                line-height: 9px;
                text-align: center;
                align-content: center;
                position: absolute;
                right: 30px;
                top: 71%;
                width: 23px;
                height: 23px;
                font-size: 11px;
            }

            .group4 .round-circle4 {
                line-height: 9px;
                text-align: center;
                align-content: center;
                position: absolute;
                right: 30px;
                top: 86%;
                width: 23px;
                height: 23px;
                font-size: 11px;

            }

            .group1 button,
            .group2 button,
            .group3 button,
            .group4 button {
                /* height: 35px; */
                padding: 10px 20px 10px 10px;
                box-sizing: border-box;
                text-align: left;
                font-size: 13px;

                margin-bottom: 1rem;
                background-color: rgba(244, 244, 244, 1);
            }

            .card-menu .d-flex {
                flex-direction: column;
                align-items: center;
                padding: 0;
                margin: 0;
            }

            .menuimg {
                width: 80%;
                height: auto;
                display: inline-block;
                margin: 5px;
                /* Add some margin for better spacing */
            }

            .card-body-menu {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding-top: 20px;
            }


            h4 {
                font-size: 19px;
            }

            .card-text-menu {
                margin-top: auto;
                /* Push the text to the bottom */
            }

            .d-flex .menuimg {
                width: 80%;
                height: auto;
                display: inline-block;
                margin: 10px 0;
            }

            .card-body-menu {
                align-items: center !important;

            }

            .card-body-menu h4 {
                font-size: 20px !important;
            }

            .card-text-menu {
                margin-top: auto;
                font-size: 15px;
            }

        }

        @media screen and (max-width: 339px) {
            .card {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                align-items: center;

            }

            .card-img-top {
                width: 80%;
                height: auto;
                object-fit: content;
                border-radius: 20px;


            }

            .card-body {
                margin-top: -27px;
                padding: 19px;
                flex: 1;
                /* display: flex;
               flex-direction: column; */
                justify-content: center;
                align-items: center;
                text-align: left;


            }

            .card-body h4 {
                color: rgba(21, 119, 255, 1);
                font-weight: bolder !important;
                font-size: 16px;
            }

            span {
                color: gray;
                font-size: 13px;
            }

            .card-body .card-text {
                color: gray;
                font-size: 12px;
            }


            .search {
                height: auto;
                margin: 20px;
                border: 1px solid #ddd;
                border-radius: 14px;
                overflow: hidden;
                box-shadow: 0 2px 4px rgba(203, 59, 59, 0.1);
                display: flex;
                /* flex-direction: row-reverse; */
                padding: 1rem;
            }

            .group-search {
                text-align: left;

            }

            .group-search {
                position: relative;
                margin: 10px 0;
            }

            label {
                display: block;
                margin-bottom: 5px;
                font-size: 11px;
                color:
                    rgba(21, 119, 255, 1);

            }

            .group-search input {
                /* width: 100%; */
                padding: 6px 20px 6px 10px;
                /* Added padding to the right for the icon */
                box-sizing: border-box;
                font-size: 12px;
                background-color:
                    rgba(244, 244, 244, 1);
            }

            .group-search .fa-magnifying-glass {
                position: absolute;
                right: 16px;
                top: 74.5%;
                transform: translateY(-50%);
                color: rgba(161, 161, 161, 1);
            }

            .group1 .round-circle1 {
                line-height: 10px;
                text-align: center;
                align-content: center;
                position: absolute;
                right: 31px;
                top: 40%;
                width: 20px;
                height: 20px;
                font-size: 11px;
            }

            .group2 .round-circle2 {
                line-height: 10px;
                text-align: center;
                align-content: center;
                position: absolute;
                right: 31px;
                top: 55.2%;
                width: 20px;
                height: 20px;
                font-size: 11px;
            }

            .group3 .round-circle3 {
                line-height: 10px;
                text-align: center;
                align-content: center;
                position: absolute;
                right: 31px;
                top: 69.9%;
                width: 20px;
                height: 20px;
                font-size: 11px;
            }

            .group4 .round-circle4 {
                line-height: 10px;
                text-align: center;
                align-content: center;
                position: absolute;
                right: 31px;
                top: 85%;
                width: 20px;
                height: 20px;
                font-size: 11px;

            }

            .group1 button,
            .group2 button,
            .group3 button,
            .group4 button {
                /* height: 35px; */
                padding: 7px 20px 7px 10px;
                box-sizing: border-box;
                text-align: left;
                font-size: 10px;

                margin-bottom: 1rem;
                background-color: rgba(244, 244, 244, 1);
            }

            .card-menu .d-flex {
                flex-direction: column;
                align-items: center;
                padding: 0;
                margin: 0;
            }

            .menuimg {
                width: 80%;
                height: auto;
                display: inline-block;
                margin: 5px;
                /* Add some margin for better spacing */
            }


            .card-menu .d-flex .card-body-menu {
                display: flex;
                flex-direction: column;
                align-items: center;

                padding: 0;
            }


            h4 {
                font-size: 16px;
            }

            .card-text-menu {

                margin-top: auto;
                /* Push the text to the bottom */
            }

            .d-flex .menuimg {
                width: 90%;
                height: auto;
                display: inline-block;
                margin: 10px 0;
            }

            .card-body-menu {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding-top: 20px;

            }

            .card-text-menu {
                margin-top: auto;
                font-size: 12px;
            }

            .card-body-menu h4 {
                font-size: 12px !important;
            }

        }

        .menuimg {
            align-items: center;
            width: 35%;
            height: auto;
            object-fit: content;
            border-radius: 20px;
            /* display: inline-block; */

        }


        .card-menu {
            /* margin: 0; */
            border: 1px solid #ddd;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            padding: 1rem;

        }

        .card-body-menu {
            padding: 10px;
            margin-left: 1rem;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: left;
            text-align: left;
            /* padding: 1rem; */
        }

        .card-body-menu h4 {
            color: rgba(21, 119, 255, 1);
            font-size: 22px;
        }

        .card-menu {
            transition: transform 0.3s ease;


        }

        .card-menu:hover {
            transform: scale(1.1);
        }

        .backimg1 {
            display: flex;
            justify-content: center;
            position: absolute;


        }

        .backimg1 img {
            width: 60%;
        }

        .backimg2 {
            display: flex;
            justify-content: flex-end;
            position: absolute;

        }

        .backimg2 img {
            width: 40%;

        }

        /* .back .img2 {
            width: 60%;
            position: absolute;
        } */
    </style>
    <style>
        .buttomimg1 {
            display: flex;
            justify-content: flex-start;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        .buttomimg1 img {
            width: 90%;
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
            width: 60%;
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
        <img width="90%" src="/upload/social_media/Ellipse1.png" alt="err">
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card  justyfy-content-center">
                    <div class="col-12 d-flex ">

                        <img class="card-img-top" src="/upload/social_media/uxui.png" alt="not found">

                        <div class="card-body">
                            <h4 class="card-title" style="">UI UX Design</h4>
                            <span>Publish date 18-05-2024</span>
                            <p class="card-text">UI/UX design with our Figma course, tailored for beginners and
                                those
                                looking to polish their design skills. Alongside using Figma, you'll
                                leverage Mobbin to
                                identify current UI patterns, enabling you to see effective design solutions in
                                action.
                            </p>
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="card search">
                    <div class="col-12">
                        <div class="group-search">
                            <label for="search">Search</label>
                            <input type="text" name="" id="search" class="form-control"
                                placeholder="Search Course">
                            <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group1">
                            <label for="button1">Content Courses</label>
                            <button type="button" id="button1" class="form-control">Introduction to UI/UX
                                Design</button>
                            <div class="round-circle1">1</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group2">
                            <button type="button" id="button2" class="form-control">UI Kits and Templates</button>
                            <div class="round-circle2">2</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group3">
                            <button type="button" id="button3" class="form-control">Shapes, Gradients and
                                Strokes</button>
                            <div class="round-circle3">3</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="group4">
                            <button type="button" id="button4" class="form-control">Icons, Typography, and
                                Styles</button>
                            <div class="round-circle4">4</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-7">
                <div class="card card-menu">
                    <div class="col-12 d-flex">
                        <img class="menuimg" src="/upload/social_media/menu1.png" alt="Not found">
                        <div class="card-body-menu">
                            <h4 class="card-title">Introduction to UI/UX Design</h4>
                            <p class="card-text-menu">Jump into UI/UX design with our Figma course, tailored for
                                beginners
                                and those looking to polish their design skills. Alongside using Figma, you'll
                                leverage Mobbin to identify current UI patterns, enabling you to see effective design
                                solutions in action. The course covers how to organize elements on a page, play with
                                color schemes and fonts, and ensure your designs respond well across different devices.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card card-menu">
                    <div class="col-12 d-flex">
                        <img class="menuimg" src="/upload/social_media/menu1.png" alt="Not found">
                        <div class="card-body-menu">
                            <h4 class="card-title">UI DESIGN (USER INTERFACE DESIGN)</h4>
                            <p class="card-text-menu">Jump into UI/UX design with our Figma course, tailored for
                                beginners
                                and those looking to polish their design skills. Alongside using Figma, you'll
                                leverage Mobbin to identify current UI patterns, enabling you to see effective design
                                solutions in action. The course covers how to organize elements on a page, play with
                                color schemes and fonts, and ensure your designs respond well across different devices.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card card-menu">
                    <div class="col-12 d-flex">
                        <img class="menuimg" src="/upload/social_media/menu1.png" alt="Not found">
                        <div class="card-body-menu">
                            <h4 class="card-title" style="">UX DESIGN (USER EXPERIENCE DESIGN)</h4>
                            <p class="card-text-menu">Jump into UI/UX design with our Figma course, tailored for
                                beginners
                                and those looking to polish their design skills. Alongside using Figma, you'll
                                leverage Mobbin to identify current UI patterns, enabling you to see effective design
                                solutions in action. The course covers how to organize elements on a page, play with
                                color schemes and fonts, and ensure your designs respond well across different devices.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card card-menu">
                    <div class="col-12 d-flex">
                        <img class="menuimg" src="/upload/social_media/menu1.png" alt="Not found">
                        <div class="card-body-menu">
                            <h4 class="card-title" style="">UX DESIGN (USER EXPERIENCE DESIGN)</h4>
                            <p class="card-text-menu">Jump into UI/UX design with our Figma course, tailored for
                                beginners
                                and those looking to polish their design skills. Alongside using Figma, you'll
                                leverage Mobbin to identify current UI patterns, enabling you to see effective design
                                solutions in action. The course covers how to organize elements on a page, play with
                                color schemes and fonts, and ensure your designs respond well across different devices.
                            </p>
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
