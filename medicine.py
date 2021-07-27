import requests
from bs4 import BeautifulSoup
for i in range(10):
    url = "http://www.medguideindia.com/npp_price_list.php?nav_link=&pageNum_rr={i}0&nav_link=&selectme={i}" 
    page = requests.get(url)
    soup = BeautifulSoup(page.content,"html.parser")
    result = soup.find("table")
    rows = result.find_all("td")
    for row in rows:
        name = row.find("td",class_="mosttext")
        print(name.text)
 #   print(result.text)