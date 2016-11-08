DROP TABLE procedure_nurse;
CREATE TABLE procedure_nurse (
  pcode             char(9) not null,
  essn              char(9) not null,
  foreign key (pcode),
  foreign key (essn)
);