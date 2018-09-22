<?php

namespace Faker\Provider\si_LK;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{middleNameMale}} {{lastName}}',
        '{{lastName}} {{firstNameMale}} {{middleNameMale}}',
    );

    /**
     * This provider uses wikipedia's 250 top russian last names
     * That list of MALE last names could be safely extended to FEMALE list just by adding 'a' letter at the end
     */
    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{middleNameFemale}} {{lastName}}а',
        '{{lastName}}а {{firstNameFemale}} {{middleNameFemale}}',
    );

    /**
     * {@link} http://ru.wikipedia.org/wiki/%D0%A0%D1%83%D1%81%D1%81%D0%BA%D0%BE%D0%B5_%D0%BB%D0%B8%D1%87%D0%BD%D0%BE%D0%B5_%D0%B8%D0%BC%D1%8F
     * {@link} http://masterrussian.com/aa031701a.shtml
     **/
    protected static $firstNameMale = array(
        'Amal', 'Ashen', 'Anil', 'Asanka', 'Adithya', 'Anusha', 'Avantha', 'Anuhas', 'Amila', 'Ayesha', 'Adheesha', 'Akalanka', 'Anurudda', 'Achala', 'Anuranga', 'Amith', 'Arunoda', 'Aruna', 'Aravinda', 'Achintha', 'Asoka',
        'Bhashitha', 'Bhagya', 'Binara', 'Bandu', 'Basuru', 'Bhathiya', 'Buddika', 'Buddadasa', 'Bimal', 'Bimalka',
        'Chathura', 'Chamara', 'Chamod', 'Chamika', 'Chamikara', 'Chanaka', ' Chinthaka', 'Chameera', 'Chaveen', 'Chandrasena', 'Chandimal',
        'Dhanushka', 'Dinesh', 'Dinusha', 'Danuka', 'Dammika', 'Dayan', 'Dakshina', 'Dilshan', 'Damith', 'Dasun', 'Dulshan', 'Dimuthu', 'Dulaj', 'Dharshana', 'Devinda', ' Duleepa',' Deshan', 'Dumindu', 'Dinuka', 'Deepal',
        'Eranga', 'Eranda', 'Eranjan',
        'Gayan', 'Gayeshan', 'Gayesha', 'Gihan', 'Gamini',
        'Harsha', 'Hasitha', 'Hashan', 'Heshan', 'Hansana', 'Hansika', 'Hiran', 'Hirantha', 'Harshana',
        'Iresh', 'Isuru', 'Ishan', 'Imalka', 'Iman', 'Isitha', 'Indika', 'Isira',
        'Jehan', 'Janith', 'Janidu', 'Jayamal', 'Jayanil', 'Janitha', 'Janaka',
        'Kamal', 'Kavinda', 'Kaveesha', 'Kosala', 'Krishan', 'Kushan', 'Kaumal', 'Kanishka', 'Kalindu', 'Kavindu', 'Kaviru', 'Keshan', 'Kalpana', 'Kasun', 'Keerthi', 'Kanchana',
        'Lakmal', 'Lasandu', 'Lalith', 'Lasith', 'Lasitha', 'Livendra', 'Liyantha', 'Livindul', 'Lakshan', 'Lasantha', 'Lakshman', 'Lahiru',
        'Manisha', 'Malith', 'Mohan', 'Mahesh', 'Mihindu', 'Mihira', 'Miyuru', 'Mahinda', 'Maduka', 'Malaka', 'Milhan',
        'Namal', 'Nilanga', 'Nirosh', 'Niresh', 'Nimal', 'Nilatha', 'Nisitha', 'Nadun', 'Nisal', 'Narada', 'Nalaka', 'Nevil', 'Nimnada', 'Nalin', 'Nimantha', 'Nalaka', 'Nuwan', 'Nayanajith', 'Niluka', 'Nilantha', 'Nipun',
        'Oshan', 'Owindu', 'Owantha',
        'Pradeep', 'Prasad', 'Priyanga', 'Priyankara', 'Promod', 'Patalee', 'Purwika', 'Purna', 'Piumal', 'Prasanna', 'Prageeth', 'Praveen', 'Palitha', 'Pathum', 'Prashan', 'Pasindu',
        'Ruwan', 'Rukshan', 'Randika', 'Ramesh', 'Ruwantha', 'Ruvindu', 'Roshan', 'Romesh', 'Rohitha', 'Rukman', 'Ranga', 'Ruchira', 'Ranil', 'Rajitha', 'Ruwandika', 'Rumesh',
        'Sahan', 'Susil', 'Sathijee', 'Sampath', 'Sidath', 'Sudesh', 'Shreemal', 'Sudath', 'Susitha', 'Sudarshana', 'Sumudu', 'Siripala', 'Sanjeewa', 'Sujeewa', 'Suranga', 'Supun', 'Sajith', 'Samantha', 'Saman', 'Shanilka', 'Sanka', 'Sumith',
        'Theekshana', 'Tharindu', 'Thejan', 'Thimira', 'Thanuka', 'Thiwanka', ' Tharaka', 'Thilak', 'Thameera', 'Thisara', 'Thilan', 'Thiunuwan',
        'Uditha', 'Udayanga', 'Umesh', ' Upali', 'Udaya',
        'Vishwa', 'Vidwa', 'Varuna', 'Viduranga', 'Vidura',
        'Wasantha', 'Wageesha', 'Wikum',
        'Yuresh', 'Yohan', 'Yeshan', 'Yasiru',
    );

    /**
     * {@link} http://masterrussian.com/aa031001a.shtml
     **/
    protected static $firstNameFemale = array(
        'Александра', 'Алина', 'Алиса', 'Алла', 'Альбина', 'Алёна', 'Анастасия', 'Анжелика', 'Анна', 'Антонина', 'Анфиса', 'Валентина', 'Валерия',
        'Варвара', 'Василиса', 'Вера', 'Вероника', 'Виктория', 'Владлена', 'Галина', 'Дарья', 'Диана', 'Дина', 'Доминика', 'Ева',
        'Евгения', 'Екатерина', 'Елена', 'Елизавета', 'Жанна', 'Зинаида', 'Злата', 'Зоя', 'Изабелла', 'Изольда', 'Инга', 'Инесса',
        'Инна', 'Ирина', 'Искра', 'Капитолина', 'Клавдия', 'Клара', 'Клементина', 'Кристина', 'Ксения', 'Лада', 'Лариса', 'Лидия',
        'Лилия', 'Любовь', 'Людмила', 'Люся', 'Майя', 'Мальвина', 'Маргарита', 'Марина', 'Мария', 'Марта', 'Надежда', 'Наталья',
        'Нелли', 'Ника', 'Нина', 'Нонна', 'Оксана', 'Олеся', 'Ольга', 'Полина', 'Рада', 'Раиса', 'Регина', 'Рената',
        'Розалина', 'Светлана', 'Софья', 'София', 'Таисия', 'Тамара', 'Татьяна', 'Ульяна', 'Фаина', 'Федосья', 'Флорентина', 'Эльвира', 'Эмилия',
        'Эмма', 'Юлия', 'Яна', 'Ярослава',
    );

    protected static $middleNameMale = array(
        'Александрович', 'Алексеевич', 'Андреевич', 'Дмитриевич', 'Евгеньевич',
        'Сергеевич', 'Иванович', 'Фёдорович', 'Львович', 'Романович', 'Владимирович',
        'Борисович', 'Максимович',
    );

    protected static $middleNameFemale = array(
        'Александровна', 'Алексеевна', 'Андреевна', 'Дмитриевна', 'Евгеньевна',
        'Сергеевна', 'Ивановна', 'Фёдоровна', 'Львовна', 'Романовна', 'Владимировна',
        'Борисовна', 'Максимовна',
    );

    /**
     * {@link} http://ru.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_%D0%BE%D0%B1%D1%89%D0%B5%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%B8%D1%85_%D1%84%D0%B0%D0%BC%D0%B8%D0%BB%D0%B8%D0%B9
     **/
    protected static $lastName = array(
        'Смирнов', 'Иванов', 'Кузнецов', 'Соколов', 'Попов', 'Лебедев', 'Козлов',
        'Новиков', 'Морозов', 'Петров', 'Волков', 'Соловьёв', 'Васильев', 'Зайцев',
        'Павлов', 'Семёнов', 'Голубев', 'Виноградов', 'Богданов', 'Воробьёв',
        'Фёдоров', 'Михайлов', 'Беляев', 'Тарасов', 'Белов', 'Комаров', 'Орлов',
        'Киселёв', 'Макаров', 'Андреев', 'Ковалёв', 'Ильин', 'Гусев', 'Титов',
        'Кузьмин', 'Кудрявцев', 'Баранов', 'Куликов', 'Алексеев', 'Степанов',
        'Яковлев', 'Сорокин', 'Сергеев', 'Романов', 'Захаров', 'Борисов', 'Королёв',
        'Герасимов', 'Пономарёв', 'Григорьев', 'Лазарев', 'Медведев', 'Ершов',
        'Никитин', 'Соболев', 'Рябов', 'Поляков', 'Цветков', 'Данилов', 'Жуков',
        'Фролов', 'Журавлёв', 'Николаев', 'Крылов', 'Максимов', 'Сидоров', 'Осипов',
        'Белоусов', 'Федотов', 'Дорофеев', 'Егоров', 'Матвеев', 'Бобров', 'Дмитриев',
        'Калинин', 'Анисимов', 'Петухов', 'Антонов', 'Тимофеев', 'Никифоров',
        'Веселов', 'Филиппов', 'Марков', 'Большаков', 'Суханов', 'Миронов', 'Ширяев',
        'Александров', 'Коновалов', 'Шестаков', 'Казаков', 'Ефимов', 'Денисов',
        'Громов', 'Фомин', 'Давыдов', 'Мельников', 'Щербаков', 'Блинов', 'Колесников',
        'Карпов', 'Афанасьев', 'Власов', 'Маслов', 'Исаков', 'Тихонов', 'Аксёнов',
        'Гаврилов', 'Родионов', 'Котов', 'Горбунов', 'Кудряшов', 'Быков', 'Зуев',
        'Третьяков', 'Савельев', 'Панов', 'Рыбаков', 'Суворов', 'Абрамов', 'Воронов',
        'Мухин', 'Архипов', 'Трофимов', 'Мартынов', 'Емельянов', 'Горшков', 'Чернов',
        'Овчинников', 'Селезнёв', 'Панфилов', 'Копылов', 'Михеев', 'Галкин', 'Назаров',
        'Лобанов', 'Лукин', 'Беляков', 'Потапов', 'Некрасов', 'Хохлов', 'Жданов',
        'Наумов', 'Шилов', 'Воронцов', 'Ермаков', 'Дроздов', 'Игнатьев', 'Савин',
        'Логинов', 'Сафонов', 'Капустин', 'Кириллов', 'Моисеев', 'Елисеев', 'Кошелев',
        'Костин', 'Горбачёв', 'Орехов', 'Ефремов', 'Исаев', 'Евдокимов', 'Калашников',
        'Кабанов', 'Носков', 'Юдин', 'Кулагин', 'Лапин', 'Прохоров', 'Нестеров',
        'Харитонов', 'Агафонов', 'Муравьёв', 'Ларионов', 'Федосеев', 'Зимин', 'Пахомов',
        'Шубин', 'Игнатов', 'Филатов', 'Крюков', 'Рогов', 'Кулаков', 'Терентьев',
        'Молчанов', 'Владимиров', 'Артемьев', 'Гурьев', 'Зиновьев', 'Гришин', 'Кононов',
        'Дементьев', 'Ситников', 'Симонов', 'Мишин', 'Фадеев', 'Комиссаров', 'Мамонтов',
        'Носов', 'Гуляев', 'Шаров', 'Устинов', 'Вишняков', 'Евсеев', 'Лаврентьев',
        'Брагин', 'Константинов', 'Корнилов', 'Авдеев', 'Зыков', 'Бирюков', 'Шарапов',
        'Никонов', 'Щукин', 'Дьячков', 'Одинцов', 'Сазонов', 'Якушев', 'Красильников',
        'Гордеев', 'Самойлов', 'Князев', 'Беспалов', 'Уваров', 'Шашков', 'Бобылёв',
        'Доронин', 'Белозёров', 'Рожков', 'Самсонов', 'Мясников', 'Лихачёв', 'Буров',
        'Сысоев', 'Фомичёв', 'Русаков', 'Стрелков', 'Гущин', 'Тетерин', 'Колобов',
        'Субботин', 'Фокин', 'Блохин', 'Селиверстов', 'Пестов', 'Кондратьев', 'Силин',
        'Меркушев', 'Лыткин', 'Туров',
    );

    /**
     * Return male middle name
     *
     * @example 'Иванович'
     *
     * @access public
     *
     * @return string Middle name
     */
    public function middleNameMale()
    {
        return static::randomElement(static::$middleNameMale);
    }

    /**
     * Return female middle name
     *
     * @example 'Ивановна'
     *
     * @access public
     *
     * @return string Middle name
     */
    public function middleNameFemale()
    {
        return static::randomElement(static::$middleNameFemale);
    }

    /**
     * Return middle name for the specified gender.
     *
     * @access public
     * @param string|null $gender A gender the middle name should be generated
     *     for. If the argument is skipped a random gender will be used.
     * @return string Middle name
     */
    public function middleName($gender = NULL)
    {
        if ($gender === static::GENDER_MALE) {
            return $this->middleNameMale();
        } else if ($gender === static::GENDER_FEMALE) {
            return $this->middleNameFemale();
        }

        return $this->middleName(static::randomElement(array(
            static::GENDER_MALE,
            static::GENDER_FEMALE,
        )));
    }
}
