# Library Book Management Database System

Basic website where one can add, edit and remove library book details.

#Things I learned/had found difficult in creating this project:

- Tried to do everything manually first then had to uninstall everything to install xampp for ease of database using phpmyadmin

- After installing xampp everything was in txt document and couldn't figure out how to change extension, solved by going in to view above file explorer and hit file extentions

- I had been really stuck in figuring out how to connect the database and have it successfully process any data that was submitted. Everything I had tried resulted in a 'This page/URL cannot be found' and lots of researching, coding and re-coding.
During this process the websites that helped me the most was studentstutorial, w3schools, stackoverflow and youtube videos. Once I had established a secure connection by making sure I got a return echo via my connect.php file, I was still struggling to successfully insert any data input into my database. I kept getting Error: INSERT INTO books (title,author,genre) VALUES ('Harry Potter','J.K Rowling','Fantasy') Unknown column 'title' in 'field list' and couldn't figure out why. I made sure I was using double and single quotation marks (not backticks) correctly and that all my variables were corresponded correctly as this was the advice that kept cropping up in stackoverflow. I eventually came across one comment that stated to make sure that your parameters corresponded correctly with your database column names and I hadn't been cross checking this. Sure enough, I had set my database names with capital letters where I hadn't within my code. Once I changed my database variables into lower case to match my code I got my return echo 'Book data submitted successfully'. I cross checked this within phpmyadmin and sure enough the data I had input was there (just needed to correct 'date' to 'date' not integer and setting to current_timestamp). 

- For insert data: I realised insert function was not allowing apostrophes eg. Children's literature. Rectified by using mysqli_real_escape_string($db, $_POST['title']);

- Had an issue with delete function saying that it was unable to process request for viewing page. Turns out I had accidentally deleted ALL mysql rows! Thankfully had previous database saved so could copy paste that back into mysql, solved by fixing WHERE ID=$_GET[id] part of code.

- Search function was working however I couldn't figure out how to get search to pull results if the user had input additional or incorrect punctuation marks (e.g. "J.K." for "J.K Rowling"). I did use replace(author,'.', '') in $sql LIKE %$search% function which worked for allowing searches JK/J K or RR/r r etc for J.K Rowling or George R.R. Martin but then showed no results even if matched like for like (eg. J.K == J.K)! Solved by writing the query so that it filters on partial text/wildcards.

Hoping to make a more advanced/improved version of this in the future
