@extends('layout')
@section('title', '入力確認画面')
@section('content')

<form action="/shop/{{optional($shop)->id}}/review/complete" method="post">
    @csrf
    <input type="hidden" name="title" class="form-control" id="exampleInputEmail1" value="{{$data['title']}}">
    <input type="hidden" name="user_name" class="form-control" id="exampleInputPassword1" value="{{$data['user_name']}}">
    <input type="hidden" name="body" class="form-control" id="exampleInputPassword1" value="{{$data['body']}}">

    <h3>入力内容確認ページ</h3>
    <div class="card-header">
        <div class="form-group">
            <label for="title">口コミタイトル</label>
            <div class="col-sm-10">{{$data['title']}}</div>
        </div>
        <div class="form-group">
            <label for="user_name">投稿者名</label>
            <div class="col-sm-10">{{$data['user_name']}}</div>
        </div>
        <div class="form-group">
            <label for="body">口コミ本文</label>
            <div class="col-sm-10">{{$data['body']}}</div>
        </div>
        <button type="submit" value="submit" class="btn btn-outline-primary">投稿</button>
        <input type="button" onclick="history.back()" value="戻る" class="btn btn-outline-primary">
    </div>
</form>

@endsection
