TYPE=VIEW
query=select `oxid`.`oxcontents`.`OXID` AS `OXID`,`oxid`.`oxcontents`.`OXLOADID` AS `OXLOADID`,`oxid`.`oxcontents`.`OXSHOPID` AS `OXSHOPID`,`oxid`.`oxcontents`.`OXSNIPPET` AS `OXSNIPPET`,`oxid`.`oxcontents`.`OXTYPE` AS `OXTYPE`,`oxid`.`oxcontents`.`OXACTIVE_1` AS `OXACTIVE`,`oxid`.`oxcontents`.`OXPOSITION` AS `OXPOSITION`,`oxid`.`oxcontents`.`OXTITLE_1` AS `OXTITLE`,`oxid`.`oxcontents`.`OXCONTENT_1` AS `OXCONTENT`,`oxid`.`oxcontents`.`OXCATID` AS `OXCATID`,`oxid`.`oxcontents`.`OXFOLDER` AS `OXFOLDER`,`oxid`.`oxcontents`.`OXTERMVERSION` AS `OXTERMVERSION`,`oxid`.`oxcontents`.`OXTIMESTAMP` AS `OXTIMESTAMP` from `oxid`.`oxcontents`
md5=154be2559c9ac1f3a48ed80d0145f83a
updatable=1
algorithm=0
definer_user=oxid
definer_host=%
suid=0
with_check_option=0
timestamp=2024-09-05 12:52:36
create-version=1
source=SELECT oxcontents.OXID AS OXID,oxcontents.OXLOADID AS OXLOADID,oxcontents.OXSHOPID AS OXSHOPID,oxcontents.OXSNIPPET AS OXSNIPPET,oxcontents.OXTYPE AS OXTYPE,oxcontents.OXACTIVE_1 AS OXACTIVE,oxcontents.OXPOSITION AS OXPOSITION,oxcontents.OXTITLE_1 AS OXTITLE,oxcontents.OXCONTENT_1 AS OXCONTENT,oxcontents.OXCATID AS OXCATID,oxcontents.OXFOLDER AS OXFOLDER,oxcontents.OXTERMVERSION AS OXTERMVERSION,oxcontents.OXTIMESTAMP AS OXTIMESTAMP FROM oxcontents
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `oxid`.`oxcontents`.`OXID` AS `OXID`,`oxid`.`oxcontents`.`OXLOADID` AS `OXLOADID`,`oxid`.`oxcontents`.`OXSHOPID` AS `OXSHOPID`,`oxid`.`oxcontents`.`OXSNIPPET` AS `OXSNIPPET`,`oxid`.`oxcontents`.`OXTYPE` AS `OXTYPE`,`oxid`.`oxcontents`.`OXACTIVE_1` AS `OXACTIVE`,`oxid`.`oxcontents`.`OXPOSITION` AS `OXPOSITION`,`oxid`.`oxcontents`.`OXTITLE_1` AS `OXTITLE`,`oxid`.`oxcontents`.`OXCONTENT_1` AS `OXCONTENT`,`oxid`.`oxcontents`.`OXCATID` AS `OXCATID`,`oxid`.`oxcontents`.`OXFOLDER` AS `OXFOLDER`,`oxid`.`oxcontents`.`OXTERMVERSION` AS `OXTERMVERSION`,`oxid`.`oxcontents`.`OXTIMESTAMP` AS `OXTIMESTAMP` from `oxid`.`oxcontents`
