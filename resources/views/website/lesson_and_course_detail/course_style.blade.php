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
        border-radius: 30px;
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
        transform: scale(1.05) !important;
    }

    .card-img-top {
        width: 30%;
        height: auto;
        object-fit: content;
        border-radius: 30px;
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

    .group .round-circle {
        border-radius: 50%;
        width: 35px;
        height: 35px;
        text-align: center;
        align-content: center;
        background: linear-gradient(90deg, rgba(243, 49, 247, 1) 0%, rgba(87, 158, 255, 1) 80%);
        color: white;
    }

    .group button {
        /* padding: 10px 10px 10px 10px; */
        box-sizing: border-box;
        text-align: left;
        font-weight: 600;
        margin-bottom: 1rem;
        background-color: rgba(244, 244, 244, 1);
    }

    .active-button {
        color: rgba(21, 119, 255, 1);
        background: linear-gradient(90deg, rgba(246, 250, 255, 1) 0%, rgba(155, 202, 255, 1) 80%);
    }

    button:hover {
        color: rgba(21, 119, 255, 1) !important;
        background: linear-gradient(90deg, rgba(246, 250, 255, 1) 0%, rgba(155, 202, 255, 1) 80%);
    }

    @media (min-width: 1200px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 92%;
        }
    }

    @media (min-width: 768px) {

        .container,
        .container-md,
        .container-sm {
            max-width: 92%;
        }
    }

    @media (min-width: 992px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm {
            max-width: 92%;
        }
    }

    @media screen and (min-width: 768px) and (max-width: 989px) {

        .container,
        .container-md,
        .container-sm {
            max-width: 92%;
        }
    }

    @media (min-width: 576px) {

        .container,
        .container-sm {
            max-width: 92%;
        }
    }

    @media screen and (min-width: 1200px) {
        p {
            margin-top: 0;
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        button:hover {
            color: rgba(21, 119, 255, 1) !important;
            background: linear-gradient(90deg, rgba(246, 250, 255, 1) 0%, rgba(155, 202, 255, 1) 80%);
        }

        .card-img {
            align-items: center;
            display: block;
            width: 35%;
            height: auto;
            object-fit: content;
            border-radius: 20px;
        }

        .card-body-menu {
            padding: 5px 10px !important;
            margin-left: .75rem !important;
            justify-content: start !important;
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
            padding: 2rem;
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
            width: 90%;
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

        .search {
            height: auto;
            margin: 20px 0 20px 20px;
            border: 1px solid #ddd;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(203, 59, 59, 0.1);
            display: flex;
            /* flex-direction: row-reverse; */
            padding: 2rem;
        }

        .card-menu {
            margin-left: 0 !important;
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
            font-size: 14px;
        }

    }

    @media screen and (width: 768px) {
        .card {
            text-align: left;
            margin-bottom: 10px;

        }

        .card-img-top {
            width: 40% !important;
            height: auto;
            display: inline-block;
        }

        .card-body {
            display: flex;
            flex-direction: column;
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
        }

        .card-body h4 {
            font-size: 25px !important;
        }
    }

    @media screen and (max-width: 767.9px) {
        .card {
            text-align: left;
            margin-bottom: 10px;

        }

        .course-baner {
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
            margin: 20px 0 20px 20px;
            border: 1px solid #ddd;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(203, 59, 59, 0.1);
            display: flex;
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

        .card-body-menu h4 {
            font-size: 19px !important;
        }

        .card-text-menu {
            margin-top: auto;
            font-size: 15px;
        }

    }

    @media screen and (min-width: 400px) and (max-width: 600px) {
        button:hover {
            color: rgba(21, 119, 255, 1) !important;
            background: linear-gradient(90deg, rgba(246, 250, 255, 1) 0%, rgba(155, 202, 255, 1) 80%);
        }

        .pl-0 {
            padding-right: 0 !important;
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
            padding: 1.5rem;
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

        .card-title {
            padding: 0 1.1rem;
            text-align: center;
            justify-content: center;
        }

        .card-text-menu {
            margin-top: auto;
            font-size: 15px;
            padding: 0 1.1rem;
        }

    }

    @media screen and (min-width: 345px) and (max-width: 400px) {
        button:hover {
            color: rgba(21, 119, 255, 1) !important;
            background: linear-gradient(90deg, rgba(246, 250, 255, 1) 0%, rgba(155, 202, 255, 1) 80%);
        }

        .pl-0 {
            padding-right: 0 !important;
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
            padding: 1.5rem;
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

        .card-title {
            padding: 0 1.1rem;
            text-align: center;
            justify-content: center;
        }

        .card-text-menu {
            margin-top: auto;
            /* Push the text to the bottom */
            padding: 0 1.1rem;
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

    @media screen and (max-width: 345px) {
        .card-baner {
            padding-right: 0 !important;
        }

        .row>* {
            padding-right: 0;
        }

        .card-title {
            padding: 0 .8rem;
            text-align: center;
            justify-content: center;
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
            padding: 0 .7rem;
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
            font-size: 15px !important;
        }

    }

    @media (max-width: 565px) {
        .group .form-control {
            flex-direction: row;
            justify-content: space-between;
        }

        .group .round-circle {
            width: 25px !important;
            height: 25px !important;
        }

        .group .btn-title {
            margin-right: auto;
        }
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
        cursor: pointer;
        /* Optional: To indicate that the button is clickable */
    }

    .card-menu {
        position: relative;
    }

    .menuimg {
        width: 100%;
        border-radius: 20px;
    }

    .card-img {
        align-items: center;
        display: block;
        height: auto;
        object-fit: content;
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
        /* margin-left: 1rem; */
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
        transform: scale(1.07) !important;
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

    .card-img {
        justify-content: center;
        align-content: center;
        text-align: center;
    }
</style>
