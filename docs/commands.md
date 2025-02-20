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

Прогрев кэша

```
php bin/console cache:warmup
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

# 21. The Secrets Vault

Если вы хотите хранить секреты в хранилище, вам понадобится два из них: одно для среды разработки и одно для среды производства. Сначала мы создадим эти два хранилища... затем я объясню, как считывать из них значения.

Начните с создания среды разработки. Запустите:

```
php bin/console secrets:set
```

# 22. Reading Secrets vs Env Vars

Теперь давайте создадим хранилище среды prod. Сделайте это, сказав:

```
php bin/console secrets:set GITHUB_TOKEN --env=prod
```

Просмотр списка секретных значений

```
php bin/console secrets:list
php bin/console secrets:list --reveal
php bin/console secrets:list --reveal --env=prod
```

# 23. MakerBundle & Autoconfiguration

Создание собственной новой пользовательской консольной команды

```
php bin/console make:command
```
