# Slim Framework 4 Skeleton Application

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

    php composer.phar create-project gallu/slim4-skeleton [my-app-name]

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can run these commands 

	cd [my-app-name]
	php composer.phar start

Run this command in the application directory to run the test suite

	php composer.phar test

That's it! Now go build something cool.

## ライセンス

本プロジェクトはMIT Licenseで公開しています。
商用・非商用を問わず、利用・改変・再配布が可能です。

利用・再配布に際しては、MIT Licenseに従い、
著作権表示およびライセンス表示を保持してください。

詳細は [LICENSE](LICENSE) を参照してください。
