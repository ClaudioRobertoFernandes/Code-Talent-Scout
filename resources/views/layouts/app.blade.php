<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" lang="en">

@include('layouts.head.head')

<body class="flex h-full demo1 sidebar-fixed header-fixed bg-[#fefefe] dark:bg-coal-500">
<!--begin::Page layout-->
<div class="flex grow">
    @include('layouts.sidebar.sidebar')

    <div class="wrapper flex grow flex-col">

        @include('layouts.megamenu-container.megamenu-container')

        <main>
            {{ $slot }}
        </main>

        @include('layouts.footer.footer')
    </div>
    @stack('modals')
</div>

@include('layouts.footer.script.scripts')
</body>
</html>
