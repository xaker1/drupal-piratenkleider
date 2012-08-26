# Piratenkleider
Drupal-Theme für Webauftritte der Piratenpartei

## Quelle
Dies ist eine Portierung des Piratenkleider Wordpress Themes, erstellt von
[Korbinian](https://github.com/xwolfde/Piratenkleider) und weitergepflegt von
[Wolfgang Wiese](https://github.com/xwolfde/Piratenkleider).

## Credits & Copyright
[CC-BY-SA 3.0](http://creativecommons.org/licenses/by-sa/3.0/de/deed.de)

## Hinweise zur Portierung
Diese Portierung ist derzeit noch Work-In-Process. Das Grundgerüst wurde bereits
umgesetzt. Mehrere Features fehlen noch. Für jedes fehlende Feature und
Features, die noch verbessert werden müssen, wird ein Ticket in Github erstellt.

Ziel der Portierung ist es, das Theme nicht zu sehr zu überladen. Das
Wordpress-Theme hat schon fast zu viele Optionen. Wenn möglich, dann wird
größtenteils auf bestehende Module zurückgegriffen. Das Modul
[Features](http://drupal.org/project/features) hierbei unterstützen.

## Installation
Einfach per Git das Repository "clonen" bzw. herunterladen. Den Ordner in
"piratenkleider" umbenennen und nach "/sites/all/themes/" verschieben.


## Features

### Slider
Der Slider wurde nicht fest in das Theme eingebaut - es bietet nur die CSS
Optionen. Hierzu wird am besten das Modul
[Flex Slider](http://drupal.org/project/flexslider) benutzt. Mithilfe der
"FlexSlider Views Slideshow" kann eine "Ansicht" erstellt und diese als Block
auf der Startseite als Block eingebunden werden.

Da die manuelle Konfiguration für den Anfänger zu aufwendig ist, wurde ein
"Feature"-Modul erstellt, der das benötigte "Feld" sowie die "Ansicht"
bereitstellt.

Das Module findet man hier:
https://github.com/christophlsa/piratenkleider_slider

Nach dem aktivieren muss nur noch der Block "View: Slideshow" zur Region
"slideshow (frontpage only)" hinzugefügt werden. Es wurde automatisch das Feld
"sliderimage" dem Inhaltstyp "Artikel" hinzugefügt. Dort kann das Bild, welches
im Slider angezeigt werden soll hochgeladen werden.