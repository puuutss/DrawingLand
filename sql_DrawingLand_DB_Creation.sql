CREATE DATABASE DrawingLand_DB;
USE DrawingLand_DB;
CREATE TABLE User(
	Nickname Varchar(15) unique not null,
    UserID Int unique not null,
    UserEmail Varchar(64) unique not null,
    UserKey Varchar(30) not null,
    Primary Key (UserID)
    
);
CREATE TABLE Post(
	PostTitle Varchar(20) not null,
	PostCreatorID Int unique not null,
    PostID Int unique not null,
    PostSubject Int not null,
    PostBody Varchar(1000) not null,
    PostRL Varchar(50),	
    Primary Key (PostID),
    Foreign Key (PostCreatorID) references User(UserID)
);
#DROP DATABASE DrawingLand_DB;
