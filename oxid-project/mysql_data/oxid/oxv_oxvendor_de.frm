TYPE=VIEW
query=select `oxid`.`oxvendor`.`OXID` AS `OXID`,`oxid`.`oxvendor`.`OXSHOPID` AS `OXSHOPID`,`oxid`.`oxvendor`.`OXACTIVE` AS `OXACTIVE`,`oxid`.`oxvendor`.`OXICON` AS `OXICON`,`oxid`.`oxvendor`.`OXTITLE` AS `OXTITLE`,`oxid`.`oxvendor`.`OXSHORTDESC` AS `OXSHORTDESC`,`oxid`.`oxvendor`.`OXSHOWSUFFIX` AS `OXSHOWSUFFIX`,`oxid`.`oxvendor`.`OXTIMESTAMP` AS `OXTIMESTAMP` from `oxid`.`oxvendor`
md5=c082fe271e357d04bc9e0db6c24b9644
updatable=1
algorithm=0
definer_user=oxid
definer_host=%
suid=0
with_check_option=0
timestamp=2024-09-05 12:52:36
create-version=1
source=SELECT oxvendor.OXID AS OXID,oxvendor.OXSHOPID AS OXSHOPID,oxvendor.OXACTIVE AS OXACTIVE,oxvendor.OXICON AS OXICON,oxvendor.OXTITLE AS OXTITLE,oxvendor.OXSHORTDESC AS OXSHORTDESC,oxvendor.OXSHOWSUFFIX AS OXSHOWSUFFIX,oxvendor.OXTIMESTAMP AS OXTIMESTAMP FROM oxvendor
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `oxid`.`oxvendor`.`OXID` AS `OXID`,`oxid`.`oxvendor`.`OXSHOPID` AS `OXSHOPID`,`oxid`.`oxvendor`.`OXACTIVE` AS `OXACTIVE`,`oxid`.`oxvendor`.`OXICON` AS `OXICON`,`oxid`.`oxvendor`.`OXTITLE` AS `OXTITLE`,`oxid`.`oxvendor`.`OXSHORTDESC` AS `OXSHORTDESC`,`oxid`.`oxvendor`.`OXSHOWSUFFIX` AS `OXSHOWSUFFIX`,`oxid`.`oxvendor`.`OXTIMESTAMP` AS `OXTIMESTAMP` from `oxid`.`oxvendor`
