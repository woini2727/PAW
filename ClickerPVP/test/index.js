const path =require('path');
const express = require ('express');
const app = express();

app.set('port', process.env.PORT || 5000);

//static file 
	app.use(express.static(path.join(__dirname,'public')));
//start

const server = app.listen(app.get('port'), ()=> {
	console.log('server on',app.get('port'))
});

const SocketIO = require('socket.io');
const io = SocketIO(server);

//websockets

io.on('connection', (socket)=>{
	console.log('nueva conexion',socket.id);
	socket.on('clickemit',(clickData)=>{
		console.log(clickData);
		//io.sockets.emit('clickAtack',clickData);
		socket.broadcast.emit('clickAtack',clickData);
	})
});

//

