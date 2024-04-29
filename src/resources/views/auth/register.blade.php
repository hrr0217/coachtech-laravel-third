@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register_content">
    <div class="register-form_heading">
        <h2>会員登録</h2>
    </div>
    <form class="form">
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label-item">お名前</span>
            </div>
            <div class="form_group-content">
                <div class="form_input-text">
                    <input type="text" name="name" value="{{ old('name') }}" />
                </div>
                <div class="form_error">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label-item">メールアドレス</span>
            </div>
            <div class="form_group-content">
                <div class="form_input-text">
                    <input type="email" name="email" value="{{ old('email') }}" />
                </div>
                <div class="form_error">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label-item">パスワード</span>
            </div>
            <div class="form_group-content">
                <div class="form_input-text">
                    <input type="password" name="password" />
                </div>
                <div class="form_error">
                    @error('password')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label-item">確認用パスワード</span>
            </div>
            <div class="form_group-content">
                <div class="form_input-text">
                    <input type="password" name="password_confirmation" />
                </div>
            </div>
        </div>
        <div class="form_button">
            <button class="form_button-submit" type="submit">登録</button>
        </div>
    </form>
    <div class="login_link">
        <a class="login_button-submit" href="/login">ログインの方はこちら</a>
    </div>
</div>
@endsection