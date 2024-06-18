<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2023 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_FILE_SITEINFO')) {
    exit('Stop!!!');
}

// Eg: $id = nv_insert_logs('lang','module name','name key','note',1, 'link acess');

$page_title = $nv_Lang->getModule('logs_title');

$page = $nv_Request->get_int('page', 'get', 1);
$per_page = 30;
$data = [];
$array_userid = [];
$disabled = ' disabled="disabled"';

$base_url = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op;

// Search data
$data_search = [
    'q' => '',
    'from' => '',
    'to' => '',
    'lang' => '',
    'module' => '',
    'user' => ''
];

$array_where = [];

$check_like = false;
if ($nv_Request->isset_request('filter', 'get') and $nv_Request->isset_request('checksess', 'get')) {
    $checksess = $nv_Request->get_title('checksess', 'get', '');

    if ($checksess != md5('siteinfo_' . NV_CHECK_SESSION . '_' . $admin_info['userid'])) {
        nv_insert_logs(NV_LANG_DATA, $module_name, $nv_Lang->getModule('filter_check_log', $op), $admin_info['username'] . ' - ' . $admin_info['userid'], 0);

        nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
    }

    $data_search = [
        'q' => $nv_Request->get_title('q', 'get', ''),
        'from' => $nv_Request->get_title('from', 'get', ''),
        'to' => $nv_Request->get_title('to', 'get', ''),
        'lang' => $nv_Request->get_title('lang', 'get', ''),
        'module' => $nv_Request->get_title('module', 'get', ''),
        'user' => $nv_Request->get_title('user', 'get', '')
    ];

    $base_url .= '&amp;filter=1&amp;checksess=' . $checksess;
    $disabled = '';

    if (!empty($data_search['q'])) {
        $base_url .= '&amp;q=' . $data_search['q'];
        $array_where[] = '( name_key LIKE :keyword1 OR note_action LIKE :keyword2 )';
        $check_like = true;
    }

    $from = nv_d2u_get($data_search['from']);
    if ($from != 0) {
        $array_where[] = 'log_time >= ' . $from;
        $base_url .= '&amp;from=' . urlencode($data_search['from']);
    } else {
        $data_search['from'] = '';
    }

    $to = nv_d2u_get($data_search['to'], 23, 59, 59);
    if ($to != 0) {
        $array_where[] = 'log_time <= ' . $to;
        $base_url .= '&amp;to=' . urlencode($data_search['to']);
    } else {
        $data_search['to'] = '';
    }

    if (!empty($data_search['lang'])) {
        if (in_array($data_search['lang'], array_keys($language_array), true)) {
            $array_where[] = 'lang=' . $db->quote($data_search['lang']);
            $base_url .= '&amp;lang=' . $data_search['lang'];
        }
    }

    if (!empty($data_search['module'])) {
        $array_where[] = 'module_name=' . $db->quote($data_search['module']);
        $base_url .= '&amp;module=' . $data_search['module'];
    }

    if (!empty($data_search['user'])) {
        $user_tmp = ($data_search['user'] == 'system') ? 0 : (int) $data_search['user'];

        $array_where[] = 'userid=' . $user_tmp;
        $base_url .= '&amp;user=' . $data_search['user'];
    }
}

// Order data
$order = [];
$check_order = ['ASC', 'DESC', 'NO'];
$opposite_order = [
    'NO' => 'ASC',
    'DESC' => 'ASC',
    'ASC' => 'DESC'
];

$lang_order_1 = [
    'NO' => $nv_Lang->getModule('filter_lang_asc'),
    'DESC' => $nv_Lang->getModule('filter_lang_asc'),
    'ASC' => $nv_Lang->getModule('filter_lang_desc')
];

$lang_order_2 = [
    'lang' => strtolower($nv_Lang->getModule('log_lang')),
    'module' => strtolower($nv_Lang->getModule('moduleName')),
    'time' => strtolower($nv_Lang->getModule('log_time'))
];

$order['lang']['order'] = $nv_Request->get_title('order_lang', 'get', 'NO');
$order['module']['order'] = $nv_Request->get_title('order_module', 'get', 'NO');
$order['time']['order'] = $nv_Request->get_title('order_time', 'get', 'NO');

foreach ($order as $key => $check) {
    if (!in_array($check['order'], $check_order, true)) {
        $order[$key]['order'] = 'NO';
    }

    $order[$key]['data'] = [
        'class' => 'order' . strtolower($order[$key]['order']),
        'url' => $base_url . '&amp;order_' . $key . '=' . $opposite_order[$order[$key]['order']],
        'title' => $nv_Lang->getModule('filter_order_by', $lang_order_2[$key]) . ' ' . $lang_order_1[$order[$key]['order']]
    ];
}

$db->sqlreset()
    ->select('COUNT(*)')
    ->from($db_config['prefix'] . '_logs');
if (!empty($array_where)) {
    $db->where(implode(' AND ', $array_where));
}

$sth = $db->prepare($db->sql());
if ($check_like) {
    $keyword = '%' . addcslashes($data_search['q'], '_%') . '%';

    $sth->bindParam(':keyword1', $keyword, PDO::PARAM_STR);
    $sth->bindParam(':keyword2', $keyword, PDO::PARAM_STR);
}
$sth->execute();
$num_items = $sth->fetchColumn();

$db->select('*')->limit($per_page)->offset(($page - 1) * $per_page);

