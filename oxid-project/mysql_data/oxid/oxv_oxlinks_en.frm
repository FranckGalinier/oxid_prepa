TYPE=VIEW
query=select `oxid`.`oxlinks`.`OXID` AS `OXID`,`oxid`.`oxlinks`.`OXSHOPID` AS `OXSHOPID`,`oxid`.`oxlinks`.`OXACTIVE` AS `OXACTIVE`,`oxid`.`oxlinks`.`OXURL` AS `OXURL`,`oxid`.`oxlinks`.`OXURLDESC_1` AS `OXURLDESC`,`oxid`.`oxlinks`.`OXINSERT` AS `OXINSERT`,`oxid`.`oxlinks`.`OXTIMESTAMP` AS `OXTIMESTAMP` from `oxid`.`oxlinks`
md5=7e021ed01abcb57f2b4888f1446b4ae0
updatable=1
algorithm=0
definer_user=oxid
definer_host=%
suid=0
with_check_option=0
timestamp=2024-09-05 12:52:36
create-version=1
source=SELECT oxlinks.OXID AS OXID,oxlinks.OXSHOPID AS OXSHOPID,oxlinks.OXACTIVE AS OXACTIVE,oxlinks.OXURL AS OXURL,oxlinks.OXURLDESC_1 AS OXURLDESC,oxlinks.OXINSERT AS OXINSERT,oxlinks.OXTIMESTAMP AS OXTIMESTAMP FROM oxlinks
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `oxid`.`oxlinks`.`OXID` AS `OXID`,`oxid`.`oxlinks`.`OXSHOPID` AS `OXSHOPID`,`oxid`.`oxlinks`.`OXACTIVE` AS `OXACTIVE`,`oxid`.`oxlinks`.`OXURL` AS `OXURL`,`oxid`.`oxlinks`.`OXURLDESC_1` AS `OXURLDESC`,`oxid`.`oxlinks`.`OXINSERT` AS `OXINSERT`,`oxid`.`oxlinks`.`OXTIMESTAMP` AS `OXTIMESTAMP` from `oxid`.`oxlinks`
