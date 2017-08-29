CREATE TABLE tx_nreach_entities (
uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
pid int(11) DEFAULT '0' NOT NULL,

`title` varchar(255) NOT NULL DEFAULT '',
`formdata` json DEFAULT NULL,
`jsonld` json DEFAULT NULL,

PRIMARY KEY (uid),
KEY parent (pid)
);
