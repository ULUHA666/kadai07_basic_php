<?php
if (isset($_POST['submit'])) {

    // POSTされたデータをエスケープ処理して変数に格納
    $fullname = htmlentities($_POST['fullname']);
    $mail  = htmlentities($_POST['mail']);
    $gender = htmlentities($_POST['gender']);
    $title = htmlentities($_POST['title']);
    $body = htmlentities($_POST['body']);
} else {
    header("Location:./index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>確認ページ</title>

    <style>
        /* コンテンツを中央に揃える */
        body {
            text-align: center;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }


        /* ボタンのスタイル */
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color:greenyellow;
        }

/* ボタンと画像の間に余白を追加 */
#returnForm {
    margin-top: 50px;
    margin-bottom: 50px; /* ボタンの下に余白を追加 */
}

img {
    margin-top: 40px; /* 画像の上に余白を追加 */
}


    </style>

</head>

<body>
    <h1>確認ページ</h1>
    <div>
        お名前：<?php echo ($fullname); ?>
    </div>
    <div>
        メールアドレス：<?php echo ($mail); ?>
    </div>
    <div>
        性別：<?php echo ($gender); ?>
    </div>
    <div>
        ご用件：<?php echo ($title); ?>
    </div>
    <div>
        お問い合わせ内容：
    </div>
    <div><?php echo (nl2br($body)); ?></div>

<!-- フォーム画面に戻るボタン -->
<form id="returnForm" action="./index.php" style="display: none;">
            <button type="submit">送信</button>
        </form>

        <!-- 戻るボタンを表示するためのスクリプト -->
        <script>
            // ページが読み込まれた後に実行される処理
            window.onload = function() {
                // フォーム画面に戻るボタンを表示
                document.getElementById("returnForm").style.display = "block";

                // 画像を表示
                var img = document.createElement("img");
                img.src = "/php/php06/img/thank.png"; // 画像のURLを指定
                document.body.appendChild(img);
            };
        </script>
    </div>
</body>

</html>
