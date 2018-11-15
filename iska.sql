-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Авг 02 2017 г., 07:26
-- Версия сервера: 5.7.17-0ubuntu0.16.04.2
-- Версия PHP: 7.1.4-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `iska`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `category`, `title`, `text`) VALUES
(1, 'history', '0', '<h1 style="text-align: center; display: none">ПРОГРАМА<br />\r\nрозвитку кікбоксингу &laquo;ІСКА&raquo; в<br />\r\nУкраїні на 2016-2020 р.р.</h1>\r\n\r\n<p><img align="left" alt="iska" src="/upload/images/iska.png" style="padding: 25px" width="280" /></p>\r\n\r\n<p>Кікбоксинг, один з наймолодших, але дуже популярних видів спортивного єдиноборства, зародився в якості самостійної дисципліни на початку 70-х років, з початку в США, а потім і Західній Європі. Об&#39;єднавши таким чином, Схід і Захід. Завоював широку популярність в десятках країн світу за дуже короткий проміжок часу.</p>\r\n\r\n<p>Вивчаючи історію виникнення кікбоксингу необхідно відмітити про єдиноборства на основі яких створювався цей &quot;вид спорту&quot;. В першу чергу, це &quot;американське&quot; карате, фул-контакт карате, тхеквондо, тайский і английский бокс.</p>\r\n\r\n<p>КІКБОКСИНГ - від англійського &quot;kick&quot; - бити ногою і &quot;boxing&quot; - бокс. Виникнення цього терміну приписують Чаку Норрісу, багатократному чемпіону світу по кікбоксингу.</p>\r\n\r\n<p>Але до моменту зародження кікбоксингу в Америці, в кінці 60-х на початку 70-х роках, існувало багато стилів і шкіл східних єдиноборств, але, так як в кожному із них були свої правила, виникла ідея провести змагання по таким узагальненим правилам, по яким могли б виступити представники різних бойових мистецтв. Ці змагання отримали назву &quot; Ой стайл карате&quot;, або &quot;Фул-контакт карате&quot;. Прославленими майстрами стали такі бійці, як Чак Норріс, Майкл Стоун, Джо Люїс, Білл Уоллес, Джефф СмітЛаррі Карнахен і багато інших.</p>\r\n\r\n<p>В Європі фул-контакт карате почало розвиватись з 1974 року, коли у травні в Берліні було організовано Перший європейський турнір по карате всіх стилів з метою виявлення абсолютного переможця з контактного карате.</p>\r\n\r\n<p>У вересні 1974 у Лос-Анжелісі вперше проходить чемпіонат світу з контактного карате у чотирьох вагових категорія. Цей турнір проводила Професійна асоціація карате (PKA) яка і стояла біля витоку створення кікбоксингую. PKA була заснована в 1974 році Доном Куайном та Джо Корлі. Ними було розроблено систему ранжирування перших поєдинків: Чемпіони ПКА були зірками нового виду спорту, першими в гучних видах бойових мистецтв. Серед них були Жан-Ів Терио, Бред Hefton, Джеррі Трімбл, Стів Шеппард та інші.</p>\r\n\r\n<p>Коли через правові труднощі в 1985 році почався занепад PKA, і вона перестала функціонувати, то група великих промоутерів США і колишні керівники PKA вирішили створити новий орган.</p>\r\n\r\n<p>16 липня 1986 року народилася Інтернаціональна асоціація карате спорту.</p>\r\n\r\n<p>Його перші президенти Майк Сойєр, Карин Тернер, Тоні Томпсон, Джон Уорлі і Скотт Кокер. Більшість колишніх промоутерів PKA приєдналися до ISKA. Основні поєдинки за участю кращих спортсменів цього виду спорту транслювалися по телебаченню мережі ESPN і принісли авторитет і визнання нового органу.</p>\r\n\r\n<p>Європейське відділення ISKA було створено 9 жовтня 1986 року коли Олівер Мюллер і Мохамед Хоссейні були призначені європейськими президентами ISKA.</p>\r\n\r\n<p>ISKA швидко поширювалася по всьому світу, а коли залізна завіса була знята вона стала першою організацією яка об&rdquo;єднала змагання в країнах Східного Європи. Основні поєдинки також проведені в Австралії, Японії і Південній Африці. Було затверджено нові дисципліни ISKA, вдосконалено та розроблено нові правила проведення поєдинків та змагань.</p>\r\n\r\n<p>З 1989 року почався розвиток ISKA в Україні. В грудні 1990 року кікбоксинг був офіційно визнаний в СРСР, як вид спорту. Перший чемпіонат України був проведений в 1990 році (м.Ужгород), а в місті Вінниця, відбувся чемпіонат який спонукав подальший розвиток Українського кікбоксингу та вихід на міжнародну арену видатних спортсменів, легенд кікбоксингу: Віталія Кличко - чотириразового чемпіона світу серед професіоналів по версії ІСКА, Віктора Дорошенко - чорний пояс по кікбоксингу, 4-й дан версії ІСКА, чемпіона Європи 1992р., інтерконтинентального чемпіона Європи та світу 1995 року, Олексія Нечаєва - чорний пояс по кікбоксингу 5-й дан версії ІСКА, чемпіон СНГ- ІСКА 1992р., чемпіон Європи 1993р., чемпіон світу 1994р.,чемпіон Росії 1995р. по версії ІСКА м. Москва.</p>\r\n\r\n<p>Перехід в нове тисячоліття ISKA відзначила спортивним брендом K-1. Два світових титули ISKA були розіграні відповідно до східних правил. На першому K-1 MAX в Токіо у листопаді 2000 року, японський Star Масато переміг Murhad Сарі Франція в напівсередній вазі, а японець Такаюки Kohiruimaki завдав поразки англійському чемпіону Нілу Вудсу в супер-напівсередній вазі. Бій голландської суперзірки Деккерса в K-1 MAX з японським чемпіоном Akemi Нітти закінчився нічийним результатом.</p>\r\n\r\n<p>ISKA почала робочі відносини з провідними промоутером Скотом Кокером в хостингу K-1 USA на курортах казино Bellagio і Mirage в Лас-Вегас. Директор ISKA налагодив співпрацю з Чак Норріс World Combat League у рамках ліги кікбоксингу. Бої і турніри ліги транслювалися протягом багатьох сезонів на кабельному телебаченні VERSUS. Президент ISKA Корі Шафер ставив максимальні завдання у напрямку популяризації кікбоксингу як у США так і у всьому світі.</p>\r\n\r\n<p>Рухаючись з часом, промоутер Скотт Кокер організував змішані види бойових мистецтв (ММА) і в перших затвердженних ISKA поєдинках 10 березня 2006 року в Каліфорнії на матчі Франк Shamrock з Cesar Gracie була зібрана рекордна аудиторія 18,265 глядачів.</p>\r\n\r\n<p>Володіючи значними можливостями ISKA також зберігла своє лідерство на арені традиційних турнірів з бойових мистецтв. Відкритий чемпіонат США ISKA зазвичай розглядається як найбільш престижна подія в своєму роді. Захід регулярно приймає більше 3500 спортсменів, що представляють більше 50 різних країн. Ніч чемпіонів ISKA транслюється в прямому ефірі на каналі ESPN, а основні моменти редагуються в спеціальну презентацію для ESPN, ESPN2 і ESPN International.</p>\r\n\r\n<p>Зміна назви з Міжнародної асоціації карате в Міжнародний Спорт карате і кікбоксингу відбулася в 2006 році і перший чемпіонат світу ISKA серед аматорських членів асоціації пройшов у Штутгарті, Німеччина.</p>\r\n\r\n<p>В 2014 році збірна України на чемпіонаті Європи в Іспанії здобула <span style="padding-left: 0">18 нагород, 6 із них - золоті медалі!</span></p>\r\n\r\n<p>Президент федерації кікбоксингу України Олег Мандзюк входив до складу робочої групи, яка і ініціювали зміну назви асоціації. Ці ініціативи були розглянуті у 2014 році в Мілані на Всесвітніх Національних зборах директорів ISKA. Було прийнято рішення та затверджено кінцеву назву асоціації - Інтернаціональна Спортивна Кікбоксерська Асоціація (ISKA)</p>\r\n\r\n<p>На чемпіонаті Світу у Штудгарті в травні 2016 року збірна команда України здобула 9 золотих медалей, 13 срібних і 7 бронзових нагород.</p>\r\n\r\n<p>ISKA вносить вагомий внесок у розвиток світового спорту, забезпечує вдосконалення усіх напрямків діяльності, дотримується високих стандартів проведення поєдинків та міжнародних турнірів, популяризує як спорт в цілому, так і дитячо-юнацький кікбоксинг, дбає про безпеку та рівні можливості кожного спортсмена!</p>\r\n\r\n<p>Це наша місія !</p>\r\n'),
(2, '', 'Шановні колеги,  друзі, співвітчизники!', '<p>Щиро вітаю вас із Днем Незалежності України!</p>\n\n<p>Цей знаменний день демократії, свободи і громадської злагоди нашого народу є поворотною віхою в історії Української держави.&nbsp;</p>\n\n<p>За 25 років Україна пройшла тернистий шлях випробувань, але жодні негаразди не змогли зламати наш Козацький Дух!<br />\nІ сьогодні ми впевнено взяли курс на євроінтеграцію та запровадження європейських цінностей та стандартів.<br />\nПереконаний, що наше майбутнє, майбутнє нашої держави залежить тільки від нас самих!</p>\n\n<p>Наша віра, надія і любов до рідної землі додає енергії, снаги і впевненості у власних силах, у прагненні вдосконалювати нашу Батьківщину!</p>\n\n<p>Зичу вам, вашим родинам здоров&#39;я, добробуту, миру і нових звершень на благо України!</p>\n\n<p>Зі святом Вас!<br />\nЗ Днем Незалежності!!!</p>\n');

-- --------------------------------------------------------

--
-- Структура таблицы `achievement`
--

CREATE TABLE `achievement` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `achievement`
--

