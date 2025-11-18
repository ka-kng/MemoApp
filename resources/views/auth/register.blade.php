@extends('layouts.guest')

@section('title', 'アカウント登録')

@section('h1', 'アカウント登録')
@section('content')
    <div class="px-5 grid place-items-cente w-full py-10">
        <form action="{{ route('register') }}" method="POST" class="space-y-5">
            @csrf

            <x-input-field name="name" id="name" label="名前" type="name" placeholder="名前を入力してください" />
            <x-input-field name="email" id="email" label="メールアドレス" type="email" placeholder="メールアドレスを入力してください" />
            <x-input-field name="password" id="password" label="パスワード" type="password" placeholder="パスワードを入力してください" />
            <x-input-field name="password_confirmation" id="password_confirmation" label="パスワード（再入力）" type="password" placeholder="パスワードを入力してください" />
            <a href="/login" class="text-blue-200 text-lg">ログインはこちら</a>

            @if (session('status'))
    <div class="mt-4 text-green-600">
        {{ session('status') }}
    </div>
@endif

            <x-button type="submit" label="登録" />

        </form>
    </div>
@endsection
