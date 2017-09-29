var http = require('http'); 

http.createServer(function (req, res){
	res.write('Funcionando');
	res.end();
	
}).listen(4000);
