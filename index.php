<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>modphp</title>
    </head>
    <body>
        <div class="container">
            <div class="title_text">Гибкое сравнение в PHP</div>
            <div class="mission">
                <div class="col_line">
                    <div class="col_1">А</div>
                    <div class="col_1">B</div>
                    <div class="col_1">!А</div>
                    <div class="col_2">A || B</div>
                    <div class="col_2">A && B</div>
                    <div class="col_2">A xor B</div>
                </div>
                <div class="col_line">
                    <div class="col_1">0</div>
                    <div class="col_1">0</div>
                    <div class="col_1">
                    <?php $a=0; echo ! $a?>
                    </div>
                    <div class="col_2">
                    <?php $a=0; $b=0; echo $a or $b ?>
                    </div>
                    <div class="col_2">
                    <?php $a=0; $b=0; echo $a and $b ?>
                    </div>
                    <div class="col_2">
                    <?php $a=0; $b=0; echo $a xor $b?>
                    </div>
                </div>
                <div class="col_line">
                    <div class="col_1">0</div>
                    <div class="col_1">1</div>
                    <div class="col_1">
                    <?php $a=0; echo ! $a?>
                    </div>
                    <div class="col_2">
                    <?php $a=0; $b=1; echo $a or $b ?>
                    </div>
                    <div class="col_2">
                    <?php $a=0; $b=1; echo $a and $b ?>
                    </div>
                    <div class="col_2">
                    <?php $a=0; $b=1; echo $a xor $b ?>
                    </div>
                </div>
                <div class="col_line">
                    <div class="col_1">1</div>
                    <div class="col_1">0</div>
                    <div class="col_1">
                    <?php $a=1; echo ! $a?>
                    </div>
                    <div class="col_2">
                    <?php $a=1; $b=0; echo $a or $b ?>
                    </div>
                    <div class="col_2">
                    <?php $a=1; $b=0; echo $a and $b ?>
                    </div>
                    <div class="col_2">
                    <?php $a=1; $b=0; echo $a xor $b ?>
                    </div>
                </div>
                <div class="col_line">
                    <div class="col_1">1</div>
                    <div class="col_1">1</div>
                    <div class="col_1">
                    <?php $a=1; echo ! $a?>
                    </div>
                    <div class="col_2">
                    <?php $a=1; $b=1; echo $a or $b ?>
                    </div>
                    <div class="col_2">
                    <?php $a=1; $b=1; echo $a and $b ?>
                    </div>
                    <div class="col_2">
                    <?php $a=1; $b=1; echo $a xor $b; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="title_text">Жёсткое сравнение в PHP</div>
            <div class="mission">
                <div class="col_line">
                    <div class="col_1"></div>
                    <div class="col_1">true</div>
                    <div class="col_1">false</div>
                    <div class="col_1">1</div>
                    <div class="col_1">0</div>
                    <div class="col_1">-1</div>
                    <div class="col_1">"1"</div>
                    <div class="col_1">null</div>
                    <div class="col_1">"php"</div>
                </div>
                <div class="col_line">
                    <div class="col_1">true</div>
                    <div class="col_1">
                        <?php if('true' === true) {
                        echo "'false'";
                        } else {
                        echo "'true'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('true' === false) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('true' === 1) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('true' === 0) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('true' === -1) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('true' === "1") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('true' === null) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('true' === "php") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                </div>
                <div class="col_line">
                    <div class="col_1">false</div>
                    <div class="col_1">
                        <?php if('false' === "true") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('false' === "false") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('false' === 1) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('false' === 0) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('false' === -1) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('false' === "1") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('false' === "null") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('false' === "php") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                </div>
                <div class="col_line">
                    <div class="col_1">1</div>
                    <div class="col_1">
                        <?php if('1' === "true") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('1' === "false") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if(1 === 1) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('1' === 0) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('1' === -1) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('1' === "1") {
                        echo "'false'";
                        } else {
                        echo "'true'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('1' === "null") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('1' === "php") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                </div>
                <div class="col_line">
                    <div class="col_1">0</div>
                    <div class="col_1">
                        <?php if('0' === "true") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('0' === "false") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if(0 === 1) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('0' === 0) {
                        echo "'false'";
                        } else {
                        echo "'true'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('0' === -1) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('0' === "1") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('0' === "null") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('0' === "php") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                </div>
                <div class="col_line">
                    <div class="col_1">-1</div>
                    <div class="col_1">
                        <?php if('-1' === "true") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('-1' === "false") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if(-1 === 1) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('-1' === 0) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('-1' === -1) {
                        echo "'false'";
                        } else {
                        echo "'true'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('-1' === "1") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('-1' === "null") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('-1' === "php") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                </div>
                <div class="col_line">
                    <div class="col_1">"1"</div>
                    <div class="col_1">
                        <?php if('-1' === "true") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if("1" === "false") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if("1" === 1) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if("1" === 0) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if("1" === -1) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if("1" === "1") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if("1" === "null") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if("1" === "php") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                </div>
                <div class="col_line">
                    <div class="col_1">null</div>
                    <div class="col_1">
                        <?php if('null' === "true") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('null' === "false") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('null' === 1) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('null' === 0) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('null' === -1) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('null' === "1") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('null' === "null") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if('null' === "php") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                </div>
                <div class="col_line">
                    <div class="col_1">"php"</div>
                    <div class="col_1">
                        <?php if("php" === "true") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if("php" === "false") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if("php" === 1) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if("php" === 0) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if("php" === -1) {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if("php" === "1") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if("php" === "null") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                    <div class="col_1">
                        <?php if("php" === "php") {
                        echo "'true'";
                        } else {
                        echo "'false'";
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>