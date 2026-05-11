# CSC 429 Project  
## Wareefa Dates

---

## Description
**Wareefa Dates** is a web application designed to provide a premium online shopping experience for purchasing dates.  

As web applications become essential in daily life, ensuring their security is critical. This project demonstrates common web vulnerabilities by comparing **unsafe implementations** with **secure solutions** in a real-world system.

The platform includes:
- A welcoming homepage  
- User registration and login system  
- User dashboard  
- Admin dashboard  

---

##  Project Objective
The goal of this project is to:
- Demonstrate common web security vulnerabilities  
- Show how insecure coding leads to real attacks  
- Compare insecure vs secure implementations  
- Apply best practices in web security  

---

##  Live Demo
- ✅ **Safe Version:** https://warefadates.hajaralmeleehan.me
- ❌ **Unsafe Version:** http://warefadates.janaalamer.me

---

## Security Features Demonstrated
This project highlights the following vulnerabilities and their secure solutions:

- SQL Injection  
- Cross-Site Scripting (XSS)  
- Weak Password Storage  
- Access Control Issues  
- Sensitive Data Exposure (Encryption)  

---

##  Testing the Security Features

---

### 1. SQL Injection (Register)

**Steps:**
1. Go to the **Register** page  
2. Enter the following in the username field:
2- in the username field, enter: x', 'pass', 'test@test.com', '1234', 'admin')#
3. Fill the remaining fields  
4. Submit the form  
5. Check the database  

**Unsafe Version:**  
- A new user is created with `role = admin`  
- Demonstrates **privilege escalation attack**

**Safe Version:**  
- Input is treated as plain text  
- No privilege escalation occurs  

---

### 2. SQL Injection (Login)

**Steps:**
1. Go to the **Login** page  
2. Enter in both fields: 'OR 1=1#
3. Submit  

**Unsafe Version:**  
- Logs in as the first user (admin) without password  

**Safe Version:**  
- Login fails with "Invalid username or password"  

---

###  3. Weak Password Storage

**Steps:**
1. Open both databases  
2. Compare stored passwords  

**Unsafe Version:**  
- Passwords stored using **MD5**  
- Vulnerable to brute-force and rainbow table attacks  

**Safe Version:**  
- Passwords hashed using **bcrypt**  
- Strong and secure hashing mechanism  

---

###  4. Cross-Site Scripting (XSS)

**Steps:**
1. Go to the homepage comment field  
2. Enter JavaScript code (e.g. `<script>alert("XSS")</script>`)  
3. Submit  

**Unsafe Version:**  
- Script executes (alert popup appears)  

**Safe Version:**  
- Input is sanitized and displayed safely  

---

###  5. Access Control

**Steps:**
1. Log in as a normal user  
2. Manually enter the admin dashboard URL  

**Unsafe Version:**  
- Access granted without restriction  

**Safe Version:**  
- Access denied or redirected  

---

###  6. Data Encryption

**Steps:**
1. Enter credit card information during registration  
2. Check database  

**Unsafe Version:**  
- Data stored in plaintext  

**Safe Version:**  
- Data stored in encrypted format  

---
