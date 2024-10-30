# User Stories

## Ingelogde Gebruiker
1. **Als ingelogde gebruiker** wil ik kunnen inloggen, zodat ik toegang krijg tot extra functionaliteiten, zoals het geven van likes.
2. **Als ingelogde gebruiker** wil ik de details van een Pokémon kunnen zien, zodat ik meer informatie kan krijgen voordat ik een like geef.
3. **Als ingelogde gebruiker** wil ik Pokémon kunnen liken, zodat ik mijn waardering voor specifieke Pokémon kan tonen.
4. **Als ingelogde gebruiker** wil ik na het geven van vijf likes de mogelijkheid hebben om een nieuwe Pokémon te creëren, zodat ik kan bijdragen aan de Pokémon-collectie op de website.
5. **Als ingelogde gebruiker** wil ik mijn eigen Pokémon kunnen aanpassen, mocht er toch iets niet kloppen aan de informatie.
6. **Als ingelogde gebruiker** wil ik mijn eigen Pokémon kunnnen verwijderen, zodat ik de controle heb over mijn bijdragen aan de website en ongewenste Pokémon kan verwijderen.

## Admin
1. **Als admin** wil ik toegang hebben tot een speciale beheerdersinterface, zodat ik de website en de Pokémon-database kan beheren.
2. **Als admin** wil ik bestaande Pokémon online of offline kunnen zetten, zodat ik controle heb over welke Pokémon zichtbaar zijn voor gebruikers.
3. **Als admin** wil ik de optie hebben om elke Pokémon te kunnen aanpassen van elke gebruiker, zodat ik de controle heb over of de informatie wel of niet klopt.
4. **Als admin** wil ik de optie hebben om elke Pokémon te kunnen verwijderen van elke gebruiker, zodat er geen ongepaste Pokémon op de website belanden.

# ERD
![ERD](/img/erd.png)

# Changelog Laravel Project

## 30-10-2024
* Like functie toegevoegd
* Diepere validatie toegevoegd, pas vanaf 5 likes kun je nu Pokémon create

## 28-10-2024
* Profile pagina gekoppeld aan de site
* Styling aangepast van de profile pagina

## 25-10-2024
* user_id toegevoegd aan de pokemon database
* Wordt nu getoond welke user de pokémon heeft gecreate
* De user kan zijn eigen pokémon editen en deleten, de andere users niet. De admin kan dat nog wel
* Authenticatie checks toegevoegd in de ListController

## 24-10-2024
* Zoekbalk toegevoegd
* Filteren op regio toegepast
* Melding aangemaakt na het aanmaken van een pokémon

## 22-10-2024
* Admin toegevoegd aan de database
* Scheiding gemaakt tussen admin en user
* Visible schakel systeem aangemaakt voor de adminpagina

## 21-10-2024
* Formvalidatie voor create toegevoegd
* Editpagina aangemaakt
* Formvalidatie voor edit toegevoegd
* Destroy functie toegevoegd

## 19-10-2024
* Toegevoegd dat gelijk de types database wordt ingevuld bij het aanmaken
* Create pagina aangemaakt en gekoppeld
* Ervoor zorgt dat de create pokémon worden opgeslagen

## 18-10-2024
* Type_id gekoppeld de naam van de type
* Detailpagina laat nu de naam van het type zien

## 17-10-2024
* Styling toegepast
* Authenticatie toegevoegd voor de detailpagina
* Log out functie aangemaakt

## 16-10-2024
* Create functionaliteit aangemaakt
* Store functionaliteit aangemaakt
* Pokemon database aangemaakt

## 15-10-2024
* List pagina toegevoegd
* Database toegevoegd
* Pokemon tabel toegevoegd
* Database data op de list pagina getoond

## 14-10-2024
* Lanceerpagina aangemaakt
* Inloggen & registreren mogelijk
* Gelinkt naar de pagina als de gebruiker is ingelogt

## 11-10-2024
* Website functies uitgewerkt
* ERD gemaakt

## 09-10-2024
* Nieuw laravel project gestart
* Breeze authentication toegevoegd
* Route opdrachten gemaakt
