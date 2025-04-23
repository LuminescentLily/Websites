<?php

  function display_sum_table($query) {
    // retrieve all the fields as an array
    $fields = mysqli_fetch_fields($query);

    // create column headers by using the field names
    $header_row = '<th>Total Salary</th>';

    // create rows of data
    $records = mysqli_fetch_all($query, MYSQLI_ASSOC);
    $data_rows = '';
    foreach ($records as $record) {
      $data_rows .= '<tr>';

      foreach ($fields as $field) {
        $data_rows .= '<td>$' . $record[$field->name] . '</td>';
      }

      $data_rows .= '</tr>';
    }

    return '<table><tr>' . $header_row . '</tr>' . $data_rows . '</table>';
  }
