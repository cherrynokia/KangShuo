<?php
    //OPEN file;
    $file = "data.json";
    $json = json_decode(file_get_contents($file), true);
    $newWish =$_POST['wish'];


    // Save Data Back
    if ($newWish != null){
        // 把 newWish 加到 dataset 的最後。
        $json["dataset"][] = $newWish;

        // 把檔案儲存回去。
        file_put_contents($file, json_encode($json));

        //回傳一個 0 給 ajax 代表成功
        echo '0';
    } else {
        //回傳一個 1 給 ajax 代表失敗
        echo '1';
    }
?>
