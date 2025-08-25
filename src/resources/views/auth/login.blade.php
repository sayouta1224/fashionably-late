@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
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
                    <button class="register__button" onclick="location.href='/register'">register</button>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="login-form__content">
            <div class="login-form__heading">
                <h2>Login</h2>
            </div>
            <form class="form" action="/login" method="post">
                @csrf
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
                    <button class="form__button-submit" type="submit">ログイン</button>
                </div>
            </form>
        </div>
    </main>

</body>
@endsection

