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
                    <form action="{{ route('contact.store')}}" method="post">
                        @csrf
                        氏名
                        <input type="text" name="your_name">
                        <br>
                        件名
                        <input type="text" name="title">
                        <br>
                        メールアドレス
                        <input type="email" name="email">
                        <br>
                        ホームページ
                        <input type="url" name="url">
                        <br>
                        性別
                        <input type="radio" name="gender" id="" value="0">男性
                        <input type="radio" name="gender" id="" value="1">女性
                        <br>
                        <select name="age">
                            <option value="">選択してください</option>
                            <option value="1">～19歳</option>
                            <option value="2">20歳～29歳</option>
                            <option value="3">30歳～39歳</option>
                            <option value="4">40歳～49歳</option>
                            <option value="5">50歳～59歳</option>
                            <option value="6">60歳～</option>
                        </select>
                        <br>
                        お問い合わせ内容
                        <textarea name="contact" id="" cols="20" rows="10"></textarea>
                        <br>
                        <input type="checkbox" name="caution" id="1">注意事項に注意する
                        <br>
                        <input type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" value="登録するっっ！///">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
