<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
    <main>
        <div class="confirm__content">
            <div class="confirm__heading">
                <h1 class="confirm__inner-title">内容確認</h1>
            </div>
            <form class="form" action="/contacts" method="post">
                @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text-name">
                                <input class="last-name" type="text" name="last-name" value="{{ $contact['last-name'] }}" readonly />
                                <input class="first-name" type="text" name="first-name" value="{{ $contact['first-name'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="form__radio-item">
                                <div class="form__radio-item--button">
                                    {{ $contact['gender'] }}
                                </div>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                            <td class="confirm-table__text">
                                <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">郵便番号</th>
                            <td class="confirm-table__text">
                                <input type="tel" name="postcode" value="{{ $contact['postcode'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">住所</th>
                            <td class="confirm-table__text">
                                <input type="tel" name="address" value="{{ $contact['address'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">建物名</th>
                            <td class="confirm-table__text">
                                <input type="tel" name="building_name" value="{{ $contact['building_name'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header-text">ご意見</th>
                            <td class="confirm-table__text">
                                <textarea name="opinion" id="" maxlength="120">{{ $contact['opinion'] }}</textarea>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">送信</button>
                </div>
                <div class="fix">
                    <a href="" class="fix__button">修正する</a>
                </div>
            </form>
        </div>
    </main>
</body>

</html>