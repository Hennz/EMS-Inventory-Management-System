# README Frequently Asked Questions #

Last edited : Chris Barry

Lehigh University Emergency Medical Services Inventory Management App

### How do I access the website? ###
Well, the link to the site is :  cseproj.azurewebsites.net

### How do I access the files on the server? ###

Files are updated by sending commits to the repository; Azure does most of the management.
Right now there's just a test index.html file committed.

I'd reccomend using SourceTree (http://sourcetreeapp.com/) to publish files to the repository.
You can also use any other Git client that supports bitbucket, or just the git command line app.

When using SourceTree, whenever you're working on something new, you should go to Checkout>Create New Branch. Name it whatever you want (though relevancy is nice), and after this any changes you make to the files will stay in this branch, so we don't accidentally break the master. Commit as often as you want, it will only affect the branch you want, and commits are a good way to know exactly when something went wrong. After whatever you're doing seems to be finished, merge it back to the master branch, and it will show up on the website. Anything you do in branches won't show up on the website, so it should only have working stuff at any given time.


### How do I view the current data in the MySQL  ? ###
Well, I highly recommend using MySQL workbench.
It is one of the best database design tools in the market + it is free.

Summary Link:
http://en.wikipedia.org/wiki/MySQL_Workbench

Download Link:
http://www.mysql.com/products/workbench/

I love this tool because it is very easy to create Entity Relationship Diagrams
with this application.

Also, you can reverse engineer a current live database and create its
ER Diagram with MySQL Workbench.

https://www.youtube.com/watch?v=l-hNncIsjyQ

The connection string is: 

Database=cseprojAh1e4yJuo;

Data Source=us-cdbr-azure-east2-d.cloudapp.net;

User Id=bcd4c67af90e16;

Password=a3e7744d

Just follow that youtube video, and you can access our database!!


### Contact Information ###
Just text me on GroupMe

### Etc ###


### Who do I talk to? ###

* Repo owner or admin
* Other community or team contact