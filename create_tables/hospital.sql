DROP TABLE hospital;
CREATE TABLE hospital (
  hid               char(9) not null,
  hname             varchar(15),
  haddress	        varchar(45),
  primary key (hid)
  );