DROP TABLE room;
CREATE TABLE room (
  rid        char(9) not null,
  rdescription   varchar(200),
  hid		 char(9),
  primary key (rid),
  foreign key (hid) references hospital(hid)
);