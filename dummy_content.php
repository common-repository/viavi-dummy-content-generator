<?php
/*
Plugin Name: Viavi Dummy Content Generator
Plugin URI: http://viaviweb.com
Description: Viavi Dummy Content Generator is simple and easy plugin to generate dummy content.
Version: 1.0
Author: viaviwebtech
Author URI: http://viaviweb.com
Wordpress version supported: 3.0 and above
License: GPL2
*/


include("dummy_content_install.php");

register_activation_hook (__FILE__,'viavi_dummy_content_install');
register_deactivation_hook (__FILE__,'viavi_dummy_content_uninstall');


//Admin menu
if ( is_admin() ) {
    add_action('admin_menu', 'viavi_dummy_content_admin_create_menu');
}
function viavi_dummy_content_admin_create_menu()
{
    add_menu_page('Dummy Content', 'Dummy Content', 'administrator', 'viavi-dummy-content-setting',
	 'viavi_dummy_content_form',plugins_url('/viavi-dummy-content-generator/icon.png',1));
}
function viavi_dummy_content_form()
{
    include("dummy_content_form.php");
}

?>
<?php


//HTML
function viavi_dummy_content_html() {
    global $wpdb;
    
    $result = $wpdb->get_results("SELECT * FROM viavi_dummy_content WHERE id = 1");
    $fields=get_object_vars($result[0]);
?>
<?php $words=$fields['words'];?>
<?php $content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam rhoncus, urna quam viverra nisi, in interdum massa nibh nec erat. Quapropter si ea, quae dixi, sole ipso illustriora et clariora sunt. Si omnia dixi hausta e fonte naturae, si tota oratio nostra omnem sibi fidem sensibus confirmat, id est incorruptis atque integris testibus, si infantes pueri. Mutae etiam bestiae paene loquuntur magistra ac duce natura nihil esse prosperum nisi voluptatem, nihil asperum nisi dolorem, de quibus neque depravate iudicant neque corrupte, nonne ei maximam gratiam habere debemus, qui hac exaudita quasi voce naturae sic eam firme graviterque comprehenderit. Ut omnes bene sanos in viam placatae, tranquillae, quietae, beatae vitae deduceret. Qui quod tibi parum videtur eruditus, ea causa est, quod nullam eruditionem esse duxit, nisi quae beatae vitae disciplinam iuvaret. Sunt autem, qui dicant foedus esse quoddam sapientium, ut ne minus amicos quam se ipsos diligant. Quod et posse fieri intellegimus et saepe etiam videmus, et perspicuum est nihil ad iucunde vivendum reperiri posse, quod coniunctione tali sit aptius. Quibus ex omnibus iudicari potest non modo non impediri rationem amicitiae, si summum bonum in voluptate ponatur, sed sine hoc institutionem omnino amicitiae non posse reperiri. Atque ut odia, invidiae, despicationes adversantur voluptatibus, sic amicitiae non modo fautrices fidelissimae, sed etiam effectrices sunt voluptatum tam amicis quam sibi, quibus non solum praesentibus fruuntur, sed etiam spe eriguntur consequentis ac posteri temporis. Quod quia nullo modo sine amicitia firmam et perpetuam iucunditatem vitae tenere possumus neque vero ipsam amicitiam tueri, nisi aeque amicos et nosmet ipsos diligamus, idcirco et hoc ipsum efficitur in amicitia, et amicitia cum voluptate conectitur. Nam et laetamur amicorum laetitia aeque atque nostra et pariter dolemus angoribus. Tribus igitur modis video esse a nostris de amicitia disputatum. Alli cum eas voluptates, quae ad amicos pertinerent, negarent esse per se ipsas tam expetendas, quam nostras expeteremus, quo loco videtur quibusdam stabilitas amicitiae vacillare, tuentur tamen eum locum seque facile, ut mihi videtur, expediunt. Ut enim virtutes, de quibus ante dictum est, sic amicitiam negant posse a voluptate discedere. Nam cum solitudo et vita sine amicis insidiarum et metus plena sit, ratio ipsa monet amicitias comparare, quibus partis confirmatur animus et a spe pariendarum voluptatum seiungi non potest. Nisi autem rerum natura perspecta erit, nullo modo poterimus sensuum iudicia defendere. Quicquid porro animo cernimus, id omne oritur a sensibus, qui si omnes veri erunt, ut Epicuri ratio docet, tum denique poterit aliquid cognosci et percipi. Quos qui tollunt et nihil posse percipi dicunt, li remotis sensibus ne id ipsum quidem expedire possunt, quod disserunt. Praeterea sublata cognitione et scientia tollitur omnis ratio et vitae degendae et rerum gerendarum. Sic e physicis et fortitudo sumitur contra mortis timorem et constantia contra metum religionis et sedatio animi omnium. Rerum occultarum ignoratione sublata et moderatio natura cupiditatum generibusque earum explicatis, et, ut modo docui, cognitionis regula et iudicio ab eadem illa constituto veri a falso distinctio traditur. Quodsi corporis gravioribus morbis vitae iucunditas. Impeditur quanto magis animi morbis impediri necesse est animi autem morbi sunt cupiditates inmensae et inanes divitiarum, gloriae, dominationis, libidinosarum etiam voluptatum. Accedunt aegritudines, molestiae, maerores, qui exedunt animos conficiuntque curis hominum non intellegentium nihil dolendum esse animo, quod sit a dolore corporis praesenti futurove seiunctum. Nec vero quisquam stultus non horum morborum aliquo laborat, nemo igitur est non miser. Neque enim civitas in seditione beata esse potest nec in discordia dominorum domus, quo minus animus a se ipse dissidens secumque discordans gustare partem ullam liquidae voluptatis et liberae potest. Atqui pugnantibus et contrariis studiis consiliisque semper utens nihil quieti videre, nihil tranquilli potest. Sed ut iis bonis erigimur, quae expectamus, sic laetamur iis, quae recordamur. Stulti autem malorum memoria torquentur, sapientes bona praeterita grata recordatione renovata delectant. Est autem situm in nobis ut et adversa quasi perpetua oblivione obruamus et secunda iucunde ac suaviter meminerimus. Sed cum ea, quae praeterierunt, acri animo et attento intuemur, tum fit ut aegritudo sequatur, si illa mala sint, laetitia, si bona. Iam illud quidem perspicuum est, maximam animi aut voluptatem aut molestiam plus aut ad beatam aut ad miseram vitam afferre momenti quam eorum utrumvis, si aeque diu sit in corpore. Non placet autem detracta voluptate aegritudinem statim consequi, nisi in voluptatis locum dolor forte successerit, at contra gaudere nosmet omittendis doloribus, etiamsi voluptas ea, quae sensum moveat, nulla successerit, eoque intellegi potest quanta voluptas sit non dolere. Quodsi ne ipsarum quidem virtutum laus, in qua maxime ceterorum philosophorum exultat oratio, reperire exitum potest, nisi derigatur ad voluptatem. Voluptas autem est sola, quae nos vocet ad se et alliciat suapte natura, non potest esse dubium, quin id sit summum atque extremum bonorum omnium, beateque vivere nihil aliud sit nisi cum voluptate vivere. Quae enim cupiditates a natura proficiscuntur, facile explentur sine ulla iniuria, quae autem inanes sunt, iis parendum non est. Nihil enim desiderabile concupiscunt, plusque in ipsa iniuria detrimenti est quam in iis rebus emolumenti, quae pariuntur iniuria. Itaque ne iustitiam quidem recte quis dixerit per se ipsam optabilem, sed quia iucunditatis vel plurimum afferat. Nam diligi et carum esse iucundum est propterea, quia tutiorem vitam et voluptatem pleniorem efficit. Itaque non ob ea solum incommoda, quae eveniunt inprobis, fugiendam inprobitatem putamus, sed multo etiam magis, quod, cuius in animo versatur, numquam sinit eum respirare, numquam adquiescere. Invitat igitur vera ratio bene sanos ad iustitiam, aequitatem, fidem, neque homini infanti aut inpotenti iniuste facta conducunt, qui nec facile efficere possit, quod conetur, nec optinere. Si effecerit, et opes vel fortunae vel ingenii liberalitati magis conveniunt, qua qui utuntur, benivolentiam sibi conciliant et, quod aptissimum est ad quiete vivendum, caritatem, praesertim cum omnino nulla sit causa peccandi. Multi etiam, ut te consule, ipsi se indicaverunt. Quodsi qui satis sibi contra hominum conscientiam saepti esse et muniti videntur, deorum tamen horrent easque ipsas sollicitudines, quibus eorum animi noctesque diesque exeduntur, a diis inmortalibus supplicii causa importari putant. Quae autem tanta ex improbis factis ad minuendas vitae molestias accessio potest fieri, quanta ad augendas, cum conscientia factorum, tum poena legum odioque civium. Et tamen in quibusdam neque pecuniae modus est neque honoris neque imperii nec libidinum nec epularum nec reliquarum cupiditatum, quas nulla praeda umquam improbe parta minuit, sed potius inflammat, ut coercendi magis quam dedocendi esse videantur. Eadem fortitudinis ratio reperietur. Nam neque laborum perfunctio neque. Moderatio natura cupiditatum generibusque earum explicatis, et, ut modo docui, cognitionis regula et iudicio ab eadem illa constituto veri.';?>

<?php $dummy=substr($content,0,$words);?>
<p><?php echo $dummy;?></p>
<?php
}
add_shortcode('viavi_dummy_content','viavi_dummy_content_html');
?>
<?php 
function viavi_dummy_content_c100(){
	$content='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore';
	echo $content;
	}
	add_shortcode('viavi_dummy_content-c100','viavi_dummy_content_c100');
