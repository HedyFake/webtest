import json
import requests


class Load:
r = requests.get('https://youtube.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UChMIkGetnMB4qq9K5kNwkXA&key=AIzaSyBAer1fK1IHxojU0vYq1ZwzchSPmgoLBmM')
x = json.load(r.text)