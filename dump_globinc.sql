-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: xp424267.mysql.ukraine.com.ua
-- Час створення: Лип 12 2021 р., 12:05
-- Версія сервера: 5.7.33-36-log
-- Версія PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `xp424267_global`
--

-- --------------------------------------------------------

--
-- Структура таблиці `kslStatistics`
--

CREATE TABLE `kslStatistics` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `str_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `black_list_ip` tinyint(1) NOT NULL DEFAULT '0',
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `massages`
--

CREATE TABLE `massages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `massages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `see` int(11) DEFAULT NULL,
  `who_see` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `massages`
--

INSERT INTO `massages` (`id`, `name`, `email`, `massages`, `see`, `who_see`, `created_at`, `updated_at`) VALUES
(11, 'sdsdf', 'vv32@gmail.com', 'sdfsdfsdf', 1, NULL, '2021-06-05 15:36:10', '2021-06-05 15:36:39'),
(12, 'asda', 'asdasd@gmail.com', 'sdfsdfsdf', NULL, NULL, '2021-06-30 22:34:24', '2021-06-30 22:34:24');

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_11_194328_ksl_stat_ip', 1),
(4, '2017_08_12_194329_add_key_to_ksl_stat_ip', 1),
(5, '2021_01_27_221127_add_user_verification', 1),
(6, '2021_02_04_043544_add_user_role', 1),
(7, '2021_02_09_214147_create_project_table', 1),
(8, '2021_04_05_212713_create_masseges_table', 1),
(9, '2021_05_26_121146_create_news_table', 2);

-- --------------------------------------------------------

--
-- Структура таблиці `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `title1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text1` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `news`
--

