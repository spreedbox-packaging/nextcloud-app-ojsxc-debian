v3.0.1 / 2016-10-28
===
- upgrade jsxc to v3.0.1
- fix invalid argument
- use regex to match full id instead of only letters (internal chat server)
- allow port number in BOSH url for csp
- fix login without chat link
- force login form

v3.0.0 / 2016-03-11
===
- upgrade jsxc to v3.0.0
- add experimental internal chat server
- add chat icon to oc header
- ignore empty bosh url on login
- do not use login overlay in oc >= 8.2
- refactore admin settings
- fix initial sidebar handling
- fix conflict with oc avatars
- modify csp (oc 9.0)
- set minimum required oc version to 8.0
- remove deprecated code and beautify
- add makefile
- fix turn credentials with secret

v2.1.5 / 2015-11-17
===
- upgrade jsxc to v2.1.5
- adaptions for oc 8.2
- do not include images in stylesheet

v2.1.4 / 2015-09-10
===
- upgrade jsxc to v2.1.4
- disable jsxc if core or dependencies threw an error

v2.1.3 / 2015-09-08
===
- upgrade jsxc to v2.1.3

v2.1.2 / 2015-08-12
===
- upgrade jsxc to v2.1.0
- update grunt-sass (fix invalid css)

v2.1.1 / 2015-08-10
===
- handle escaped jids in loadAvatar
- fix TURN-REST-API credential generation

v2.1.0 / 2015-07-31
===
- upgrade jsxc to v2.1.0
- stop attachment on login screen
- load settings async

v2.0.1 / 2015-05-23
===
- upgrade jsxc to v2.0.1
- fix hidden scrollbar
- fix white bar in documents app

v2.0.0 / 2015-05-08
===
- upgrade jsxc to v2.0.0
- add username autocomplete
- fix 'login without chat' style
- fix zindex window list

v1.1.0 / 2015-02-16
===
- upgrade jsxc to v1.1.0
- add routes
- fix bosh test with csp
- prepare oc 8
- switch to sass
- supress php notice

v1.0.0 / 2014-11-06
===
- upgrade jsxc to v1.0.0
- add application name
- add spot to contacts
- fix badcode issue
- fix 'invalid argument foreach' warning
- fix TURN-REST-API
- fix documents support
- handle overwrite flag null as false
- use concatenated and minified version

v0.8.2 / 2014-08-20
===
- fix issue with php < 5.4
- upgrade jsxc to v0.8.2

v0.8.1 / 2014-08-12
===
- upgrade jsxc to v0.8.1
- update to oc7

v0.8.0 / 2014-07-02
===
- upgrade jsxc to v0.8.0
- prepare for oc 7
- adjust jsxc root

v0.7.2 / 2014-05-28
===
- ugrade jsxc to v0.7.2
- clean up oc specific stylesheet

v0.7.1 / 2014-03-18
===
- upgrade jsxc to v0.7.1
- replace utf8 gear with svg gear
- add missing emoticons

v0.7.0 / 2014-03-07
===
- upgrade jsxc to v0.7.0
- enable otr debugging
- add oc avatars

v0.6.0 / 2014-02-28
===
- upgrade jsxc to v0.6.0
- add external auth script for ejabberd (on github)

v0.5.2 / 2014-01-28
===
- upgrade jsxc to v0.5.2

v0.5.1 / 2014-01-27
===
- downgrade required oc version
- upgrade jsxc to v0.5.1

v0.5.0 / 2014-01-13
===
- add hide offline buddy function
- add about dialog
- add vCard avatars
- fix double entry
- fix text replacement
- fix dialog size
- fix translation
- fix display of long names
- fix bosh test
- fix rename bug

v0.4.4 / 2013-12-20
===
- fix dialog height
- add BOSH connection test
- fix css id (cid) generation
- fix close button

v0.4.3 / 2013-12-11
===
- fix mac-chrome-reload bug
- fix design issue
- fix OTR whitespaces

v0.4.2 / 2013-12-11
===
- include colorbox (independent of firstrunwizard)

v0.4.1 / 2013-12-11
===
- fix eof bug
- rebuild

v0.4 / 2013-12-10
===
- display notification request only for incoming messages
- update ui if we lost the trust state
- display allow dialog
- fix chrome notification issue
- fix ringing dialog
- init grunt/jshint
- lot of code clean up and commenting
- set focus to password field
- display minimized roster if no connection is found
- porting to OC6 (replace fancybox with colorbox)
- add webrtc info dialog (ip, fingerprint)
- use git submodules for OTR and strophe.jingle
- update README

v0.3 / 2013-10-28
===
- use lowercase jid
- add url detection
- add basic muc support (alpha)
- create DSA key in background
- fix notification with multiple tabs
- reorganize files 
- add MIT license
- minor fixes
