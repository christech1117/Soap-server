<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', function () {
    return response()->json([
        [
            'id' => 1,
            'name' => '生活調理乳',
            'price' => 950,
            'cover' => 'https://www.teasoap.com.tw/downloads/product/10000/1000/174/20170309104857690_bp.jpg',
            'discount' => 0.5
        ],
        [
            'id' => 2,
            'name' => '生活保濕乳',
            'price' => 900,
            'cover' => 'https://www.teasoap.com.tw/downloads/product/10000/1000/138/20161115173455546_bp.jpg',
            'discount' => 0.5
        ],
        [
            'id' => 3,
            'name' => '潔',
            'price' => 140,
            'cover' => 'https://www.teasoap.com.tw/downloads/product/10000/1000/182/20170309113517722_bp.jpg',
            'discount' => 0.5
        ],
        [
            'id' => 4,
            'name' => '源',
            'price' => 140,
            'cover' => 'https://www.teasoap.com.tw/downloads/product/10000/1000/184/20170309114104730_bp.jpg',
            'discount' => 0.5
        ],
        [
            'id' => 5,
            'name' => '綠茶皂',
            'price' => 180,
            'cover' => 'https://www.teasoap.com.tw/downloads/product/10000/1000/187/20170309132421742_bp.jpg',
            'discount' => 0.5
        ],
        [
            'id' => 6,
            'name' => '茶樹皂',
            'price' => 180,
            'cover' => 'https://www.teasoap.com.tw/downloads/product/10000/1000/174/20170309104857690_sp.jpg',
            'discount' => 0.5
        ],
        [
            'id' => 7,
            'name' => '艾草香茅皂',
            'price' => 180,
            'cover' => 'https://www.teasoap.com.tw/downloads/product/10000/1000/175/20170309110151694_sp.jpg',
            'discount' => 0.5
        ],
        [
            'id' => 8,
            'name' => '清新柑橘皂',
            'price' => 180,
            'cover' => 'https://www.teasoap.com.tw/downloads/product/10000/1000/176/20170309110826698_sp.jpg',
            'discount' => 0.5
        ],
        [
            'id' => 9,
            'name' => '葡萄酒粕皂',
            'price' => 200,
            'cover' => 'https://www.teasoap.com.tw/downloads/product/10000/1000/177/20170309111803702_sp.jpg',
            'discount' => 0.5
        ],
        [
            'id' => 10,
            'name' => '煥采果醋皂',
            'price' => 220,
            'cover' => 'https://www.teasoap.com.tw/downloads/product/10000/1000/178/20170309112127706_sp.jpg',
            'discount' => 0.5
        ],
        [
            'id' => 11,
            'name' => '五葉松皂',
            'price' => 220,
            'cover' => 'https://www.teasoap.com.tw/downloads/product/10000/1000/179/20170309112712710_sp.jpg',
            'discount' => 0.5
        ],
        [
            'id' => 12,
            'name' => '茉草皂',
            'price' => 220,
            'cover' => 'https://www.teasoap.com.tw/downloads/product/10000/1000/180/20170309112909714_sp.jpg',
            'discount' => 0.5
        ],
        [
            'id' => 13,
            'name' => '高山皂',
            'price' => 270,
            'cover' => 'https://www.teasoap.com.tw/downloads/product/10000/1000/181/20170309113233718_sp.jpg',
            'discount' => 0.5
        ]
    ]);
})->middleware('api', 'cors');

Route::get('/product/{id}', function (Request $request) {
    $data = ['title' => $request->get('title'), 'completed' => 0];
    $product = App\Product::create($data);

    return $product;
})->middleware('api', 'cors');
// Route::get('/products', function () {
//     $products = App\Product::all();

//     return $products;
// })->middleware('api', 'cors');

// Route::get('/product/create', function (Request $request) {
//     $data = ['title' => $request->get('title'), 'completed' => 0];
//     $product = App\Product::create($data);

//     return $product;
// })->middleware('api', 'cors');