?>
<?php 
function viavi_dummy_content_c200(){
	$content='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut a';
	echo $content;
	}
	add_shortcode('viavi_dummy_content-c200','viavi_dummy_content_c200');
?>
<?php 
function viavi_dummy_content_c400(){
	$content='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui.';
	echo $content;
	}
	add_shortcode('viavi_dummy_content-c400','viavi_dummy_content_c400');
?>
<?php 
function viavi_dummy_content_c800(){
	$content='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, ';
	echo $content;
	}
	add_shortcode('viavi_dummy_content-c800','viavi_dummy_content_c800');
?>
<?php 
function viavi_dummy_content_c1600(){
	$content='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam rhoncus, urna quam viverra nisi, in interdum massa nibh nec erat. Quapropter si ea, quae dixi, sole ipso illustriora et clariora sunt. Si omnia dixi hausta e fonte naturae, si tota oratio nostra omnem sibi fidem sensibus confirmat, id est incorruptis atque integris testibus, si infantes pueri. Mutae etiam bestiae paene loquuntur magistra ac duce natura nihil esse prosperum nisi voluptatem, nihil asperum nisi dolorem, de quibus neque depravate iudicant neque corrupte, nonne ei maximam gratiam habere debe';
	echo $content;
	}
	add_shortcode('viavi_dummy_content-c1600','viavi_dummy_content_c1600');
?>