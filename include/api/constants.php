<?php
////////////////////////////////////////////////////////////////////////////////
//                                                                            //
//   Copyright (C) 2009  Phorum Development Team                              //
//   http://www.phorum.org                                                    //
//                                                                            //
//   This program is free software. You can redistribute it and/or modify     //
//   it under the terms of either the current Phorum License (viewable at     //
//   phorum.org) or the Phorum License that was distributed with this file    //
//                                                                            //
//   This program is distributed in the hope that it will be useful,          //
//   but WITHOUT ANY WARRANTY, without even the implied warranty of           //
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.                     //
//                                                                            //
//   You should have received a copy of the Phorum License                    //
//   along with this program.                                                 //
//                                                                            //
////////////////////////////////////////////////////////////////////////////////

/**
 * This script defines constants that are used by Phorum.
 *
 * @package PhorumAPI
 * @subpackage Core
 * @copyright  2009, Phorum Development Team
 * @license    Phorum License, http://www.phorum.org/license.txt
 */

global $PHORUM;

// ----------------------------------------------------------------------
// Basic definitions.
// ----------------------------------------------------------------------

/**
 * The Phorum version.
 */
define( 'PHORUM', '5.3-dev' );

/**
 * Our database schema version in the format of year-month-day-serial.
 */
define( 'PHORUM_SCHEMA_VERSION', '2009051900');

/**
 * Our database patch level in the format of year-month-day-serial.
 */
define( 'PHORUM_SCHEMA_PATCHLEVEL', '2009021901' );

/**
 * A reference to the Phorum installation directory.
 */
define('PHORUM_PATH', realpath(dirname(__FILE__).'/../..'));

// ----------------------------------------------------------------------
// Constants for settings that will not change very often. If there are
// settings that are often changed by admins, then these should go into
// the database to make them configurable through the admin interface.
// ----------------------------------------------------------------------

// put constants here that are configurable
// these should be things that will not be changed
// very often.  Things that are likely to be changed
// by most admins should go in the admin.

/**
 * The extension that is used for the front end Phorum scripts
 * (index, list, read, pm, etc.).
 */
define("PHORUM_FILE_EXTENSION", "php");

/**
 * The maximum number of messages that Phorum will remember as being
 * read, per forum per user. Phorum will trim off older read flags
 * if this limit is hit.
 */
define("PHORUM_MAX_READ_COUNT_PER_FORUM", 1000);

/**
 * Whether or not moderators can view email addresses.
 */
define("PHORUM_MOD_EMAIL_VIEW", true);

/**
 * Whether or not moderators can view user IP addresses.
 */
define("PHORUM_MOD_IP_VIEW", true);

/**
 * Change the author's name (to "Anonymous") on deleting the user.
 */
define("PHORUM_DELETE_CHANGE_AUTHOR", true);

/**
 * Enforce the use of only unregistered names for unregistered users.
 */
define("PHORUM_ENFORCE_UNREGISTERED_NAMES", true);

/**
 * The maximum time that a user can keep the message editor open.
 * This is used for determining stale attachment files.
 */
define("PHORUM_MAX_EDIT_TIME", 86400);

/**
 * A string used to separate things like items in the title tag.
 */
define("PHORUM_SEPARATOR", " :: ");

/**
 * The default TTL for cache-data if not specified otherwise.
 */
define('phorum_api_cache_DEFAULT_TTL', 3600);

/**
 * Split-variable for the file-based caching layer.
 */
define('phorum_api_cache_SPLIT',4);

/**
 * The replacement string for masking bad words.
 */
define('PHORUM_BADWORD_REPLACE', '@#$%&');

/**
 * Phorum's default template.
 */
define('PHORUM_DEFAULT_TEMPLATE', 'emerald');

/**
 * Phorum's default language.
 */
define('PHORUM_DEFAULT_LANGUAGE', 'english');

/**
 * The time in seconds for the admin token to timeout.
 */
define('PHORUM_ADMIN_TOKEN_TIMEOUT', 1800); // 30 minutes

// ----------------------------------------------------------------------
// Constants that should stay the same and which have not been
// assigned to an API layer (yet).
// ----------------------------------------------------------------------

define("PHORUM_UPLOADS_SELECT", 0);
define("PHORUM_UPLOADS_REG", 1);

// moderation
define("PHORUM_MODERATE_OFF", 0);
define("PHORUM_MODERATE_ON", 1);
define("PHORUM_EMAIL_MODERATOR_OFF", 0);
define("PHORUM_EMAIL_MODERATOR_ON", 1);

// message statuses
define("PHORUM_STATUS_APPROVED", 2);
define("PHORUM_STATUS_HOLD", -1);
define("PHORUM_STATUS_HIDDEN", -2);

// message sorting
define("PHORUM_SORT_STICKY", 1);
define("PHORUM_SORT_DEFAULT", 2);

