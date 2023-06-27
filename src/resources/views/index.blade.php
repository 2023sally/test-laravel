<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header>
        <div class="header__inner">
            <h1 class="header__inner-title">お問い合わせ</h1>
        </div>
    </header>
    <main>
        <form class="form" action="/contacts/confirm/" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">※</span>
                </div>
                <table class="form__input-text">
                    <tr>
                        <td class="form__input-text--left">
                            <input class="last-name" type="text" name="last-name" value="{{ old('last-name') }}" />
                        </td>
                        <td class="form__input-text--right">
                            <input class="first-name" type="text" name="first-name" value="{{ old('first-name') }}" />
                        </td>
                    </tr>
                </table>
                <div class="form__error">
                    @error('last-name')
                    {{ $message }}
                    @enderror
                </div>
                <div class="form__error">
                    @error('first-name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group-name">
                <div class="form__group-name--left">
                    例）山田
                </div>
                <div class="form__group-name--right">
                    例）太郎
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <div class="form__group-title--text">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                </div>
                <table class="form__radio-item">
                    <tr>
                        <td>
                            <label class="radio__boy">
                                <input type="radio" name="gender" value="{{ old('gender') }}" checked />男性
                            </label>
                        </td>
                        <td>
                            <label class="radio__girl">
                                <input type="radio" name="gender" value="{{ old('gender') }}" />女性
                            </label>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__input-text--box">
                    <input type="email" name="email" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group-email">
                <div class="form__group-email--inner">
                    例）test@exmple.com
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">郵便番号</span>
                    <span class="form__label--required">※</span>
                </div>
                <table class="form__input-text--numbers">
                    <tr>
                        <td class="mark">〒</td>
                        <td>
                            <div class="form__postcode-item">
                                <input class="form__postcode-item--button" type="text" name="postcode" value="{{ old('postcode') }}" />
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="form__error">
                    @error('postcode')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group-numbers">
                <div class="form__group-numbers--inner">
                    例）123-4567
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__input-text--address">
                    <input class="form__input-text--address-inner" type="text" name="address" value="{{ old('address') }}" />
                </div>
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group-address">
                <div class="form__group-address--inner">
                    例）東京都渋谷区千駄ヶ谷1-2-3
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__input-text--box-building">
                    <input class="form__input-text--box-building-inner" type="text" name="building_name" value="{{ old('building_name') }}" />
                </div>
            </div>
            <div class="form__group-building">
                <div class="form__group-building--inner">
                    例）千駄ヶ谷マンション101
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">ご意見</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__input-opinion">
                    <div class="form__input-opinion--textarea">
                        <textarea name="opinion" maxlength="120">{{ old('opinion') }}</textarea>
                    </div>
                </div>
                <div class="form__error">
                    @error('opinion')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認</button>
            </div>
        </form>
    </main>
</body>