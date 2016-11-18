DROP TABLE procedure_nurse;
CREATE TABLE procedure_nurse (
  pcode             char(9) not null,
  essn              char(9) not null,
  foreign key (pcode) references procedures(pcode),
  foreign key (essn) references employee(essn)
);