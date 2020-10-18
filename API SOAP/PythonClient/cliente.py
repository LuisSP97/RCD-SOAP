from zeep import Client

cliente = Client('http://localhost:11945/API_SOAP/WebContent/wsdl/Funciones.wsdl')

nombre = cliente.service.nombrePropio("ALan JACEk", "SlAzAk", "CAStRo","M")

persona = cliente.service.validarRut("19.748.419-5")

print(nombre)

print(persona)
