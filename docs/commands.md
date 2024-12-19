# Commands

## php bin/console config:dump

### php bin/console debug:config twig

Если вы хотите узнать, какую конфигурацию вы можете передать в пакет "Twig", есть две команды bin/console, которые вам помогут. Первая:

```
php bin/console debug:config twig
```

Это выведет всю текущую конфигурацию под ключом twig, включая любые значения по умолчанию, которые добавляет пакет. Вы можете увидеть, что наш default_path установлен в каталог templates/, который берется из нашего файла конфигурации. Этот %kernel.project_dir% — просто причудливый способ указать на корень нашего проекта. Подробнее об этом позже.

### php bin/console config:dump twig

Вторая команда похожа: вместо debug:config используется config:dump:

```
php bin/console config:dump twig
```

debug:config показывает текущую конфигурацию... но config:dump показывает гигантское дерево примеров конфигурации, которое включает все, что возможно. Здесь вы можете увидеть глобалы с некоторыми примерами того, как вы можете использовать этот ключ. Это отличный способ увидеть все потенциальные опции, которые вы можете передать пакету... чтобы помочь ему настроить свои службы.

### php bin/console config:dump framework

Чтобы получить дополнительную информацию о FrameworkBundle, выполните:

```
php bin/console config:dump framework
```

### php bin/console config:dump framework cache

Чтобы немного увеличить масштаб, снова выполните команду, передав framework, а затем cache для фильтрации этого подключа:

```
php bin/console config:dump framework cache
```

# 08. debug:container & How Autowiring Works

```
php bin/console debug:autowiring
php bin/console debug:autowiring --all
```

Получение списка сервисов в service container:

```
php bin/console debug:container
```

# 10. The "prod" Environment

Очистка кэша

```
php bin/console cache:clear
```

# 13. Parameters

Помимо служб, он содержит параметры. Это простые значения конфигурации, и мы можем увидеть их, выполнив похожую команду:

```
php bin/console debug:container --parameters
```

Чтобы запустить команду в среде prod:

```
php bin/console debug:config framework cache --env=prod
```

# 20. Environment Variables

Визуализация переменных окружения с помощью debug:dotenv

```
php bin/console debug:dotenv
```
