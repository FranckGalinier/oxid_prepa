TYPE=VIEW
query=select `oxid`.`oxdelivery`.`OXID` AS `OXID`,`oxid`.`oxdelivery`.`OXSHOPID` AS `OXSHOPID`,`oxid`.`oxdelivery`.`OXACTIVE` AS `OXACTIVE`,`oxid`.`oxdelivery`.`OXACTIVEFROM` AS `OXACTIVEFROM`,`oxid`.`oxdelivery`.`OXACTIVETO` AS `OXACTIVETO`,`oxid`.`oxdelivery`.`OXTITLE` AS `OXTITLE`,`oxid`.`oxdelivery`.`OXTITLE_1` AS `OXTITLE_1`,`oxid`.`oxdelivery`.`OXTITLE_2` AS `OXTITLE_2`,`oxid`.`oxdelivery`.`OXTITLE_3` AS `OXTITLE_3`,`oxid`.`oxdelivery`.`OXADDSUMTYPE` AS `OXADDSUMTYPE`,`oxid`.`oxdelivery`.`OXADDSUM` AS `OXADDSUM`,`oxid`.`oxdelivery`.`OXDELTYPE` AS `OXDELTYPE`,`oxid`.`oxdelivery`.`OXPARAM` AS `OXPARAM`,`oxid`.`oxdelivery`.`OXPARAMEND` AS `OXPARAMEND`,`oxid`.`oxdelivery`.`OXFIXED` AS `OXFIXED`,`oxid`.`oxdelivery`.`OXSORT` AS `OXSORT`,`oxid`.`oxdelivery`.`OXFINALIZE` AS `OXFINALIZE`,`oxid`.`oxdelivery`.`OXTIMESTAMP` AS `OXTIMESTAMP` from `oxid`.`oxdelivery`
md5=bc0dc850960035bf4bbdd4f0bc979eb6
updatable=1
algorithm=0
definer_user=oxid
definer_host=%
suid=0
with_check_option=0
timestamp=2024-09-05 12:52:36
create-version=1
source=SELECT oxdelivery.OXID,oxdelivery.OXSHOPID,oxdelivery.OXACTIVE,oxdelivery.OXACTIVEFROM,oxdelivery.OXACTIVETO,oxdelivery.OXTITLE,oxdelivery.OXTITLE_1,oxdelivery.OXTITLE_2,oxdelivery.OXTITLE_3,oxdelivery.OXADDSUMTYPE,oxdelivery.OXADDSUM,oxdelivery.OXDELTYPE,oxdelivery.OXPARAM,oxdelivery.OXPARAMEND,oxdelivery.OXFIXED,oxdelivery.OXSORT,oxdelivery.OXFINALIZE,oxdelivery.OXTIMESTAMP FROM oxdelivery
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `oxid`.`oxdelivery`.`OXID` AS `OXID`,`oxid`.`oxdelivery`.`OXSHOPID` AS `OXSHOPID`,`oxid`.`oxdelivery`.`OXACTIVE` AS `OXACTIVE`,`oxid`.`oxdelivery`.`OXACTIVEFROM` AS `OXACTIVEFROM`,`oxid`.`oxdelivery`.`OXACTIVETO` AS `OXACTIVETO`,`oxid`.`oxdelivery`.`OXTITLE` AS `OXTITLE`,`oxid`.`oxdelivery`.`OXTITLE_1` AS `OXTITLE_1`,`oxid`.`oxdelivery`.`OXTITLE_2` AS `OXTITLE_2`,`oxid`.`oxdelivery`.`OXTITLE_3` AS `OXTITLE_3`,`oxid`.`oxdelivery`.`OXADDSUMTYPE` AS `OXADDSUMTYPE`,`oxid`.`oxdelivery`.`OXADDSUM` AS `OXADDSUM`,`oxid`.`oxdelivery`.`OXDELTYPE` AS `OXDELTYPE`,`oxid`.`oxdelivery`.`OXPARAM` AS `OXPARAM`,`oxid`.`oxdelivery`.`OXPARAMEND` AS `OXPARAMEND`,`oxid`.`oxdelivery`.`OXFIXED` AS `OXFIXED`,`oxid`.`oxdelivery`.`OXSORT` AS `OXSORT`,`oxid`.`oxdelivery`.`OXFINALIZE` AS `OXFINALIZE`,`oxid`.`oxdelivery`.`OXTIMESTAMP` AS `OXTIMESTAMP` from `oxid`.`oxdelivery`
