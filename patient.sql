DROP TABLE patient;
CREATE TABLE patient (
  pssn              char(9) not null,
  fname             varchar(15),
  minit		          char(1),
  lname		          varchar(15),
  inits             char(3),
  address   	      varchar(45),
  sex   		        char(1),
  age		            int,
  date_admit        date, 
  date_disch      date,
  contactNum	char(10),
  info			varchar(200),
  rid			char(9),
  primary key (pssn),
  foreign key (rid) references room(rid)
);
