## Schulausfall

I wrote this small script to check if the content of a website changed.

### Dependencies
md5sum and sendmail are required. Configure those before running the script


### Usage
Define the website you want to check directly after the the ./check.sh . Then add the email adress you want to send from and the one you want to send to.

### Example
./check.sh "http://yanniks.de" kontakt@yanniks.de kontakt@yanniks.de
