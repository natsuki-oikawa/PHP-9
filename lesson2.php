<?php
// 下記のようにlesson1のファイルをインポートしてください。
// (他のファイルを参照する関数はいくつかあるので調べてください。)
// (lesson1の文字列がそのまま出力されてしまっていても大丈夫とします。)
include('lesson1.php');

// 下記のクラスを作成してください。

// Patient 
// lesson1からPersonを継承
class Patient extends Person{

// height: float 身長（ｍ）private
// weight: float 体重 (kg) private
    private float $height;
    private float $weight;

// __construct(name: string, age:int, gender: string, height: float, weight: float)
// 名前、年齢、性別、身長、体重を受け取り初期化する。
function __construct($name, $age, $gender,$height,$weight){
    parent:: __construct($name, $age, $gender);
    $this->height = $height;
    $this->weight = $weight;
}

// calculateStandardWeight() :float
// 平均体重を返す （身長 × 身長 × 22)
public function calculateStandardWeight(){
    $avgweight = $this->height * $this->height * 22;
    return $avgweight;
}

// getHeight()
// 身長を返す
public function getHeight(){
    $this->height;
    return $this->weight;
}
// getWeight()
// 体重を返す
public function getWeight(){
    $this->weight;
    return $this->weight;
}

// クラスが完成したら適当なインスタンスを生成し、
// それぞれの関数を使用して下記のフォーマットで出力してください。

// 〇〇さんの身長は〇〇mなので平均体重は〇〇kgです。 現在の体重は〇〇kgです。
public function self(){
    return $this->name.'さんの身長は'.$this->height."mなので平均体重は".$this->calculateStandardWeight()."kgです。 現在の体重は".$this->weight."kgです。<br>";
}
}

$taro = new Patient('太郎','20','男','1.75','60');

echo $taro->self();

?>