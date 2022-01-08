<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12"></div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                    ログインしました。
                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('/admin/top') }}" class="text-lg text-gray-700 dark:text-gray-500 underline">商品投稿ページへ</a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
