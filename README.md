we365 (Feb 2014)
=====

Creating a responsive website using bootstrap. First time trying out bootstrap (http://getbootstrap.com/). 
Testing out the column, form, and features of bootstrap. 

ALL IMAGES, LOGOS AND INFORMATION WERE FOUND ON WE365 AND ITS ASSOCIATES' WEBSITES. 
I have rendered them to suit the design of the webstie for testing purposes. 


CSS FILES USED:
bootstrap.css 

Customized bootstrap.css and carousel.css to better suit the project. 

BOOTSTRAP.CSS

Added: 

input[type="text"], 
input[type="password"],
input[type="datetime"], 
input[type="datetime-local"], 
input[type="date"], 
input[type="month"], 
input[type="time"], 
input[type="week"], 
input[type="number"], 
input[type="email"], 
input[type="url"], 
input[type="search"], 
input[type="tel"], 
input[type="color"]

so that the input field size was consistent, by default it was 18px while the input[type="select"] was 30px.

I was also able to change the static top navbar to a different height and adjust it so that the top of the page starts after to 
accomodate for the size of the logo. But I thought leaving the logo hanging was interesting. 

LOGINPAGE.PHP 

Default login: 
Username: volunteer@we365.com
Password: volunteer

Tested validation on my local computer using XAMPP.

Correct input should respond: "Welcome back $username !" 
Incorrect password should respond: "Incorrect password, please try again." 
Incorrect username should respond: "This username does not exist, please try again."