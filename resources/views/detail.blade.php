@extends('layout')
@section('title', '店舗詳細')
@section('content')

    <a href="/" type="button" class="btn btn-outline-info">ホーム</a>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-12">
                <div class="card-body">
                    <h1 class="card-title">店舗名 : {{optional($shop)->name}}</h1>
                    <p class="card-text">住所 : {{optional($shop)->address}}</p>
                    <p class="card-text">電話番号 : {{optional($shop)->phone_number}}</p>
                </div>
            </div>
        </div>
    </div>


    @foreach($reviews as $review)
        <form action="/shop/{{optional($shop)->id}}/review/{{optional($review)->id}}" method="post">
            @csrf

            <input type="hidden" name="id" value="{{optional($review)->id}}">
            <ul class="list-group">
                <li class="list-group-item">口コミタイトル : {{optional($review)->title}}</li>
                <li class="list-group-item">投稿者名 : {{optional($review)->user_name}}</li>
                <li class="list-group-item">口コミ本文 : {{optional($review)->body}}</li>
                <li class="list-group-item">投稿日時 : {{optional($review)->time}}</li>
            </ul>
            <input type="submit" value="削除">
            <a href="/shop/{{optional($shop)->id}}/review/{{optional($review)->id}}/edit" type="button" class="btn btn-outline-info">編集</a>
        </form>
    @endforeach
    {{$reviews->links()}}


    <div class="card-header">
    <h3>口コミ投稿フォーム</h3>
        @if(count($errors) > 0)
            <p>入力に問題があります。再入力してください。</p>
        @endif
            <form action="/shop/{{optional($shop)->id}}/review/confirm" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    @if($errors->has('title'))
                        <p>{{$errors->first('title')}}</p>
                    @endif
                    <label for="title">口コミタイトル</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    @if($errors->has('user_name'))
                        <p>{{$errors->first('user_name')}}</p>
                    @endif
                    <label for="user_name">投稿者名</label>
                    <input type="text" name="user_name" class="form-control" id="exampleInputPassword1" value="{{ old('user_name') }}">
                </div>
                <div class="form-group">
                    @if($errors->has('body'))
                        <p>{{$errors->first('body')}}</p>
                    @endif
                    <label for="body">口コミ本文</label>
                    <textarea type="text" name="body" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('body') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">送信</button>
            </form>
    </div>
@endsection
