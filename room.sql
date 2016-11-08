DROP TABLE room;
CREATE TABLE room (
  rid        char(3) not null,
  rdescription   varchar(200),
  hid		 char(3),
  primary key (rid),
  foreign key (hid)
);