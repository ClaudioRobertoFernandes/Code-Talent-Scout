<div>
    <div class="container-fixed">
        <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
            <div class="flex flex-col justify-center gap-2">
                <h1 class="text-xl font-semibold leading-none text-gray-900 dark:text-gray-300">
                    {{ __('Dashboard') }}
                </h1>
                <div class="flex items-center gap-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    {{ __('Central Hub for Personal Customization: '). $totalUsers }}
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
            <div class="grid lg:grid-cols-3 gap-5 lg:gap-7.5 items-stretch">
                <div class="lg:col-span-3">
                    <div class="grid">
                        <div class="card card-grid h-full min-w-full">
                            <h3 class="card-title p-5">{{ __('Devs') }}</h3>
                            <div class="card-header flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                                <form
                                    class="flex flex-wrap gap-4 w-full md:w-auto justify-end"
                                    wire:submit.prevent="search">

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
                                        <div class="form-control">
                                            <x-label
                                                class="mb-1.5"
                                                for="searchName"
                                                :value="__('user name')"
                                            />
                                            <x-input
                                                class="input input-bordered input-sm w-full rounded"
                                                type="text"
                                                wire:model="searchName"
                                                autofocus
                                            />
                                        </div>

                                        <!-- Filtro 2: Location -->
                                        <div class="form-control">
                                            <x-label
                                                class="mb-1.5"
                                                for="location"
                                                :value="__('Location')"
                                            />
                                            <x-input
                                                class="input input-bordered input-sm w-full rounded"
                                                type="text"
                                                wire:model="location"
                                                autofocus
                                            />
                                        </div>

{{--                                        <!-- Filtro 2: Location -->--}}
{{--                                        <div class="form-control">--}}
{{--                                            <x-label--}}
{{--                                                class="mb-1.5"--}}
{{--                                                for="location"--}}
{{--                                                :value="__('Location')"--}}
{{--                                            />--}}
{{--                                            <x-input--}}
{{--                                                class="input input-bordered input-sm w-full rounded"--}}
{{--                                                type="text"--}}
{{--                                                wire:model="location"--}}
{{--                                                autofocus--}}
{{--                                            />--}}
{{--                                        </div>--}}

{{--                                        <!-- Filtro 3: Min followers -->--}}
{{--                                        <div class="form-control">--}}
{{--                                            <x-label--}}
{{--                                                class="mb-1.5"--}}
{{--                                                for="minFollowers"--}}
{{--                                                :value="__('Min followers')"--}}
{{--                                            />--}}
{{--                                            <x-input--}}
{{--                                                class="input input-bordered input-sm w-full rounded"--}}
{{--                                                type="number"--}}
{{--                                                wire:model="minFollowers"--}}
{{--                                                autofocus--}}
{{--                                            />--}}
{{--                                        </div>--}}

