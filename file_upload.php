<?php
//$_FILES['file']['error']==0
if(!empty($_FILES)['file']['tmp_name'])){
    // md5亂碼產生器
    $filename=md5(time());
    // 我先把你的檔案名稱抓出來(不是tmp_name是name!!)
    $subname=$_FILES['file']['name'];
    // explode回傳的會是一個陣列
    $subname=explode(".",$_FILES['file']['name'])[1];

    $newFileName=$filename.".".$subname;

    echo "new=>".$newFileName;
    echo "tmp_name=>".$_FILES['file']['name']."<br>";
    echo "tmp_name=>".$_FILES['file']['name']."<br>";

// 從原本tmp_name的路徑把它搬到我這個目錄下，去加上newfilename去產生新的名稱


}



?>