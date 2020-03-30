
import requests

url='http://localhost/php/insert.php'

def attack():
	for i in range(500):
		http = requests.post(url, data={"name": "hello" , "city" : "iraq" , "age" : 45, "submit" : "Submit"})

attack()
