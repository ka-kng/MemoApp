@extends('layouts.guest')

@section('title', 'ログイン')

@section('h1', 'ログイン')
@section('content')
    <div class="px-5 grid place-items-cente w-full py-10">
        <form action="" method="POST" class="space-y-5">
            @csrf

            <x-input-field name="email" id="email" label="メールアドレス" type="email" placeholder="メールアドレスを入力してください" />
            <x-input-field name="password" id="password" label="パスワード" type="password" placeholder="パスワードを入力してください" />

            <div class="flex flex-col">
              <a href="/register" class="text-blue-200 text-lg">登録はこちら</a>
              <a href="/forgot-password" class="text-blue-200 text-lg">パスワードを忘れた方はこちら</a>
            </div>

            <x-button type="submit" label="ログイン" />

        </form>
    </div>
@endsection
