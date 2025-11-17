@extends('layouts.guest')

@section('title', 'パスワードリセット')

@section('h1', 'パスワードリセット')
@section('content')
    <div class="px-5 grid place-items-cente w-full py-10">
        <form action="{{ route('password.update') }}" method="POST" class="space-y-5">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <input type="hidden" name="email" value="{{ request('email') }}">
            <x-input-field name="password" id="password" label="パスワード" type="password" placeholder="パスワードを入力してください" />
            <x-input-field name="password_confirmation" id="password_confirmation" label="パスワード（再入力）" type="password" placeholder="パスワードを入力してください" />
            <a href="/login" class="text-blue-200 text-lg">ログインはこちら</a>

            <x-button type="submit" label="更新" />

        </form>
    </div>
@endsection
