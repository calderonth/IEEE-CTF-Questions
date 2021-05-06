# CTF Name: Web : HAPPY-HALLOWEEN! Solution

## Summary
It is a Web challenge based on SQLi and File Upload Vulnerability, where a remote attacker is able to access admin privileges by bypassing the admin login page due to improper input validation, and then due to improper validation of files results in a php injected file to execute system commands.

## Detailed solution

-  Open Login Page by clicking Help Me.
-  Now Bypass the Login page using SQLi (sample query username: 1'OR'1'='1'-- - and password can be anything which doesn't matter as it's commented anyways).
-  Now you will get access to an File Upload page where you must upload a php file
-  Once the file has been uploaded, you can run PHP payloads by accessing it in /images.
-  With a payload it's trivial to run code that list file contents and to retrieve the flag.

## Flag
```
IEEECTF{4Br4K4D4bR4_H4PPY_H4LL0W33N!}
```
