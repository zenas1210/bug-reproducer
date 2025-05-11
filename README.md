To reproduce the issue run:

```
docker compose up
```

You should see something like `php-1 exited with code 70`

After commenting out the `$dummyProperty2` in `DummyTrait.php` the fpm should start working:

```
docker compose up
[+] Running 1/1
 ✔ Container bug-reproducer-php-1  Created                                            0.0s
Attaching to php-1
php-1  | [11-May-2025 00:37:50] NOTICE: fpm is running, pid 1
php-1  | [11-May-2025 00:37:50] NOTICE: ready to handle connections
```
