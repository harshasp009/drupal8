<?php

/**
 * @file
 * Contains \Drupal\register_form\Controller\RegisterFormController.
 */

namespace Drupal\register_form\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Query;
//use Drupal\Core\Database\Database;

/**
 * Controller routines for Register Form routes.
 */
class RegisterFormController extends ControllerBase {
  /**
   * To View the data in tablular Format
   */
  public function viewData(){
    $header = array(
      // The header gives the table the information it needs in order to make
      // the query calls for ordering. TableSort uses the field information
      // to know what database column to sort by.
      array('data' => t('Registartion ID'),'field' => 't.pid'),
      array('data' => t('Phone Number'),'field' => 't.phone_no'),
    );

//    $schema = Database::getConnection();
//    $result=$schema->Select('register_form','t');
//    //$result->extend('Drupal\Core\Database\Query\TableSortExtender');
//    $result->fields('t');
//    //$result->orderBy($header);
//    $result->execute();
           //->fetchAssoc();
    //$result = db_query('select * from register_form');
    $query = db_select('register_form','t')
             ->extend('Drupal\Core\Database\Query\TableSortExtender');
    $query->fields('t');
            $result = $query
              ->orderByHeader($header)
              ->execute();
    $rows = array();
//    while($row = $query= $result->fetchAssoc()) {
//
//      $rows[] = array(
//        $row->pid,
//        $row->phone_no,
//        $row->phone_no,
//      );
//    }



    foreach ($result as $row) {
      // Normally we would add some nice formatting to our rows
      // but for our purpose we are simply going to add our row
      // to the array.
      $rows[] = array('data' => (array) $row);
//      $rows[] = array(
//         $row[0],
//         $row[1]
//
//      );

    }
//    print "<pre>";
//    print_r($rows);
//    print "</pre>";
//    die();

    // Build the table for the nice output.
    $build = array(
      '#markup' => '<p>' . t('List of Data available.') . '</p>',
    );
    $build['tablesort_table'] = array(
      '#theme' => 'table',
      '#header' => $header,
      '#rows' => $rows,
    );

    return $build;
  }

}
