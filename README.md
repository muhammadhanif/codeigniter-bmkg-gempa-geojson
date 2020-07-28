# codeigniter-bmkg-gempa-geojson

Aplikasi ini dibangun dengan tujuan untuk melakukan konversi data gempa BMKG yang tersedia di [https://data.bmkg.go.id/gempabumi/](https://data.bmkg.go.id/gempabumi/) dengan format XML. Dengan aplikasi ini, data berformat XML tersebut diubah ke dalam format [GeoJSON](https://tools.ietf.org/html/rfc7946).

Aplikasi ini juga dilengkapi contoh penggunaan data [GeoJSON](https://tools.ietf.org/html/rfc7946) tersebut di pustaka JavaScript peta interaktif [Leaflet](https://leafletjs.com/).

##### Data Gempa

Berikut ini data gempa yang bersumber dari BMKG yang dikonversi dari XML ke [GeoJSON](https://tools.ietf.org/html/rfc7946):

| No. |                                    Data Gempa                                     |                             GeoJSON                              |                             Leaflet                              |
| :-: | :-------------------------------------------------------------------------------: | :--------------------------------------------------------------: | :--------------------------------------------------------------: |
| 1.  |        [ Gempabumi M 5.0+ Terkini ](https://data.bmkg.go.id/autogempa.xml)        | <img src = "https://img.shields.io/badge/status-100%25-green" /> | <img src = "https://img.shields.io/badge/status-100%25-green" /> |
| 2.  | [ Gempabumi Berpotensi Tsunami Terkini ](https://data.bmkg.go.id/lasttsunami.xml) | <img src = "https://img.shields.io/badge/status-100%25-green" /> | <img src = "https://img.shields.io/badge/status-100%25-green" /> |
| 3.  |         [ 60 Gempabumi M 5.0+ ](https://data.bmkg.go.id/gempaterkini.xml)         |   <img src = "https://img.shields.io/badge/status-0%25-red" />   |   <img src = "https://img.shields.io/badge/status-0%25-red" />   |
| 4.  |      [ 20 Gempabumi Dirasakan ](https://data.bmkg.go.id/gempadirasakan.xml)       |   <img src = "https://img.shields.io/badge/status-0%25-red" />   |   <img src = "https://img.shields.io/badge/status-0%25-red" />   |

##### Sumber Data

Semua data gempa yang digunakan dalam aplikasi ini diambil dari [BMKG (Badan Meteorologi, Klimatologi, dan Geofisika)](https://data.bmkg.go.id/gempabumi/).

##### Donasi

Jika kalian ingin berdonasi, silahkan menghubungi kami melalui jalur berikut ini:

- Email: moehammadhanif@gmail.com
- Telegram: [t.me/muhammad_hanif](https://t.me/muhammad_hanif)
