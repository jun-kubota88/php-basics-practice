<?php
//変数を定義
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;

// 小計を計算
$subtotal = $price * $quantity;

// 税込み価格を計算
$tax_amount = $subtotal * $tax_rate;

// 合計金額を計算
$total = $subtotal + $tax_amount;

//　画面に出力
echo "商品名：" . $product_name . "<br>";
echo "単価：" . $price . "円<br>";
echo "数量：" . $quantity . "個<br>";
echo "小計: " . $subtotal . "円<br>";
echo "消費税(" . ($tax_rate * 100) . "%): " . $tax_amount . "円<br>";
echo "<strong>合計金額：" . $total . "円</strong><br>";
?>
