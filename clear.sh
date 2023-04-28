mysql <<EOFMYSQL
use cjwarstl;
show tables;

CREATE TABLE Students(
    studentID int NOT NULL,
    studentName char(50) NOT NULL,
    major char(25) NOT NULL,
    PRIMARY KEY (studentID)
    );

CREATE TABLE Jobs(
    jobID int NOT NULL,
    companyName char(50) NOT NULL,
    jobTitle char(50) NOT NULL,
    salary int NOT NULL,
    desiredMajor char(50) NOT NULL,
    PRIMARY key (jobID)
    );

CREATE TABLE Applications(
    studentID int,
    jobID int,
    PRIMARY KEY(studentID, jobID),
    FOREIGN KEY (studentID) REFERENCES Students(studentID),
    FOREIGN KEY (jobID) REFERENCES Jobs(jobID)
    );

INSERT INTO Students VALUES (010971514, 'Clayton Warstler', 'CSCE');
INSERT INTO Students VALUES (010904940, 'Drew Stull', 'CSCE');
INSERT INTO Students VALUES (010963348, 'Daijon Roberts', 'CSCE');

INSERT INTO Jobs VALUES (1, 'JB Hunt', 'Software Engineer 1', 95000, 'CSCE');
INSERT INTO Jobs VALUES (2, 'Walmart', 'Software Engineer 2', 97500, 'CSCE');

INSERT INTO Applications VALUES (010971514, 1);

show tables;
 
EOFMYSQL