INSERT INTO `news` (`id`, `title`, `type`, `text`, `slag`, `view`, `created_at`, `updated_at`, `avatar`, `title1`, `text1`) VALUES
(8, 'Лицензия на криптовалюты в США', 1, '<p><span style=\"font-family: Calibri; color: black;\">На законодательном уровне лицензия на </span><span style=\"font-family: Calibri; color: black;\">криптовалюты</span><span style=\"font-family: Calibri; color: black;\"> в США была закреплена в 2013 году. Тогда было принято решение снять запрет на </span><span style=\"font-family: Calibri; color: black;\">криптовалюты</span><span style=\"font-family: Calibri; color: black;\"> и разработать специальные положения для из использования. </span><span style=\"font-family: Calibri; color: black;\">Криптовалюты</span><span style=\"font-family: Calibri; color: black;\"> в Америке децентрализованы и применяются как обычные деньги.</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">Вследствие этого, биржи и другие компании, которые выполняют операции с крипто-деньгами, должны:</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">&nbsp;- быть зарегистрированными, как поставщики финансовых услуг;</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">&nbsp;- иметь лицензию на </span><span style=\"font-family: Calibri; color: black;\">криптовалюты</span><span style=\"font-family: Calibri; color: black;\"> в США;</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">&nbsp;- докладывать правоохранительным органам о транзакциях, которые являются подозрительными.</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">Налоги на </span><span style=\"font-family: Calibri; color: black;\">криптовалюты</span><span style=\"font-family: Calibri; color: black;\"> тоже взимаются. Доход от операций с такими средствами считается доходом от прироста капитала, он также подлежит обложению налогом в соответствии с нормами Службы внутренних доходов Соединенных Штатов Америки.<span style=\"mso-spacerun: yes;\">&nbsp; </span>Нарушение правил обмена таких средств считается преступлением.</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">Как отдельные штаты относятся к правилам лицензирования </span><span style=\"font-family: Calibri; color: black;\">криптовалют</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">Соединенные Штаты Америки являются самым настоящим примером федеративной страны, которая имеет 3-уровневую систему деления полномочий властей. Почти все области закона регулируются на уровне федерации, отдельных штатов и местном муниципальном уровне.</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">Это же касается и лицензии на </span><span style=\"font-family: Calibri; color: black;\">криптовалюты</span><span style=\"font-family: Calibri; color: black;\"> в США, и финансовой сферы в общем. Конгресс предоставляет только общую схему, как лицензировать </span><span style=\"font-family: Calibri; color: black;\">криптовалюту</span><span style=\"font-family: Calibri; color: black;\">. Далее же парламенты каждого штата создают свои личные, детализированные правила, по каким и определяется выдача лицензий финансового плана.</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">Так как каждый отдельный штат имеет свои правила получения лицензий, часто они очень разнятся во всех регионах государства. Здесь и появляется необходимость получения разрешения во всех отдельных штатах, где планируется предоставление биржевых услуг.</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">Сложностей в этот вопрос привносит еще и отдельный факт того, что в определенных штатах до сих пор на законодательном уровне власти не разработали точную позицию касательно регулирования </span><span style=\"font-family: Calibri; color: black;\">криптовалюты</span><span style=\"font-family: Calibri; color: black;\">. Таким образом, в отдельных регионах государства в теории лицензия на </span><span style=\"font-family: Calibri; color: black;\">криптовалюты</span><span style=\"font-family: Calibri; color: black;\"> в США не обязательна.</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">На что обратить внимание?</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">Получение лицензии на </span><span style=\"font-family: Calibri; color: black;\">криптовалюты</span><span style=\"font-family: Calibri; color: black;\"> в США требует пристального внимания к ряду деталей. Если не учесть тот или иной правовой нюанс, риск отказа в выдаче лицензии значительно увеличивается. Наши специалисты готовы оказать вам помощь в ситуации любой сложности.</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">Выбирая территорию, где будет происходить деятельность биржи, также следует брать во внимание следующие нюансы:</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">есть ли там лицензии на крипто-деньги в общем, к примеру, в Нью-Мексико, Монтане, а также Южной Каролине, отличительно от других штатов, государственными органами эта сфера не регулируется;</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">&nbsp;- сумма уставного капитала: во всех штатах она очень разнится &ndash; от 1 тысячи до миллиона долларов;</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">&nbsp;- сумму капитала для поддержки и развития: она также сильно отличается в регионах &ndash; от тысячи долларов до 1 миллиона;</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">&nbsp;- налоги на доходы с </span><span style=\"font-family: Calibri; color: black;\">криптовалютных</span><span style=\"font-family: Calibri; color: black;\"> операций и т. д.</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">Документы, которые требуются для получения лицензии</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">Как уже упоминалось, во всех штатах действуют отдельные правила относительно получения лицензий на крипто-деньги, но в общем они довольно схожи. Зачастую от предпринимателей, которые желают начать заниматься обменом таких финансовых единиц, требуется перечень следующих документов для оформления разрешения:</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">&nbsp;- полное наименование предприятия и юридический адрес;</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">&nbsp;- название торговой марки, под какой планирует функционировать </span><span style=\"font-family: Calibri; color: black;\">криптовалютная</span><span style=\"font-family: Calibri; color: black;\"> биржа;</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">&nbsp;- полный список правонарушений, которые были совершены заявляющим лицом в период последних нескольких месяцев (этот срок у каждого региона различается);</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">&nbsp;- информационные данные о действующих судах, где заявляющее лицо выступает в качестве какой-либо из сторон;</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">&nbsp;- список финансовых услуг, которые предоставлялись заявляющим лицом в прошлом (при наличии таковых), а также услуг, которые планируется предоставлять в дальнейшем;</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">&nbsp;- полный список мест, где планируется оказывать услуги, на которые получается лицензия;</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">&nbsp;- перечень специалистов, которые задействованы в работе с клиентами;</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">&nbsp;- информационные данные о действующих процессах банкротства, где фигурирует заявляющее лицо;</span></p>\r\n<p><span style=\"font-family: Calibri; color: black;\">образец договора клиента.</span></p>\r\n<p><span style=\"font-family: Calibri;\">Из того, что было сказано выше, можно сделать вывод, что получение лицензии на </span><span style=\"font-family: Calibri;\">криптовалюты</span><span style=\"font-family: Calibri;\"> в США &ndash; это довольно трудоемкий процесс. От лицензиата необходимо не просто знание законов федерации, но и местных законодательств определенных штатов, что достаточно трудно, если вы не профессиональный юрист.&nbsp;</span></p>', 'litsenziya-na-kriptovalyuty-v-ssha', NULL, '2021-05-26 14:52:31', '2021-06-30 22:21:23', 'news/b.jpeg', 'Cryptocurrency License in the USA', '<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">At the legislative level, the license for </span><span style=\"font-family: Calibri; color: black;\">cryptocurrencies</span><span style=\"font-family: Calibri; color: black;\"> in the United States was secured in 2013. Then it was decided to lift the ban on </span><span style=\"font-family: Calibri; color: black;\">cryptocurrencies</span><span style=\"font-family: Calibri; color: black;\"> and develop special provisions for their use. </span><span style=\"font-family: Calibri; color: black;\">Cryptocurrencies</span><span style=\"font-family: Calibri; color: black;\"> in America are decentralized and used like regular money. </span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><strong><span style=\"font-family: Calibri; color: black;\">Consequently, exchanges and other companies that carry out transactions with crypto-money must:</span></strong></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">&nbsp;- be registered as financial service providers;</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">&nbsp;- have a license for </span><span style=\"font-family: Calibri; color: black;\">cryptocurrencies</span><span style=\"font-family: Calibri; color: black;\"> in the United States;</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">&nbsp;- report suspicious transactions to law enforcement.</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">Cryptocurrency</span><span style=\"font-family: Calibri; color: black;\"> taxes are also levied. Income from transactions with such funds is considered capital gains and is also subject to taxation in accordance with the rules of the United States Internal Revenue Service. Violation of the rules for exchanging such funds is considered a crime.</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">How individual states view </span><span style=\"font-family: Calibri; color: black;\">cryptocurrency</span><span style=\"font-family: Calibri; color: black;\"> licensing rules</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">The United States of America is a real example of a federal country that has a 3-tier division of powers. Nearly all areas of the law are regulated at the federal, state, and local municipal level. The same applies to the license for </span><span style=\"font-family: Calibri; color: black;\">cryptocurrencies</span><span style=\"font-family: Calibri; color: black;\"> in the United States, and the financial sector in general. Congress provides only a general outline of how to license </span><span style=\"font-family: Calibri; color: black;\">cryptocurrency</span><span style=\"font-family: Calibri; color: black;\">. Further, the parliaments of each state create their own personal, detailed rules, according to which the issuance of licenses of the financial plan is determined.</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">Since each individual state has its own rules for obtaining licenses, they are often very different in all regions of the state. This is where it becomes necessary to obtain permission in all individual states where the provision of exchange services is planned.</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">Difficulties in this issue are also brought in by the separate fact that in certain states, at the legislative level, the authorities have not yet developed an exact position regarding the regulation of </span><span style=\"font-family: Calibri; color: black;\">cryptocurrency</span><span style=\"font-family: Calibri; color: black;\">. Thus, in certain regions of the state, in theory, a license for </span><span style=\"font-family: Calibri; color: black;\">cryptocurrencies</span><span style=\"font-family: Calibri; color: black;\"> in the United States is not required.</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">What should you pay attention to?</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">Obtaining a </span><span style=\"font-family: Calibri; color: black;\">cryptocurrency</span><span style=\"font-family: Calibri; color: black;\"> license in the United States requires close attention to a number of details. If one or another legal nuance is not taken into account, the risk of refusal to issue a license increases significantly. Our experts are ready to help you in a situation of any complexity. Choosing the territory where the exchange will operate, the following points should also be taken into account:</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">&nbsp;- whether there are licenses for crypto-money in general, for example, in New Mexico, Montana, and South Carolina, as distinct from other states, this area is not regulated by government authorities;</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">&nbsp;- the amount of the authorized capital: in all states it is very different &ndash; from 1,000 to a million dollars;</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">&nbsp;- the amount of capital for support and development: it also varies greatly in the regions &ndash; from a thousand dollars to 1 million;</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">taxes on income from </span><span style=\"font-family: Calibri; color: black;\">cryptocurrency</span><span style=\"font-family: Calibri; color: black;\"> transactions, etc.</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><strong><span style=\"font-family: Calibri; color: black;\">Documents required obtaining a license</span></strong></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">As mentioned, all states have separate rules regarding obtaining licenses for crypto money, but in general they are quite similar. Often from entrepreneurs who wish to start dealing with the exchange of such financial units, a list of the following documents is required to obtain a permit:</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">&nbsp;- full name of the company and legal address;</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">&nbsp;- the name of the trade mark under which the </span><span style=\"font-family: Calibri; color: black;\">cryptocurrency</span><span style=\"font-family: Calibri; color: black;\"> exchange plans to operate;</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">&nbsp;- a complete list of offenses committed by the applicant in the last few months (this period differs from region to region);</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">&nbsp;- informational data about operating courts, where the declaring person acts as any of the parties;</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">&nbsp;- a list of financial services that were provided by the applicant in the past (if any), as well as services that are planned to be provided in the future;</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">&nbsp;- a complete list of places where it is planned to provide services for which a license is obtained;</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">&nbsp;- a list of specialists who are involved in working with clients;</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">&nbsp;- information data on the current bankruptcy processes, where the applicant appears;</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri; color: black;\">a sample client agreement.</span></p>\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; text-align: left; direction: ltr; unicode-bidi: embed; mso-line-break-override: none; word-break: normal; punctuation-wrap: hanging;\"><span style=\"font-family: Calibri;\">From what was said above, we can conclude that obtaining a license for </span><span style=\"font-family: Calibri;\">cryptocurrencies</span><span style=\"font-family: Calibri;\"> in the United States is a rather laborious process. The licensee needs not only knowledge of the laws of the federation, but also of the local laws of certain states, which is quite difficult if you are not a professional lawyer.&nbsp;</span></p>'),
(9, 'Биткойн восстанавливается после диких выходных, в результате которых он опустился ниже 32000 долларов', 1, '<blockquote>\r\n<p>Криптовалютный рынок вырос в понедельник после адской недели, в течение которой миллиарды долларов были стерты с стоимости биткойнов и эфира.</p>\r\n<p>Цена биткойна в понедельник поднялась выше уровня 39000 долларов после падения до менее чем 32000 долларов в воскресенье.</p>\r\n<p>Акции крупнейшей в мире криптовалюты подскочили более чем на 20% до 39 739,40 доллара к 16:06. ET, согласно Coin Metrics, после того, как генеральный директор Tesla Илон Маск и генеральный директор MicroStrategy Майкл Сэйлор написали в Твиттере о встрече с североамериканскими майнерами биткойнов по поводу &laquo;инициатив в области устойчивого развития&raquo;.</p>\r\n</blockquote>', 'bitkoyn-vosstanavlivaetsya-posle-dikikh-vykhodnykh-v-rezultate-kotorykh-on-opustilsya-nizhe-32000-dollarov', NULL, '2021-05-26 15:18:38', '2021-06-30 22:22:42', 'news/download.jpeg', 'Bitcoin rebounds after a wild weekend that took it below $32,000', '<blockquote>\r\n<p style=\"box-sizing: border-box; position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px;\">The crypto market edged higher Monday after a week of hell during which billions of dollars were wiped off the value of bitcoin and ether.</p>\r\n<p style=\"box-sizing: border-box; position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px;\">The price of Bitcoin rebounded above the $39,000 level Monday after plummeting to less than $32,000 on Sunday.</p>\r\n<div class=\"BoxInline-container  \" style=\"box-sizing: border-box; max-width: 300px; margin: 0px;\">\r\n<div id=\"BoxInline-ArticleBody-5\" class=\"BoxInline-container\" style=\"box-sizing: border-box; max-width: 300px; margin: 0px;\" data-module=\"mps-slot\"></div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p style=\"box-sizing: border-box; position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px;\">Shares of the world&rsquo;s largest cryptocurrency jumped more than 20% to $39,739.40 by 4:06 p.m. ET, according to Coin Metrics, after&nbsp;<a style=\"box-sizing: border-box; color: #2077b6; cursor: pointer;\" href=\"https://www.cnbc.com/quotes/TSLA\" target=\"_blank\" rel=\"noopener\">Tesla</a>&nbsp;CEO Elon Musk and&nbsp;<a style=\"box-sizing: border-box; color: #2077b6; cursor: pointer;\" href=\"https://www.cnbc.com/quotes/MSTR\" target=\"_blank\" rel=\"noopener\">MicroStrategy</a>&nbsp;CEO Michael Saylor tweeted about&nbsp;<a style=\"box-sizing: border-box; color: #2077b6; cursor: pointer;\" href=\"https://www.cnbc.com/2021/05/24/bitcoin-price-soars-after-elon-musk-tweet-on-sustainability-efforts.html\">meeting with North American bitcoin miners</a>&nbsp;about &ldquo;sustainability initiatives.&rdquo;</p>\r\n</blockquote>'),
(10, 'Биткойн упал примерно на 43% от своего недавнего пика', 1, '<p>Цены на биткойны стабилизировались в понедельник после того, как инвесторы пережили очередное падение курса криптовалют на выходных.</p>\r\n<p>Воскресная распродажа биткойнов продлила неделю падений после усиленного контроля над сектором со стороны регулирующих органов США и Китая.</p>\r\n<p>После резкого роста в начале этого года на волне интереса инвесторов цена криптовалют на прошлой неделе резко упала. С цены на 16 мая в 44 062 доллара биткойн упал примерно на 17%, включая снижение в воскресенье. Это также примерно на 43% ниже рекордного уровня в 64 788,34 доллара, установленного в апреле.</p>\r\n<p>Примерно в 4:30 утра по восточному времени в понедельник биткойн торговался около 36 400 долларов, отскочив от 24-часового минимума в 31 179,69 долларов. По данным CoinDesk, в воскресенье вечером он торговался около 34000 долларов. Ethereum, вторая по величине криптовалюта, выросла до 2261,62 доллара в понедельник с 24-часового минимума в 1733,58 доллара. Dogecoin торговался на уровне 32 цента, что значительно ниже 24-часового минимума в 24 цента.</p>', 'bitkoyn-upal-primerno-na-43-ot-svoego-nedavnego-pika', NULL, '2021-05-26 15:25:52', '2021-05-26 15:25:52', 'news/download (1).jpeg', 'Bitcoin Is Off About 43% From Its Recent Peak', '<p style=\"margin: 0px 0px 25px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; max-width: 620px; line-height: 1.62; color: #001e20; font-family: Aileron, Arial, sans-serif, Arial, sans-serif;\">Bitcoin prices stabilized on Monday, after investors endured another weekend tumble for cryptocurrencies.</p>\r\n<p style=\"margin: 0px 0px 25px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; max-width: 620px; line-height: 1.62; color: #001e20; font-family: Aileron, Arial, sans-serif, Arial, sans-serif;\">A Sunday selloff for Bitcoin extended a week of declines following increased scrutiny on the sector by&nbsp;<a class=\"icon none inline-hover\" style=\"margin: 0px; padding: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-decoration-line: none; border-bottom: 2px dotted var(--blue); position: relative; display: inline; width: auto; height: auto; line-height: 20.8px;\" href=\"https://www.barrons.com/articles/bitcoin-news-51621609828?mod=hp_LEAD_2_B_2&amp;mod=article_inline\" target=\"_blank\" rel=\"noopener\">regulators in the U.S. and China.</a></p>\r\n<div class=\"paywall\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: #001e20; font-family: Aileron, Arial, sans-serif, Arial, sans-serif;\">\r\n<p style=\"margin: 0px 0px 25px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; max-width: 620px; line-height: 1.62;\">After soaring earlier this year on a wave of investor interest, the price of cryptocurrencies slumped in the past week. From a May 16 price of $44,062, Bitcoin has dropped about 17%, including Sunday&rsquo;s decline. It is also down about 43% from its all-time high of $64,788.34 set in April.</p>\r\n<p style=\"margin: 0px 0px 25px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; max-width: 620px; line-height: 1.62;\">As of about 4:30 a.m. ET on Monday, Bitcoin traded around $36,400, bouncing off its 24-hour low of $31,179.69. It had been trading around $34,000 on Sunday evening, according to CoinDesk. Ethereum, the second-largest cryptocurrency, rose to $2,261.62 on Monday, from a 24-hour low of $1,733.58. Dogecoin was trading at 32 cents, well off its 24-hour low of 24 cents.</p>\r\n</div>'),
(11, 'Мем-монеты или цифровое золото? Блокчейн-аналитик взвешивает, куда движутся крипторынки', 1, '<p>Пространство криптовалют может разветвляться на три разных рынка - и люди могут даже перестать говорить о криптовалюте как о единой сущности через год, предсказал Пол Броуди, глобальный лидер блокчейнов в EY.</p>\r\n<p>По данным Coinmarketcap.com, в последние недели биткойн и эфир пережили бешеный рост: миллиарды долларов были стерты с их рыночной стоимости.</p>\r\n<p>Биткойн, крупнейшая цифровая валюта по рыночной капитализации, в какой-то момент упал на 30% до уровня 30 000 долларов. По данным Coin Metrics, с тех пор он частично отскочил до текущего уровня около 38 090 долларов.</p>', 'mem-monety-ili-tsifrovoe-zoloto-blokcheyn-analitik-vzveshivaet-kuda-dvizhutsya-kriptorynki', NULL, '2021-05-26 15:29:21', '2021-05-26 15:29:21', 'news/download (2).png', 'Meme coins or digital gold? Blockchain analyst weighs in on where crypto markets are headed', '<p style=\"box-sizing: border-box; position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px;\">The cryptocurrency space could branch out into three different markets &mdash; and people may even stop talking about crypto as a single entity one year on, predicted Paul Brody, global blockchain leader at EY.</p>\r\n<p style=\"box-sizing: border-box; position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px;\"><a style=\"box-sizing: border-box; color: #2077b6; cursor: pointer;\" href=\"https://www.cnbc.com/2021/05/24/bitcoin-ethereum-attempt-positive-start-to-week-after-wild-plunges.html\">Bitcoin and ether have had a wild ride</a>&nbsp;in recent weeks, with billions of dollars wiped off their market value, according to Coinmarketcap.com.</p>\r\n<div class=\"BoxInline-container  \" style=\"box-sizing: border-box; max-width: 300px; margin: 0px;\">\r\n<div id=\"BoxInline-ArticleBody-5\" class=\"BoxInline-container\" style=\"box-sizing: border-box; max-width: 300px; margin: 0px;\" data-module=\"mps-slot\"></div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p style=\"box-sizing: border-box; position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px;\">Bitcoin, the largest digital currency by market cap, at one point&nbsp;<a style=\"box-sizing: border-box; color: #2077b6; cursor: pointer;\" href=\"https://www.cnbc.com/2021/05/19/bitcoin-btc-price-plunges-but-bottom-could-be-near-.html\">plunged by 30%</a>&nbsp;to hover near the $30,000 level. It has since bounced back partially to current levels of about $38,090, according to Coin Metrics.</p>');

