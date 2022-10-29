# Questouch-Prototype
Repository of Questouch Prototype, the GDSC KGEC Hackathon submission by The Javalins



## Description
It uses a simple tag based indexing system to store and search through question papers.
Tags are set by the admin who also adds the question paper and tags are stored in a csv file.
The PHP frontpage searches through the csv file for the required tags and returns a list of file links under the search bar.



## Future Plan
We aim to replace the sloppy csv file implementation with a proper database like PostgreSQL and the question papers will be distributed with a proper CDN like Google Cloud CDN.
We also aim to create a proper upload page for admins to make it easier for them to upload question papers and assign them with the proper tags.
We also aim to implement the Question paper metadata system that will store which question was from which chapter and an analytics dashboard that will dynamically calculate the weightage of a chapter within a subset of question papers conforming to the query given ny the user.