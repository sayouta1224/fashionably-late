@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection



@section('content')
<body>

    <header class="header">
        <div class="header__inner">
            <div class="header__utilities">
                <div class="header__logo">
                    FashionablyLate
                </div>
                <nav class="header__nav">
                    <button class="login__button" onclick="location.href='/login'">login</button>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="register-form__content">
            <div class="register-form__heading">
                <h2>Register</h2>
            </div>
            <form class="form" action="/register" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="例：山田　太郎" value="{{ old('name') }}">
                        </div>
                        <div class="form__error">
                            @error('name')
                            <span class="message">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="email" placeholder="例：test@example.com" value="{{ old('email') }}">
                        </div>
                        <div class="form__error">
                            @error('email')
                            <span class="message">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">パスワード</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="password" name="password" placeholder="例：coachtech1106">
                        </div>
                        <div class="form__error">
                            @error('password')
                            <span class="message">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">登録</button>
                </div>
            </form>
        </div>
    </main>

</body>
@endsection