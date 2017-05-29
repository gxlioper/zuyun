<?php
/**
 * 所属项目 110.
 * 开发者: 陈一枭
 * 创建日期: 2014-11-18
 * 创建时间: 10:14
 * 版权所有 优秀开发团队(www.testzy.com)
 */

return array(
    //模块名
    'name' => 'People',
    //别名
    'alias' => '找人',
    //版本号
    'version' => '2.0.0',
    //是否商业模块,1是，0，否
    'is_com' => 0,
    //是否显示在导航栏内？  1是，0否
    'show_nav' => 1,
    //模块描述
    'summary' => '会员展示模块，可以用于会员的查找',
    //开发者
    'developer' => '优秀开发团队',
    //开发者网站
    'website' => 'http://www.testzy.com',
    //前台入口，可用U函数
    'entry' => 'People/index/index',

    'admin_entry' => 'People/config',

    'icon' => 'group',

    'can_uninstall' => 1
);