<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_misc.php by Valery Votintsev at sources.ru
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'discuz_lang'		=> 'Pozostałe',
	'contact'		=> 'Kontakt:',//'联系方式:',
	'anonymous'		=> 'Anonim',//'匿名',
	'anonymoususer'		=> 'Anonim',//'匿名者',
	'guestuser'		=> 'Gość',//'游客',
	'has_expired'		=> 'Informacja ta wygasła',//'该信息已经过期',
	'click_view'		=> 'Pokaż',//'点击查看',
	'never_expired'		=> 'Nigdy nie wygasa',//'永不过期',
	'sort_update'		=> 'Aktualizuj',//'更新',
	'sort_upload'		=> 'Upload',//'上传',
	'view_noperm'		=> 'Ukryta treść',//'隐藏内容',
	'post_hidden'		=> '**** Wiadomość ukryta przez autora ****',//'**** 本内容被作者隐藏 ****',
	'post_banned'		=> '**** Wiadomość została usunięta lub zablokowana ****',//'**** 作者被禁止或删除 内容自动屏蔽 ****',
	'post_single_banned'	=> '**** Ta wiadomość została zablokowana ****',//'**** 该帖被屏蔽 ****',
	'message_ishidden_hiddenreplies'	=> 'Wypowiedź widoczna tylko dla autora tematu.',//'此帖仅作者可见',
	'post_reply_quote'		=> '{author} odpowiada, dnia {time}',//'{author} 发表于 {time}',
	'post_edit'			=> "[i=s] Edytowano przez {editor} dnia {edittime} [/i]\n\n",//"[i=s] 本帖最后由 {editor} 于 {edittime} 编辑 [/i]\n\n",
	'post_edit_regexp'		=> '/^\[i=s\] Edytowano przez .*? dnia .*? \[\/i\]\n\n/s',//'/^\[i=s\] 本帖最后由 .*? 于 .*? 编辑 \[\/i\]\n\n/s',
	'post_edithtml'			=> '[i=s] Edytowano przez {editor} dnia {edittime} [/i]<br /><br />',//'[i=s] 本帖最后由 {editor} 于 {edittime} 编辑 [/i]<br /><br />',
	'post_edithtml_regexp'		=> '/^\[i=s\] Edytowano przez .*? dnia .*? \[\/i\]&lt;br \/&gt;&lt;br \/&gt;/s',//'/^\[i=s\] 本帖最后由 .*? 于 .*? 编辑 \[\/i\]&lt;br \/&gt;&lt;br \/&gt;/s',
	'post_editnobbcode'		=> '[ Edytowano przez {editor} dnia {edittime} ]\n\n',//'[ 本帖最后由 {editor} 于 {edittime} 编辑 ]\n\n',
	'post_editnobbcode_regexp'	=> '/^\[ Edytowano przez .*? dnia .*? \]\n\n/s',//'/^\[ 本帖最后由 .*? 于 .*? 编辑 \]\n\n/s',
	'post_reply'			=> 'Odp.',//'回复',
	'post_thread'			=> 'Dodaj temat',//'的帖子',

	'price'				=> 'Cena',//'售价',
	'pay_view'			=> 'Historia',//'记录',
	'attachment_buy'		=> 'Kup',//'购买',

	'post_trade_yuan'		=> 'PLN',//'元',
	'post_trade_seller'		=> 'Sprzedawca',//'卖家',
	'post_trade_name'		=> 'Nazwa produktu',//'商品名称',
	'post_trade_price'		=> 'Cena',//'商品价格',
	'post_trade_quality'		=> 'Jakość',//'商品成色',
	'post_trade_locus'		=> 'Lokalizacja',//'所在地点',
	'post_trade_transport_type'	=> 'Delivery tax paid by',//'物流方式',
	'post_trade_transport_seller'	=> 'Sprzedawca',//'卖家承担运费',
	'post_trade_transport_buyer'	=> 'Kupujący',//'买家承担运费',
	'post_trade_transport_mail'	=> 'Snail Mail',//'平邮',
	'post_trade_transport_express'	=> 'Express Mail',//'快递',
	'post_trade_transport_virtual'	=> 'Virtual or No delivery',//'虚拟物品或无需邮递',
	'post_trade_transport_physical'	=> 'COD (Cash On Delivery)',//'买家收到货物后直接支付给物流公司',
