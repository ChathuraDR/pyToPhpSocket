import socket 													# Import socket module

ip = '127.0.0.1'
port = 60000													# Reserve a port for your service.
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)			# Create a socket object

s.connect((ip, port))
s.send(b"Hello server!")
