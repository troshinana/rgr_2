<?php

use yii\db\Migration;

class m161213_063129_stucture extends Migration
{
    public function up()
    {
	$hash='$2y$13$Wqmv.iTTxTv0OmpDYbByIeJThKK.XROPfB8dK3fDa/wG1jljCZvia';
		$this->execute("
--
-- Структура таблицы `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `id` int(12) NOT NULL,
  `full_name` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `residential_address` text NOT NULL,
  `phone_number` text NOT NULL,
  `code_room` int(10) NOT NULL,
  `arrival_date` date NOT NULL,
  `date_of_departure` date NOT NULL,
  `status_application` tinyint(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `application`
--

INSERT INTO `application` (`id`, `full_name`, `date_of_birth`, `residential_address`, `phone_number`, `code_room`, `arrival_date`, `date_of_departure`, `status_application`) VALUES
(11, 'Трошина Наталья Сергеевна', '1995-07-06', 'г.Новосибирск, микрорайон Зеленый Бор, д.1, кв.1', '89137617137', 1, '2016-12-21', '2016-12-14', 1),
(12, 'Иванов Иван Иванович', '1996-09-13', 'г.Новосибирск, ул.Пролетарская, д.10, кв.167', '89137617137', 1, '2016-12-17', '2016-12-23', 1),
(14, 'Астахова Анна Андреевна', '1996-05-18', 'г.Новосибирск, ул.Советская, д.1, кв.5', '89138766545', 1, '2016-12-01', '2016-12-08', 1),
(15, 'Пирожникова Кристина Викторовна', '1996-04-18', 'г.Новосибирск, ул. Титова, д.12, кв.312', '89139876456', 1, '2016-12-01', '2016-12-15', 1),
(20, 'Лапардин Евгений Борисович', '1972-02-23', 'г.Новосибирск, ул.Пролетарская, д.10, кв.167', '89137617137', 3, '2016-12-22', '2016-12-29', 1),
(21, 'Трошина Наталья Сергеевна', '1995-07-06', 'г.Новосибирск, ул. Титова, д.12, кв.312', '89137617137', 2, '2016-12-10', '2016-12-23', 1),
(22, 'Портнягина Валентина Ивановна', '1972-02-23', 'г.Новосибирск, микрорайон Зеленый Бор, д.1, кв.1', '89138766545', 1, '2016-12-13', '2016-12-27', 0),
(23, 'Трошина Наталья Сергеевна', '1996-04-18', 'г.Новосибирск, ул.Советская, д.1, кв.5', '89138766545', 5, '2016-12-13', '2016-12-27', 1),
(24, 'Трошина Наталья Сергеевна', '1972-02-23', 'г.Новосибирск, ул.Пролетарская, д.10, кв.167', '89137617137', 5, '2016-12-13', '2016-12-27', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `booking_room`
--

CREATE TABLE IF NOT EXISTS `booking_room` (
  `code_booking` int(4) NOT NULL,
  `id` int(12) NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `booking_room`
--

INSERT INTO `booking_room` (`code_booking`, `id`, `status`) VALUES
(26, 11, 1),
(27, 14, 1),
(28, 12, 1),
(29, 15, 1),
(30, 20, 1),
(31, 21, 1),
(32, 23, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `Client`
--

CREATE TABLE IF NOT EXISTS `Client` (
  `code_client` int(4) NOT NULL,
  `full_name_client` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `residential_address` text NOT NULL,
  `phone_number` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Client`
--

INSERT INTO `Client` (`code_client`, `full_name_client`, `date_of_birth`, `residential_address`, `phone_number`) VALUES
(1, 'Портнягина Ирина Альбертовна', '1975-02-23', 'г.Мирный, ул.Тихонова, д.16, кв.2', '89137617137'),
(2, 'Лапардин Евгений Борисович', '1973-11-06', 'г.Новосибирск, ул.Пролетарская, д.5, кв.7', '89145677687'),
(3, 'Петров Петр Петрович', '1986-01-18', 'г.Новосибирск, ул.Печатников, д.9, кв.325', '89185678765'),
(4, 'Иванов Иван Иванович', '1985-07-08', 'г.Новосибирск, ул.Макаренко, д.8, кв.90', '89234568767'),
(5, 'Баранова Галина Ивановна', '1995-08-12', 'г.Новосибирск, ул.Солнечная, д.8, кв.70', '89134565434'),
(6, 'Козлов Даниил Александрович', '2016-06-24', 'г.Новосибирск, ул.Советская,д.46, кв.189', '89136543423'),
(7, 'Перепелица Злата Николаевна', '1995-08-12', 'амываива', '89136543423'),
(8, 'Козлов Даниил Александрович', '1995-08-12', 'г.Новосибирск, ул.Пролетарская, д.5, кв.7', '89136543423'),
(9, 'Козлов Даниил Александрович', '1995-08-12', 'г.Новосибирск, ул.Пролетарская, д.5, кв.7', '89136543423'),
(10, 'Козлов Даниил Александрович', '1995-08-12', 'г.Новосибирск, ул.Пролетарская, д.5, кв.7', '89136543423'),
(11, 'Козлов Даниил Александрович', '1995-08-12', 'г.Новосибирск, ул.Пролетарская, д.5, кв.7', '89136543423'),
(12, 'Козлов Даниил Александрович', '1995-08-12', 'г.Новосибирск, ул.Пролетарская, д.5, кв.7', '89136543423'),
(13, 'Козлов Даниил Александрович', '1995-08-12', 'г.Новосибирск, ул.Пролетарская, д.5, кв.7', '89136543423'),
(14, 'Козлов Даниил Александрович', '1995-08-12', 'г.Новосибирск, ул.Пролетарская, д.5, кв.7', '89136543423'),
(15, 'nhj', '0000-00-00', 'erta', 'ata'),
(16, 'hghf', '0000-00-00', 'ahah', 'ahah'),
(17, 'har', '0000-00-00', 'yayey', 'ayay'),
(18, 'gaga', '0000-00-00', 'gasg', 'agag'),
(19, 'sfhz', '0000-00-00', 'sgsdg', 'HHfdh'),
(20, 'zshzdf', '0000-00-00', 'sfhzdf', 'hzsfhzh'),
(21, 'dhbzdfh', '0000-00-00', 'dfhdzfh', 'zdfhzd'),
(22, 'gasdg', '0000-00-00', 'DgSDg', 'SDgsd'),
(23, 'fzsf', '0000-00-00', 'sgsd', 'GHdfh'),
(24, 'dgs', '0000-00-00', 'Gd', 'GG'),
(25, 'etE', '0000-00-00', 'etqtq', 'qtqtq'),
(26, 'fdhdfh', '0000-00-00', 'fhf', 'Hzfhzdf');

-- --------------------------------------------------------

--
-- Структура таблицы `Cooperator`
--

CREATE TABLE IF NOT EXISTS `Cooperator` (
  `code_cooperator` int(4) NOT NULL,
  `position` text NOT NULL,
  `full_name_cooperator` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Cooperator`
--

INSERT INTO `Cooperator` (`code_cooperator`, `position`, `full_name_cooperator`, `status`) VALUES
(1, 'Администратор', 'Трошина Наталья Сергеевна', 1);

-- --------------------------------------------------------

--


--


-- --------------------------------------------------------

--
-- Структура таблицы `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `code_room` int(10) NOT NULL,
  `nomer_room` int(100) NOT NULL,
  `cost` decimal(9,2) NOT NULL,
  `type` text NOT NULL,
  `сharacteristic` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `room`
--

INSERT INTO `room` (`code_room`, `nomer_room`, `cost`, `type`, `сharacteristic`) VALUES
(1, 1, '0.00', 'Стандартный', 'Уютный однокомнатный номер. Площадь номера - 23,6 кв.м.В НОМЕРЕ:Одна двуспальная или две односпальные кровати,анная комната,гардероб,универсальный стол,телефон (в т.ч. в ванной комнате),телевизор (российские и иностранные спутниковые каналы),холодильник, Wi-Fi доступ в Интернет (с 01.04.2013 бесплатно),cистема центрального кондиционирования'),
(2, 2, '3740.00', 'Повышенной комфортности', 'Однокомнатный номер, оснащенный современной удобной мебелью. Тщательно подобранный интерьер создает атмосферу уюта и комфорта для плодотворной работы или беспечного отдыха. Площадь номера – 23,6 кв.м.В НОМЕРЕ:одна двуспальная или две односпальные кровати (ортопедический матрас),ванная комната,гардероб,универсальный стол,телефон (в т.ч. в ванной комнате),\r\nТелевизор ЖК (российские и иностранные спутниковые каналы),холодильник,Wi-Fi подключение в Интернет (с 01.04.2013 бесплатно),система центрального кондиционирования,пресс для брюк'),
(3, 3, '4900.00', 'Бизнес', 'Из окна этого светлого номера бизнес-класса, оснащенного современной удобной мебелью, открывается панорамный вид на город. Тщательно подобранный интерьер создает атмосферу уюта и комфорта для плодотворной работы или беспечного отдыха.В числе удобств — телевизор с плоским экраном, кондиционер и холодильник. Собственная ванная комната укомплектована феном и бесплатными туалетно-косметическими принадлежностями.'),
(4, 4, '7140.00', 'Полулюкс-номер-студия', 'Просторный номер-студия состоит из двух зон - гостиной и спальни. Площадь номера – 37,6 кв.м. В стоимость номера включено пользование услугой Представительская гостиная, которая расположена в ресторане Планета Космос на 25 этаже. Услуга включает в себя завтрак и ужин в формате Шведский Стол, неограниченный доступ в течение 24 часов в сутки, снэки и освежающие напитки.Также в стоимость номера включено пользование услугой фитнес-центра Космос.'),
(5, 5, '7990.00', 'Люкс', 'Номер 'Люкс' состоит из двух раздельных комнат - гостиной и спальни, ванной комнаты и гостевого туалета. Площадь номера – 45,5 кв.м. В стоимость номера включено пользование услугой Представительская гостиная, которая расположена в ресторане Планета Космос на 25 этаже. Услуга включает в себя завтрак и ужин в формате Шведский Стол, неограниченный доступ в течение 24 часов в сутки, снэки и освежающие напитки.Также в стоимость номера включено пользование услугой фитнес-центра Космос.'),
(6, 6, '9690.00', 'Люкс гранд', 'Полностью обновленный комфортабельный двухкомнатный номер состоит из гостиной, спальни, ванной комнаты и гостевого туалета. Расположение номера позволяет любоваться видами города, открывающимися в разных направлениях. Площадь номера – 61,2 кв.м. В стоимость номера включено пользование услугой Представительская гостиная, которая расположена в ресторане Планета Космос на 25 этаже. Услуга включает в себя завтрак и ужин в формате Шведский Стол, неограниченный доступ в течение 24 часов в сутки, снэки и освежающие напитки.Также в стоимость номера включено пользование услугой фитнес-центра Космос.');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Natalia', '27mON42FcrRpJDkany1zMemzQd3Bqfnz', '$hash', NULL, 'troshns@mail.ru', 10, 1480930942, 1480930942);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_room` (`code_room`);

--
-- Индексы таблицы `booking_room`
--
ALTER TABLE `booking_room`
  ADD PRIMARY KEY (`code_booking`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`code_client`),
  ADD KEY `code_client` (`code_client`);

--
-- Индексы таблицы `Cooperator`
--
ALTER TABLE `Cooperator`
  ADD PRIMARY KEY (`code_cooperator`),
  ADD KEY `code_cooperator` (`code_cooperator`);

--


--
-- Индексы таблицы `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`code_room`),
  ADD KEY `code_room` (`code_room`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `application`
--
ALTER TABLE `application`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT для таблицы `booking_room`
--
ALTER TABLE `booking_room`
  MODIFY `code_booking` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT для таблицы `Client`
--
ALTER TABLE `Client`
  MODIFY `code_client` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT для таблицы `Cooperator`
--
ALTER TABLE `Cooperator`
  MODIFY `code_cooperator` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `room`
--
ALTER TABLE `room`
  MODIFY `code_room` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`code_room`) REFERENCES `room` (`code_room`);

--
-- Ограничения внешнего ключа таблицы `booking_room`
--
ALTER TABLE `booking_room`
  ADD CONSTRAINT `booking_room_ibfk_1` FOREIGN KEY (`id`) REFERENCES `application` (`id`);");
   }

    public function down()
    {
        echo "m161213_063129_stucture cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}


