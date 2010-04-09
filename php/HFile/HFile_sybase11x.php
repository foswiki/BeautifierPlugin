<?php
global $BEAUT_PATH;
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_sybase11x extends HFile{
   function HFile_sybase11x(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// Sybase 11.x SQL
/*************************************/
// Flags

$this->nocase            	= "1";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "gray", "gray", "purple", "brown", "blue", "purple");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array("begin");
$this->unindent          	= array("end");

// String characters and delimiters

$this->stringchars       	= array();
$this->delimiters        	= array("~", "!", "%", "^", "&", "*", "(", ")", "-", "+", "=", "|", "\\", "/", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", "	", ".", "?");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("--");
$this->blockcommenton    	= array("/*");
$this->blockcommentoff   	= array("*/");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"activation" => "1", 
			"add" => "1", 
			"all" => "1", 
			"alter" => "1", 
			"and" => "1", 
			"any" => "1", 
			"arith_overflow" => "1", 
			"as" => "1", 
			"asc" => "1", 
			"at" => "1", 
			"authorization" => "1", 
			"avg" => "7", 
			"begin" => "1", 
			"between" => "1", 
			"break" => "1", 
			"browse" => "1", 
			"bulk" => "1", 
			"by" => "1", 
			"cascade" => "1", 
			"char_convert" => "1", 
			"check" => "1", 
			"checkpoint" => "1", 
			"close" => "1", 
			"clustered" => "1", 
			"commit" => "1", 
			"compute" => "1", 
			"confirm" => "1", 
			"connect" => "1", 
			"constraint" => "1", 
			"consumers" => "1", 
			"continue" => "1", 
			"controlrow" => "1", 
			"convert" => "7", 
			"count" => "7", 
			"create" => "1", 
			"current" => "1", 
			"cursor" => "1", 
			"database" => "1", 
			"dbcc" => "1", 
			"deallocate" => "1", 
			"declare" => "1", 
			"default" => "1", 
			"delete" => "1", 
			"desc" => "1", 
			"disk" => "1", 
			"distinct" => "1", 
			"double" => "1", 
			"drop" => "1", 
			"dummy" => "1", 
			"dump" => "1", 
			"else" => "1", 
			"end" => "1", 
			"endtran" => "1", 
			"errlvl" => "1", 
			"errordata" => "1", 
			"errorexit" => "1", 
			"escape" => "1", 
			"except" => "1", 
			"exclusive" => "1", 
			"exec" => "1", 
			"execute" => "1", 
			"exists" => "1", 
			"exit" => "1", 
			"external" => "1", 
			"fetch" => "1", 
			"fillfactor" => "1", 
			"for" => "1", 
			"foreign" => "1", 
			"from" => "1", 
			"goto" => "1", 
			"grant" => "1", 
			"group" => "1", 
			"having" => "1", 
			"holdlock" => "1", 
			"identity_insert" => "1", 
			"identity_start" => "1", 
			"if" => "1", 
			"in" => "1", 
			"index" => "1", 
			"insert" => "1", 
			"intersect" => "1", 
			"into" => "1", 
			"is" => "1", 
			"isolation" => "1", 
			"key" => "1", 
			"kill" => "1", 
			"level" => "1", 
			"like" => "1", 
			"lineno" => "1", 
			"load" => "1", 
			"max" => "7", 
			"max_rows_per_page" => "1", 
			"membership" => "1", 
			"min" => "7", 
			"mirror" => "1", 
			"mirrorexit" => "1", 
			"national" => "1", 
			"noholdlock" => "1", 
			"nonclustered" => "1", 
			"not" => "1", 
			"null" => "1", 
			"numeric_transaction" => "1", 
			"of" => "1", 
			"off" => "1", 
			"offsets" => "1", 
			"on" => "1", 
			"once" => "1", 
			"online" => "1", 
			"only" => "1", 
			"open" => "1", 
			"option" => "1", 
			"or" => "1", 
			"order" => "1", 
			"over" => "1", 
			"partition" => "1", 
			"passwd" => "1", 
			"perm" => "1", 
			"permanent" => "1", 
			"plan" => "1", 
			"precision" => "1", 
			"prepare" => "1", 
			"primary" => "1", 
			"print" => "1", 
			"privileges" => "1", 
			"proc" => "1", 
			"procedure" => "1", 
			"processexit" => "1", 
			"proxy" => "1", 
			"public" => "1", 
			"raiserror" => "1", 
			"read" => "1", 
			"readtext" => "1", 
			"reconfigure" => "1", 
			"references" => "1", 
			"replace" => "1", 
			"return" => "3", 
			"revoke" => "1", 
			"role" => "1", 
			"rollback" => "1", 
			"rowcount" => "1", 
			"rows" => "1", 
			"rule" => "1", 
			"save" => "1", 
			"schema" => "1", 
			"select" => "1", 
			"session" => "1", 
			"set" => "1", 
			"setuser" => "1", 
			"shared" => "1", 
			"shutdown" => "1", 
			"some" => "1", 
			"statistics" => "1", 
			"stripe" => "1", 
			"sum" => "7", 
			"syb_identity" => "1", 
			"syb_restree" => "1", 
			"table" => "1", 
			"temp" => "1", 
			"temporary" => "1", 
			"textsize" => "1", 
			"to" => "1", 
			"tran" => "1", 
			"transaction" => "1", 
			"trigger" => "1", 
			"truncate" => "1", 
			"tsequal" => "7", 
			"union" => "1", 
			"unique" => "1", 
			"unpartition" => "1", 
			"update" => "1", 
			"use" => "1", 
			"user" => "7", 
			"user_option" => "1", 
			"using" => "1", 
			"values" => "1", 
			"varying" => "1", 
			"view" => "1", 
			"waitfor" => "1", 
			"where" => "1", 
			"while" => "1", 
			"with" => "1", 
			"work" => "1", 
			"writetext" => "1", 
			"absolute" => "2", 
			"action" => "2", 
			"allocate" => "2", 
			"are" => "2", 
			"assertion" => "2", 
			"bit" => "2", 
			"bit_length" => "2", 
			"both" => "2", 
			"cascaded" => "2", 
			"case" => "2", 
			"cast" => "2", 
			"catalog" => "2", 
			"char" => "7", 
			"char_length" => "7", 
			"character" => "2", 
			"character_length" => "2", 
			"coalesce" => "7", 
			"collate" => "2", 
			"collation" => "2", 
			"column" => "2", 
			"connection" => "2", 
			"constraints" => "2", 
			"corresponding" => "2", 
			"cross" => "2", 
			"current_date" => "2", 
			"current_time" => "2", 
			"current_timestamp" => "2", 
			"current_user" => "2", 
			"date" => "2", 
			"day" => "2", 
			"dec" => "2", 
			"decimal" => "2", 
			"deferrable" => "2", 
			"deferred" => "2", 
			"describe" => "2", 
			"descriptor" => "2", 
			"diagnostics" => "2", 
			"disconnect" => "2", 
			"domain" => "2", 
			"end-exec" => "2", 
			"exception" => "2", 
			"extract" => "2", 
			"false" => "2", 
			"first" => "2", 
			"float" => "2", 
			"found" => "2", 
			"full" => "2", 
			"get" => "2", 
			"global" => "2", 
			"go" => "2", 
			"hour" => "2", 
			"immediate" => "2", 
			"indicator" => "2", 
			"initially" => "2", 
			"inner" => "2", 
			"input" => "2", 
			"insensitive" => "2", 
			"int" => "2", 
			"integer" => "2", 
			"interval" => "2", 
			"join" => "2", 
			"language" => "2", 
			"last" => "2", 
			"leading" => "2", 
			"left" => "2", 
			"local" => "2", 
			"lower" => "7", 
			"match" => "2", 
			"minute" => "2", 
			"module" => "2", 
			"month" => "2", 
			"names" => "2", 
			"natural" => "2", 
			"nchar" => "2", 
			"next" => "2", 
			"no" => "2", 
			"nullif" => "2", 
			"numeric" => "2", 
			"octet_length" => "2", 
			"outer" => "2", 
			"output" => "2", 
			"overlaps" => "2", 
			"pad" => "2", 
			"partial" => "2", 
			"position" => "2", 
			"preserve" => "2", 
			"prior" => "2", 
			"real" => "2", 
			"relative" => "2", 
			"restrict" => "2", 
			"right" => "7", 
			"scroll" => "2", 
			"second" => "2", 
			"section" => "2", 
			"session_user" => "2", 
			"size" => "2", 
			"smallint" => "2", 
			"space" => "7", 
			"sql" => "2", 
			"sqlcode" => "2", 
			"sqlerror" => "2", 
			"sqlstate" => "2", 
			"substring" => "7", 
			"system_user" => "2", 
			"then" => "2", 
			"time" => "2", 
			"timestamp" => "2", 
			"timezone_hour" => "2", 
			"timezone_minute" => "2", 
			"trailing" => "2", 
			"translate" => "2", 
			"translation" => "2", 
			"trim" => "2", 
			"true" => "2", 
			"unknown" => "2", 
			"upper" => "7", 
			"usage" => "2", 
			"value" => "2", 
			"varchar" => "2", 
			"varbinary" => "2", 
			"when" => "2", 
			"whenever" => "2", 
			"write" => "2", 
			"year" => "2", 
			"zone" => "2", 
			"after" => "3", 
			"alias" => "3", 
			"async" => "3", 
			"before" => "3", 
			"boolean" => "3", 
			"breadth" => "3", 
			"call" => "3", 
			"completion" => "3", 
			"cycle" => "3", 
			"data" => "3", 
			"depth" => "3", 
			"dictionary" => "3", 
			"each" => "3", 
			"elseif" => "3", 
			"equals" => "3", 
			"general" => "3", 
			"ignore" => "3", 
			"leave" => "3", 
			"less" => "3", 
			"limit" => "3", 
			"loop" => "3", 
			"modify" => "3", 
			"new" => "3", 
			"none" => "3", 
			"object" => "3", 
			"oid" => "3", 
			"old" => "3", 
			"operation" => "3", 
			"operators" => "3", 
			"others" => "3", 
			"parameters" => "3", 
			"pendant" => "3", 
			"preorder" => "3", 
			"private" => "3", 
			"protected" => "3", 
			"recursive" => "3", 
			"ref" => "3", 
			"referencing" => "3", 
			"resignal" => "3", 
			"returns" => "3", 
			"routine" => "3", 
			"row" => "3", 
			"savepoint" => "3", 
			"search" => "3", 
			"sensitive" => "3", 
			"sequence" => "3", 
			"signal" => "3", 
			"similar" => "3", 
			"sqlexception" => "3", 
			"structure" => "3", 
			"test" => "3", 
			"there" => "3", 
			"type" => "3", 
			"under" => "3", 
			"variable" => "3", 
			"virtual" => "3", 
			"visible" => "3", 
			"wait" => "3", 
			"without" => "3", 
			"sp_activeroles" => "4", 
			"sp_addalias" => "4", 
			"sp_addauditrecord" => "4", 
			"sp_addaudittable" => "4", 
			"sp_addextendedproc" => "4", 
			"sp_addexternlogin" => "4", 
			"sp_addgroup" => "4", 
			"sp_addlanguage" => "4", 
			"sp_addlogin" => "4", 
			"sp_addmessage" => "4", 
			"sp_addobjectdef" => "4", 
			"sp_addremotelogin" => "4", 
			"sp_add_resource_limit" => "4", 
			"sp_addsegment" => "4", 
			"sp_addserver" => "4", 
			"sp_addthreshold" => "4", 
			"sp_add_time_range" => "4", 
			"sp_addtype" => "4", 
			"sp_addumpdevice" => "4", 
			"sp_adduser" => "4", 
			"sp_altermessage" => "4", 
			"sp_autoconnect" => "4", 
			"sp_bindcache" => "4", 
			"sp_bindefault" => "4", 
			"sp_bindmsg" => "4", 
			"sp_bindrule" => "4", 
			"sp_cacheconfig" => "4", 
			"sp_cachestrategy" => "4", 
			"sp_changedbowner" => "4", 
			"sp_changegroup" => "4", 
			"sp_checknames" => "4", 
			"sp_checkreswords" => "4", 
			"sp_checksource" => "4", 
			"sp_chgattribute" => "4", 
			"sp_clearstats" => "4", 
			"sp_commonkey" => "4", 
			"sp_countmetadata" => "4", 
			"sp_cursorinfo" => "4", 
			"sp_column_privileges" => "4", 
			"sp_columns" => "4", 
			"sp_configure" => "4", 
			"sp_databases" => "4", 
			"sp_datatype_info" => "4", 
			"sp_dbcc_alterws" => "4", 
			"sp_dbcc_configreport" => "4", 
			"sp_dbcc_createws" => "4", 
			"sp_dbcc_deletedb" => "4", 
			"sp_dbcc_deletehistory" => "4", 
			"sp_dbcc_differentialreport" => "4", 
			"sp_dbcc_evaluatedb" => "4", 
			"sp_dbcc_faultreport" => "4", 
			"sp_dbcc_fullreport" => "4", 
			"sp_dbcc_runcheck" => "4", 
			"sp_dbcc_statisticsreport" => "4", 
			"sp_dbcc_summaryreport" => "4", 
			"sp_dbcc_updateconfig" => "4", 
			"sp_dboption" => "4", 
			"sp_defaultloc" => "4", 
			"sp_depends" => "4", 
			"sp_diskdefault" => "4", 
			"sp_displayaudit" => "4", 
			"sp_displaylevel" => "4", 
			"sp_displaylogin" => "4", 
			"sp_displayroles" => "4", 
			"sp_dropalias" => "4", 
			"sp_dropdevice" => "4", 
			"sp_dropexeclass" => "4", 
			"sp_dropextendedproc" => "4", 
			"sp_dropexternlogin" => "4", 
			"sp_dropglockpromote" => "4", 
			"sp_dropgroup" => "4", 
			"sp_dropkey" => "4", 
			"sp_droplanguage" => "4", 
			"sp_droplogin" => "4", 
			"sp_dropmessage" => "4", 
			"sp_dropobjectdef" => "4", 
			"sp_dropremotelogin" => "4", 
			"sp_drop_resource_limit" => "4", 
			"sp_dropsegment" => "4", 
			"sp_dropserver" => "4", 
			"sp_dropthreshold" => "4", 
			"sp_drop_time_range" => "4", 
			"sp_droptype" => "4", 
			"sp_dropuser" => "4", 
			"sp_estspace" => "4", 
			"sp_extendsegment" => "4", 
			"sp_familylock" => "4", 
			"sp_forceonline_db" => "4", 
			"sp_forceonline_page" => "4", 
			"sp_foreignkey" => "4", 
			"sp_freedll" => "4", 
			"sp_getmessage" => "4", 
			"sp_grantlogin" => "4", 
			"sp_help" => "4", 
			"sp_helpartition" => "4", 
			"sp_helpcache" => "4", 
			"sp_helpconfig" => "4", 
			"sp_helpconstraint" => "4", 
			"sp_helpdb" => "4", 
			"sp_helpdevice" => "4", 
			"sp_helpextendedproc" => "4", 
			"sp_helpexternlogin" => "4", 
			"sp_helpgroup" => "4", 
			"sp_helpindex" => "4", 
			"sp_helpjoins" => "4", 
			"sp_helpkey" => "4", 
			"sp_helplanguage" => "4", 
			"sp_helplog" => "4", 
			"sp_helpobjectdef" => "4", 
			"sp_helpremotelogin" => "4", 
			"sp_help_resource_limit" => "4", 
			"sp_helprotect" => "4", 
			"sp_helpsegment" => "4", 
			"sp_helpserver" => "4", 
			"sp_helpsort" => "4", 
			"sp_helptext" => "4", 
			"sp_helpthreshold" => "4", 
			"sp_helpuser" => "4", 
			"sp_hidetext" => "4", 
			"sp_indsuspect" => "4", 
			"sp_listsuspect_db" => "4", 
			"sp_listsuspect_page" => "4", 
			"sp_lock" => "4", 
			"sp_locklogin" => "4", 
			"sp_logdevice" => "4", 
			"sp_loginconfig" => "4", 
			"sp_logininfo" => "4", 
			"sp_logiosize" => "4", 
			"sp_modifylogin" => "4", 
			"sp_modify_resource_limit" => "4", 
			"sp_modify_time_range" => "4", 
			"sp_modifythreshold" => "4", 
			"sp_monitor" => "4", 
			"sp_monitorconfig" => "4", 
			"sp_passthru" => "4", 
			"sp_password" => "4", 
			"sp_placeobject" => "4", 
			"sp_plan_dbccdb" => "4", 
			"sp_primarykey" => "4", 
			"sp_processmail" => "4", 
			"sp_procqmode" => "4", 
			"sp_procxmode" => "4", 
			"sp_recompile" => "4", 
			"sp_remoteoption" => "4", 
			"sp_remotesql" => "4", 
			"sp_rename" => "4", 
			"sp_renamedb" => "4", 
			"sp_reportstats" => "4", 
			"sp_revokelogin" => "4", 
			"sp_role" => "4", 
			"sp_serveroption" => "4", 
			"sp_setlangalias" => "4", 
			"sp_setpglockpromote" => "4", 
			"sp_setsuspect_granularity" => "4", 
			"sp_setsuspect_threshold" => "4", 
			"sp_spaceused" => "4", 
			"sp_syntax" => "4", 
			"sp_sysmon" => "4", 
			"sp_unbindcache" => "4", 
			"sp_unbindcache_all" => "4", 
			"sp_unbindefault" => "4", 
			"sp_unbindmsg" => "4", 
			"sp_unbindrule" => "4", 
			"sp_volchanged" => "4", 
			"sp_who" => "4", 
			"sp_fkeys" => "4", 
			"sp_server_info" => "4", 
			"sp_special_columns" => "4", 
			"sp_sproc_columns" => "4", 
			"sp_statistics" => "4", 
			"sp_stored_procedures" => "4", 
			"sp_table_privileges" => "4", 
			"sp_tables" => "4", 
			"xp_cmdshell" => "4", 
			"xp_deletemail" => "4", 
			"xp_enumgroups" => "4", 
			"xp_findnextmsg" => "4", 
			"xp_logevent" => "4", 
			"xp_readmail" => "4", 
			"xp_sendmail" => "4", 
			"xp_startmail" => "4", 
			"xp_stopmail" => "4", 
			"dbo" => "5", 
			"master" => "5", 
			"model" => "5", 
			"tempdb" => "5", 
			"sysalternates" => "5", 
			"sysattributes" => "5", 
			"syscharsets" => "5", 
			"syscolumns" => "5", 
			"syscomments" => "5", 
			"sysconfigures" => "5", 
			"sysconstraints" => "5", 
			"syscurconfigs" => "5", 
			"sysdatabases" => "5", 
			"sysdepends" => "5", 
			"sysdevices" => "5", 
			"sysengines" => "5", 
			"sysgams" => "5", 
			"sysindexes" => "5", 
			"syskeys" => "5", 
			"syslanguages" => "5", 
			"syslisteners" => "5", 
			"syslocks" => "5", 
			"sysloginroles" => "5", 
			"syslogins" => "5", 
			"syslogs" => "5", 
			"syslogshold" => "5", 
			"sysmessages" => "5", 
			"sysmonitors" => "5", 
			"sysobjects" => "5", 
			"syspartitions" => "5", 
			"sysprocedures" => "5", 
			"sysprocesses" => "5", 
			"sysprotects" => "5", 
			"sysreferences" => "5", 
			"sysremotelogins" => "5", 
			"sysresourcelimits" => "5", 
			"sysroles" => "5", 
			"syssecmechs" => "5", 
			"syssegments" => "5", 
			"sysservers" => "5", 
			"syssrvroles" => "5", 
			"sysstatistics" => "5", 
			"systabstats" => "5", 
			"systestlog" => "5", 
			"systhresholds" => "5", 
			"systimeranges" => "5", 
			"systypes" => "5", 
			"sysusages" => "5", 
			"sysusermessages" => "5", 
			"sysusers" => "5", 
			"sybsystemprocs" => "5", 
			"@@char" => "6", 
			"@@connections" => "6", 
			"@@cpu" => "6", 
			"@@error" => "6", 
			"@@global" => "6", 
			"@@identity" => "6", 
			"@@idle" => "6", 
			"@@io" => "6", 
			"@@isolation" => "6", 
			"@@langid" => "6", 
			"@@max" => "6", 
			"@@ncharsize" => "6", 
			"@@nestlevel" => "6", 
			"@@options" => "6", 
			"@@pack" => "6", 
			"@@packet" => "6", 
			"@@pagesize" => "6", 
			"@@parallel" => "6", 
			"@@rowcount" => "6", 
			"@@scan" => "6", 
			"@@servername" => "6", 
			"@@sqlstatus" => "6", 
			"@@textcolid" => "6", 
			"@@textdbid" => "6", 
			"@@textobjid" => "6", 
			"@@textp" => "6", 
			"@@textptr" => "6", 
			"@@textsize" => "6", 
			"@@textts" => "6", 
			"@@thresh" => "6", 
			"@@total" => "6", 
			"@@tranchained" => "6", 
			"@@version" => "6", 
			"abs" => "7", 
			"acos" => "7", 
			"ascii" => "7", 
			"asin" => "7", 
			"atan" => "7", 
			"atn2" => "7", 
			"ceiling" => "7", 
			"charindex" => "7", 
			"col_length" => "7", 
			"col_name" => "7", 
			"cos" => "7", 
			"cot" => "7", 
			"curunreservedpgs" => "7", 
			"data_pgs" => "7", 
			"datalength" => "7", 
			"dateadd" => "7", 
			"datediff" => "7", 
			"datename" => "7", 
			"datepart" => "7", 
			"db_id" => "7", 
			"db_name" => "7", 
			"degrees" => "7", 
			"difference" => "7", 
			"exp" => "7", 
			"floor" => "7", 
			"getdate" => "7", 
			"host_id" => "7", 
			"host_name" => "7", 
			"index_col" => "7", 
			"isnull" => "7", 
			"is_sec_service_on" => "7", 
			"lct_admin" => "7", 
			"log" => "7", 
			"log10" => "7", 
			"ltrim" => "7", 
			"mut_excl_roles" => "7", 
			"object_id" => "7", 
			"object_name" => "7", 
			"patindex" => "7", 
			"pi" => "7", 
			"power" => "7", 
			"proc_role" => "7", 
			"ptn_data_pgs" => "7", 
			"radians" => "7", 
			"rand" => "7", 
			"replicate" => "7", 
			"reserved_pgs" => "7", 
			"reverse" => "7", 
			"role_contain" => "7", 
			"role_id" => "7", 
			"role_name" => "7", 
			"round" => "7", 
			"rowcnt" => "7", 
			"rtrim" => "7", 
			"show_role" => "7", 
			"show_sec_services" => "7", 
			"sign" => "7", 
			"sin" => "7", 
			"soundex" => "7", 
			"sqrt" => "7", 
			"str" => "7", 
			"stuff" => "7", 
			"suser_id" => "7", 
			"suser_name" => "7", 
			"tan" => "7", 
			"textptr" => "7", 
			"textvalid" => "7", 
			"used_pgs" => "7", 
			"user_id" => "7", 
			"user_name" => "7", 
			"valid_name" => "7", 
			"valid_user" => "7");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"7" => "donothing", 
			"3" => "donothing", 
			"2" => "donothing", 
			"4" => "donothing", 
			"5" => "donothing", 
			"6" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
