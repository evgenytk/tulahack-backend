## POST /api/login 
Метод авторизации
Параметры:
- phone
- password

## GET /api/auth/me
Метод для получения информации о профиле

## GET /api/auth/lessons
Метод для получения предметов

## GET /api/users/{userType}
Метод для получения всех пользователей по типу
Параметры
- userType == 1 - Ученик
- userType == 2 - Ученик
- userType == 3 - Родитель

## GET /api/schedules
Метод для получения расписания

## GET /api/schedules/lesson/{lessonId}
Метод для получения расписания по определенному предмету
- lessonId - идентификатор предмета



