CREATE TABLE tx_t3data_domain_model_entity (
uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
pid int(11) DEFAULT '0' NOT NULL,

tstamp int(11) unsigned DEFAULT '0' NOT NULL,
crdate int(11) unsigned DEFAULT '0' NOT NULL,
deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
sys_language_uid int(11) DEFAULT '0' NOT NULL,
l18n_parent int(11) DEFAULT '0' NOT NULL,
l18n_diffsource mediumtext,
access_group int(11) DEFAULT '0' NOT NULL,

`title` varchar(255) NOT NULL DEFAULT '',
`formdata` json DEFAULT NULL,
`jsonld` json DEFAULT NULL,

PRIMARY KEY (uid),
KEY parent (pid)
);