-- --------------------------------------------------------

--
-- Структура таблиці `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `project`
--

CREATE TABLE `project` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `project`
--

INSERT INTO `project` (`id`, `slag`, `view`) VALUES
(5, 'about', 'about'),
(6, 'proposal', 'proposal'),
(7, 'news', 'news'),
(8, 'new', 'new'),
(9, 'pol', 'pol'),
(10, 'bonus', 'bonus');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`, `verify_token`, `role`) VALUES
(1, 'Ів Вл', 'vv32@gmail.com', NULL, '$2y$10$oNSxjpLP6NQkdDq0O8vA/.f3Wgu4Tot9dEamPjwFvyXe9zYNQqMYm', 'mljHWiodLYhmCzss84DoZ4eLwmgTB3bUmwlJPBOqBhOY8RdqTBPoTl905QEG', '2021-05-26 09:47:01', '2021-05-26 09:47:08', 'active', NULL, 'owner');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `kslStatistics`
--
ALTER TABLE `kslStatistics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-kslStatistics-ip` (`ip`),
  ADD KEY `idx-kslStatistics-black_list_ip` (`black_list_ip`),
  ADD KEY `idx-kslStatistics-created_at` (`created_at`),
  ADD KEY `idx-kslStatistics-created_at-black_list_ip` (`created_at`,`black_list_ip`),
  ADD KEY `idx-kslStatistics-ip-created_at` (`ip`,`created_at`);

--
-- Індекси таблиці `massages`
--
ALTER TABLE `massages`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Індекси таблиці `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_verify_token_unique` (`verify_token`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `kslStatistics`
--
ALTER TABLE `kslStatistics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `massages`
--
ALTER TABLE `massages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблиці `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблиці `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблиці `project`
--
ALTER TABLE `project`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
