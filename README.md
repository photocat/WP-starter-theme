# Test task

## How to install:
1. Download or clone repository
2. Create in the root of project `.env` file with vars
    - `MYSQL_ROOT_PASSWORD`
    - `MYSQL_USER`
    - `MYSQL_PASSWORD`
3. Run `docker-compose up -d` in terminal from project root
4. With help of `phpMyAdmin` (http://localhost:3333) you can import DB (DB dump you can find in `db` folder in the 
   root of project)
5. Now you can check if I am good enough for your company (http://localhost:8000)
6. For testing `Webpack` you need to run `npm i` in terminal and use: 
   - `npm run build` - for building assets 
   - `npm run watch` - for watching
7. Creds for `/wp-admin` is: 
   - login: admin
   - password: admin

**Enjoy!** 😉
