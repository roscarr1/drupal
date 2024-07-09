<?php

namespace Drupal\helloworld\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Hello.
   *
   * @return array
   *   Return Hello string.
   */
  public function hello() {
    $ola='perro';
    return [
      '#type' => 'markup',
      '#markup' => $this->t(<?php echo 'perro'; ?>'<h2>Hello World (Example Drupal 8 Controller) code:</h2>')
      . '<code><?php<br>namespace Drupal\helloworld\Controller;<br>'
      . 'use Drupal\Core\Controller\ControllerBase;<br><br>'
      . 'class DefaultController extends ControllerBase {<br>'
      . '&nbsp;&nbsp;public function hello() {<br>'
      . '&nbsp;&nbsp;&nbsp;&nbsp;return [<br>'
      . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\'#type\' => \'markup\',<br>'
      . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\'#markup\' => $this->t(\'Hello World (Example Drupal 10 Controller) code!\')<br>'
      . '&nbsp;&nbsp;&nbsp;&nbsp;];<br>&nbsp;&nbsp;}<br>}</code><br>'
      . '<!DOCTYPE html>
          <html lang="es">
          <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Tabla de demostración</title>
          </head>
          <body>
              <table>
                  <thead>
                      <tr>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Edad</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Juan</td>
                          <td>Pérez</td>
                          <td>30</td>
                      </tr>
                      <tr>
                          <td>María</td>
                          <td>Gómez</td>
                          <td>25</td>
                      </tr>
                      <tr>
                          <td>Pedro</td>
                          <td>López</td>
                          <td>40</td>
                      </tr>
                  </tbody>
              </table>
          </body>
          </html>
        ',
    ];
  }

}
