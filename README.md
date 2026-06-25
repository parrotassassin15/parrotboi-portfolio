# parrotboi-portfolio

Personal portfolio site for Ryan Wilke ([@parrotassassin15](https://github.com/parrotassassin15)) — CEO of [Lorikeet Security](https://lorikeetsecurity.com), offensive security professional, and CTF platform architect.

Built on a Docker LAMP stack with Bootstrap 5 and a trans pride color scheme.

## Stack

- **PHP 8.2 / Apache** — via `php:8.2-apache` official image
- **MySQL 8.0** — stores contact form submissions
- **phpMyAdmin** — database management UI
- **Bootstrap 5** — responsive layout
- **Font Awesome 6** — icons throughout
- **Google Fonts** — Space Grotesk, Inter, JetBrains Mono

## Running Locally

```bash
cp .env.example .env
# edit .env with your own passwords if desired
docker compose up --build
```

| Service     | URL                        |
|-------------|----------------------------|
| Portfolio   | http://localhost            |
| phpMyAdmin  | http://localhost:8080       |

## Project Structure

```
.
├── docker-compose.yml
├── Dockerfile
├── .env.example
├── apache/
│   └── 000-default.conf
├── mysql/
│   └── init.sql
└── www/
    ├── index.php          # main portfolio page
    ├── contact.php        # contact form handler
    └── assets/
        ├── css/style.css
        └── js/main.js
```

## Features

- Animated terminal typewriter hero
- Full career timeline (Lorikeet Security, Prescient Security, Cointelegraph, Assura, LvlUp Ventures)
- 16 CVE disclosure table (FastNetMon, May 2026)
- Certifications: CRTID, eWPT, eCPPT, eJPT
- Expanded skills grid across offensive security, tooling, cloud, RE, compliance, and more
- Projects: Lorikeet Security Platform, Parrot CTFs, Parrot Recon, Micro Labs, and more
- Contact section with direct social links
