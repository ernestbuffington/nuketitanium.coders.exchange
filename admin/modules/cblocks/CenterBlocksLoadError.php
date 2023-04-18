<?php
/************************************************************************/
/* PHP-NUKE: Advanced Content Management System (Titanium Edition)      */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) 2002 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      PHP Patched                             v8.2.4       04/18/2023
      Caching System                          v1.0.1       04/18/2023
 ************************************************************************/

/********************************************************/
/* NSN Center Blocks                                    */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://nukescripts.86it.us                           */
/* Copyright � 2000-2005 by NukeScripts Network         */
/* Ported for Nuke-Evolution by Quake                   */
/* http://www.evo-mods.com                              */
/* Additional Porting by co0kz & Rodmar                 */
/* http://www.cookie-creations.net                      */
/* http://www.evolved-Systems.net                       */
/********************************************************/
/* Original by: Richard Benfield                        */
/* http://www.benfield.ws                               */
/********************************************************/

if(!defined('ADMIN_FILE')) {
    exit('Access Denied');
}

$pagetitle = "NSN Center Blocks: Error Loading Functions";
include_once(NUKE_BASE_DIR.'header.php');
title($pagetitle);
OpenTable();
echo "It appears that NSN Center Blocks has not been configured correctly.  The
most common cause is that you either have an error in the syntax that is
including includes/nsncb_func.php from your mainfile.php, or you have not
added the NSN Center Blocks code to your mainfile.php.  This code must be placed
immediately before the closing ?&gt; tag in mainfile.php.  So your first 7
lines in mainfile.php <span>must look like this</span>:<br /><br />
<pre>include(NUKE_INCLUDE_DIR.\"nsncb_func.php\");?&gt;</pre>";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');
