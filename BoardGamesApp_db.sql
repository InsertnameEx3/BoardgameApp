create table battles
(
  id         int auto_increment
    primary key,
  dtPlayed   date         not null,
  gameid     int          not null,
  playerid01 int          not null,
  playerid02 int          not null,
  playerid03 int          null,
  playerid04 int          null,
  wonby      int          not null,
  score      varchar(256) null
)
  charset = utf8;

create table games
(
  id          int(4) auto_increment
    primary key,
  name        varchar(128)              not null,
  nop         varchar(128)              not null,
  dor         year                      not null,
  publisherid int(4)                    null,
  duration    varchar(32)               null,
  description varchar(12800) default '' not null
)
  charset = utf8;

create table users
(
  id       int(2) auto_increment
    primary key,
  fname    varchar(128)            not null,
  lname    varchar(255)            not null,
  email    varchar(255)            not null,
  mobile   varchar(10) default ''  not null,
  password varchar(256) default '' null,
  pwcheck  varchar(256) default '' null
)
  charset = utf8;

create table player
(
  id         int(2) auto_increment
    primary key,
  nickname   varchar(128)    not null,
  gamestatus int default '1' null,
  constraint player_users_id_fk
  foreign key (id) references users (id)
);