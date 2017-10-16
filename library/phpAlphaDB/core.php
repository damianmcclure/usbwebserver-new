<?php
	error_reporting(0);
	@ini_set('display_errors', 0);
	ini_set('memory_limit', '-1');
	set_time_limit(0); 
	
	$alphaRoot = '../library/phpAlphaDB/';
	
	include($alphaRoot.'components/config.php');
	include($alphaRoot.'components/crypt.php');
	include($alphaRoot.'components/validators.php');
	include($alphaRoot.'components/ipinfo.php');
	include($alphaRoot.'components/remoting.php');
	
	//check if everything is OK
	if (!file_exists($global_path)) {
		mkdir($global_path);
	}
	
	//database functions
	function db_create($value_name) {
		$success = false;
		global $global_path;
		global $global_extension;
		$value_name = str_replace(' ', '_', $value_name);
		if (!file_exists($global_path.$value_name.$global_extension)) {
			$f = fopen($global_path.$value_name.$global_extension, "w");
			fwrite($f, '');
			fclose($f);
			if (file_exists($global_path.$value_name.$global_extension)) {
				$success = true;
			}
		}
		return $success;
	}
	
	function db_delete($value_name) {
		$success = false;
		global $global_path;
		global $global_extension;
		if (file_exists($global_path.$value_name.$global_extension)) {
			unlink($global_path.$value_name.$global_extension);
			if (!file_exists($global_path.$value_name.$global_extension)) {
				$success = true;
			}
		}
		return $success;
	}
	
	function db_list() {
		global $global_path;
		global $global_extension;
		if ($handle = opendir($global_path)) {
			while (false !== ($entry = readdir($handle))) {
				if ($entry != "." && $entry != "..") {
					$out[] .= str_replace($global_extension, '', $entry);
				}
			}
			closedir($handle);
			sort($out);
		}
		return $out;
	}
	
	function db_write($db_name, $values) {
		$success = false;
		global $global_path;
		global $global_extension;
		if (file_exists($global_path.$db_name.$global_extension)) {
			$db_content = file_get_contents($global_path.$db_name.$global_extension);
			$rows = explode("\n", $db_content);
			$err = false;
			foreach ($rows as $db_row) {
				$dat = explode(' ', urldecode($db_row));
				$dat = $dat[0];
				$dat = explode('=', $dat);
				$dat = $dat[1];
				$dat2 = explode(' ', $values);
				$dat2 = $dat2[0];
				$dat2 = explode('=', $dat2);
				$dat2 = $dat2[1];
				if ($dat == $dat2) {
					$err = true;
					break;
				}
			}
			if ($err == false) {
				$f = fopen($global_path.$db_name.$global_extension, "w");
				fwrite($f, urlencode($values)."\n".$db_content);
				fclose($f);
				$success = true;
			}
		}
		return $success;
	}
	
	function db_rewrite($db_name, $values) {
		$success = false;
		global $global_path;
		global $global_extension;
		if (file_exists($global_path.$db_name.$global_extension)) {
			$db_content = file_get_contents($global_path.$db_name.$global_extension);
			$pairs2 = explode(' ', $values);
			$first2 = explode('=', $pairs2[0]);
			$rows = explode("\n", $db_content);
			$new_content = '';
			$f = fopen($global_path.$db_name.$global_extension, "w");
			foreach ($rows as $db_row) {
				if (strlen($db_row) !== 0) {  //do not rewrite empty lines
					$pairs1 = explode(' ', urldecode($db_row));
					$first1 = explode('=', $pairs1[0]);
					if ($first1[0] == $first2[0] && $first1[1] == $first2[1]) {
						$new_content .= urlencode($values)."\n";
						$success = true;
					} else {
						$new_content .= $db_row."\n";
					}
				}
			}
			fwrite($f, $new_content);
			fclose($f);
		}
		return $success;
	}
	
	function db_writearr($db_name, $multi, $isreversed) {
		$success = false;
		global $global_path;
		global $global_extension;
		if (file_exists($global_path.$db_name.$global_extension)) {
			$db_content = file_get_contents($global_path.$db_name.$global_extension);
			$rows = explode("\n", $db_content);
			$append = '';
			$success = 0;
			
			if ($isreversed == true) {
				array_reverse($multi);
			}
			
			foreach ($multi as $values) {
					foreach ($rows as $db_row) {
						$dat = explode(' ', urldecode($db_row));
						$dat = $dat[0];
						$dat = explode('=', $dat);
						$dat = $dat[1];
						$dat2 = explode(' ', $values);
						$dat2 = $dat2[0];
						$dat2 = explode('=', $dat2);
						$dat2 = $dat2[1];
						if ($dat == $dat2) {
							$err = true;
							break;
						}
					}
					if ($err == false) {
						$append .= urlencode($values)."\n";
						$success += 1;
					}
			}
			$f = fopen($global_path.$db_name.$global_extension, "w");
			fwrite($f, $append.$db_content);
			fclose($f);
			if ($success > 0) {
				$success = true;
			} else {
				$success = false;
			}
		}
		return $success;
	}

	function db_rowdelete($db_name, $values, $is_search=false, $is_inverted_search=false) {
		$success = false;
		global $global_path;
		global $global_extension;
		if (file_exists($global_path.$db_name.$global_extension)) {
			$db_content = file_get_contents($global_path.$db_name.$global_extension);
			$pairs2 = explode(' ', $values);
			$first2 = explode('=', $pairs2[0]);
			$rows = explode("\n", $db_content);
			$new_content = '';
			$f = fopen($global_path.$db_name.$global_extension, "w");
			foreach ($rows as $db_row) {
				if (strlen($db_row) !== 0) {  //do not rewrite empty lines
					$rowpairs = explode(' ', urldecode($db_row));
					$found = false;
					
					foreach ($rowpairs as $rowpair) {
						$first1 = explode('=', $rowpair);
						
						if ($is_inverted_search == true) {
							if ($is_search == true) {
								if ($first1[0] == $first2[0] && strpos($first1[1], $first2[1]) == false) { $success = true; $found = true; }
							} else {
								if ($first1[0] == $first2[0] && $first1[1] !== $first2[1]) { $success = true; $found = true; }
							}
						} else {
							if ($is_search == true) {
								if ($first1[0] == $first2[0] && strpos($first1[1], $first2[1]) !== false) { $success = true; $found = true; }
							} else {
								if ($first1[0] == $first2[0] && $first1[1] == $first2[1]) { $success = true; $found = true; }
							}
						}
					}
					
					if ($found == false) {
						$new_content .= $db_row."\n";
					}
					
				}
			}
			fwrite($f, $new_content);
			fclose($f);
		}
		return $success;
	}
	
	function db_read($db_name, $search, $rowreturn) {
		global $global_path;
		global $global_extension;
		if (file_exists($global_path.$db_name.$global_extension)) {
			$db_content = file_get_contents($global_path.$db_name.$global_extension);
			$rows = explode("\n", $db_content);
			$return_arr = array();
			$result = '';
			foreach ($rows as $db_row) {
				if (!strlen($db_row) > 0) { break; }
				$col_arr = explode(' ', urldecode($db_row));
				$search_arr = explode(' ', $search);
				$field_arr = explode(' ', $rowreturn);
				foreach ($col_arr as $col) {
					$pair1 = explode('=', $col);
					$name1 = $pair1[0]; $value1 = $pair1[1];
					
					if ($search == '') {
								
								foreach ($field_arr as $field) {
									foreach ($col_arr as $col3) {
										$pair3 = explode('=', $col3);
										$name3 = $pair3[0]; $value3 = $pair3[1];
										if ($name3 == $field) {
											$result .= urlencode($value3).',';
										}
									}
								}
								break;
						
					} else {
						
					foreach ($search_arr as $keyword) {
						$pair2 = explode('=', $keyword);
						$name2 = $pair2[0]; $value2 = $pair2[1];
						if ($name1 == $name2) {
							if (strpos($value1, $value2) !== false) {
								foreach ($field_arr as $field) {
									foreach ($col_arr as $col3) {
										$pair3 = explode('=', $col3);
										$name3 = $pair3[0]; $value3 = $pair3[1];
										if ($name3 == $field) {
											$result .= urlencode($value3).',';
										}
									}
								}
								break;
							}
						}
					}
						
					}
					
				}
				if ($search !== '') {
					if (count($search_arr) == count($result)) {
						if ($result !== "") { $return_arr[] .= $result; $result = ''; }
					}
				} else {
					if ($result !== "") { $return_arr[] .= $result; $result = ''; }
					$result = '';
				}
			}
		}
		return $return_arr;
	}
	
	function db_column_names($db_name, $row_num) {
		global $global_path;
		global $global_extension;
		$db_content = file_get_contents($global_path.$db_name.$global_extension);
		$rows = explode("\n", $db_content);
		$return_arr = array();
		$num = 1;
		foreach ($rows as $db_row) {
			if ($num == $row_num || $row_num == 0) {
				if (!strlen($db_row) > 0) { break; }
				$col_arr = explode(' ', urldecode($db_row));
				foreach ($col_arr as $col) {
					$pair1 = explode('=', $col);
					$name1 = $pair1[0]; $value1 = $pair1[1];
					$return_arr[$num - 1][] .= $name1;
				}
				if ($row_num > 0) { break; }
			}
			$num += 1;
		}
		return $return_arr;
	}
	
	function db_column_values($db_name, $row_num) {
		global $global_path;
		global $global_extension;
		$db_content = file_get_contents($global_path.$db_name.$global_extension);
		$rows = explode("\n", $db_content);
		$return_arr = array();
		$num = 1;
		foreach ($rows as $db_row) {
			if ($num == $row_num || $row_num == 0) {
				if (!strlen($db_row) > 0) { break; }
				$col_arr = explode(' ', urldecode($db_row));
				foreach ($col_arr as $col) {
					$pair1 = explode('=', $col);
					$name1 = $pair1[0]; $value1 = $pair1[1];
					$return_arr[$num - 1][] .= $value1;
				}
				if ($row_num > 0) { break; }
			}
			$num += 1;
		}
		return $return_arr;
	}
	
	function db_rows($db_name) {
		global $global_path;
		global $global_extension;
		$db_content = file_get_contents($global_path.$db_name.$global_extension);
		$rows = explode("\n", $db_content);
		return count($rows) - 1;
	}
	
	function db_column($row, $int) {
		$arr = explode(',', $row);
		$value = '';
		if ($int < count($arr)) {
			$value = urldecode($arr[$int]);
		}
		return $value;
	}
	
	function en($str) {
		$encoded = 'encoded:';
		$encoded .= base64_encode($str);
		$encoded = str_replace('=', '^', $encoded);
		return $encoded;
	}
	
	function de($str) {
		$parts = explode(':', $str);
		$decoded = str_replace('^', '=', $parts[1]);
		$decoded = base64_decode($decoded);
		return $decoded;
	}
	
	function printsafe($str) {
		$str = str_replace('>', '&gt', $str);
		$str = str_replace('<', '&lt', $str);
		$str = str_replace('"', '&quot;', $str);
		$str = str_replace("'", '&apos;', $str);
		return $str;
	}
	
	function db_export($db_name, $format, $encoded, $download) {
		$rows = db_rows($db_name);
		$names = db_column_names($db_name, 1);
		$values = db_column_values($db_name, 0);

		if ($format == 'csv') {
			$csv = '';
			$line = '';
			foreach ($names[0] as $name) {
				$n = $name;
				if (strpos($name, ',') !== false) {
					$line .= '"' . $n . '",';
				} else {
					$line .= $n . ',';
				}
			}
			$line = substr($line, 0, -1);
			$csv .= $line; $line = '';
			$csv .= PHP_EOL;
			foreach ($values as $value) {
				foreach ($value as $v) {
					$n = $v;
					if ($encoded == true) { $n = de($n); }
					$n = str_replace("\r\n", '\n', $n);
					$n = str_replace(PHP_EOL, '\n', $n);
					$n = str_replace("\t", '\t', $n);
					$n = str_replace('"', '\"', $n);
					if (strpos($n, ',') !== false) {
						$line .= '"' . $n . '",';
					} else {
						$line .= $n . ',';
					}
				}
				$line = substr($line, 0, -1);
				$csv .= $line; $line = '';
				$csv .= PHP_EOL;
			}
			if ($download == true) {
				header('Content-Type: text/csv');
				header('Content-Disposition: attachment; filename="'.$db_name.'.csv"');
				echo $csv; die();
			}
			return $csv;
		}
	}
	
	include($alphaRoot.'components/addons.php');
?>