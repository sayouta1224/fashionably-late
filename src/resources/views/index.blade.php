@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection



@section('content')
<body>

    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                FashionablyLate
            </div>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--nametext">
                            <input type="text" name="last_name" placeholder="例：山田" value="{{ old('last_name') }}">
                            <input type="text" name="first_name" placeholder="例：太郎" value="{{ old('first_name') }}">
                        </div>
                        <div class="form__error">
                            <span class="last-name__error">
                                @error('last_name')
                                <span class="message">
                                    {{ $message }}
                                </span>
                                @enderror
                            </span>
                            <span class="first-name__error">
                                @error('first_name')
                                <span class="message__first-name">
                                    {{ $message }}
                                </span>
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--gendertext">
                            <label class="gender" for="radio1">
                                <input type="radio" id="radio1" name="gender" value="1" checked>
                                男性
                            </label>
                            <label class="gender" for="radio2">
                                <input type="radio" id="radio2" name="gender" value="2">
                                女性
                            </label>
                            <label class="gender" for="radio3">
                                <input type="radio" id="radio3" name="gender" value="3">
                                その他
                            </label>
                        </div>
                        <div class="form__error">
                            @error('gender')
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
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例：test@example.com" value="{{ old('email') }}">
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
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--teltext">
                            <input type="tel" name="area_code" maxlength="5" placeholder="080" value="{{ old('area_code') }}">-
                            <input type="tel" name="local_code" maxlength="5" placeholder="1234" value="{{ old('local_code') }}">-
                            <input type="tel" name="subscriber_number" maxlength="5" placeholder="5678" value="{{ old('subscriber_number') }}">
                        </div>
                        <div class="form__error">

                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                        </div>
                        <div class="form__error">
                            @error('address')
                            <span class="message">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--buildingtext">
                            <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101" value="{{ old('building') }}">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--select">
                            <select name="content">
                                <option value="選択してください" selected>選択してください</option>
                                <option value="1. 商品のお届けについて">1. 商品のお届けについて</option>
                                <option value="2. 商品の交換について">2. 商品の交換について</option>
                                <option value="3. 商品トラブル">3. 商品トラブル</option>
                                <option value="4. ショップへのお問い合わせ">4. ショップへのお問い合わせ</option>
                                <option value="5. その他">5. その他</option>
                                {{ old('content') }}
                            </select>
                        </div>
                        <div class="form__error">
                            @error('content')
                            <span class="message">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="detail" placeholder=" お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                        </div>
                        <div class="form__error">
                            @error('detail')
                            <span class="message">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>

</body>

@endsection