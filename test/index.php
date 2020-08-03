<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Тег DIV</title>
  <style type="text/css">
   .block_1 { 
    width: 200px; 
    background: #ccc;
    padding: 5px;
    padding-right: 20px; 
    border: solid 1px black; 
    float: left;
   }
   .block2 { 
    width: 200px; 
    background: #fc0; 
/*
    padding: 5px; 
    border: solid 1px black; 
*/
    float: left; 
    position: relative; 
    top: 40px; 
    left: -70px; 
/*
    z-index: -5;
*/
   }
.block3 { 
    width: 200px; 
    background: #fc0; 
    padding: 5px; 
    border: solid 1px black; 
    float: left; 
    position: absolute; 
    top: 50px; 
    left: 400px; 
   }

  </style> 
 </head>
 <body>

  <div class="block_1" id = "block_1">
   </div>
   
<div class="block2" id = "block2">
</div>

   <div class="block3">Ut wisis enim ad minim veniam, quis nostrud 
   exerci tution ullamcorper suscipit lobortis nisl ut aliquip ex 
   ea commodo consequat.</div> 


 </body>
</html>

<script>

ftc('block_1.php','block_1');

function ftc(fname, id)
{
        console.log('fname');
        console.log(fname);
	fetch(fname)
    .then(function (response) {
        switch (response.status) {
            // status "OK"
            case 200:
                return response.text();
            // status "Not Found"
            case 404:
                throw response;
        }
    })
    .then(function (template) {
        console.log(template);
	document.getElementById(id).innerHTML=template; 
    })
    .catch(function (response) {
        // "Not Found"
        console.log(response.statusText);
    });
}


</script>
