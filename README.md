# Laravel Debug Switch
You should never have to turn debugging on in production. Unfortunately, "should never" and "will never" are not the same.

This package will allow you to quickly turn debugging on or off for your current session, and only your session. If you need to debug something in production, you can simply turn debugging on for yourself and no other users will be affected.

Laravel Debug Switch is also handy for development. Some debugging tools, like the brilliant [laravel-debugbar](https://github.com/barryvdh/laravel-debugbar), can take up quite a lot of your resources. If you don't need debugging to be constantly turned on whilst developing, you can quickly switch it on or off without having to edit your `.env` file.
