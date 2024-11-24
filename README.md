# PHP-Web-Application-Security-Audit
# PHP Web Application Security Audit

This project demonstrates a basic PHP web application with common vulnerabilities, specifically **SQL Injection** and **Cross-Site Scripting (XSS)**. The goal is to audit these vulnerabilities and suggest fixes.

## Project Structure

The project consists of the following files:

- `index.php`: Main page with basic forms for login and contact.
- `login.php`: Vulnerable login page with SQL Injection.
- `contact.php`: Contact form vulnerable to XSS.
- `config.php`: Contains the database connection.

## Vulnerabilities

### 1. **SQL Injection**
The login form in `login.php` is vulnerable to **SQL Injection** because it directly embeds user input into the SQL query without sanitizing it. 

#### How to Test:
- Input: `admin' OR '1'='1`
- This will bypass authentication, as the query will always return true.

#### Fix:
Use prepared statements and parameterized queries to protect against SQL injection.

### 2. **Cross-Site Scripting (XSS)**
The contact form in `contact.php` is vulnerable to **XSS** because it directly outputs user input to the page without sanitization.

#### How to Test:
- Input: `<script>alert('XSS');</script>`
- This will cause a JavaScript alert to pop up when the message is displayed.

#### Fix:
Use `htmlspecialchars()` to sanitize user input before displaying it.

## Database Setup

```sql
CREATE DATABASE security_audit_db;

USE security_audit_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL
);

INSERT INTO users (username) VALUES ('admin'), ('testuser');
