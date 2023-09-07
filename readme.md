# php
    *HTML
    hyper text markup language
    * <시작태그></종료태그>
    *<시작태그/>
        -태그의 종류
    *태그
        -<DOCTYPE html>
        - <HTML>
            -<head>
                - <meta ....
                - <title ....
                - <style ....
                - <script ....
            -body
                - <h1~h6 제목
                - <div 블럭
                - <p 문단
                - <span 인라인
                - <label 인라인
                - <ul~li
                - <ol~li
                -폼관련 태그 
                    - <form
                    - <input
                    - <checkbox
                    - <select
                    - <radio 
            - 기타태그
                - <address
                - <article
                - <section
-----------------------------------------

                * DATABASE - mysql
                - 데이터베이스 생성
                CREATE DATABASE `myshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

                * 테이블 생성
                CREATE TABLE `myshop`.`users` (
                `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT '고유키',
                `name` VARCHAR( 128 ) NOT NULL DEFAULT '' COMMENT '이름',
                `uid` VARCHAR( 30 ) NOT NULL DEFAULT '' COMMENT '유저아이디',
                `upw` VARCHAR( 256 ) NOT NULL DEFAULT '' COMMENT '패스워드',
                `uemail` VARCHAR( 256 ) NOT NULL DEFAULT '' COMMENT '이메일',
                `status` INT UNSIGNED NOT NULL DEFAULT '0' COMMENT '상태'
                ) ENGINE = INNODB COMMENT = '유저테이블';

                * 추가 인서트 insert
                INSERT INTO `myshop`.`users` (
                `id` ,
                `name` ,
                `uid` ,
                `upw` ,
                `uemail` ,
                `status`
                )
                VALUES (
                NULL , '홍길동', 'hong', '1234', 'hong@aa.com', '0'
                );

                *데이터 가져오기 select
                SELECT id, name, uid, upw
                FROM `users`
                LIMIT 0 , 30

                *데이터 수정 UPDATE
                UPDATE `myshop`.`users` SET `name` = '박달재' WHERE `users`.`id` =2 LIMIT 1 ;

                *데이터 삭제 DELETE
                DELETE FROM `mysql`.`user` WHERE `user`. `id` =2 LIMIT=1;

                *데이터베이스 삭제
                DROP DATABASE `myshop`