{{--                                        <!-- Filtro 4: Max followers -->--}}
{{--                                        <div class="form-control">--}}
{{--                                            <x-label--}}
{{--                                                class="mb-1.5"--}}
{{--                                                for="maxFollowers"--}}
{{--                                                :value="__('Max followers')"--}}
{{--                                            />--}}
{{--                                            <x-input--}}
{{--                                                class="input input-bordered input-sm w-full rounded"--}}
{{--                                                type="number"--}}
{{--                                                wire:model="maxFollowers"--}}
{{--                                                autofocus--}}
{{--                                            />--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full">
                                        <!-- Filtro 3: Min followers -->
                                        <div class="form-control">
                                            <x-label
                                                class="mb-1.5"
                                                for="minFollowers"
                                                :value="__('Min followers')"
                                            />
                                            <x-input
                                                class="input input-bordered input-sm w-full rounded"
                                                type="number"
                                                wire:model="minFollowers"
                                                autofocus
                                            />
                                        </div>

                                        <!-- Filtro 4: Max followers -->
                                        <div class="form-control">
                                            <x-label
                                                class="mb-1.5"
                                                for="maxFollowers"
                                                :value="__('Max followers')"
                                            />
                                            <x-input
                                                class="input input-bordered input-sm w-full rounded"
                                                type="number"
                                                wire:model="maxFollowers"
                                                autofocus
                                            />
                                        </div>
                                        <!-- Filtro 5: Min Repository -->
                                        <div class="form-control">
                                            <x-label
                                                class="mb-1.5"
                                                for="minRepos"
                                                :value="__('Min Repository')"
                                            />
                                            <x-input
                                                class="input input-bordered input-sm w-full rounded"
                                                type="number"
                                                wire:model="minRepos"
                                                autofocus
                                            />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full mt-4">


                                        <!-- Filtro 6: Max Repository -->
                                        <div class="form-control">
                                            <x-label
                                                class="mb-1.5"
                                                for="maxRepos"
                                                :value="__('Max Repository')"
                                            />
                                            <x-input
                                                class="input input-bordered input-sm w-full rounded"
                                                type="number"
                                                wire:model="maxRepos"
                                                autofocus
                                            />
                                        </div>
                                        <div class="form-control">
                                            <x-label
                                                class="mb-1.5"
                                                for="minStars"
                                                :value="__('Min Stars')"
                                            />
                                            <x-input
                                                class="input input-bordered input-sm w-full rounded"
                                                type="number"
                                                wire:model="minStars"
                                                autofocus
                                            />
                                        </div>
                                        <div class="form-control">
                                            <x-label
                                                class="mb-1.5"
                                                for="maxStars"
                                                :value="__('Max Stars')"
                                            />
                                            <x-input
                                                class="input input-bordered input-sm w-full rounded"
                                                type="number"
                                                wire:model="maxStars"
                                                autofocus
                                            />
                                        </div>

                                    </div>

                                    <div class="form-control flex flex-row justify-end items-end gap-2">
                                        <button
                                            type="button"
                                            wire:click="resetFields"
                                            class="btn btn-sm btn-ghost"
                                        >
                                            {{ __('Reset') }}
                                        </button>
                                        <button
                                            class="btn btn-sm btn-primary"
                                            type="submit"
                                        >
                                            {{ __('Search') }}
                                        </button>
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
                                                <th class="w-[100px]">
                                                    <span class="sort asc">
                                                        <span class="sort-label">
                                                            Avatar
                                                        </span>
                                                    </span>
                                                </th>
                                                <th class="min-w-[135px]">
                                                    <span class="sort">
                                                        <span class="sort-label">
                                                            NickName
                                                        </span>
                                                    </span>
                                                </th>
                                                <th class="min-w-[135px]">
                                                    <span class="sort">
                                                        <span class="sort-label">
                                                            Tipo de usuario
                                                        </span>
                                                    </span>
                                                </th>
                                                <th class="min-w-[135px]">
                                                    <span class="sort">
                                                        <span class="sort-label">
                                                            Tipo de perfil
                                                        </span>
                                                    </span>
                                                </th>
                                                <th class="min-w-[135px]">
                                                    <span class="sort">
                                                        <span class="sort-label">
                                                            Stars
                                                        </span>
                                                    </span>
                                                </th>
                                                <th class="min-w-[135px]">
                                                    <span class="sort">
                                                        <span class="sort-label">
                                                            Repositories
                                                        </span>
                                                    </span>
                                                </th>
                                                <th class="min-w-[135px]">
                                                    <span class="sort">
                                                        <span class="sort-label">
                                                            Seguidores
                                                        </span>
                                                    </span>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- Loading spinner centralizado -->
                                            <div wire:loading class="fixed inset-0 flex items-center justify-center z-50">
                                                <div class="flex flex-col items-center justify-center bg-gray-100 bg-opacity-75 w-full h-full">
                                                    <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-b-4 border-blue-500 mb-4"></div>
                                                    <p class="text-gray-600 text-lg font-medium">Carregando...</p>
                                                </div>
                                            </div>

                                            <!-- Conteúdo principal (visível quando não estiver carregando) -->
                                            <div wire:loading.remove>
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
                                                                    <a
                                                                        href="{{ route('user.index', $user['login']) }}"
                                                                        wire:navigate
                                                                    >
                                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[50px]"
                                                                             src="{{ $user['avatar_url'] }}" alt=""/>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    {{ $user['login'] }}
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    {{ $user['type'] }}
                                                                </span>

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    {{ $user['user_view_type'] }}
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    {{ \Illuminate\Support\Number::abbreviate($user['total_stars']) }}
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    {{ $user['total_repos'] }}
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex flex-col gap-2">
                                                                <span class="text-2sm text-gray-600 leading-3">
                                                                    {{ $user['total_followers'] }}
                                                                </span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </div>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
                                        <div class="flex items-center gap-2 order-2 md:order-1">
                                            Show
                                            <select
                                                wire:model.live="perPage"
                                                disabled="disabled"
                                                class="select select-sm w-16"
                                                name="perpage">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
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
