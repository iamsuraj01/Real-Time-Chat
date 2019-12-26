<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>ChatRoom</title>
 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>
    .list-group{
        overflow-y:scroll;
        height: 200px;
    }
    </style>
    
</head>
<body>

<div class="container">
    <div class="row " id="app">
    <div class="offset-4 col-4">
    <li class="list-group-item active"> ChatRoom</li>
    <ul class="list-group" v-chat-scroll>
       <message 
       v-for="value in chat.message" 
       :key=value.index 
       color='success'>
        @{{value}}
        </message>
      
    </ul>
    <input type="text" placeholder="Enter your message...." 
    v-model="message" 
    @keyup.enter="send">
    </div>
        </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
    
</body>
</html>