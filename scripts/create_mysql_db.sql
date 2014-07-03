-- MySQL dump 10.15  Distrib 10.0.12-MariaDB, for debian-linux-gnu (i686)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`email`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `mid` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

insert into message (message) values ('a little knowledge can go a long way');
insert into message (message) values ('a lot of professionals are crackpots');
insert into message (message) values ('a man can\'t know what it is to be a mother');
insert into message (message) values ('a name means a lot just by itself');
insert into message (message) values ('a positive attitude means all the difference in the world');
insert into message (message) values ('a relaxed man is not necessarily a better man');
insert into message (message) values ('a sense of timing is the mark of genius');
insert into message (message) values ('a sincere effort is all you can ask');
insert into message (message) values ('a single event can have infinitely many interpretations');
insert into message (message) values ('a solid home base builds a sense of self');
insert into message (message) values ('a strong sense of duty imprisons you');
insert into message (message) values ('absolute submission can be a form of freedom');
insert into message (message) values ('abstraction is a type of decadence');
insert into message (message) values ('abuse of power comes as no surprise');
insert into message (message) values ('action causes more trouble than thought');
insert into message (message) values ('alienation produces eccentrics or revolutionaries');
insert into message (message) values ('all things are delicately interconnected');
insert into message (message) values ('ambition is just as dangerous as complacency');
insert into message (message) values ('ambivalence can ruin your life');
insert into message (message) values ('an elite is inevitable');
insert into message (message) values ('anger or hate can be a useful motivating force');
insert into message (message) values ('animalism is perfectly healthy');
insert into message (message) values ('any surplus is immoral');
insert into message (message) values ('anything is a legitimate area of investigation');
insert into message (message) values ('artificial desires are despoiling the earth');
insert into message (message) values ('at times inactivity is preferable to mindless functioning');
insert into message (message) values ('at times your unconsciousness is truer than your conscious mind');
insert into message (message) values ('automation is deadly');
insert into message (message) values ('awful punishment awaits really bad people');
insert into message (message) values ('bad intentions can yield good results');
insert into message (message) values ('being alone with yourself is increasingly unpopular');
insert into message (message) values ('being happy is more important than anything else');
insert into message (message) values ('being judgmental is a sign of life');
insert into message (message) values ('being sure of yourself means you\'re a fool');
insert into message (message) values ('believing in rebirth is the same as admitting defeat');
insert into message (message) values ('boredom makes you do crazy things');
insert into message (message) values ('calm is more conductive to creativity than is anxiety');
insert into message (message) values ('categorizing fear is calming');
insert into message (message) values ('change is valuable when the oppressed become tyrants');
insert into message (message) values ('chasing the new is dangerous to society');
insert into message (message) values ('children are the most cruel of all');
insert into message (message) values ('children are the hope of the future');
insert into message (message) values ('class action is a nice idea with no substance');
insert into message (message) values ('class structure is as artificial as plastic');
insert into message (message) values ('confusing yourself is a way to stay honest');
insert into message (message) values ('crime against property is relatively unimportant');
insert into message (message) values ('decadence can be an end in itself');
insert into message (message) values ('decency is a relative thing');
insert into message (message) values ('dependence can be a meal ticket');
insert into message (message) values ('description is more important than metaphor');
insert into message (message) values ('deviants are sacrificed to increase group solidarity');
insert into message (message) values ('disgust is the appropriate response to most situations');
insert into message (message) values ('disorganization is a kind of anesthesia');
insert into message (message) values ('don\'t place to much trust in experts');
insert into message (message) values ('drama often obscures the real issues');
insert into message (message) values ('dreaming while awake is a frightening contradiction');
insert into message (message) values ('dying and coming back gives you considerable perspective');
insert into message (message) values ('dying should be as easy as falling off a log');
insert into message (message) values ('eating too much is criminal');
insert into message (message) values ('elaboration is a form of pollution');
insert into message (message) values ('emotional responses ar as valuable as intellectual responses');
insert into message (message) values ('enjoy yourself because you can\'t change anything anyway');
insert into message (message) values ('ensure that your life stays in flux');
insert into message (message) values ('even your family can betray you');
insert into message (message) values ('every achievement requires a sacrifice');
insert into message (message) values ('everyone\'s work is equally important');
insert into message (message) values ('everything that\'s interesting is new');
insert into message (message) values ('exceptional people deserve special concessions');
insert into message (message) values ('expiring for love is beautiful but stupid');
insert into message (message) values ('expressing anger is necessary');
insert into message (message) values ('extreme behavior has its basis in pathological psychology');
insert into message (message) values ('extreme self-consciousness leads to perversion');
insert into message (message) values ('faithfulness is a social not a biological law');
insert into message (message) values ('fake or real indifference is a powerful personal weapon');
insert into message (message) values ('fathers often use too much force');
insert into message (message) values ('fear is the greatest incapacitator');
insert into message (message) values ('freedom is a luxury not a necessity');
insert into message (message) values ('giving free rein to your emotions is an honest way to live');
insert into message (message) values ('go all out in romance and let the chips fall where they may');
insert into message (message) values ('going with the flow is soothing but risky');
insert into message (message) values ('good deeds eventually are rewarded');
insert into message (message) values ('government is a burden on the people');
insert into message (message) values ('grass roots agitation is the only hope');
insert into message (message) values ('guilt and self-laceration are indulgences');
insert into message (message) values ('habitual contempt doesn\'t reflect a finer sensibility');
insert into message (message) values ('hiding your emotions is despicable');
insert into message (message) values ('holding back protects your vital energies');
insert into message (message) values ('humanism is obsolete');
insert into message (message) values ('humor is a release');
insert into message (message) values ('ideals are replaced by conventional goals at a certain age');
insert into message (message) values ('if you aren\'t political your personal life should be exemplary');
insert into message (message) values ('if you can\'t leave your mark give up');
insert into message (message) values ('if you have many desires your life will be interesting');
insert into message (message) values ('if you live simply there is nothing to worry about');
insert into message (message) values ('ignoring enemies is the best way to fight');
insert into message (message) values ('illness is a state of mind');
insert into message (message) values ('imposing order is man\'s vocation for chaos is hell');
insert into message (message) values ('in some instances it\'s better to die than to continue');
insert into message (message) values ('inheritance must be abolished');
insert into message (message) values ('it can be helpful to keep going no matter what');
insert into message (message) values ('it is heroic to try to stop time');
insert into message (message) values ('it is man\'s fate to outsmart himself');
insert into message (message) values ('it is a gift to the world not to have babies');
insert into message (message) values ('it\'s better to be a good person than a famous person');
insert into message (message) values ('it\'s better to be lonely than to be with inferior people');
insert into message (message) values ('it\'s better to be naive than jaded');
insert into message (message) values ('it\'s better to study the living fact than to analyze history');
insert into message (message) values ('it\'s crucial to have an active fantasy life');
insert into message (message) values ('it\'s good to give extra money to charity');
insert into message (message) values ('it\'s important to stay clean on all levels');
insert into message (message) values ('it\'s just an accident that your parents are your parents');
insert into message (message) values ('it\'s not good to hold too many absolutes');
insert into message (message) values ('it\'s not good to operate on credit');
insert into message (message) values ('it\'s vital to live in harmony with nature');
insert into message (message) values ('just believing something can make it happen');
insert into message (message) values ('keep something in reserve for emergencies');
insert into message (message) values ('killing is unavoidable but nothing to be proud of');
insert into message (message) values ('knowing yourself lets you understand others');
insert into message (message) values ('knowledge should be advanced at all costs');
insert into message (message) values ('labor is a life-destroying activity');
insert into message (message) values ('lack of charisma can be fatal');
insert into message (message) values ('leisure time is a gigantic smoke screen');
insert into message (message) values ('listen when your body talks');
insert into message (message) values ('looking back is the first sign of aging and decay');
insert into message (message) values ('loving animals is a substitute activity');
insert into message (message) values ('low expectations are good protection');
insert into message (message) values ('manual labor can be refreshing and wholesome');
insert into message (message) values ('men are not monogamous by nature');
insert into message (message) values ('moderation kills the spirit');
insert into message (message) values ('money creates taste');
insert into message (message) values ('monomania is a prerequisite of success');
insert into message (message) values ('morals are for little people');
insert into message (message) values ('most people are not fit to rule themselves');
insert into message (message) values ('mostly you should mind your own business');
insert into message (message) values ('mothers shouldn\'t make too many sacrifices');
insert into message (message) values ('much was decided before you were born');
insert into message (message) values ('murder has its sexual side');
insert into message (message) values ('myth can make reality more intelligible');
insert into message (message) values ('noise can be hostile');
insert into message (message) values ('nothing upsets the balance of good and evil');
insert into message (message) values ('occasionally principles are more valuable than people');
insert into message (message) values ('offer very little information about yourself');
insert into message (message) values ('often you should act like you are sexless');
insert into message (message) values ('old friends are better left in the past');
insert into message (message) values ('opacity is an irresistible challenge');
insert into message (message) values ('pain can be a very positive thing');
insert into message (message) values ('people are boring unless they are extremists');
insert into message (message) values ('people are nuts if they think they are important');
insert into message (message) values ('people are responsible for what they do unless they are insane');
insert into message (message) values ('people who don\'t work with their hands are parasites');
insert into message (message) values ('people who go crazy are too sensitive');
insert into message (message) values ('people won\'t behave if they have nothing to lose');
insert into message (message) values ('physical culture is second best');
insert into message (message) values ('planning for the future is escapism');
insert into message (message) values ('playing it safe can cause a lot of damage in the long run');
insert into message (message) values ('politics is used for personal gain');
insert into message (message) values ('potential counts for nothing until it\'s realized');
insert into message (message) values ('private property created crime');
insert into message (message) values ('pursuing pleasure for the sake of pleasure will ruin you');
insert into message (message) values ('push yourself to the limit as often as possible');
insert into message (message) values ('raise boys and girls the same way');
insert into message (message) values ('random mating is good for debunking sex myths');
insert into message (message) values ('rechanneling destructive impulses is  a sign of maturity');
insert into message (message) values ('recluses always get weak');
insert into message (message) values ('redistributing wealth is imperative');
insert into message (message) values ('relativity is no boon to mankind');
insert into message (message) values ('religion causes as many problems as it solves');
insert into message (message) values ('remember you always have freedom of choice');
insert into message (message) values ('repetition is the best way to learn');
insert into message (message) values ('resolutions serve to ease our conscience');
insert into message (message) values ('revolution begins with changes in the individual');
insert into message (message) values ('romantic love was invented to manipulate women');
insert into message (message) values ('routine is a link with the past');
insert into message (message) values ('routine small excesses are worse than then the occasional debauch');
insert into message (message) values ('sacrificing yourself for a bad cause is not a moral act');
insert into message (message) values ('salvation can\'t be bought and sold');
insert into message (message) values ('self-awareness can be crippling');
insert into message (message) values ('self-contempt can do more harm than good');
insert into message (message) values ('selfishness is the most basic motivation');
insert into message (message) values ('selflessness is the highest achievement');
insert into message (message) values ('separatism is the way to a new beginning');
insert into message (message) values ('sex differences are here to stay');
insert into message (message) values ('sin is a means of social control');
insert into message (message) values ('slipping into madness is good for the sake of comparison');
insert into message (message) values ('sloppy thinking gets worse over time');
insert into message (message) values ('solitude is enriching');
insert into message (message) values ('sometimes science advances faster than it should');
insert into message (message) values ('sometimes things seem to happen of their own accord');
insert into message (message) values ('spending too much time on self-improvement is antisocial');
insert into message (message) values ('starvation is nature\'s way');
insert into message (message) values ('stasis is a dream state');
insert into message (message) values ('sterilization is a weapon of the rulers');
insert into message (message) values ('strong emotional attachment stems from basic insecurity');
insert into message (message) values ('stupid people shouldn\'t breed');
insert into message (message) values ('survival of the fittest applies to men and animals');
insert into message (message) values ('symbols are more meaningful than things themselves');
insert into message (message) values ('taking a strong stand publicizes the opposite position');
insert into message (message) values ('talking is used to hide one\'s inability to act');
insert into message (message) values ('teasing people sexually can have ugly consequences');
insert into message (message) values ('technology will make or break us');
insert into message (message) values ('the cruelest disappointment is when you let yourself down');
insert into message (message) values ('the desire to reproduce is a death wish');
insert into message (message) values ('the family is living on borrowed time');
insert into message (message) values ('the idea of revolution is an adolescent fantasy');
insert into message (message) values ('the idea of transcendence is used to obscure oppression');
insert into message (message) values ('the idiosyncratic has lost its authority');
insert into message (message) values ('the most profound things are inexpressible');
insert into message (message) values ('the mundane is to be cherished');
insert into message (message) values ('the new is nothing but a restatement of the old');
insert into message (message) values ('the only way to be pure is to stay by yourself');
insert into message (message) values ('the sum of your actions determines what you are');
insert into message (message) values ('the unattainable is invariable attractive');
insert into message (message) values ('the world operates according to discoverable laws');
insert into message (message) values ('there are too few immutable truths today');
insert into message (message) values ('there\'s nothing except what you sense');
insert into message (message) values ('there\'s nothing redeeming in toil');
insert into message (message) values ('thinking too much can only cause problems');
insert into message (message) values ('threatening someone sexually is a horrible act');
insert into message (message) values ('timidity is laughable');
insert into message (message) values ('to disagree presupposes moral integrity');
insert into message (message) values ('to volunteer is reactionary');
insert into message (message) values ('torture is barbaric');
insert into message (message) values ('trading a life for a life is fair enough');
insert into message (message) values ('true freedom is frightful');
insert into message (message) values ('unique things must be the most valuable');
insert into message (message) values ('unquestioning love demonstrates largesse of spirit');
insert into message (message) values ('using force to stop force is absurd');
insert into message (message) values ('violence is permissible even desirable occasionally');
insert into message (message) values ('war is a purification rite');
insert into message (message) values ('we must make sacrifices to maintain our quality of life');
insert into message (message) values ('when something terrible happens people wake up');
insert into message (message) values ('wishing things away is not effective');
insert into message (message) values ('with perseverance you can discover any truth');
insert into message (message) values ('words tend to be inadequate');
insert into message (message) values ('worrying can help you prepare');
insert into message (message) values ('you are a victim of the rules you live by');
insert into message (message) values ('you are guileless in your dreams');
insert into message (message) values ('you are responsible for constituting the meaning of things');
insert into message (message) values ('you are the past present and future');
insert into message (message) values ('you can live on through your descendants');
insert into message (message) values ('you can\'t expect people to be something they\'re not');
insert into message (message) values ('you can\'t fool others if you\'re fooling yourself');
insert into message (message) values ('you don\'t know what\'s what until you support yourself');
insert into message (message) values ('you have to hurt others to be extraordinary');
insert into message (message) values ('you must be intimate with a token few');
insert into message (message) values ('you must disagree with authority figures');
insert into message (message) values ('you must have one grand passion');
insert into message (message) values ('you must know where you stop and the world begins');
insert into message (message) values ('you can understand someone of your sex only');
insert into message (message) values ('you owe the world not the other way around');
insert into message (message) values ('you should study as much as possible');
insert into message (message) values ('your actions ae pointless if no one notices');
insert into message (message) values ('your oldest fears are the worst ones');

-- Dump completed on 2014-07-02 17:29:58
