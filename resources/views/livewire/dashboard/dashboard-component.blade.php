<div>
    <div class="container-fixed">
        <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
            <div class="flex flex-col justify-center gap-2">
                <h1 class="text-xl font-semibold leading-none text-gray-900">
                    {{ __('Dashboard') }}
                </h1>
                <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
                    {{ __('Central Hub for Personal Customization') }}
                </div>
            </div>
            <div class="flex items-center gap-2.5">
                <a class="btn btn-sm btn-light" href="{{ route('profile.show') }}">
                    {{ __('View Profile') }}
                </a>
            </div>
        </div>
    </div>
    <div class="container-fixed">
        <div class="grid gap-5 lg:gap-7.5">
            <div class="grid lg:grid-cols-3 gap-y-5 lg:gap-7.5 items-stretch">
                <div class="lg:col-span-1">
                    <div class="grid grid-cols-2 gap-5 lg:gap-7.5 h-full items-stretch">
                        <style>
                            .channel-stats-bg {
                                background-image: url({{ asset('/static/metronic-tailwind-html/dist/assets/media/images/2600x1600/bg-3.png') }});
                            }
                            .dark .channel-stats-bg {
                                background-image: url({{ asset('/static/metronic-tailwind-html/dist/assets/media/images/2600x1600/bg-3-dark.png') }});
                            }
                        </style>
                        <div class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                            <img alt="" class="w-7 mt-4 ms-5" src="{{ asset('assets/media/brand-logos/linkedin-2.svg') }}"/>
                            <div class="flex flex-col gap-1 pb-4 px-5">
                                <span class="text-3xl font-semibold text-gray-900">
                                 {{ __('9.3k') }}
                                </span>
                                <span class="text-2sm font-medium text-gray-600">
                                 {{ __('Amazing mates') }}
                                </span>
                            </div>
                        </div>
                        <div class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                            <img alt="" class="w-7 mt-4 ms-5" src="{{ asset('assets/media/brand-logos/youtube-2.svg') }}"/>
                            <div class="flex flex-col gap-1 pb-4 px-5">
                                <span class="text-3xl font-semibold text-gray-900">
                                    {{ __('24k') }}
                                </span>

                                <span class="text-2sm font-medium text-gray-600">
                                    {{ __('Lessons Views') }}
                                </span>
                            </div>
                        </div>
                        <div class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                            <img alt="" class="w-7 mt-4 ms-5" src="{{ asset('assets/media/brand-logos/instagram-03.svg') }}"/>
                            <div class="flex flex-col gap-1 pb-4 px-5">
                                <span class="text-3xl font-semibold text-gray-900">
                                    {{ __('608') }}
                                </span>
                                <span class="text-2sm font-medium text-gray-600">
                                    {{ __('New subscribers') }}
                                </span>
                            </div>
                        </div>
                        <div class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
                            <img alt="" class="dark:hidden w-7 mt-4 ms-5" src="{{ asset('assets/media/brand-logos/tiktok.svg') }}"/>
                            <img alt="" class="light:hidden w-7 mt-4 ms-5" src="{{ asset('assets/media/brand-logos/tiktok-dark.svg') }}"/>
                            <div class="flex flex-col gap-1 pb-4 px-5">
                                <span class="text-3xl font-semibold text-gray-900">
                                  {{ __('2.5k') }}
                                </span>
                                <span class="text-2sm font-medium text-gray-600">
                                    {{ __('Stream audience') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-2">
                    <style>
                        .entry-callout-bg {
                            background-image: url({{ asset('/static/metronic-tailwind-html/dist/assets/media/images/2600x1600/2.png') }});
                        }
                        .dark .entry-callout-bg {
                            background-image: url({{ asset('/static/metronic-tailwind-html/dist/assets/media/images/2600x1600/2-dark.png') }});
                        }
                    </style>
                    <div class="card h-full h-full">
                        <div class="card-body p-10 bg-[length:80%] [background-position:175%_25%] bg-no-repeat entry-callout-bg">
                            <div class="flex flex-col justify-center gap-4">
                                <div class="flex -space-x-2">
                                    <div class="flex">
                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-10" src="{{ asset('assets/media/avatars/300-4.png') }}" alt=""/>
                                    </div>
                                    <div class="flex">
                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-10" src="{{ asset('assets/media/avatars/300-1.png') }}" alt=""/>
                                    </div>
                                    <div class="flex">
                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-10" src="{{ asset('assets/media/avatars/300-2.png') }}" alt=""/>
                                    </div>
                                    <div class="flex">
                                        <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-10 text-success-inverse text-xs ring-success-light bg-success">
                                            S
                                        </span>
                                    </div>
                                </div>
                                <h2 class="text-1.5xl font-semibold text-gray-900">
                                    {{ __('Connect Today &amp; Join') }}
                                    <br/>
                                    {{ __('the') }}
                                    <a class="link" href="#">
                                        {{ __('KeenThemes Network') }}
                                    </a>
                                </h2>
                                <p class="text-sm font-medium text-gray-700 leading-5.5">
                                    {{ __('Enhance your projects with premium themes and') }}
                                    <br/>
                                    {{ __('templates. Join the KeenThemes community today') }}
                                    <br/>
                                    {{ __('for top-quality designs and resources.') }}
                                </p>
                            </div>
                        </div>
                        <div class="card-footer justify-center">
                            <a class="btn btn-link" href="html/demo1/account/home/get-started.html">
                                {{ __('Get Started') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: grid -->
            <!-- begin: grid -->
            <div class="grid lg:grid-cols-3 gap-5 lg:gap-7.5 items-stretch">
                <div class="lg:col-span-1">
                    <div class="card h-full">
                        <div class="card-header">
                            <h3 class="card-title">
                                {{ __('Highlights') }}
                            </h3>
                            <div class="menu" data-menu="true">
                                <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                                    <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                        <i class="ki-filled ki-dots-vertical">
                                        </i>
                                    </button>
                                    <div class="menu-dropdown menu-default w-full max-w-[200px]" data-menu-dismiss="true">
                                        <div class="menu-item">
                                            <a class="menu-link" href="html/demo1/account/activity.html">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-cloud-change"></i>
                                                </span>
                                                <span class="menu-title">
                                                    {{ __('Activity') }}
                                                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" data-modal-toggle="#share_profile_modal" href="#">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-share"></i>
                                                </span>
                                                <span class="menu-title">
                                                    {{ __('Share') }}
                                                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item" data-menu-item-offset="-15px, 0" data-menu-item-placement="right-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
                                            <div class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-notification-status"></i>
                                                </span>
                                                <span class="menu-title">
                                                    {{ __('Notifications') }}
                                                </span>
                                                <span class="menu-arrow">
                                                    <i class="ki-filled ki-right text-3xs"></i>
                                                </span>
                                            </div>
                                            <div class="menu-dropdown menu-default w-full max-w-[175px]">
                                                <div class="menu-item">
                                                    <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-sms"></i>
                                                        </span>
                                                        <span class="menu-title">
                                                           {{ __('Email') }}
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-message-notify"></i>
                                                        </span>
                                                        <span class="menu-title">
                                                            {{ __('SMS') }}
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                                                        <span class="menu-icon">
                                                            <i class="ki-filled ki-notification-status"></i>
                                                        </span>
                                                        <span class="menu-title">
                                                            {{ __('Push') }}
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" data-modal-toggle="#report_user_modal" href="#">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-dislike"></i>
                                                </span>
                                                <span class="menu-title">
                                                   {{ __('Report') }}
                                                </span>
                                            </a>
                                        </div>
                                        <div class="menu-separator">

                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="html/demo1/account/home/settings-enterprise.html">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-setting-3"></i>
                                                </span>
                                                <span class="menu-title">
                                                    {{ __('Settings') }}
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body flex flex-col gap-4 p-5 lg:p-7.5 lg:pt-4">
                            <div class="flex flex-col gap-0.5">
                                <span class="text-sm font-medium text-gray-600">
                                    {{ __('All time sales') }}
                                </span>
                                <div class="flex items-center gap-2.5">
                                    <span class="text-3xl font-semibold text-gray-900">
                                        {{ __('$295.7k') }}
                                    </span>
                                    <span class="badge badge-outline badge-success badge-sm">
                                        {{ __('+2.7%') }}
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center gap-1 mb-1.5">
                                <div class="bg-success h-2 w-full max-w-[60%] rounded-sm"></div>
                                <div class="bg-brand h-2 w-full max-w-[25%] rounded-sm"></div>
                                <div class="bg-info h-2 w-full max-w-[15%] rounded-sm"></div>
                            </div>
                            <div class="flex items-center flex-wrap gap-4 mb-1">
                                <div class="flex items-center gap-1.5">
                                    <span class="badge badge-dot size-2 badge-success"></span>
                                    <span class="text-sm font-medium text-gray-700">
                                        {{ __('Metronic') }}
                                    </span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="badge badge-dot size-2 badge-danger"></span>
                                    <span class="text-sm font-medium text-gray-700">
                                       {{ __('Bundle') }}
                                    </span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="badge badge-dot size-2 badge-info"></span>
                                    <span class="text-sm font-medium text-gray-700">
                                        {{ __('MetronicNest') }}
                                    </span>
                                </div>
                            </div>
                            <div class="border-b border-gray-300"></div>
                            <div class="grid gap-3">
                                <div class="flex items-center justify-between flex-wrap gap-2">
                                    <div class="flex items-center gap-1.5">
                                        <i class="ki-filled ki-shop text-base text-gray-500">

                                        </i>
                                        <span class="text-sm font-medium text-gray-800">
                                            {{ __('Online Store') }}
                                        </span>
                                    </div>
                                    <div class="flex items-center text-sm font-medium text-gray-800 gap-6">
                                        <span class="lg:text-right">
                                            {{ __('$172k') }}
                                        </span>
                                        <span class="lg:text-right">
                                            <i class="ki-filled ki-arrow-up text-success"></i>
                                            {{ __('3.9%') }}
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between flex-wrap gap-2">
                                    <div class="flex items-center gap-1.5">
                                        <i class="ki-filled ki-facebook text-base text-gray-500"></i>
                                        <span class="text-sm font-medium text-gray-800">
                                            {{ __('Facebook') }}
                                        </span>
                                    </div>
                                    <div class="flex items-center text-sm font-medium text-gray-800 gap-6">
                                        <span class="lg:text-right">
                                            {{ __('$85k') }}
                                        </span>
                                        <span class="lg:text-right">
                                            <i class="ki-filled ki-arrow-down text-danger"></i>
                                            {{ __('0.7%') }}
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between flex-wrap gap-2">
                                    <div class="flex items-center gap-1.5">
                                        <i class="ki-filled ki-instagram text-base text-gray-500"></i>
                                        <span class="text-sm font-medium text-gray-800">
                                            {{ __('Instagram') }}
                                        </span>
                                    </div>
                                    <div class="flex items-center text-sm font-medium text-gray-800 gap-6">
                                        <span class="lg:text-right">
                                           {{ __('$36k') }}
                                        </span>
                                        <span class="lg:text-right">
                                            <i class="ki-filled ki-arrow-up text-success"></i>
                                            {{ __('8.2%') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-2">
                    <div class="card h-full">
                        <div class="card-header">
                            <h3 class="card-title">
                                {{ __('Earnings') }}
                            </h3>
                            <div class="flex gap-5">
                                <label class="switch switch-sm">
                                    <input class="order-2" name="check" type="checkbox" value="1"/>
                                    <span class="switch-label order-1">
                                        {{ __('Referrals only') }}
                                    </span>
                                </label>
                                <select class="select select-sm w-28" name="select">
                                    <option value="1">
                                        {{ __('1 month') }}
                                    </option>
                                    <option value="2">
                                        {{ __('3 month') }}
                                    </option>
                                    <option value="3">
                                        {{ __('6 month') }}
                                    </option>
                                    <option selected="" value="4">
                                        {{ __('12 month') }}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body flex flex-col justify-end items-stretch grow px-3 py-1">
                            <div id="earnings_chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>