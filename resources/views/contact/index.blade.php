<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rui可愛いwww') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    <div class="mt-6">
                        <a href="{{ route('contact.create') }}">新規作成するよっっ！///</a>
                    </div>
                    <form action="{{ route('contact.index') }}" method="get">
                        <div class="flex items-center max-w-md mx-auto bg-white rounded-lg " x-data="{ search: '' }">
                            <div class="w-full">
                                <input type="search" name="search" class="w-full px-4 py-1 text-gray-800 rounded-full focus:outline-none"
                                    placeholder="search">
                            </div>
                            <div>
                                <button type="submit" class="flex items-center bg-blue-500 justify-center w-12 h-12 text-white rounded-r-lg">検索</button>
                            </div>
                        </div>
                    </form>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full">
                                        <thead class="bg-white border-b">
                                            <tr>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">ID
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">氏名
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">件名
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">登録日時
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">詳細
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contacts as $contact)
                                                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                                    <td
                                                        class="text-sm font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $contact->id }}</td>
                                                    <td
                                                        class="text-sm font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $contact->your_name }}
                                                    </td>
                                                    <td
                                                        class="text-sm font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $contact->title }}
                                                    </td>
                                                    <td
                                                        class="text-sm font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $contact->created_at }}
                                                    </td>
                                                    <td
                                                        class="text-sm font-light px-6 py-4 whitespace-nowrap">
                                                        <a href="{{ route('contact.show', ['id' => $contact->id]) }}">詳細を見るっっ！///</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{ $contacts->links() }}
        </div>
    </div>
</x-app-layout>
