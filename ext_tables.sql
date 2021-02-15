#
# Table structure for table 'tx_embettyvideo4typo3_domain_model_video'
#
CREATE TABLE tx_embettyvideo4typo3_domain_model_video (

	title varchar(255) DEFAULT '' NOT NULL,
	videoid varchar(255) DEFAULT '' NOT NULL,
	coverimage int(11) unsigned NOT NULL default '0',
	overlayimage int(11) unsigned NOT NULL default '0',
	description text

);
