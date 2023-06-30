<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson-4</title>
</head>
<body>
<?php 
    //1.

    // function func ($sort, $count) {
    //     if ($sort == 0) {
    //         echo 'word-Length: ' . $count;
    //         return;
    //     };
    //    func ($sort = intval($sort / 10), ++$count);
    // };
    // func (3443, 0);


    //1.1.
    // function reverseNum ($number, $i) {
    //     $numberStr = (string)$number;
    //     $length = strlen ($numberStr);
    //     if ($i >= $length){
    //         return;
    //     }
    //     echo $numberStr[--$length - $i];
    //     reverseNum ($number, ++$i);
    // }
    // reverseNum (657, 0);

    //2.

    // $emailList = [
    //     'example1mail',
    //     'example2@example.com',
    //     'example3@example.com',
    //     'example4@example.com',
    //     'example5saddasdas'
    //   ];
    //   $newmails = array_map (function ($item) {
    //     if (stripos ($item, '@')){
    //       return $item;
    //       //||or echo $item; and we can't write print_r ($newmails);
    //     }
    //   }, $emailList);
    //   print_r ($newmails);


      //3.
      
//     $arr = [0, 30, 45, 60, 90, 120, 135, 150, 180];
//     $sortSinArr = [];
//     $sortCosArr = [];
//     foreach ($arr as $newArr) {
//         $angleInRadia = deg2rad ($newArr);
//         $sindeg = sin($angleInRadia);
//         $cosdeg = cos($angleInRadia);
//         $sortSinArr[] = $sindeg;
//         $sortCosArr[] = $cosdeg;
//         usort ($sortSinArr, function ($a, $b) {
//             return $a - $b;
//         });
//         usort ($sortCosArr, function ($a, $b) {
//             return $a - $b;
//         });
//     }
//     print_r ($sortSinArr);
//     print_r ($sortCosArr);
//    ?>
</body>
</html>