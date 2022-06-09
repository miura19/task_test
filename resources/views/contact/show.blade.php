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
                    show
                    {{ $contact->your_name }}
                    {{ $contact->title }}
                    {{ $contact->email }}
                    {{ $contact->url }}
                    {{ $gender }}
                    {{ $age }}
                    {{ $contact->contact }}
                    <form action="{{ route('contact.edit',['id' => $contact->id ])}}" method="get">
                        @csrf
                        <input type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" value="変更するっっ！///">
                    </form>
                    <form action="{{ route('contact.destroy',['id' => $contact->id ]) }}" method="post" class="mt-6" id="delete_{{ $contact->id }}">
                        @csrf
                        {{-- <input type="submit" class="bg-red-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-blue-500 rounded" value="削除するっっ！///"> --}}
                        <a href="#" data-id={{ $contact->id }} onClick="deletePost(this);" class="bg-red-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-blue-500 rounded">削除するっっ！///</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deletePost(e){
            'use strict';
            if(confirm('本当に消しちゃうよ、、、？')){
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>
</x-app-layout>
