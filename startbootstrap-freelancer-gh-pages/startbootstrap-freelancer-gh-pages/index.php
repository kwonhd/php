<!DOCTYPE html>

<html>
    <head>
        <meta charset = "utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<style type="text/css">
    .row div{border:1px solid grey}
    .redbox{background-color: red;}
</style>


<?
// 단열주석
/* 다열주석 */
// 변수 $ 변수명
// 문자열 합치기는 . 이다
// 반복문 for(증감변수초기화; ,증감변수조건; , 증감){코드블럭} while 

for($i=0;$i<6;$i++){
    $a = 'h3';
    print('<'.$a.'>'.$i.'안녕하세요</'.$a.'>');
}

?>
    </head>

        <div class="row">
            <?php
            for($i=0;$i<3;$i++){
                $s='<div class = "col-lg-4"><h1>.col-lg-4</h1></div>';
                print($s);
            }
            ?>
        </div>

        <div class="row">
            <?php
            for($i=0;$i<6;$i++){
                $f='<div class = "col-lg-2"><h1>.col-lg-2</h1></div>';
                print($f);
            }
            ?>
        </div>

        <div class="row">
            <div class="col-lg-2"><h1>.col-lg-2</h1></div>
            <div class="col-lg-2"><h1>.col-lg-2</h1></div>
            <div class="col-lg-2"><h1>.col-lg-2</h1></div>
            <div class="col-lg-2"><h1>.col-lg-2</h1></div>
            <div class="col-lg-2"><h1>.col-lg-2</h1></div>
            <div class="col-lg-2"><h1>.col-lg-2</h1></div>
        </div>

        <div class = 'row'>
            <?php
            for($i=0;$i<12;$i++){
                $g = '<div class = "col-lg-1"><h1>.col-lg-1</h1> </div>';
                print($g);
            }
            ?>
        </div>

        <div class="row">
            <div class="col-lg-8"><h1>.col-lg-8</h1></div>
            <div class="col-lg-4"><h1>.col-lg-4</h1></div>
        </div>

        <div class="row">
            <div class="col-sm-8"><h1>.col-sm-8</h1></div>
            <div class="col-sm-4"><h1>.col-sm-4</h1></div>
        </div>

        <div class="row">
            <div class="col-md-6"><h1>.col-md-6</h1></div>
            <div class="col-md-6"><h1>.col-md-6</h1></div>
        </div>

        <div class="row">
          .col-md-8
          <div class="row">
            <div class="col-md-6">.col-md-6</div>
            <div class="col-md-6">.col-md-6</div>
          </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        </div>

        <div class="row">
            <div class="col-sm-5 col-md-6">.col-sm-5 .col-md-6</div>
            <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">.col-sm-5 .col-sm-offset-2 .col-md-6 .col-md-offset-0</div>
        </div>

        <div class="row">
        <div class="col-xs-6 col-sm-3">
          .col-xs-6 .col-sm-3
          <br>
          Resize your viewport or check it out on your phone for an example.
        </div>

        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
            <div class="clearfix visible-xs"></div>
            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
        </div>

        <div class="row">
        <?php
        for ($i = 0; $i < 4; $i++) {
        if ($i % 2 == 0) {
            $s = '<div class="col-md-2"><h1>.col-md-4</h1></div>';
            print($s);
        } else {
            // 다른 조건에 따라 실행할 코드
            $s = '<div class="col-md-4"><h1>다른 내용</h1></div>';
            print($s);
        }
        }
        ?>
        </div>


        <div class="row">
            <?php
            for ($i = 1; $i <= 12; $i++) {
                if ($i % 3 == 0) {
                    $s = '<div class="col-md-1"><h1>.col-md-4 조건 1</h1></div>';
                } elseif ($i % 3 == 1) {
                    $s = '<div class="col-md-1"><h1>.col-md-4 조건 2</h1></div>';
                } else {
                    $s = '<div class="col-md-1"><h1>.col-md-4 조건 3</h1></div>';
                }
                print($s);
            }
            ?>
        </div>

        <div class="row">
            <?php
            for ($i = 1; $i <= 4; $i++) { // 외부 루프
                echo '<div class="col-md-3">'; // 외부 루프에서 한 행을 시작합니다.

                for ($j = 1; $j <= 3; $j++) { // 내부 루프
                    echo '<div class="col-md-4"><h1>.col-md-4</h1></div>'; // 내부 루프에서 각 컬럼 생성
                }

                echo '</div>'; // 외부 루프에서 한 행을 닫습니다.
            }
            ?>
        </div>

        <?php
        // function 함수명( 매개변수){코드블럭;return 변수명}
        function makeBcol($wkan=3){
            //$wkan=3; // 나누고 싶은칸수
            $total=12; // 부트스트랩 전체컬럼수
            /* php 수학 내장함수  */
            //$cNo=ceil($total/$wkan); // 올림 클래스 숫자
            //$cNo=floor($total/$wkan); // 내림

            $cNo=round($total/$wkan); // 내림
            $cnt=$total/$cNo; // 반복숫자
            print('<div class="row">'."\n");
            for($i=0;$i<$cnt;$i++){
                if($i %2==1){
                    $addClass='redbox';
                }else{
                    $addClass='';
                }
                $s='<div class="col-lg-'.$cNo.' '.$addClass.'"><h1>.col-md-'.$cNo.'('.$cnt.')</h1></div>'."\n";
                print($s);
            } //2nd for
            print('</div>'."\n");
        }

        for($kan=2;$kan<7;$kan++){
            makeBcol($kan);
        }//1st for
        $score=75;
        $score=10*floor($score/10);
        print($score);
        switch($score){
            case 90:
                print('수');
                break;
            case 80:
                print('우');
                break;
            case 70:
                print('미');
                break;
            default:
                print('낙제');             
        }
        



        function makeHr($title="개별처리"){
            print('<hr>');
            print('<h1>'.$title.'</h1>');
            print('<hr>');
        }
        makeHr();

        makeBcol(2);
        makeBcol(3);
        makeBcol(4);
        makeBcol(3);
        makeHr('사다리만들기');
        $kn=1;


        function grid1($cNo=1,$addClass='redbox'){
            $other=12-$cNo;
            $s='<div class="row">';
            $s.='<div class="col-lg-'.$cNo.' "><h1>.col-md-'.$cNo.'</h1></div>'."\n";
            $s.='<div class="col-lg-'.$other.' '.$addClass.'"><h1>.col-md-'.$other.'</h1></div>'."\n";
            $s.='</div>';
            print($s);
        }
        for ($i=11;$i>0;$i--){
            grid1($i);
        }



        makeHr('단순배열');
        /* 단순 배열 */
        $arr=array(1,2,'국어','수학');
        for($i=0;$i<count($arr);$i++){
            print('<li>인덱스('.$i.'):'.$arr[$i].'</li>');
        }
        foreach($arr as $a){
            print('<li>'.$a.'</li>');
        }
        makeHr('연관배열');
        /* 연관 배열 key - value */
        $arr=array(1=>'국어',2=>'수학',5=>'영어','6'=>'과학');
        for($i=0;$i<count($arr);$i++){
            print('<li>인덱스('.$i.'):'.$arr[$i].'</li>');
        }
        foreach($arr as $k=>$v){
            print('<li>'.$k.':'.$v.'</li>');
        }
        $score=75;
        $score=10*floor($score/10);
        print($score);
        switch($score){
            case 90:
                print('수');
                break;
            case 80:
                print('우');
                break;
            case 70:
                print('미');
                break;
            default:
                print('낙제');             
        }




        ?>

    </body>
</html>
