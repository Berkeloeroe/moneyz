CREATE DATABASE moneyz;

USE moneyz;

CREATE table Users (
    Id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Username varchar(255) UNIQUE,
    Password varchar(255),
    Created_at datetime,
    Updated_at datetime  
)

CREATE table Moneyz (
    Id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    User_id int(11),
    FOREIGN KEY(User_id) REFERENCES Users(Id)
)