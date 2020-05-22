/*
Employees at shop are having more and more problems using this Excel worksheet. There are
more borrowers every day. Our company received order for creating small modern program
to solve those problems. You are given the task to design database schema. Based on
information above design the best database schema you possibly can.
*/
CREATE TABLE Customers (
CustomerID INT(6) UNSIGNED AUTO_INCREMENT,
Firstname VARCHAR(30) NOT NULL,
Lastname VARCHAR(30) NOT NULL,
Phone VARCHAR(15) NOT NULL,
PRIMARY KEY (CustomerID)
)

CREATE TABLE Books (
BookID INT(5) UNSIGNED AUTO_INCREMENT,
Bookname VARCHAR(30) NOT NULL,
PRIMARY KEY (BookID)
)

CREATE TABLE Rentals (
RentalID INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
BookID INT(5) NOT NULL,
CustomerID INT(6) NOT NULL,
BorrowDate DATETIME NOT NULL,
ReturnDate DATETIME NULL DEFAULT NULL,
FOREIGN KEY (CustomerID) REFERENCES Customers(CustomerID),
FOREIGN KEY (BookID) REFERENCES Books(BookID)
)
