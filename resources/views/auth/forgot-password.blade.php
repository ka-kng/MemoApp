@extends('layouts.guest')

@section('title', 'パスワードを忘れた方')

@section('h1', 'パスワードを忘れた方')
@section('content')
    <div class="px-5 grid place-items-cente w-full py-10">
        <form action="{{ route('password.email') }}" method="POST">
            @csrf

            <x-input-field name="email" id="email" label="メールアドレス" type="email" placeholder="メールアドレスを入力してください" />

            <x-button type="submit" label="送信" />

        </form>
    </div>
@endsection
