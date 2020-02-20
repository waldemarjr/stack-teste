

const axios = require('axios');

var http = require('http');

http.createServer(function (request, response) {
    
    async function makeRequest() {
      
      const getClientes = async () => {
        try {
          return await axios.get('http://backend_webserver:8000/getData.php')
        } catch (error) {
          console.error(error)
        }
      }

      const showClientes = async () => {
        const clientes = await getClientes()
      
        try {
          if (clientes.data.clientes) {
            numClientes=Object.entries(clientes.data.clientes).length;
            response.writeHead(200, {'Content-Type': 'text/plain'});
            response.write('Existe(m) '+numClientes+' clientes cadastrados\n');
            response.end();
          }
        }catch (error) {
          console.error(error)
        }

      }
  
      showClientes()

      
    }      

    makeRequest();

}).listen(3000);

console.log('Server started');




