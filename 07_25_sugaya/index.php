<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>起業する？</title>
</head>
<body>
<section>
        <h1>起業家判定アプリ</h1>
        <h2>あなたが起業すべきかどうか判定します。</h2>
        <form action="write.php" method="post">
        
            <h2>名前</h2>
            <p><input type="text" name="name"></p>
            <h2>年齢</h2>
            <p><input type="number" name="age"></p>
            <h2>年収</h2>
            <p>
                <input type="radio" name="income" value=1 checked="checked">300万以下
                <input type="radio" name="income" value=2>300万〜400万
                <input type="radio" name="income" value=3>400万〜600万
                <input type="radio" name="income" value=4>600万〜800万
                <input type="radio" name="income" value=5>800万〜1000万
            </p>
            <h2>職業</h2>
            <p>
                <input type="radio" name="role" value="営業" checked="checked">営業
                <input type="radio" name="role" value="ITエンジニア">ITエンジニア
                <input type="radio" name="role" value="事務">事務
                <input type="radio" name="role" value="コンサルティング">コンサルティング
                <input type="radio" name="role" value="その他">その他
            </p>
            <h2>役職</h2>
            <p><input type="checkbox" name="role"></p>
         
        </form>


</body>
</html>