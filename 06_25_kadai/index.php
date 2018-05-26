<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>チューター評価アプリ</title>
</head>
<body>
<article>
    <section>
        
        <h1>好きな言語評価アプリ</h1>
        <h2>あなたの視点でプログラミング言語を評価してください。</h2>
        <form action="write.php" method="get">
        NAME: <input type="text" name="name">
            <h2>HTML</h2>
            <p>かんたん！</p>
            <p>思わない<input type="range" name="eva1" value="0" min="0" max="50">思う！</p>
            <p>イカす！</p>
            <p>思わない<input type="range" name="eva2" value="0" min="0" max="50">思う！</p>
            <p>言葉にできない！</p>
            <p>思わない <input type="range" name="eva3" value="0" min="0" max="50">思う！</p>
            
            
            <h2>Javascript</h2>
            <p>かんたん！</p>
            <p>思わない<input type="range" name="eva4" value="0" min="0" max="50">思う！</p>
            <p>イカす！</p>
            <p>思わない<input type="range" name="eva5" value="0" min="0" max="50">思う！</p>
            <p>言葉にできない！</p>
            <p>思わない<input type="range" name="eva6" value="0" min="0" max="50">思う！</p>
            <input type="submit" value="send">
    
        </form>
    </section>
</article>   
 

        <!-- <h1>好きな言語評価アプリ</h1>
        <h2>あなたの視点でプログラミング言語を評価してください。</h2>
        <article>
            
                <section id="nanba">
                    <h2>HTML</HTML></h2>
                    <form method="get"></form>
                        <div>かんたん！</div>
                        
                        <input type="range" name="eva" value="0" min="0" max="50">
                        <p><input  action="write.php" type="submit" value="send"></p>
                        <!-- <input type="text" name="test" name="n_eva" size=20> -->
                     <!-- </form>  --> 
                        
                        <!-- <div>しゃべりが面白い！</div>
                        <input type="range" name="evaluate" value="0" min="0" max="10">
                        <div>技術力がハンパない！</div>
                        <input type="range" name="evaluate" value="0" min="0" max="10">
                        <div>元気をもらえる！</div>
                        <input type="range" name="evaluate" value="0" min="0" max="10">
                        <p><input type="submit" value="send"></p>
                    </form> 
                </section>

                <section id="yagi">
                    <h2>八木さん</h2>
                    <form action="write.php" method="GET" name="y_eva" ></form>
                        <div>教え方がうまい！</div>
                        <input type="range" name="evaluate" value="0" min="0" max="10">
                        <div>しゃべりが面白い！</div>
                        <input type="range" name="evaluate" value="0" min="0" max="10">
                        <div>技術力がハンパない！</div>
                        <input type="range" name="evaluate" value="0" min="0" max="10">
                        <div>元気をもらえる！</div>
                        <input type="range" name="evaluate" value="0" min="0" max="10">
                    </form> 
                <section id="kimura">
                    <h2>木村さん</h2>
                    <form action="write.php" method="POST" name="k_eva" ></form>
                        <div>教え方がうまい！</div>
                        <input type="range" name="evaluate" value="0" min="0" max="10">
                        <div>しゃべりが面白い！</div>
                        <input type="range" name="evaluate" value="0" min="0" max="10">
                        <div>技術力がハンパない！</div>
                        <input type="range" name="evaluate" value="0" min="0" max="10">
                        <div>元気をもらえる！</div>
                        <input type="range" name="evaluate" value="0" min="0" max="10">
                //     </form>　-->  
                
             
                <!-- </section>
        </article> -->



    
</body>
</html>