INSERT INTO `achievement` (`id`, `title`, `alias`, `category`, `text`) VALUES
(1, 'Результати виступу України', 'ukraine', 'international', '<h1 style="text-align: center">ФЕДЕРАЦІЯ КІКБОКСИНГУ УКРАЇНИ &laquo;ІСКА&raquo;</h1>\r\n\r\n<p style="text-align: center; font-size: 24px; font-weight: 700">Результат</p>\r\n\r\n<h3 style="text-align: center">Виступу команди України на Чемпіонаті світу з кікбоксингу ISKA<br />\r\n17 &ndash; 23 травня 2016 року в м. Штутгарт (Німеччина)</h3>\r\n\r\n<p>З 17 по 23 травня 2016 року в м. Штутгарт (Німеччина) відбувся Чемпіонат Світу з кікбоксингу ISKA серед юнаків, юніорів та дорослих. У чемпіонаті приймали участь 600 спортсменів з 35 країн світу. Гідно виступила в цьому Всесвітньому спортивному святі збірна команда України у складі 14 спортсменів (Київскої , Чернігівської, Рівненської та Полтавської областей). За результатом виступу 9 золотих , 13 срібних та 7 бронзовых нагород , <strong>Україна увійшла в десятку найкращих країн світу.</strong></p>\r\n\r\n<p style="text-align: center; font-size: 24px"><mark>9 золотих, 13 срібних, 7 бронзових нагороди</mark></p>\r\n\r\n<table border="1" cellpadding="4" cellspacing="0" style="border-collapse: collapse; margin-top: 15px; text-align: center;" width="100%">\r\n	<tbody>\r\n		<tr style="background: #0e7add; color: #fff;">\r\n			<th>№</th>\r\n			<th style="text-align: left">Прізвище, Ім&#39;я</th>\r\n			<th>Семі</th>\r\n			<th>Лайт</th>\r\n			<th>Фулл</th>\r\n			<th>Лоу кік</th>\r\n			<th>K-1</th>\r\n			<th>K1 лайт</th>\r\n			<th>Thai boxing</th>\r\n			<th>Hrэpp-lynh</th>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td style="text-align: left">Алієв Ельчин/Київ/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>3</td>\r\n			<td style="background: #d3d3d3;">2</td>\r\n			<td>3</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">2</td>\r\n			<td style="text-align: left">Рильский Дмитро/Київ/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">3</td>\r\n			<td style="text-align: left">Яричевський Олександр/Київ/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>2</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">4</td>\r\n			<td style="text-align: left">Назлоян Марк/Київ/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>3</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>3</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>3</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">5</td>\r\n			<td style="text-align: left">Ткаченко Дар&#39;я/Київ/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>2</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>2</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">6</td>\r\n			<td style="text-align: left">Шрам Сергій/Чернігів/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>2</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>2</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">7</td>\r\n			<td style="text-align: left">Єрко Михайло/Чернігів/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">2</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">8</td>\r\n			<td style="text-align: left">Ліхіна Захар/Чернігів/</td>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td>2</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">9</td>\r\n			<td style="text-align: left">Кашка Ігор/Київ/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">10</td>\r\n			<td style="text-align: left">Тимошенко Володимир/Київ/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">3</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">11</td>\r\n			<td style="text-align: left">Турченко Денис/Кременчук/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>2</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">12</td>\r\n			<td style="text-align: left">Скирта Олег/Кременчук/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>2</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">13</td>\r\n			<td style="text-align: left">Алексеюк Ілля /Рівне/</td>\r\n			<td style="background: #d3d3d3;">3</td>\r\n			<td>2</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>2</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">13</td>\r\n			<td style="text-align: left">Гуцалюк Ігор/Рівне/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>2</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>2</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<div style="margin-top: 20px">&nbsp;</div>\r\n\r\n<p style="text-align: center; font-size: 24px; font-weight: 700">Результат</p>\r\n\r\n<h3 style="text-align: center">Виступу команди України на Чемпіонаті світу з кікбоксингу ISKA<br />\r\n29 квітня &ndash; 02 травня 2015 року в м. Партімао (Португалія)</h3>\r\n\r\n<p style="text-align: center; font-size: 24px"><mark>16 золотих, 5 срібних, 2 бронзових нагороди</mark></p>\r\n\r\n<p><a href="/media/photo/portugal.php" style="float: right">Фото Португалія &rArr;</a></p>\r\n\r\n<table border="1" cellpadding="4" cellspacing="0" style="border-collapse: collapse; margin-top: 15px; text-align: center;" width="100%">\r\n	<tbody>\r\n		<tr style="background: #0e7add; color: #fff;">\r\n			<th>№</th>\r\n			<th style="text-align: left">Прізвище, Ім&#39;я</th>\r\n			<th>Семі</th>\r\n			<th>Лайт</th>\r\n			<th>Фулл</th>\r\n			<th>Лоу кік</th>\r\n			<th>K-1</th>\r\n			<th>K1 лайт</th>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td style="text-align: left">Красюк Михайло /Северодонецьк/</td>\r\n			<td style="background: #d3d3d3;">2</td>\r\n			<td>2</td>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">2</td>\r\n			<td style="text-align: left">Чернов Артур /Северодонацьк/</td>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">2</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>2</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">3</td>\r\n			<td style="text-align: left">Єрко Михайло /Чернігів/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">4</td>\r\n			<td style="text-align: left">Ліхіна Захар /Чернігів/</td>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">5</td>\r\n			<td style="text-align: left">Волков Микита /Київ/</td>\r\n			<td style="background: #d3d3d3;">-</td>\r\n			<td>-</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">6</td>\r\n			<td style="text-align: left">Лисюк Сергій /Чернігів/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td>2</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">7</td>\r\n			<td style="text-align: left">Шрам Сергій /Чернігів/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">8</td>\r\n			<td style="text-align: left">Копкін Богдан /Кременчук/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">9</td>\r\n			<td style="text-align: left">Скирта Олег /Кременчук/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">10</td>\r\n			<td style="text-align: left">Полосенко Дмитро /Київ/</td>\r\n			<td style="background: #d3d3d3;">3</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<div style="margin-top: 20px">&nbsp;</div>\r\n\r\n<p style="text-align: center; font-size: 24px; font-weight: 700">Результат</p>\r\n\r\n<h3 style="text-align: center">Виступу команди України на Чемпіонаті Європи з кікбоксингу ISKA<br />\r\n23 - 26 жовтня 2014 року в м. Пескара (Італія)</h3>\r\n\r\n<p style="text-align: center; font-size: 24px"><mark>3 золотих, 1 бронзова нагороди</mark></p>\r\n\r\n<table border="1" cellpadding="4" cellspacing="0" style="border-collapse: collapse; margin-top: 40px; text-align: center" width="100%">\r\n	<tbody>\r\n		<tr style="background: #0e7add; color: #fff;">\r\n			<th>№</th>\r\n			<th style="text-align: left">Прізвище, Ім&#39;я</th>\r\n			<th>Семі</th>\r\n			<th>Лайт</th>\r\n			<th>Фулл</th>\r\n			<th>Лоу кік</th>\r\n			<th>K-1</th>\r\n			<th>K1 лайт</th>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td style="text-align: left">Бегун Владислав /Дніпродзержинськ/</td>\r\n			<td style="background: #d3d3d3;">3</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">2</td>\r\n			<td style="text-align: left">Шешин Костянтин /Дніпродзержинськ/</td>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<div style="margin-top: 20px">&nbsp;</div>\r\n\r\n<p style="text-align: center; font-size: 24px; font-weight: 700">Результат</p>\r\n\r\n<h3 style="text-align: center">Виступу команди України на Чемпіонаті світу з кікбоксингу ISKA<br />\r\n30.04 &ndash; 04.05.2014 року м. Льорет де Мар ( Коста Брава, Іспанія )</h3>\r\n\r\n<p style="text-align: center; font-size: 24px"><mark>12 золотих, 10 срібних, 9 бронзових нагороди .</mark></p>\r\n\r\n<p><a href="/media/photo/spain.php" style="float: right">Фото Іспанія &rArr;</a></p>\r\n\r\n<table border="1" cellpadding="4" cellspacing="0" style="border-collapse: collapse; margin-top: 40px; text-align: center" width="100%">\r\n	<tbody>\r\n		<tr style="background: #0e7add; color: #fff;">\r\n			<th>№</th>\r\n			<th style="text-align: left">Прізвище, Ім&#39;я</th>\r\n			<th>Семі</th>\r\n			<th>Лайт</th>\r\n			<th>Фулл</th>\r\n			<th>Лоу кік</th>\r\n			<th>K-1</th>\r\n			<th>K1 лайт</th>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td style="text-align: left">Ліхіна Захар /Северодонецьк/</td>\r\n			<td style="background: #d3d3d3;">3</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">2</td>\r\n			<td style="text-align: left">Стьопкін Віталій /Северодонецьк/</td>\r\n			<td style="background: #d3d3d3;">3</td>\r\n			<td>3</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">3</td>\r\n			<td style="text-align: left">Косаренко Ілля /Северодонецьк/</td>\r\n			<td style="background: #d3d3d3;">3</td>\r\n			<td>2</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">4</td>\r\n			<td style="text-align: left">Скирта Олег /Кременчук/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">5</td>\r\n			<td style="text-align: left">Кагал Максим /Кременчук/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">3</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">6</td>\r\n			<td style="text-align: left">Копкін Денис /Кременчук/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>2</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">7</td>\r\n			<td style="text-align: left">Яровой Дмитро /Мелітополь/</td>\r\n			<td style="background: #d3d3d3;">2</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">8</td>\r\n			<td style="text-align: left">Сезько Анна /Коростишів/</td>\r\n			<td style="background: #d3d3d3;">3</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">9</td>\r\n			<td style="text-align: left">Ханас Андрій /Луганськ/</td>\r\n			<td style="background: #d3d3d3;">3</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">2</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">10</td>\r\n			<td style="text-align: left">Разинкова Діана /Луганськ/</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">2</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">11</td>\r\n			<td style="text-align: left">Пахоленко Дмитро /Луганськ/</td>\r\n			<td style="background: #d3d3d3;">2</td>\r\n			<td>2</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">12</td>\r\n			<td style="text-align: left">Щербак Владислав /Луганськ/</td>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td>2</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">13</td>\r\n			<td style="text-align: left">Логвинов Віталій /Луганськ/</td>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">1,2</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">14</td>\r\n			<td style="text-align: left">Кубарський Ігор /Обухів/</td>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td>1</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="background: #d3d3d3;">&nbsp;</td>\r\n			<td>1</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(2, '', '', 'personal', '<h1 style="text-align: center">Чемпіони світу ІСКА 2013-2016 рік.</h1>\r\n\r\n<table border="1" cellpadding="4" cellspacing="0" style="border-collapse: collapse; margin-top: 40px; text-align: center" width="100%">\r\n	<tbody>\r\n		<tr style="background: #0e7add; color: #fff;">\r\n			<th>№</th>\r\n			<th style="text-align: left">Прізвище, Ім&#39;я</th>\r\n			<th>&nbsp;</th>\r\n			<th>Розділ</th>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">1</td>\r\n			<td style="text-align: left">Лисюк Сергій / м.Чернігів</td>\r\n			<td style="background: #d3d3d3;">1 - місце</td>\r\n			<td>фул-контакт</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">2</td>\r\n			<td style="text-align: left">Шрам Сергій / м.Чернігів</td>\r\n			<td style="background: #d3d3d3;">1 - місце</td>\r\n			<td>Лайт,лоу-кік, К-1 лайт</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">3</td>\r\n			<td style="text-align: left">Копкін Богдан / м.Кременчук</td>\r\n			<td style="background: #d3d3d3;">1 - місце</td>\r\n			<td>лоу-кік, К-1</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">4</td>\r\n			<td style="text-align: left">Рильский Дмитро / м.Київ</td>\r\n			<td style="background: #d3d3d3;">1 - місце</td>\r\n			<td>К-1 лайт</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background: #d3d3d3;">5</td>\r\n			<td style="text-align: left">Кашка Ігор / м.Київ</td>\r\n			<td style="background: #d3d3d3;">1 - місце</td>\r\n			<td>фул</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(3, 'Україна в міжнародному рейтингу 2015', 'world-championships-2015', 'international', '<h1 style="text-align: center; font-size: 20px">Україна посіла 6 місце на Чемпіонаті світу з кікбоксингу ISKA<br />\r\n29 квітня &ndash; 03 травня 2015 року в м. Партімао (Португалія)</h1>\r\n\r\n<div style="text-align: center"><img alt="" src="/upload/images/ISKA_WC_2015.jpg" /></div>\r\n'),
(6, 'Україна в міжнародному рейтингу 2016', 'world-championships-2016', 'international', '<h1 style="text-align: center; font-size: 20px">Україна посіла 5 місце на Чемпіонаті світу з кікбоксингу ISKA<br />\r\n17 &ndash; 23 травня 2016 року в м. Штутгарт (Німеччина)</h1>\r\n\r\n<div style="text-align: center"><img alt="" src="/upload/images/ISKA_WC_2016.jpg" /> <img alt="" src="/upload/images/ISKA_WC_2016_2.jpg" /> <img alt="" src="/upload/images/ISKA_WC_2016_3.jpg" /></div>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `activity`
--

CREATE TABLE `activity` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `activity`
--

INSERT INTO `activity` (`id`, `category`, `text`) VALUES
(1, 'national_patriotic', '<h1 style="text-align: center;">Федерація кікбоксингу України ІСКА поряд з завданнями військових формувань.</h1>\r\n\r\n<p>Федерація кікбоксингу України ІСКА декілька років поспіль співпрацює з Академією Державної пенітенціарної служби м. Чернігів з метою підвищення фізичної підготовки курсантів академії. Клопітку працю по вдосконаленню здібностей курсантів проводить старший викладач кафедри фізичної підготовки академії, заслужений майстер спорту України, представник Федерації кікбоксингу України ІСКА у Чернігівської області Лисюк Сергій Миколайович, який готує призерів та чемпіонів Всеукраїнських змагань.</p>\r\n\r\n<p>Подібна робота проводиться в Київській, Харківській, Дніпропетровській областях, що відповідає Програмі розвитку кікбоксингу ІСКА в Україні, яка базується на співпраці з військовими формуваннями, курсантами ВНЗ, силовими структурами.</p>\r\n\r\n<p>Президія</p>\r\n'),
(2, 'scientific', '<h1 style="text-align: center;">ПРОГРАМА&nbsp;<br />\r\nрозвитку кікбоксингу &laquo;ІСКА&raquo; в&nbsp;<br />\r\nУкраїні на 2016-2020 р.р.</h1>\r\n\r\n<h2 style="text-align: center;">Вступ</h2>\r\n\r\n<p>Програма розвитку кікбоксингу &laquo;ІСКА&raquo; в Україні в період 2016-2020 роки розроблена відповідно до Законів України &quot;Про фізичну культуру і спорт&quot;, &quot;Про об&#39;єднання громадян&quot;, цільової комплексної програми &quot;Фізичне виховання - здоров&#39;я нації&quot;, концепції Державної цільової соціальної програми Мінмолодьспорта України національно - патріотичного виховання на 2016-2020 роки.</p>\r\n\r\n<p>У програмі розвитку кікбоксингу &laquo;ІСКА&raquo; в Україні враховані необхідні зміни у підходах суспільства до забезпечення підготовки здорової людини, в дитячо-юнацькому спорті, спорті великих досягнень, спортивно-прикладної підготовки та виконанню цільової соціальної програми національно-патріотичного виховання на 2016-2020 роки.</p>\r\n\r\n<p>Програма розвитку кікбоксингу &laquo;ІСКА&raquo; в Україні є загальнодержавною складовою системи фізичної культури і спорту, спрямованої на зміцнення фізичних, інтелектуальних здібностей, фізичних навиків прикладної спрямованості, формування національно-патріотичної активності людей, підготовки до життєво-важливих потреб, розвиток дружніх відносин з національностями країни та національностями інших держав.</p>\r\n\r\n<p>Розвиток кікбоксингу &laquo;ІСКА&raquo; в Україні, базується на співпраці з військовими формуваннями, силовими органами, військовими частинами НГУ, створенні нових клубів і секцій масового навчання, закладів позашкільної освіти та створює умови залучення до активних занять населення України, а також має стимулюючий вплив на розвиток міжнародної інтеграції України.</p>\r\n\r\n<p>Кікбоксинг &laquo;ІСКА&raquo; є вид спорту, спрямований, як на загальний розвиток так і на перехід у спорт вищих досягнень та надання постійного вдосконалення самозахисту усім верствами населення з різними рівнями достатку.</p>\r\n\r\n<p>Головне завдання &laquo;Федерації кікбоксингу України ІСКА&raquo; з розвитку виду спорту в Україні є виховування спортсменів світового рівня, підготовка суддів найвищого міжнародного класу, виховання тренерів високого професіоналізму.</p>\r\n\r\n<p>Цілеспрямована діяльність забезпечує гідне місце в загальнодержавній системі фізичної культури і спорту, а також підвищує його соціальну значимість у національно-патріотичному вихованні спортсменів різного віку, всебічному гармонійному розвитку особи, зміцненню здоров&#39;я населення, формуванню здорового способу життя, культурному і духовному розвитку громадян України.</p>\r\n\r\n<p>Враховуючи зазначене, а також свої статутні завдання, &laquo;Федерація кікбоксингу України &laquo;ІСКА&raquo; з розвитку виду спорту в Україні передбачає наступну програму своєї діяльності на 2016-2020 роки.</p>\r\n\r\n<h2 style="text-align: center;">Мета, завдання та етапи реалізації Програми:</h2>\r\n\r\n<p>Метою&nbsp;Програми є розвиток кікбоксингу &laquo;ІСКА&raquo; в Україні, як масового та прикладного виду спорту і спорту вищих досягнень для всіх вікових груп населення.</p>\r\n\r\n<p>Головним завданням Програми є створення нормативно-правових, інформаційно-методичних, організаційно-масових умов, сприятливих для розвитку кікбоксингу &laquo;ІСКА&raquo; в Україні, як ефективного засобу гармонійного розвитку особи, зміцнення здоров&#39;я населення, підвищення національно-патріотичного та духовного рівня особи, формування здорового способу життя та участі у сприянні соціального прогресу українського суспільства у світовому співтоваристві.</p>\r\n\r\n<h2 style="text-align: center;">Основними завданнями Програми є:</h2>\r\n\r\n<p>&nbsp;<br />\r\n&mdash;&nbsp;сприяння в&nbsp;реалізації державної політики щодо розвитку кікбоксингу &laquo;ІСКА&raquo; в Україні;&nbsp;<br />\r\n&mdash;&nbsp;участь у формуванні нормативно-правових документів сфери фізичної культури і спорту та сучасної нормативно-правової та інформаційної бази розвитку кікбоксингу &laquo;ІСКА&raquo; в Україні;&nbsp;<br />\r\n&mdash;&nbsp;удосконалення організаційної структури федерації, ефективної системи управління регіональними осередками федерації у їх взаємодії з місцевими органами виконавчої влади з фізичної культури і спорту щодо розвитку та популяризації кікбоксингу &laquo;ІСКА&raquo; в Україні;<br />\r\n&mdash;&nbsp;розвиток системи взаємодії з державними громадськими та іншими організаціями, а також розвиток міжнародних зв&#39;язків в межах існуючих повноважень;<br />\r\n&mdash;&nbsp;об&#39;єднання громадських організацій України та всіх зацікавлених, що сприятимуть розвитку кікбоксингу &laquo;ІСКА&raquo; в Україні; - сприяння розвитку спортивних клубів та спортивних секцій кікбоксингу &laquo;ІСКА&raquo; в Україні, закладів позашкільної освіти для залучення населення до активних занять кікбоксингом;&nbsp;<br />\r\n&mdash;&nbsp;сприяння подальшій розбудові системи підготовки та підвищення кваліфікації кадрів та суддівського корпусу кікбоксингу &laquo;ІСКА&raquo; в Україні;&nbsp;<br />\r\n&mdash;&nbsp;підвищення майстерності атлетів кікбоксингу &laquo;ІСКА&raquo; в Україні для участі у міжнародних змаганнях та формування позитивного іміджу України у світовому спортивному русі.</p>\r\n\r\n<p><b>I. Реалізація Програми здійснюється за такими напрямками:</b></p>\r\n\r\n<ol>\r\n	<li>Організаційна робота та нормативно-правове забезпечення.</li>\r\n	<li>Розвиток інфраструктури федерації.</li>\r\n	<li>Спорт вищих досягнень.</li>\r\n	<li>Кадрове забезпечення.</li>\r\n	<li>Матеріально-технічне забезпечення.</li>\r\n	<li>Інформаційно-методичне забезпечення.</li>\r\n	<li>Науково-методичне та медико-біологічне забезпечення.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><b>1. Організаційна робота та нормативно-правове забезпечення.</b></p>\r\n\r\n<table border="1" cellpadding="6" cellspacing="0" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<th width="60%">Заходи</th>\r\n			<th width="20%">Період</th>\r\n			<th width="20%">Відповідальні</th>\r\n		</tr>\r\n		<tr>\r\n			<td>1. Проводити заходи щодо об&rsquo;єднання усіх зацікавлених сторін у&nbsp;розвитку кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні.</td>\r\n			<td>Щороку</td>\r\n			<td>Президія, регіональні осередки</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2. Сприяти розширенню індивідуального членства у&nbsp;кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні громадян України.</td>\r\n			<td>Щороку</td>\r\n			<td>Президія, регіональні осередки</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3. Розробити та&nbsp;запровадити систему змагань (першостей клубів, міст, районів, областей, відкритих рейтингових змагань).</td>\r\n			<td>2016-2020 р.р.</td>\r\n			<td>Президія, регіональні осередки</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4. Проводити огляд-конкурс на&nbsp;кращу організаційну роботу серед спортивних клубів, секцій, районів, міст, областей.</td>\r\n			<td>Щороку</td>\r\n			<td>Президія, регіональні осередки</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5. Підготувати та&nbsp;подати на&nbsp;розгляд до&nbsp;Міністерства молоді та&nbsp;спорту України наступні документи:&nbsp;<br />\r\n			&mdash;&nbsp; зміни та&nbsp;доповнення правил проведення змагань кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні.</td>\r\n			<td>при внесенні змін до Правил</td>\r\n			<td>Президія, Колегія суддів,тренерська рада.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6. Готувати та&nbsp;подавати на&nbsp;реєстрацію до&nbsp;Міністерства юстиції України зміни та&nbsp;доповнення до&nbsp;Статуту федерації, які затверджуються Черговою Конференцією федерації.</td>\r\n			<td>при внесенні змін до Статуту</td>\r\n			<td>Президія,секретаріат.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>7. Розглянути та&nbsp;затвердити наступні документи:&nbsp;<br />\r\n			&mdash;&nbsp; типові положення про комісії за&nbsp;напрямками роботи (національна колегія суддів, системи підготовки та&nbsp;підвищення кваліфікації тренерських кадрів з&nbsp;кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні, розвиток федерації у&nbsp;питаннях зв&rsquo;язків з&nbsp;державними та&nbsp;громадськими організаціями,тощо);</td>\r\n			<td>2016-2020 р.р.</td>\r\n			<td>Президія, секретаріат.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8. Підготувати та&nbsp;подавати на&nbsp;розгляд Міністерства молоді та&nbsp;спорту України:&nbsp;<br />\r\n			&mdash;&nbsp;Єдиний календарний план Всеукраїнських змагань з&nbsp;кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні ;&nbsp;<br />\r\n			&mdash;&nbsp;положення (регламенти) про проведення всеукраїнськіх змагань згідно ЄКПВЗ;&nbsp;<br />\r\n			&mdash;&nbsp;Звіти о&nbsp;проведеної роботи ГО&nbsp;&laquo;Федерація кікбоксингу України &laquo;ІСКА&raquo;;&nbsp;<br />\r\n			&mdash;&nbsp;Збірну команду України з&nbsp;кікбоксингу &laquo;ІСКА&raquo;.</td>\r\n			<td>Щороку</td>\r\n			<td>Президія, федерації</td>\r\n		</tr>\r\n		<tr>\r\n			<td>9. Поновити та&nbsp;затвердити наступні положення;&nbsp;<br />\r\n			про класифікаційні, тренерські та&nbsp;суддівські книжки;<br />\r\n			про міжнародні членські внески;<br />\r\n			про тренерську раду;<br />\r\n			про національну Колегію суддів з&nbsp;кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні;<br />\r\n			про розвиток кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні;<br />\r\n			про підвищення національно-патріотичного виховання молоді та&nbsp;тісної співпраці з&nbsp;відділом НПВ Міністерства молоді та&nbsp;спорту України;<br />\r\n			про зовнішні зв&rsquo;язки;<br />\r\n			про вступ в&nbsp;антидопінговий центр України.</td>\r\n			<td>2016-2020 рік</td>\r\n			<td>Президія, Колегія суддів, тренерська рада.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>10. Затвердити план проведення Колегії суддів кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні</td>\r\n			<td>Листопад поточного року</td>\r\n			<td>Президія, федерації</td>\r\n		</tr>\r\n		<tr>\r\n			<td>11. Проводити:<br />\r\n			&mdash;&nbsp;звітно-виборчі Конференції федерації;<br />\r\n			&mdash;&nbsp;засідання Президії федерації;<br />\r\n			&mdash;&nbsp;засідання Ревізійної комісії;<br />\r\n			&mdash;&nbsp;колегії суддів та&nbsp;тренерів.</td>\r\n			<td>За статутними вимогами</td>\r\n			<td>Президія.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>12. Здійснювати розвиток співробітництва з міжнародними федераціями інших країн.</td>\r\n			<td>Щороку</td>\r\n			<td>Президія.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>13. Розширювати представництва суддів від України в суддівській колегії офіційних міжнародних спортивних організацій.</td>\r\n			<td>Щороку</td>\r\n			<td>Президія, колегія суддів,</td>\r\n		</tr>\r\n		<tr>\r\n			<td>14. Затверджувати план проведення Всеукраїнських навчально-тренувальних зборів кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні</td>\r\n			<td>травень, жовтень поточного року</td>\r\n			<td>Президія, федерації , Тренерська Рада,</td>\r\n		</tr>\r\n		<tr>\r\n			<td>15. Сприяти проведенню навчально-тренувальних зборів з&nbsp;кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні та&nbsp;суддівсько-тренерських семінарів по&nbsp;регіонам.</td>\r\n			<td>Щороку</td>\r\n			<td>Президія, регіональні федерації</td>\r\n		</tr>\r\n		<tr>\r\n			<td>16. Забезпечити дотримання існуючих вимог до єдиного порядку присвоєння суддівських категорій.</td>\r\n			<td>Щороку</td>\r\n			<td>Президія, Колегія суддів</td>\r\n		</tr>\r\n		<tr>\r\n			<td>17. Проводити короткотермінові курси підготовки суддів кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні з&nbsp;їх&nbsp;подальшою атестацією.</td>\r\n			<td>Щороку</td>\r\n			<td>Президія федерації, Колегія суддів</td>\r\n		</tr>\r\n		<tr>\r\n			<td>18. Забезпечити своєчасне подання необхідних документів для оформлення спортсменам та тренерам класифікаційних спортивних звань за результатами змагань.</td>\r\n			<td>На протязі року</td>\r\n			<td>Президія, регіональні федерації</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><b>2. Розвиток інфраструктури кікбоксингу &laquo;ІСКА&raquo; в Україні по розширенню мережі закладів позашкільної освіти.</b></p>\r\n\r\n<table border="1" cellpadding="6" cellspacing="0" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<th width="60%">Заходи</th>\r\n			<th width="20%">Період</th>\r\n			<th width="20%">Відповідальні</th>\r\n		</tr>\r\n		<tr>\r\n			<td>1. Сприяти реєстрації обласних осередків, федерацій, створення мережі закладів позашкільної освіти, секцій, клубів в&nbsp;різних регіонах України.</td>\r\n			<td>Регулярно</td>\r\n			<td>Президія, регіональні федерації, секретаріат.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2. Проводити комплекс спортивно-масових заходів до&nbsp;загально-державних, галузевих свят, свят міст, свят національної гвардії України, заходів національно-патріотичного виховання молоді.</td>\r\n			<td>Постійно</td>\r\n			<td>Президія, регіональні, районі федерації, секції та клуби.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3. Проводити роботу по&nbsp;створенню батьківських та&nbsp;тренерських рад колективів спортивних клубів, секцій, закладів позашкільної освіти тощо.</td>\r\n			<td>Постійно</td>\r\n			<td>Керівні органи клубів, секцій, закладів ПО</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4. Здійснювати заходи щодо відкриття відділень кікбоксингу &laquo;ІСКА&raquo; в&nbsp;регіонах України та&nbsp;закладах позашкільної освіти.</td>\r\n			<td>Постійно</td>\r\n			<td>Президія, територіальні та районі організації</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5. Сприяти формуванню системи спортивних клубів, секцій, закладів позашкільної освіти, як&nbsp;передумови ефективного розвитку кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні, в&nbsp;нових соціально-економічних умовах.</td>\r\n			<td>Постійно</td>\r\n			<td>Президія, територіальні та районі організації.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6. Вести національно-патріотичне виховання серед спортсменів різних вікових груп.</td>\r\n			<td>Постійно</td>\r\n			<td>Президія, територіальні та&nbsp;районі організації ГО&nbsp;ФКУ&quot;ІСКА&quot;, клуби, заклади&nbsp;ПО.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>7. Забезпечувати укладання двосторонніх договорів про співпрацю між територіальними осередками та місцевими органами з питань розвитку фізичної культури та спорту.</td>\r\n			<td>На протязі року.</td>\r\n			<td>Президія, територіальні організації.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8. Проводити роботу по&nbsp;вдосконаленню та&nbsp;розвитку інфраструктури з&nbsp;кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні, областях, та&nbsp;містах України.</td>\r\n			<td>Регулярно</td>\r\n			<td>Президія, територіальні та&nbsp;районі організації ГОФКУ&quot;ІСКА&quot;, клуби, заклади</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><b>3. Спорт вищих досягнень</b></p>\r\n\r\n<table border="1" cellpadding="6" cellspacing="0" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<th width="60%">Заходи</th>\r\n			<th width="20%">Період</th>\r\n			<th width="20%">Відповідальні</th>\r\n		</tr>\r\n		<tr>\r\n			<td>1. Забезпечувати на&nbsp;рівні сучасних вимог підготовку резерву національної збірної команди України з&nbsp;кікбоксингу &laquo;ІСКА&raquo; її&nbsp;успішний виступ на&nbsp;чемпіонатах та&nbsp;першостях світу, Кубках світу та&nbsp;Європи.</td>\r\n			<td>Щороку</td>\r\n			<td>Президія, регіональні федерації.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2. Проводити роботу по&nbsp;розвитку естетичних, вольових та&nbsp;морально-етичних здібностей членів збірної команди України та&nbsp;заходи національно-патріотичного виховання молоді.</td>\r\n			<td>Постійно</td>\r\n			<td>Президія, регіональні федерації , тренери &mdash;викладачі.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3. Проводити всеукраїнські заходи з&nbsp;кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні згідно річного плану-календаря.</td>\r\n			<td>Згідно плану-календаря.</td>\r\n			<td>Президія, регіональні федерації.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4. Пропонувати та&nbsp;реалізувати систему відбору формування основного складу збірної команди, кандидатів в&nbsp;збірну команду, резерву збірної команди України з&nbsp;кікбоксингу &quot; ІСКА&quot;.</td>\r\n			<td>На протязі року.</td>\r\n			<td>Президія, регіональні федерації, тренери &mdash;викладачі.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5. Визначати рейтинг кращих спортсменів, тренерів, суддів на&nbsp;основі результатів участі у змаганнях.</td>\r\n			<td>На протязі року.</td>\r\n			<td>Президія, секретаріат.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6. Регулярно підвищувати професійний рівень спортсменів, тренерів та&nbsp;суддів шляхом проведення семінарів, курсів та&nbsp;конференцій.</td>\r\n			<td>На протязі року.</td>\r\n			<td>Президія, регіональні федерації, Суддівська колегія.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>7. Своєчасно та&nbsp;регулярно піклуватися про присвоєння класифікаційних звань, тренерських та&nbsp;суддівських категорій.</td>\r\n			<td>На протязі року.</td>\r\n			<td>Президія, регіональні федерації, секретаріат.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8. Проводити НТЗ для збірної команди України серед дорослих, юніорів, юнаків.</td>\r\n			<td>На протязі року.</td>\r\n			<td>Президія, регіональні федерації, тренерська рада</td>\r\n		</tr>\r\n		<tr>\r\n			<td>9. Сприяти виїзду збірної команди України з&nbsp;кікбоксингу &laquo;ІСКА&raquo; на&nbsp;офіційні чемпіонати світу, Кубки світу та&nbsp;Європи.</td>\r\n			<td>Постійно</td>\r\n			<td>Президія, регіональні федерації, тренерська рада</td>\r\n		</tr>\r\n		<tr>\r\n			<td>10. Призначити кваліфікованих головних тренерів до дорослої, молодіжної та юнацької збірної команди України.</td>\r\n			<td>Постійно</td>\r\n			<td>Президія, регіональні федерації, тренерська рада</td>\r\n		</tr>\r\n		<tr>\r\n			<td>11. Співпрацювати з&nbsp;міжнародною організацією з&nbsp;метою розширення представництва суддів від України в&nbsp;суддівській колегії офіційних чемпіонатів світу, Кубків світу з&nbsp;кікбоксингу &laquo;ІСКА&raquo; .</td>\r\n			<td>Постійно</td>\r\n			<td>Президія, регіональні федерації, Колегія суддів</td>\r\n		</tr>\r\n		<tr>\r\n			<td>12. Направляти суддів кікбоксингу &laquo;ІСКА&raquo; України вищої категорії на&nbsp;Семінари суддів міжнародних організацій для отримання відповідних суддівських категорій.</td>\r\n			<td>Щороку</td>\r\n			<td>Президія, регіональні федерації, Колегія суддів</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><b>4. Кадрове забезпечення.</b></p>\r\n\r\n<table border="1" cellpadding="6" cellspacing="0" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<th width="60%">Заходи</th>\r\n			<th width="20%">Період</th>\r\n			<th width="20%">Відповідальні</th>\r\n		</tr>\r\n		<tr>\r\n			<td>1. Проводити моніторинг державних та&nbsp;регіональних потреб у&nbsp;кваліфікованих кадрах в&nbsp;кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні.</td>\r\n			<td>Весь період</td>\r\n			<td>Президія</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2. Забезпечувати атестацію спеціалістів по&nbsp;кікбоксингу та&nbsp;лицензування тренерів з&nbsp;кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні .</td>\r\n			<td>Весь період</td>\r\n			<td>Президія</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3. Проводити роботу по&nbsp;профорієнтації серед спортсменів, які закінчили активні заняття кікбоксингом з&nbsp;подальшим залученням на&nbsp;тренерську роботу.</td>\r\n			<td>Весь період</td>\r\n			<td>Президія</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4. Проводити удосконалення знань тренерів по&nbsp;високоякісній підготовці спортсменів з&nbsp;досвіду вихователів Національного університету фізичного виховання і&nbsp;спорту України.</td>\r\n			<td>Весь період</td>\r\n			<td>Президія</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5. Проводити обмін досвідом між тренерами по&nbsp;ефективному застосуванню особистих методів підготовки спортсменів.</td>\r\n			<td>Весь період</td>\r\n			<td>Президія</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6. Залучення спортсменів та&nbsp;тренерів до&nbsp;серії лекцій з&nbsp;історії України відділу національно-патріотичного виховання Міністерства молоді та&nbsp;спорту України.</td>\r\n			<td>Весь період</td>\r\n			<td>Президія</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><b>5. Матеріально-технічне забезпечення.</b></p>\r\n\r\n<table border="1" cellpadding="6" cellspacing="0" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<th width="60%">Заходи</th>\r\n			<th width="20%">Період</th>\r\n			<th width="20%">Відповідальні</th>\r\n		</tr>\r\n		<tr>\r\n			<td>1. Створити на&nbsp;рівні сучасних вимог спортивну базу для підготовки Національної збірної команди України.</td>\r\n			<td>Весь період</td>\r\n			<td>Президія</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2. Створити належні умови для проведення всеукраїнських змагань.</td>\r\n			<td>Весь період</td>\r\n			<td>Президія</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3. Вивчити можливість щодо відкриття в&nbsp;регіонах України спеціалізованих залів з&nbsp;кікбоксингу &laquo;ІСКА&raquo;.</td>\r\n			<td>Весь період</td>\r\n			<td>Президія</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4. Постійно проводити роботу по&nbsp;залученню спонсорів для фінансування спортивної діяльності Національної збірної команди України з&nbsp;кікбоксингу &laquo;ІСКА&raquo;.</td>\r\n			<td>Весь період</td>\r\n			<td>Президія</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><b>6. Інформаційно&nbsp;&mdash; методичне забезпечення</b></p>\r\n\r\n<table border="1" cellpadding="6" cellspacing="0" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<th width="60%">Заходи</th>\r\n			<th width="20%">Період</th>\r\n			<th width="20%">Відповідальні</th>\r\n		</tr>\r\n		<tr>\r\n			<td>1. Розмістити в&nbsp;мережі Інтернет, на&nbsp;сайті, повну інформаційну базу усіх аспектів діяльності з&nbsp;кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні у&nbsp;тому числі:&nbsp;<br />\r\n			&mdash;&nbsp;коротка історія розвитку;<br />\r\n			&mdash;&nbsp;правила проведення змагань;<br />\r\n			&mdash;&nbsp;інформація про керівні органи;<br />\r\n			&mdash;&nbsp;каталог обласних осередків;<br />\r\n			&mdash;&nbsp;рішення керівного органу; Інша інформація.</td>\r\n			<td>Весь період</td>\r\n			<td>Президія</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2. Зобов&rsquo;язати всі регіональні осередки , які є&nbsp;членами ГО&nbsp;&laquo;Федерація кікбоксингу України &laquo;ІСКА&raquo; відкрити електронну адресу&nbsp;&mdash; е-mail в&nbsp;мережі Інтернет .</td>\r\n			<td>Весь період</td>\r\n			<td>Президія, регіональні федерації.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3. Готувати та&nbsp;розміщувати на&nbsp;сайті в&nbsp;мережі Інтернет:<br />\r\n			&mdash;&nbsp;календарі змагань;<br />\r\n			&mdash;&nbsp;регламенти чемпіонатів та&nbsp;Кубків України;<br />\r\n			&mdash;&nbsp;рейтингових змагань;<br />\r\n			&mdash;&nbsp;оперативно оновлені рейтинги спортсменів України;<br />\r\n			&mdash;&nbsp;оновлені запрошення на&nbsp;змагання;<br />\r\n			&mdash;&nbsp;інша важлива інформація.</td>\r\n			<td>Весь період</td>\r\n			<td>Президія</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4. Створення та&nbsp;розвиток системи взаємодії з&nbsp;середніми учбовими закладами по&nbsp;масовому залученню дітей та&nbsp;молоді до&nbsp;занять з&nbsp;кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні, як&nbsp;на&nbsp;початковому так і&nbsp;нарівні поступового зростання спортивної</td>\r\n			<td>Весь період</td>\r\n			<td>Президія</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5. Розробляти поліграфічну, нагородну та&nbsp;рекламну продукцію ГО&nbsp;&laquo;Федерація кікбоксингу України &laquo;ІСКА&raquo;.</td>\r\n			<td>Весь період</td>\r\n			<td>Президія</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6. Висвітлювати репортажі щодо спортивних змагань в&nbsp;журналах та&nbsp;газетах України, Інтернеті тощо.</td>\r\n			<td>Весь період</td>\r\n			<td>Президія</td>\r\n		</tr>\r\n		<tr>\r\n			<td>7. Забезпечувати програмним жеребкуванням учасників Всеукраїнських, обласних, міських, рейтингових змагань в&nbsp;містах проведення змагань.</td>\r\n			<td>Весь період</td>\r\n			<td>Президія, секретаріат.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><b>7. Науково-методичне та медико-біологічне забезпечення.</b></p>\r\n\r\n<table border="1" cellpadding="6" cellspacing="0" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<th width="60%">Заходи</th>\r\n			<th width="20%">Період</th>\r\n			<th width="20%">Відповідальні</th>\r\n		</tr>\r\n		<tr>\r\n			<td>1. Проводити роботу щодо медико-біологічного забезпечення членів збірної команди України з&nbsp;кікбоксингу &laquo;ІСКА&raquo;.</td>\r\n			<td>Весь період</td>\r\n			<td>Президія, Центр спортивної медицини (Київ)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2. Проводити медичне страхування спортсменів</td>\r\n			<td>Весь період</td>\r\n			<td>Президія, регіональні федерації, місцеві федерації</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3. Підготувати видання на&nbsp;державній мові методичних підручників та&nbsp;посібників з&nbsp;кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні відео-, аудіо- продукції на&nbsp;допомогу молодим тренерам, суддям, спортсменам.</td>\r\n			<td>Весь період</td>\r\n			<td>Президія, секретаріат.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3. Підготувати видання на&nbsp;державній мові методичних підручників та&nbsp;посібників з&nbsp;кікбоксингу &laquo;ІСКА&raquo; в&nbsp;Україні відео-, аудіо- продукції на&nbsp;допомогу молодим тренерам, суддям, спортсменам.</td>\r\n			<td>Весь період</td>\r\n			<td>Президія, секретаріат.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4. Забезпечити закріплення всіх провідних спортсменів - членів Національної збірної команди України з кікбоксингу &laquo;ІСКА&raquo; за регіональними лікарсько-фізкультурними диспансерами.</td>\r\n			<td>Весь період</td>\r\n			<td>Органи виконавчої влади фізкультури та спорту, Президія, регіональні федерації та&nbsp;Центр спортивної медицини (Київ)</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(4) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `data_create` date NOT NULL,
  `data_update` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`, `name`, `email`, `role`, `data_create`, `data_update`) VALUES
(1, 'admin', '111111', 'Dima', 'admin@mail.ru', 'admin', '2016-04-21', ''),
(2, 'demo', 'demo', 'Demo', 'demo@ukr.net', 'admin', '2016-04-07', '2016-04-28'),
(3, 'test2', '111111', 'test2', 'test2@ukr.net', 'manager', '2016-04-22', '2016-04-25'),
(4, '111', '111111', '111', 'dima@ukr.net', 'admin', '2016-06-17', '');

-- --------------------------------------------------------

--
-- Структура таблицы `banners`
--

CREATE TABLE `banners` (
  `id` int(4) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `path` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `sort` int(3) NOT NULL DEFAULT '1',
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `banners`
--

INSERT INTO `banners` (`id`, `title`, `link`, `text`, `path`, `img`, `sort`, `status`) VALUES
(1, '', '/news/international/10', 'Гідний виступ збірної команди України на Чемпіонаті Світу по кікбоксингу в Німеччині, Штутгарт. 17 – 22 травня 2016 року', '/upload/slider/', '6310656579ef.jpg', 5, 1),
(3, '', '/news/ukrainian/11', 'Відкриті, обласні змагання з кікбоксингу ІСКА до "Дня захисту дітей" 21-22 травня  2016 року  м.Харків.', '/upload/slider/', '2ed34a1327f9.jpg', 1, 1),
(4, '', '/news/ukrainian/7', 'Всеукраїнські змагання з кікбоксингу ІСКА "Пам’яті героїв - кременчужан, загиблих в зоні АТО"  13-14.02.2016 року м. Кременчук.', '/upload/slider/', '4d1b71cb9ccf.jpg', 2, 1),
(5, '', '/news/ukrainian/8', 'Чемпіонат України з кікбоксингу ISKA серед юніорів та юнаків 10-13.03.2016 року, м. Київ', '/upload/slider/', '194405bda05f.jpg', 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `data_create` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `text`, `author`, `data_create`) VALUES
(1, 'Равным образом сложившаяся структура организации требуют от нас анализа', '<p>Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс</p>\r\n', '<p>Таким образом начало повседневной работы по формированию позиции требуют определения и уточнения форм развития. Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач. Повседневная практика показывает, что рамки и место обучения кадров представляет собой интересный эксперимент проверки новых предложений. Задача организации, в особенности же постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные задания по разработке позиций, занимаемых участниками в отношении поставленных задач. Повседневная практика показывает, что рамки и место обучения кадров способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач. Равным образом сложившаяся структура организации требуют от нас анализа систем массового участия. Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач. Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение новых предложений. Идейные соображения высшего порядка, а также новая модель организационной деятельности требуют определения и уточнения модели развития. Таким образом укрепление и развитие структуры позволяет выполнять важные задания по разработке новых предложений.</p>\r\n', 'Антон.Н', '2016-04-20'),
(2, 'Повседневная практика показывает, что новая модель организационной ', 'Задача организации, в особенности же рамки и место обучения кадров требуют определения и уточнения дальнейших направлений развития. Товарищи! новая модель организационной деятельности требуют определения и уточнения модели развития.', 'Повседневная практика показывает, что новая модель организационной деятельности играет важную роль в формировании существенных финансовых и административных условий. Равным образом постоянный количественный рост и сфера нашей активности влечет за собой процесс внедрения и модернизации новых предложений. Таким образом начало повседневной работы по формированию позиции влечет за собой процесс внедрения и модернизации существенных финансовых и административных условий. Не следует, однако забывать, что укрепление и развитие структуры позволяет оценить значение модели развития. Не следует, однако забывать, что постоянный количественный рост и сфера нашей активности требуют от нас анализа направлений прогрессивного развития. Задача организации, в особенности же постоянный количественный рост и сфера нашей активности способствует подготовки и реализации систем массового участия.', 'Дмитрий. В', '2016-03-25'),
(3, 'Повседневная практика показывает, что новая модель организационной деятельности', 'Идейные соображения высшего порядка, а также консультация с широким активом позволяет выполнять важные задания по разработке', 'Идейные соображения высшего порядка, а также консультация с широким активом позволяет выполнять важные задания по разработке систем массового участия. Разнообразный и богатый опыт постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные задания по разработке системы обучения кадров, соответствует насущным потребностям.\r\n\r\nПовседневная практика показывает, что новая модель организационной деятельности требуют от нас анализа дальнейших направлений развития. С другой стороны рамки и место обучения кадров позволяет выполнять важные задания по разработке форм развития. С другой стороны дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач. Товарищи! консультация с широким активом в значительной степени обуславливает создание форм развития.', 'Ольга. И', '2016-02-15'),
(4, 'Значимость этих проблем настолько очевидна, что укрепление ', 'Разнообразный и богатый опыт постоянный количественный рост и сфера нашей активности обеспечивает широкому кругу (специалистов)', 'Разнообразный и богатый опыт постоянный количественный рост и сфера нашей активности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений. Задача организации, в особенности же постоянное информационно-пропагандистское обеспечение нашей деятельности способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач.\r\n\r\nЗначимость этих проблем настолько очевидна, что укрепление и развитие структуры позволяет выполнять важные задания по разработке форм развития. Разнообразный и богатый опыт сложившаяся структура организации требуют определения и уточнения соответствующий условий активизации. Идейные соображения высшего порядка, а также рамки и место обучения кадров позволяет оценить значение форм развития. Таким образом дальнейшее развитие различных форм деятельности позволяет выполнять важные задания по разработке модели развития. Задача организации, в особенности же укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании модели развития. Идейные соображения высшего порядка, а также новая модель организационной деятельности играет важную роль в формировании существенных финансовых и административных условий.', 'Антон.Н', '2016-03-29'),
(5, 'Равным образом новая модель организационной деятельности позволяет', 'Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности в', 'Равным образом новая модель организационной деятельности позволяет оценить значение новых предложений. Повседневная практика показывает, что начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки дальнейших направлений развития. Повседневная практика показывает, что дальнейшее развитие различных форм деятельности представляет собой интересный эксперимент проверки модели развития. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации форм развития. Задача организации, в особенности же постоянный количественный рост и сфера нашей активности требуют от нас анализа существенных финансовых и административных условий.\r\n\r\nПовседневная практика показывает, что постоянный количественный рост и сфера нашей активности в значительной степени обуславливает создание форм развития. Повседневная практика показывает, что постоянное информационно-пропагандистское обеспечение нашей деятельности в значительной степени обуславливает создание модели развития. Задача организации, в особенности же сложившаяся структура организации требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач. Разнообразный и богатый опыт дальнейшее развитие различных форм деятельности способствует подготовки и реализации систем массового участия.', 'Антон.Н', '2016-01-15'),
(6, 'Не следует, однако забывать, что постоянный количественный ', '<p>Товарищи! начало повседневной работы по формированию позиции в значительной степени обуславливает</p>\r\n', '<p>Таким образом рамки и место обучения кадров способствует подготовки и реализации соответствующий условий активизации. Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции позволяет оценить значение соответствующий условий активизации. Идейные соображения высшего порядка, а также реализация намеченных плановых заданий требуют определения и уточнения систем массового участия. Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Значимость этих проблем настолько очевидна, что сложившаяся структура организации способствует подготовки и реализации направлений прогрессивного развития. Значимость этих проблем настолько очевидна, что консультация с широким активом способствует подготовки и реализации новых предложений. Не следует, однако забывать, что постоянный количественный рост и сфера нашей активности влечет за собой процесс внедрения и модернизации модели развития. Товарищи! начало повседневной работы по формированию позиции в значительной степени обуславливает создание соответствующий условий активизации.</p>\r\n', 'Дмитрий. В', '2016-04-25');

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `title`, `path`, `img`, `status`) VALUES
(2, 'Харьков', '/upload/events/', '48f3fa02ba71.png', 1),
(3, 'Титульний бій з кікбоксингу ISKA', '/upload/events/', '575d741628e4.jpg', 1),
(4, 'Чемпіонат світу 2016', '/upload/events/', '7a297722edcd.jpg', 1),
(5, 'Чемпіонат світу 2016', '/upload/events/', 'd47fd61d3265.jpg', 1),
(6, 'ISKA UKRAINE NATIONAL  TITLE SEMI-PRO FULL', '/upload/events/', '2ed7d846be8b.jpg', 1),
(7, 'U.S Open', '/upload/events/', '27f2aa9c9bdc.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `federation`
--

CREATE TABLE `federation` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `federation`
--

INSERT INTO `federation` (`id`, `category`, `text`) VALUES
(1, '', '<h1 style="text-align: center">ФЕДЕРАЦІЯ КІКБОКСИНГУ УКРАЇНИ &laquo;ІСКА&raquo;</h1>\r\n\r\n<table border="1" cellpadding="15" cellspacing="0" style="border-collapse: collapse; text-align: left; margin-top: 50px; margin-bottom: 300px" width="100%">\r\n	<tbody>\r\n		<tr style="background: #0e7add; color: #fff;">\r\n			<th>Посада</th>\r\n			<th style="text-align: left">Прізвище, Ім&#39;я</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Президент</td>\r\n			<td>&nbsp;Мандзюк Олег Андрійович</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Перший віце-президент</td>\r\n			<td>&nbsp;Дорошенко Віктор Олександрович</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Віце-президент</td>\r\n			<td>&nbsp;Володченко Олександр Анатолійович</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Віце-президент</td>\r\n			<td>&nbsp;Дворецький Геннадій Єдуардович</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Віце-президент</td>\r\n			<td>&nbsp;Ящук Володимир Сергійович</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(2, '', '<h1>Календарний план ISKA<br />\r\nза період від 01.01.2016 до 31.12.2016</h1>\r\n\r\n<table border="1" bordercolor="#aaa" cellpadding="15" class="calendar-table" width="100%">\r\n	<thead>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Н а з в а</td>\r\n			<td>Строк початку / закінчення</td>\r\n			<td>Місце-проведення</td>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr style="background: #ccddff;">\r\n			<td>1</td>\r\n			<td>Всеукраїнські змагання &quot;Пам&rsquo;яті героїв- кременчужан загиблих в зоні<br />\r\n			<br />\r\n			Титульний бій за звання ISKA-України Про АТО&quot;<br />\r\n			К-1 63.5 кг</td>\r\n			<td>13.02.16<br />\r\n			14.02.16<br />\r\n			<br />\r\n			<br />\r\n			14.02.16</td>\r\n			<td>м.Кременчук , Полтавська обл.<br />\r\n			<br />\r\n			м.Кременчук , Полтавська обл.</td>\r\n		</tr>\r\n		<tr style="background: #ccddff;">\r\n			<td>2</td>\r\n			<td>Чемпіонат України ISKA серед юніорів, юнаків та дітей<br />\r\n			<br />\r\n			Титульний бій за звання чемпіон України з кікбоксингу ISKA SEMI-PRO FULL 85 кг</td>\r\n			<td>10.03.16<br />\r\n			13.03.16<br />\r\n			<br />\r\n			<br />\r\n			13.03.16</td>\r\n			<td>м.Київ<br />\r\n			<br />\r\n			<br />\r\n			м.Київ</td>\r\n		</tr>\r\n		<tr style="background: #ccddff;">\r\n			<td>3</td>\r\n			<td>Чемпіонат України ISKA K-1серед дорослих, K-1 лайт серед юніорів та юнаків</td>\r\n			<td>07.04.16<br />\r\n			10.04.16</td>\r\n			<td>м.Харків</td>\r\n		</tr>\r\n		<tr style="background: #ccddff;">\r\n			<td>4</td>\r\n			<td><span style="color: red">Чемпіонат світу ISKA AMA </span><br />\r\n			(дорослі, юніори, юнаки)</td>\r\n			<td>17.05.16<br />\r\n			22.05.16</td>\r\n			<td><span style="color: red">м.Штутгарт</span>,<br />\r\n			Німеччина</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5</td>\r\n			<td><span style="color: red">Чемпіонат світу ISKA</span><br />\r\n			&quot;самозахист&quot;<br />\r\n			та <span style="color: red">Кубок US Open</span></td>\r\n			<td>08.07.16<br />\r\n			10.07.16</td>\r\n			<td><span style="color: red">м.Орландо</span>,<br />\r\n			США</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6</td>\r\n			<td>Чемпіонат України ISKA - серед юніорів, старших юнаків та юнаків</td>\r\n			<td>20.10.16<br />\r\n			23.07.16</td>\r\n			<td>м. Харків</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(3, '', '<h1 style="text-align: center">ФЕДЕРАЦІЯ КІКБОКСИНГУ УКРАЇНИ &laquo;ІСКА&raquo;</h1>\r\n\r\n<table border="1" cellpadding="10" cellspacing="0" class="table-hover-tr" style="border-collapse: collapse; margin-top: 40px; margin-bottom: 400px; text-align: center" width="100%">\r\n	<tbody>\r\n		<tr style="background: #0e7add; color: #fff;">\r\n			<th>№</th>\r\n			<th colspan="2">Назва розділів</th>\r\n		</tr>\r\n		<tr>\r\n			<td style="text-align: center" width="50px">1</td>\r\n			<td width="50%">Пойнт Спаринг</td>\r\n			<td width="50%">Point Sparring</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="text-align: center">2</td>\r\n			<td>Пойнт Хард Спаринг</td>\r\n			<td>Point Hard Sparring</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="text-align: center">3</td>\r\n			<td>Форми</td>\r\n			<td>Forms</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="text-align: center">4</td>\r\n			<td>Лайт-Контакт</td>\r\n			<td>Light - Contact</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="text-align: center">5</td>\r\n			<td>K-1 Лайт Кік</td>\r\n			<td>K-1 Light Kick</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="text-align: center">6</td>\r\n			<td>Фул-Контакт</td>\r\n			<td>Full - Contact</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="text-align: center">7</td>\r\n			<td>Кікбоксинг з Лоу Кік</td>\r\n			<td>Kickboxing with Low-Kick</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="text-align: center">8</td>\r\n			<td>К-1</td>\r\n			<td>K-1</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="text-align: center">9</td>\r\n			<td>ММА</td>\r\n			<td>MMA</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="text-align: center">10</td>\r\n			<td>Селф Дефенс</td>\r\n			<td>Self Defense</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(4, '', '<p style="text-align: right"><a download="" href="/upload/docs/regulations.docx">Скачать регламент</a></p>\r\n\r\n<p><img alt="" src="/upload/images/position-1.jpg" width="660" /></p>\r\n\r\n<p><img alt="" src="/upload/images/position-2.jpg" width="660" /></p>\r\n\r\n<p><img alt="" src="/upload/images/position-3.jpg" width="660" /></p>\r\n\r\n<p><img alt="" src="/upload/images/position-4.jpg" width="660" /></p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `federation_position`
--

CREATE TABLE `federation_position` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `path` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `federation_position`
--

INSERT INTO `federation_position` (`id`, `title`, `path`, `file`) VALUES
(3, 'Ghbdtn', '/upload/docs/', '42e33ce1a3e6.jpg'),
(5, 'LF LF LF', '/upload/docs/', '081d7a9ee13b.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `ips`
--

CREATE TABLE `ips` (
  `ip_id` int(12) NOT NULL,
  `ip_address` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AVG_ROW_LENGTH=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `ips`
--

INSERT INTO `ips` (`ip_id`, `ip_address`) VALUES
(23, '127.0.0.1');

-- --------------------------------------------------------

--
-- Структура таблицы `list_album`
--

CREATE TABLE `list_album` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `sort` int(5) NOT NULL,
  `path` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `archive` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `list_album`
--

INSERT INTO `list_album` (`id`, `title`, `sort`, `path`, `img`, `archive`) VALUES
(1, 'м. Льорет де Мар ( Коста Брава, Іспанія ) 30 квітня – 04 травня 2014', 0, '/upload/media/photo/', '1.jpg', 1),
(2, 'м. Партімао (Португалія) 29 квітня – 02 травня 2015', 1, '/upload/media/photo/', '2.jpg', 1),
(3, 'Всеукраїнські змагання з кікбоксингу ІСКА "Пам’яті героїв - кременчужан, загиблих в зоні АТО". 13-14.02.2016 року м. Кременчук.', 2, '/upload/media/photo/', '3.jpg', 0),
(4, 'Чемпіонат України з кікбоксингу ISKA серед юніорів та юнаків м.Київ 10 – 13 березня 2016', 3, '/upload/media/photo/', '4.jpg', 0),
(5, 'Бій за титул "Чемпіон України з кікбоксингу ISKA SEMI-PRO FULL 85 кг, м.Київ 10 – 13 березня 2016', 4, '/upload/media/photo/', '5.jpg', 0),
(6, 'Чемпіонат України ISKA м.Харків 07 – 10 квітня 2016', 5, '/upload/media/photo/', '6.jpg', 0),
(7, 'м.Штутгарт (Німеччина) 17 – 23 травня 2016', 6, '/upload/media/photo/', '7.jpg', 0),
(8, 'м.Харків. 21-22 травня  2016 року. Відкриті, обласні змагання з кікбоксингу ІСКА до Дня захисту дітей', 7, '/upload/media/photo/', '8.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `media_photo`
--

CREATE TABLE `media_photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_album` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `media_photo`
--

INSERT INTO `media_photo` (`id`, `id_album`, `path`, `img`) VALUES
(1, 1, '/upload/media/photo/1/', 'e73ac545dbaf.jpg'),
(2, 1, '/upload/media/photo/1/', 'a937feb8b19d.jpg'),
(3, 1, '/upload/media/photo/1/', '4f7269b46053.jpg'),
(4, 1, '/upload/media/photo/1/', 'adf7d5dbd794.jpg'),
(5, 1, '/upload/media/photo/1/', '79d5a014469d.jpg'),
(6, 1, '/upload/media/photo/1/', 'e20602fdd70e.jpg'),
(7, 1, '/upload/media/photo/1/', '70bf61e832b1.jpg'),
(8, 1, '/upload/media/photo/1/', 'c67621d5a720.jpg'),
(9, 1, '/upload/media/photo/1/', 'e4c9e1ab426b.jpg'),
(10, 1, '/upload/media/photo/1/', '2c0d60b36259.jpg'),
(11, 1, '/upload/media/photo/1/', '7f38814b99ef.jpg'),
(12, 1, '/upload/media/photo/1/', '0ac280cb4bef.jpg'),
(13, 1, '/upload/media/photo/1/', '6575166478e5.jpg'),
(14, 1, '/upload/media/photo/1/', '54770ff278e3.jpg'),
(15, 1, '/upload/media/photo/1/', 'e7ca4fb41632.jpg'),
(16, 1, '/upload/media/photo/1/', '64205dd51526.jpg'),
(17, 1, '/upload/media/photo/1/', 'c1ac87a4b29d.jpg'),
(18, 1, '/upload/media/photo/1/', '86f9ef910b27.jpg'),
(19, 1, '/upload/media/photo/1/', 'adb15a9ffd76.jpg'),
(20, 1, '/upload/media/photo/1/', '625a8cb704c2.jpg'),
(21, 1, '/upload/media/photo/1/', '50ad2980e0de.jpg'),
(22, 1, '/upload/media/photo/1/', 'f4ea0fdba962.jpg'),
(23, 1, '/upload/media/photo/1/', '7878e13e1bca.jpg'),
(24, 1, '/upload/media/photo/1/', '535095b2a4f2.jpg'),
(25, 1, '/upload/media/photo/1/', '43a7040da36b.jpg'),
(26, 1, '/upload/media/photo/1/', '286ae7864431.jpg'),
(27, 1, '/upload/media/photo/1/', 'fe222d8728bd.jpg'),
(28, 1, '/upload/media/photo/1/', 'bd7f30a77ef9.jpg'),
(29, 1, '/upload/media/photo/1/', '6a5590becf23.jpg'),
(30, 1, '/upload/media/photo/1/', 'c2a42b43723e.jpg'),
(31, 1, '/upload/media/photo/1/', '2ac47a6bbb54.jpg'),
(32, 1, '/upload/media/photo/1/', '874d281517b5.jpg'),
(33, 1, '/upload/media/photo/1/', '96b57b0d3071.jpg'),
(34, 1, '/upload/media/photo/1/', '56352453dad1.jpg'),
(35, 1, '/upload/media/photo/1/', '2b75e739a923.jpg'),
(36, 1, '/upload/media/photo/1/', '3ae382a02572.jpg'),
(37, 1, '/upload/media/photo/1/', '84a0022a2db2.jpg'),
(38, 1, '/upload/media/photo/1/', '35ece6f503ec.jpg'),
(39, 1, '/upload/media/photo/1/', 'dfb419bdad43.jpg'),
(40, 1, '/upload/media/photo/1/', 'fa14ae0c8b4f.jpg'),
(41, 1, '/upload/media/photo/1/', '1209bc2721c7.jpg'),
(42, 2, '/upload/media/photo/2/', '6c1f3fecd36c.jpg'),
(43, 2, '/upload/media/photo/2/', '54678a09a619.jpg'),
(44, 2, '/upload/media/photo/2/', '506468bba468.jpg'),
(45, 2, '/upload/media/photo/2/', '243347f2f7a6.jpg'),
(46, 2, '/upload/media/photo/2/', 'b8de1d631181.jpg'),
(47, 2, '/upload/media/photo/2/', '1f565653f3f2.jpg'),
(48, 2, '/upload/media/photo/2/', '3b503b615770.jpg'),
(49, 2, '/upload/media/photo/2/', '797fde1e04a8.jpg'),
(50, 2, '/upload/media/photo/2/', 'ba49aa7e49e0.jpg'),
(51, 2, '/upload/media/photo/2/', 'd134e40ff9d2.jpg'),
(52, 2, '/upload/media/photo/2/', '4dc9d5affa12.jpg'),
(53, 2, '/upload/media/photo/2/', '5c82da575f84.jpg'),
(54, 2, '/upload/media/photo/2/', '00eccbb45081.jpg'),
(55, 2, '/upload/media/photo/2/', '3343f10d008d.jpg'),
(56, 2, '/upload/media/photo/2/', '2a3c9d0d31b4.jpg'),
(57, 2, '/upload/media/photo/2/', '10f804b14dd7.jpg'),
(58, 2, '/upload/media/photo/2/', '032f81c685e0.jpg'),
(60, 2, '/upload/media/photo/2/', '63c43011dc02.jpg'),
(61, 2, '/upload/media/photo/2/', 'a1d35d8765e2.jpg'),
(62, 2, '/upload/media/photo/2/', '9d40554de717.jpg'),
(63, 2, '/upload/media/photo/2/', 'eb5e34b3711a.jpg'),
(64, 2, '/upload/media/photo/2/', '334a5941d969.jpg'),
(65, 2, '/upload/media/photo/2/', 'f2d2f1b453fe.jpg'),
(66, 2, '/upload/media/photo/2/', '21a2e6083768.jpg'),
(67, 2, '/upload/media/photo/2/', 'db434a0275eb.jpg'),
(68, 2, '/upload/media/photo/2/', 'fccc8e2da53f.jpg'),
(69, 2, '/upload/media/photo/2/', 'cd0e579378cc.jpg'),
(70, 2, '/upload/media/photo/2/', '0af02d609cc9.jpg'),
(71, 2, '/upload/media/photo/2/', 'e3e7037e3c00.jpg'),
(72, 2, '/upload/media/photo/2/', 'ce1066a98299.jpg'),
(73, 2, '/upload/media/photo/2/', '3c53deaca391.jpg'),
(74, 2, '/upload/media/photo/2/', 'a31689f956bb.jpg'),
(75, 2, '/upload/media/photo/2/', 'd943daff62c4.jpg'),
(76, 2, '/upload/media/photo/2/', '7c215f16cf6f.jpg'),
(78, 2, '/upload/media/photo/2/', 'c845def67281.jpg'),
(79, 2, '/upload/media/photo/2/', '54d467042627.jpg'),
(80, 2, '/upload/media/photo/2/', '85fb3be1de91.jpg'),
(81, 2, '/upload/media/photo/2/', '98a6109a1e51.jpg'),
(82, 2, '/upload/media/photo/2/', '5a6e1f23e73b.jpg'),
(83, 2, '/upload/media/photo/2/', 'f3fa75ba67bc.jpg'),
(84, 2, '/upload/media/photo/2/', '075afffe75f2.jpg'),
(85, 2, '/upload/media/photo/2/', '34124533a54b.jpg'),
(86, 3, '/upload/media/photo/3/', '4fec3cb6939d.jpg'),
(87, 3, '/upload/media/photo/3/', 'a0265d64b337.jpg'),
(88, 3, '/upload/media/photo/3/', '392589e0d0b8.jpg'),
(89, 3, '/upload/media/photo/3/', '62799c368ebf.jpg'),
(90, 3, '/upload/media/photo/3/', 'fe985f8d201f.jpg'),
(91, 3, '/upload/media/photo/3/', '940f58f635c0.jpg'),
(92, 3, '/upload/media/photo/3/', 'a732e1802f0b.jpg'),
(93, 3, '/upload/media/photo/3/', '04490683c099.jpg'),
(94, 3, '/upload/media/photo/3/', 'c66df01680a5.jpg'),
(95, 3, '/upload/media/photo/3/', '60bdd7de77ab.jpg'),
(96, 3, '/upload/media/photo/3/', '07daf42ef811.jpg'),
(97, 3, '/upload/media/photo/3/', '50cd71a965f1.jpg'),
(98, 3, '/upload/media/photo/3/', 'fb3c7b2ecffe.jpg'),
(99, 3, '/upload/media/photo/3/', '401643623f6e.jpg'),
(100, 4, '/upload/media/photo/4/', '9f6207f2ece9.jpg'),
(101, 4, '/upload/media/photo/4/', '2b0c63cd1580.jpg'),
(102, 4, '/upload/media/photo/4/', '4ed1a6223dca.jpg'),
(103, 4, '/upload/media/photo/4/', '48686b5d3e4e.jpg'),
(104, 4, '/upload/media/photo/4/', 'e5c13e3ec0db.jpg'),
(105, 4, '/upload/media/photo/4/', '846467ab0887.jpg'),
(106, 4, '/upload/media/photo/4/', '560064bbef25.jpg'),
(107, 4, '/upload/media/photo/4/', 'd61d1593d379.jpg'),
(108, 4, '/upload/media/photo/4/', 'f0caf33e275b.jpg'),
(109, 4, '/upload/media/photo/4/', '2d64dc440f65.jpg'),
(110, 4, '/upload/media/photo/4/', 'a5f897f1fe92.jpg'),
(111, 4, '/upload/media/photo/4/', '5d412d180126.jpg'),
(112, 4, '/upload/media/photo/4/', '2f34e616bda8.jpg'),
(113, 5, '/upload/media/photo/5/', 'c161bf5f295c.jpg'),
(114, 5, '/upload/media/photo/5/', '37cb79b1145b.jpg'),
(115, 5, '/upload/media/photo/5/', '792289253aef.jpg'),
(116, 5, '/upload/media/photo/5/', 'd12b690f1702.jpg'),
(117, 5, '/upload/media/photo/5/', '46df630c13dc.jpg'),
(118, 5, '/upload/media/photo/5/', 'bf0858fa4e35.jpg'),
(119, 5, '/upload/media/photo/5/', '5583c4fd3d06.jpg'),
(120, 5, '/upload/media/photo/5/', 'ffc534c0870e.jpg'),
(121, 5, '/upload/media/photo/5/', '3c89168060f3.jpg'),
(122, 5, '/upload/media/photo/5/', 'c34157a1e9ec.jpg'),
(123, 5, '/upload/media/photo/5/', '398632436083.jpg'),
(124, 5, '/upload/media/photo/5/', '11dbf5073aa9.jpg'),
(125, 5, '/upload/media/photo/5/', 'a7592760c01e.jpg'),
(126, 5, '/upload/media/photo/5/', '701bb11fa012.jpg'),
(127, 5, '/upload/media/photo/5/', '84bf863c40ec.jpg'),
(128, 5, '/upload/media/photo/5/', 'c0f54a0c23cb.jpg'),
(129, 5, '/upload/media/photo/5/', 'd982667ac94a.jpg'),
(130, 5, '/upload/media/photo/5/', '257daf6d9fc2.jpg'),
(131, 5, '/upload/media/photo/5/', 'acd2223c0726.jpg'),
(132, 5, '/upload/media/photo/5/', '86886c629e3f.jpg'),
(133, 5, '/upload/media/photo/5/', 'ad1b95373fe9.jpg'),
(134, 5, '/upload/media/photo/5/', 'fd687ccc4025.jpg'),
(135, 5, '/upload/media/photo/5/', 'b730a2b43a75.jpg'),
(136, 5, '/upload/media/photo/5/', '60a93eccbe80.jpg'),
(137, 5, '/upload/media/photo/5/', '249127ac945e.jpg'),
(138, 5, '/upload/media/photo/5/', 'fa3d528d290b.jpg'),
(139, 5, '/upload/media/photo/5/', '2199c3760337.jpg'),
(140, 5, '/upload/media/photo/5/', 'f7023403973a.jpg'),
(141, 5, '/upload/media/photo/5/', '2b34f847a820.jpg'),
(142, 5, '/upload/media/photo/5/', 'ee6a0a3ede7f.jpg'),
(143, 6, '/upload/media/photo/6/', 'a1c5e21f3484.jpg'),
(144, 6, '/upload/media/photo/6/', '30e9c4ee0fc2.jpg'),
(145, 6, '/upload/media/photo/6/', '1bd909f47d6e.jpg'),
(146, 6, '/upload/media/photo/6/', '6265e3734cb0.jpg'),
(147, 6, '/upload/media/photo/6/', '4007f9621f99.jpg'),
(148, 6, '/upload/media/photo/6/', 'd6b3ed391870.jpg'),
(149, 6, '/upload/media/photo/6/', '960b9000118f.jpg'),
(150, 6, '/upload/media/photo/6/', 'f055cdcdf07e.jpg'),
(151, 6, '/upload/media/photo/6/', '7e550425a3da.jpg'),
(152, 6, '/upload/media/photo/6/', '19854fd3c843.jpg'),
(153, 6, '/upload/media/photo/6/', 'e4ed25c5cf06.jpg'),
(154, 6, '/upload/media/photo/6/', '52d630184e6d.jpg'),
(155, 6, '/upload/media/photo/6/', '0079fb434356.jpg'),
(156, 6, '/upload/media/photo/6/', 'c0d4ed670b84.jpg'),
(157, 6, '/upload/media/photo/6/', 'bfc71a8fa02d.jpg'),
(158, 6, '/upload/media/photo/6/', 'd2b08df2de8e.jpg'),
(159, 6, '/upload/media/photo/6/', '6cdf1516fe4f.jpg'),
(160, 6, '/upload/media/photo/6/', 'fa43006852dc.jpg'),
(161, 6, '/upload/media/photo/6/', 'ea417425b923.jpg'),
(162, 6, '/upload/media/photo/6/', 'f8b84c0387a0.jpg'),
(163, 7, '/upload/media/photo/7/', 'a53409cec130.jpg'),
(164, 7, '/upload/media/photo/7/', 'decf3f14c045.jpg'),
(165, 7, '/upload/media/photo/7/', '5dd5d92f83fc.jpg'),
(166, 7, '/upload/media/photo/7/', 'fa981925e8ac.jpg'),
(167, 7, '/upload/media/photo/7/', '4e580c8ec958.jpg'),
(168, 7, '/upload/media/photo/7/', '9679c0763ffd.jpg'),
(169, 7, '/upload/media/photo/7/', '545cdfbc79b8.jpg'),
(170, 7, '/upload/media/photo/7/', 'f5dc1cad817a.jpg'),
(171, 7, '/upload/media/photo/7/', 'd7807bc8017a.jpg'),
(172, 7, '/upload/media/photo/7/', 'e0ee1247a9fb.jpg'),
(173, 7, '/upload/media/photo/7/', '9b4a318ac0b8.jpg'),
(175, 7, '/upload/media/photo/7/', 'b5ca4b3a8148.jpg'),
(176, 7, '/upload/media/photo/7/', '26c213a83e5b.jpg'),
(177, 7, '/upload/media/photo/7/', 'c0e64c19a337.jpg'),
(178, 7, '/upload/media/photo/7/', '7978b95e65c3.jpg'),
(179, 7, '/upload/media/photo/7/', 'd1ca43ee1880.jpg'),
(180, 8, '/upload/media/photo/8/', '9ec8f7430297.jpg'),
(181, 8, '/upload/media/photo/8/', '0809e5495b72.jpg'),
(182, 8, '/upload/media/photo/8/', '8ce80c182f4a.jpg'),
(183, 8, '/upload/media/photo/8/', '4f9035e6dae1.jpg'),
(184, 8, '/upload/media/photo/8/', 'e01cb571b786.jpg'),
(185, 8, '/upload/media/photo/8/', '4b71972e33b5.jpg'),
(186, 7, '/upload/media/photo/7/', '30f7e906560d.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `media_video`
--

CREATE TABLE `media_video` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `path` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `sort` int(4) NOT NULL,
  `archive` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `media_video`
--

INSERT INTO `media_video` (`id`, `title`, `url`, `path`, `img`, `sort`, `archive`) VALUES
(1, 'Богдан Копкін - Олег Геш. Запис бою', 'https://www.youtube.com/embed/qwk_dC159IY', '/upload/media/video/', '1.jpg', 0, 0),
(2, 'Проморлик турнира по кикбоксингу в Кременчуге', 'https://www.youtube.com/embed/hsf7I5GGnu4', '/upload/media/video/', '2.jpg', 1, 0),
(3, 'БОГДАН КОПКІН ЧЕМПІОН УКРАЇНИ З КІКБОКСИНГУ ISKA, К 1 Pro, вага до 63,5кг', 'https://www.youtube.com/embed/pjbLZ0KhaHk', '/upload/media/video/', '3.jpg', 2, 0),
(4, 'Всеукраїнський турнір з кікбоксингу', 'https://www.youtube.com/embed/Bpp7Ez4sUbY', '/upload/media/video/', '4.jpg', 3, 0),
(5, 'Всеукраїнський турнір з кікбоксингу у Кременчуці - Громадське.Кременчук', 'https://www.youtube.com/embed/JJSB0nWg-o4', '/upload/media/video/', '5.jpg', 4, 0),
(6, 'Бой за чемпионский титул по версии ISKA Тимур Чочия (Киев)  - Антон Науменко (Харьков)', 'https://www.youtube.com/embed/eyjsfFtLyYs', '/upload/media/video/', '6.jpg', 5, 0),
(7, 'The 2016 US Open ISKA World Martial Arts Championships Promo', 'https://www.youtube.com/embed/TdbDVyjUr90', '/upload/media/video/', '7.jpg', 6, 0),
(8, '222222222222222', 'https://www.youtube.com/watch?v=TdbDVyjUr90', '', '', 3, 0),
(9, 'Дополнительная гарантия', 'https://www.youtube.com/embed/Bpp7Ez4sUbY', '', '', 7, 0),
(10, 'Дополнительная гарантия', 'https://www.youtube.com/embed/20s', '', '', 34, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(4) UNSIGNED NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `path` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `data_create` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `category`, `title`, `description`, `text`, `path`, `img`, `status`, `data_create`) VALUES
(1, 'international', 'Продовження успіху.', '<p>В італійському м. Піскара (Італія) 23 - 26 жовтня 2014 року відбувся чемпіонат Європи з кікбоксингу ІСКА.</p>\r\n', '<p>В італійському м. Піскара (Італія) 23 - 26 жовтня 2014 року відбувся чемпіонат Європи з кікбоксингу ІСКА. Серед 300 учасників з 29 країн Європи, Україна була гідно представлена на цьому чемпіонаті. В особистому результаті завойовано 3 золотих та 1 бронзова нагороди.</p>\r\n', '/upload/news/international/', '3c7bb9bc8b07.jpg', 1, '2014-10-26'),
(2, 'international', 'Кікбоксинг ІСКА України в Іспанії.', '<p>В термін з 30 квітня по 4 травня 2014 року в Коста Брава (Іспанія) відбувся Чемпіонат Світу з кікбоксингу ISKA серед юнаків, юніорів та дорослих</p>\r\n', '<p>В термін з 30 квітня по 4 травня 2014 року в Коста Брава (Іспанія) відбувся Чемпіонат Світу з кікбоксингу ISKA серед юнаків, юніорів та дорослих. В якому взяли участь понад 600 спортсменів з 37 країн світу.</p>\r\n\r\n<p>&quot;Федерація кікбоксингу України ІСКА&quot;, організувала підготовку та участь збірної команди України і делегувала 14 кращих спортсменів з 5 областей України (Київської, Полтавської, Луганської, Житомирської та Запорізької), які гідно виступили в Всесвітньому чемпіонаті і показали високий спортивний результат:&nbsp;<strong>12 золотих, 10 срібних і 9 бронзових медалей</strong>. Кількість нагород вказує на високий потенціал та самовіддану підготовку українських спортсменів.</p>\r\n', '/upload/news/international/', '143b8311fa27.jpg', 1, '2014-05-04'),
(6, 'iska-pro', 'Бій за титул «Чемпіон України з кікбоксингу ISKA SEMI-PRO FULL 85 кг»', '<p>12 березня 2016 року в м. Києві, в період проведення Чемпіонату України з кікбоксингу ISKA в спорткомплексі київського національного університету будівництва та архітектури відбувся бій двох професорів кікбоксингу Чочії Тимура м. Київ, та Науменко Антон м. Харків за звання &quot;чемпіон України з кікбоксингу ISKA SEMI-PRO FULL 85 кг&quot;</p>\r\n', '<figure class="news-pic-content"><img alt="Скульптура" src="/upload/news/images/pic3.jpg" width="550" />\r\n<figcaption style="font-size: 18px; font-weight: bold">Від дітей до профі...</figcaption>\r\n</figure>\r\n\r\n<p>12 березня 2016 року в м. Києві, в період проведення Чемпіонату України з кікбоксингу ISKA в спорткомплексі київського національного університету будівництва та архітектури відбувся бій двох професорів кікбоксингу Чочії Тимура м. Київ, та Науменко Антон м. Харків за звання &quot;чемпіон України з кікбоксингу ISKA SEMI-PRO FULL 85 кг&quot;. В напруженому поєдинку за рішенням суддівської колегії перемогу одержав Чочія Тимур м. Київ.</p>\r\n\r\n<figure class="news-pic-content"><img alt="Скульптура" src="/upload/news/images/pic4.jpg" width="550" />\r\n<figcaption>&nbsp;</figcaption>\r\n</figure>\r\n\r\n<p>(Зліва-направо) Перший віце-президент Федерації кікбоксингу України &laquo;ISKA&raquo;, триразовий чемпіон світу, чемпіон Європи, інтерконтинентальний чемпіон Віктор Дорошенко; Президент Федерації &laquo;ISKA&raquo; у м. Києві, майстер спорту, чемпіон Європи, заслужений тренер України Микола Акіжанов; чемпіон України, майстер спорту Тимур Чочія.</p>\r\n\r\n<figure class="news-pic-content"><img alt="Скульптура" src="/upload/news/images/pic5.jpg" width="550" />\r\n<figcaption style="font-size: 18px; font-weight: bold">Президент Федерації &laquo;ISKA&raquo; у м. Києві Микола Акіжанов.</figcaption>\r\n</figure>\r\n\r\n<figure class="news-pic-content"><img alt="Скульптура" src="/upload/news/images/pic6.jpg" width="550" />\r\n<figcaption style="font-size: 18px; font-weight: bold">Чемпіон України, майстер спорту, Тимур Чочія, проводить майстер-класи для спортсменів-початківців.</figcaption>\r\n</figure>\r\n', '/upload/news/iska-pro/', 'fd78e929c62f.jpg', 1, '2016-03-13'),
(3, 'international', 'Серед найкращих команд', '<p>Міжнародна Спортивна Кікбоксерська Асоціація (ISKA) з 28 квітня по 3 травня 2015 року в м. Портімао, Португалія проводила Чемпіонат Світу - 2015 за участю 450 спортсменів з 23 країн світу.</p>\r\n', '<p>Міжнародна Спортивна Кікбоксерська Асоціація (ISKA) з 28 квітня по 3 травня 2015 року в м. Портімао, Португалія проводила Чемпіонат Світу - 2015 за участю 450 спортсменів з 23 країн світу.</p>\r\n\r\n<p>Федерація кікбоксингу України ІСКА об&rsquo;єднавши спортсменів з 4-х областей України, які завзято готувалась до участі в престижному чемпіонаті континентів світу, і не дарма; 15 золотих, 5 срібних, 4 бронзових нагороди та 6 командне місце, такий успішний результат виступу Українських спортсменів.</p>\r\n', '/upload/news/international/', '7884f82e55b4.jpg', 1, '2015-05-03'),
(4, 'iska-pro', 'Титульний бій серед професіоналів - за звання «Чемпіон України з кікбоксингу ІСКА» в розділі К-1, у вазі 63,5 кг.', '<p>В місті Кременчук 14 лютого 2016 року, під час проведення змагань &quot;Пам&rsquo;яті героїв - кременчужан, загиблих в зоні АТО&quot;, відбувся титульний бій серед професіоналів - за звання &quot;Чемпіон України з кікбоксингу ІСКА&quot; в розділі К-1, у вазі 63,5 кг.</p>\r\n', '<p>В місті Кременчук 14 лютого 2016 року, під час проведення змагань &quot;Пам&rsquo;яті героїв - кременчужан, загиблих в зоні АТО&quot;, відбувся титульний бій серед професіоналів - за звання &quot;Чемпіон України з кікбоксингу ІСКА&quot; в розділі К-1, у вазі 63,5 кг.</p>\r\n\r\n<p>Талановиті спортсмени Богдан Копкін м. Кременчук та Львів&#39;янин Олег Геш зустрілися в жорстокому поєдинку за титул.</p>\r\n\r\n<p>За підсумками п&#39;яти безкомпромісних раундів, одноголосним рішенням суддів, перемогу отримав Богдан Копкін (тренер Олег Скирта), який подарував не байдужим уболівальникам багато яскравих моментів класичного кікбоксингу !!!</p>\r\n', '/upload/news/iska-pro/', '0a8dba6eec2a.jpg', 1, '2016-02-15'),
(7, 'ukrainian', 'Всеукраїнські змагання з кікбоксингу ІСКА «Пам’яті героїв - кременчужан, загиблих в зоні АТО» 13-14.02.2016 року м. Кременчук.', '<p>13-14 лютого 2016 року в м. Кременчук, Полтавської області у спорткомплексі дитячо-юнацької школи олімпійського резерву проводилися Всеукраїнські змагання з кікбоксингу ІСКА &quot;Пам&rsquo;яті героїв - кременчужан, загиблих в зоні АТО&quot;.</p>\r\n', '<h2>Перший вдалий старт Кременчужан.</h2>\r\n\r\n<p>13-14 лютого 2016 року в м. Кременчук, Полтавської області у спорткомплексі дитячо-юнацької школи олімпійського резерву проводилися&nbsp;<strong>Всеукраїнські змагання з кікбоксингу ІСКА &quot;Пам&rsquo;яті героїв - кременчужан, загиблих в зоні АТО&quot;.</strong></p>\r\n\r\n<p>Понад 100 спортсменів з 10 регіонів України прийняли участь у напружених аматорських поєдинках з кікбоксингу. У всеукраїнських змаганнях був показаний достатньо високий рівень підготовки юних спортсменів з міст Кременчук, Полтава, Харьків, Кіровоград, Обухів, а перші вдалі змагання отримають постійну прописку в місті пам&#39;яті.</p>\r\n', '/upload/news/ukrainian/', '757ba5001985.jpg', 1, '2016-02-15'),
(8, 'ukrainian', 'Чемпіонат України з кікбоксингу ISKA серед юніорів та юнаків 10-13.03.2016 року м. Київ', '<p>Справжнє спортивне свято для шанувальників бойових мистецтв, дітей та дорослих відбулося 10 &ndash; 13 березня 2016 року в м. Києві.</p>\r\n', '<figure class="news-pic-content"><img alt="Скульптура" src="/upload/news/images/pic7.jpg" width="550" />\r\n<figcaption style="font-size: 18px; font-weight: bold">Гіганти....</figcaption>\r\n</figure>\r\n\r\n<h2>Спортивний Київ кікбоксингу ІСКА.</h2>\r\n\r\n<p>Справжнє спортивне свято для шанувальників бойових мистецтв, дітей та дорослих відбулося 10 &ndash; 13 березня 2016 року в м. Києві. Всеукраїнські змагання об&#39;єднали понад 312 спортсменів з 14 областей України і кількість учасників забезпечила напруженні бої на протязі трьох днів, а якість поєдинків показує зростаючу майстерність, як юних спортсменів так і дорослих асів бойових сутичок.</p>\r\n', '/upload/news/ukrainian/', '0817d2970958.jpg', 1, '2016-03-13'),
(9, 'ukrainian', 'Чемпіонат України ІСКА К-1 серед дорослих, К-1 лайт серед юніорів ті юнаків 07-10.04.2016 року м. Харків.', '<p>07 &ndash; 10 квітня 2016 року на базі легкоатлетичного манежу комунального закладу КДЮСШ &quot;ХТЗ&quot; в м. Харкові за адресою пр. Московський 244/1, пройшов Чемпіонат України з кікбоксингу ІСКА у розділах К-1 серед дорослих і К-1 Лайт серед юніорів та юнаків.</p>\r\n', '<p><img alt="Передстартовий Харків до чемпіонату світу ІСКА." src="/upload/news/images/pic8.jpg" width="600" /></p>\r\n\r\n<h2>Передстартовий Харків до чемпіонату світу ІСКА.</h2>\r\n\r\n<p>07 &ndash; 10 квітня 2016 року на базі легкоатлетичного манежу комунального закладу КДЮСШ &quot;ХТЗ&quot; в м. Харкові за адресою пр. Московський 244/1, пройшов Чемпіонат України з кікбоксингу ІСКА у розділах К-1 серед дорослих і К-1 Лайт серед юніорів та юнаків.</p>\r\n\r\n<p>Урочисте відкриття чемпіонату, під звучання гімну та підняття державного прапору, проводили неодноразові чемпіони світу минулих років з чотирьох міст України.</p>\r\n\r\n<p>До участі у чемпіонаті були делеговані спортсмени з чотирнадцяти адміністративних регіонів України за кількістю понад 80 дорослих спортсменів та 120 юніорів та юнаків.</p>\r\n\r\n<p>На протязі трьох днів запеклих поєдинків на рингу та татамі учасники виборювали звання чемпіонів України з кікбоксингу ІСКА у відповідних розділах та право увійти до бойової когорти найкращих спортсменів держави.</p>\r\n\r\n<p>Вказанні всеукраїнські змагання були останнім змаганням по відбору спортсменів до участі у чемпіонату світу ISKA, який пройде 17-22 травня 2016 року в м. Штутгарт (Німеччина), а атлети отримали змогу гідно представляти спортивну Україну на всесвітніх змаганнях за участю делегатів зі ста країн світу.</p>\r\n', '/upload/news/ukrainian/', '6dbcfffd8f0e.jpg', 1, '2016-04-10'),
(10, 'international', 'Гідний виступ збірної команди України на чемпіонаті світу 17 – 22 травня 2016 року в Німеччині, Штутгарт', '<p>22 травня завершився Чемпіонат Світу з кікбоксингу який проходив в місті Штутгарт(Німеччина). Змагалися кращі спортсмени з 42 країн світу кількістю 600 участників.</p>\r\n', '<p>22 травня завершився Чемпіонат Світу з кікбоксингу який проходив в місті Штутгарт(Німеччина). Змагалися кращі спортсмени з 42 країн світу кількістю 600 участників. Наші спортсмени показали феноменальний результат - 9 золотих медалей, поясів Чемпіонів Світу, 13 срібних та 7 бронзових! А всього, 29 нагород.</p>\r\n\r\n<p>Очолював збірну команду країни - Президент Федерації кікбоксингу України &quot;ISKA&quot; Олег Мандзюк.</p>\r\n\r\n<p>Імідж сильної спортивної держави завойований в безкомпромісних поєдинках і підтверджений результат</p>\r\n\r\n<p><img alt="" src="/upload/news/images/pic9.jpg" /></p>\r\n', '/upload/news/international/', '81db16197de1.jpg', 1, '2016-05-23'),
(11, 'ukrainian', 'Відкриті, обласні змагання з кікбоксингу ІСКА до «Дня захисту дітей» 21-22 травня 2016 року м.Харків.', '<p>В місті Харкові 21-22 травня 2016 року відбулися обласні відкриті змагання з кікбоксингу ІСКА до &quot;Дня захисту дітей&quot;, які проводилися у приміщенні легкоатлетичного манежу КЗ &laquo;КДЮСШ &laquo;ХТЗ&raquo; ХОР&raquo; .</p>\r\n', '<p><img alt="Передстартовий Харків до чемпіонату світу ІСКА." src="/upload/news/images/pic10.jpg" width="600" /></p>\r\n\r\n<h2>Харківські обласні змагання ІСКА до &quot;Дня захисту дітей&quot;</h2>\r\n\r\n<p>В місті Харкові 21-22 травня 2016 року відбулися обласні відкриті змагання з кікбоксингу ІСКА до &quot;Дня захисту дітей&quot;, які проводилися у приміщенні легкоатлетичного манежу КЗ &laquo;КДЮСШ &laquo;ХТЗ&raquo; ХОР&raquo; .</p>\r\n\r\n<p>17 команд кількістю 160 учасників з відомих спортивних шкіл і клубів міста Харкова та області взяли участь у змаганнях у дисциплінах татамі - стилів.</p>\r\n\r\n<p>Відкриті змагання з кікбоксингу ІСКА стали для багатьох учасників черговим екзаменом перевірки сил, а для основного складу спортсменів ці змагання стали можливістю увійти до складу збірної команди міста Харкова до участі у всеукраїнських та міжнародних змаганнях в 2016 році.</p>\r\n', '/upload/news/ukrainian/', 'fbd55fcec702.jpg', 1, '2016-05-22'),
(12, 'ukrainian', 'Регіональний турнір з кікбоксингу ІСКА «Амурські соколи» 19 червня 2016 року в м. Дніпро.', '<p>В жаркому літньому місяці 19 червня 2016 року в м. Дніпро пройшов регіональний турнір з кікбоксингу ІСКА &quot;Амурські соколи&quot;. В змаганнях прийняли участь спортсмени п&#39;яти клубів в ринг-стилях. Запеклий місяць, запеклі бої та гідні нагороди учасникам змагань.</p>\r\n', '<h2>Регіональний турнір з кікбоксингу ІСКА &quot;Амурські соколи&quot;</h2>\r\n\r\n<p>В жаркому літньому місяці 19 червня 2016 року в м. Дніпро пройшов регіональний турнір з кікбоксингу ІСКА &quot;Амурські соколи&quot;. В змаганнях прийняли участь спортсмени п&#39;яти клубів в ринг-стилях. Запеклий місяць, запеклі бої та гідні нагороди учасникам змагань.</p>\r\n\r\n<p>На черзі &ndash; підготовка та участь у жовтневому Кубку України по кікбоксингу у м. Харків. Спортсмени Дніпровської області с 16 липня будуть удосконалювати свої можливості у двотижневому зборі на спортивній базі смт Кирилівка (Запорізька область).</p>\r\n', '/upload/news/ukrainian/', 'ef4f95b666af.jpg', 1, '2016-06-25'),
(13, 'ukrainian', 'Всеукраїнське об\'єднання громадян «КРАЇНА»  нагороджує  «ЗА РОЗВИТОК УКРАЇНСЬКОГО СПОРТУ»', '<p align="center"><u>Всеукраїнське об&#39;єднання громадян &quot;КРАЇНА&quot;</u></p>\r\n\r\n<p align="center">нагороджує&nbsp; відзнакою &quot;ЗА РОЗВИТОК УКРАЇНСЬКОГО СПОРТУ&quot;, та посвідченням до відзнаки,&nbsp; учасників&nbsp; чемпіонату&nbsp; Світу з кікбоксингу ISKA, який&nbsp; відбувся&nbsp; 17 - 23&nbsp; травня 2016 року&nbsp;</p>\r\n\r\n<p align="center">в&nbsp; м. Штутгарт (Німеччина).</p>\r\n', '<h2 style="text-align: center">&nbsp;</h2>\r\n\r\n<h2 style="text-align: center"><strong><u>Всеукраїнське об&#39;єднання громадян &quot;КРАЇНА&quot;</u></strong></h2>\r\n\r\n<p style="text-align: center"><strong>нагороджує&nbsp; відзнакою &quot;ЗА РОЗВИТОК УКРАЇНСЬКОГО СПОРТУ&quot;, та посвідченням до відзнаки,&nbsp; учасників&nbsp; чемпіонату&nbsp; Світу </strong><strong>з кікбоксингу ISKA</strong><strong>, який&nbsp; відбувся&nbsp; 17 - 23&nbsp; травня 2016 року&nbsp; </strong></p>\r\n\r\n<p style="text-align: center"><strong>в&nbsp; м. </strong><strong>Штутгарт (Німеччина). </strong></p>\r\n\r\n<p style="text-align: center"><strong>За багаторічну плідну працю, спрямовану на розвиток українського спорту, за професіоналізм та відданість справі:</strong></p>\r\n\r\n<ol>\r\n	<li>Алієв Ельчин Халіл&nbsp; огли;</li>\r\n	<li>Рильский Дмитро Леонідович;</li>\r\n	<li>Яричевський Олександр Анатолійович;</li>\r\n	<li>&nbsp;Назлоян Марк&nbsp; Тігранович;</li>\r\n	<li>Ткаченко Дар&#39;я&nbsp; Ростиславовна ;</li>\r\n	<li>Шрам&nbsp; Сергій Юрійович;</li>\r\n	<li>Єрко Михайло Михайлович;</li>\r\n	<li>Ліхіна Захар&nbsp; Олегович;</li>\r\n	<li>Кашка Ігор&nbsp; Геннадійович;</li>\r\n	<li>Турченко Денис Дмитрович;</li>\r\n	<li>Скирта&nbsp;&nbsp;&nbsp; Олег Сергійович;</li>\r\n	<li>Алексеюк&nbsp; Ілля&nbsp;&nbsp; Олександрович;</li>\r\n	<li>Гуцалюк&nbsp; Ігор Анатолійович;&nbsp;</li>\r\n	<li>Кужельний Андрій Володимирович;</li>\r\n	<li>Шпак Сергій Олексійович;&nbsp;</li>\r\n	<li>Миролюбенко Ігор Борисович;</li>\r\n</ol>\r\n\r\n<p style="text-align:center"><img alt="" height="300" src="\\upload\\news\\images\\news-13.jpg" width="400" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;<strong>&nbsp;&nbsp;</strong><strong>За громадянську &nbsp;мужність та патріотизм, активність та самовідданість, спрямовані на об&#39;єднання громадян України у прагненні суверенності та розвитку держави:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Ящук Вролодимир Сергійович;&nbsp;</li>\r\n	<li>Дворецький Геннадій Едуардович;</li>\r\n</ol>\r\n\r\n<p style="text-align:center"><img alt="" height="299" src="\\upload\\news\\images\\news-13_1.jpg" width="400" /></p>\r\n\r\n<p>Президія</p>\r\n', '/upload/news/ukrainian/', '64ccfc400bfc.jpg', 1, '2016-07-25');

-- --------------------------------------------------------

--
-- Структура таблицы `news_img`
--

CREATE TABLE `news_img` (
  `id` int(6) UNSIGNED NOT NULL,
  `news_id` int(6) NOT NULL,
  `path` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news_img`
--

INSERT INTO `news_img` (`id`, `news_id`, `path`, `img`) VALUES
(3, 6, '/upload/news/images/', '34c782ceac9d.jpg'),
(4, 6, '/upload/news/images/', 'd6795fcaef93.jpg'),
(8, 6, '/upload/news/images/', 'fac154cf13d3.jpg'),
(9, 6, '/upload/news/images/', 'a797f1c8f2ff.jpg'),
(10, 6, '/upload/news/images/', '3ed3b9a20959.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `visits`
--

CREATE TABLE `visits` (
  `visit_id` int(12) NOT NULL,
  `date` date NOT NULL,
  `hosts` int(12) NOT NULL,
  `views` int(12) NOT NULL
) ENGINE=MyISAM AVG_ROW_LENGTH=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `visits`
--

INSERT INTO `visits` (`visit_id`, `date`, `hosts`, `views`) VALUES
(1, '2016-06-06', 1, 73),
(2, '2016-06-07', 1, 136),
(3, '2016-06-08', 1, 122),
(4, '2016-06-09', 1, 26),
(5, '2016-06-13', 1, 7),
(6, '2016-06-14', 1, 5),
(7, '2016-06-15', 1, 1),
(8, '2016-06-16', 1, 2),
(9, '2016-06-17', 1, 1),
(10, '2016-06-22', 1, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `federation`
--
ALTER TABLE `federation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `federation_position`
--
ALTER TABLE `federation_position`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ips`
--
ALTER TABLE `ips`
  ADD PRIMARY KEY (`ip_id`);

--
-- Индексы таблицы `list_album`
--
ALTER TABLE `list_album`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `media_photo`
--
ALTER TABLE `media_photo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `media_video`
--
ALTER TABLE `media_video`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news_img`
--
ALTER TABLE `news_img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`visit_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `federation`
--
ALTER TABLE `federation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `federation_position`
--
ALTER TABLE `federation_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `ips`
--
ALTER TABLE `ips`
  MODIFY `ip_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `list_album`
--
ALTER TABLE `list_album`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `media_photo`
--
ALTER TABLE `media_photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;
--
-- AUTO_INCREMENT для таблицы `media_video`
--
ALTER TABLE `media_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `news_img`
--
ALTER TABLE `news_img`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `visits`
--
ALTER TABLE `visits`
  MODIFY `visit_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
