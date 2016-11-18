DROP TABLE procedures;
CREATE TABLE procedures (
  pcode              char(9) not null,
  pprice             int,
  pdescr		         varchar(200),
  pdate		           date,
  pssn               char(9),
  essn      	       char(9),
  primary key (pcode),
  foreign key (pssn) references patient(pssn),
  foreign key (essn) references employee(essn)
);