<html>
	<head>
		<title>画像認識</title>
	</head>
	<body>
	<?php
		$trans1 = 0;
		$trans2 = 0;
		if( isset( $_POST['url'] ) ){
			$apikey = 'dccd4a5837cfbb770c8ac3956fa7fb72258d954c';
			$url = $_POST['url'];
			$alchemyurl = 'http://access.alchemyapi.com/calls/url/';
	?>
			<img src='<?php echo $url; ?>'/>
			<p/>
	<?php
			$apiurl1 = $alchemyurl . 'URLGetRankedImageKeywords?apikey=' . $apikey . '&outputMode=json&url=' . urlencode($url) ;
			$text1 = file_get_contents( $apiurl1 );
			$json1 = json_decode( $text1 );

			$trans1 = $json1->totalTransactions;
			$imageKeywords = $json1->imageKeywords;
			if( count( $imageKeywords ) ){
	?>
				<h2>Keywords</h2>
				<table border='1'>
				<tr><th>text</th><th>score</th></tr>
	<?php
    				for( $i = 0; $i < count( $imageKeywords ); $i ++ ){	
					$imageKeyword = $imageKeywords[$i];
					$text = $imageKeyword->text;
					$score = $imageKeyword->score;
	?>
    				<tr><td><?php echo $text; ?></td><td><?php echo $score; ?></td></tr>
	<?php
    				}
	?>
  				</table>
 				 <p/>

	<?php
	      		}
	?>		
	
	<?php
  			$db = NULL;
    		}
	?>
	</body>
</html>
