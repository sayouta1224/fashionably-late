@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection



@section('content')
<body>

    <div class="thanks__content">
        <div class="thanks__content-inner">
            <div class="thanks__back">
                Thank you
                <div class="thanks__heading">
                    <h2>お問い合わせありがとうございました</h2>
                </div>
                <div class="button">
                    <button class="home__button" onclick="location.href='/'">HOME</button>
                </div>
            </div>
        </div>
    </div>

</body>
@endsection

<style>
.thanks__back {
    position: relative;
    margin: 180px 50px;
    color: #f8f8f8;
    font-size: 250px;
}

.thanks__heading {
    position: absolute;
    margin-top: -60px;
    margin-left: -230px;
    color: #82756a;
    font-size: 15px;
    font-family: Inter;
}

.button {
    position: absolute;
    margin-top: -35px;
    margin-left: -120px;
    width: 450px;
    height: 40px;
}

.home__button {
    border: none;
    background: #82756a;
    color: #fff;
    font-size: 20px;
    font-family: Merriweather;
}
</style>
