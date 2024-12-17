<div class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
    <img
        alt=""
        class="w-7 mt-4 ms-5"
        src="{{ $srcImg }}"
    />
    <div class="flex flex-col gap-1 pb-4 px-5">
        <span class="text-3xl font-semibold text-gray-900 dark:text-gray-300">
            {{ $number }}
        </span>
        <span class="text-2sm font-medium text-gray-600">
            {{ $title }}
        </span>
    </div>
</div>
