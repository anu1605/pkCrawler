import requests
# url
# https://epaper.prabhatkhabar.com/t/18525-Garhwa
# https://epaper.prabhatkhabar.com/t/6185-RANCHI - City
# https://epaper.prabhatkhabar.com/t/18526- Hazaribagh
# https://epaper.prabhatkhabar.com/t/18527-Gumla
# https://epaper.prabhatkhabar.com/t/18528-Koderma
print(requests.get("https://epaper.hindustantimes.com/delhi?eddate=17/05/2023").text)
