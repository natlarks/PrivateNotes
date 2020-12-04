# PrivateNotes
Developed for COP 4331.

## Overview
PrivateNotes is a web application that allows users to create private notes that can only be accessed if they are logged in. The user can add, edit, or delete notes. The notes can also be sorted alphabetically, by date created, or by category.

## Project Requirements
- Develop a web application or a mobile app.
- Users enter a password to open the application.
- The user can change the password.
- The password should be stored encrypted in the database.
- Users can create multiple notes.
- Notes must have titles.
- Users can edit or delete notes.
- Users can categorize notes (Grocery, Important Information, Account Passwords, Todo List)
- Users can sort alphabetically, by date created, or by category.

## Materials Required to Run Code Locally
-	Laptop or desktop (OS is preferred to be Windows 10)
-	At least 1GB free on hard disk
-	At least 512 MB of RAM
-	Internet browser (Chrome 86+ is preferred)
-	XAMPP stack installed 
-	Command line or terminal
-	Git installed on command line or terminal
- Source code

## Build Instructions
1.	Download and install XAMPP
2.	Open XAMPP and start “Apache” and “MySQL”
3.	Create database	
  a.	In internet browser, enter go to http://localhost/phpmyadmin/
  b.	In the “User Accounts” tab, create a password for the account.
  c.	Go back to homepage. In the “Database” tab create a new database named “privatenotes” with “utf8mb4_general_ci” collation option selected
  d.	Create tabled named “accounts” with 7 columns:
    i.	account_id  - (int 11) 
      1.	Under extra, select “AUTO_INCREMENT”
    ii.	email – varchar(200)
    iii.	password – varchar(1000)
    iv.	sec_question – varchar(1000)
    v.	sec_answer – varchar(1000)
    vi.	date_created – timestamp
      1.	Under default, select “current_timestamp()
    vii.	last_modified – timestamp
      1.	Under default, select “current_timestamp()
  e.	Create tabled named “notes” with 7 columns:
    i.	note_id  - (int 11) 
    1.	Under extra, select “AUTO_INCREMENT”
    ii.	email – varchar(1000)
    iii.	title – varchar(1000)
    iv.	content– mediumtext
    v.	category – varchar(200)
    vi.	date_created – timestamp
      1.	Under default, select “current_timestamp()
    vii.	last_modified – timestamp
      1.	Under default, select “current_timestamp()
4.	In Command Line or Terminal change in the “htdocs” directory. (C:\xampp\htdocs on Windows)
5.	Clone code from GitHub. Command is “git clone https://github.com/natlarks/PrivateNotes.git”
6.	In the repo, in the folder “PHP”, there is a file called “dbconfig.php”. Add your database password and database name in the config line.
7.	Open “http://localhost/index.php” in internet browser and start using webpage 😊

