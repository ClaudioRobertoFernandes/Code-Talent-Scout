<div>
    <div class="container-fixed">
        <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
            <div class="flex flex-col justify-center gap-2">
                <h1 class="text-xl font-semibold leading-none text-gray-900 dark:text-gray-300">
                    {{ __('Dashboard') }}
                </h1>
                <div class="flex items-center gap-2 text-sm font-medium text-gray-600 dark:text-gray-400">
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
{{--            <div class="grid lg:grid-cols-3 gap-y-5 lg:gap-7.5 items-stretch">--}}
{{--                <div class="lg:col-span-1">--}}
{{--                    <div class="grid grid-cols-2 gap-5 lg:gap-7.5 h-full items-stretch">--}}
{{--                        <style>--}}
{{--                            .channel-stats-bg {--}}
{{--                                background-image: url({{ asset('/static/metronic-tailwind-html/dist/assets/media/images/2600x1600/bg-3.png') }});--}}
{{--                            }--}}
{{--                            .dark .channel-stats-bg {--}}
{{--                                background-image: url({{ asset('/static/metronic-tailwind-html/dist/assets/media/images/2600x1600/bg-3-dark.png') }});--}}
{{--                            }--}}
{{--                        </style>--}}

{{--                        <x-card-dashboard--}}
{{--                            srcImg="{{ asset('assets/media/brand-logos/linkedin-2.svg') }}"--}}
{{--                            number="{{ __('9.3k') }}"--}}
{{--                            title="{{ __('Amazing mates') }}"--}}
{{--                        />--}}

{{--                        <x-card-dashboard--}}
{{--                            srcImg="{{ asset('assets/media/brand-logos/youtube-2.svg') }}"--}}
{{--                            number="{{ __('24k') }}"--}}
{{--                            title="{{ __('Lessons Views') }}"--}}
{{--                        />--}}

{{--                        <x-card-dashboard--}}
{{--                            srcImg="{{ asset('assets/media/brand-logos/instagram-03.svg') }}"--}}
{{--                            number="{{ __('608') }}"--}}
{{--                            title="{{ __('New subscribers') }}"--}}
{{--                        />--}}

