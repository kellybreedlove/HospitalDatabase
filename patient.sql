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
  mgrstartdate      date,
  primary key (dnumber),
  key (dname)
);
