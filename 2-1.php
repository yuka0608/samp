<?PHP
$greeting ="こんにちわ";
// 　　　　　↑文字列
echo $greeting;



$price=1000;
// 　　↑数字
echo $price;
// 　　↑変数
//echo　したものしか画面にでません

$gree_en="hello";
$greeChugoku="ニーハオ";
echo "<pre>";

var_dump($greeChugoku); // str
var_dump($greeChugoku); // null(未定義)
var_dump(true);  //理論値
var_dump(1>2);  
var_dump($greeting=="こばんわ");  



/*37P変数の型

　var_dump()はデバック用関数→プログラミング中にバグを発生させない､
　ロジックを間違わない｡コードを把握する　ために使います｡
　

　文字列は必ず""か''で囲みます｡
　数字は囲まなくても良い｡
　変数に使える文字　半角　英数(数字は先頭に記入はできない)　_アンダーバー 
　名前はルールを決めてつけましょう*/

