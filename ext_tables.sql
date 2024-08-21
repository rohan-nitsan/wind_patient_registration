CREATE TABLE tx_windpatientregistration_domain_model_careprovider (
	title varchar(255) NOT NULL DEFAULT '',
	website varchar(255) NOT NULL DEFAULT '',
	street varchar(255) NOT NULL DEFAULT '',
	house_number int(11) NOT NULL DEFAULT '0',
	house_number_addition varchar(255) NOT NULL DEFAULT '',
	zip varchar(255) NOT NULL DEFAULT '',
	email varchar(255) NOT NULL DEFAULT '',
	email_administration varchar(255) NOT NULL DEFAULT '',
	longitude varchar(255) NOT NULL DEFAULT '',
	latitude varchar(255) NOT NULL DEFAULT '',
	status int(11) NOT NULL DEFAULT '0',
	credit int(11) NOT NULL DEFAULT '0',
	type int(11) unsigned DEFAULT '0',
	info_system int(11) unsigned DEFAULT '0',
	service_area int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_windpatientregistration_domain_model_caregroup (
	title varchar(255) NOT NULL DEFAULT '',
	healthcare_provider int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_windpatientregistration_domain_model_caretype (
	title varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_windpatientregistration_domain_model_informationsystem (
	title varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_windpatientregistration_domain_model_servicearea (
	start int(11) NOT NULL DEFAULT '0',
	end int(11) NOT NULL DEFAULT '0'
);

CREATE TABLE tx_windpatientregistration_domain_model_childregistration (
	bsn varchar(255) NOT NULL DEFAULT '',
	birthday date DEFAULT NULL,
	permission_required smallint(1) unsigned NOT NULL DEFAULT '0',
	guardian_name varchar(255) NOT NULL DEFAULT '',
	guardian_email varchar(255) NOT NULL DEFAULT '',
	status int(11) NOT NULL DEFAULT '0'
);

CREATE TABLE tx_windpatientregistration_domain_model_formfield (
	title varchar(255) NOT NULL DEFAULT '',
	type int(11) NOT NULL DEFAULT '0',
	options varchar(255) NOT NULL DEFAULT '',
	healthcare_provider int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_windpatientregistration_domain_model_fieldsorting (
	field varchar(255) NOT NULL DEFAULT '',
	field_sorting int(11) NOT NULL DEFAULT '0',
	options varchar(255) NOT NULL DEFAULT '',
	healthcare_provider int(11) unsigned DEFAULT '0'
);

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder