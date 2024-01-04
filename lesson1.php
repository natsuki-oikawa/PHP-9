<?php
//下記のようなクラスを作成してください。
// Person
// name  : string
// age   : int
// gender: string
class Person{
    public string $name;
    public int $age;
    public string $gender;

// __construct(name:string, age:int, gender:string)
// 名前、年齢、 性別を受け取ってプロパティを初期化する。
public function __construct($name, $age, $gender){
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
}

// selfIntroduction(): string
// 私の名前は〇〇です。年齢は〇〇歳です。性別は〇〇です。 という文字列を出力する。
public function self_introduction(){
    return '私の名前は'.$this->name."です。年齢は".$this->age."歳です。性別は".$this->gender."です。<br>";
}


// addAge(): void
// 誕生日が来ました。 という文字列を出力し、年齢を＋１する。
public function addAge(){
    $this->age += 2;
    return '誕生日が来ました。<br>';

}
}
    
// クラスができたら適当なインスタンスを作成し、
// 自己紹介→年齢加算→自己紹介の順にメソッドを動かして年齢を確認してください。
$taro = new Person('太郎',20,'男');
$taro->addAge();

echo $taro->self_introduction();