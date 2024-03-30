<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>お問い合わせ</title>
    <script>
        function validateForm() {
            var checkBox = document.getElementById("privacy-policy-agreement");
            var submitButton = document.getElementById("submit-btn");
            if (!checkBox.checked) {
                alert("個人情報保護ポリシーに同意してください。");
                return false; // フォームが送信されないようにする
            }
            return true; // フォームが送信される
        }
    </script>

</head>

<body>

    <form method="POST" action="./confirm.php">
        <div>
            <img src="/php/php06/img/toi.png" alt="">
            <div><label for="fullname">お名前</label></div>
            <div><input id="fullname" type="text" name="fullname"></div>
        </div>
        <div>
            <div><label for="mail">メールアドレス</label></div>
            <div><input id="mail" type="email" name="mail"></div>
        </div>
        <div>
            <div><label for="phone">電話番号</label></div>
            <div><input id="phone" type="phone" name="phone"></div>
        </div>

        <div>
    <span>性別</span>
    <div class="gender-options">
        <input id="male" name="gender" type="radio" value="男性" checked><label for="male">男性</label>
        <input id="female" name="gender" type="radio" value="女性"><label for="female">女性</label>
    </div>
</div>
        </div>
        <div>
            <div><label for="title">ご用件</label></div>
            <div>
                <select id="title" name="title">
                    <option value="お問合せ">お問合せ</option>
                    <option value="再入荷希望">再入荷希望</option>
                    <option value="その他">その他</option>
                </select>
            </div>
        </div>
        <div>
            <div><label for="body">お問い合わせ内容</label></div>
            <div><textarea id="body" name="body" cols="30" rows="10"></textarea></div>
        </div>
<div>
    <label for="privacy-policy">個人情報保護ポリシー</label>
</div>
<div>
    <textarea id="privacy-policy" name="privacy-policy" cols="30" rows="10" readonly>
利用者の皆様が安心してご利用頂けるよう最低限の個人情報を提供頂いております。
ご提供頂いた個人情報の保護について最大限の注意を払っています。
個人情報保護についての考え方は以下の通りです。

■ 弊社では会員様により登録された個人及び団体や法人の情報については、最先端の機能やサービスを開発・提供するためにのみ利用し、 会員個人情報の保護に細心の注意を払うものとします。
■ このプライバシーポリシーの適用範囲は、弊社で提供されるサービスのみであります。 (範囲は下記、第1項に規定)
■ 本規約に明記された場合を除き、目的以外の利用は致しません。(目的は下記、第2項に規定)
■ 本規約に明記された場合を除き、第三者への開示は致しません。(管理は下記、第2項に規定)
■ その他本規約に規定された方法での適切な管理を定期的に行います。
■利用者の許可なくして、プライバシーポリシーの変更をすることができます。 
個人情報取得内容の変更・利用方法の変更・開示内容の変更等をした際には、 利用者がその内容を知ることができるよう、弊社ホームページのお知らせに公開し、 このプライバシーポリシーに反映することにより通知致します。

1．プライバシーポリシーについての考え方が適用される範囲
■ プライバシーポリシーについての考え方は、 会員がサービスを利用される場合に適用されます。
■ 会員がサービスを利用される際に収集される個人情報は、個人情報保護についての考え方に従って管理されます。
■ 個人情報保護考え方は、直接提供される サービスのみであり、リンク等でつながった他の組織・会社等のサービスは適用範囲外となります。
■ サービスのご利用は、利用者の責任において行われるものとします。
■ 弊社のホームページ及び当ホームページにリンクが設定されている他のホームページから 取得された各種情報の利用によって生じたあらゆる損害に関して、一切の責任を負いません。

2．個人情報の収集と利用
会員の皆様に最先端の機能やサービスを開発・提供するために、 会員について幾つかの個人情報が必要となります。
■ ショップのID・パスワードは利用者ご自身の責任において管理をお願い致します。 - パスワードは定期的に変更し、他人が類推しやすいような名前や生年月日、 電話番号など は避けることをお勧め致します。 - また、知人・友人などであっても開示・貸与・譲渡しないで下さい。 - お問合せのメールや弊社のホームページ上の Q&Aにはパスワードを書き込まないようお願い致します。
■ 収集された個人情報はサービスを提供するために必要な限度においてのみ利用し、 次の場合を除き、いかなる第三者にも提供致しません。
■ 会員の同意がある場合 - 会員から個人情報の利用に関する同意を求めるための電子メールを送付する場合 - あらかじめ弊社と機密保持契約を締結している企業（例えば、業務委託先） 等に必要な限度において開示する場合 - 会員に対し、弊社、または、弊社の業務提携先等の広告宣伝のための電子メール、 ダイレクトメールを送付する場合 - 会員の行為が、方針・告知の利用規約等に違反している場合に、他の会員、第三者または弊社の権利、財産を保護するために必要と認められる場合 - 裁判所、行政機関の命令等、その他法律の定めに従って個人情報の開示を求められた場合、 または犯罪の捜査、第三　者に対する権利侵害の排除若しくはその予防、 その他これに準ずる必要性ある場合
■ 会員は、弊社に対し、個人情報を上に定める方法で利用することにつきあらかじめ同意するものとし、 異議を述べないものとします。
■ また、次の様な場合、弊社のビジネスパートナーと会員の個人情報を 共有する事があります。 - 会員向け特別サービスなど、事業的な理由がある場合。 この場合、情報を提供する前に会員の同意を求め、同意無しでは提供致しません。 - 統計資料作成、市場調査、データ分析などを行う場合。 この場合、特定個人を判別することができない様に加工された情報だけを提供致します。

3. 問い合わせ先
ここに示した個人情報についての考え方についてご不明な点などございましたら次の アドレスまで電子メールでお問い合わせください。

メールアドレス：xxxx666@gmail.com

    </textarea>
</div>

<input type="checkbox" id="privacy-policy-agreement" name="privacy-policy-agreement" required>
<label for="privacy-policy-agreement">個人情報保護ポリシーに同意します。</label>

        <div>
            <button type="submit" name="submit">確認</button>
        </div>
    </form>
</body>

</html>
