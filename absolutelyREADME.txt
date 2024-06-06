June 5, 2024
Admin Folder is mostly nothing right now. Haven't touched it and I only worked on the ones the end user will see


Things I added or fixed:
- Payment and Enrollment Process back end has been adjusted and fixed
- Made PHPmailer and send_mail work for my end. Created a new gmail account to test and see if the Enrollment
and Payment Process is functioning as intended
- It's now indicated on the starting page when a user is logged in.
- Made the Log In functional
- Made the Register functional
- Made the Forgot Password functional
- Links on the footer are mostly working now
- Contact Us Section is working now
- Profile Page is created
- User Information in Profile Page is added
- Ability to change password in the profile page is added. (Could move that to Settings Page)
- Profile Page also indicates which courses the user is enrolled to
- Dashboard Page's course section is made functional. It now shows both the user's enrolled courses and their
progress
- Partially started in creating the Game Development Course(Add more info to this.)
- Created a quiz page template for people to use when creating quiz pages.
- Adjusted the database accordingly.
Note: Export the database once every week whenever you worked on it.


Things to work on:
- Admin Side.
- More course pages for each course
- Expand on the current course pages
- More quiz pages and activities page
- Settings Page
- Quiz Page template is there. Just need to change questions and choices
- Find a better way to store images, specifically the user's receipts. Or don't. Whichever works better
- For the gmail parts, I recommend making a new one for it. It just means you need to adjust things for the
PHPmailer and the send_mail.php 
- I was able to fix mine by getting a specific app password for the password
- You can get it here once you made a new account: https://myaccount.google.com/apppasswords
- If you go to Profiles and profile.php, you can see the Achievements section is blank. You got 2 options
- 1. Remove it
- 2. Make it so that finished courses(Ones with 100% progress) appear there alongside Certificates
- Another thing to work on is the Front-End design. I'm not good at it and if you can make it look better,
feel free to do so.
- You can ask your team leader what to put on the Certificates Page when you make it.
- I also recommend separating the navigation bar from index into a separate file
and then using the include statement.