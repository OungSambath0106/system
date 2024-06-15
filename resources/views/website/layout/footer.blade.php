<style>
    @media (max-width: 565px) {
        .main-footer {
            padding: .7rem 1.5rem !important;
            font-size: .75rem;
        }
    }

    .main-footer {
        padding: .7rem;
    }
</style>

<footer class="main-footer text-start position-absolute bottom-auto w-100 px-5">
    <strong>{{ session()->get('copy_right_text') }}</strong>
</footer>