{{--                        <x-card-dashboard--}}
{{--                            srcImg="{{ asset('assets/media/brand-logos/tiktok.svg') }}"--}}
{{--                            number="{{ __('2.5k') }}"--}}
{{--                            title="{{ __('Stream audience') }}"--}}
{{--                        />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="lg:col-span-2">--}}
{{--                    <style>--}}
{{--                        .entry-callout-bg {--}}
{{--                            background-image: url({{ asset('/static/metronic-tailwind-html/dist/assets/media/images/2600x1600/2.png') }});--}}
{{--                        }--}}
{{--                        .dark .entry-callout-bg {--}}
{{--                            background-image: url({{ asset('/static/metronic-tailwind-html/dist/assets/media/images/2600x1600/2-dark.png') }});--}}
{{--                        }--}}
{{--                    </style>--}}
{{--                    <div class="card h-full h-full">--}}
{{--                        <div class="card-body p-10 bg-[length:80%] [background-position:175%_25%] bg-no-repeat entry-callout-bg">--}}
{{--                            <div class="flex flex-col justify-center gap-4">--}}
{{--                                <div class="flex -space-x-2">--}}
{{--                                    <div class="flex">--}}
{{--                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-10" src="{{ asset('assets/media/avatars/300-4.png') }}" alt=""/>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex">--}}
{{--                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-10" src="{{ asset('assets/media/avatars/300-1.png') }}" alt=""/>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex">--}}
{{--                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-10" src="{{ asset('assets/media/avatars/300-2.png') }}" alt=""/>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex">--}}
{{--                                        <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-10 text-success-inverse text-xs ring-success-light bg-success">--}}
{{--                                            S--}}
{{--                                        </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <h2 class="text-1.5xl font-semibold text-gray-900 dark:text-gray-300">--}}
{{--                                    {{ __('Connect Today &amp; Join') }}--}}
{{--                                    <br/>--}}
{{--                                    {{ __('the') }}--}}
{{--                                    <a class="link" href="#">--}}
{{--                                        {{ __('KeenThemes Network') }}--}}
{{--                                    </a>--}}
{{--                                </h2>--}}
{{--                                <p class="text-sm font-medium text-gray-700 leading-5.5">--}}
{{--                                    {{ __('Enhance your projects with premium themes and') }}--}}
{{--                                    <br/>--}}
{{--                                    {{ __('templates. Join the KeenThemes community today') }}--}}
{{--                                    <br/>--}}
{{--                                    {{ __('for top-quality designs and resources.') }}--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="card-footer justify-center">--}}
{{--                            <a class="btn btn-link" href="html/demo1/account/home/get-started.html">--}}
{{--                                {{ __('Get Started') }}--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="grid lg:grid-cols-3 gap-5 lg:gap-7.5 items-stretch">
                <div class="lg:col-span-3">
                    <div class="grid">
                        <div class="card card-grid h-full min-w-full">
                            <div class="card-header flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                                <h3 class="card-title">{{ __('Devs') }}</h3>
                                <form
                                    class="flex flex-wrap gap-4 w-full md:w-auto justify-end"
                                    wire:submit.prevent="search">
                                    <div class="flex flex-wrap gap-4 w-full md:w-auto justify-end">
                                        <div class="form-control w-full md:w-48 ">
                                            <x-label
                                                class="mb-1.5"
                                                for="programming-language"
                                                :value="__('Programming language')"
                                            />

                                            <x-input
                                                id="programming-language"
                                                class="input input-bordered input-sm w-full rounded"
                                                type="text"
                                                name="programming-language"
                                                wire:model="programmingLanguage"
                                                autofocus
                                            />
                                        </div>

                                        <div class="form-control w-full md:w-48">
                                            <x-label
                                                class="mb-1.5"
                                                for="location"
                                                :value="__('Location')"
                                            />
                                            <x-input
                                                id="location"
                                                class="input input-bordered input-sm w-full rounded"
                                                type="text"
                                                name="location"
                                                wire:model="location"
                                                autofocus
                                            />
                                        </div>

                                        <div class="form-control w-full md:w-48">
                                            <x-label
                                                class="mb-1.5"
                                                for="minFollowers"
                                                :value="__('Min followers')"
                                            />

                                            <x-input
                                                id="minFollowers"
                                                class="input input-bordered input-sm w-full rounded"
                                                type="number"
                                                name="minFollowers"
                                                min="0"
                                                wire:model="minFollowers"
                                                autofocus
                                            />
                                        </div>

                                        <div class="form-control w-full md:w-48">
                                            <x-label
                                                class="mb-1.5"
                                                for="maxFollowers"
                                                :value="__('Max followers')"
                                            />

                                            <x-input
                                                id="maxFollowers"
                                                class="input input-bordered input-sm w-full rounded"
                                                type="number"
                                                name="maxFollowers"
                                                min="0"
                                                wire:model="maxFollowers"
                                                autofocus
                                            />
                                        </div>

                                        <!-- Botões de Ação -->
                                        <div class="form-control flex flex-row items-end gap-2">
                                            <button
                                                wire:click="resetFields"
                                                class="btn btn-sm btn-ghost"
                                            >
                                                {{ __('Reset') }}
                                            </button>
                                            <button
{{--                                                wire:click="search"--}}
                                                class="btn btn-sm btn-primary"
                                                type="submit"
                                            >
                                                {{ __('Search') }}
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                <div data-datatable="true" data-datatable-page-size="5">
                                    <div class="scrollable-x-auto">
                                        <table class="table table-border" data-datatable-table="true">
                                            <thead>
                                            <tr>
                                                <th class="w-[60px]">
                                                    <input class="checkbox checkbox-sm" data-datatable-check="true" type="checkbox"/>
                                                </th>
                                                <th class="w-[280px]">
                                                    <span class="sort asc">
                                                        <span class="sort-label">
                                                            Team
                                                        </span>
                                                        <span class="sort-icon">

                                                        </span>
                                                    </span>
                                                </th>
                                                <th class="min-w-[135px]">
                                                    <span class="sort">
                                                        <span class="sort-label">
                                                            Rating
                                                        </span>
                                                        <span class="sort-icon">

                                                        </span>
                                                    </span>
                                                </th>
                                                <th class="min-w-[135px]">
                                                    <span class="sort">
                                                        <span class="sort-label">
                                                            Last Modified
                                                        </span>
                                                        <span class="sort-icon">

                                                        </span>
                                                    </span>
                                                </th>
                                                <th class="min-w-[135px]">
                                                    <span class="sort">
                                                        <span class="sort-label">
                                                            Members
                                                        </span>
                                                        <span class="sort-icon">

                                                        </span>
                                                    </span>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($users as $user)
                                                    <tr>
                                                        <td>
                                                            <input
                                                                class="checkbox checkbox-sm"
                                                                data-datatable-row-check="true"
                                                                type="checkbox"
                                                                value="{{ $user['id'] }}"/>
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="{{ $user['avatar_url'] }}" alt=""/>
                                                                </span>
                                                                <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                                                                    {{ $user['login'] }}
                                                                </a>

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i class="rating-on ki-solid ki-star text-base leading-none"></i>
                                                                    <i class="rating-off ki-outline ki-star text-base leading-none"></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i class="rating-on ki-solid ki-star text-base leading-none"></i>
                                                                    <i class="rating-off ki-outline ki-star text-base leading-none"></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i class="rating-on ki-solid ki-star text-base leading-none"></i>
                                                                    <i class="rating-off ki-outline ki-star text-base leading-none"></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i class="rating-on ki-solid ki-star text-base leading-none"></i>
                                                                    <i class="rating-off ki-outline ki-star text-base leading-none"></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i class="rating-on ki-solid ki-star text-base leading-none"></i>
                                                                    <i class="rating-off ki-outline ki-star text-base leading-none"></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            21 Oct, 2024
                                                        </td>
                                                        <td>
                                                            <div class="flex -space-x-2">
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="{{ asset('assets/media/avatars/300-4.png') }}" alt=""/>
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="{{ asset('assets/media/avatars/300-1.png') }}" alt=""/>
                                                                </div>
                                                                <div class="flex">
                                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="{{ asset('assets/media/avatars/300-2.png') }}" alt=""/>
                                                                </div>
                                                                <div class="flex">
                                                                <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
                                                                    +10
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
                                        <div class="flex items-center gap-2 order-2 md:order-1">
                                            Show
                                            <select class="select select-sm w-16" data-datatable-size="true" name="perpage">
                                            </select>
                                            per page
                                        </div>
                                        <div class="flex items-center gap-4 order-1 md:order-2">
                                            <span data-datatable-info="true"></span>
                                            <div class="pagination" data-datatable-pagination="true">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
