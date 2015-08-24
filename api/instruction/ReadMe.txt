/**
 * Author - Dhamayanthi
 */


 1. composer install

  2. composer update

  3. import ietms_23_08.sql database(api/db/ietms_23_08.sql)

  4.config db(common/config/main-local.php)

  'components' => [
          'db' => [
              'class' => 'yii\db\Connection',
              'dsn' => 'mysql:host=localhost;dbname=ietms_23_08',
              'username' => 'root',
              'password' => 'root',
              'charset' => 'utf8',
          ]

 5.config cookie validation & gii



          $config = [
              'components' => [
                  'request' => [
                      // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
                      'cookieValidationKey' => 'Y2L-BrzfhxFcMs_7EzGdSOfvVWDCUdNd',
                  ],
              ],
          ];


          if (!YII_ENV_TEST) {
              // configuration adjustments for 'dev' environment
          //    $config['bootstrap'][] = 'debug';
          //    $config['modules']['debug'] = 'yii\debug\Module';
              $config['bootstrap'][] = 'gii';
              $config['modules']['gii'] = 'yii\gii\Module';


          }

          return $config;


  6. can access gii tool
          http://localhost:8888/yii2-webservice/frontend/web/index.php/gii


 
 Use postman to get response.
 
 Ex:
    Base Url : http://127.0.0.1/RestfullApi/api/web/v1
 
    Get All Countries
    Method : GET
    URL    : /countries
    
    Get Particular Country
    Method : GET
    URL    : /countries/IN
    
    Create New Country
    Method : POST
    URL    : /countries
    Params : code, name, population
    




    