//vot	'post_trade_locus'		=> 'Lokalizacja',//'所在地点',
	'post_trade_description'	=> 'Opis produktu',//'商品描述',
	'post_trade_pm_subject'		=> '[Bargain]',//'[议价]',
	'post_trade_pm_buynum'		=> 'Buy amount',//'购买数量',
	'post_trade_pm_wishprice'	=> 'Wish Price',//'我期望的价格是',
	'post_trade_pm_reason'		=> 'Powód negocjacji',//'我议价的理由是',
	'postappend_content'		=> 'Dodaj post',//'补充内容',
	'payment_unit'			=> 'PLN',//'元',

	'attach'			=> 'Załącznik',//'附件',
	'attach_pay'			=> 'Załącznik kupiony',//'收费附件',
	'attach_credits_policy'		=> 'View payment policy',//'查看积分策略说明',
	'attach_img'			=> 'Załącz zdjęcia',//'图片附件',
	'attach_readperm'		=> 'Zezwolenia',//'阅读权限',
	'attach_img_zoom'		=> 'Kliknij tutaj, aby wyświetlić zdjęcie w nowym oknie.\\nCTRL + kółko myszki zwiększa lub zmniejsza zdjęcie.',//'点击在新窗口查看全图\\nCTRL+鼠标滚轮放大或缩小',
	'attach_img_thumb'		=> 'Kliknij tutaj, aby wyświetlić zdjęcie w nowym oknie.',//'点击在新窗口查看全图',
	'attach_downloads'		=> 'Ilość pobrań',//'下载次数',

	'post_trade_transport'		=> 'Transport fee',//'邮费',
