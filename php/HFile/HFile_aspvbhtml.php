<?php
global $BEAUT_PATH;
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_aspvbhtml extends HFile{
   function HFile_aspvbhtml(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// ASP-HTML-VB
/*************************************/
// Flags

$this->nocase            	= "1";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "gray", "blue", "purple", "brown", "gray", "brown");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array("Then", "<TD>", "<td>", "<Td>");
$this->unindent          	= array("End", "Next", "End If", "End Select", "</td>", "</Td>");

// String characters and delimiters

$this->stringchars       	= array();
$this->delimiters        	= array("~", "!", "@", "$", "%", "^", "&", "*", "(", ")", "+", "=", "|", "\\", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", "	", ".", "?");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("'");
$this->blockcommenton    	= array("<!--");
$this->blockcommentoff   	= array("-->");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"\"</TD>\"" => "", 
			"<A" => "1", 
			"</A>" => "1", 
			"<ABBR>" => "1", 
			"<ABBR" => "1", 
			"</ABBR>" => "1", 
			"<ABOVE>" => "1", 
			"<ACRONYM>" => "1", 
			"<ACRONYM" => "1", 
			"</ACRONYM>" => "1", 
			"<ADDRESS>" => "1", 
			"<ADDRESS" => "1", 
			"</ADDRESS>" => "1", 
			"<APPLET" => "1", 
			"</APPLET>" => "1", 
			"<ARRAY>" => "1", 
			"<AREA" => "1", 
			"</AREA" => "1", 
			"<B>" => "1", 
			"<B" => "1", 
			"</B>" => "1", 
			"<BASE" => "1", 
			"<BASEFONT" => "1", 
			"<BDO>" => "1", 
			"<BDO" => "1", 
			"</BDO>" => "1", 
			"<BGSOUND" => "1", 
			"<BIG>" => "1", 
			"<BIG" => "1", 
			"</BIG>" => "1", 
			"<BLINK>" => "1", 
			"</BLINK>" => "1", 
			"<BLOCKQUOTE>" => "1", 
			"<BLOCKQUOTE" => "1", 
			"</BLOCKQUOTE>" => "1", 
			"<BODY" => "1", 
			"<BODY>" => "1", 
			"</BODY>" => "1", 
			"<BOX>" => "1", 
			"<BR" => "1", 
			"<BR>" => "1", 
			"<BLINK" => "1", 
			"<BUTTON>" => "1", 
			"</BUTTON>" => "1", 
			"<CAPTION>" => "1", 
			"<CAPTION" => "1", 
			"</CAPTION>" => "1", 
			"<CENTER>" => "1", 
			"<CENTER" => "1", 
			"</CENTER>" => "1", 
			"<CITE>" => "1", 
			"<CITE" => "1", 
			"</CITE>" => "1", 
			"<CODE>" => "1", 
			"<CODE" => "1", 
			"</CODE>" => "1", 
			"<COL>" => "1", 
			"</COL>" => "1", 
			"<COLGROUP>" => "1", 
			"</COLGROUP>" => "1", 
			"<COMMENT>" => "1", 
			"</COMMENT>" => "1", 
			"<DD>" => "1", 
			"<DD" => "1", 
			"</DD>" => "1", 
			"<DEL>" => "1", 
			"<DEL" => "1", 
			"</DEL>" => "1", 
			"<DFN>" => "1", 
			"<DFN" => "1", 
			"</DFN>" => "1", 
			"<DIR>" => "1", 
			"<DIR" => "1", 
			"</DIR>" => "1", 
			"<DIV>" => "1", 
			"<DIV" => "1", 
			"</DIV>" => "1", 
			"<DL>" => "1", 
			"<DL" => "1", 
			"</DL>" => "1", 
			"<DT>" => "1", 
			"<DT" => "1", 
			"</DT>" => "1", 
			"<EM>" => "1", 
			"<EM" => "1", 
			"</EM>" => "1", 
			"<EMBED" => "1", 
			"<FIELDSET>" => "1", 
			"<FIELDSET" => "1", 
			"</FIELDSET>" => "1", 
			"<FIG>" => "1", 
			"<FONT" => "1", 
			"</FONT>" => "1", 
			"<FORM>" => "1", 
			"<FORM" => "1", 
			"</FORM>" => "1", 
			"<FRAME" => "1", 
			"<FRAMESET" => "1", 
			"</FRAMESET>" => "1", 
			"<H1>" => "1", 
			"<H1" => "1", 
			"</H1>" => "1", 
			"<H2>" => "1", 
			"<H2" => "1", 
			"</H2>" => "1", 
			"<H3>" => "1", 
			"<H3" => "1", 
			"</H3>" => "1", 
			"<H4>" => "1", 
			"<H4" => "1", 
			"</H4>" => "1", 
			"<H5>" => "1", 
			"<H5" => "1", 
			"</H5>" => "1", 
			"<H6>" => "1", 
			"<H6" => "1", 
			"</H6>" => "1", 
			"<HEAD>" => "1", 
			"<HEAD" => "1", 
			"</HEAD>" => "1", 
			"<HR>" => "1", 
			"<HR" => "1", 
			"<HTML>" => "1", 
			"<HTML" => "1", 
			"</HTML>" => "1", 
			"<I>" => "1", 
			"<I" => "1", 
			"</I>" => "1", 
			"<IFRAME>" => "1", 
			"</IFRAME>" => "1", 
			"<ILAYER>" => "1", 
			"</ILAYER>" => "1", 
			"<IMG" => "1", 
			"<INPUT>" => "1", 
			"<INPUT" => "1", 
			"<INS>" => "1", 
			"<INS" => "1", 
			"</INS>" => "1", 
			"<ISINDEX>" => "1", 
			"<ISINDEX" => "1", 
			"<KBD>" => "1", 
			"<KBD" => "1", 
			"</KBD>" => "1", 
			"<LABEL>" => "1", 
			"<LABEL" => "1", 
			"</LABEL>" => "1", 
			"<LAYER>" => "1", 
			"<LEGEND>" => "1", 
			"<LEGEND" => "1", 
			"</LEGEND>" => "1", 
			"<LI>" => "1", 
			"<LI" => "1", 
			"</LI>" => "1", 
			"<LINK" => "1", 
			"<LISTING>" => "1", 
			"</LISTING>" => "1", 
			"<MAP" => "1", 
			"</MAP>" => "1", 
			"<MARQUEE" => "1", 
			"</MARQUEE>" => "1", 
			"<MENU>" => "1", 
			"<MENU" => "1", 
			"</MENU>" => "1", 
			"<META" => "1", 
			"<MULTICOL>" => "1", 
			"</MULTICOL>" => "1", 
			"<NEXTID" => "1", 
			"<NOBR>" => "1", 
			"</NOBR>" => "1", 
			"<NOFRAMES>" => "1", 
			"</NOFRAMES>" => "1", 
			"<NOLAYER>" => "1", 
			"</NOLAYER>" => "1", 
			"<NOTE>" => "1", 
			"</NOTE>" => "1", 
			"<NOSCRIPT>" => "1", 
			"</NOSCRIPT>" => "1", 
			"<OBJECT>" => "1", 
			"<OBJECT" => "1", 
			"<OL>" => "1", 
			"<OL" => "1", 
			"</OL>" => "1", 
			"<OPTION>" => "1", 
			"<OPTION" => "1", 
			"</OPTION>" => "1", 
			"<OPTGROUP>" => "1", 
			"<OPTGROUP" => "1", 
			"</OPTGROUP>" => "1", 
			"<P" => "1", 
			"<P>" => "1", 
			"</P>" => "1", 
			"<PARAM" => "1", 
			"<PRE>" => "1", 
			"<PRE" => "1", 
			"</PRE>" => "1", 
			"<Q>" => "1", 
			"<Q" => "1", 
			"</Q>" => "1", 
			"<QUOTE>" => "1", 
			"<RANGE>" => "1", 
			"<ROOT>" => "1", 
			"<S>" => "1", 
			"<S" => "1", 
			"</S>" => "1", 
			"<SAMP>" => "1", 
			"<SAMP" => "1", 
			"</SAMP>" => "1", 
			"<SCRIPT" => "1", 
			"<SCRIPT>" => "1", 
			"</SCRIPT>" => "1", 
			"<SELECT" => "1", 
			"</SELECT>" => "1", 
			"<SMALL>" => "1", 
			"<SMALL" => "1", 
			"</SMALL>" => "1", 
			"<SOUND" => "1", 
			"<SPACER>" => "1", 
			"<SPAN>" => "1", 
			"<SPAN" => "1", 
			"</SPAN>" => "1", 
			"<SQRT>" => "1", 
			"<STRIKE>" => "1", 
			"<STRIKE" => "1", 
			"</STRIKE>" => "1", 
			"<STRONG>" => "1", 
			"<STRONG" => "1", 
			"</STRONG>" => "1", 
			"<STYLE>" => "1", 
			"<STYLE" => "1", 
			"</STYLE>" => "1", 
			"<SUB>" => "1", 
			"<SUB" => "1", 
			"</SUB>" => "1", 
			"<SUP>" => "1", 
			"<SUP" => "1", 
			"</SUP>" => "1", 
			"<TABLE>" => "1", 
			"<TABLE" => "1", 
			"</TABLE>" => "1", 
			"<TBODY>" => "1", 
			"<TBODY" => "1", 
			"</TBODY>" => "1", 
			"<TD" => "1", 
			"<TD>" => "1", 
			"</TD>" => "1", 
			"<TEXT>" => "1", 
			"<TEXTAREA" => "1", 
			"<TEXTAREA>" => "1", 
			"</TEXTAREA>" => "1", 
			"<TFOOT>" => "1", 
			"<TFOOT" => "1", 
			"</TFOOT>" => "1", 
			"<TH" => "1", 
			"<TH>" => "1", 
			"</TH>" => "1", 
			"<THEAD>" => "1", 
			"<THEAD" => "1", 
			"</THEAD>" => "1", 
			"<TITLE>" => "1", 
			"</TITLE>" => "1", 
			"<TR" => "1", 
			"<TR>" => "1", 
			"</TR>" => "1", 
			"<TT>" => "1", 
			"</TT>" => "1", 
			"<TT" => "1", 
			"<U>" => "1", 
			"<U" => "1", 
			"</U>" => "1", 
			"<UL>" => "1", 
			"<UL" => "1", 
			"</UL>" => "1", 
			"<VAR>" => "1", 
			"</VAR>" => "1", 
			"<VAR" => "1", 
			"<WBR>" => "1", 
			"<XMP>" => "1", 
			"</XMP>" => "1", 
			"ABBR=" => "2", 
			"ACCEPT-CHARSET=" => "2", 
			"ACCEPT=" => "2", 
			"ACCESSKEY=" => "2", 
			"ACTION=" => "2", 
			"ALIGN=" => "2", 
			"ALINK=" => "2", 
			"ALT=" => "2", 
			"ARCHIVE=" => "2", 
			"AXIS=" => "2", 
			"BACKGROUND=" => "2", 
			"BEHAVIOR" => "2", 
			"BELOW" => "2", 
			"BGCOLOR=" => "2", 
			"BORDER=" => "2", 
			"CELLPADDING=" => "2", 
			"CELLSPACING=" => "2", 
			"CHAR=" => "2", 
			"CHAROFF=" => "2", 
			"CHARSET=" => "2", 
			"CHECKED" => "2", 
			"CITE=" => "2", 
			"CLASS=" => "2", 
			"CLASSID=" => "2", 
			"CLEAR=" => "2", 
			"CODE=" => "2", 
			"CODEBASE=" => "2", 
			"CODETYPE=" => "2", 
			"COLOR=" => "2", 
			"COLS=" => "2", 
			"COLSPAN=" => "2", 
			"COMPACT" => "2", 
			"CONTENT=" => "2", 
			"COORDS=" => "2", 
			"DATA=" => "2", 
			"DATETIME=" => "2", 
			"DECLARE" => "2", 
			"DEFER" => "2", 
			"DIR=" => "2", 
			"DISABLED" => "2", 
			"ENCTYPE=" => "2", 
			"FACE=" => "2", 
			"FOR=" => "2", 
			"FRAME=" => "2", 
			"FRAMEBORDER=" => "2", 
			"FRAMESPACING=" => "2", 
			"HEADERS=" => "2", 
			"HEIGHT=" => "2", 
			"HIDDEN=" => "2", 
			"HREF=" => "2", 
			"HREFLANG=" => "2", 
			"HSPACE=" => "2", 
			"HTTP-EQUIV=" => "2", 
			"ID=" => "2", 
			"ISMAP=" => "2", 
			"LABEL=" => "2", 
			"LANG=" => "2", 
			"LANGUAGE=" => "2", 
			"LINK=" => "2", 
			"LOOP=" => "2", 
			"LONGDESC=" => "2", 
			"MAILTO=" => "2", 
			"MARGINHEIGHT=" => "2", 
			"MARGINWIDTH=" => "2", 
			"MAXLENGTH=" => "2", 
			"MEDIA=" => "2", 
			"METHOD=" => "2", 
			"MULTIPLE" => "2", 
			"NAME=" => "2", 
			"NOHREF" => "2", 
			"NORESIZE" => "2", 
			"NOSHADE" => "2", 
			"OBJECT=" => "2", 
			"ONBLUR=" => "2", 
			"ONCHANGE=" => "2", 
			"ONFOCUS=" => "2", 
			"ONKEYDOWN=" => "2", 
			"ONKEYPRESS=" => "2", 
			"ONKEYUP=" => "2", 
			"ONLOAD=" => "2", 
			"ONRESET=" => "2", 
			"ONSELECT=" => "2", 
			"ONSUBMIT=" => "2", 
			"ONUNLOAD=" => "2", 
			"ONCLICK=" => "2", 
			"ONDBLCLICK=" => "2", 
			"ONMOUSEDOWN=" => "2", 
			"ONMOUSEMOVE=" => "2", 
			"ONMOUSEOUT=" => "2", 
			"ONMOUSEOVER=" => "2", 
			"ONMOUSEUP=" => "2", 
			"PROFILE=" => "2", 
			"PROMPT=" => "2", 
			"READONLY" => "2", 
			"REL=" => "2", 
			"REV=" => "2", 
			"ROWS=" => "2", 
			"ROWSPAN=" => "2", 
			"RULES=" => "2", 
			"SCHEME=" => "2", 
			"SCOPE=" => "2", 
			"SCROLLING=" => "2", 
			"SELECTED" => "2", 
			"SHAPE=" => "2", 
			"SIZE=" => "2", 
			"SPAN=" => "2", 
			"SRC=" => "2", 
			"STANDBY=" => "2", 
			"START=" => "2", 
			"STYLE=" => "2", 
			"SUMMARY=" => "2", 
			"TABINDEX=" => "2", 
			"TARGET=" => "2", 
			"TEXT=" => "2", 
			"TITLE=" => "2", 
			"TOPMARGIN=" => "2", 
			"TYPE=" => "2", 
			"URL=" => "2", 
			"USEMAP=" => "2", 
			"VALIGN=" => "2", 
			"VALUE=" => "2", 
			"VALUETYPE=" => "2", 
			"VERSION=" => "2", 
			"VLINK=" => "2", 
			"VSPACE=" => "2", 
			"WIDTH=" => "2", 
			"=" => "2", 
			"&" => "3", 
			"Abs" => "3", 
			"Array" => "3", 
			"Asc" => "3", 
			"AscB" => "3", 
			"AscW" => "3", 
			"Atn" => "3", 
			"Avg" => "3", 
			"CBool" => "3", 
			"CByte" => "3", 
			"CCur" => "3", 
			"CDate" => "3", 
			"CDbl" => "3", 
			"Cdec" => "3", 
			"Choose" => "3", 
			"Chr" => "3", 
			"ChrB" => "3", 
			"ChrW" => "3", 
			"CInt" => "3", 
			"CLng" => "3", 
			"Command" => "3", 
			"Cos" => "3", 
			"Count" => "3", 
			"CreateObject" => "3", 
			"CSng" => "3", 
			"CStr" => "3", 
			"CurDir" => "3", 
			"CVar" => "3", 
			"CVDate" => "3", 
			"CVErr" => "3", 
			"Date" => "3", 
			"DateAdd" => "3", 
			"DateDiff" => "3", 
			"DatePart" => "3", 
			"DateSerial" => "3", 
			"DateValue" => "3", 
			"Day" => "3", 
			"DDB" => "3", 
			"Dir" => "3", 
			"DoEvents" => "3", 
			"Environ" => "3", 
			"EOF" => "3", 
			"Error" => "3", 
			"Exp" => "3", 
			"FileAttr" => "3", 
			"FileDateTime" => "3", 
			"FileLen" => "3", 
			"Fix" => "3", 
			"Format" => "3", 
			"FreeFile" => "3", 
			"FV" => "3", 
			"GetAllStrings" => "3", 
			"GetAttr" => "3", 
			"GetAutoServerSettings" => "3", 
			"GetObject" => "3", 
			"GetSetting" => "3", 
			"Hex" => "3", 
			"Hour" => "3", 
			"IIf" => "3", 
			"IMEStatus" => "3", 
			"Input" => "3", 
			"InputB" => "3", 
			"InputBox" => "3", 
			"InStr" => "3", 
			"InstB" => "3", 
			"Int" => "3", 
			"IPmt" => "3", 
			"IsArray" => "3", 
			"IsDate" => "3", 
			"IsEmpty" => "3", 
			"IsError" => "3", 
			"IsMissing" => "3", 
			"IsNull" => "3", 
			"IsNumeric" => "3", 
			"IsObject" => "3", 
			"LBound" => "3", 
			"LCase" => "3", 
			"Left" => "3", 
			"LeftB" => "3", 
			"Len" => "3", 
			"LenB" => "3", 
			"LoadPicture" => "3", 
			"Loc" => "3", 
			"LOF" => "3", 
			"Log" => "3", 
			"LTrim" => "3", 
			"Max" => "3", 
			"Mid" => "3", 
			"MidB" => "3", 
			"Min" => "3", 
			"Minute" => "3", 
			"MIRR" => "3", 
			"Month" => "3", 
			"MsgBox" => "3", 
			"Now" => "3", 
			"NPer" => "3", 
			"NPV" => "3", 
			"Oct" => "3", 
			"Partition" => "3", 
			"Pmt" => "3", 
			"PPmt" => "3", 
			"PV" => "3", 
			"QBColor" => "3", 
			"Rate" => "3", 
			"RGB" => "3", 
			"Right" => "3", 
			"RightB" => "3", 
			"Rnd" => "3", 
			"RTrim" => "3", 
			"Second" => "3", 
			"Seek" => "3", 
			"Sgn" => "3", 
			"Shell" => "3", 
			"Sin" => "3", 
			"SLN" => "3", 
			"Space" => "3", 
			"Spc" => "3", 
			"Sqr" => "3", 
			"StDev" => "3", 
			"StDevP" => "3", 
			"Str" => "3", 
			"StrComp" => "3", 
			"StrConv" => "3", 
			"String" => "3", 
			"Switch" => "3", 
			"Sum" => "3", 
			"SYD" => "3", 
			"Tab" => "3", 
			"Tan" => "3", 
			"Time" => "3", 
			"Timer" => "3", 
			"TimeSerial" => "3", 
			"TimeValue" => "3", 
			"Trim" => "3", 
			"TypeName" => "3", 
			"UBound" => "3", 
			"UCase" => "3", 
			"Val" => "3", 
			"Var" => "3", 
			"VarP" => "3", 
			"VarType" => "3", 
			"Weekday" => "3", 
			"Year" => "3", 
			"Accept" => "5", 
			"Activate" => "5", 
			"Add" => "5", 
			"AddCustom" => "5", 
			"AddFile" => "5", 
			"AddFromFile" => "5", 
			"AddFromTemplate" => "5", 
			"AddItem" => "5", 
			"AddNew" => "5", 
			"AddToAddInToolbar" => "5", 
			"AddToolboxProgID" => "5", 
			"Append" => "5", 
			"AppendChunk" => "5", 
			"Arrange" => "5", 
			"Assert" => "5", 
			"AsyncRead" => "5", 
			"BatchUpdate" => "5", 
			"BeginTrans" => "5", 
			"Bind" => "5", 
			"Buffer" => "5", 
			"CacheControl" => "5", 
			"Cancel" => "5", 
			"CancelAsyncRead" => "5", 
			"CancelBatch" => "5", 
			"CancelUpdate" => "5", 
			"CanPropertyChange" => "5", 
			"CaptureImage" => "5", 
			"CellText" => "5", 
			"CellValue" => "5", 
			"Charset" => "5", 
			"Circle" => "5", 
			"Clear" => "5", 
			"ClearFields" => "5", 
			"ClearSel" => "5", 
			"ClearSelCols" => "5", 
			"Clone" => "5", 
			"Close" => "5", 
			"Cls" => "5", 
			"ColContaining" => "5", 
			"ColumnSize" => "5", 
			"CommitTrans" => "5", 
			"CompactDatabase" => "5", 
			"Compose" => "5", 
			"Connect" => "5", 
			"ContentType" => "5", 
			"Copy" => "5", 
			"CopyQueryDef" => "5", 
			"CreateDatabase" => "5", 
			"CreateDragImage" => "5", 
			"CreateEmbed" => "5", 
			"CreateField" => "5", 
			"CreateGroup" => "5", 
			"CreateIndex" => "5", 
			"CreateLink" => "5", 
			"CreatePreparedStatement" => "5", 
			"CreatePropery" => "5", 
			"CreateQuery" => "5", 
			"CreateQueryDef" => "5", 
			"CreateRelation" => "5", 
			"CreateTableDef" => "5", 
			"CreateUser" => "5", 
			"CreateWorkspace" => "5", 
			"Customize" => "5", 
			"Delete" => "5", 
			"DeleteColumnLabels" => "5", 
			"DeleteColumns" => "5", 
			"DeleteRowLabels" => "5", 
			"DeleteRows" => "5", 
			"DoVerb" => "5", 
			"Drag" => "5", 
			"Draw" => "5", 
			"Edit" => "5", 
			"EditCopy" => "5", 
			"EditPaste" => "5", 
			"EndDoc" => "5", 
			"EnsureVisible" => "5", 
			"EstablishConnection" => "5", 
			"Execute" => "5", 
			"Expires" => "5", 
			"ExpiresAbsolute" => "5", 
			"ExtractIcon" => "5", 
			"Fetch" => "5", 
			"FetchVerbs" => "5", 
			"Files" => "5", 
			"FillCache" => "5", 
			"Find" => "5", 
			"FindFirst" => "5", 
			"FindItem" => "5", 
			"FindLast" => "5", 
			"FindNext" => "5", 
			"FindPrevious" => "5", 
			"Forward" => "5", 
			"GetBookmark" => "5", 
			"GetChunk" => "5", 
			"GetClipString" => "5", 
			"GetData" => "5", 
			"GetFirstVisible" => "5", 
			"GetFormat" => "5", 
			"GetHeader" => "5", 
			"GetLineFromChar" => "5", 
			"GetNumTicks" => "5", 
			"GetRows" => "5", 
			"GetSelectedPart" => "5", 
			"GetText" => "5", 
			"GetVisibleCount" => "5", 
			"GoBack" => "5", 
			"GoForward" => "5", 
			"Hide" => "5", 
			"HitTest" => "5", 
			"HoldFields" => "5", 
			"HTMLEncode" => "5", 
			"Idle" => "5", 
			"InitializeLabels" => "5", 
			"InsertColumnLabels" => "5", 
			"InsertColumns" => "5", 
			"InsertObjDlg" => "5", 
			"InsertRowLabels" => "5", 
			"InsertRows" => "5", 
			"IsClientConnected" => "5", 
			"Item" => "5", 
			"KillDoc" => "5", 
			"Layout" => "5", 
			"Line" => "5", 
			"LinkExecute" => "5", 
			"LinkPoke" => "5", 
			"LinkRequest" => "5", 
			"LinkSend" => "5", 
			"Listen" => "5", 
			"LoadFile" => "5", 
			"LoadResData" => "5", 
			"LoadResPicture" => "5", 
			"LoadResString" => "5", 
			"LogEvent" => "5", 
			"MakeCompileFile" => "5", 
			"MakeReplica" => "5", 
			"MapPath" => "5", 
			"MoreResults" => "5", 
			"Move" => "5", 
			"MoveData" => "5", 
			"MoveFirst" => "5", 
			"MoveLast" => "5", 
			"MoveNext" => "5", 
			"MovePrevious" => "5", 
			"NavigateTo" => "5", 
			"NewPage" => "5", 
			"NewPassword" => "5", 
			"NextRecordset" => "5", 
			"OLEDrag" => "5", 
			"OnAddinsUpdate" => "5", 
			"OnConnection" => "5", 
			"OnDisconnection" => "5", 
			"OnStartupComplete" => "5", 
			"Open" => "5", 
			"OpenConnection" => "5", 
			"OpenDatabase" => "5", 
			"OpenQueryDef" => "5", 
			"OpenRecordset" => "5", 
			"OpenResultset" => "5", 
			"OpenURL" => "5", 
			"Overlay" => "5", 
			"PaintPicture" => "5", 
			"Paste" => "5", 
			"PastSpecialDlg" => "5", 
			"PeekData" => "5", 
			"Play" => "5", 
			"Point" => "5", 
			"PopulatePartial" => "5", 
			"PopupMenu" => "5", 
			"Print" => "5", 
			"PrintForm" => "5", 
			"PropertyChanged" => "5", 
			"PSet" => "5", 
			"Quit" => "5", 
			"Raise" => "5", 
			"RandomDataFill" => "5", 
			"RandomFillColumns" => "5", 
			"RandomFillRows" => "5", 
			"rdoCreateEnvironment" => "5", 
			"rdoRegisterDataSource" => "5", 
			"ReadFromFile" => "5", 
			"ReadProperty" => "5", 
			"Rebind" => "5", 
			"ReFill" => "5", 
			"Refresh" => "5", 
			"RefreshLink" => "5", 
			"RegisterDatabase" => "5", 
			"Reload" => "5", 
			"Remove" => "5", 
			"RemoveAddInFromToolbar" => "5", 
			"RemoveItem" => "5", 
			"Render" => "5", 
			"RepairDatabase" => "5", 
			"Reply" => "5", 
			"ReplyAll" => "5", 
			"Requery" => "5", 
			"ResetCustom" => "5", 
			"ResetCustomLabel" => "5", 
			"ResolveName" => "5", 
			"RestoreToolbar" => "5", 
			"Resync" => "5", 
			"Rollback" => "5", 
			"RollbackTrans" => "5", 
			"RowBookmark" => "5", 
			"RowContaining" => "5", 
			"RowTop" => "5", 
			"Save" => "5", 
			"SaveAs" => "5", 
			"SaveFile" => "5", 
			"SaveToFile" => "5", 
			"SaveToolbar" => "5", 
			"SaveToOle1File" => "5", 
			"Scale" => "5", 
			"ScaleX" => "5", 
			"ScaleY" => "5", 
			"ScriptTimeout" => "5", 
			"Scroll" => "5", 
			"Select" => "5", 
			"SelectAll" => "5", 
			"SelectPart" => "5", 
			"SelPrint" => "5", 
			"Send" => "5", 
			"SendData" => "5", 
			"SessionID" => "5", 
			"Set" => "5", 
			"SetAutoServerSettings" => "5", 
			"SetData" => "5", 
			"SetFocus" => "5", 
			"SetOption" => "5", 
			"SetSize" => "5", 
			"SetText" => "5", 
			"SetViewport" => "5", 
			"Show" => "5", 
			"ShowColor" => "5", 
			"ShowFont" => "5", 
			"ShowHelp" => "5", 
			"ShowOpen" => "5", 
			"ShowPrinter" => "5", 
			"ShowSave" => "5", 
			"ShowWhatsThis" => "5", 
			"SignOff" => "5", 
			"SignOn" => "5", 
			"Size" => "5", 
			"Span" => "5", 
			"SplitContaining" => "5", 
			"StartLabelEdit" => "5", 
			"StartLogging" => "5", 
			"Status" => "5", 
			"Stop" => "5", 
			"Synchronize" => "5", 
			"TextHeight" => "5", 
			"TextWidth" => "5", 
			"Timeout" => "5", 
			"ToDefaults" => "5", 
			"TwipsToChartPart" => "5", 
			"TypeByChartType" => "5", 
			"Update" => "5", 
			"UpdateControls" => "5", 
			"UpdateRecord" => "5", 
			"UpdateRow" => "5", 
			"Upto" => "5", 
			"URLEncode" => "5", 
			"WhatsThisMode" => "5", 
			"Write" => "5", 
			"WriteProperty" => "5", 
			"ZOrder" => "5", 
			"AccessKeyPress" => "6", 
			"AddHeader" => "6", 
			"AfterAddFile" => "6", 
			"AfterChangeFileName" => "6", 
			"AfterCloseFile" => "6", 
			"AfterColEdit" => "6", 
			"AfterColUpdate" => "6", 
			"AfterDelete" => "6", 
			"AfterInsert" => "6", 
			"AfterLabelEdit" => "6", 
			"AfterRemoveFile" => "6", 
			"AfterUpdate" => "6", 
			"AfterWriteFile" => "6", 
			"AmbienChanged" => "6", 
			"AppendToLog" => "6", 
			"ApplyChanges" => "6", 
			"Associate" => "6", 
			"AsyncReadComplete" => "6", 
			"AxisActivated" => "6", 
			"AxisLabelActivated" => "6", 
			"AxisLabelSelected" => "6", 
			"AxisLabelUpdated" => "6", 
			"AxisSelected" => "6", 
			"AxisTitleActivated" => "6", 
			"AxisTitleSelected" => "6", 
			"AxisTitleUpdated" => "6", 
			"AxisUpdated" => "6", 
			"BeforeClick" => "6", 
			"BeforeColEdit" => "6", 
			"BeforeColUpdate" => "6", 
			"BeforeConnect" => "6", 
			"BeforeDelete" => "6", 
			"BeforeInsert" => "6", 
			"BeforeLabelEdit" => "6", 
			"BeforeLoadFile" => "6", 
			"BeforeUpdate" => "6", 
			"BinaryWrite" => "6", 
			"ButtonClick" => "6", 
			"ButtonCompleted" => "6", 
			"ButtonGotFocus" => "6", 
			"ButtonLostFocus" => "6", 
			"Change" => "6", 
			"ChartActivated" => "6", 
			"ChartSelected" => "6", 
			"ChartUpdated" => "6", 
			"Click" => "6", 
			"ColEdit" => "6", 
			"Collapse" => "6", 
			"ColResize" => "6", 
			"ColumnClick" => "6", 
			"Compare" => "6", 
			"ConfigChageCancelled" => "6", 
			"ConfigChanged" => "6", 
			"ConnectionRequest" => "6", 
			"DataArrival" => "6", 
			"DataChanged" => "6", 
			"DataUpdated" => "6", 
			"DblClick" => "6", 
			"Deactivate" => "6", 
			"DeviceArrival" => "6", 
			"DeviceOtherEvent" => "6", 
			"DeviceQueryRemove" => "6", 
			"DeviceQueryRemoveFailed" => "6", 
			"DeviceRemoveComplete" => "6", 
			"DeviceRemovePending" => "6", 
			"DevModeChange" => "6", 
			"Disconnect" => "6", 
			"DisplayChanged" => "6", 
			"Dissociate" => "6", 
			"DoGetNewFileName" => "6", 
			"Done" => "6", 
			"DonePainting" => "6", 
			"DownClick" => "6", 
			"DragDrop" => "6", 
			"DragOver" => "6", 
			"DropDown" => "6", 
			"EditProperty" => "6", 
			"EnterCell" => "6", 
			"EnterFocus" => "6", 
			"ExitFocus" => "6", 
			"Expand" => "6", 
			"Flush" => "6", 
			"FootnoteActivated" => "6", 
			"FootnoteSelected" => "6", 
			"FootnoteUpdated" => "6", 
			"GotFocus" => "6", 
			"HeadClick" => "6", 
			"InfoMessage" => "6", 
			"Initialize" => "6", 
			"IniProperties" => "6", 
			"ItemActivated" => "6", 
			"ItemAdded" => "6", 
			"ItemCheck" => "6", 
			"ItemClick" => "6", 
			"ItemReloaded" => "6", 
			"ItemRemoved" => "6", 
			"ItemRenamed" => "6", 
			"ItemSeletected" => "6", 
			"KeyDown" => "6", 
			"KeyPress" => "6", 
			"KeyUp" => "6", 
			"LeaveCell" => "6", 
			"LegendActivated" => "6", 
			"LegendSelected" => "6", 
			"LegendUpdated" => "6", 
			"LinkClose" => "6", 
			"LinkError" => "6", 
			"LinkNotify" => "6", 
			"LinkOpen" => "6", 
			"Load" => "6", 
			"LostFocus" => "6", 
			"MouseDown" => "6", 
			"MouseMove" => "6", 
			"MouseUp" => "6", 
			"NodeClick" => "6", 
			"ObjectMove" => "6", 
			"OLECompleteDrag" => "6", 
			"OLEDragDrop" => "6", 
			"OLEDragOver" => "6", 
			"OLEGiveFeedback" => "6", 
			"OLESetData" => "6", 
			"OLEStartDrag" => "6", 
			"OnAddNew" => "6", 
			"OnComm" => "6", 
			"OnEnd" => "6", 
			"OnStart" => "6", 
			"Paint" => "6", 
			"PanelClick" => "6", 
			"PanelDblClick" => "6", 
			"PathChange" => "6", 
			"PatternChange" => "6", 
			"PlotActivated" => "6", 
			"PlotSelected" => "6", 
			"PlotUpdated" => "6", 
			"PointActivated" => "6", 
			"PointLabelActivated" => "6", 
			"PointLabelSelected" => "6", 
			"PointLabelUpdated" => "6", 
			"PointSelected" => "6", 
			"PointUpdated" => "6", 
			"PowerQuerySuspend" => "6", 
			"PowerResume" => "6", 
			"PowerStatusChanged" => "6", 
			"PowerSuspend" => "6", 
			"QueryChangeConfig" => "6", 
			"QueryComplete" => "6", 
			"QueryCompleted" => "6", 
			"QueryTimeout" => "6", 
			"QueryUnload" => "6", 
			"ReadProperties" => "6", 
			"Redirect" => "6", 
			"Reposition" => "6", 
			"RequestChangeFileName" => "6", 
			"RequestWriteFile" => "6", 
			"Resize" => "6", 
			"ResultsChanged" => "6", 
			"RowColChange" => "6", 
			"RowCurrencyChange" => "6", 
			"RowResize" => "6", 
			"RowStatusChanged" => "6", 
			"SelChange" => "6", 
			"SelectionChanged" => "6", 
			"SendComplete" => "6", 
			"SendProgress" => "6", 
			"SeriesActivated" => "6", 
			"SeriesSelected" => "6", 
			"SeriesUpdated" => "6", 
			"SettingChanged" => "6", 
			"SplitChange" => "6", 
			"StateChanged" => "6", 
			"StatusUpdate" => "6", 
			"SysColorsChanged" => "6", 
			"Terminate" => "6", 
			"TimeChanged" => "6", 
			"TitleActivated" => "6", 
			"TitleSelected" => "6", 
			"UnboundAddData" => "6", 
			"UnboundDeleteRow" => "6", 
			"UnboundGetRelativeBookmark" => "6", 
			"UnboundReadData" => "6", 
			"UnboundWriteData" => "6", 
			"Unload" => "6", 
			"UpClick" => "6", 
			"Updated" => "6", 
			"Validate" => "6", 
			"ValidationError" => "6", 
			"WillAssociate" => "6", 
			"WillChangeData" => "6", 
			"WillDissociate" => "6", 
			"WillExecute" => "6", 
			"WillUpdateRows" => "6", 
			"WriteProperties" => "6", 
			"AppActivate" => "4", 
			"Base" => "4", 
			"Beep" => "4", 
			"Call" => "4", 
			"Case" => "4", 
			"ChDir" => "4", 
			"ChDrive" => "4", 
			"Const" => "4", 
			"DefBool" => "4", 
			"DefByte" => "4", 
			"DefCur" => "4", 
			"DefDate" => "4", 
			"DefDbl" => "4", 
			"DefDec" => "4", 
			"DefInt" => "4", 
			"DefLng" => "4", 
			"DefObj" => "4", 
			"DefSng" => "4", 
			"DefStr" => "4", 
			"Deftype" => "4", 
			"DefVar" => "4", 
			"DeleteSetting" => "4", 
			"Dim" => "4", 
			"Do" => "4", 
			"Else" => "4", 
			"ElseIf" => "4", 
			"End" => "4", 
			"Enum" => "4", 
			"Erase" => "4", 
			"Event" => "4", 
			"Exit" => "4", 
			"Explicit" => "4", 
			"FileCopy" => "4", 
			"For" => "4", 
			"ForEach" => "4", 
			"Function" => "4", 
			"Get" => "4", 
			"GoSub" => "4", 
			"GoTo" => "4", 
			"If" => "4", 
			"Implements" => "4", 
			"Kill" => "4", 
			"Let" => "4", 
			"LineInput" => "4", 
			"Lock" => "4", 
			"LSet" => "4", 
			"MkDir" => "4", 
			"Name" => "4", 
			"Next" => "4", 
			"OnError" => "4", 
			"On" => "4", 
			"Option" => "4", 
			"Private" => "4", 
			"Property" => "4", 
			"Public" => "4", 
			"Put" => "4", 
			"RaiseEvent" => "4", 
			"Randomize" => "4", 
			"ReDim" => "4", 
			"Reset" => "4", 
			"Resume" => "4", 
			"Return" => "4", 
			"RmDir" => "4", 
			"RSet" => "4", 
			"SavePicture" => "4", 
			"SaveSetting" => "4", 
			"SendKeys" => "4", 
			"SetAttr" => "4", 
			"Static" => "4", 
			"Sub" => "4", 
			"Then" => "4", 
			"Type" => "4", 
			"Unlock" => "4", 
			"Wend" => "4", 
			"While" => "4", 
			"Width" => "4", 
			"With" => "4", 
			"Application" => "7", 
			"Cookies" => "7", 
			"ClientCertificate" => "7", 
			"ObjectContext" => "7", 
			"Form" => "7", 
			"QueryString" => "7", 
			"Request" => "7", 
			"Response" => "7", 
			"Server" => "7", 
			"ServerVariables" => "7", 
			"Session" => "7", 
			"CDROM" => "8", 
			"Fixed" => "8", 
			"ForAppending" => "8", 
			"ForReading" => "8", 
			"ForWriting" => "8", 
			"RAMDisk" => "8", 
			"Remote" => "8", 
			"Removable" => "8", 
			"Unknown" => "8", 
			"vbArray" => "8", 
			"vbBinaryCompare" => "8", 
			"vbBlack" => "8", 
			"vbBlue" => "8", 
			"vbBoolean" => "8", 
			"vbByte" => "8", 
			"vbCr" => "8", 
			"vbCrLf" => "8", 
			"vbCurrency" => "8", 
			"vbCyan" => "8", 
			"vbDataObject" => "8", 
			"vbDate" => "8", 
			"vbDecimal" => "8", 
			"vbDouble" => "8", 
			"vbEmpty" => "8", 
			"vbError" => "8", 
			"vbFalse" => "8", 
			"vbFirstFourDays" => "8", 
			"vbFirstFullWeek" => "8", 
			"vbFirstJan1" => "8", 
			"vbFormFeed" => "8", 
			"vbFriday" => "8", 
			"vbGeneralDate" => "8", 
			"vbGreen" => "8", 
			"vbInteger" => "8", 
			"vbLf" => "8", 
			"vbLong" => "8", 
			"vbLongDate" => "8", 
			"vbLongTime" => "8", 
			"vbMagenta" => "8", 
			"vbMonday" => "8", 
			"vbNewLine" => "8", 
			"vbNewline" => "8", 
			"vbNull" => "8", 
			"vbNullChar" => "8", 
			"vbNullString" => "8", 
			"vbObject" => "8", 
			"vbObjectError" => "8", 
			"vbRed" => "8", 
			"vbSaturday" => "8", 
			"vbShortDate" => "8", 
			"vbShortTime" => "8", 
			"vbSingle" => "8", 
			"vbString" => "8", 
			"vbSunday" => "8", 
			"vbTab" => "8", 
			"vbTextCompare" => "8", 
			"vbThursday" => "8", 
			"vbTrue" => "8", 
			"vbTuesday" => "8", 
			"vbUseSystem" => "8", 
			"vbUseSystemDayOfWeek" => "8", 
			"vbVariant" => "8", 
			"vbVerticalTab" => "8", 
			"vbWednesday" => "8", 
			"vbWhite" => "8", 
			"vbYellow" => "8");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"" => "donothing", 
			"1" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing", 
			"5" => "donothing", 
			"6" => "donothing", 
			"4" => "donothing", 
			"7" => "donothing", 
			"8" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