if ($order['lang']['order'] != 'NO') {
    $db->order('lang ' . $order['lang']['order']);
} elseif ($order['module']['order'] != 'NO') {
    $db->order('module_name ' . $order['module']['order']);
} elseif ($order['time']['order'] != 'NO') {
    $db->order('log_time ' . $order['time']['order']);
} else {
    $db->order('id DESC');
}
$sql = $db->sql();
$sth = $db->prepare($sql);
if ($check_like) {
    $keyword = '%' . addcslashes($data_search['q'], '_%') . '%';

    $sth->bindParam(':keyword1', $keyword, PDO::PARAM_STR);
    $sth->bindParam(':keyword2', $keyword, PDO::PARAM_STR);
}
$sth->execute();

while ($data_i = $sth->fetch()) {
    if ($data_i['userid'] != 0) {
        if (!in_array((int) $data_i['userid'], array_map('intval', $array_userid), true)) {
            $array_userid[] = $data_i['userid'];
        }
    }

    $data_i['time'] = nv_datetime_format($data_i['log_time'], 0, 0);
    $data[] = $data_i;
    unset($data_i);
}

$data_users = [];
$data_users[0] = 'system';
if (!empty($array_userid)) {
    $result_users = $db->query('SELECT userid, username FROM ' . NV_USERS_GLOBALTABLE . ' WHERE userid IN (' . implode(',', $array_userid) . ')');
    while ($data_i = $result_users->fetch()) {
        $data_users[$data_i['userid']] = $data_i['username'];
    }
    unset($data_i, $result_users);
}

$list_lang = nv_siteinfo_getlang();
$array_lang = [];
$array_lang[] = [
    'key' => '',
    'title' => $nv_Lang->getModule('filter_lang'),
    'selected' => ($data_search['lang'] == '') ? ' selected="selected"' : ''
];

foreach ($list_lang as $lang) {
    $array_lang[] = [
        'key' => $lang,
        'title' => $language_array[$lang]['name'],
        'selected' => ($data_search['lang'] == $lang) ? ' selected="selected"' : ''
    ];
}

$list_module = nv_siteinfo_getmodules();
$array_module = [];
$array_module[] = [
    'key' => '',
    'title' => $nv_Lang->getModule('filter_module'),
    'selected' => ($data_search['module'] == '') ? ' selected="selected"' : ''
];

foreach ($list_module as $module) {
    $array_module[] = [
        'key' => $module,
        'title' => isset($site_mods[$module]) ? $site_mods[$module]['custom_title'] : (isset($admin_mods[$module]) ? $admin_mods[$module]['custom_title'] : $module),
        'selected' => ($data_search['module'] == $module) ? ' selected="selected"' : ''
    ];
}

$list_user = nv_siteinfo_getuser();
$array_user = [];
$array_user[] = [
    'key' => '',
    'title' => $nv_Lang->getModule('filter_user'),
    'selected' => ($data_search['user'] == '') ? ' selected="selected"' : ''
];
$array_user[] = [
    'key' => 'system',
    'title' => $nv_Lang->getModule('filter_system'),
    'selected' => ($data_search['user'] == 'system') ? ' selected="selected"' : ''
];

foreach ($list_user as $user) {
    $array_user[] = [
        'key' => $user['userid'],
        'title' => $user['username'],
        'selected' => ((int) $data_search['user'] == $user['userid']) ? ' selected="selected"' : ''
    ];
}

$logs_del = in_array('logs_del', $allow_func, true) ? true : false;

$xtpl = new XTemplate('logs.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', \NukeViet\Core\Language::$lang_module);
$xtpl->assign('GLANG', \NukeViet\Core\Language::$lang_global);
$xtpl->assign('NV_BASE_ADMINURL', NV_BASE_ADMINURL);
$xtpl->assign('NV_NAME_VARIABLE', NV_NAME_VARIABLE);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('NV_OP_VARIABLE', NV_OP_VARIABLE);
$xtpl->assign('OP', $op);
$xtpl->assign('checksess', md5('siteinfo_' . NV_CHECK_SESSION . '_' . $admin_info['userid']));
$xtpl->assign('URL_DEL', $base_url . '&' . NV_OP_VARIABLE . '=logs_del');
$xtpl->assign('URL_CANCEL', NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op);
$xtpl->assign('DISABLE', $disabled);
$xtpl->assign('DATA_SEARCH', $data_search);
$xtpl->assign('DATA_ORDER', $order);

foreach ($array_lang as $lang) {
    $xtpl->assign('lang', $lang);
    $xtpl->parse('main.lang');
}

foreach ($array_module as $module) {
    $xtpl->assign('module', $module);
    $xtpl->parse('main.module');
}

foreach ($array_user as $user) {
    $xtpl->assign('user', $user);
    $xtpl->parse('main.user');
}

$a = 0;
foreach ($data as $data_i) {
    if (!empty($data_users[$data_i['userid']])) {
        $data_i['username'] = $data_users[$data_i['userid']];
    } else {
        $data_i['username'] = 'unknown';
    }

    $data_i['custom_title'] = isset($site_mods[$data_i['module_name']]) ? $site_mods[$data_i['module_name']]['custom_title'] : (isset($admin_mods[$data_i['module_name']]) ? $admin_mods[$data_i['module_name']]['custom_title'] : $data_i['module_name']);

    $xtpl->assign('DATA', $data_i);
    if ($logs_del) {
        $xtpl->assign('DEL_URL', NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=log&amp;' . NV_OP_VARIABLE . '=logs_del&amp;id=' . $data_i['id']);
        $xtpl->parse('main.row.delete');
    }
    $xtpl->parse('main.row');
    ++$a;
}

if ($logs_del) {
    $xtpl->parse('main.foot_delete');
    $xtpl->parse('main.head_delete');
}
$generate_page = nv_generate_page($base_url, $num_items, $per_page, $page);
if (!empty($generate_page)) {
    $xtpl->assign('GENERATE_PAGE', $generate_page);
    $xtpl->parse('main.generate_page');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
