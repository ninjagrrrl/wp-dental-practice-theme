# Projektübersicht – Zahnarztpraxis-Website

## 1. Projektziele & Umsetzungsweise
- Einfache Website für ein Zahnarztpraxis von Freunden, ohne Buchungssystem, nur Informationsvermittlung
- Classic Theme mit optionalen Gutenberg-Blocks
- Clean, modern, wartbar, minimale Plugins, Sicherheit
- Entwicklungsumgebung: LocalWP
- aktuelle Praxisseite, die vollständig ersetzt werden soll, wird auf ALL-INKL. gehostet
- Solide SEO: saubere Semantik, schnelle Ladezeiten, mobile-first, accessible HTML
- Ziel: State-of-the-art 2025 WordPress-Methoden lernen

## 2. Backend-Seiten
### Hauptmenü (Frontend)
- Start
- Leistungen
- Aktuelles
- Team
- Praxis

### Footer (noch einzubinden)
- Datenschutz
- Impressum

## 3. Bisher umgesetzt
- Menü in functions.php registriert & in header.php ausgegeben (`wp_nav_menu`)
- Logo über Customizer eingebunden
- Custom Favicon über functions.php im Frontend und Backend eingebunden
  - Browserkompatibilität & Responsivität verbessert
- CSS-Grundstruktur vorbereitet
  - Kommentare nach Bereich (Header, Menü, Footer, Content)
  - Browser Reset/Normalisierung einfügen
- CSS: Safari Rendering-Bug in der WP-Admin Bar korrigiert

## 3.1 In Progress
- Templates
  - functions.php
  - header.php
  - style.css
  - header.php

## 4. Nächste Schritte
4.2. **CSS für Header**
  - Header & Navigation stylen
  - Header fixen und langsam ausfaden beim runterscrollen Transformation in Burger-Menu?
  - Responsive & Retina berücksichtigen
  - SEO beachten
4.2.1 **CSS für Footer**
  - Impressum & Datenschutz Menü einbauen
  - Kontakt <h2>
  - Öffnungszeiten <h2>
  - Anfahrt <h2>
4.3. **Template-Hierarchie**
  - `front-page.php`
  - `page.php`
  - `archive.php`
    - Aktuelles
  - `single.php`
    - Leistungen
    - Team
    - Praxis
    - Datenschutz
    - Footer
  - `404.php`
4.4. **Für Später (Lernen)**
   - Eigene Gutenberg-Blocks bauen
   - Blocks nutzen eigenes CSS + Komponenten (mit React und JS bauen)
4.7. **SEO**
  - Semantisches HTML (header, nav, main, footer)
  - Sinnvolle Headings-Struktur (H1–H3)
  - Pagespeed: kleine Assets, wenig Render-blocking durch CSS/JS
  - Bilder: WebP, richtige Größen, alt-Texte
  - Sitemap.xml (per WordPress automatisch)
  - Saubere Permalink-Struktur
  - Open Graph Tags für Social Media
4.10. **Launch-Plan & Domain-Übernahme (SEO-sicher)**
  - Alte Website läuft derzeit auf derselben Domain bei All-Inkl
  - Neue Website ersetzt die alte vollständig
  - Ziel: SEO-Werte der bestehenden Domain erhalten

  ### Was ich beachten muss:
    - URL-Struktur prüfen: wenn möglich identisch lassen
    - Falls neue URLs → 301-Redirect-Liste erstellen (z. B. mit Redirection Plugin)
    - „Suchmaschinen blockieren“ in WP → beim Livegang deaktivieren
    - Pagespeed im Blick behalten (Bilder, Fonts, Minimales CSS/JS)
    - Robots.txt prüfen: keine unnötigen Sperren
    - Nach Launch: Google Search Console einrichten + neue Sitemap einreichen
    - SSL-Zertifikat bei All-Inkl aktiv halten (https)

## 5. Notizen / Learnings
- Safe SVG Plugin für Logo/Icons beachten
- Customizer bevorzugt für Favicon & Logo
- Menu_class in wp_nav_menu erklärt
- wp_page_menu als Fallback für Menü
- PNG-Logos: hoch genug für Retina, proportional skalieren
- SVG-Logos: skalierbar, Safe SVG nötig, evtl. direkt aus Medienbibliothek einbinden

## 6. Ressourcen / Referenzen
- WordPress Codex & Developer Handbook
- Gutenberg Block Tutorial
- eventuell Tailwind CSS / PostCSS
