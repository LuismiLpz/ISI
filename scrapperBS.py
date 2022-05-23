import requests
from bs4 import BeautifulSoup


r = requests.get('https://www.instant-gaming.com/es/busquedas/?query=elden%20ring')

soup = BeautifulSoup(r.content,'html.parser')

s = soup.find('div', {"class":"main-content"})

todo = s.find('div', {"class":"search-container search-wrapper"})

juegos = todo.find('div', {"class":"search listing-games"})

juego = juegos.find('div', {"class":"item force-badge"})

info = juego.find('div', {"class":"information"})

precio = info.find('div',{"class":"price"})

print(precio)