//vot	'post_trade_transport_mail'	=> 'Snail mail',//'平邮',
	'post_trade_quality'		=> 'Typ produktu',//'商品成色',
	'post_trade_quality_new'	=> 'Nowe',//'全新',
	'post_trade_quality_secondhand'	=> 'Secondhand',//'二手',

	'trade_unstart'			=> '<font color="gray">Trwa przetwarzanie</font>',//'<font color="gray">未生效的交易</font>',
	'trade_waitbuyerpay'		=> 'Wait for payment',//'等待买家付款',
	'trade_waitsellerconfirm'	=> 'Wait for seller confirm order',//'交易已创建，等待卖家确认',
	'trade_sysconfirmpay'		=> 'Wait for seller confirm payment',//'确认买家付款中，暂勿发货',
	'trade_waitsellersend'		=> 'Payed. Wait for seller shipping',//'买家已付款，等待卖家发货',
	'trade_waitbuyerconfirm'	=> 'Shipped. Wait for buyer confirm',//'卖家已发货，买家确认中',
	'trade_syspayseller'		=> 'Delivered. Wait for system payment to the seller',//'买家确认收到货，等待支付宝打款给卖家',
	'trade_finished'		=> '<font color="green">Sale successfully finished</font>',//'<font color="green">交易成功结束</font>',
	'trade_closed'			=> '<font color="gray">Sale closed (not finished)</font>',//'<font color="gray">交易中途关闭(未完成)</font>',
	'trade_waitselleragree'		=> 'Wait for seller agree the refund',//'等待卖家同意退款',
	'trade_sellerrefusebuyer'	=> 'Seller refused buyer conditions, waiting for buyer modify his conditions',//'卖家拒绝买家条件，等待买家修改条件',
	'trade_waitbuyerreturn'		=> 'Seller approved refund, waiting for return products to buyer',//'卖家同意退款，等待买家退货',
	'trade_waitsellerconfirmgoods'	=> 'Wait for the seller receiving refunded products',//'等待卖家收货',
	'trade_waitalipayrefund'	=> 'Both sides have agreed, wait for the money refund from payment system',//'双方已经一致，等待支付宝退款',
	'trade_alipaycheck'		=> 'Wait for payment system processed refund',//'支付宝处理中',
	'trade_overedrefund'		=> 'Refund overed',//'结束的退款',
	'trade_refundsuccess'		=> '<font color="green">Successfully refunded</font>',//'<font color="green">退款成功</font>',
	'trade_refundclosed'		=> '<font color="green">Refund closed</font>',//'<font color="green">退款关闭</font>',

	'trade_offline_1'		=> 'Transaction initiated',//'交易单生效',
	'trade_offline_4'		=> 'I have paid and waiting for delivery.',//'我已付款，等待卖家发货',
	'trade_offline_5'		=> 'I have shipped.',//'我已发货',
	'trade_offline_7'		=> 'I have received products, the transaction successfully concluded',//'我收到货，交易成功结束',
	'trade_offline_8'		=> 'Cancel this transaction.',//'取消此次交易',
	'trade_offline_10'		=> 'I want to return, waiting for the seller agreed to refund.',//'我要退货，等待卖家同意退款',
	'trade_offline_11'		=> 'The seller refused to refund.',//'卖家拒绝退款',
	'trade_offline_12'		=> 'Seller agreed to refund.',//'卖家同意退款',
	'trade_offline_13'		=> 'I have returned, waiting for seller received products.',//'我已退货，等待卖家收货',
	'trade_offline_17'		=> 'Seller received returned products, refunded.',//'卖家收到退货，已退款',

	'trade_message_4'		=> 'Enter the payment method and bank account info',//'可输入付款方式、银行账号等信息',
	'trade_message_5'		=> 'Enter shipping company, invoices, and other information',//'可输入发货公司、发货单号等信息',
	'trade_message_13'		=> 'Enter shipping company, invoices, and other information',//'可输入发货公司、发货单号等信息',

	'credit_payment'		=> 'Recharge Points',//'积分充值',
	'credit_forum_payment'		=> 'Recharge forum points',//'论坛积分充值',
	'credit_forum_royalty'		=> 'Transaction fee',//'交易手续费',

	'credit_total'			=> 'Łącznie punktów',//'总积分',

	'invite_payment'		=> 'Kup kod zaproszenia',//'购买邀请码',
	'invite_forum_payment'		=> 'Kup kod zaproszenia',//'购买邀请码',
	'invite_forum_payment_unit'	=> 'payment unit',//'个',
	'invite_forum_royalty'		=> 'Transaction fee',//'交易手续费',

	'formulaperm_regdate'		=> 'Data rejestracji',//'注册时间',
	'formulaperm_regday'		=> 'Ilość dni na forum',//'注册天数',
	'formulaperm_regip'		=> 'IP rejestracji',//'注册 IP',
	'formulaperm_lastip'		=> 'Ostatnie IP',//'最后登录 IP',
	'formulaperm_buyercredit'	=> 'Buyer rate',//'买家信用评价',
	'formulaperm_sellercredit'	=> 'Seller rate',//'卖家信用评价',
	'formulaperm_digestposts'	=> 'Wykopów',//'精华帖数',
	'formulaperm_posts'		=> 'Postów',//'发帖数',
	'formulaperm_threads'		=> 'Tematów',//'主题数',
	'formulaperm_oltime'		=> 'Czas online (godziny)',//'在线时间(小时)',
	'formulaperm_pageviews'		=> 'Wyświetleń strony',//'页面浏览量',
	'formulaperm_and'		=> 'oraz',//'并且',
	'formulaperm_or'		=> 'lub',//'或者',
	'formulaperm_extcredits'	=> 'Ext Points',//'自定义积分',

	'login_normal_mode'		=> 'Online',//'在线',
	'login_switch_invisible_mode'	=> 'Przełącz na tryb niewidoczny',//'切换在线状态',
	'login_switch_normal_mode'	=> 'Przełącz na tryb widoczny',//'我要上线',
	'login_invisible_mode'		=> 'Ukryty',//'隐身',

	'eccredit_explain'		=> 'Explanation',//'解释',

	'google_site_0'			=> 'Szukaj w Internecie',//'网页搜索',
	'google_site_1'			=> 'Szukaj w serwisie',//'站内搜索',
	'google_sa'			=> 'Szukaj',//'搜索',

	'modcp_logs_action_home'	=> 'Panel zarządzania',//'内部留言',
	'modcp_logs_action_moderate'	=> 'Moderacja',//'审核',
	'modcp_logs_action_member'	=> 'Edycja użytkownika',//'用户管理',
	'modcp_logs_action_forumaccess'	=> 'Zezwolenia użytkownika',//'用户权限',
	'modcp_logs_action_thread'	=> 'Zarządzanie tematami',//'主题管理',
	'modcp_logs_action_forum'	=> 'Zarządzanie forum',//'版块管理',
	'modcp_logs_action_announcement'	=> 'Ogłoszenia',//'公告',
	'modcp_logs_action_log'		=> 'Zarządzanie blogami',//'管理日志',
	'modcp_logs_action_stat'	=> 'Statystyki',//'管理统计',

	'modcp_logs_action_login'	=> 'Logowanie',//'登录',

	'uch_selectalbum'		=> 'Wybierz album',//'请选择相册',
	'uch_noalbum'			=> 'Nie posiadasz żadnych albumów, ',//'您还没有相册，',
	'click_here'			=> 'Kliknij tutaj,',//'点击这里',
	'uch_createalbum'		=> ' aby utworzyć nowy!',//'创建自己的相册吧！',

	'pm_from'		=> 'Od',//'发件人',
	'pm_to'			=> 'Do',//'收件人',
	'pm_date'		=> 'Data',//'日期',

	'share_message'		=> 'Hejo! Przeczytałem ten temat {$_G[setting][bbname]} i uważam, że jest ciekawy, dlatego też pragnę Ci go polecić.\\n\\nTitle: $thread[subject]\\nAdres: [url={$threadurl}]{$threadurl}[/url]\\n\\nMam nadzieję, że Ci się spodoba.',//'您好！我在 {$_G[setting][bbname]} 看到了这篇帖子，认为很有价值，特推荐给您。\\n\\n$thread[subject]\\n地址 [url={$threadurl}]{$threadurl}[/url]\\n\\n希望您能喜欢',

	'week_0'	=> 'Nie',//'星期日',
	'week_1'	=> 'Pon',//'星期一',
	'week_2'	=> 'Wto',//'星期二',
	'week_3'	=> 'Śro',//'星期三',
	'week_4'	=> 'Czw',//'星期四',
	'week_5'	=> 'Pią',//'星期五',
	'week_6'	=> 'Sob',//'星期六',

	'notice_actor'		=> ', and so on. Łącznie: $actorcount osób',//'等 $actorcount 人',

	'perms_allowvisit'		=> 'Dostęp',//'访问论坛',
	'perms_readaccess'		=> 'Przeglądanie forum',//'阅读权限',
	'perms_allowviewpro'		=> 'View member info',//'查看用户资料',
	'perms_allowinvisible'		=> 'Ukryty',//'隐身',
	'perms_allowsearch'		=> 'Wyszukiwarka',//'使用搜索',
	'perms_allownickname'		=> 'Allow to use nickname',//'使用昵称',
	'perms_allowcstatus'		=> 'Własne statusy',//'自定义头衔',
	'perms_allowpost'		=> 'Dodawanie tematów',//'发新话题',
	'perms_allowreply'		=> 'Odpowiedz w temacie',//'发表回复',
	'perms_allowpostpoll'		=> 'Dodawanie ankiet',//'发起投票',
	'perms_allowvote'		=> 'Głosowanie',//'参与投票',
	'perms_allowpostreward'		=> 'Nagradzanie',//'发表悬赏',
	'perms_allowpostactivity'	=> 'Dodawanie wydarzeń',//'发表活动',
	'perms_allowpostdebate'		=> 'Dodawanie debat',//'发表辩论',
	'perms_allowposttrade'		=> 'Dodawanie produktów',//'发表交易',
	'perms_maxsigsize'		=> 'Rozmiar podpisu',//'最大签名长度',
	'perms_allowsigbbcode'		=> 'BBCode w podpisie',//'签名中使用编辑器代码',
	'perms_allowsigimgcode'		=> '[img] w podpisie',//'签名中使用 [img] 代码',
	'perms_maxbiosize'		=> 'Max length of self-about',//'自我介绍最大长度',
	'perms_allowrecommend'		=> 'Polecanie tematów',//'主题评价影响值',
	'perms_allowbiobbcode'		=> 'Use BBCode in self-about',//'自我介绍中使用编辑器代码',
	'perms_allowbioimgcode'		=> 'Use [img] tag in self-about',//'自我介绍中使用 [img] 代码',
	'perms_allowgetattach'		=> 'Pobieranie ogólne',//'下载附件',
	'perms_allowgetimage'		=> 'Podgląd zdjęć',//'查看图片',
	'perms_allowpostattach'		=> 'Dodawanie załączników',//'上传附件',
	'perms_allowpostimage'		=> 'Dodawanie zdjęć',//'上传图片',
	'perms_allowsetattachperm'	=> 'Zarządzanie załącznikami',//'允许设置附件权限',
	'perms_maxspacesize'		=> 'Rozmiar ogólny',//'空间大小',
	'perms_maxattachsize'		=> 'Limit pliku',//'单个最大附件尺寸',
	'perms_maxsizeperday'		=> 'Rozmiar pliku na dzień',//'每天最大附件总尺寸',
	'perms_maxattachnum'		=> 'Liczba załączników',//'每天最大附件数量',
