<?

/*

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/

class MagicConfig
{
	function MagicConfig()
	{
		$this->separator = ".";

		$this->extensions = array(
			"a"	=> "ada95",
			"ada"	=> "ada95",
			"adb"	=> "ada95",
			"ads"	=> "ada95",
			"asm"	=> "asm_x86",
			"asp"	=> "jscript|vb|vbdotnet",
			"awk"	=> "awk",
			"bas"	=> "vb|vbdotnet",
			"c"	=> "c",
			"cbl"	=> "cobol",
			"cls"	=> "vb|vbdotnet",
			"cob"	=> "cobol",
			"cpy"	=> "cobol",
			"cpp"	=> "cpp",
			"cs"	=> "csharp",
			"cxx"	=> "cpp",
			"dat"	=> "mumps",
			"dpr"	=> "delphi",
			"e"	=> "eiffel|euphoria",
			"ew"	=> "euphoria",
			"eu"	=> "euphoria",
			"ex"	=> "euphoria",
			"exw"	=> "euphoria",
			"exu"	=> "euphoria",
			"frm"	=> "vb|vbdotnet",
			"h"	=> "c",	
			"hpp"	=> "cpp",
			"inc"	=> "turbopascal|vb|vbdotnet",
			"java"	=> "javaswing",
			"js"	=> "jscript|javascript",
			"lsp"	=> "lisp",
			"m"	=> "mumps",
			"pas"	=> "delphi|turbopascal",
			"php"	=> "php3",
			"php3"	=> "php3",
			"php4"	=> "php3",
			"pl"	=> "perl",
			"pm"	=> "perl",
			"py"	=> "python",
			"pyc"	=> "python",
			"rtn"	=> "mumps",
			"scm"	=> "scheme",
			"vb"	=> "vb|vbdotnet",
			"vbs"	=> "vb|vbdotnet|vbscript",
			"wsf"	=> "vbscript"
		);
		
		$this->langfunctions = array(
			// ASCII
			// --- Languages
			"awk",
			"bash",
			"perl",
			"rc",
			"env",
			"cpp",
			"diff",
			"xdiff",
			"swf",
			"psfont",
			"lex",
			"lisp",
			"magic",
			"mime",
			// --- Markup
			"postscript",
			"rtf",
			"html",
			"xml",
			"sgml",
			// --- Generic tests
			"genericshell");
			
		$this->binfunctions = array(
			// Binary
			// --- Images
			"gif",
			"jpeg",
			"png",
			"bmp"
			"tif"
			// --- Compressed
		);
	}
	
	function detect_cpp()
	{
		return !(strpos($this->file, "//") === false);
	}
	
	function detect_awk()
	{
		if (preg_match("/^#!\s+\/bin\/nawk/", $this->file)
			|| preg_match("/^#!\s+\/bin\/nawk/", $this->file) 		
			|| preg_match("/^#!\s+\/usr\/bin\/nawk/", $this->file) 		
			|| preg_match("/^#!\s+\/usr\/local\/bin\/nawk/", $this->file) 	
			|| preg_match("/^#!\s+\/bin\/gawk/", $this->file) 		
			|| preg_match("/^#!\s+\/usr\/bin\/gawk/", $this->file) 		
			|| preg_match("/^#!\s+\/usr\/local\/bin\/gawk/", $this->file) 
			|| preg_match("/^#!\s+\/bin\/awk/", $this->file) 		
			|| preg_match("/^#!\s+\/usr\/bin\/awk/", $this->file) 		
			|| preg_match("/^BEGIN\s+/", $this->file)) return true;	
		else return false;
	}
	
	function detect_perl()
	{
		if (preg_match("/^#!\s+\/bin\/perl/", $this->file)
			|| preg_match("/^eval\s+\"exec\s+\/bin\/perl/", $this->file)
			|| preg_match("/^#!\s+\/usr\/bin\/perl/", $this->file)
			|| preg_match("/^eval\s+\"exec\s+\/usr\/bin\/perl/", $this->file)
			|| preg_match("/^#!\s+\/usr\/local\/bin\/perl/", $this->file)
			|| preg_match("/^eval\s+\"exec\s+\/usr\/local\/bin\/perl/", $this->file)) return true;
		else return false;
	}
	
	function detect_bash()
	{
		if (preg_match("/^#!\s+\/bin\/bash/", $this->file) 
			|| preg_match("/^#!\s+\/usr\/local\/bin\/bash/", $this->file)) return true;
		else return false;
	}
	
	function detect_rc()
	{
		if (preg_match("/^#!\s+\/bin\/rc/", $this->file)) return true;
		else return false;
	}
	
	function detect_env()
	{
		if (preg_match("/^#!\s*\/usr\/bin\/env/", $this->file)) return true;
		else return false;
	}
	
	function detect_genericshell()
	{
		if (preg_match("/^#!/", $this->file)) return true;
		else return false;
	}
	
	function detect_diff()
	{
		if (preg_match("/^diff\s+/", $this->file)
			|| preg_match("/^\*\*\*\s+/", $this->file)
			|| preg_match("/^Only\s+in\s+/", $this->file)
			|| preg_match("/^Common\s+subdirectories:\s+/", $this->file)) return true;
		else return false;
	}
	
	function detect_xdiff()
	{
		if (preg_match("/^%XDZ/", $this->file)) return true;
		else return false;
	}
	
	function detect_swf()
	{
		if (preg_match("/^FWS/", $this->file)) return true;
		else return false;
	}
	
	function detect_psfont()
	{
		if (preg_match("/^(.*?)PS-AdobeFont-1\.0/", $this->file)) return true;
		else return false;
	}
	
	function detect_lex()
	{
		if (substr($this->file, 53, 10)=="yyprevious"
			|| substr($this->file, 21, 17)=="generated by flex") return true;
		else return false;
	}
	
	function detect_lisp()
	{
		return !(strpos($this->file, ";;") === false);
	}
	
	function detect_magic()
	{
		return preg_match("/^#\s+Magic/", $this->file);
	}
	
	function detect_mime()
	{
		return preg_match("/^Content-Type:/", $this->file);
	}
	
	function detect_postscript()
	{
		return (substr($this->file, 0, 2)=="%!" || substr($this->file, 0, 3)==(string)(4)."%!");
	}
	
	function detect_rtf()
	{
		return substr($this->file, 0, 5)=="{\\rtf";
	}
	
	function detect_html()
	{
		if (preg_match("/\s*<!doctype\s+html/", $this->file)
			|| preg_match("/\s*<head/", $this->file)
			|| preg_match("/\s*<title/", $this->file)
			|| preg_match("/\s*<html/", $this->file)) return true;
		else return false;
	}
	
	function detect_xml()
	{
		if (preg_match("/\s*<\?xml/", $this->file)) return true; 
		else return false;
	}
	
	function detect_sgml()
	{
		if (preg_match("/\s*<!doctype/", $this->file)
			|| preg_match("/\s*<!subdoc/", $this->file)
			|| preg_match("/\s*<!--/", $this->file)) return true;
		else return false;
	}
	
	// --- Images
	
	function detect_gif()
	{
		return (substr($this->file, 0, 6) == "GIF89a");
	}
	
	function detect_jpeg()
	{
		return !(strpos(substr($this->file, 0, 16), "JFIF") === false);
	}

	function detect_png()
	{	
		$arr = unpack("C*", $this->file);
		if (sizeof($arr)<9) return false;
		return ($arr[1] == 0x89 && $arr[2] == 0x50
				&& $arr[3] == 0x4E && $arr[4] == 0x47
				&& $arr[5] == 0x0D && $arr[6] == 0x0A
				&& $arr[7] == 0x1A && $arr[8] == 0x0A);
	}

	function detect_bmp()
	{
		return (substr($this->file, 0, 2) == "BM");
	}

	function detect_tif()
	{
		return (substr($this->file, 0, 2) == "MM") || substr($this->file, 0, 2) == "II");
	}
}



?>
