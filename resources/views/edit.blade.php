@extends('layout')
@section('title', '編集画面')
@section('content')


    <div class="card-header">
    <h2>編集ページ</h2>
        @if(count($errors) > 0)
            <p>入力に問題があります。再入力してください。</p>
        @endif
            <form action="/shop/{{optional($shop)->id}}/review/{{optional($review)->id}}/edit/complete" method="post">
                @csrf
                    <div class="form-group">
                        @if($errors->has('title'))
                            <p>{{$errors->first('title')}}</p>
                        @endif
                        <label for="title">口コミタイトル</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{optional($review)->title}}">
                    </div>
                    <div class="form-group">
                        @if($errors->has('user_name'))
                            <p>{{$errors->first('user_name')}}</p>
                        @endif
                        <label for="user_name">投稿者名</label>
                        <input type="text" name="user_name" class="form-control" id="exampleInputPassword1" value="{{optional($review)->user_name}}">
                    </div>
                    <div class="form-group">
                        @if($errors->has('body'))
                            <p>{{$errors->first('body')}}</p>
                        @endif
                        <label for="body">口コミ本文</label>
                        <textarea type="text" name="body" class="form-control" id="exampleFormControlTextarea1" rows="3">{{optional($review)->body}}</textarea>
                    </div>
                    <button type="submit" value="submit" class="btn btn-outline-primary">更新</button>
                    <a href="/shop/{{optional($shop)->id}}" type="button" class="btn btn-outline-info">戻る</a>
            </form>
    </div>
@endsection
