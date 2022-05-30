import requests
from bs4 import BeautifulSoup

import sys

string='https://www.instant-gaming.com/es/busquedas/?query='

for n in range(len(sys.argv)):
	if n != 0:
		string = string +'+'+ sys.argv[n]

r = requests.get(string)

soup = BeautifulSoup(r.content,'html.parser')

s = soup.find('div', {"class":"main-content"})

todo = s.find('div', {"class":"search-container search-wrapper"})

juegos = todo.find('div', {"class":"search listing-games"})

juego = juegos.find('div', {"class":"item force-badge"})

info = juego.find('div', {"class":"information"})

precio = info.find('div', {"class":"price"})

print(precio)
