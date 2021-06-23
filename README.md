# Steps to run this project on your Linux/Ubuntu system:
___(Use terminal for run following commands, CTRL+ATL+T)___
***
### 1.You must have php installed. To check if it is installed run the following command:
```php --version```
__The result must be something like this :__ PHP 7.4.3 (cli) (built: Oct  6 2020 15:47:56) ( NTS )
### 2.You must have installed docker ,to check, run command :
```docker --version```
__The result must be something like this :__ Docker version 20.10.7, build f0df350
### 3.Start the MariaDB database by running the following command:
```
docker run --name project-db -d \
	   -p 3386:3306 \
	   -e MYSQL_ROOT_PASSWORD=root \
	   --restart unless-stopped \
	   mariadb:10.5
```
### 4.Open the directory for project,or create a new directory :
__Example :__ _/home/artiom/www/GymSystem-Project_
			  _/home/your-user-name/your-path-name/_
### 5.You can use git to Clone the project , like this:
__(you must have installed git:  ```git --version```)__ 
```git clone https://github.com/Artiom-Botnari/GymSystem-Project.git```	

Or u can Download Zip.

### 6.Open the directory GymSystem: 
```cd GymSystem```
__Now you are here :__ _/home/your-user-name/your-project-name/GymSystem-Project/GymSystem_
### 7.Run the following command:
```php artisan serve```
__Result:__ Starting Laravel development server: http://127.0.0.1:8000
### 8.Copy url and open it in browser:  http://127.0.0.1:8000.