//vot	'perms_allowbioimgcode'		=> 'Use [img] tag in self-about',//'自我介绍中使用 [img] 代码',
	'perms_attachextensions'	=> 'Typ załączników',//'附件类型',
	'perms_allowstickthread'	=> 'Przyklej',//'主题置顶',
	'perms_allowdigestthread'	=> 'Wykopy',//'主题精华',
	'perms_allowstickthread_value'	=> 'Przyklej',//'置顶',
	'perms_allowdigestthread_value'	=> 'Wykopy',//'精华',
	'perms_allowbumpthread'		=> 'Odśwież',//'提升主题',
	'perms_allowhighlightthread'	=> 'Wyróżnienie',//'主题高亮',
	'perms_allowrecommendthread'	=> 'Recommend',//'主题推荐',
	'perms_allowstampthread'	=> 'Pieczątka',//'主题鉴定',
	'perms_allowclosethread'	=> 'Zamknij',//'主题关闭',
	'perms_allowmovethread'		=> 'Przenieś',//'主题移动',
	'perms_allowedittypethread'	=> 'Typ',//'编辑主题分类',
	'perms_allowcopythread'		=> 'Kopiuj',//'主题复制',
	'perms_allowmergethread'	=> 'Scal',//'主题合并',
	'perms_allowsplitthread'	=> 'Podziel',//'主题分割',
	'perms_allowrepairthread'	=> 'Napraw',//'主题修复',
	'perms_allowrefund'		=> 'Refund',//'强制退款',
	'perms_alloweditpoll'		=> 'Edytuj ankietę',//'编辑投票',
	'perms_allowremovereward'	=> 'Usuń nagrodę',//'移除悬赏',
	'perms_alloweditactivity'	=> 'Edytuj wydarzenie',//'管理活动',
	'perms_allowedittrade'		=> 'Edytuj produkt',//'管理商品',
	'perms_alloweditpost'		=> 'Edytuj',//'编辑帖子',
	'perms_allowwarnpost'		=> 'Ostrzeż',//'警告帖子',
	'perms_allowbanpost'		=> 'Zablokuj posty',//'屏蔽帖子',
	'perms_allowdelpost'		=> 'Usuń post',//'删除帖子',
	'perms_allowviewreport'		=> 'Pokaż raport',//'查看用户报告',
	'perms_allowmodpost'		=> 'Moderacja postów',//'审核帖子',
	'perms_allowmoduser'		=> 'Moderacja użytkowników',//'审核用户',
	'perms_allowbanuser'		=> 'Banicja użytkownika',//'禁止用户',
	'perms_allowbanip'		=> 'Banicja adresów IP',//'禁止 IP',
	'perms_allowedituser'		=> 'Edytuj użytkowników',//'编辑用户',
	'perms_allowmassprune'		=> 'Bulk post delete',//'批量删帖',
	'perms_allowpostannounce'	=> 'Tworzenie ogłoszeń',//'发布公告',
	'perms_disablepostctrl'		=> 'Brak ograniczeń',//'发帖不受限制',
	'perms_allowviewip'		=> 'Podgląd UP',//'允许查看 IP',
	'perms_viewperm'		=> 'Dostęp',//'浏览版块',
	'perms_postperm'		=> 'Dodawanie tematów',//'发新话题',
	'perms_replyperm'		=> 'Dodawanie odpowiedzi',//'发表回复',
	'perms_getattachperm'		=> 'Dostęp do załączników',//'下载附件',
	'perms_postattachperm'		=> 'Dodawanie załączników',//'上传附件',
	'perms_postimageperm'		=> 'Dodawanie zdjęć',//'上传图片',
	'perms_allowblog'		=> 'Publikowanie blogów',//'发表日志',
	'perms_allowdoing'		=> 'Publikacja aktywności',//'发表记录',
	'perms_allowupload'		=> 'Dodaj zdjęcie',//'上传图片',
	'perms_allowshare'		=> 'Udostępnianie',//'发布分享',
	'perms_allowpoke'		=> 'Pozdrawianie',//'允许打招呼',
	'perms_allowfriend'		=> 'Dodawanie znajomych',//'允许加好友',
	'perms_allowclick'		=> 'Ocenianie',//'允许表态',
	'perms_allowmyop'		=> 'Używanie aplikacji',//'允许使用应用',
	'perms_allowcomment'		=> 'Komentarze',//'发表留言/评论',
	'perms_allowstatdata'		=> 'Statystyki raportów',//'查看统计数据报表',
	'perms_allowstat'		=> 'Pokaż statystyki',//'允许查看趋势统计',
	'perms_allowpostarticle'	=> 'Wysyłanie artykułów',//'发表文章',
	'perms_raterange'		=> 'Allow to rate by range',//'允许参与评分',
	'perms_allowcommentpost'	=> 'Komentarze',//'允许参与点评',
	'perms_allowat'			=> 'Liczba tagu @name',//'允许 @ 的人数',
	'perms_allowreplycredit'	=> 'Nagroda za odp.',//'允许设置回帖奖励',
	'perms_allowposttag'		=> 'Dodawanie tagów',//'允许使用标签',
	'perms_allowcreatecollection'	=> 'Dodawanie kolekcji',//'允许创建淘专辑的数量',
	'perms_allowsendpm'		=> 'Wysyłanie PW',//'允许发短消息',
	'perms_maximagesize'		=> 'Rozmiar zdjęcia',//'单张图片最大尺寸',
	'perms_allowmediacode'		=> 'Multimedia',//'允许使用多媒体代码',

	'join_topic'		=> 'Dołącz do tematu',//'参与话题',
	'join_poll'		=> 'Zagłosuj w ankiecie',//'参与投票',
	'buy_trade'		=> 'Kup produkt',//'购买商品',
	'join_reward'		=> 'Dołącz do nagrody',//'参与悬赏',
	'join_activity'		=> 'Dołącz do wydarzenia',//'参与活动',
	'join_debate'		=> 'Dołącz do debaty',//'参与辩论',
	'at_invite'		=> '@name dla znajomych',//'@我的好友',

	'lower'			=> 'mniej niż',//'低于',
	'higher'		=> 'powyżej',//'高于',
	'report_msg_your'	=> 'Twoje ',//'您的 ',
	'report_noreward'	=> 'brak nagród',//'不奖惩',
	'activity_viewimg'	=> 'Kliknij, aby wyświetlić',//'点击查看',

	'crime_postreason'	=> '{reason} &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="xi2">Szczegóły</a>',//'{reason} &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="xi2">查看详情</a>',
	'crime_reason'		=> '{reason}',

	'connectguest_message_search'	=> array('Nie jesteś zalogowany', 'Zaloguj się'),//array('尚未登录', '先登录'),
	'connectguest_message_replace'	=> array('Not yet <a href="member.php?mod=connect">Improve current account</a> or <a href="member.php?mod=connect&ac=bind">Bind existing account</a>', 'You need to <a href="member.php?mod=connect">Improve account information</a> or <a href="member.php?mod=connect&ac=bind">Bind existing account</a> '),//array('尚未 <a href="member.php?mod=connect">完善帐号信息</a> 或 <a href="member.php?mod=connect&ac=bind">绑定已有帐号</a> ', '您需要先 <a href="member.php?mod=connect">完善帐号信息</a> 或 <a href="member.php?mod=connect&ac=bind">绑定已有帐号</a> '),
	'connectguest_message_mobile_search'	=> array('Nie jesteś zalogowany', 'Zaloguj się'),//array('尚未登录', '先登录'),
	'connectguest_message_mobile_replace'	=> 'Provide your account information or Bind existing account, ',//'在电脑版完善资料或绑定已有帐号，',

	'avatar'		=> 'Awatar',//'头像',
	'signature'		=> 'Podpis',//'签名',
	'custom_title'		=> 'Własny tytuł',//'自定义头衔',

	'forum_guide'		=> 'Przewodnik',//'导读',

	'patch_site_have'	=> 'Twoja strona ma',//'您的网站有',
	'patch_is_fixed'	=> 'Luki w zabezpieczeniach zostały załatane.',//'个安全漏洞，已修复',
	'patch_need_fix'	=> 'Luki w zabezpieczeniach',//'个安全漏洞，请尽快修复',
	'patch_fixed_status'	=> 'Naprawiony',//'已修复',
	'patch_unfix_status'	=> 'Nienaprawiony',//'未修复',
	'patch_fix_failed_status'	=> 'Wystąpił błąd podczas naprawy',//'修复失败',
	'patch_fix_right_now'	=> 'Napraw teraz',//'立即修复',
	'patch_view_fix_detail'	=> 'Szczegóły',//'查看详情',
	'patch_name'		=> 'Vulnerability',//'漏洞名称',
	'patch_dateline'	=> 'Data',//'发布日期',
	'patch_status'		=> 'Status',//'当前状态',
	'patch_close'		=> 'Zamknij',//'关闭',

	'plugin_title'		=> 'Wiadomości systemowe',//'应用更新提醒',
	'plugin_memo'		=> 'Dostępne aktualizacje: <span class="xi1">{number}</span>',//'您有 <span class="xi1">{number}</span> 款应用有可用更新',
	'plugin_link'		=> 'Aktualizuj teraz!',//'现在更新',

);

