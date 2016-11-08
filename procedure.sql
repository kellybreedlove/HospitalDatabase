DROP TABLE procedure;
CREATE TABLE procedure (
  pcode              char(9) not null,
  pprice             int,
  pdescr		         varchar(200),
  pdate		           date,
  pssn               char(9),
  essn      	       char(9),
  primary key (pcode),
  foreign key (pssn),
  foreign key (essn)
);