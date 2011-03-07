<?
map_raw('render', "/^{$__click['app_routing_prefix']}(?!api)/", 'render_theme');
map_raw('render', "/^{$__click['app_routing_prefix']}api\\//", 'render_api');