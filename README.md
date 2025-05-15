# Projektüberblick   
## Auftrag   
„BFW Kleinanzeigen“ soll den Mitarbeiterinnen und Mitarbeitern des Berufsförderungswerk
Hamburg GmbH ermöglichen private Anzeigen im Intranet zu schalten, bzw. zu lesen. Das
Angebot soll mit Registrierung und Anmeldung zur Verfügung stehen. Interessierte können
per E-Mail miteinander in Kontakt treten.   
## Kriterien   
### 1.Musskriterien   
- [x] Benutzerregistration und Anmeldung   
- [ ] Aufgeben von Anzeigen   
- [ ] Ausgabe aller Anzeigen der jeweiligenRubrik   
- [ ] Ausgabe aller eigenen Anzeigen   
- [ ] Ansprechendes Design   
   
### 2.Wunschkriterien
   
- [ ] Bilder in Anzeigen einbinden   
- [ ] Benutzerinnen können eigene Anzeigen bearbeiten und löschen   
- [ ] Die Verwaltung der Anzeigen und der Inserentinnen soll von einer Online-
Redakteurin erledigt werden.   
- [ ] Die Online Redakteurin muss sich anmelden, um die neuen, zusätzlichen
Funktionen benutzen zu können.   
- [ ] Nach der Anmeldung sieht die Online Redakteurindas Menü des Backends   
- [ ] Anzeigen freigeben und löschen   
- [ ] Inserenten anlegen, ändern und löschen   
- [ ] Anzeigenrubriken anlegen, ändern und löschen.   
- [ ] Nachdem die Online-Redakteurin eine Anzeige freigegeben hat, soll automatisch
eine E-Mail an die Inserentin gesendet werden.   
- [ ] Täglich sollen Anzeigen, die älter als 14 Tage alt sind, automatisch gelöscht
werden.   
- [ ] Das Frontend für alle Mitarbeiterinnen bleibt unverändert   
   
## Was funktioniert (oder zumindest mal funktionier hat):   
- [x] Registrierung: neuer Nutzer wird in Datenbank geschrieben   
- [x] Weiterleitung bei Einloggen oder Registrierung: Nutzer wird auf Startseite weitergeleitet   
- [x] Anzeige des angemeldeten Benutzers in Menüleiste   
- [x] Links, die nur von angemeldeten Nutzern geöffnet werden dürfen, leiten unangemeldete Nutzer automatisch zur Login Seite weiter   
- [x] Projektaufbau: Seiteninhalte werden automatisch in index.php geladen    
- [x] Rubriken werden aus DB geladen und in Dropdown Menü geladen   
- [x] Einbindung von Bootstrap (mit viel Luft nach oben)   
   
## Was noch nicht funktioniert / verbessert werden muss:   
- [ ] Links, die von angemeldeten Nutzern geöffnet werden dürfen funktionieren nicht   
- [x] Angemeldet-Bleiben des Nutzers    
- [ ] kein Passwort-Hashing vorhanden   
- [ ] automatische Ausgabe der jeweiligen Variable $pageTitle aus den geladenen Seiten in der index.php   
…    
   
## Nächste Schritte:   
- [x] Logout   
- [ ] Methode zum Anzeigen erstellen, sowie zum Anzeigen laden in Database.php erstellen   
- [ ] Seiten zur Anzeigenerstellung und -ansicht anlegen    
- [ ] Methode zum Ausgeben der eigenen Anzeigen / eine Profilübersicht   
- [ ] Ein bisschen hübscher wäre nicht schlecht   
   
## Was ich durch das Projekt gelernt & recherchiert und woran ich lange gearbeitet habe:   
- Unterschied GET und POST besser verstanden (Datenübertragung sichtbar oder "unsichtbar" in URL) und Umsetzung im Zusammenhang mit Daten aus HTML Formularen    
- Sessions nutzen um Daten temporär zu merken    
- Einen effektiven Projektaufbau umzusetzen (der sicher noch sehr viel effektiver oder effizienter sein könnte), indem ich mir überlegt habe, wie ich möglichst wenig Aufwand und Copy Paste für jede neu anzulegende Seite betreiben muss → Lösungansatz: seite=X in URL in Navigationslinks einbauen und in index.php abgleichen und bei gefundener Seite den Inhalt laden    
- Datenbankeinbindung nutzen: Einsatz von SQL Befehlen in PHP und worauf zu achten ist, wenn man in DB schreibt (z.B. dass Parameter in richtiger Reihenfolge mitgegeben werden, da sonst die Passwörter in die Email- und die Emails in die Passwort-Spalten geschrieben werden)   
- Ich möchte behaupten, dass ich bin besser darin geworden bin, Probleme zu analysieren und darüber nachzudenken - Notizen und Skizzen machen hat mir sehr geholfen    
   


   
