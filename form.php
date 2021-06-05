<!-- <a href="localhost/form.html">go back</a> -->
<!-- href는 현재 파일의 위치를 기준으로 쓴다? -->
<a href="/form.html">go back</a>
<?php 
// form의 action으로 인해 이 파일로 넘어온 데이터를 가공할 수 있다.
// 쿼리 스트링 형태로 넘어왔음. (get형태)

// title의 이름으로 넘어온 데이터를 echo처리 하겠다.
// 문자열과 바로 합쳐서 쓸 수 있다.

// echo "title" . $_GET['title'] . "</br>";
// echo "describe.." . $_GET['describe'];

// post로 넘어온 값을 처리한다.
file_put_contents("./data/".$_POST['title'],$_POST['describe']);

$a = 0;
while ($a <= 10) {
    file_put_contents("./data/".$_POST['title'].$a,$_POST['describe']);
    $a += 1;
}
?>