<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
<style>
.list-group {
overflow-y: scroll

}
</style>

  </head>
  <body>


 <div class="container">

   <div class="row" id="app">

         <ul class="list-group offset-4 col-4" >
            <li class="list-group-item active"  >Chat Room</li>

            <message v-for="value in chat.msgs " >@{{value}}</message>
            <input type=text  class="form-control"  placeholder="Your message here..." v-model="message"  v-on:keyup.enter="send">

            </ul>
      </div>

 </div>



<script src='https://unpkg.com/vue@2.5.3/dist/vue.js'></script>
<script src="{{asset('js/app.js')}}"></script>

</html>
