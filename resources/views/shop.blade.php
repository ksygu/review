@extends('layout')
@section('title', '店舗一覧')
@section('content')


    <table class="table">
        <thead>
        <div class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <tr>
            <th scope="col">店舗名</th>
            <th scope="col">住所</th>
            <th scope="col">電話番号</th>
        </tr>
        </thead>
        <tbody>
        @foreach($shops as $shop)
        <tr>
            <th>
            <a href="/shop/{{$shop->id}}" type="button" class="btn btn-outline-info">{{$shop->name}}</a>
            </th>
            <td>{{$shop->address}}</td>
            <td>{{$shop->phone_number}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