// threaded on/off
define("PHORUM_THREADED_DEFAULT", 0);
define("PHORUM_THREADED_ON", 1);
define("PHORUM_THREADED_OFF", 2);
define("PHORUM_THREADED_HYBRID", 3);

// index page styles
define("PHORUM_INDEX_DIRECTORY", 0);
define("PHORUM_INDEX_FLAT", 1);

// index new message count settings
define("PHORUM_NEWFLAGS_NOCOUNT", 0);
define("PHORUM_NEWFLAGS_COUNT", 1);
define("PHORUM_NEWFLAGS_CHECK", 2);

// edit tracking
define("PHORUM_EDIT_TRACK_OFF", 0);
define("PHORUM_EDIT_TRACK_ON", 1);
define("PHORUM_EDIT_TRACK_MODERATOR", 2);

// registration settings
define("PHORUM_REGISTER_INSTANT_ACCESS", 0);
define("PHORUM_REGISTER_VERIFY_EMAIL", 1);
define("PHORUM_REGISTER_VERIFY_MODERATOR", 2);
define("PHORUM_REGISTER_VERIFY_BOTH", 3);

// more group moderation stuff
define("PHORUM_GROUP_CLOSED", 0);
define("PHORUM_GROUP_OPEN", 1);
define("PHORUM_GROUP_REQUIRE_APPROVAL", 2);

// session cookie usage
define("PHORUM_NO_COOKIES", 0);
define("PHORUM_USE_COOKIES", 1);
define("PHORUM_REQUIRE_COOKIES", 2);

// attachment status flags
define("PHORUM_LINK_USER", "user");
define("PHORUM_LINK_MESSAGE", "message");
define("PHORUM_LINK_EDITOR", "editor");
define("PHORUM_LINK_TEMPFILE", "tempfile");

// Offsite file linking permissions
define("PHORUM_OFFSITE_FORUMONLY", 0);
define("PHORUM_OFFSITE_ANYSITE", 1);
define("PHORUM_OFFSITE_THISSITE", 2);

// PM Special folders
define("PHORUM_PM_INBOX", "inbox");
define("PHORUM_PM_OUTBOX", "outbox");
define("PHORUM_PM_ALLFOLDERS", "allfolder");

// PM Flag types
define("PHORUM_PM_READ_FLAG", "read_flag");
define("PHORUM_PM_REPLY_FLAG", "reply_flag");

// db values for ban list
define("PHORUM_BAD_IPS", 1);
define("PHORUM_BAD_NAMES", 2);
define("PHORUM_BAD_EMAILS", 3);
define("PHORUM_BAD_WORDS", 4);
define("PHORUM_BAD_USERID", 5);
define("PHORUM_BAD_SPAM_WORDS", 6);

// control center url page names
define("PHORUM_CC_SUMMARY", "summary");
define("PHORUM_CC_SUBSCRIPTION_THREADS", "subthreads");
define("PHORUM_CC_SUBSCRIPTION_FORUMS", "subforums");
define("PHORUM_CC_USERINFO", "user");
define("PHORUM_CC_SIGNATURE", "sig");
define("PHORUM_CC_MAIL", "email");
define("PHORUM_CC_BOARD", "forum");
define("PHORUM_CC_PASSWORD", "password");
define("PHORUM_CC_UNAPPROVED", "messages");
define("PHORUM_CC_FILES", "files");
define("PHORUM_CC_USERS", "users");
define("PHORUM_CC_PM", "pm");
define("PHORUM_CC_PRIVACY", "privacy");
define("PHORUM_CC_GROUP_MODERATION", "groupmod");
define("PHORUM_CC_GROUP_MEMBERSHIP", "groups");

// Phorum up/down status
define("PHORUM_MASTER_STATUS_NORMAL", "normal");
define("PHORUM_MASTER_STATUS_READ_ONLY", "read-only");
define("PHORUM_MASTER_STATUS_ADMIN_ONLY", "admin-only");
define("PHORUM_MASTER_STATUS_DISABLED", "disabled");

// moderation actions
define("PHORUM_DELETE_MESSAGE", 1);
define("PHORUM_DELETE_TREE", 2);
define("PHORUM_MOVE_THREAD", 3);
define("PHORUM_DO_THREAD_MOVE", 4);
define("PHORUM_CLOSE_THREAD", 5);
define("PHORUM_REOPEN_THREAD", 6);
define("PHORUM_APPROVE_MESSAGE", 7);
define("PHORUM_HIDE_POST", 8);
define("PHORUM_APPROVE_MESSAGE_TREE", 9);
define("PHORUM_MERGE_THREAD", 10);
define("PHORUM_DO_THREAD_MERGE", 11);
define("PHORUM_SPLIT_THREAD", 12);
define("PHORUM_DO_THREAD_SPLIT", 13);

// admin sanity checks
define("PHORUM_SANITY_OK",   1);
define("PHORUM_SANITY_WARN", 2);
define("PHORUM_SANITY_CRIT", 3);
define("PHORUM_SANITY_SKIP", 4);

?>
