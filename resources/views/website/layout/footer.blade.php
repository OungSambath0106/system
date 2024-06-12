<style>
    @media (min-width: 1279px) {
        .main-footer {
            /* bottom: 0; */
        }
    }

    @media (max-width: 565px) {
        .main-footer {
            padding: .7rem 2rem !important;
            font-size: .6rem;
        }
    }

    .main-footer {
        padding: .7rem;
    }
</style>

<footer class="main-footer text-start position-absolute bottom-auto w-100 px-5">
    <strong>{{ session()->get('copy_right_text') }}</strong>
</footer>
