<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Review;
use Illuminate\Support\Facades\Redirect;

class ShopController extends Controller
{
    //店舗一覧を表示する
    public function index() {
        $shops = Shop::all();
        return view('shop', ['shops'=>$shops]);
    }

    //各店舗の詳細を表示する
    public function detail($shop_id) {
        $shop = Shop::find($shop_id);
        $reviews = Review::where('shop_id', '=', $shop_id)->simplePaginate(3);
        return view('detail', ['shop'=>$shop, 'reviews'=>$reviews]);
    }

    //削除を実行
    public function remove($shop_id, $review_id) {
        $review = Review::find($review_id);
        $review->delete();
        return redirect("/shop/$shop_id");
    }

    //口コミ投稿入力確認ページ
    public function confirm(Request $request, $shop_id) {
        //バリデーション
        $validate_rule = [
            'title'=>'required',
            'user_name'=>'required',
            'body'=>'required',
        ];
        $this->validate($request, $validate_rule);

        $data = $request->all();
        $shop = Shop::find($shop_id);
        return view('confirm', ['data'=>$data, 'shop'=>$shop]);
    }

    //入力した口コミをDBに保存
    public function save(Request $request, $shop_id) {
        $review = new Review;
        $review['shop_id'] = $shop_id;
        $review['title'] = $request['title'];
        $review['user_name'] = $request['user_name'];
        $review['body'] = $request['body'];
        $review['time'] = date('Y-m-d');
        $review->save();
        return redirect("/shop/$shop_id");
    }

    //口コミ編集画面を表示する
    public function edit($shop_id, $review_id) {
        $shop = Shop::find($shop_id);
        $review = Review::find($review_id);
        return view('edit', ['shop'=>$shop, 'review'=>$review]);
    }

    //編集した口コミをDBに保存
    public function update(Request $request, $shop_id, $review_id) {
        //バリデーション
        $validate_rule = [
            'title'=>'required',
            'user_name'=>'required',
            'body'=>'required',
        ];
        $this->validate($request, $validate_rule);

        $review = Review::find($review_id);
        $review['title'] = $request['title'];
        $review['user_name'] = $request['user_name'];
        $review['body'] = $request['body'];
        $review->save();
        return redirect("/shop/$shop_id");
    }
}
