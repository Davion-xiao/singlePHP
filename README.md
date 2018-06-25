
App---|                     项目应用目录
	  |-----Controller      控制器目录
	  |-----View            视图目录
Core--|                     框架核心库文件目录
      |-----lib             核心类库
	  |----common           公用函数库
	  |----log              日志类
	  |----config           配置文件目录
	  |----error_log        错误日志目录
Public|----static           静态资源目录CSS，JS，Image
	  |----index.php        入口文件
Vendor                      第三方库文件
.htaccess                   分布式目录部署文件
Composer.json  Composer     依赖安装文件
Composer.lock  Composer     锁文件

入口文件定义
入口文件主要完成：
定义框架路径、项目路径（可选）
定义系统相关常量（可选）
载入框架入口文件（必须）
命名规范
SinglePHP遵循PSR-2命名规范和PSR-4自动加载规范，并且注意如下规范：

目录和文件
目录使用小写+下划线；
类库、函数文件统一以.php为后缀；
类的文件名均以命名空间定义，并且命名空间的路径和类库文件所在路径一致；
类文件采用驼峰法命名（首字母大写），其它文件采用小写+下划线命名；
类名和类文件名保持一致，统一采用驼峰法命名（首字母大写）；
函数和类、属性命名
类的命名采用驼峰法（首字母大写），例如 User、UserType，默认不需要添加后缀，例如UserController应该直接命名为User；
函数的命名使用小写字母和下划线（小写字母开头）的方式，例如 get_client_ip；
方法的命名使用驼峰法（首字母小写），例如 getUserName；
属性的命名使用驼峰法（首字母小写），例如 tableName、instance；
以双下划线“__”打头的函数或方法作为魔术方法，例如 __call 和 __autoload；
常量和配置
常量以大写字母和下划线命名，例如 APP_PATH和 THINK_PATH；
配置参数以小写字母和下划线命名，例如 url_route_on 和url_convert；
数据表和字段
数据表和字段采用小写加下划线方式命名，并注意字段名不要以下划线开头，例如 think_user 表和 user_name字段，不建议使用驼峰和中文作为数据表字段命名。
应用类库命名空间规范
应用类库的根命名空间统一为app；
例如：app\index\controller\Index和app\index\model\User。
详情参考PHP手册和函数定义库文件。




