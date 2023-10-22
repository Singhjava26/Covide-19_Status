<?php 

error_reporting(0);
// header('Content-Type: application/json');
// $file_pointer = "job_backup.json"; 
// unlink($file_pointer); 
// rename("job.json","job_backup.json");  

// function jobDescriptionScrapper($job_url, $url_name) {

$dom = new domDocument;
$html = file_get_contents('https://www.leehealth.org/health-and-wellness/healthy-news-blog/coronavirus-covid-19');
$dom->loadHTML($html);

// $body = $dom->getElementsByTagName('body')->item(0);
// var_dump($dom->savehtml($body));


    $xpath = new DOMXPath($dom);
    // $tg_link = 'https://t.me/prepdrive';
    // foreach($xpath->query("//*[(@class='table-div')]") as $items){
    //      // $curl = $items->getAttribute("href");
    //     // $eligibility_criteria[] = $dom->savehtml($items); 
    //     $eligibility_criteria[] = str_replace($tg_link,'https://t.me/EnextDrive',$dom->savehtml($items));
    //     $ret['eligibility_criteria'] = $eligibility_criteria;  
    // }

//*[contains(@class, 'view')]//*[contains(@class, 'view-content')]/div/article/div/img

  // https://healthblog.uofmhealth.org/sites/consumer/files/2021-12/Couple-Friends-Touching-Elbows-Masks.jpg

    foreach($xpath->query("//*[(@class='c-media-card-text')]/h3") as $items){
      // $img_url = $items->getAttribute("src");
      $blog_n[] = $items->nodeValue;
      $allBlog['blog_name'] = $blog_n;     
    }

    foreach($xpath->query("//*[(@class='c-media-card-text')]/p") as $items){
      $blog_d[] = $items->nodeValue;
      $allBlog['blog_description'] = $blog_d;      
    }

    foreach($xpath->query("//*[(@class='flex-right')]/a") as $items){
      $img_url[] = $items->getAttribute("href");
      $allBlog['img_url'] = $img_url;      
    }

// $allBlog['blog_name'] = $blog_n;
// $allBlog['blog_description'] = $blog_d;
// $allBlog['img_url'] = $img_url;
#$allBlogFinal[] = $allBlog;
// $allBlog['blog_n'] = $blog;
echo "<pre>";
print_r($allBlog);
echo "<pre>";


exit();
$alllink = array($allBlog['blog_name'],$allBlog['blog_description'],$allBlog['img_url']);


// echo "<pre>";
// print_r($alllink);
// echo "<pre>";


exit();
  foreach ($allBlog['blog_description'] as $key => $value) {

//  echo "<pre>";
// print_r($value['blog_name'][0]);
// echo "<pre>";

echo $value;


//    echo '{"blog_name":'."$key[0]".',<br>'.'"blog_description":'."$key[1]".'"img_url":'."$key[2]".'},'."<br><br>";

     # echo '{"blog_name":'.$value['blog_name'].',<br>'.'blog_description:'.$value['blog_description'].',<br>"img_url":'.$value['img_url'].'},'."<br><br>";
  }
   #echo "]";

#echo json_encode($allBlog);

//     foreach($xpath->query("//*[(@class='c-media-card-text')]/h3") as $items){
//       // $img_url = $items->getAttribute("src");
//       $blog_n[] = $items->nodeValue;
//       $allBlog['blog_name'] = $blog_n;       
//     }

//     foreach($xpath->query("//*[(@class='c-media-card-text')]/p") as $items){
//       $blog_d[] = $items->nodeValue;
//       $allBlog['blog_description'] = $blog_d;       
//     }

//     foreach($xpath->query("//*[(@class='flex-right')]/a") as $items){
//       $img_url[] = $items->getAttribute("href");
//       $allBlog['img_url'] = $img_url;       
//     }

// // $allBlog['blog_n'] = $blog;
// echo "<pre>";
// print_r($allBlog);
// echo "<pre>";

// echo json_encode($allBlog);

//     foreach($xpath->query("//*[(@class='main-div')]/h1") as $items){
//     $job_heading = $items->nodeValue;
//     $ret['job_heading'] = $job_heading; 
//     }

//     foreach($xpath->query("//*[(@class='main-div')]/a") as $items){
//     $job_url = $items->getAttribute("href");
//     $ret['job_url'] = $job_url; 
//     }

//     $murl[$url_name] = $ret;
//     return $string_jsonurl = json_encode($murl);

// }


// function joburl() {

//     $html = file_get_contents('https://www.prepdrive.in/job');
//     $dom = new DOMDocument;
//     @$dom->loadHTML($html);

//     $loop = 60;
//     $c = 1;
//     $xpath = new DOMXPath($dom);

//     foreach($xpath->query("//*[(@class='card_item')]/a") as $items){
//     $job_url[] = $items->getAttribute("href");
//     // $ret['job_url'] = $job_url; 
//     if ($c == $loop) { 
//         break;
//     }
//     $c++;
//     }

//     return $job_url;

//  }



#$job_url = 'https://www.prepdrive.in/job';
// $b = joburl();

// echo "<pre>";
// print_r($b);
// echo "<pre>";

// $a = "";
// $link_rep = '/jobs/';
// for ($i=0; $i <count($b) ; $i++) { 
//     $job_url = 'https://www.prepdrive.in'.$b[$i];
//     $url_name = str_replace($link_rep,'',$b[$i]);
//     $a .= jobDescriptionScrapper($job_url, $url_name);
// }

// $str_rep = '}{';
// $fp = fopen('job.json', 'w');
// fwrite($fp, str_replace($str_rep,',',$a));  
// fclose($fp); 

 ?>