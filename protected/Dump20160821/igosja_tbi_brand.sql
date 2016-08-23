-- MySQL dump 10.13  Distrib 5.7.14, for Linux (x86_64)
--
-- Host: localhost    Database: igosja_tbi
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.16-MariaDB

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
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `text` text,
  `url` varchar(255) DEFAULT NULL,
  `web` varchar(255) DEFAULT NULL,
  `seo_description` text,
  `seo_keywords` text,
  `seo_title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `image_id` (`image_id`),
  KEY `status` (`status`),
  KEY `url` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand`
--

LOCK TABLES `brand` WRITE;
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
INSERT INTO `brand` VALUES (1,1,'Agena',1,'AGENA – это одна из самых выделяющихся и динамично развивающихся компаний, которые предлагают дизайнерские ткани и текстильные аксессуары итальянского производства высочайшего уровня.\r\nКомпания AGENA – это компания из прекрасного города Турин, которая имеет более чем 46 летнюю историю в текстильном бизнесе. \r\nAGENA предлагает эксклюзивные ткани для штор, обои и ковры премиум-уровня и постоянно следит за качеством своей продукции и актуальностью коллекций. В ассортименте тканей AGENA Вы не найдете классические ткани - только современные и креативные дизайны.\r\nВ коллекциях компании AGENA отчетливо прослеживаются смелые комбинации тканей на ряду с ультрасовременными дизайнами и прекрасными эксплуатационными характеристиками. Просматривая коллекцию тканей ты понимаешь, что каждый артикул ткани прошел тщательных отбор перед тем, как попасть в коллекцию под брнедом AGENA.\r\nСреди ассортимента AGENA Вы сможете найти полупрозрачные ткани, шторный текстиль, ткани blackout (блекаут) и TreviraCS, а также множество контрактных тканей шириной от 140 см до 330 см.','1-agena','http://www.agenagroup.it/','AGENA','AGENA','AGENA'),(2,25,'Aldeco',1,'Компания Aldeco - это динамично развивающиеся и креативная португальская компания, которая предлагает эксклюзивные ткани высокого уровня.\r\nДизайнеры коллекций тканей Aldeco берут свое вдохновение из культурных особенностей разных стран мира, предлагая почитателям бренда Aldeco не только современные и востребованные ткани, но и тематические коллекции довольно специфических и креативных тканей.\r\n<br/>\r\nКомпания Aldeco – это семейная компания, которую в 1993 году основал Альберто Диас, чьи дочери присоединились к бизнесу, сообща создавав активный и креативный коллектив многообещающей текстильной компании.\r\n<br/>\r\nКоллекции компании Aldeco разрабатываются собственным дизайн-бюро, беря во внимание инновационные технологии текстильного бизнеса и современные запросы рынка.\r\nКомпания предлагает не просто ткани для штор или обивки, а концептуальные решения текстильного оформления помещений, предлагая инновационные дизайны, отличные эксплуатационные характеристики и прекрасный тактильный и декоративный эффект.\r\nТкани для шторы Aldecoсо четают в себе элегантность, функциональность, отличный уход и представлены различными типами тканей: шелк, вельвет, лен, шениль, хлопок с принтами, тафту и ткани блекаут. В коллекциях присутсвуют ткани негорючие Trevira CS, c обработкой тефлоном (водооталкивающие) и специализированные сверх-устойчивые ткани.\r\n<br/>\r\nВ последнее время, отличительная особенность компании Aldeco – это игра на контрастах, стремление удивить необычными и смелыми решениями, которые сочетают в себе роскошь и минимализм, экологичность и современные технологии.','2-aldeco','http://www.aldeco.pt/','Aldeco','Aldeco','Aldeco'),(3,26,'Ardecora',1,'Ardecora – это итальянский бренд, девиз которого - «элегантная экстравагантность».\r\nТкани Ardecora создаются под влиянием эпохи ренессанса, старинные мотивы перерождаются в современный текстиль, который сохраняет традиции тех времен и демонстрирует ткани в более современном облике.\r\nРоскошные вельветовые ткани, структурные велюры, деликатные шелка, ткани с вышивкой и ненавязчивые дамасские мотивы – это все то, что  делает ткани Ardecora уникальными и не похожими на текстиль других брендов.\r\nВ каждом артикуле ткани прослеживается изысканность и стиль. В коллекции производителя присутствуют светопрозрачные ткани, вуали, тяжелые шторные ткани, а также обивочные ткани.','3-ardecora','','Ardecora','Ardecora','Ardecora'),(4,27,'Atelier Mottura',1,'MOTTURA, имея наиболее профессиональный подход к декоруокон и самый большой ассортимент карнизов и карнизных систем не могла себе позволить не быть представленной в текстильном бизнесе.\r\n<br/>\r\nAtelier Mottura – это текстильное подразделение Mottura, которое создано для обеспечения комплексного подхода к декору окон.\r\nС помощью тканей Atelier MOTTURA Вы можете получить комплексное текстильное оформление Вашего интерьера от единого поставщика – Mottura (Италия).\r\n<br/>\r\nТкани Atelier  MOTTURA – это превосходная коллекция тканей различных стилей, составов и назначения.\r\nНекая разумная достаточность, ведь большинство тканей имеет двойную ширину (высоту), хороших состав, оригинальный дизайн и приемлемую стоимость.','4-atelier_mottura','http://www.mottura.com/','Atelier Mottura','Atelier Mottura','Atelier Mottura'),(5,28,'Bennett Silks',1,'Компания Bennett Silks – это текстильная компания с более чем 100 летним опытом в тканевом бизнесе.\r\nБыла основана в 1904 году Вильямом Генри Беннетом и начинала свою деятельность в роли торгового представителя по многим текстильным брендам, преимущественно индустрии моды.\r\nС самого начала работы компания Bennett Silks сделала акцент на качество своей продукции, а в случае с шелком – это основной фактор.\r\nИсторически сложилось так, что Вильям Генри Беннетт стал одним из первых англичан, которые в двадцатом веке наладили торговые отношения с китайскими шелковыми тканями, точнее с индустрией китайского шелка в целом.\r\nЭти взаимоотношения являются крепкими и по сей день.\r\n<br>\r\nНа сегодняшний день компанией управляем семья Беннетт, сотрудничая с Европой, Индией, Китаем и Таиландом, делая акцент на качестве тканей и высоком уровне предлагаемого сервиса.\r\n<br>\r\nНачиная с 1987 года компания Bennett Silks захватывает рынок своей уникальной коллекцией шелковых тканей, которая состоит из экзотического итальянского шелка, традиционного английских дизайнов, разрабатываемых и производимых в английском городе Macclesfield, который славится на весь мир своей история производства шелка различных видов.\r\n<br>\r\nБазируясь в Англии, компания Bennett Silks работает по всему миру, поставляя качественные ткани для лучших потребителей мира интерьерной моды, а также торговых организаций.\r\n<br>\r\nБольшинство тканей из коллекции Bennett Silks постоянно имеются на складе в Англии и готовы к отправке клиентам в любую точку мира.\r\nПри необходимости, компания Bennett Silks может разработать и соткать ткани индивидуального дизайна с эксклюзивной подборкой по цвету и типу используемых нитей.\r\n<br>\r\nВ завершении хотелось бы отметить, что компания Bennett Silks это сильный игрок рынка текстильных изделий, который с каждым годом все больше.','5-bennett_silks','http://www.bennett-silks.co.uk/','Bennett Silks','Bennett Silks','Bennett Silks'),(6,29,'Boussac',1,'Boussac – это бренд компании Pierre Frey (Франция), который предлагает ткани для штор и обивки, а также обои и другие аксессуары для интерьера в современном стиле.\r\nТкани с принтом, геометрическим дизайном, различные хлопковые ткани с элементами вышивки или просто современная печать на ткани – это основное отличие тканей Boussac от текстильных изделий других брендов.\r\n<br/>\r\nТкани Boussac Вы всегда узнаете по креативным дизайнерским решениям, трендовым цветовым вариациям и смелым комбинациям составов ткани.\r\nТекстильные изделия из тканей Boussac могут быть отличным акцентом в современном интерьере жилых и коммерческих помещений.\r\nВ коллекции Вы найдете множество этно-тканей, современных принтов, а также наименований, которые отлично подойдут для детских и тематических интерьеров.\r\n<br/>\r\nТкани Boussac – это текстиль неизменно высокого качества, который будет эксплуатироваться длительное время благодаря своему составу и характеристикам.','6-boussac','http://www.pierrefrey.com/marque/boussac/','Boussac','Boussac','Boussac'),(7,30,'Braquenié',1,'Ткани Braquenié – это французский стиль, выраженный в текстиле.\r\nЭлегантная и сдержанная французская классика с традиционными французскими мотивами в хлопковых тканях – это основа французского бренда Braquenié.\r\nТкани отлично подойдут для воспроизведения традиционного французского стиля, а также текстильного декора помещений в стиле «прованс».\r\n<br/>\r\nКоллекция тканей Braquenié очень разнообразна.\r\nНа ряду со спокойными и довольно сдержанными дизайнами и цветами Вы можете найти яркие и акцентные артикулы ткани, которые отлично впишутся не только в «прованс», но и в современный интерьер.\r\n<br/>\r\nBraquenié отличается широким ассортиментом, предлагая ткани для штор и обивки в самых различных цветовых вариациях с неизменно высоким уровнем качества.','7-braquenié','http://www.pierrefrey.com/marque/pierrefrey','Braquenié','Braquenié','Braquenié'),(8,31,'Casamance',1,'Бренд Casamance был создан в 2000 году и является собирателем тканей высокого уровня, предлагая своим клиентам оригинальные и креативные концепции, разработанные с учетом пожеланий современного рынка.\r\n<br/>\r\nКоллекции Casamance обновляются два раза в год,что дает возможность предлагать клиентам самые новые и свежие идеи текстильного оформления жилых и коммерческих интерьеров.\r\n<br/>\r\nДля того, чтобы создать бескомпромиссный текстильный декор, все ткани Casamance тщательно подбираются в коллекции, которые включают в себя шторные ткани, обивку, а также несколько других артикулов, которые помогут сочетать ткани между собой.\r\nЭто намного упрощает задачу дизайнеров, давая возможность уделить больше времени мелочам, которые так важны при текстильном оформлении.\r\n<br/>\r\nСамое большое преимущество тканей Casamance – разнонаправленность коллекций.\r\nВыбирая ткани для штор в определенном стиле – Вы всегда найдете искомое, ведь новые коллекции разрабатываются компанией с учетом пожеланий рынков различных стран, ведь бренд Casamance представлен не только в Европе, а по всему миру.','8-casamance','http://www.casamance.com/','Casamance','Casamance','Casamance'),(9,32,'Castello del Barro',1,'Говоря о компании Castello del Barro можно было бы упомянуть 1975 год, когда была создана компания или прекрасную озерную местность с видом на горы, где базируется компания, но самое важное в Castello del Barro – это ее основатели.\r\nLelly, Gio и Mario – это трое людей, благодаря которым компания Castello del Barro существует на текстильном рынке и предлагает столь креативный и индивидуальный подход к тканям.\r\n<br/>\r\nБлагодаря Lelly компания Castello del Barro является настоящим профессионалом текстильного бизнеса, постоянно держит руку на пульсе тенденций и трендов в мире тканей и трансформирует весь опыт и знания в ткани, которые становятся частью ассортимента Castello del Barro.\r\nТехнические знания Lelly и постоянный поиск новых идей дают рождение не только новым дизайнам, но и типам тканей, где казалось бы несовместимые материалы комбинируются во имя достижения по истине эксклюзивного и неподражаемого результата.\r\nИменно благодаря стремлению двигаться вперед компания Castello del Barro каждый год удивляет своих клиентом новым подходом к гладким тканям, печати на тканях, а также всевозможным трансформациям классических тканей жаккард и другими альтернативными решениями.\r\n<br/>\r\nРоль главного исполнительного директора компании Castello del Barro выполняет Gio, который постоянно следит за пополнением складских запасов, составляющих примерно 250 000 метров тканей, что дает возможность без замедления осуществить отправить ткани клиенту сразу после подтверждения заказа. В его обязанности также входит подбор персонала, ведь работая с дорогими и качественными тканями, сервис также должен быть на уровне, а слаженность работы коллектива должна обеспечить бесперебойную кооперацию внутри компании.\r\nКомпания гордится тем, что предоставляет своим клиентам ткани «Made in Italy» в более чем 30 стран мира.\r\nБлагодаря работе Gio и его агентам, Италию знают в Нидерландах, Германии и Австрии не только по вкусной пицце, но и по эксклюзивным тканям, таким как Opaline из коллекции Castello del Barro.\r\n<br/>\r\nОтветственным за расширение рынка и присутствие во всех салонах штор, текстильных ателье и мебельных компания является Mario, который презентует ткани архитекторам и дизайнерам, а также организовывает участие Castello del Barro в международных и национальных выставках.\r\n<br/>\r\nЕсли Вы ищите по истине эксклюзивные ткани или Вам нужен текстиль для штор ручной работы с индивидуальным или даже трансформируемым дизайном – Вам однозначно нужно обратить внимание на ткани Castello del Barro. Помимо стандартных тканей на отрез, компания предлагает уникальные панели высотой до четырех метров, которые можно комбинировать с другими артикулами из ассортимента компании.','9-castello_del_barro','http://castellodelbarro.com','Castello del Barro','Castello del Barro','Castello del Barro'),(10,33,'Chivasso',1,'Ткани CHIVASSO – это интерьерные ткани и обои высочайшего уровня, представленные в лучших интерьер-бутиках, салонах штор и шоу-румах по всему миру.\r\nПод брендом Chivasso представлено несколько тканевых брендов:\r\n<ul>\r\n<li>Chivasso by Chivasso</li>\r\n<li>Carlucci by Chivasso</li>\r\n<li>EasybyChivasso</li>\r\n</ul>\r\nКоллекции тканей обновляются дважды в год, что является залогом эксклюзивности дизайнов и актуальности коллекций современным трендам.\r\n<br/>\r\nИнтерьерные ткани добавляют комфорта, мягкости и индивидуальности помещению.\r\nВыбирая ткани для штор или обои Chivasso Вы подчеркнете свою индивидуальность добавите нотки роскоши в декор окон.\r\nТкани Chivasso представлены коллекциями с большим количеством принтов и ярких дизайнов, их следует использовать в случаях акцента на текстильное оформление помещения или в качестве дополнения к другим деталям интерьера.','10-chivasso','http://www.chivasso.com/','Chivasso','Chivasso','Chivasso'),(11,34,'CristianFischbacher',1,'Основанная в 1819 году, компания CristianFischbacher уже почти два столетия работает текстильной индустрии, предлагая ткани для штор и обивки самого высокого уровня, уделяя отдельное внимание деталям.\r\n<br/>\r\nКомпания CristianFischbacherпредлагает не только интерьерные ткани для штор и обивки, но и ковры, постельное белье и другие текстильные аксессуары для дома.\r\n<br/>\r\nСегодня очень трудно найти компанию, которая в основу своего ассортимента вкладывает исключительно высокое качество всей линейки материалов.\r\nИменно этот принцип и лежит в основе философии компании CristianFischbacher: только лучшее, только топ-уровень.\r\n<br/>\r\nТкани CristianFischbacher – это не стареющая классика текстильного бизнеса.\r\nУникальные и неподражаемые дизайны в тандеме с превосходным составом тканей делают ткани Fischbacher любимым инструментом текстильного декора для многих дизайнеров и любителей качественного текстиля.\r\n<br/>\r\nКомпания Fischbacher гордится своими швейцарскими корнями и стандартами качества, имеет подразделения в Италии, Германии, Японии, Нидерландах и Франции и разрабатывает свои коллекции с учетом тенденций локальных рынков, предоставляя своим клиентам фактически индивидуально подобранные коллекции, где учтены все культурные особенности рынка.\r\n<br/>\r\nТехнологии, которые используются при производстве тканей Fischbacher – это отдельная тема для беседы, ведь настолько технологичными решениями, которые есть у Fischbacher вряд ли может похвастаться еще кто-то.\r\nСмелые и технологичные комбинации тканей, особые способы обработки и покраски тканей, деликатные вышивки и плетения и все это при отличных эксплуатационных характеристиках и двойных ширинах/высотах.\r\n<br/>\r\nГоворя о технологиях мы не может не отметить супер легкие ткани Blackout, сатинированные ткани Trevira CS, а также ткани уличного использования (outdoor) со специальной тефлоновой пропиткой, которые значительно расширяют сферу применения продукции CristianFischbacher.\r\nКонтрактные и негорючие ткани также имеются в ассортименте Fischbacher, что позволяет активно применять продукцию компании в гостиницах и других коммерческих проектах.\r\n<br/>\r\nКовры CristianFischbacher – также заслуживают отдельного внимания.\r\nВысокое качество изделий и широкие возможности индивидуального изготовления изделий оправдывают их стоимость.\r\n<br/>\r\nПомимо всего прочего, гордостью компании Fischbacher является эксклюзивное постельное белье, предлагаемое компанией с лимитированным ассортиментом материалов и дизайнов, но только в премиум-качестве с возможностью индивидуального пошива и комплектации с учетом пожеланий Заказчика.\r\n<br/>\r\nО компании CristianFischbacherможно рассказывать много, но воспользовавшись раз ее товарами ты начинаешь еще больше понимать ценность комфорта, который поялвяется с качественными тканями, применяемыми в интерьере.\r\n<br/>\r\nКупить ткани CristianFischbacherв Киеве можно у шоу-руме VOGUE INTERIORS, а также онлайн на нашем сайте.','11-cristianfischbacher','http://fischbacher.com/','CristianFischbacher','CristianFischbacher','CristianFischbacher'),(12,35,'Creation Baumann',1,'Компания Creation Baumann была создана в 1886 году и является одним из ключевых игроков на текстильном рынке в сегменте «премиум», предлагая качественные ткани для штор, обивки, а также специализированные ткани для звукоизоляции, солнцезащиты и теплосбережения.\r\n<br/>\r\nCreation Baumann – это семейная компания с взглядом на долгосрочные перспективы, предлагающая комплексные решения в подборе тканей и текстильном декоре интерьеров.\r\n<br/>\r\nАссортимент Creation Baumann состоит из более чем 600 000 уникальных наименований.\r\nБлагодаря собственной команде дизайнеров и производству в Швейцарии, компания постоянно находится в тренде интерьерной моды и производить актуальные тканевые коллекции, соответствующие тенденциям стремительно развивающегося рынка.\r\n<br/>\r\nКлючевая особенность бренда Creation Baumann – только современные ткани c полным набором технических характеристик.\r\nИменно благодаря наличию полной технической информации о каждом артикуле ткани, Creation Baumann является столь популярным среди дизайнеров по тканям, ведь пошив штор или текстильный декор можно выполнять с полным пониманием финишного результата и тщательным подбором карнизных систем исходя из применения и веса ткани.\r\n<br/>\r\nТкани для штор Creation Baumann представлены десятками коллекций, каждая из которых имеет свою индивидуальность.\r\nСуществуют отдельные подборки тканей из льна, хлопковые тканевые коллекции, сеты из современных тканей, детские коллекции тканей, а также эко-ткани со 100% натуральным составом.\r\n<br/>\r\nОбивочные ткани Creation Baumann также широко представлены в ассортименте компании.\r\nКаждый артикул имеет точное значение износостойкости и эксплуатационных характеристик, что дает возможность подобрать ткань не только по дизайну, но и исходя из типа помещения, где будет использоваться обивка.\r\n<br/>\r\nОтдельное внимание заслуживают шумопоглощающие ткани от Creation Baumann, которые выполняют двойную функцию: декор и звукоизоляция.\r\nАссортимент таких тканей велик, благодаря негорючести, многие из них могут использоваться даже в коммерческих интерьерах.\r\nВообще, шумопоглощающие ткани – это удобно.\r\nМожно просто установить электрический карниз и повесить шторы из специальной шумопоглощающей ткани и получить в итоге раздвижные перегородки из ткани.\r\n<br/>\r\nЕсли нужны качественные скатерти или салфетки индивидуального пошива, то Creation Baumannпредлагает специальную коллекцию тканей для скатертей, салфеток и другого текстиля для ресторанов, кафе и убранства стола.\r\n<br/>\r\nПомимо всего прочего Creation Baumann начинает разрабатывать рулонные шторы, но они находятся только в начале этого пути и не достигли каких-либо значительных результатов.','12-creation_baumann','http://creationbaumann.com/','Creation Baumann','Creation Baumann','Creation Baumann'),(13,36,'Dedar',1,'Компания Dedar предлагает интерьерные ткани, обои для стен и текстильные\r\nаксессуары высокого уровня, зарекомендовав себя как надежная компания\r\nтекстильной индустрии с щепетильным подходом к качеству и презентации своей\r\nпродукции.\r\n<br/>\r\nОснованная в 1976 году, из команды в 15 человек, сейчас является компанией\r\nс более чем сотней персонала в своем штате, продавая свою продукцию по всему миру с\r\nпривлечением собсвенным представительств в Италии, Франции, Германии, России,\r\nБритании, США и Дубаи.\r\n<br/>\r\nКоллекция тканей Dedar насчитывает более 300 различных артикулов тканей в более чем 3000\r\nцветовых вариациях.\r\n<br/>\r\nТрадиционный подход к подбору составов тканей вдоволь\r\nкомпенсируется сдержанными и беспроигрышными дизайнами, превозносящими\r\nбольшинство тканей Dedar в\r\nряд бестселлеров большинства текстильных ателье и салонов штор.\r\n<br/>\r\nВажно отметить превосходный подбор цветовой гаммы каждого артикула\r\nткани. В отличии от других производителей, если ткань не смотрится выигрышной в\r\nтом или ином цвете – ее просто снимают с коллекции.\r\n<br/>\r\nКупить ткани Dedar в Киеве Вы можете в интерьер-бутике VOGUE INTERIORS, а также онлайн на нашем сайте.','13-dedar','http://dedar.it','Dedar','Dedar','Dedar'),(14,37,'Designers Guild',1,'Британская компания Designers Guild является одной из самых креативных и влиятельных компаний в сфере текстильного оформления помещений и интерьерного дизайна в целом.\r\n<br/>\r\nКомпания была создана в 1970 году дизайнером ТрициейГилд (Tricia Guild), которая была чрезмерно увлечена идеей создания особого, завершенного и сбалансированного стиля в интерьере, который сейчас присущ всей продукции Designers Guild.\r\n<br/>\r\nКомпания Designers Guild выпускает ткани для штор и обивки, обои и текстильные покрытия для стен, а также ковры, постельное белье, мебель и другие аксессуары для интерьера.\r\n<br/>\r\nЗалогом успеха компании Designers Guild является превосходный дизайн, высокое качество производимой продукции, безупречный сервис и конечно же талантливая команда профессионалов, благодаря которой выпускаются столь уникальные и неподражаемы ткани для штор, обои, ковры и мебель.\r\n<br/>\r\nИз года в год, компания Designer Guild создает английские ткани и обои для стен с использованием декоративных традиций Востока, итальянской архитектуры и классических образцов мирового искусства.\r\nС компанией Designers Guild постоянно сотрудничают известные художники и дизайнеры с мировым именем используя свой опыт в текстильной индустрии для создания непревзойденных образцов этой отрасли.\r\n<br/>\r\nТрицияГилд (Tricia Guild) является автором более десяти книг по дизайну, декорированию и колористике, охватив такие отрасли, как ткани, текстильное оформление помещений, флористика итд.\r\n<br/>\r\nЗа значительный вклад в текстильную индустрию, в 1994 году ТрицияГилд была награждена золотой медалью Института Текстиля, а также удостоена премии Европейского Общества Дизайнеров.\r\n<br/>\r\nАссортимент компании Designers Guild состоит из более чем трех тысяч артикулов тканей для штор, а также около двух тысяч артикулов обоев для стен.\r\nВсе ткани и обои имеют самые различные дизайны: клетка, орнамент, полосы итд.\r\n<br/>\r\nПодчерк (дизайн) бренда Designers Guild прослеживается во всех изделиях компании.\r\nПроглядывая ткани для штор или обивки, выбирая обои для стен или ковры для жилых помещений Вы однозначно узнаете стиль Designers Guild без каких-либо подсказок.\r\n<br/>\r\nКомпания Designers Guild предлагает не только ткани для штор и обивки, ковры и мебель, но также производит постельное белье, одеяла и пледы, скатерти и салфетки, а также посуду и все это предлагается купить в подарочной упаковке.\r\n<br/>\r\nКупить дизайнерские ткани для штор Designers Guild в Киеве Вы можете в интерьер-бутике VOGUE INTERIORS, а также онлайн на нашем сайте.','14-designers_guild','http://designersguild.com','Designers Guild','Designers Guild','Designers Guild');
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-21 19:38:14