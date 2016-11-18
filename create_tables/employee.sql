DROP TABLE employee;
CREATE TABLE employee (
  essn              char(9) not null,
  fname             varchar(15),
  minit		          char(1),
  lname		          varchar(15),
  address   	      varchar(45),
  sex   		        char(1),
  age		            int,
  contact_num       int,
  salary            int,
  hid               char(9),
  nurse_flg         char(1),
  doctor_flg        char(1),
  liscence_no       int(15),
  primary key (essn),
  foreign key (hid) references hospital(hid)
);
