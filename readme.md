задание следующее
Есть файл: http://autoload.avito.ru/format/Models.xml

Каждый элемент <Model /> - это отдельная модель автомобиля справочника. Атрибуты:
Make - название марки, 
Model  - название модели

Нужно сделать следующее:
1. php-скрипт который будет производить импорт информации из данного файла в базу данных
2. вывод импортированной информации, где марка будет выступать как раздел, модель как запись. 
Пример:
[+] AC
[+] Acura
...

После клика на марку:
[-] AC
 * Ace
 * Aceca
 * Cobra
 * Другая
[+] Acura
...

3. в выводе предусмотреть редактирование и удаление записей, без добавления
4. для загрузки списка моделей марки, редактирования и удаления информации необходимо использовать 
ajax (все действия производятся без перезагрузки страницы)

Условия:
1. марки и модели нужно хранить в отдельных таблицах
2. наличие внешних ключей обязательно (foreign keys)
3. при удалении марки удаляются все дочерние модели
---
для фронта используем jquery, на сервере ларавель
и соблюдение psr-4 обязательно