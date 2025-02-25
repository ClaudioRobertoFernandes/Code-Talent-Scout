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
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
                                        <div class="flex items-center gap-2 order-2 md:order-1">
                                            Show
                                            <select
                                                wire:model.live="perPage"
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
