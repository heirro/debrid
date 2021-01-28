<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/npm/tailwindcss/dist/tailwind.min.css,npm/font-awesome/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <title>Generate Direct Download Link Premium File Hoster</title>
</head>
<body>
<div class="md:p-12 bg-indigo-100 flex flex-row flex-wrap">
  <form method="POST" action="" class="md:w-1/2-screen m-0 p-5 bg-white w-full tw-h-full shadow md:rounded-lg">
    
    <div class="text-2xl text-indigo-900">GENSET PREMIUM <small class="pl-2 text-gray-500">Buka kunci batasan link download.</small></div>
    
    <div class="flex-col flex py-3">
      <label class="pb-2 text-gray-700 font-semibold">LINK HOSTER (** Beberapa tidak support)</label>
      <input type="text" name="linkdl" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200" placeholder="https://uptobox.com/wwcv067xqwto"/>
       <div id="result"></div>
    </div>
    
    <div class="mt-2">
      <input class="p-3 bg-indigo-400 text-white w-full hover:bg-indigo-300" value="FREEDOM!" type="submit">
    </div>
  </form>
</div>
<script>
$(document).ready(function(){
    $("form").on("submit", function(event){
        event.preventDefault();
 
        var formValues= $(this).serialize();
 
        $.post("decrypt.php", formValues, function(data){
            // Display the returned data in browser
            $("#result").html(data);
        });
    });
});
</script>
</body>
</html>
