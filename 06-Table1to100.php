<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body>
        <table class="table bordered">
            <!-- с двата вложени цикъла си създавам решетка 10 на 10 -->
            <?php for ($i = 0; $i < 10; $i++) { ?>
                <!--извеждам нов ред в таблицата -->
                <tr>
                    <?php for ($j = 0; $j <= 10; $j++) { ?>
                    <!-- при всяко преминаване през втория фор цикъл отварям и затварям клетка с <td></td>
                    и поставям условие, което да визуализира числата от 1 до 100 при увеличаване на променливите i и j
                    
                    тук ми отне много време да направя редовете в таблицата, но така и не успях, предполагам пропускам нещо много дребно, но не мога да го намеря кое е
                    затова закъснях и със срока...
                    можех да го копирам от задачите които решавахме, но ми е по-важно да разбера кое бъркам...
                    -->
                    <td> <?php echo($j + ($i * 10)) ?> </td>
                  <?php  } ?>       
                </tr>
            <?php } ?>
        </table>
    </body>
</html>
