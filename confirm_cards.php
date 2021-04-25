<?php
    require('Card.php');

    $card = new Card();
    
    // 山札の初期化
    $deck = $card->setInitialDeck();

    $player_hands = $card->getHands(2);
    $deeler_hands = $card->getHands(2);
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Blackjack</title>
        <!-- CSSの読み込み -->
        <link rel="stylesheet" href="">
    </head>
    <body class="body">
        <h1 class="text-color">あなたのターンです</h1>

        <?php
            echo "あなたのカードは$player_hands[0]と$player_hands[1]です";
        ?>

        <!-- デバッグ用 あとで消す -->
        <?php
            echo " ディーラーのカードは$deeler_hands[0]と$deeler_hands[1]です";
        ?>

        <p>カードをひきますか？</p>
        <form action='' method='post'>
            <!-- TODO: ここから未実装 -->
            <input type='submit' name='choice' value='カードを追加'>
            <input type='submit' name='choice' value='ステイ'>
            <input type='submit' name='choice' value='はじめから'>
        </form>
    </body>
</html>