DB Account: hongzhe_db

Account login: root / e6KB#KMJOTBej6aJv1


#cmd
UPDATE wp_options SET option_value = REPLACE (option_value, 'http://hongzhe.lo', 'http://hongzhe.toilamit.com/');

UPDATE wp_posts SET guid = REPLACE (guid, 'http://hongzhe.lo', 'http://hongzhe.toilamit.com/');
