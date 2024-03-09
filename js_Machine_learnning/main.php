<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.min.js"></script>
<script src="https://unpkg.com/ml5@latest/dist/ml5.min.js"></script>
<meta charset="utf-8">
<title>JS Machine Learnning</title>
</head>
<body>
<h1>Component Scanning</h1>
<h2>With MobileNet and ml5.js</h2>
<div id="result"></div>
<img id="image" src="pic1.jpg" width="100%">
<script type="text/javascript">
function componentscan( error,result){
const Component=document.getElementById('result');
if (error) {
element.innerHtml=error;
}else {
let num = results[0].confidence * 100;
element.innerHTML = results[0].label + "<br>Confidence: " + num.toFixed(2) + "%";
}

}
</script>


</body>
</html>
