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
                    edit
                    <form action="{{ route('contact.update',['id' => $contact->id ]) }}" method="post">
                    @csrf
                    氏名
                    <input type="text" name="your_name" value="{{ $contact->your_name }}">
                    <br>
                    件名
                    <input type="text" name="title" value="{{ $contact->title }}">
                    <br>
                    メールアドレス
                    <input type="email" name="email" value="{{ $contact->email }}">
                    <br>
                    ホームページ
                    <input type="url" name="url" value="{{ $contact->url }}">
                    <br>
                    性別
                    <input type="radio" name="gender" id="" value="0" @if( $contact->gender  === 0 ) checked @endif>男性
                    <input type="radio" name="gender" id="" value="1" @if( $contact->gender  === 1 ) checked @endif>女性
                    <br>
                    <select name="age">
                        <option value="">選択してください</option>
                        <option value="1" @if( $contact->age  === 1 ) selected @endif>～19歳</option>
                        <option value="2" @if( $contact->age  === 2 ) selected @endif>20歳～29歳</option>
                        <option value="3" @if( $contact->age  === 3 ) selected @endif>30歳～39歳</option>
                        <option value="4" @if( $contact->age  === 4 ) selected @endif>40歳～49歳</option>
                        <option value="5" @if( $contact->age  === 5 ) selected @endif>50歳～59歳</option>
                        <option value="6" @if( $contact->age  === 6 ) selected @endif>60歳～</option>
                    </select>
                    <br>
                    お問い合わせ内容
                    <textarea name="contact" id="" cols="20" rows="10">{{ $contact->contact }}</textarea>
                    <br>
                    <input type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" value="更新するっっ！///">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
