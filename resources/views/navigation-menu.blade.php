<header class="main-header " id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
        </button>
        <!-- search form -->
        <div class="search-form d-none d-lg-inline-block">
            {{-- <div class="input-group">
                <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <input type="text" name="query" id="search-input" class="form-control"
                    placeholder="'button', 'chart' etc." autofocus autocomplete="off" />
            </div>
            <div id="search-results-container">
                <ul id="search-results"></ul>
            </div> --}}
        </div>

        <div class="navbar-right ">
            <ul class="nav navbar-nav">
                {{-- <li class="dropdown notifications-menu custom-dropdown">
                    <button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
                        <i class="mdi mdi-bell-outline"></i>
                    </button>

                    <div class="mb-0 card card-default dropdown-notify dropdown-menu-right">
                        <div class="px-3 card-header card-header-border-bottom">
                            <h2>Notifications</h2>
                        </div>

                        <div class="px-0 py-3 card-body">
                            <ul class="p-0 nav nav-tabs nav-style-border justify-content-between" id="myTab"
                                role="tablist">
                                <li class="py-0 mx-3 my-0 nav-item">
                                    <a class="pb-3 nav-link active" id="home2-tab" data-toggle="tab" href="#home2"
                                        role="tab" aria-controls="home2" aria-selected="true">All (11)</a>
                                </li>

                                <li class="py-0 mx-3 my-0 nav-item">
                                    <a class="pb-3 nav-link" id="profile2-tab" data-toggle="tab" href="#profile2"
                                        role="tab" aria-controls="profile2" aria-selected="false">Msgs (6)</a>
                                </li>

                                <li class="py-0 mx-3 my-0 nav-item">
                                    <a class="pb-3 nav-link" id="contact2-tab" data-toggle="tab" href="#contact2"
                                        role="tab" aria-controls="contact2" aria-selected="false">Others (5)</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent3">
                                <div class="tab-pane fade show active" id="home2" role="tabpanel"
                                    aria-labelledby="home2-tab">
                                    <ul class="list-unstyled" data-simplebar style="height: 360px">
                                        <li>
                                            <a href="javscript:void(0)" class="media media-message media-notification">
                                                <div class="mr-3 position-relative">
                                                    <img class="rounded-circle" src="assets/img/user/u2.jpg"
                                                        alt="Image">
                                                    <span class="status away"></span>
                                                </div>
                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">Aaren</h4>
                                                        <p class="last-msg">Lorem ipsum dolor sit, amet
                                                            consectetur adipisicing elit. Nam itaque
                                                            doloremque odio, eligendi delectus vitae.</p>

                                                        <span class="font-size-12 font-weight-medium text-secondary">
                                                            <i class="mdi mdi-clock-outline"></i> 30 min
                                                            ago...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javscript:void(0)"
                                                class="media media-message media-notification media-active">
                                                <div class="mr-3 position-relative">
                                                    <img class="rounded-circle" src="assets/img/user/u1.jpg"
                                                        alt="Image">
                                                    <span class="status active"></span>
                                                </div>
                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">Abril</h4>
                                                        <p class="last-msg">Donec mattis augue a nisl
                                                            consequat, nec imperdiet ex rutrum. Fusce et
                                                            vehicula enim. Sed in enim eu odio vehic.</p>

                                                        <span class="text-white font-size-12 font-weight-medium">
                                                            <i class="mdi mdi-clock-outline"></i> Just
                                                            now...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javscript:void(0)" class="media media-message media-notification">
                                                <div class="mr-3 position-relative">
                                                    <img class="rounded-circle" src="assets/img/user/u5.jpg"
                                                        alt="Image">
                                                    <span class="status away"></span>
                                                </div>
                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">Emma</h4>
                                                        <p class="last-msg">Lorem ipsum dolor sit, amet
                                                            consectetur adipisicing elit. Nam itaque
                                                            doloremque odio, eligendi delectus vitae.</p>

                                                        <span class="font-size-12 font-weight-medium text-secondary">
                                                            <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                            ago...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javscript:void(0)"
                                                class="media media-message media-notification event-active">

                                                <div
                                                    class="mr-3 text-white d-flex rounded-circle align-items-center justify-content-center media-icon iconbox-45 bg-info">
                                                    <i class="mdi mdi-calendar-check font-size-20"></i>
                                                </div>

                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">New event added</h4>
                                                        <p class="last-msg font-size-14">03/Jan/2020 (1pm -
                                                            2pm)</p>

                                                        <span class="font-size-12 font-weight-medium text-secondary">
                                                            <i class="mdi mdi-clock-outline"></i> 10 min
                                                            ago...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javscript:void(0)" class="media media-message media-notification">

                                                <div
                                                    class="mr-3 text-white d-flex rounded-circle align-items-center justify-content-center media-icon iconbox-45 bg-warning">
                                                    <i class="mdi mdi-chart-areaspline font-size-20"></i>
                                                </div>

                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">Sales report</h4>
                                                        <p class="last-msg font-size-14">Lorem ipsum dolor
                                                            sit, amet consectetur adipisicing elit. Nam
                                                            itaque doloremque odio, eligendi delectus vitae.
                                                        </p>

                                                        <span class="font-size-12 font-weight-medium text-secondary">
                                                            <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                            ago...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javscript:void(0)"
                                                class="media media-message media-notification">

                                                <div
                                                    class="mr-3 text-white d-flex rounded-circle align-items-center justify-content-center media-icon iconbox-45 bg-primary">
                                                    <i class="mdi mdi-account-multiple-check font-size-20"></i>
                                                </div>

                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">Add request</h4>
                                                        <p class="last-msg font-size-14">Add Dany Jones as
                                                            your contact consequat nec imperdiet ex rutrum.
                                                            Fusce et vehicula enim. Sed in enim.</p>

                                                        <button type="button"
                                                            class="my-1 btn btn-sm btn-success">Accept</button>
                                                        <button type="button"
                                                            class="my-1 btn btn-sm btn-secondary">Delete</button>

                                                        <span
                                                            class="font-size-12 font-weight-medium text-secondary d-block">
                                                            <i class="mdi mdi-clock-outline"></i> 5 min
                                                            ago...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javscript:void(0)"
                                                class="media media-message media-notification">

                                                <div
                                                    class="mr-3 text-white d-flex rounded-circle align-items-center justify-content-center media-icon iconbox-45 bg-danger">
                                                    <i class="mdi mdi-server-network-off font-size-20"></i>
                                                </div>

                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">Server overloaded</h4>
                                                        <p class="last-msg font-size-14">Donec mattis augue
                                                            a nisl consequat, nec imperdiet ex rutrum. Fusce
                                                            et vehicula enim. Sed in enim eu odio vehic.</p>

                                                        <span class="font-size-12 font-weight-medium text-secondary">
                                                            <i class="mdi mdi-clock-outline"></i> 30 min
                                                            ago...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javscript:void(0)"
                                                class="media media-message media-notification">

                                                <div
                                                    class="mr-3 text-white d-flex rounded-circle align-items-center justify-content-center media-icon iconbox-45 bg-purple">
                                                    <i class="mdi mdi-playlist-check font-size-20"></i>
                                                </div>

                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">Task complete</h4>
                                                        <p class="last-msg font-size-14">Nam ut nisi erat.
                                                            Ut quis tortor varius, hendrerit arcu quis,
                                                            congue nisl. In scelerisque, sem ut ve.</p>

                                                        <span class="font-size-12 font-weight-medium text-secondary">
                                                            <i class="mdi mdi-clock-outline"></i> 2 hrs
                                                            ago...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="tab-pane fade" id="profile2" role="tabpanel"
                                    aria-labelledby="profile2-tab">
                                    <ul class="list-unstyled" data-simplebar style="height: 360px">
                                        <li>
                                            <a href="javscript:void(0)"
                                                class="media media-message media-notification">
                                                <div class="mr-3 position-relative">
                                                    <img class="rounded-circle" src="assets/img/user/u6.jpg"
                                                        alt="Image">
                                                    <span class="status away"></span>
                                                </div>
                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">William</h4>
                                                        <p class="last-msg">Donec mattis augue a nisl
                                                            consequat, nec imperdiet ex rutrum. Fusce et
                                                            vehicula enim. Sed in enim eu odio vehic.</p>

                                                        <span class="font-size-12 font-weight-medium text-secondary">
                                                            <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                            ago...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javscript:void(0)"
                                                class="media media-message media-notification">
                                                <div class="mr-3 position-relative">
                                                    <img class="rounded-circle" src="assets/img/user/u7.jpg"
                                                        alt="Image">
                                                    <span class="status away"></span>
                                                </div>
                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">Camble</h4>
                                                        <p class="last-msg">Nam ut nisi erat. Ut quis
                                                            tortor varius, hendrerit arcu quis, congue nisl.
                                                            In scelerisque, sem ut ve.</p>

                                                        <span class="font-size-12 font-weight-medium text-secondary">
                                                            <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                            ago...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javscript:void(0)"
                                                class="media media-message media-notification media-active">
                                                <div class="mr-3 position-relative">
                                                    <img class="rounded-circle" src="assets/img/user/u1.jpg"
                                                        alt="Image">
                                                    <span class="status active"></span>
                                                </div>
                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">Abril</h4>
                                                        <p class="last-msg">Donec mattis augue a nisl
                                                            consequat, nec imperdiet ex rutrum. Fusce et
                                                            vehicula enim. Sed in enim eu odio vehic.</p>

                                                        <span class="text-white font-size-12 font-weight-medium">
                                                            <i class="mdi mdi-clock-outline"></i> Just
                                                            now...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javscript:void(0)"
                                                class="media media-message media-notification">
                                                <div class="mr-3 position-relative">
                                                    <img class="rounded-circle" src="assets/img/user/u2.jpg"
                                                        alt="Image">
                                                    <span class="status away"></span>
                                                </div>
                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">Aaren</h4>
                                                        <p class="last-msg">Lorem ipsum dolor sit, amet
                                                            consectetur adipisicing elit. Nam itaque
                                                            doloremque odio, eligendi delectus vitae.</p>

                                                        <span class="font-size-12 font-weight-medium text-secondary">
                                                            <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                            ago...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javscript:void(0)"
                                                class="media media-message media-notification">
                                                <div class="mr-3 position-relative">
                                                    <img class="rounded-circle" src="assets/img/user/u5.jpg"
                                                        alt="Image">
                                                    <span class="status away"></span>
                                                </div>
                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">Emma</h4>
                                                        <p class="last-msg">Lorem ipsum dolor sit, amet
                                                            consectetur adipisicing elit. Nam itaque
                                                            doloremque odio, eligendi delectus vitae.</p>

                                                        <span class="font-size-12 font-weight-medium text-secondary">
                                                            <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                            ago...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="tab-pane fade" id="contact2" role="tabpanel"
                                    aria-labelledby="contact2-tab">
                                    <ul class="list-unstyled" data-simplebar style="height: 360px">
                                        <li>
                                            <a href="javscript:void(0)"
                                                class="media media-message media-notification event-active">

                                                <div
                                                    class="mr-3 text-white d-flex rounded-circle align-items-center justify-content-center media-icon iconbox-45 bg-info">
                                                    <i class="mdi mdi-calendar-check font-size-20"></i>
                                                </div>

                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">New event added</h4>
                                                        <p class="last-msg font-size-14">03/Jan/2020 (1pm -
                                                            2pm)</p>

                                                        <span class="font-size-12 font-weight-medium text-secondary">
                                                            <i class="mdi mdi-clock-outline"></i> 10 min
                                                            ago...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javscript:void(0)"
                                                class="media media-message media-notification">

                                                <div
                                                    class="mr-3 text-white d-flex rounded-circle align-items-center justify-content-center media-icon iconbox-45 bg-warning">
                                                    <i class="mdi mdi-chart-areaspline font-size-20"></i>
                                                </div>

                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">Sales report</h4>
                                                        <p class="last-msg font-size-14">Lorem ipsum dolor
                                                            sit, amet consectetur adipisicing elit. Nam
                                                            itaque doloremque odio, eligendi delectus vitae.
                                                        </p>

                                                        <span class="font-size-12 font-weight-medium text-secondary">
                                                            <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                            ago...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javscript:void(0)"
                                                class="media media-message media-notification">

                                                <div
                                                    class="mr-3 text-white d-flex rounded-circle align-items-center justify-content-center media-icon iconbox-45 bg-primary">
                                                    <i class="mdi mdi-account-multiple-check font-size-20"></i>
                                                </div>

                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">Add request</h4>
                                                        <p class="last-msg font-size-14">Add Dany Jones as
                                                            your contact consequat nec imperdiet ex rutrum.
                                                            Fusce et vehicula enim. Sed in enim.</p>

                                                        <button type="button"
                                                            class="my-1 btn btn-sm btn-success">Accept</button>
                                                        <button type="button"
                                                            class="my-1 btn btn-sm btn-secondary">Delete</button>

                                                        <span
                                                            class="font-size-12 font-weight-medium text-secondary d-block">
                                                            <i class="mdi mdi-clock-outline"></i> 5 min
                                                            ago...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javscript:void(0)"
                                                class="media media-message media-notification">

                                                <div
                                                    class="mr-3 text-white d-flex rounded-circle align-items-center justify-content-center media-icon iconbox-45 bg-danger">
                                                    <i class="mdi mdi-server-network-off font-size-20"></i>
                                                </div>

                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">Server overloaded</h4>
                                                        <p class="last-msg font-size-14">Donec mattis augue
                                                            a nisl consequat, nec imperdiet ex rutrum. Fusce
                                                            et vehicula enim. Sed in enim eu odio vehic.</p>

                                                        <span class="font-size-12 font-weight-medium text-secondary">
                                                            <i class="mdi mdi-clock-outline"></i> 30 min
                                                            ago...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javscript:void(0)"
                                                class="media media-message media-notification">

                                                <div
                                                    class="mr-3 text-white d-flex rounded-circle align-items-center justify-content-center media-icon iconbox-45 bg-purple">
                                                    <i class="mdi mdi-playlist-check font-size-20"></i>
                                                </div>

                                                <div class="media-body d-flex justify-content-between">
                                                    <div class="message-contents">
                                                        <h4 class="title">Task complete</h4>
                                                        <p class="last-msg font-size-14">Nam ut nisi erat.
                                                            Ut quis tortor varius, hendrerit arcu quis,
                                                            congue nisl. In scelerisque, sem ut ve.</p>

                                                        <span class="font-size-12 font-weight-medium text-secondary">
                                                            <i class="mdi mdi-clock-outline"></i> 2 hrs
                                                            ago...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="dropdown-menu dropdown-menu-right d-none">
                        <li class="dropdown-header">You have 5 notifications</li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-account-plus"></i> New user registered
                                <span class="float-right font-size-12 d-inline-block"><i
                                        class="mdi mdi-clock-outline"></i> 10 AM</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-account-remove"></i> User deleted
                                <span class="float-right font-size-12 d-inline-block"><i
                                        class="mdi mdi-clock-outline"></i> 07 AM</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                                <span class="float-right font-size-12 d-inline-block"><i
                                        class="mdi mdi-clock-outline"></i> 12 PM</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-account-supervisor"></i> New client
                                <span class="float-right font-size-12 d-inline-block"><i
                                        class="mdi mdi-clock-outline"></i> 10 AM</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-server-network-off"></i> Server overloaded
                                <span class="float-right font-size-12 d-inline-block"><i
                                        class="mdi mdi-clock-outline"></i> 05 AM</span>
                            </a>
                        </li>
                        <li class="dropdown-footer">
                            <a class="text-center" href="#"> View All </a>
                        </li>
                    </ul>
                </li> --}}
                <li class="right-sidebar-in right-sidebar-2-menu">
                    <i class="mdi mdi-settings mdi-spin"></i>
                </li>
                <!-- User Account -->
                <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        {{-- <img src="assets/img/user/user.png" class="user-image" alt="User Image" /> --}}
                        <span class="d-none d-lg-inline-block">Abdus Salam</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <!-- User image -->
                        <li class="dropdown-header">
                            <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                            <div class="d-inline-block">
                                Abdus Salam <small class="pt-1">iamabdus@gmail.com</small>
                            </div>
                        </li>

                        <li>
                            <a href="user-profile.html">
                                <i class="mdi mdi-account"></i> My Profile
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-email"></i> Message
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                        </li>
                        <li class="right-sidebar-in">
                            <a href="javascript:0"> <i class="mdi mdi-settings"></i> Setting </a>
                        </li>

                        <li class="dropdown-footer">
                            <a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
{{-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block w-auto h-9" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="relative ms-3">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="relative ms-3">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                    <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50">
                                        {{ Auth::user()->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -me-2 sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 me-3">
                        <img class="object-cover w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-responsive-nav-link>
                    @endcan

                    <!-- Team Switcher -->
                    @if (Auth::user()->allTeams()->count() > 1)
                        <div class="border-t border-gray-200"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-switchable-team :team="$team" component="responsive-nav-link" />
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </div>
</nav> --}}
