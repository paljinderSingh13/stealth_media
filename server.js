const Express = require('express')();
const Http = require('http').Server(Express);
const Socketio =   require('socket.io')(Http,{
        cors:{origin:"*"}
    });

    Socketio.on("connection",socket=>{

        console.log("connection");
        socket.on('SEND_MESSAGE', function(data) {
            console.log(123);
            Socketio.emit('MESSAGE',data)
        });

    });

Http.listen(3001,()=>{
    console.log("its working");
});