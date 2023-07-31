<a class="flex items-center" href="{{ url('/') }}">
    <img src="{{ getSettings('logo') }}" class="black_logo" alt="logo">
    <img src="{{ getSettings('darkLogo') }}" class="white_logo" alt="logo">
    <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900
     dark:text-white hidden xl:inline-block">
        {{ config('app.name') }}
    </span>
</a>
