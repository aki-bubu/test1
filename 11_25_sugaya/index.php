<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Ranking App</title>
</head>
<body>
    <header><h1>プレゼン評価アプリ</h1></header>
    <hr>
        <div class="rank">
            <div class ="panel">
                <form method="POST" action="data_act.php">
                    <div>NAME:<input type="textarea" name="name"></div>
                    <div class="logic">⑴内容
                        <div>
                            <div>①テーマに沿った内容であったか <input type="range" name="logic1" min=1 max=10></div>
                            <div>②話しの"構成は適切だったか <input type="range" name="logic2" min=1 max=10></div>
                            <div>③話しの内容は分かりやすかったか <input type="range" name="logic3" min=1 max=10></div>
                            <div>④正確な内容を伝えていたか <input type="range" name="logic4" min=1 max=10></div>

                        </div>
                    </div>
                    <div class="tool">⑵資料
                        <div>
                            <div>①提示用資料は分かりやすかったか <input type="range" name="tool1" min=1 max=10></div>
                            <div>①提示用資料は分かりやすかったか <input type="range" name="tool1" min=1 max=10></div>
                            <div>②図，表，グラフなどを用いて見やすかったか  <input type="range" name="tool2" min=1 max=10></div>
                            <div>③ツールの操作や活用を習熟していたか <input type="range" name="tool3" min=1 max=10></div>
                            <div>④大事な点が強調されて伝わったか <input type="range" name="tool4" min=1 max=10></div>
                        </div>
                    </div>
                    <div class="talk">⑶話し方
                        <div>
                            <div>①声の大きさは適当であったか <input type="range" name="talk1" min=1 max=10></div>
                            <div>②話し方のスピードは適切であったか<input type="range" name="talk2" min=1 max=10></div>
                            <div>③明瞭でメリハリのある話し方であったか <input type="range" name="talk3" min=1 max=10></div>
                            <div>④間の取り方は適切であったか <input type="range" name="talk4" min=1 max=10></div> 

                        </div>
                    </div>
                    <div class="atti">⑷動き
                        <div>
                            <div>①ボディランゲージは適切だったか <input type="range" name="atti1" min=1 max=10></div>
                            <div>②アイコンタクトは適切であったか<input type="range" name="atti2" min=1 max=10></div>
                            <div>③熱意は伝わったか <input type="range" name="atti3" min=1 max=10></div>
                        </div>
                    </div>
                    <input type="submit">
                    <a href="result.php">結果へ</a>
                     
                 </form>    
            </div>         
        </div>
     <hr>
     <script src="js/main.js"></script>
</body>
</html>