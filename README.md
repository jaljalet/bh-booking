# Основные команды Git

## 1. Настройка Git
```bash
git config --global user.name "Твоё Имя"
git config --global user.email "твоя_почта@example.com"
```

## 2. Клонирование удалённого репозитория
```bash
git clone https://github.com/user/repository.git
```

## 3. Проверка состояния репозитория
```bash
git status
```

## 4. Получение последних изменений с удалённого репозитория
```bash
git pull origin main
```

## 5. Добавление файлов в коммит
```bash
git add .
```
(Можно добавить конкретный файл: `git add filename.txt`)

## 6. Создание коммита
```bash
git commit -m "Описание изменений"
```

## 7. Отправка изменений в удалённый репозиторий
```bash
git push origin main
```
(Если ветка ещё не создана, используйте `git push --set-upstream origin main`)

## 8. Создание и переключение на новую ветку
```bash
git checkout -b new-branch
```
(Переключение на существующую ветку: `git checkout branch-name`)

## 9. Слияние ветки с основной
```bash
git checkout main
git pull origin main
git merge new-branch
```

## 10. Просмотр истории коммитов
```bash
git log --oneline --graph --all
```

## 11. Удаление ветки
Локально:
```bash
git branch -d branch-name
```
На удалённом сервере:
```bash
git push origin --delete branch-name
```

## 12. Восстановление изменений
Отменить `git add`:
```bash
git reset HEAD filename.txt
```
Отменить локальные изменения в файле:
```bash
git checkout -- filename.txt
```
Откатить последний коммит (оставив изменения в файлах):
```bash
git reset --soft HEAD~1
```
Удалить коммит без возможности восстановления:
```bash
git reset --hard HEAD~1
