
<style>
.subject {
  color:#F73A3A;
  font-weight:bold;
  font-size:18px;
}

.sub-subject{
  font-weight:bold;
  font-size:18px;
}

.content {
  font-size:18px;
}

.highlite {
  color:#DBA901;
}
</style>


<p align="center"><img src="./readmeImg/sakkanoheyaHeader.jpg"></p>

<span class='subject'>プロジェクト名｜</span>
<span class='content'>作家の部屋 http://sakkanoheya.com/ </span>

<span class='subject'>開発期間 / 開発人員｜</span>
<span class='content'>2017. 5. 16 ~ 2017. 8. 25( ３ヶ月 ) 　/　 6人</span>

<span class='subject'>開発環境｜</span>
<span class='content'>Laravel(PHP MVCFramwork), JavaScript, jQuery, D3.js,
 	       HTML5, CSS3, Bootstrap
</span>

<span class='subject'>概要｜</span>
<span class='content'>アマチュア小説作家の執筆を手伝うヘルパーツールを備えている
小説共有サイト。<br>
小説の内容は多数の事件で構成され、事件は「人物、事物、場所」の影響で作られる。このサービスでは<span class='highlite'>背景設定部分</span>で事件を定義し、事件に基づいて<span class='highlite'>執筆部分</span>で小説の内容を作成。

<span class='subject'>担当</span><br>
<span class='sub-subject'>1. 背景設定部分の人物相関図（ D3.js )</span><br>
<a src='https://github.com/daegunkor/sakkanoheya/blob/master/app/Http/Controllers/RelationController.php'>CONTROLLER : app/Http/Controllers/RelationController.php</a><br>
<a src='https://github.com/daegunkor/sakkanoheya/tree/master/resources/views/background/relationship'>VIEW : resources/views/background/relationship</a>

<span class='sub-subject'>2. 地図作成ツール（ D3.js )</span><br>
<a src='https://github.com/daegunkor/sakkanoheya/blob/master/app/Http/Controllers/MapController.php'>CONTROLLER : app/Http/Controllers/MapController.php</a><br>
<a src='https://github.com/daegunkor/sakkanoheya/tree/master/resources/views/background/map'>VIEW : resources/views/background/map</a>

<span class='sub-subject'>3. 執筆部分のエディター  ( jQuery )</span><br>
<a src='https://github.com/daegunkor/sakkanoheya/blob/master/app/Http/Controllers/writeNovelController.php'>CONTROLLER : app/Http/Controllers/writeNovelController.php</a><br>
<a src='https://github.com/daegunkor/sakkanoheya/tree/master/resources/views/write_novel'>VIEW : resources/views/write_novel</a>


<span class='subject'>サービスの流れ</span>
<p align="center"><img src="./readmeImg/serviceFlow.jpg"></p>

<span class='subject'>主なサービス</span>
<p align="center"><img src="./readmeImg/main_func.jpg"></p>
