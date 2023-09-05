<!doctype html>
<html>
    <head><!--f 주석 전체적 페이지에 영향을 주는 요소-->
        <meta charset = "utf-8"/>
        <title> My php </title>
        <!--CSS 문법 -->
        <style type="text/css">
        /*CSS 주석 cascading style sheet 주석 -> 스크래이핑 CSS selector */

        /*태크 셀렉터 h1 태그 찾아서 모두 red 컬러로 바꿀 것*/
        h1{
            color : red;
        }
        ul{border: 3px dotted red;}
        /* 아이디 셀렉터 # */
        #hello{
            border : 3px solid blue;
        }
        /* 클래스 셀렉터 .  */
        .textGreen{
            color:green;
        }
        /*자손 셀렉터*/
        .child span{color:orange;}

        /*자식 셀렉터*/
        .child> span{border:1px solid grey;}

        form{
            border:2px dashed cyan;
        }


        </style>
        <!-- javascript 영역 -->
        <script>
            // 자바스크립트 한줄 주석
            /* 자바스크립트 블럭 주석 */

        </script>        

    </head>
    <body><!-- 페이지 본문 -->
        <div>
            <h1>hello html</h1>
            <h2 class = "textGreen">h2<h2>
            <h3 class = "textGreen">h3<h3>
            <h4>...<h4>
            <h5>h5<h5>
            <h6>h6<h6>
            <h7>h7<h7><!--사용자 정의태그-->
        </div>
        <p>안녕하세요</p>
        <p>여러분</p>
        <div id="hello">여러분 반갑습니다.</div>
        <div class = "ul">
            <ul><!-- 순서없는 리스트-->
                <li>짜장면</li>
                <li>짬뽕</li>
                <li>탕수육</li>
            </ul>
            <ol><!-- 순서있는 리스트-->
                <li>서울</li>
                <li>도쿄</li>
                <li>뉴욕</li>                
            </ol>
            <div class = "child">
                날씨가<span>매우</span>덥습니다.
                더운날 먹는 음식
                <ul>
                    <li><span>매운</span>냉면</li>
                    <li><span>시원한</span>국수</li>
                </ul>
            </div>
        </div>
        <form action="go.php">
            <h2>가입하기</h2>
            <ul>
                <li><input name = "uname" type="text" id = "uname"></li>
                <li><label for="">광고 메시지 받기</label>
                    <input type="checkbox" name = "sendm" id = "send" value = "checked">
                </li>
                <li>
                    <label for="">강의 수료 여부</label>
                    <input type="checkbox" name = "study" value = "1">
                </li>
                <li>
                    <label for="">남성</label>
                    <input type="radio" name = "gender" value = "M" checked>
                    <label for="">여성</label>
                    <input type="radio" name = "gender" value = "F">
                </li>

            </ul>
            <input type="text" name= "hello" placeholder = "인사말을 적으세요">
            <br>
            <input type="submit" value = "전송하기">
        </form>
    </body>
</html>