# Opportunity Management System
Our capstone project is supposed to provide a online wesbite database for projects at the University of Arizona. 
These projects include ones created by students, teachers, faculty, or any other affilate of the school.

## Main Page
This main page is the start of the project which contains the two most important pieces of the website: the table and the 'database'(survey.csv).
This table is able to read the database and distinguish the data into two categories which are separated by tabs: "Current" and "Past".
The buttons at the top of the page contain a few of the UA associated websites and one for each subfolder in this repository.

## Qualtrics
Our original intention was to have a Qualtrics based survey since it provided a few things that we wanted for our wesbite. 
Since it requires a UA login to fill out, then it provides security while also being able to host our data in a database that could be exported into a csv file. 
This is why our table reads in the data through a csv.
The only issue was that we were not able to find a method to seamlessly integrate the survey by automatically exporting the csv from Qualtrics.
We tried contacting Qualtrics tech support but they have said that it is not possible.

## past_survey
This is also known as the "Create Submission" page. 
The columns in the table match the questions and the user is able to add entries into the table since it writes to the database directly.

## survey
This is what replaced the "Survey" page where the Qualtrics link used to be. 
It is an HTML form that contains all the questions asked by our Qualtrics survey. 
Since it was a considered a backup, it does not provide any functionality except for displaying all the data though our script once it is ran.
Our proposed solution for using this page was that we can send an email receipt with all the information since the user provides a netID.

## contact
This is the "Contact" page where any user can send an email to the creator of this repository.
