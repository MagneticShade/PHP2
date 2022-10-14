
<?php
/* и так, кто бы ты ни был, ты здесь, а значит, тебе нужны ответы, некоторые я дам а остальные не знаю и сам */
/*spl_autoload_register загружает функцию вне зависимости от того вызывали мы её или нет, она же в свою очередь загрузить нам классы находящиеся у нас в отдельных файлах.
Как? Понятия не имею
Важно, замените beta-test на название своей папки,иначе не заработает*/
spl_autoload_register(function ($class) {
    require __DIR__ . DIRECTORY_SEPARATOR . implode(
            DIRECTORY_SEPARATOR,
            explode('\\', str_replace('beta-test', '', $class))
        ) . '.php';
});
/* Тут мы задаём новый объект. Мы применяем функции из классов объявленных в других файлах.В CarInfo мы вызвали все другие классы, тут по принципу матрёшки
В начале идёт new CarInfo так, как он содержит другие классы, затем идут Brand, Owner, Model. Почему в такой последовательности?
Если перейти в класс CarInfo то можно заметить что именно в такой последовательности были сцеплены классы
Далее идут переменные функции, опять же ровно в том порядке в котором они были заданы
И ещё кое-что, middleName это необязательный параметр, т.е функция сработает и без него*/
$car= new CarInfo(
    brand: new Brand(
        name:'BMW',
        country:new Country('Germany','eu','+2'),
    ),
    owner: new Owner(
        firstName: 'Вася',
        lastName: 'Иванов',
        email: 'SOBAKA@.ru',
        phoneNumber: '+712349141',
        middleName:'Иванович' ),
    model: new Model(
        name:'x5',
        country:new Country('Swedish','eu','+2'),
        productionDate:new DateTime('2022-01-10'),
        productionDateEnd:new DateTime('2022-01-10'),
        techSpec:'asdf'),
);
/* Это тестовый вариант,чтобы проверить работает ли код.
Функции можно заменить, соблюдая правило "Матрёшки"
P.S. Надозапускать через OPEN SERVER */
echo($car->getBrand()->getName());

