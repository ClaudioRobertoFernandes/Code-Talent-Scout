<div class="menu-item px-4 py-1.5">
    <form method="POST" action="{{ route('logout') }}" x-data>
        @csrf
        <a class="btn btn-sm btn-light justify-center"
           href="{{ route('logout') }}"
           @click.prevent="$root.submit();">
            {{ __('Log Out') }}
        </a>
    </form>
</div>
