# PHP CSRF

This learning example shows csrf attack.
There are 3 components: dangerous website, website and database.

## Website

This is simplest login & registration system without any validation, password hashing etc. It is also vulnerable to CSRF attack.

## Dangerous website

This is malicious website that attacker pointed user to (for example by phishing email). When user enters this website it uses session-id cookie created by the legitimate website to perfom actions on user behalf (in this example deleting user's account).

## Database

MYSQL database

# HOW TO RUN

Run `docker compose up -d` command in project root directory.

# HOW TO USE

- create user account on website (localhost:8000)
- log in to account you've just created
- enter malicious website (localhost:5173)
- watch consequences of CSRF attack (try to log in to your account)
