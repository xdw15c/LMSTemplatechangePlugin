# LMSTemplatechangePlugin

Opis:
umożliwienie użytkownikom o niskich uprawnieniach zmieniania szablonu faktur.
Aby nie spsuć faktur wysyłanych klientom, można np w cronie przed wyslaniem faktur wymuszać ustawienie domyślnego dla wysyłki szablonu


Instalacja wtyczki:
1. Zawartość paczki umieścić w katalogu plugins w LMS.
2. composer update --no-dev -n
3. Uaktywnić wtyczkę z poziomu interfejsu użytkownika LMS.

Konfiguracja wtyczki:
- w pliku php w modules ustawic wybieralne wartosci
- w uprawnieniach uzytkownika nadac uprawnienie do zmiany szalbonu


Grzegorz Cichowski <gc@ptlanet.pl>
