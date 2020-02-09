<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Тестовое задание</h1>
    <h2 align="center">на должность PHP Developer в компанию Burning Buttons</h2>
    <br>
</p>



Используя datetime, написать небольшой сервис, который будет форматировать дату по разным стандартам (rus/usa/international), вычислять разницу между двумя датами (на входе две строки - дата в формате ISO на выходе n - число дней между датами) и проверять попадает ли дата в промежуток между днями недели (на входе три строки - дата в формате ISO, начало и конец периода [mon-sun], на выходе true/false).
Писать нужно с использованием фреймворка

### Запуск приложения

Если у вас не установлен [Composer](http://getcomposer.org/), вы можете установить его по инструкции, находящейся здесь [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

Теперь вы можете установить зависимости приложения, запустив следующую команду:

~~~
composer install
~~~

Теперь можете открыть приложение по следующему адресу (если для запуска приложения вы использовали localhost).

~~~
http://localhost/
~~~

### Запуск через Docker

Скопируйте и измените файл (при необходимости) `docker/.env.example`

    cp docker/.env.example docker/.env
    
Запустите команду для подготовки образов контейнеров

    docker-compose build    
    
И затем запустите контейнеры

    docker-compose up -d
    
Теперь можете открыть приложение по адресу:

    http://127.0.0.1:8080
