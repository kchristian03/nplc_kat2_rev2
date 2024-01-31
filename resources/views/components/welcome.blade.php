<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
{{--    <x-application-logo class="block h-12 w-auto"/>--}}

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Hello 👋 {{ Auth::user()->name }}
    </h1>

    <h2 class="mt-2 text-xl font-normal text-gray-900">
        Welcome to NPLC - Logic Games Panel!
    </h2>

    <p class="mt-6 text-gray-500 leading-relaxed">
        You can manage all data here.<br>
        Your role is {{ Auth::user()->roles->first()->name }}<br>
    </p>
</div>


