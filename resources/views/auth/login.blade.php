@extends('auth.layouts.creative.main')

@section('content')
    <!--begin::Authentication - Sign-in -->
    <!--<div class="d-flex flex-column flex-lg-row flex-column-fluid">-->
    <!--begin::Body-->
    <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
        <!--begin::Form-->
        <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-500px p-10">
                <!--begin::Form-->
                <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                    data-kt-redirect-url="{{ route('home') }}" 
                    action="{{ route('login') }}" method="POST">
                    @csrf
                    <!--begin::Heading-->
                    <div class="text-center mb-11">
                        <!--begin::Title-->
                        <h1 class="text-dark fw-bolder mb-3">Bienvenido</h1>
                        <!--end::Title-->
                    </div>
                    <!--begin::Heading-->
                    
                    <!--begin::Separator-->
                    <div class="separator separator-content my-14">
                        <span class="w-225px text-gray-500 fw-semibold fs-3">Iniciar sesión</span>
                    </div>
                    <!--end::Separator-->
                    @include('layouts.alerts.error')
                    <!--begin::Input group=-->
                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <input type="text" placeholder="Email" name="email" autocomplete="off" value="{{ old('email') }}"
                            class="form-control bg-transparent" />
                        <!--end::Email-->
                    </div>
                    <!--end::Input group=-->
                    <div class="fv-row mb-3">
                        <!--begin::Password-->
                        <input type="password" placeholder="Password" name="password" autocomplete="off"
                            class="form-control bg-transparent" />
                        <!--end::Password-->
                    </div>
                    <!--end::Input group=-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                        <div></div>
                        <!--begin::Link-->
                        <a href="../../demo22/dist/authentication/layouts/corporate/reset-password.html"
                            class="link-primary">Forgot Password ?</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Submit button-->
                    <div class="d-grid mb-10">
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">Sign In</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::Submit button-->
                    <!--begin::Sign up-->
                    <div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
                        <a href="{{ route('register') }}" class="link-primary">Sign
                            up</a>
                    </div>
                    <!--end::Sign up-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Form-->
        <!--begin::Footer-->
        <div class="w-lg-500px d-flex flex-stack px-10 mx-auto">
            <!--begin::Languages-->
            <div class="me-10">
                <!--begin::Toggle-->
                <button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                    <img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3"
                        src="{{ asset('v22/media/flags/united-states.svg') }}" alt="" />
                    <span data-kt-element="current-lang-name" class="me-1">English</span>
                    <span class="d-flex flex-center rotate-180">
                        <i class="ki-duotone ki-down fs-5 text-muted m-0"></i>
                    </span>
                </button>
                <!--end::Toggle-->
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7"
                    data-kt-menu="true" id="kt_auth_lang_menu">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                            <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1"
                                    src="{{ asset('v22/media/flags/united-states.svg') }}" alt="" />
                            </span>
                            <span data-kt-element="lang-name">English</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
                            <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="{{ asset('v22/media/flags/spain.svg') }}"
                                    alt="" />
                            </span>
                            <span data-kt-element="lang-name">Spanish</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
                            <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="{{ asset('v22/media/flags/germany.svg') }}"
                                    alt="" />
                            </span>
                            <span data-kt-element="lang-name">German</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
                            <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="{{ asset('v22/media/flags/japan.svg') }}"
                                    alt="" />
                            </span>
                            <span data-kt-element="lang-name">Japanese</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
                            <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="{{ asset('v22/media/flags/france.svg') }}"
                                    alt="" />
                            </span>
                            <span data-kt-element="lang-name">French</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Languages-->
            <!--begin::Links-->
            <div class="d-flex fw-semibold text-primary fs-base gap-5">
                <a href="../../demo22/dist/pages/team.html" target="_blank">Terms</a>
                <a href="../../demo22/dist/pages/pricing/column.html" target="_blank">Plans</a>
                <a href="../../demo22/dist/pages/contact.html" target="_blank">Contact Us</a>
            </div>
            <!--end::Links-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Body-->
    <!--</div>-->
    <!--end::Authentication - Sign-in-->
@endsection
@push('scripts')
    <script src="{{ asset('v22/js/custom/authentication/sign-in/general.js') }}"></script>
@endpush
