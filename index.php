<?php
  $htmlTitle = 'Test PHP#1';
  $htmlTheme = 'Контрольный срез';
  include('./src/header.php');
  include('./src/function.php');

  //функция автодобавления Echo со вложенным тегом <p>
  //function add($text)
  
  //функция добавляющее заголовок "условие" со вложенным текстом
  //condition($text)
  
  //функция добавления начала и конца DIVа с авто-заголовком по запросу
  //task($arg), $arg = "start" или "end"

  echo '<div class="task">';
  add('Начало работы - 19.11.22 13:00');
  echo '</div>';

  task('start');
  condition('1. Найти максимум и минимум массива');
  //макс
  $arr = [1, 2, 3, 5, 10, 25, 105, 4, 77];
  var_dump ($arr);
  $max = $arr[0];
  foreach ($arr as $num){
    $max < $num ? $max = $num : $max ;
  }
  add ($max);
  //мин
  $min = $arr[0];
  foreach ($arr as $num){
    $min > $num ? $min = $num : $max ;
  }
  add ($min);
  add('Текущее время - 19.11.22 13:03');
  task('end');


  task('start');
  condition('2. Замена четных символов строки на *');
  $str = 'iudfgholijukzderafhglkuderhgulkfj dgter ag ers gers gfers tfwer4gfdersgf';
  add($str);
  for($i = 0; $i < strlen($str); $i += 2){
    $str[$i] = '*';
  }
  add($str);
  add('Текущее время - 19.11.22 13:07');
  task('end');


  task('start');
  condition('3. Дан массив. Найти сумму массива.<br> 
  а. (*) Учесть ситуацию, когда элемент - вложенный массив');
  //сумма циклом
  $arr = [1, 2, 3, 5, 10, 25, 105, 4, 77];
  var_dump ($arr);
  $sum = 0;
  foreach ($arr as $num){
    $sum += $num;
  }
  add($sum);
  //сумма рекурсией
  $arr = [1, [2, 3, 5], [10, 25, [105, [4, 77]]]];
  var_dump ($arr);
	function arrSum($arr) 
  {
		$sum = 0;
		foreach ($arr as $num) {
			if (is_array($num)) {
				$sum += arrSum($num);
			} else {
				$sum += $num;
			}
		}
		
		return $sum;
	}
  add($sum);
  add('Текущее время - 19.11.22 13:13');

  task('end');


  task('start');
  condition('4. Написать функцию, которая выводит массив задом наперед.<br> 
  а. Усовершенствовать массив, не создавая дополнительный массив');
  //функция 
  $arr = [1, 2, 3, 5, 10, 25, 105, 4, 77];
  function reverseArray1($arr)
  {
    $reverseArr = [];
    for ($i = count($arr) - 1; $i >= 0; $i--){
      $reverseArr[$i] = $arr[$i];
    }
    var_dump ($arr);
    echo '<br>';
    var_dump ($reverseArr);
    echo '<br>';
    echo '<br>';
  }
  reverseArray1([1, 2, 3, 5, 10, 25, 105, 4, 77]);
  //без доп массива
  function reverseArray2($arr)
  {
    $reverseArr = [];
    for ($i = 0; $i <= count($arr)/2; $i++){
      $buff = $arr[count($arr) - 1 - $i];
      $arr[count($arr) - 1 - $i] = $arr[$i];
      $arr[$i] = $buff;
    }
    var_dump ($arr);
    echo '<br>';
  }
  reverseArray2([1, 2, 3, 5, 10, 25, 105, 4, 77]);
  add('Текущее время - 19.11.22 13:26');
  task('end');


  task('start');
  condition('(**) 5. Дана квадратная матрица. Написать функцию которая возвращает транспонированную матрицу.');
  $matrix = 
  [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
  ];
  function matrixRev($matr)
  {
    for($i = 0; $i < count($matr); $i++){
      for($j = 0; $j < count($matr[$i]); $j++){
        if($i != $j && ($i < $j)){
            $buf = $matr[$i][$j];
            $matr[$i][$j] = $matr[$j][$i];
            $matr[$j][$i] = $buf;
        }
        echo $matr[$i][$j]."";
      }
    }
  }
  matrixRev($matrix);
  add('Текущее время - 19.11.22 13:34');
  add('К сожалению взято из готового решения...');
  task('end');

  task('start');
  add('ИТОГО: Затрачено времени: 34 мин. Выполнено 4 задания из 5');
  task('end');



  include('./src/footer.php');