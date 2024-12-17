<div class="menu-item">
    <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]">
        <span class="menu-icon items-start text-gray-500 dark:text-gray-100 w-[20px]">
            <i class="{{ $icon }}"></i>
        </span>
        <a class="menu-title text-sm font-semibold text-gray-700 dark:text-gray-100 menu-item-active:text-primary menu-link-hover:!text-primary"
           href="{{ $route }}" wire:navigate>
            {{ $title }}
        </a>
    </div>
</div>
