<?php
/*
$url = 'http://mymovieapi.com/?';
$data = array('title' => 'the fifth element');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = stream_get_contents($url, false, $context);

var_dump($result);
*/
?>

<html>
<body>
<?php
echo "<form action='/backend_comments/' method='post'>
  <textarea name='heading' id='heading'></textarea><br/>
  Comment:<br />
  <textarea name='comment' id='comment' /></textarea><br />
  <input type='hidden' name='imdbID' id='imdbID' value='1234567'/>
  <select name='rating' id='rating'>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
  </select>
  <input type='submit' value='Submit' />
  </form>"
?>
</body>
</html>
