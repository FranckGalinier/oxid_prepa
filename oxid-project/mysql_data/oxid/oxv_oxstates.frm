TYPE=VIEW
query=select `oxid`.`oxstates`.`OXID` AS `OXID`,`oxid`.`oxstates`.`OXCOUNTRYID` AS `OXCOUNTRYID`,`oxid`.`oxstates`.`OXTITLE` AS `OXTITLE`,`oxid`.`oxstates`.`OXISOALPHA2` AS `OXISOALPHA2`,`oxid`.`oxstates`.`OXTITLE_1` AS `OXTITLE_1`,`oxid`.`oxstates`.`OXTITLE_2` AS `OXTITLE_2`,`oxid`.`oxstates`.`OXTITLE_3` AS `OXTITLE_3`,`oxid`.`oxstates`.`OXTIMESTAMP` AS `OXTIMESTAMP` from `oxid`.`oxstates`
md5=6758754d7b8a9642ebf80b2f191d03eb
updatable=1
algorithm=0
definer_user=oxid
definer_host=%
suid=0
with_check_option=0
timestamp=2024-09-05 12:52:36
create-version=1
source=SELECT oxstates.OXID,oxstates.OXCOUNTRYID,oxstates.OXTITLE,oxstates.OXISOALPHA2,oxstates.OXTITLE_1,oxstates.OXTITLE_2,oxstates.OXTITLE_3,oxstates.OXTIMESTAMP FROM oxstates
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `oxid`.`oxstates`.`OXID` AS `OXID`,`oxid`.`oxstates`.`OXCOUNTRYID` AS `OXCOUNTRYID`,`oxid`.`oxstates`.`OXTITLE` AS `OXTITLE`,`oxid`.`oxstates`.`OXISOALPHA2` AS `OXISOALPHA2`,`oxid`.`oxstates`.`OXTITLE_1` AS `OXTITLE_1`,`oxid`.`oxstates`.`OXTITLE_2` AS `OXTITLE_2`,`oxid`.`oxstates`.`OXTITLE_3` AS `OXTITLE_3`,`oxid`.`oxstates`.`OXTIMESTAMP` AS `OXTIMESTAMP` from `oxid`.`oxstates`
