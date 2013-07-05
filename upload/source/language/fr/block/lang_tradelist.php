<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_tradelist.php by Valery Votintsev at sources.ru
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'tradelist_fids'		=> 'Dans le Forum',
	'tradelist_fids_comment'	=> 'R&#233;glage permet &#224; l\'appel &#224; participer &#224; des postes nouveau forum, vous pouvez maintenir enfonc&#233;e la touche CTRL choix multiples, Choisir tout ou Effacer Toutes les limites ne le sont pas ',
	'tradelist_uids'		=> 'UID Utilisateur',
	'tradelist_uids_comment'	=> 'R&#233;glez UID Utilisateur pour un affichage sp&#233;cifi&#233;, Utilisez UID s&#233;par&#233;s. par plusieurs virgule  "," ',
	'tradelist_startrow'		=> 'Nbres. de lignes de Donn&#233;es',
	'tradelist_startrow_comment'	=> 'Pour la premi&#232;re s&#233;rie de lignes de donn&#233;es, entrez la valeur 0 sp&#233;cifiques de la premi&#232;re ligne, et ainsi',
	'tradelist_items'		=> 'Afficher les donn&#233;es du nombre',
	'tradelist_items_comment'	=> 'D&#233;finition d\'un th&#233;matiques sur le nombre d\'entr&#233;es affich&#233;es, d&#233;fini comme un entier Sup&#233;r. &#224; 0',
	'tradelist_titlelength'		=> 'Nbres. Max. de Titre en Octets',
	'tradelist_titlelength_comment'	=> 'R&#233;gl&#233; quand le titre est plus long que le param&#232;tre, Que le titre r&#233;duit automatiquement le nombre d\'octets dans le jeu, 0 n\'est pas automatiquement r&#233;duit',
	'tradelist_fnamelength'		=> 'Le nom du forum Titre qui contient le nombre maxi.d\'octets',
	'tradelist_fnamelength_comment'	=> 'D&#233;finit le titre de la longueur est la longueur du nom du forum o&#249; du compte avec',
	'tradelist_summarylength'	=> 'Sous r&#233;serve des contenus du Texte plus court',
	'tradelist_summarylength_comment'	=> 'D&#233;finissez le contenu texte d\'un peu de sujets courts, utilisez la valeur par d&#233;faut de 0 &#224; 255',
	'tradelist_tids'		=> 'Pr&#233;cisez le Sujet',
	'tradelist_tids_comment'	=> 'Pour sp&#233;cifier l\'affichage th&#232;me impos&#233; tid, plus d\'un Identifiant Svp. utilisez une virgule "," s&#233;par&#233;es. Remarque: vierge est sans filtrage',
	'tradelist_keyword'		=> 'Mot-cl&#233; Titre',
	'tradelist_keyword_comment'	=> 'R&#233;glez le titre contient des mots-cl&#233;s Remarque: vierge est sans filtrage; mots-cl&#233;s peuvent utiliser le joker *; plusieurs mots cl&#233;s, des Espaces disponibles, ou et de connexion, telles que Win32 et Unix; correspondre &#224; un certain nombre de cl&#233;s certains de ces mots peuvent &#234;tre utilis&#233;s | ou OR connexion, comme win32 ou unix',
	'tradelist_typeids'		=> 'Classification des sujets',
	'tradelist_typeids_comment'	=> 'D&#233;finissez une cat&#233;gorie de sujet sp&#233;cifique. Remarque: Tout Choisir ou Tout effacer &#233;taient sans aucun filtrage',
	'tradelist_typeids_all'		=> 'Toutes les classification des sujets',
	'tradelist_sortids'		=> 'Renseignements class&#233;s',
	'tradelist_sortids_comment'	=> 'R&#233;glez l\'objet d\'informations classifi&#233;es. NOTE: Choisir tout ou Effacer tout &#233;tait sans aucun filtrage',
	'tradelist_sortids_all'		=> 'Toutes les infos.Class&#233;es',
	'tradelist_digest'		=> 'Posts Filtrage',
	'tradelist_digest_comment'	=> 'D&#233;finissez un domaine sp&#233;cifique. Remarque: Choisir ou effacer Tous qui &#233;taient sans aucun filtrage',
	'tradelist_digest_0'		=> 'Sujet Hot',
	'tradelist_digest_1'		=> 'Sommaire I',
	'tradelist_digest_2'		=> 'Sommaire II',
	'tradelist_digest_3'		=> 'Sommaire III',
	'tradelist_stick'		=> 'Filtrage Sujet Scotch&#233;',
	'tradelist_stick_comment'	=> 'D&#233;finissez un domaine sp&#233;cifique. Remarque: Choisir ou effacer Tous qui &#233;taient sans aucun filtrage',
	'tradelist_stick_0'		=> 'Sujet Hot',
	'tradelist_stick_1'		=> 'Scotch&#233; I',
	'tradelist_stick_2'		=> 'Scotch&#233; II',
	'tradelist_stick_3'		=> 'Scotch&#233; III',
	'tradelist_special'		=> 'Filtre Th&#232;me sp&#233;cial',
	'tradelist_special_comment'	=> 'D&#233;finissez un domaine sp&#233;cifique. Remarque: Choisir ou Effacer Tous qui &#233;taient sans aucun filtrage',
	'tradelist_special_1'		=> 'Th&#232;me Sondage',
	'tradelist_special_2'		=> 'Biens Envoy&#233;es',
	'tradelist_special_3'		=> 'R&#233;compense Sujets',
	'tradelist_special_4'		=> 'Activit&#233; Th&#232;mes',
	'tradelist_special_5'		=> 'Topic D&#233;bats',
	'tradelist_special_0'		=> 'Sujet Hot',
	'tradelist_special_reward'	=> 'Filtre par sujet de R&#233;compense',
	'tradelist_special_reward_comment'	=> 'D&#233;finissez le th&#232;me de Type particulier de R&#233;compense',
	'tradelist_special_reward_0'	=> 'Tout',
	'tradelist_special_reward_1'	=> 'R&#233;solu',
	'tradelist_special_reward_2'	=> 'En Suspens',
	'tradelist_recommend'		=> 'Filtre recommand&#233; Topic',
	'tradelist_recommend_comment'	=> 'D&#233;finissez si pour afficher seulement les Sujets Recommand&#233;s',
	'tradelist_orderby'		=> 'Trier par Th&#233;matiques',
	'tradelist_orderby_comment'	=> 'Param&#232;tres pour lesquels le champ du Sujet ou la mani&#232;re de trier',
	'tradelist_orderby_lastpost'	=> 'Trier selon la dur&#233;e d dernier Message Descendant',
	'tradelist_orderby_dateline'	=> 'Ordre inverse selon les fonctions de l\'heure',
	'tradelist_orderby_replies'	=> 'Trier par R&#233;ponses Desc.',
	'tradelist_orderby_views'	=> 'Trier invers&#233;e par Vues',
	'tradelist_orderby_heats'	=> 'Ordre inverse en Redu',
	'tradelist_orderby_recommends'	=> 'Tri invers&#233; par l\'&#233;valuation th&#233;matiques',
	'tradelist_orderby_hourviews'	=> 'Vues dans le d&#233;lai sp&#233;cifi&#233; en sens inverse',
	'tradelist_orderby_todayviews'	=> 'Parcourir par le num&#233;ro du jour en sens inverse',
	'tradelist_orderby_weekviews'	=> 'Vues de cette semaine en sens inverse selon les fonctions',
	'tradelist_orderby_monthviews'	=> 'Ordre inverse par les vues en mois',
	'tradelist_orderby_hours'	=> 'Temps sp&#233;cifi&#233;e (heures)',
	'tradelist_orderby_hours_comment'	=> 'Vues dans le d&#233;lai sp&#233;cifi&#233; en sens inverse de la valeur temporelle',
	'tradelist_orderby_todayhots'	=> 'Nbres.Totaux Vendus par Jour en sens inverse',
	'tradelist_orderby_weekhots'	=> 'Vendu par le Nbre. Cumul&#233; par ordre inverse Hebdo.',
	'tradelist_orderby_monthhots'	=> 'Nbres.Totaux vendus Mensuel. en sens inverse',
	'tradelist_price_add'		=> ' Suppl&#233;mentaires ',
	'tradelist_place'		=> 'Lieu Ev&#233;nement',
	'tradelist_class'		=> 'Activit&#233;s Types',
	'tradelist_gender'		=> 'Genre',
	'tradelist_gender_0'		=> 'Neutre',
	'tradelist_gender_1'		=> 'Homme',
	'tradelist_gender_2'		=> 'Femme',
	'tradelist_orderby_weekstart'	=> 'Heure de d&#233;but des Activit&#233;s par ordre Hebdomadaire',
	'tradelist_orderby_monthstart'	=> 'Heure de d&#233;but des Activit&#233;s par ordre Mensuel',
	'tradelist_orderby_weekexp'	=> 'Date limite par Inscription, par tri Hebdomadaire',
	'tradelist_orderby_monthexp'	=> 'Date limite par Inscription, par tri Mensuel',
	'tradelist_highlight'		=> 'Choisissez la valeur obtenue',
);

