# FoodServiceSimulation

Recursion のバックエンドプロジェクト4 の課題 FoodServiceSimulation です。

## 技術スタック
PHP 8.1.2

## プロジェクトの概要
レストランでの簡易的な注文システムです。<br>
オブジェクト指向プログラミングのカプセル化、抽象化、継承、ポリモーフィズムを取りいれています。<br>
具体的には、FoodItemクラスとしてレストランのメニューを抽象化したクラスを作り、各メニューはそれを継承しています。すべてのメニューはポリモーフィズムでFoodItemとして扱うことができます。<br>
また人物を抽象化したPersonクラスを、Employeeクラス、Custmerクラスが継承し、さらにEmployeeクラスをChefクラス、Chashierクラスが継承します。<br>
RestaurantはFoodItemをmenuとして持ち、その中からCustomerが食べたいメニューを選んで注文します。<br>
注文を受け取ったChashierは、オーダーをChefに渡してChefがメニューを作ります。<br>
Chashierは請求書を作って表示します。<br>


