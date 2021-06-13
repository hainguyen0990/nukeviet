<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2018 VINADES.,JSC. All rights reserved
 * @Language English
 * @License CC BY-SA (http://creativecommons.org/licenses/by-sa/4.0/)
 * @Createdate Mar 04, 2010, 08:22:00 AM
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$lang_translator['author'] = 'VINADES.,JSC <contact@vinades.vn>';
$lang_translator['createdate'] = '04/03/2010, 15:22';
$lang_translator['copyright'] = '@Copyright (C) 2010 VINADES.,JSC. All rights reserved';
$lang_translator['info'] = '';
$lang_translator['langtype'] = 'lang_module';

$lang_module['global_config'] = 'General configuration';
$lang_module['site_config'] = 'Site Configuration';
$lang_module['lang_site_config'] = 'Configuration site in %s language:';
$lang_module['bots_config'] = 'Search Engines';
$lang_module['ip_version'] = 'IP Version';
$lang_module['site_domain'] = 'Primary Domain';
$lang_module['sitename'] = 'Site name';
$lang_module['theme'] = 'Default theme for PC';
$lang_module['mobile_theme'] = 'Default theme for Mobile';
$lang_module['themeadmin'] = 'Administration theme';
$lang_module['default_module'] = 'Default module';
$lang_module['description'] = 'Site\'s description';
$lang_module['rewrite'] = 'Activate rewrite';
$lang_module['rewrite_optional'] = 'Remove language characters on URL';
$lang_module['rewrite_op_mod'] = 'Remove module name in the url';
$lang_module['disable_content'] = 'Site closing notification';
$lang_module['submit'] = 'Submit';
$lang_module['err_writable'] = 'Error system can\'t write file %s. Please chmod or check server config!';
$lang_module['err_supports_rewrite'] = 'Error, server doesn\'t support rewrite.';
$lang_module['err_save_sysconfig'] = 'The changes have been saved but the system does not write to the configuration file. Please grant write permission to file %s and then execute again';
$lang_module['security'] = 'Setup security';
$lang_module['flood_blocker'] = 'Anti-flood';
$lang_module['is_flood_blocker'] = 'Active anti-flood';
$lang_module['max_requests_60'] = 'The maximum number of requests per minute';
$lang_module['max_requests_300'] = 'The maximum number of requests in 5 minute';
$lang_module['max_requests_error'] = 'Error: Please enter a request number greater than 0';
$lang_module['nv_anti_iframe'] = 'Anti-Iframe';
$lang_module['nv_anti_agent'] = 'Check and block computer if the agent does not exist';
$lang_module['nv_allowed_html_tags'] = 'HTML code was approved in the system';
$lang_module['nv_debug'] = 'Debug mode';
$lang_module['nv_debug_help'] = 'If this option is enabled, the system will display errors to help developers easily check in the programming process. If your website is operating in a real environment, <strong>disable</strong> this option';
$lang_module['domains_restrict'] = 'Limit domain names to dangerous HTML tags (iframe, object, embed...)';
$lang_module['domains_whitelist'] = 'Trusted domain name (one domain per line). If enabled limit the domain name in the section above, the system will allow use of resources and links from these domains';
$lang_module['captcha'] = 'Captcha display method';
$lang_module['captcha_num'] = 'Number characters of image-captcha';
$lang_module['captcha_size'] = 'Size of image-captcha';
$lang_module['recaptcha_ver'] = 'ReCaptcha version';
$lang_module['recaptcha_sitekey'] = 'ReCaptcha Site key';
$lang_module['recaptcha_secretkey'] = 'ReCaptcha Secret key';
$lang_module['recaptcha_type'] = 'ReCaptcha type (Version 2 only)';
$lang_module['recaptcha_type_image'] = 'Image';
$lang_module['recaptcha_type_audio'] = 'Audio';
$lang_module['recaptcha_guide'] = 'Guide';
$lang_module['mail_sender_name'] = 'Sender name';
$lang_module['mail_sender_name_default'] = 'Leaving blank, the system will take from specified value (if any) or site name';
$lang_module['mail_sender_email'] = 'Sender email';
$lang_module['mail_sender_email_default'] = 'Leaving blank, the system will take from specified value (if any), sys email or site email depending on the method of sending mail. Note: This value may not work depending on the sending or receiving server';
$lang_module['mail_reply_name'] = 'Reply name';
$lang_module['mail_reply_name_default'] = 'When there is no parameter passed at the time of sending mail, the system will take this value. Leaving blank, the system will take from site name';
$lang_module['mail_reply_email'] = 'Reply email';
$lang_module['mail_reply_email_default'] = 'When there is no parameter passed at the time of sending mail, the system will take this value. Leaving blank, the system will take from site email';
$lang_module['mail_force_sender'] = 'Forced sender. Use to force all sender information to be valid according to the configuration here instead of the information in each email sent';
$lang_module['mail_force_reply'] = 'Forced reply. Use to force all reply information to be valid according to the configuration here instead of the information in each email sent';
$lang_module['ftp_config'] = 'FTP Configuration';
$lang_module['smtp_config'] = 'Send mail configuration';
$lang_module['server'] = 'Server or Url';
$lang_module['port'] = 'Port';
$lang_module['username'] = 'Username';
$lang_module['password'] = 'Password';
$lang_module['ftp_path'] = 'Remote path';
$lang_module['mail_config'] = 'Mail sending method';
$lang_module['type_smtp'] = 'SMTP';
$lang_module['type_linux'] = 'Linux Mail';
$lang_module['type_phpmail'] = 'PHPmail';
$lang_module['smtp_server'] = 'Mail Server Configurations';
$lang_module['incoming_ssl'] = 'Encrypted connection Method';
$lang_module['verify_peer_ssl'] = 'Ssl verify peer';
$lang_module['verify_peer_ssl_yes'] = 'Yes';
$lang_module['verify_peer_ssl_no'] = 'No';
$lang_module['verify_peer_name_ssl'] = 'Ssl verify name peer';
$lang_module['outgoing'] = 'Outgoing mail server (SMTP)';
$lang_module['outgoing_port'] = 'Outgoing port';
$lang_module['smtp_username'] = 'Mail Account';
$lang_module['smtp_login'] = 'User Name';
$lang_module['smtp_pass'] = 'Password';
$lang_module['smtp_error_openssl'] = 'Error: Your server does not support sending mail via ssl';
$lang_module['smtp_test'] = 'Check the configuration';
$lang_module['smtp_test_subject'] = 'Test email';
$lang_module['smtp_test_message'] = 'This is a test email to check the mail configuration. Simply delete it!';
$lang_module['smtp_test_success'] = 'Send email successfully';
$lang_module['smtp_test_fail'] = 'Email failed';
$lang_module['smtp_test_note'] = 'Note: Click Save configuration if there is a change in the above form before checking the configuration';
$lang_module['notify_email_error'] = 'Create system notifications when email fails';
$lang_module['bot_name'] = 'Server\'s name';
$lang_module['bot_agent'] = 'UserAgent';
$lang_module['bot_ips'] = 'Server\'s IP';
$lang_module['bot_allowed'] = 'Permission';
$lang_module['site_keywords'] = 'Keywords';
$lang_module['site_logo'] = 'Site\'s logo';
$lang_module['site_banner'] = 'Site\'s banner';
$lang_module['site_favicon'] = 'Site\'s favicon';
$lang_module['site_email'] = 'Site\'s email';
$lang_module['error_set_logs'] = 'Recorded of system error';
$lang_module['error_send_email'] = 'Email receiving error notices';
$lang_module['lang_multi'] = 'Activate multi-language';
$lang_module['lang_geo'] = 'Enable the definition of language according to country';
$lang_module['lang_geo_config'] = 'Configure the function to define language by country';
$lang_module['site_lang'] = 'Default language';
$lang_module['site_timezone'] = 'Site\'s timezone';
$lang_module['current_time'] = 'Current time: %s';
$lang_module['date_pattern'] = 'Date format';
$lang_module['time_pattern'] = 'Time display format';
$lang_module['gzip_method'] = 'Activate gzip';
$lang_module['proxy_blocker'] = 'Block proxy';
$lang_module['proxy_blocker_0'] = 'Don\'t check';
$lang_module['proxy_blocker_1'] = 'Low';
$lang_module['proxy_blocker_2'] = 'Medium';
$lang_module['proxy_blocker_3'] = 'High';
$lang_module['str_referer_blocker'] = 'Activate block referers';
$lang_module['my_domains'] = 'Domains';
$lang_module['searchEngineUniqueID'] = 'Google search Engine ID<br />(format 000329275761967753447:sr7yxqgv294 , <a href="http://nukeviet.vn/vi/faq/Su-dung-Google-Custom-Search-tren-NukeViet/" target="_blank">view details</a>)';
$lang_module['variables'] = 'Setup cookie session';
$lang_module['cookie_prefix'] = 'Cookie prefix';
$lang_module['session_prefix'] = 'Session\'s prefix';
$lang_module['live_cookie_time'] = 'The lifetime of the cookie';
$lang_module['live_session_time'] = 'The lifetime of the session';
$lang_module['live_session_time0'] = '=0 exist when closing the browser';
$lang_module['cookie_secure'] = 'Cookie secure';
$lang_module['cookie_httponly'] = 'Cookie httponly';
$lang_module['cookie_SameSite'] = 'cookie SameSite';
$lang_module['cookie_secure_note'] = 'Cookie is only sent to the server when a request is made with the https: scheme or in the localhost environment';
$lang_module['cookie_httponly_note'] = 'Forbids JavaScript from accessing the cookie, for example, through the Document.cookie property';
$lang_module['cookie_SameSite_note'] = 'Controls whether a cookie is sent with cross-origin requests';
$lang_module['cookie_SameSite_note2'] = 'This attribute only takes effect when server\'s php version >= 7.3';
$lang_module['cookie_SameSite_Empty'] = 'Depends on browser';
$lang_module['cookie_SameSite_Lax'] = 'Cookies are not sent on normal cross-site subrequests (for example to load images), but are sent when a user is navigating to the origin site';
$lang_module['cookie_SameSite_Strict'] = 'Cookies will only be sent in a first-party context and not be sent along with requests initiated by third party websites';
$lang_module['cookie_SameSite_None'] = 'Cookies will be sent in all contexts (The cookie Secure attribute must be set)';

$lang_module['is_user_forum'] = 'Switch users management to forum';
$lang_module['banip'] = 'Ban IP Management';
$lang_module['banip_ip'] = 'Ip address';
$lang_module['banip_timeban'] = 'Ban begin time';
$lang_module['banip_timeendban'] = 'Ban end time';
$lang_module['banip_funcs'] = 'Feature';
$lang_module['banip_checkall'] = 'Check all';
$lang_module['banip_uncheckall'] = 'Uncheck all';
$lang_module['banip_title_add'] = 'Add IP block';
$lang_module['banip_title_edit'] = 'Edit IP block';
$lang_module['banip_address'] = 'Address';
$lang_module['banip_begintime'] = 'Begin time';
$lang_module['banip_endtime'] = 'End time';
$lang_module['banip_notice'] = 'Notice';
$lang_module['banip_confirm'] = 'Confirm';
$lang_module['banip_mask_select'] = 'Please select one';
$lang_module['banip_area'] = 'Area';
$lang_module['banip_nolimit'] = 'Unlimit time';
$lang_module['banip_area_select'] = 'Please select an area';
$lang_module['banip_noarea'] = 'No defined';
$lang_module['banip_del_success'] = 'Delete successful !';
$lang_module['banip_area_front'] = 'Frontsite';
$lang_module['banip_area_admin'] = 'Admin area';
$lang_module['banip_area_both'] = 'Both frontsite and admin area';
$lang_module['banip_delete_confirm'] = 'Are you sure to remove this ip from ban list ?';
$lang_module['banip_mask'] = 'Mask IP';
$lang_module['banip_edit'] = 'Edit';
$lang_module['banip_delete'] = 'Delete';
$lang_module['banip_error_ip'] = 'Please enter ip address want to ban';
$lang_module['banip_error_area'] = 'Please select an area';
$lang_module['banip_error_validip'] = 'Error: Please enter a valid Ip address';
$lang_module['banip_error_write'] = 'Error: The system can not write the file, please CHMOD folder <strong>%s</strong> to 0777 or "Change permission", you can also create file banip.php with below content in folder <strong>%s</strong>';
$lang_module['nv_admin_add'] = 'Add job';
$lang_module['nv_admin_edit'] = 'Edit job';
$lang_module['nv_admin_del'] = 'Delete job';
$lang_module['cron_name_empty'] = 'You do not declare the name of the job';
$lang_module['file_not_exist'] = 'File does not exist';
$lang_module['func_name_invalid'] = 'You do not declare function\'s name or function\'s name is invalid';
$lang_module['func_name_not_exist'] = 'This function does not exist';
$lang_module['nv_admin_add_title'] = 'To add job, you need to declare fully the box below';
$lang_module['nv_admin_edit_title'] = 'To edit job, you need to declare fully the box below';
$lang_module['cron_name'] = 'Job name';
$lang_module['file_none'] = 'Not conected';
$lang_module['run_file'] = 'Conected file';
$lang_module['run_file_info'] = 'Executable file is contained in the directory &ldquo;<strong>includes/cronjobs/</strong>&rdquo;';
$lang_module['run_func'] = 'Conect function';
$lang_module['run_func_info'] = 'Function must be beginning with &ldquo;<strong>cron_</strong>&rdquo;';
$lang_module['params'] = 'Parameter';
$lang_module['params_info'] = 'Separated by commas';
$lang_module['interval'] = 'Repeat following jobs';
$lang_module['interval_info'] = 'If choice &ldquo;<strong>0</strong>&rdquo;, the work will be performed one time only';
$lang_module['start_time'] = 'Start time';
$lang_module['min'] = 'minute';
$lang_module['hour'] = 'hours';
$lang_module['day'] = 'day';
$lang_module['month'] = 'month';
$lang_module['year'] = 'year';
$lang_module['is_del'] = 'Delete after you\'re done';
$lang_module['isdel'] = 'Delete';
$lang_module['notdel'] = 'Not delete';
$lang_module['is_sys'] = 'Jobs is created by';
$lang_module['system'] = 'System';
$lang_module['client'] = 'Admin';
$lang_module['act'] = 'Status';
$lang_module['act0'] = 'Suspend';
$lang_module['act1'] = 'Active';
$lang_module['last_time'] = 'Last time';
$lang_module['next_time'] = 'Next time';
$lang_module['last_time0'] = 'None executable';
$lang_module['last_result'] = 'Last result';
$lang_module['last_result_empty'] = 'n/a';
$lang_module['last_result0'] = 'Bad';
$lang_module['last_result1'] = 'Finished';
$lang_module['closed_site'] = 'Closing mode';
$lang_module['closed_site_0'] = 'Sites ordinary activities';
$lang_module['closed_site_1'] = 'Closing of the site only has access to the Supreme Administrative';
$lang_module['closed_site_2'] = 'Moderator\'s closing general site access';
$lang_module['closed_site_3'] = 'Close all of the site admin access';
$lang_module['closed_site_reopening_time'] = 'Expected reopening time';
$lang_module['ssl_https'] = 'Redirect HTTP-requests to HTTPS';
$lang_module['ssl_https_module'] = 'These modules enable SSL';
$lang_module['ssl_https_0'] = 'Off';
$lang_module['ssl_https_1'] = 'Apply on the entire site';
$lang_module['ssl_https_2'] = 'Apply in admin area';
$lang_module['note_ssl'] = 'Are you sure your site support https does not? If not supported site will be inaccessible after saving?';
$lang_module['timezoneAuto'] = 'By computer of visitor';
$lang_module['timezoneByCountry'] = 'By country of visitor';
$lang_module['allow_switch_mobi_des'] = 'Allow to switch mobile, desktop theme';
$lang_module['allow_theme_type'] = 'Allow theme type';
$lang_module['ftp_auto_detect_root'] = 'Auto detection';
$lang_module['ftp_error_full'] = 'Please enter all the parameters to auto detection the Remote path';
$lang_module['ftp_error_detect_root'] = 'Can not find any suitable parameters, check your username and password';
$lang_module['ftp_error_support'] = 'Your server is blocking or does not support FTP library, please contact the provider to be enabled.';
$lang_module['static_url'] = 'Hosting of static files';
$lang_module['cdn_url'] = 'Hosting CDN for javascript, css';
$lang_module['remote_api_access'] = 'Enable Remote API';
$lang_module['remote_api_access_help'] = 'Disabling all API access from outside will be blocked. Internal APIs are still used normally';
$lang_module['remote_api_log'] = 'Enable Remote API Logging';
$lang_module['plugin'] = 'Configuration Plugin';
$lang_module['plugin_info'] = 'php file plugin implementation is contained in the &ldquo;<strong>includes/plugin/</strong>&rdquo;. The plugin will always run when the system is activated';
$lang_module['plugin_file'] = 'Executable File';
$lang_module['plugin_area'] = 'Area';
$lang_module['plugin_area_1'] = 'Before the database connection';
$lang_module['plugin_area_2'] = 'Before run the module (both admin panel and user area)';
$lang_module['plugin_area_3'] = 'Website content before sending to the browser';
$lang_module['plugin_area_4'] = 'After run the module';
$lang_module['plugin_area_5'] = 'Before run the module (only user area)';
$lang_module['plugin_number'] = 'Order Number';
$lang_module['plugin_func'] = 'Aunction';
$lang_module['plugin_add'] = 'Add a plugin';
$lang_module['plugin_file_delete'] = 'Deleted from the system';
$lang_module['notification_config'] = 'Notification config';
$lang_module['notification_active'] = 'Show notification when a new activity';
$lang_module['notification_autodel'] = 'Automatically deleted after a period of notice';
$lang_module['notification_autodel_note'] = 'Fill <strong>0</strong> if you do not want to automatically delete';
$lang_module['notification_day'] = 'Day';
$lang_module['is_login_blocker'] = 'Activate login blocker';
$lang_module['login_number_tracking'] = 'Wrong logins maximum track time period';
$lang_module['login_time_tracking'] = 'Time Tracking';
$lang_module['login_time_ban'] = 'Ban time';
$lang_module['two_step_verification'] = 'Requires two-step authentication log in';
$lang_module['two_step_verification0'] = 'Not required';
$lang_module['two_step_verification1'] = 'Admin Area';
$lang_module['two_step_verification2'] = 'Site area';
$lang_module['two_step_verification3'] = 'All areas';
$lang_module['two_step_verification_note'] = 'Note: This configuration applies to all accounts of groups, if you need to configure each group individually, select this value as <strong>%s</strong> then edit the <a href="%s">group</a>, then select the required two-step authentication trigger field as desired';
$lang_module['site_phone'] = 'Site\'s phone';
$lang_module['noflood_ip_add'] = 'Add IP to ignore flood check';
$lang_module['noflood_ip_edit'] = 'Edit IP bypass flood check';
$lang_module['noflood_ip_list'] = 'The IP bypasses the flood check';
$lang_module['cron_interval_type'] = 'Repeat type (if available)';
$lang_module['cron_interval_type0'] = 'After the launch time in the database';
$lang_module['cron_interval_type1'] = 'After the actual launch time';
$lang_module['cors'] = 'Cross-Site config';
$lang_module['cors_site_restrict'] = 'Protect the user area';
$lang_module['cors_site_restrict_help'] = 'Enable this option to block all external post request to the user area';
$lang_module['cors_site_valid_domains'] = 'Valid domain for the user area';
$lang_module['cors_site_valid_ips'] = 'Valid IP for the user area';
$lang_module['cors_admin_restrict'] = 'Protect the admin area';
$lang_module['cors_admin_restrict_help'] = 'Enable this option to block all external post request to the admin area';
$lang_module['cors_admin_valid_domains'] = 'Valid domain for the admin area';
$lang_module['cors_admin_valid_ips'] = 'Valid IP for the admin area';
$lang_module['cors_valid_domains_help'] = 'Enter one domain per line (please enter the full form http://yourdomain.com), post request from these domains are allowed';
$lang_module['cors_valid_ips_help'] = 'Enter one IP per line, post request from these IPs are allowed';
$lang_module['allow_null_origin'] = 'Allow POST with NULL Origin';
$lang_module['ip_allow_null_origin'] = 'IPs is allowed to POST with NULL Origin';
$lang_module['ip_allow_null_origin_help'] = 'Enter one IP per line, if left blank all IPs are allowed';
$lang_module['admin_2step_opt'] = 'Two-step verification methods are allowed in administration';
$lang_module['admin_2step_default'] = 'The default two-step verification method in administration';
$lang_module['admin_2step_appconfig'] = 'Set up the application here';
$lang_module['zalo_official_account_id'] = 'Zalo Official Account ID';
$lang_module['cookie_notice_popup'] = 'Enable pop-up cookie notification when a user first visits a website';
$lang_module['smime_certificate'] = 'Email Signing certificate S/MIME';
$lang_module['smime_cn'] = 'Certificate common name';
$lang_module['smime_issuer_cn'] = 'Certificate issuer';
$lang_module['smime_subjectAltName'] = 'Certify';
$lang_module['smime_validFrom'] = 'Certificate valid from';
$lang_module['smime_validTo'] = 'Certificate valid to';
$lang_module['smime_signatureTypeSN'] = 'Signature type';
$lang_module['smime_purposes'] = 'Purposes';
$lang_module['smime_del'] = 'Delete';
$lang_module['smime_del_confirm'] = 'Do you really want to delete this certificate?';
$lang_module['smime_add'] = 'Add certificate';
$lang_module['smime_download'] = 'Download';
$lang_module['smime_add_button'] = 'Execute';
$lang_module['smime_pkcs12'] = 'Certificate file (.pfx/.p12)';
$lang_module['smime_passphrase'] = 'Password for unlocking the certificate file';
$lang_module['smime_download_passphrase'] = 'Generate a new password for unlocking the certificate file';
$lang_module['smime_pkcs12_ext_error'] = 'The certificate file must have a pfx or p12 extension';
$lang_module['smime_pkcs12_cannot_be_read'] = 'The certificate cannot be read';
$lang_module['smime_pkcs12_smimesign_error'] = 'Certificate does not support S/MIME email signature';
$lang_module['smime_pkcs12_overwrite'] = 'The certificate is already on the server. Do you want to overwrite it with this new certificate file?';
$lang_module['smime_note'] = 'The S/MIME digital signature will be sent along with the message if the sender\'s email has a certificate file stored on the server.';
$lang_module['DKIM_signature'] = 'Domain Keys Identified Mail DKIM';
$lang_module['DKIM_note'] = 'The DKIM-signature will be sent with the message if it is validated and stored on the server.';
$lang_module['DKIM_verified'] = 'DKIM verified';
$lang_module['DKIM_unverified'] = 'DKIM unverified';
$lang_module['DKIM_TXT_host'] = 'TXT Host/Name';
$lang_module['DKIM_TXT_value'] = 'TXT Value';
$lang_module['dkim_verify'] = 'Verify';
$lang_module['dkim_reverify'] = 'Verify again';
$lang_module['dkim_del'] = 'Delete';
$lang_module['dkim_del_confirm'] = 'Do you really want to delete this DKIM-signature?';
$lang_module['DKIM_verify_note'] = 'To verify your DKIM digital signature, go to the domain\'s DNS management page, add a TXT record with the above parameters, then click the Confirm button (You may have to wait a bit).';
$lang_module['DKIM_add'] = 'Add new DKIM-signature';
$lang_module['DKIM_add_button'] = 'Execute';
$lang_module['DKIM_domain'] = 'Mailing domain';
$lang_module['DKIM_domain_error'] = 'Error: Mailing domain is malformed';
$lang_module['DKIM_domain_exists'] = 'This mailing domain is already on the server';
$lang_module['DKIM_created'] = 'DKIM-signature for mail domain %s has been created. You need to verify this DKIM-signature according to the instructions on the next page.';
$lang_module['dkim_included'] = 'Include DKIM digital signature (if any) when using method';
$lang_module['smime_included'] = 'Include S/MIME certificate (if any) when using method';

$lang_module['csp'] = 'CSP setting';
$lang_module['csp_desc'] = 'Content-Security-Policy (CSP) is the name of a HTTP response header that modern browsers use to enhance the security of the web page. The CSP allows you to restrict how resources such as JavaScript, CSS, or pretty much anything that the browser loads.';
$lang_module['csp_details'] = 'Details';
$lang_module['csp_note'] = 'Enter one value per line. If the value is not a URL, enclose it in single quotes (ex: &#039;self&#039;)';
$lang_module['csp_default_src'] = 'Default policy, used in any case except if overridden by a more precise directive.';
$lang_module['csp_script_src'] = 'Policy dedicated to scripts';
$lang_module['csp_object_src'] = 'Policy dedicated to plugins (object, embed or applet)';
$lang_module['csp_style_src'] = 'Policy dedicated to styles (CSS)';
$lang_module['csp_img_src'] = 'Policy dedicated to images (img, but also url() or image() from CSS, or link element related to an image type (ex: rel=�icon�)';
$lang_module['csp_media_src'] = 'Policy dedicated to media (video, audio, source or track)';
$lang_module['csp_frame_src'] = 'Policy dedicated to frames (iframe or frame)';
$lang_module['csp_font_src'] = 'Policy dedicated to fonts';
$lang_module['csp_connect_src'] = 'Policy dedicated to connections from a XMLHttpRequest object or a WebSocket';
$lang_module['csp_form_action'] = 'Defines valid sources that can be used as a form action.';
$lang_module['csp_base_uri'] = 'Security policy restricting the possible values of a &lt;base&gt; element.';
$lang_module['csp_act'] = 'Enable CSP';

$lang_module['rp'] = 'RP setting';
$lang_module['rp_desc'] = 'Referrer-Policy (RP) is the name of a HTTP header that modern browsers use to control how much referrer information (sent via the Referer header).';
$lang_module['rp_desc2'] = 'Types of referrer information (can be sent via the Referer header):<ul><li>Origin: includes scheme (ex: http, https), host (ex: nukeviet.vn) and port (ex: 80, 443)</li><li>Path (absolute path on the server,ex: thumuc1/index.php)</li><li>Querystring (ex: ?name=ferret&color=purple)</li></ul>';
$lang_module['rp_details'] = 'Details';
$lang_module['rp_act'] = 'Enable RP';
$lang_module['rp_no_referrer'] = 'The Referer header will be omitted entirely. No referrer information is sent along with requests.<br/>NukeViet system does not support this directive!';
$lang_module['rp_no_referrer_when_downgrade'] = 'Send the origin, path, and querystring in Referer when the protocol security level stays the same or improves (HTTP?HTTP, HTTP?HTTPS, HTTPS?HTTPS). Don\'t send the Referer header for requests to less secure destinations (HTTPS?HTTP, HTTPS?file).';
$lang_module['rp_origin'] = 'Send the origin (only) in the Referer header. For example, a document at https://example.com/page.html will send the referrer https://example.com/.';
$lang_module['rp_origin_when_cross_origin'] = 'Send the origin, path, and query string when performing a same-origin request to the same protocol level. Send origin (only) for cross origin requests and requests to less secure destinations.';
$lang_module['rp_same_origin'] = 'Send the origin, path, and query string for same-origin requests. Don\'t send the Referer header for cross-origin requests.';
$lang_module['rp_strict_origin'] = 'Send the origin (only) when the protocol security level stays the same (HTTPS?HTTPS). Don\'t send the Referer header to less secure destinations (HTTPS?HTTP).';
$lang_module['rp_strict_origin_when_cross_origin'] = 'Send the origin, path, and querystring when performing a same-origin request. For cross-origin requests send the origin (only) when the protocol security level stays same (HTTPS?HTTPS). Don\'t send the Referer header to less secure destinations (HTTPS?HTTP). This is the default policy if no policy is specified, or if the provided value is invalid.';
$lang_module['rp_unsafe_url'] = 'Send the origin, path, and query string when performing any request, regardless of security. Warning: This policy will leak potentially-private information from HTTPS resource URLs to insecure origins. Carefully consider the impact of this setting.';
$lang_module['rp_note'] = 'If you want to specify a fallback policy in any case the desired policy hasn\'t got wide enough browser support, use a comma-separated list with the desired policy specified last. For example, Referrer-Policy: no-referrer-when-downgrade, strict-origin-when-cross-origin. In the above scenario, no-referrer-when-downgrade will only be used if strict-origin-when-cross-origin is not supported by the browser.';
$lang_module['rp_directives'] = 'Referrer-Policy directives';
