@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@livewireStyles
@endsection



@section('content')
<body>

    <header class="header">
        <div class="header__inner">
            <div class="header__utilities">
                <div class="header__logo">
                    FashionablyLate
                </div>
                <form class="header__form" action="/logout" method="post">
                    @csrf
                    <button class="logout__button" >logout</button>
                </form>
            </div>
        </div>
    </header>

    <main>
        <div class="admin__content">
            <div class="admin__heading">
                <h2>Admin</h2>
            </div>
            <div class="content__group">
                <div class="content__group-inner">
                <div class="search__group">
                    <span class="search1">
                        <form action="">
                            <input type="text" name="name">
                        </form>
                    </span>
                    <span class="search2">
                        <form action="">
                            <input type="text" name="gender">
                        </form>
                    </span>
                    <span class="search3">
                        <form action="">
                            <input type="text" name="content">
                        </form>
                    </span>
                    <span class="search4">
                        <form action="">
                            <input type="text" name="date">
                        </form>
                    </span>
                    <span class="search__button">
                        <button>検索</button>
                    </span>
                    <span class="reset__button">
                        <button>リセット</button>
                    </span>
                </div>
                <div class="">
                    <span class="button">
                        <button>エクスポート</button>
                    </span>
                    <span class="page">

                    </span>
                </div>
                <div class="display__table">
                    <table class="display">
                        <div class="table__inner">
                            <tr class="table__row--heading">
                                <th>お名前</th>
                                <th>性別</th>
                                <th>メールアドレス</th>
                                <th>お問い合わせの種類</th>
                            </tr>
                            <tr class="table__row--result">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <button>詳細</button>
                            </tr>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


    </main>
    @livewireScripts
</body>
@endsection



 <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">確認画面</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(['route' => 'process', 'method' => 'POST']) !!}
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <p class="col-sm-4 col-form-label">お名前（全角10文字以内）<span class="badge badge-danger ml-1">必須</span></p>
                                <div class="col-sm-8">
                                    <p class="modal-name"></p>
                                    <input class="modal-name" type="hidden" name="name" value="">
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">必須</span></p>
                                <div class="col-sm-8">
                                    <p class="modal-email"></p>
                                    <input class="modal-email" type="hidden" name="email" value="">
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <p class="col-sm-4 col-form-label">電話番号</p>
                                <div class="col-sm-8">
                                    <p class="modal-tel"></p>
                                    <input class="modal-tel" type="hidden" name="tel" value="">
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <p class="col-sm-4 col-form-label">性別<span class="badge badge-danger ml-1">必須</span></p>
                                <div class="col-sm-8">
                                    <p class="modal-gender"></p>
                                    <input class="modal-gender" type="hidden" name="gender" value="">
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <p class="col-sm-4 col-form-label">選択（複数選択可）<span class="badge badge-danger ml-1">必須</span></p>
                                <div class="col-sm-8">
                                    <p class="modal-checkbox"></p>
                                    <input class="modal-checkbox" type="hidden" name="checkbox" value="">
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <p class="col-sm-4 col-form-label">お問い合わせ内容<span class="badge badge-danger ml-1">必須</span></p>
                                <div class="col-sm-8">
                                    <p class="modal-contents"></p>
                                    <input class="modal-contents" type="hidden" name="contents" value="">
                                </div>
                            </div>
                            
                            <div class="text-center">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">修正する</button>
                                {{ Form::submit('送信', ['name' => 'submit', 'class' => 'btn btn-primary']) }}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/main.js') }}"></script>



@endsection






<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Contact;
use Livewire\WithPagination;

class Modal extends Component
{
    use WithPagination;


    public $showModal = false;

    protected $paginationTheme = 'bootstrap';

    public $contact;


    public function render()
    {
        return view('livewire.modal',['contacts'=>Contact::with('category')->paginate(7)]);
    }


    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }
}










@if($showModal)
@endif

<button wire:click="openModal({{ $contact->id }})" type="button" class="detail">詳細</button>

public function openModal($id)
{
    $this->contact = Contact::with('category')->find($id);
    $this->showModal = true;
}

モーダル内のviewに渡す変数を１つずつ別のにしてコンポーネントを使いそれぞれ取り出す形にしたらできるようになりました。