{"filter":false,"title":"web.php","tooltip":"/cms/routes/web.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":21,"column":13},"end":{"row":21,"column":14},"action":"insert","lines":["a"],"id":119}],[{"start":{"row":21,"column":14},"end":{"row":21,"column":15},"action":"insert","lines":["a"],"id":120}],[{"start":{"row":21,"column":15},"end":{"row":21,"column":16},"action":"insert","lines":["a"],"id":121}],[{"start":{"row":21,"column":16},"end":{"row":21,"column":17},"action":"insert","lines":["a"],"id":122}],[{"start":{"row":21,"column":33},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":123},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":22,"column":4},"end":{"row":22,"column":5},"action":"insert","lines":["$"],"id":124}],[{"start":{"row":22,"column":5},"end":{"row":22,"column":6},"action":"insert","lines":["a"],"id":125}],[{"start":{"row":22,"column":6},"end":{"row":22,"column":7},"action":"insert","lines":[" "],"id":126}],[{"start":{"row":22,"column":7},"end":{"row":22,"column":8},"action":"insert","lines":["="],"id":127}],[{"start":{"row":22,"column":8},"end":{"row":22,"column":9},"action":"insert","lines":[" "],"id":128}],[{"start":{"row":22,"column":9},"end":{"row":22,"column":10},"action":"insert","lines":["a"],"id":129}],[{"start":{"row":22,"column":10},"end":{"row":22,"column":11},"action":"insert","lines":["a"],"id":130}],[{"start":{"row":22,"column":11},"end":{"row":22,"column":12},"action":"insert","lines":["a"],"id":131}],[{"start":{"row":22,"column":12},"end":{"row":22,"column":13},"action":"insert","lines":["a"],"id":132}],[{"start":{"row":22,"column":9},"end":{"row":22,"column":13},"action":"remove","lines":["aaaa"],"id":133},{"start":{"row":22,"column":9},"end":{"row":22,"column":13},"action":"insert","lines":["aaaa"]}],[{"start":{"row":22,"column":13},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":134},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":23,"column":4},"end":{"row":23,"column":5},"action":"insert","lines":["$"],"id":135}],[{"start":{"row":23,"column":5},"end":{"row":23,"column":6},"action":"insert","lines":["b"],"id":136}],[{"start":{"row":23,"column":6},"end":{"row":23,"column":7},"action":"insert","lines":["="],"id":137}],[{"start":{"row":22,"column":9},"end":{"row":22,"column":10},"action":"insert","lines":["\""],"id":138}],[{"start":{"row":22,"column":14},"end":{"row":22,"column":15},"action":"insert","lines":["\""],"id":139}],[{"start":{"row":22,"column":15},"end":{"row":22,"column":16},"action":"insert","lines":[";"],"id":140}],[{"start":{"row":23,"column":7},"end":{"row":23,"column":8},"action":"insert","lines":[" "],"id":141}],[{"start":{"row":23,"column":8},"end":{"row":23,"column":10},"action":"insert","lines":["\"\""],"id":142}],[{"start":{"row":23,"column":10},"end":{"row":23,"column":11},"action":"insert","lines":[";"],"id":143}],[{"start":{"row":23,"column":10},"end":{"row":23,"column":11},"action":"insert","lines":["b"],"id":144}],[{"start":{"row":23,"column":11},"end":{"row":23,"column":12},"action":"insert","lines":["b"],"id":145}],[{"start":{"row":23,"column":12},"end":{"row":23,"column":13},"action":"insert","lines":["b"],"id":146}],[{"start":{"row":23,"column":13},"end":{"row":23,"column":14},"action":"insert","lines":["b"],"id":147}],[{"start":{"row":23,"column":9},"end":{"row":23,"column":10},"action":"remove","lines":["\""],"id":148}],[{"start":{"row":23,"column":13},"end":{"row":23,"column":14},"action":"insert","lines":["\""],"id":149}],[{"start":{"row":23,"column":15},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":150},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":24,"column":4},"end":{"row":24,"column":5},"action":"insert","lines":["$"],"id":151}],[{"start":{"row":24,"column":5},"end":{"row":24,"column":6},"action":"insert","lines":["c"],"id":152}],[{"start":{"row":24,"column":6},"end":{"row":24,"column":7},"action":"insert","lines":["="],"id":153}],[{"start":{"row":24,"column":7},"end":{"row":24,"column":8},"action":"insert","lines":[" "],"id":154}],[{"start":{"row":24,"column":8},"end":{"row":24,"column":9},"action":"insert","lines":["$"],"id":155}],[{"start":{"row":24,"column":9},"end":{"row":24,"column":10},"action":"insert","lines":["a"],"id":156}],[{"start":{"row":24,"column":10},"end":{"row":24,"column":11},"action":"insert","lines":["+"],"id":157}],[{"start":{"row":24,"column":11},"end":{"row":24,"column":12},"action":"insert","lines":["$"],"id":158}],[{"start":{"row":24,"column":12},"end":{"row":24,"column":13},"action":"insert","lines":["b"],"id":159}],[{"start":{"row":21,"column":0},"end":{"row":26,"column":3},"action":"remove","lines":["Route::get('/aaaa', function () {","    $a = \"aaaa\";","    $b= \"bbbb\";","    $c= $a+$b","    return view('welcome');","});"],"id":160}],[{"start":{"row":17,"column":0},"end":{"row":22,"column":0},"action":"remove","lines":["Route::get('/test', function () {","    return 'welcome';","});","","",""],"id":161}],[{"start":{"row":17,"column":0},"end":{"row":40,"column":0},"action":"insert","lines":["use App\\Book;","use Illuminate\\Http\\Request;","","/**","* 本のダッシュボード表示 ","*/","Route::get('/', function () {","    //","});","","/**","* 新「本」を追加 ","*/","Route::post('/books', function (Request $request) {","    //","});","","/**","* 本を削除 ","*/","Route::post('/book/{book}', function (Book $book) {","    //","});",""],"id":162}],[{"start":{"row":17,"column":0},"end":{"row":18,"column":28},"action":"remove","lines":["use App\\Book;","use Illuminate\\Http\\Request;"],"id":163}],[{"start":{"row":12,"column":0},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":164}],[{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":165}],[{"start":{"row":13,"column":0},"end":{"row":14,"column":28},"action":"insert","lines":["use App\\Book;","use Illuminate\\Http\\Request;"],"id":166}],[{"start":{"row":16,"column":0},"end":{"row":19,"column":0},"action":"remove","lines":["Route::get('/', function () {","    return view('welcome');","});",""],"id":167}],[{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"remove","lines":["",""],"id":168}],[{"start":{"row":22,"column":6},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":169},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":23,"column":4},"end":{"row":23,"column":5},"action":"insert","lines":["r"],"id":170}],[{"start":{"row":23,"column":5},"end":{"row":23,"column":6},"action":"insert","lines":["e"],"id":171}],[{"start":{"row":23,"column":6},"end":{"row":23,"column":7},"action":"insert","lines":["t"],"id":172}],[{"start":{"row":23,"column":7},"end":{"row":23,"column":8},"action":"insert","lines":["u"],"id":173}],[{"start":{"row":23,"column":8},"end":{"row":23,"column":9},"action":"insert","lines":["r"],"id":174}],[{"start":{"row":23,"column":9},"end":{"row":23,"column":10},"action":"insert","lines":["n"],"id":175}],[{"start":{"row":23,"column":10},"end":{"row":23,"column":11},"action":"insert","lines":[" "],"id":176}],[{"start":{"row":23,"column":11},"end":{"row":23,"column":12},"action":"insert","lines":["v"],"id":177}],[{"start":{"row":23,"column":12},"end":{"row":23,"column":13},"action":"insert","lines":["i"],"id":178}],[{"start":{"row":23,"column":13},"end":{"row":23,"column":14},"action":"insert","lines":["e"],"id":179}],[{"start":{"row":23,"column":14},"end":{"row":23,"column":15},"action":"insert","lines":["w"],"id":180}],[{"start":{"row":23,"column":15},"end":{"row":23,"column":17},"action":"insert","lines":["()"],"id":181}],[{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"insert","lines":[";"],"id":182}],[{"start":{"row":23,"column":16},"end":{"row":23,"column":18},"action":"insert","lines":["\"\""],"id":183}],[{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"insert","lines":["b"],"id":184}],[{"start":{"row":23,"column":18},"end":{"row":23,"column":19},"action":"insert","lines":["o"],"id":185}],[{"start":{"row":23,"column":19},"end":{"row":23,"column":20},"action":"insert","lines":["k"],"id":186}],[{"start":{"row":23,"column":19},"end":{"row":23,"column":20},"action":"remove","lines":["k"],"id":187}],[{"start":{"row":23,"column":19},"end":{"row":23,"column":20},"action":"insert","lines":["o"],"id":188}],[{"start":{"row":23,"column":20},"end":{"row":23,"column":21},"action":"insert","lines":["k"],"id":189}],[{"start":{"row":23,"column":21},"end":{"row":23,"column":22},"action":"insert","lines":["s"],"id":190}],[{"start":{"row":30,"column":6},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":191},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":31,"column":4},"end":{"row":42,"column":29},"action":"insert","lines":["//バリデーション","    $validator = Validator::make($request->all(), [","        'item_name' => 'required|max:255',","    ]);","","    //バリデーション:エラー ","    if ($validator->fails()) {","        return redirect('/')","            ->withInput()","            ->withErrors($validator);","    }","    //以下に登録処理を記述（Eloquentモデル）"],"id":192}],[{"start":{"row":30,"column":5},"end":{"row":30,"column":6},"action":"remove","lines":["/"],"id":193}],[{"start":{"row":30,"column":4},"end":{"row":30,"column":5},"action":"remove","lines":["/"],"id":194}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"remove","lines":["    "],"id":195}],[{"start":{"row":29,"column":51},"end":{"row":30,"column":0},"action":"remove","lines":["",""],"id":196}],[{"start":{"row":32,"column":32},"end":{"row":32,"column":33},"action":"insert","lines":["|"],"id":197}],[{"start":{"row":32,"column":33},"end":{"row":32,"column":34},"action":"insert","lines":["m"],"id":198}],[{"start":{"row":32,"column":34},"end":{"row":32,"column":35},"action":"insert","lines":["i"],"id":199}],[{"start":{"row":32,"column":35},"end":{"row":32,"column":36},"action":"insert","lines":["n"],"id":200}],[{"start":{"row":32,"column":36},"end":{"row":32,"column":37},"action":"insert","lines":[":"],"id":201}],[{"start":{"row":32,"column":37},"end":{"row":32,"column":38},"action":"insert","lines":["3"],"id":202}],[{"start":{"row":32,"column":37},"end":{"row":32,"column":38},"action":"remove","lines":["3"],"id":203}],[{"start":{"row":32,"column":36},"end":{"row":32,"column":37},"action":"remove","lines":[":"],"id":204}],[{"start":{"row":32,"column":35},"end":{"row":32,"column":36},"action":"remove","lines":["n"],"id":205}],[{"start":{"row":32,"column":34},"end":{"row":32,"column":35},"action":"remove","lines":["i"],"id":206}],[{"start":{"row":32,"column":33},"end":{"row":32,"column":34},"action":"remove","lines":["m"],"id":207}],[{"start":{"row":32,"column":32},"end":{"row":32,"column":33},"action":"remove","lines":["|"],"id":208}],[{"start":{"row":41,"column":29},"end":{"row":42,"column":0},"action":"insert","lines":["",""],"id":209},{"start":{"row":42,"column":0},"end":{"row":42,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":42,"column":4},"end":{"row":43,"column":0},"action":"insert","lines":["",""],"id":210},{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":43,"column":4},"end":{"row":44,"column":0},"action":"insert","lines":["",""],"id":211},{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":43,"column":4},"end":{"row":51,"column":0},"action":"insert","lines":["// Eloquent モデル","$books = new Book;","$books->item_name = $request->item_name;","$books->item_number = '1';","$books->item_amount = '1000';","$books->published = '2017-03-07 00:00:00';","$books->save(); ","return redirect('/');",""],"id":212}],[{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "],"id":213},{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"insert","lines":["    "]},{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"insert","lines":["    "]},{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"insert","lines":["    "]},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"insert","lines":["    "]},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "]},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":22,"column":4},"end":{"row":23,"column":25},"action":"remove","lines":["//","    return view(\"books\");"],"id":214},{"start":{"row":22,"column":4},"end":{"row":26,"column":52},"action":"insert","lines":["$books = Book::orderBy('created_at', 'asc')->get();","    return view('books', [","        'books' => $books","    ]);","    //return view('books',compact('books')); //も同じ意味"]}],[{"start":{"row":62,"column":6},"end":{"row":63,"column":0},"action":"insert","lines":["",""],"id":215},{"start":{"row":63,"column":0},"end":{"row":63,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":63,"column":4},"end":{"row":64,"column":30},"action":"insert","lines":[" $book->delete(); //追加","    return redirect('/'); //追加"],"id":216}],[{"start":{"row":64,"column":3},"end":{"row":64,"column":4},"action":"insert","lines":[" "],"id":217}],[{"start":{"row":0,"column":0},"end":{"row":66,"column":0},"action":"remove","lines":["<?php","","/*","|--------------------------------------------------------------------------","| Web Routes","|--------------------------------------------------------------------------","|","| Here is where you can register web routes for your application. These","| routes are loaded by the RouteServiceProvider within a group which","| contains the \"web\" middleware group. Now create something great!","|","*/","","use App\\Book;","use Illuminate\\Http\\Request;","","","","/**","* 本のダッシュボード表示 ","*/","Route::get('/', function () {","    $books = Book::orderBy('created_at', 'asc')->get();","    return view('books', [","        'books' => $books","    ]);","    //return view('books',compact('books')); //も同じ意味","});","","/**","* 新「本」を追加 ","*/","Route::post('/books', function (Request $request) {","    //バリデーション","    $validator = Validator::make($request->all(), [","        'item_name' => 'required|max:255',","    ]);","","    //バリデーション:エラー ","    if ($validator->fails()) {","        return redirect('/')","            ->withInput()","            ->withErrors($validator);","    }","    //以下に登録処理を記述（Eloquentモデル）","    ","    // Eloquent モデル","    $books = new Book;","    $books->item_name = $request->item_name;","    $books->item_number = '1';","    $books->item_amount = '1000';","    $books->published = '2017-03-07 00:00:00';","    $books->save(); ","    return redirect('/');","    ","    ","});","","/**","* 本を削除 ","*/","Route::post('/book/{book}', function (Book $book) {","    //","     $book->delete(); //追加","     return redirect('/'); //追加","});",""],"id":219}],[{"start":{"row":0,"column":0},"end":{"row":89,"column":2},"action":"insert","lines":["<?php","/*","|--------------------------------------------------------------------------","| Web Routes","|--------------------------------------------------------------------------","|","| Here is where you can register web routes for your application. These","| routes are loaded by the RouteServiceProvider within a group which","| contains the \"web\" middleware group. Now create something great!","|","*/","use App\\Book;","use Illuminate\\Http\\Request; ","","/**","* 本のダッシュボード表示 */","Route::get('/', function () {","    $books = Book::orderBy('created_at', 'asc')->get();","    return view('books', [","        'books' => $books","    ]);","});","","/**","* 新「本」を追加 */","Route::post('/books', function (Request $request) {","    //バリデーション","    $validator = Validator::make($request->all(), [","            'item_name' => 'required|min:3|max:255',","            'item_number' => 'required | min:1 | max:3',","            'item_amount' => 'required | max:6',","             'published'   => 'required',","    ]);","    //バリデーション:エラー","    if ($validator->fails()) {","            return redirect('/')","                ->withInput()","                ->withErrors($validator);","    }","    // Eloquent モデル","    $books = new Book;","    $books->item_name =    $request->item_name;","    $books->item_number =  $request->item_number;","    $books->item_amount =  $request->item_amount;","    $books->published =    $request->published;","    $books->save();   //「/」ルートにリダイレクト ","    return redirect('/');","});","","//更新画面","Route::post('/booksedit/{books}', function(Book $books) {","    //{books}id 値を取得 => Book $books id 値の1レコード取得","    return view('booksedit', ['book' => $books]);","});","","//更新処理","Route::post('/books/update', function(Request $request){","    //バリデーション","        $validator = Validator::make($request->all(), [","            'id' => 'required',","            'item_name' => 'required|min:3|max:255',","            'item_number' => 'required|min:1|max:3',","            'item_amount' => 'required|max:6',","            'published' => 'required',","    ]);","    //バリデーション:エラー","        if ($validator->fails()) {","            return redirect('/')","                ->withInput()","                ->withErrors($validator);","    }","    //データ更新","    $books = Book::find($request->id);","    $books->item_name   = $request->item_name;","    $books->item_number = $request->item_number;","    $books->item_amount = $request->item_amount;","    $books->published   = $request->published;","    $books->save();","    return redirect('/');","});","","/**","* 本を削除 */","Route::post('/book/delete/{book}', function (Book $book) {","    $book->delete();","    return redirect('/');","});","","","?>"],"id":220}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":3},"end":{"row":14,"column":3},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1541823792310,"hash":"15bef6b7dbbe35fb367a49389bfd9f710879e55d"}