# CF-ChristianS-CodeReview-11


Project description: “Adopt a Pet”

You love animals and think it is time to adopt one. You like all sorts of animals: small animals, large animals, you may even like reptiles and birds and may be open to adopting animals of any age. 

All animals have a photo and live at a specific location. They also have a description, age and belong to a breed. Small animals may even have their own website. 

What all the animals have in common is a name, an image, a description and a location. A location should hold information about the city, ZIP-code, address (single line like “Praterstrasse 23”).

    Small animals have a location, an image, a name, a description, hobbies and age.

    Large animals have a location, an image, a name, a description, hobbies and age.

    Senior animals (older than 8 years old) have a location, an image, a name, a description, hobbies and age.
    
    
Your MySQL database MUST be named: cr11_yourname_petadoption

For this CodeReview, the following criteria will be graded:
 

    (5) Create a database (cr11_yourname_petadoption) and add sufficient test data (at least 4 small animals, 4 large animals and 4 seniors) 

    (5) Retrieve the information from the database.

    (10) Display all animals on the home page.

    (10) Display all small and large animals on a single web page (general.php).      

    (10) Display all senior animals on a single web page (senior.php).

    (15) Create a registration and login system.

    (15) Create separate sessions for normal users and administrators. 

    (30) Create an admin panel. Only the admin is able to create, update and delete data about animals within the admin panel. The normal user will be able to see everything that was created for this website, without having administrative privileges in changing the data. 

Bonus points

    (10) Create a live search field that when you already type one letter in this field, it will search your database for  results (using Ajax). The search should look through the names of the animals. 

    (10) Create a superadmin session, where only the superadmin will be able to manipulate the users' data, e.g. edit and delete existing users (hint: users.php is only accessible to a super admin)
normal admin: 

       normal admin login:
       email: dattel@gmail.com
       PW: 123456
 
       super admin login:
       emial: super@admin.com
       PW: 123456
