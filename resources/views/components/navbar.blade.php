<div id="navbar-collapse-with-animation"
    class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
    <div
        class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:ps-7">
        @foreach (config('menu') as $menu)
            <a @class([
                'font-medium sm:py-6',
                'text-blue-600' => url($menu['url']) === request()->url(),
                'text-gray-200 hover:text-gray-400' =>
                    url($menu['url']) !== request()->url(),
            ]) href={{ url($menu['url']) }}>
                {{ $menu['name'] }}
            </a>
        @endforeach
    </div>
</div>
