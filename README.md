# README Frequently Asked Questions #

Website link: http://cseproj.azurewebsites.net/

Original Bitbucket link: https://bitbucket.org/CB_27/cse-216-project-team-1-a

Lehigh University Emergency Medical Services Inventory Management App

### Using Git Bash for version control ###
Reference: http://gitref.org/basic/
Download: http://git-scm.com/downloads
Stackoverflow guide : http://stackoverflow.com/questions/315911/git-for-beginners-the-definitive-practical-guide

There are really just half a dozen of commands you need to know.

git init OR git clone
git remote set-url <remote name> <url of remote name>
git add <file to add>  and git commit OR git commit -a (To add + commit all)
git push origin master

Merging Branches
http://www.gitguys.com/topics/merging-branches-without-a-conflict/
git checkout master
git merge <branch>


Use git --help to get a list of meanings of all commands.

~ Wes


### How do I access the website? ###
Well, the link to the site is :  cseproj.azurewebsites.net

### How do I access the files on the server? ###

Files are updated by sending commits to the repository; Azure does most of the management.
Right now there's just a test index.html file committed.

I'd reccomend using SourceTree (http://sourcetreeapp.com/) to publish files to the repository.
You can also use any other Git client that supports bitbucket, or just the git command line app.

When using SourceTree, whenever you're working on something new, you should go to Checkout>Create New Branch. Name it whatever you want (though relevancy is nice), and after this any changes you make to the files will stay in this branch, so we don't accidentally break the master. Commit as often as you want, it will only affect the branch you want, and commits are a good way to know exactly when something went wrong. After whatever you're doing seems to be finished, merge it back to the master branch, and it will show up on the website. Anything you do in branches won't show up on the website, so it should only have working stuff at any given time.

Also, you _do not_ have to edit any files in SourceTree; you can edit in any program you want. Just make sure you commit regularly!


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

~Wes

### Contact Information ###
Just text me on GroupMe

### Etc ###


### Who do I talk to? ###

* Repo owner or admin
* Other community or team contact
