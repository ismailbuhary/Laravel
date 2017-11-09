<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="refresh" content="5; url=home.blade.php" />
      <script src="https://unpkg.com/vue@2.5.3/dist/vue.js"></script>
<!--       <script src="https://unpkg.com/react@15.6.2/dist/react.js"></script> -->
<!-- <script src="https://unpkg.com/react-dom@15.6.2/dist/react-dom.js"></script> -->
 


      <title>Home</title>
    </head>
  <body>
  <div id='app'>
  Welcome {{ heading }}
  
  </div>
 <script src='{{ asset("js/app.js") }}' type='text/javascript'></script>

  </body>

  </html>
