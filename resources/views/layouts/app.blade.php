<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
    <meta property="og:title" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
    <meta property="og:description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
    <meta property="og:image" content="https:/yashadmin.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Kuisoner</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

    <link href="{{ asset('') }}assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <!-- tagify-css -->

    <!-- Style css -->
    <link href="{{ asset('') }}assets/css/style.css" rel="stylesheet">

</head>


<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="light"
    data-headerbg="color_1">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div>
            <img src="images/pre.gif" alt="">
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <svg class="logo-abbr" width="32" height="30" viewBox="0 0 32 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M31.3287 2.96046L26.3411 0.0805375C26.1549 -0.0268458 25.9256 -0.0268458 25.7394 0.0805375C19.754 3.53731 12.3785 3.53785 6.39259 0.0816161L6.39043 0.0805375C6.20426 -0.0268458 5.97493 -0.0268458 5.78876 0.0805375L0.801104 2.95992C0.614937 3.0673 0.5 3.26588 0.5 3.48119V9.24049C0.5 9.4558 0.614937 9.65438 0.801104 9.76176C6.78759 13.2169 10.4753 19.6038 10.4753 26.5162V26.5184C10.4753 26.7332 10.5903 26.9323 10.7764 27.0397L15.7641 29.9196C15.8574 29.9736 15.961 30 16.0652 30C16.1693 30 16.2729 29.973 16.3663 29.9196L21.3539 27.0397C21.5401 26.9323 21.655 26.7337 21.655 26.5184C21.6545 19.6059 25.3422 13.2185 31.3287 9.7623L31.3298 9.76176C31.516 9.65438 31.6309 9.4558 31.6309 9.24049V3.48173C31.6293 3.26642 31.5149 3.06784 31.3287 2.96046ZM30.4259 8.89352L15.7635 17.359C15.5774 17.4664 15.4624 17.665 15.4624 17.8803V22.4168C14.9876 22.651 14.6692 23.1534 14.7043 23.7259C14.7458 24.3993 15.2854 24.9471 15.9589 24.9978C16.7591 25.0582 17.4272 24.4263 17.4272 23.639C17.4272 23.1026 17.1169 22.6386 16.6663 22.4163C16.6663 19.824 18.0493 17.4286 20.2941 16.1324L20.4496 16.0429L20.4501 26.1714L16.0641 28.7038L11.6781 26.1714V9.24103C11.6781 9.02627 11.5632 8.82715 11.377 8.71976L7.44754 6.45123C7.4497 6.42155 7.45078 6.39187 7.45078 6.36165C7.45078 5.59162 6.81187 4.97052 6.03537 5.0002C5.32901 5.02718 4.75378 5.60241 4.7268 6.30877C4.69712 7.08527 5.31822 7.72471 6.08825 7.72471C6.36885 7.72471 6.62948 7.63999 6.84587 7.49484C9.09066 8.79099 10.4737 11.1863 10.4737 13.7786V13.9573L1.70172 8.89406V3.82978L6.08771 1.29737L20.7501 9.76284C20.9363 9.87022 21.1656 9.87022 21.3518 9.76284L25.2807 7.4943C25.4993 7.64108 25.7631 7.72579 26.0464 7.72417C26.7895 7.71986 27.3998 7.10686 27.4009 6.36381C27.4019 5.60997 26.7916 4.99912 26.0383 4.99912C25.2856 4.99912 24.6758 5.60943 24.6758 6.36165C24.6758 6.39187 24.6769 6.42155 24.6791 6.45123C22.4337 7.74738 19.6676 7.74738 17.4223 6.45123L17.268 6.36219L26.0383 1.29737L30.4243 3.82978V8.89352H30.4259Z"
                        fill="white" />
                </svg>
                <svg class="brand-title" width="111" height="24" viewBox="0 0 111 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect class="yesh" width="49" height="22" transform="translate(0 1)" fill="white" />
                    <path class="admin1"
                        d="M14.296 7.172L10.894 13.752V17H8.5V13.752L5.098 7.172H7.814L9.718 11.288L11.608 7.172H14.296ZM21.3786 15.264H17.7106L17.1226 17H14.6166L18.1726 7.172H20.9446L24.5006 17H21.9666L21.3786 15.264ZM20.7626 13.416L19.5446 9.818L18.3406 13.416H20.7626ZM29.1388 17.098C28.4202 17.098 27.7762 16.9813 27.2068 16.748C26.6375 16.5147 26.1802 16.1693 25.8348 15.712C25.4988 15.2547 25.3215 14.704 25.3028 14.06H27.8508C27.8882 14.424 28.0142 14.704 28.2288 14.9C28.4435 15.0867 28.7235 15.18 29.0688 15.18C29.4235 15.18 29.7035 15.1007 29.9088 14.942C30.1142 14.774 30.2168 14.5453 30.2168 14.256C30.2168 14.0133 30.1328 13.8127 29.9648 13.654C29.8062 13.4953 29.6055 13.3647 29.3628 13.262C29.1295 13.1593 28.7935 13.0427 28.3548 12.912C27.7202 12.716 27.2022 12.52 26.8008 12.324C26.3995 12.128 26.0542 11.8387 25.7648 11.456C25.4755 11.0733 25.3308 10.574 25.3308 9.958C25.3308 9.04333 25.6622 8.32933 26.3248 7.816C26.9875 7.29333 27.8508 7.032 28.9148 7.032C29.9975 7.032 30.8702 7.29333 31.5328 7.816C32.1955 8.32933 32.5502 9.048 32.5968 9.972H30.0068C29.9882 9.65467 29.8715 9.40733 29.6568 9.23C29.4422 9.04333 29.1668 8.95 28.8308 8.95C28.5415 8.95 28.3082 9.02933 28.1308 9.188C27.9535 9.33733 27.8648 9.55667 27.8648 9.846C27.8648 10.1633 28.0142 10.4107 28.3128 10.588C28.6115 10.7653 29.0782 10.9567 29.7128 11.162C30.3475 11.3767 30.8608 11.582 31.2528 11.778C31.6542 11.974 31.9995 12.2587 32.2888 12.632C32.5782 13.0053 32.7228 13.486 32.7228 14.074C32.7228 14.634 32.5782 15.1427 32.2888 15.6C32.0088 16.0573 31.5982 16.4213 31.0568 16.692C30.5155 16.9627 29.8762 17.098 29.1388 17.098ZM42.7081 7.172V17H40.3141V12.954H36.5901V17H34.1961V7.172H36.5901V11.022H40.3141V7.172H42.7081Z"
                        fill="#222B40" />
                    <path class="admin2"
                        d="M63.484 16.016H59.292L58.62 18H55.756L59.82 6.768H62.988L67.052 18H64.156L63.484 16.016ZM62.78 13.904L61.388 9.792L60.012 13.904H62.78ZM72.4969 6.768C73.6809 6.768 74.7155 7.00267 75.6009 7.472C76.4862 7.94133 77.1689 8.60267 77.6489 9.456C78.1395 10.2987 78.3849 11.2747 78.3849 12.384C78.3849 13.4827 78.1395 14.4587 77.6489 15.312C77.1689 16.1653 76.4809 16.8267 75.5849 17.296C74.6995 17.7653 73.6702 18 72.4969 18H68.2889V6.768H72.4969ZM72.3209 15.632C73.3555 15.632 74.1609 15.3493 74.7369 14.784C75.3129 14.2187 75.6009 13.4187 75.6009 12.384C75.6009 11.3493 75.3129 10.544 74.7369 9.968C74.1609 9.392 73.3555 9.104 72.3209 9.104H71.0249V15.632H72.3209ZM92.6339 6.768V18H89.8979V11.264L87.3859 18H85.1779L82.6499 11.248V18H79.9139V6.768H83.1459L86.2979 14.544L89.4179 6.768H92.6339ZM97.3374 6.768V18H94.6014V6.768H97.3374ZM109.368 18H106.632L102.056 11.072V18H99.3201V6.768H102.056L106.632 13.728V6.768H109.368V18Z"
                        fill="white" />
                </svg>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line">
                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.7468 5.58925C11.0722 5.26381 11.0722 4.73617 10.7468 4.41073C10.4213 4.0853 9.89369 4.0853 9.56826 4.41073L4.56826 9.41073C4.25277 9.72622 4.24174 10.2342 4.54322 10.5631L9.12655 15.5631C9.43754 15.9024 9.96468 15.9253 10.3039 15.6143C10.6432 15.3033 10.6661 14.7762 10.3551 14.4369L6.31096 10.0251L10.7468 5.58925Z"
                                fill="#452B90" />
                            <path opacity="0.3"
                                d="M16.5801 5.58924C16.9056 5.26381 16.9056 4.73617 16.5801 4.41073C16.2547 4.0853 15.727 4.0853 15.4016 4.41073L10.4016 9.41073C10.0861 9.72622 10.0751 10.2342 10.3766 10.5631L14.9599 15.5631C15.2709 15.9024 15.798 15.9253 16.1373 15.6143C16.4766 15.3033 16.4995 14.7762 16.1885 14.4369L12.1443 10.0251L16.5801 5.58924Z"
                                fill="#452B90" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>


        <div class="header bg-white">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">

                        </div>
                        <div class="header-right d-flex align-items-center">
                            <div class="input-group search-area">
                            </div>
                            <div class="ml-auto">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="menu-title">Dashboard</li>
                    <li>
                        <a href="{{ route('home') }}">
                            <div class="menu-icon">
                                <!-- Icon: School/Profile -->
                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path
                                        d="M12 3L2 9l10 6 10-6-10-6zm0 2.18L18.6 9 12 12.82 5.4 9 12 5.18zM4 10.36v6.28c0 .53.21 1.04.59 1.41.38.38.89.59 1.41.59h12c.53 0 1.04-.21 1.41-.59.38-.38.59-.89.59-1.41v-6.28l-8 4.8-8-4.8z"
                                        fill="#90959F" />
                                </svg>
                            </div>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    {{-- @can('profile-sekolah') --}}
                    <li>
                        <a href="{{ route('profil.index') }}">
                            <div class="menu-icon">
                                <!-- Icon: School/Profile -->
                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path
                                        d="M12 3L2 9l10 6 10-6-10-6zm0 2.18L18.6 9 12 12.82 5.4 9 12 5.18zM4 10.36v6.28c0 .53.21 1.04.59 1.41.38.38.89.59 1.41.59h12c.53 0 1.04-.21 1.41-.59.38-.38.59-.89.59-1.41v-6.28l-8 4.8-8-4.8z"
                                        fill="#90959F" />
                                </svg>
                            </div>
                            <span class="nav-text">Profile Sekolah</span>
                        </a>
                    </li>
                    {{-- @endcan
                    @can('upload-kuisoner') --}}


                    <li>
                        <a href="{{ route('kuisoner.index') }}">
                            <div class="menu-icon">
                                <!-- Icon: Upload/Document for Kuisoner -->
                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path
                                        d="M16 16v2H8v-2H5v4h14v-4h-3zm-4-1c.55 0 1-.45 1-1V5.83l2.59 2.58L16 7l-4-4-4 4 1.41 1.41L11 5.83V14c0 .55.45 1 1 1z"
                                        fill="#90959F" />
                                </svg>
                            </div>
                            <span class="nav-text">Upload Kuisoner</span>
                        </a>
                    </li>
                    {{-- @endcan
                    @can('isi-kuisoner') --}}
                    <li>
                        <a href="{{ route('isi.index') }}">
                            <div class="menu-icon">
                                <!-- Icon: Upload/Document for Kuisoner -->
                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path
                                        d="M16 16v2H8v-2H5v4h14v-4h-3zm-4-1c.55 0 1-.45 1-1V5.83l2.59 2.58L16 7l-4-4-4 4 1.41 1.41L11 5.83V14c0 .55.45 1 1 1z"
                                        fill="#90959F" />
                                </svg>
                            </div>
                            <span class="nav-text">Isi Kuisoner</span>
                        </a>
                    </li>
                    {{-- @endcan
                    @can('upload-bukti') --}}
                    <li>
                        <a href="{{ route('bukti.index') }}">
                            <div class="menu-icon">
                                <!-- Icon: Upload/Attachment for Bukti -->
                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path d="M16.5 6.5l-9 9a3 3 0 104.24 4.24l9-9a5 5 0 00-7.07-7.07l-9 9"
                                        stroke="#90959F" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Upload Bukti</span>
                        </a>
                    </li>
                    {{-- @endcan --}}
                </ul>
                {{-- @can('management-user') --}}
                <ul class="metismenu" id="menu">
                    <li class="menu-title">Management User</li>
                    <li>
                        <a href="{{ route('users.index') }}">
                            <div class="menu-icon">
                                <!-- Icon: Users/People -->
                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path
                                        d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C17 14.17 12.33 13 10 13zm8 0c-.29 0-.62.02-.97.05C18.16 14.09 21 15.17 21 16.5V19h3v-2.5c0-2.33-4.67-3.5-7-3.5z"
                                        fill="#90959F" />
                                </svg>
                            </div>
                            <span class="nav-text">Data Pengguna</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('roles.index') }}">
                            <div class="menu-icon">
                                <!-- Icon: Key/Access -->
                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path
                                        d="M12.65 10.86A5 5 0 1021 17.5V19a1 1 0 01-1 1h-2v-2h-2v-2h-2.35zM7 17a3 3 0 110-6 3 3 0 010 6z"
                                        fill="#90959F" />
                                </svg>
                            </div>
                            <span class="nav-text">Hak Akses</span>
                        </a>
                    </li>
                </ul>
                {{-- @endcan --}}
            </div>
        </div>

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

    </div>

    <div class="footer">
        <div class="copyright">
            <p>Copyright © Developed by <a href="" target="_blank">DexignZone</a> 2023</p>
        </div>
    </div>
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('') }}assets/vendor/global/global.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/apexchart/apexchart.js"></script>

    <script src="{{ asset('') }}assets/vendor/peity/jquery.peity.min.js"></script>
    <!-- Dashboard 1 -->
    <script src="{{ asset('') }}assets/js/dashboard/dashboard-2.js"></script>


    <!-- tagify -->
    <script src="{{ asset('') }}assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}assets/js/plugins-init/datatables.init.js"></script>

    <script src="{{ asset('') }}assets/vendor/datatables/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/datatables/js/buttons.html5.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/datatables/js/jszip.min.js"></script>

    <!-- Apex Chart -->




    <!-- Vectormap -->

    <script src="{{ asset('') }}assets/js/custom.js"></script>
    <script src="{{ asset('') }}assets/js/deznav-init.js"></script>
    <script src="{{ asset('') }}assets/js/demo.js"></script>
    <script src="{{ asset('') }}assets/js/styleSwitcher.js"></script>



</body>

</html>
@stack('scripts')