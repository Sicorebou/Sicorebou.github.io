<?php

$ch = curl_init();
$url="https://api.search.nicovideo.jp/api/v2/snapshot/video/contents/search?q=%E5%88%9D%E9%9F%B3%E3%83%9F%E3%82%AF&targets=title&fields=contentId,title,viewCounter&filters[viewCounter][gte]=10000&_sort=-viewCounter&_offset=0&_limit=3&_context=apiguide";
/* curlオプションを設定する */
curl_setopt($ch, CURLOPT_URL, $url);

/* curlを実行する */
curl_exec($ch);

/* curlセッションを終了する */
curl_close($ch);
?>

