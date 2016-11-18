DROP TABLE medicine;
CREATE TABLE medicine (
  mcode             char(9) not null,
  dose              varchar(15),
  mprice		        int,
  mdescr		        varchar(200),
  essn              char(9),
  pssn   	          char(9),
  primary key (mcode),
  foreign key (essn) references employee(essn),
  foreign key (pssn) references patient(pssn)
);