DROP TABLE appointment;
CREATE TABLE appointment (
  aid        char(3) not null,
  pssn       char(9),
  essn	     char(9),
  rid		 char(3),
  primary key (aid),
  foreign key (pssn) references patient(pssn),
  foreign key (essn) references employee(essn),
  foreign key (rid) references room(rid)
);