@extends('layouts.guest')

@section('title', 'アカウント登録')

@section('h1', 'メール認証')
@section('content')
    <div class="px-5 text-center py-10 text-yellow-200 ">
        <div>
            <h2 class="text-2xl xl:text-4xl">メールを送信しました。</h2>
            <p class="text-2xl xl:text-4xl mt-3">メールより認証を行ってください。</p>
        </div>

        <div class="mt-10">
            <p class="text-2xl xl:text-2xl mt-3">メールが送られない場合は再送ボタンをクリックしてください</p>

            <form action="{{ route('verification.send') }}" method="POST">
                @csrf
                <div class="mt-10">
                    <button class="text-xl bg-white text-black p-3 px-7 font-bold cursor-pointer" type="submit">再送</button>
                </div>
            </form>
        </div>

    </div>
@endsection
