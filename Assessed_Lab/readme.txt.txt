Hostname = ap-cdbr-azure-east-c.cloudapp.net
username = b419ceeda1d055
psw = 5b8fbe3f
Database = CMM007ALDB-1405114

https://github.com/Ludwigov/CMM007AL-1405114

https://portal.azure.com/#resource/subscriptions/d80d3658-951d-4a26-82c3-b62cb01d2709/resourceGroups/Default/providers/SuccessBricks.ClearDB/databases/CMM007ALDB-1405114

create table 'blogView'(
'blogitemID'  NOT NULL AUTO_INCREMMENT,
'entrytitle' varchar(20)NOT NULL,
'entrysummary' text NOT NULL,
'category' varchar (10)NOT NULL,
'submitter' varchar(20)NOT NULL,
PRIMARY KEY('blogitemID')
);

